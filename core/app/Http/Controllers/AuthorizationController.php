<?php

namespace App\Http\Controllers;

use App\Lib\GoogleAuthenticator;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Auth;


class AuthorizationController extends Controller
{
    public function __construct()
    {
        return $this->activeTemplate = activeTemplate();
    }

    public function checkValidCode($user, $code, $add_min = 10000)
    {
        if (!$code) return false;
        if (!$user->ver_code_send_at) return false;
        if ($user->ver_code_send_at->addMinutes($add_min) < Carbon::now()) return false;
        if ($user->ver_code !== $code) return false;
        return true;
    }


    public function authorizeForm()
    {

        if (auth()->check()) {
            $view = $this->activeTemplate.'user.auth.authorize';
            $user = auth()->user();
            if (!$user->status) {
                $page_title = 'Your Account has been blocked';
                return view($view, compact('user', 'page_title'));
            }
            elseif (!$user->ev) {
                if (!$this->checkValidCode($user, $user->ver_code)) {
                    $user->ver_code = verificationCode(6);
                    $user->ver_code_send_at = Carbon::now();
                    $user->save();
                    send_email($user, 'EVER_CODE', [
                        'code' => $user->ver_code
                    ]);
                }
                $page_title = 'Email verification form';
                return view($view, compact('user', 'page_title'));
            }
            elseif (!$user->sv) {
                if (!$this->checkValidCode($user, $user->ver_code)) {
                    $user->ver_code = verificationCode(6);
                    $user->ver_code_send_at = Carbon::now();
                    $user->save();
                    send_sms($user, 'SVER_CODE', [
                        'code' => $user->ver_code
                    ]);
                }
                $page_title = 'SMS verification form';
                return view($view, compact('user', 'page_title'));
            }
            elseif (!$user->tv) {
                $page_title = 'Google Authenticator';
                return view($view, compact('user', 'page_title'));
            }

        }

        return redirect()->route('user.register');
    }

    public function sendVerifyCode(Request $request)
    {
        $user = Auth::user();


        if ($this->checkValidCode($user, $user->ver_code, 2)) {
            $target_time = $user->ver_code_send_at->addMinutes(2)->timestamp;
            $delay = $target_time - time();
            throw ValidationException::withMessages(['resend' => 'Please Try after ' . $delay . ' Seconds']);
        }
        if (!$this->checkValidCode($user, $user->ver_code)) {
            $user->ver_code = verificationCode(6);
            $user->ver_code_send_at = Carbon::now();
            $user->save();
        } else {
            $user->ver_code = $user->ver_code;
            $user->ver_code_send_at = Carbon::now();
            $user->save();
        }



        if ($request->type === 'email') {
            send_email($user, 'EVER_CODE',[
                'code' => $user->ver_code
            ]);

            $notify[] = ['success', 'Email verification code sent successfully'];
            return back()->withNotify($notify);
        } elseif ($request->type === 'phone') {
            send_sms($user, 'SVER_CODE', [
                'code' => $user->ver_code
            ]);
            $notify[] = ['success', 'SMS verification code sent successfully'];
            return back()->withNotify($notify);
        } else {
            throw ValidationException::withMessages(['resend' => 'Sending Failed']);
        }
    }

    public function emailVerification(Request $request)
    {

        $request->validate([
            'email_verified_code.*' => 'required',
        ], [
            'email_verified_code.required' => 'Email verification code is required',
        ]);


        //$email_verified_code =  str_replace(',','',implode(',',$request->email_verified_code));
        $email_verified_code =  $request->email_verified_code;


        $user = Auth::user();

        if ($this->checkValidCode($user, $email_verified_code)) {
            $user->ev = 1;
            $user->ver_code = null;
            $user->ver_code_send_at = null;
            $user->save();
            return redirect()->intended(route('user.home'));
        }
        throw ValidationException::withMessages(['email_verified_code' => 'Verification code didn\'t match!']);
    }

    public function smsVerification(Request $request)
    {
        $request->validate([
            'sms_verified_code.*' => 'required',
        ], [
            'sms_verified_code.required' => 'SMS verification code is required',
        ]);


        //$sms_verified_code =  str_replace(',','',implode(',',$request->sms_verified_code));
        $sms_verified_code =  $request->sms_verified_code;

        $user = Auth::user();
        if ($this->checkValidCode($user, $sms_verified_code)) {
            $user->sv = 1;
            $user->ver_code = null;
            $user->ver_code_send_at = null;
            $user->save();
            return redirect()->intended(route('user.home'));
        }
        throw ValidationException::withMessages(['sms_verified_code' => 'Verification code didn\'t match!']);
    }
    public function g2faVerification(Request $request)
    {
        $user = auth()->user();

        $this->validate(
            $request,[
                'code.*' => 'required',
            ]);
        $ga = new GoogleAuthenticator();


        //$code =  str_replace(',','',implode(',',$request->code));
        $code =  $request->code;

        $secret = $user->tsc;
        $oneCode = $ga->getCode($secret);
        $userCode = $code;
        if ($oneCode == $userCode) {
            $user->tv = 1;
            $user->save();
            return redirect()->route('user.home');
        } else {
            $notify[] = ['error', 'Wrong Verification Code'];
            return back()->withNotify($notify);
        }
    }
}
