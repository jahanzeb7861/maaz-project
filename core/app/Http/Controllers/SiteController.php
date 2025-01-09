<?php

namespace App\Http\Controllers;

use App\Frontend;
use App\Language;
use App\Page;
use App\SupportAttachment;
use App\SupportMessage;
use App\SupportTicket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index(){
        $activeTemplate = activeTemplate();
        $count = Page::where('tempname',$activeTemplate)->where('slug','home')->count();
        if($count == 0){
            $in['tempname'] = $activeTemplate;
            $in['name'] = 'HOME';
            $in['slug'] = 'home';
            Page::create($in);
        }

        $data['page_title'] = 'Home';
        $data['sections'] = Page::where('tempname',$activeTemplate)->where('slug','home')->firstOrFail();

        $data['categories'] = \DB::table('categories')->get();

        // dd($data);
        return view($activeTemplate . 'home', $data);
    }

    public function blog()
    {
        $activeTemplate = activeTemplate();
        $count = Page::where('tempname',$activeTemplate)->where('slug','blog')->count();
        if($count == 0){
            $in['tempname'] = $activeTemplate;
            $in['name'] = 'Blog';
            $in['slug'] = 'blog';
            Page::create($in);
        }
        $data['page_title'] = 'Blog';
        $data['sections'] = Page::where('tempname',$activeTemplate)->where('slug','blog')->firstOrFail();
        $data['blogs'] = Frontend::where('data_keys','blog.element')->orderBy('id','desc')->paginate(getPaginate());
        return view($activeTemplate . 'blog.blogs', $data);
    }

    public function blogDetail($id)
    {
        $page_title = "Blog Details";
        $blog = Frontend::findOrFail($id);
        if(!$blog || $blog->data_keys != 'blog.element'){
            return view('errors.404');
        }
        $blog->increment('view');
        $blogs = Frontend::where('data_keys','blog.element')->get();
        return view(activeTemplate() . 'blog.details', compact('page_title','blog','blogs'));
    }

    public function about()
    {
        $activeTemplate = activeTemplate();
        $count = Page::where('tempname',$activeTemplate)->where('slug','about')->count();
        if($count == 0){
            $in['tempname'] = $activeTemplate;
            $in['name'] = 'About';
            $in['slug'] = 'about';
            Page::create($in);
        }
        $data['page_title'] = 'About';
        $data['sections'] = Page::where('tempname',$activeTemplate)->where('slug','about')->firstOrFail();
        return view($activeTemplate . 'about', $data);
    }

    public function faqs()
    {
        $activeTemplate = activeTemplate();
        $count = Page::where('tempname',$activeTemplate)->where('slug','faq')->count();
        if($count == 0){
            $in['tempname'] = $activeTemplate;
            $in['name'] = 'FAQ';
            $in['slug'] = 'faq';
            Page::create($in);
        }
        $data['page_title'] = 'FAQ';
        $data['sections'] = Page::where('tempname',$activeTemplate)->where('slug','faq')->firstOrFail();
        return view($activeTemplate . 'faqs', $data);
    }

    public function cart()
    {
        $activeTemplate = activeTemplate();
        $count = Page::where('tempname',$activeTemplate)->where('slug','cart')->count();
        if($count == 0){
            $in['tempname'] = $activeTemplate;
            $in['name'] = 'Cart';
            $in['slug'] = 'cart';
            Page::create($in);
        }
        $data['page_title'] = 'FAQ';
        $data['sections'] = Page::where('tempname',$activeTemplate)->where('slug','cart')->firstOrFail();
        return view($activeTemplate . 'cart', $data);
    }


    public function pages($slug)
    {
        $activeTemplate = activeTemplate();
        $page = Page::where('tempname',$activeTemplate)->where('slug',$slug)->firstOrFail();
        $data['page_title'] = $page->name;
        $data['sections'] = $page;
        return view($activeTemplate . 'pages', $data);
    }

    public function categoryPage($slug)
    {
        $activeTemplate = activeTemplate();

        $category = DB::table('categories')->where('slug', $slug)->first();
        if (!$category) {
            abort(404);
        }

        $brands = DB::table('brands')->where('category_id', $category->id)->get();

        // $data['page_title'] = 'FAQ';
        // $data['sections'] = Page::where('tempname',$activeTemplate)->where('slug','faq')->firstOrFail();
        return view('templates.basic.category', ['brands'=> $brands]);
    }

    public function brandPage($categorySlug,$brandSlug)
    {
        $category = DB::table('categories')->where('slug', $categorySlug)->first();
        if (!$category) {
            abort(404);
        }

        $brand = DB::table('brands')->where('category_id', $category->id)->where('slug', $brandSlug)->first();
        if (!$brand) {
            abort(404);
        }

        $models = DB::table('product_models')->where('category_id', $category->id)->where('brand_id', $brand->id)->get();

        return view('templates.basic.models', ['models'=> $models]);
    }

    // placeOrder
    public function placeOrder(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:20',
            'location' => 'required',
            'brandId' => 'required',
            'categoryId' => 'required',
            'product_model_id' => 'required',
        ]);


        $order = DB::table('orders')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'brand_id' => $request->brandId,
            'category_id' => $request->categoryId,
            'product_model_id' => $request->product_model_id,
            'status' => 'Pending',
            'created_at' => now(),
        ]);

        // return response()->json([
        //     'success' => 'Order placed successfully!'
        // ]);

        if($order){
            return response()->json([
                'success' => 'Order placed successfully!'
            ]);
        } else {
            return response()->json([
                'error' => 'Failed to place order!'
            ]);
        }

        return view('templates.basic.models', ['models'=> $models]);
    }

    public function contact()
    {
        $activeTemplate = activeTemplate();
        $count = Page::where('tempname',$activeTemplate)->where('slug','contact')->count();
        if($count == 0){
            $in['tempname'] = $activeTemplate;
            $in['name'] = 'Contact';
            $in['slug'] = 'contact';
            Page::create($in);
        }
        $data['page_title'] = 'Contact';
        $data['sections'] = Page::where('tempname',$activeTemplate)->where('slug','contact')->firstOrFail();
        return view($activeTemplate . 'contact', $data);
    }


    public function contactSubmit(Request $request)
    {
        $ticket = new SupportTicket();
        $message = new SupportMessage();

        $imgs = $request->file('attachments');
        $allowedExts = array('jpg', 'png', 'jpeg', 'pdf');

        $this->validate($request, [
            'attachments' => [
                'sometimes',
                'max:4096',
                function ($attribute, $value, $fail) use ($imgs, $allowedExts) {
                    foreach ($imgs as $img) {
                        $ext = strtolower($img->getClientOriginalExtension());
                        if (($img->getSize() / 1000000) > 2) {
                            return $fail("Images MAX  2MB ALLOW!");
                        }
                        if (!in_array($ext, $allowedExts)) {
                            return $fail("Only png, jpg, jpeg, pdf images are allowed");
                        }
                    }
                    if (count($imgs) > 5) {
                        return $fail("Maximum 5 images can be uploaded");
                    }
                },
            ],
            'name' => 'required|max:191',
            'email' => 'required|max:191',
            'subject' => 'required|max:100',
            'message' => 'required',
        ]);


        $random = getNumber();

        $ticket->user_id = auth()->id();
        $ticket->name = $request->name;
        $ticket->email = $request->email;


        $ticket->ticket = $random;
        $ticket->subject = $request->subject;
        $ticket->last_reply = Carbon::now();
        $ticket->status = 0;
        $ticket->save();

        $message->supportticket_id = $ticket->id;
        $message->message = $request->message;
        $message->save();

        $path = imagePath()['ticket']['path'];

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $image) {
                try {
                    SupportAttachment::create([
                        'support_message_id' => $message->id,
                        'image' => uploadImage($image, $path),
                    ]);
                } catch (\Exception $exp) {
                    $notify[] = ['error', 'Could not upload your ' . $image];
                    return back()->withNotify($notify)->withInput();
                }

            }
        }
        $notify[] = ['success', 'ticket created successfully!'];

        return redirect()->route('ticket.view', [$ticket->ticket])->withNotify($notify);
    }

    public function lang($lang){
        $language = Language::where('code', $lang)->first();
        if (!$language) $lang = 'en';
        session()->put('lang', $lang);
        return redirect()->back();
    }

    public function policy($id,$slug){
        $item = Frontend::where('id',$id)->where('data_keys','footer_link.element')->firstOrFail();
        $page_title = $item->data_values->title;
        return view(activeTemplate().'policy',compact('page_title','item'));
    }

}
