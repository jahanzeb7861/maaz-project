<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Deposit;
use App\Gateway;
use App\GeneralSetting;
use App\Http\Controllers\Controller;
use App\Order;
use App\Point;
use App\Referral;
use App\User;
use App\UserLogin;
use App\WithdrawMethod;
use App\Withdrawal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function dashboard()
    {
        $page_title = 'Dashboard';

        // User Info
        $widget['total_users'] = User::count();
        $widget['verified_users'] = User::where('status', 1)->count();
        $widget['sms_unverified_users'] = User::where('sv', 0)->count();
        $widget['email_unverified_users'] = User::where('ev', 0)->count();
        $widget['pending_orders'] = Order::where('status', 'Pending')->count();
        $widget['completed_orders'] = Order::where('status', 'Completed')->count();


        // Monthly Deposit & Withdraw Report Graph
        $report['months'] = collect([]);
        $report['deposit_month_amount'] = collect([]);
        $report['withdraw_month_amount'] = collect([]);

        $depositsMonth = Deposit::whereYear('created_at', '>=', Carbon::now()->subYear())
            ->selectRaw("SUM( CASE WHEN status = 1 THEN amount END) as depositAmount")
            ->selectRaw("DATE_FORMAT(created_at,'%M') as months")
            ->orderBy('created_at')
            ->groupBy(DB::Raw("MONTH(created_at)"))->get();

        $depositsMonth->map(function ($aaa) use ($report) {
            $report['months']->push($aaa->months);
            $report['deposit_month_amount']->push(getAmount($aaa->depositAmount));
        });

        $withdrawalMonth = Withdrawal::whereYear('created_at', '>=', Carbon::now()->subYear())->where('status', 1)
            ->selectRaw("SUM( CASE WHEN status = 1 THEN amount END) as withdrawAmount")
            ->selectRaw("DATE_FORMAT(created_at,'%M') as months")
            ->orderBy('created_at')
            ->groupBy(DB::Raw("MONTH(created_at)"))->get();
        $withdrawalMonth->map(function ($bb) use ($report){
            $report['withdraw_month_amount']->push(getAmount($bb->withdrawAmount));
        });




        // Withdraw Graph
        $withdrawal = Withdrawal::where('created_at', '>=', \Carbon\Carbon::now()->subDays(30))->where('status', 1)
            ->select(array(DB::Raw('sum(amount)   as totalAmount'), DB::Raw('DATE(created_at) day')))
            ->groupBy('day')->get();
        $withdrawals['per_day'] = collect([]);
        $withdrawals['per_day_amount'] = collect([]);
        $withdrawal->map(function ($a) use ($withdrawals) {
            $withdrawals['per_day']->push(date('d M', strtotime($a->day)));
            $withdrawals['per_day_amount']->push($a->totalAmount + 0);
        });


        // user Browsing, Country, Operating Log
        $user_login_data = UserLogin::whereDate('created_at', '>=', \Carbon\Carbon::now()->subDay(30))->get(['browser', 'os', 'country']);

        $chart['user_browser_counter'] = $user_login_data->groupBy('browser')->map(function ($item, $key) {
            return collect($item)->count();
        });
        $chart['user_os_counter'] = $user_login_data->groupBy('os')->map(function ($item, $key) {
            return collect($item)->count();
        });
        $chart['user_country_counter'] = $user_login_data->groupBy('country')->map(function ($item, $key) {
            return collect($item)->count();
        })->sort()->reverse()->take(5);



        $payment['payment_method'] = Gateway::count();
        $payment['total_deposit_amount'] = Deposit::where('status',1)->sum('amount');
        $payment['total_deposit_charge'] = Deposit::where('status',1)->sum('charge');
        $payment['total_deposit_pending'] = Deposit::where('status',2)->count();

        $paymentWithdraw['withdraw_method'] = WithdrawMethod::count();
        $paymentWithdraw['total_withdraw_amount'] = Withdrawal::where('status',1)->sum('amount');
        $paymentWithdraw['total_withdraw_charge'] = Withdrawal::where('status',1)->sum('charge');
        $paymentWithdraw['total_withdraw_pending'] = Withdrawal::where('status',2)->count();


        $latestUser = User::latest()->limit(6)->get();

        $user = Auth::user();

        // $user = Admin::where('username',$userData->username)->first();

        return view('admin.dashboard', compact('page_title', 'widget', 'report', 'withdrawals', 'chart','payment','paymentWithdraw','latestUser','user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'mobile' => 'required|string|max:15',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);


        Admin::create([
            'name' => $request->firstname.' '.$request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->back()->with('success', 'User created successfully.');
    }


    public function profile()
    {
        $page_title = 'Profile';
        $admin = Auth::guard('admin')->user();
        return view('admin.profile', compact('page_title', 'admin'));
    }

    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);

        $user = Auth::guard('admin')->user();

        if ($request->hasFile('image')) {
            try {
                $old = $user->image ?: null;
                $user->image = uploadImage($request->image, 'assets/admin/images/profile/', '400X400', $old);
            } catch (\Exception $exp) {
                $notify[] = ['error', 'Image could not be uploaded.'];
                return back()->withNotify($notify);
            }
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        $notify[] = ['success', 'Your profile has been updated.'];
        return redirect()->route('admin.profile')->withNotify($notify);
    }


    public function password()
    {
        $page_title = 'Password Setting';
        $admin = Auth::guard('admin')->user();
        return view('admin.password', compact('page_title', 'admin'));
    }

    public function passwordUpdate(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|min:5|confirmed',
        ]);

        $user = Auth::guard('admin')->user();
        if (!Hash::check($request->old_password, $user->password)) {
            $notify[] = ['error', 'Password Do not match !!'];
            return back()->withErrors(['Invalid old password.']);
        }
        $user->update([
            'password' => bcrypt($request->password)
        ]);
        $notify[] = ['success', 'Password Changed Successfully.'];
        return redirect()->route('admin.password')->withNotify($notify);
    }


    public function referrals()
    {
        $page_title = 'Manage Referral Commission';
        $refs = Referral::get();
        return view('admin.referrals',compact('page_title', 'refs'));

    }

    public function points()
    {
        $page_title = 'Manage Referral Points Commission';
        $refs = Point::get();
        return view('admin.points',compact('page_title', 'refs'));
    }

    public function referralsUpdate(Request $request)
    {
        $this->validate($request, [
            'level*' => 'required|integer|min:1',
            'percent*' => 'required|numeric',
        ]);

        Referral::truncate();

        for ($a = 0; $a < count($request->level); $a++){
            Referral::create([
                'level' => $request->level[$a],
                'percent' => $request->percent[$a],
                'status' => 1,
            ]);
        }

        $notify[] = ['success', 'Referral Commission Setting Updated Successfully'];
        return back()->withNotify($notify);

    }

    public function referralsWhen(Request $request)
    {
        $general = GeneralSetting::first();
        $general->ref_depo = isset($request->ref_depo) ? 1 : 0;
        $general->ref_upgr = isset($request->ref_upgr) ? 1 : 0;
        $general->ref_ptc = isset($request->ref_ptc) ? 1 : 0;
        $general->save();

        $notify[] = ['success', 'Updated Successfully'];
        return back()->withNotify($notify);
    }


}
