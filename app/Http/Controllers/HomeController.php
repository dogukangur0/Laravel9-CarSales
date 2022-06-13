<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }


    public function index()
    {
        $page='home';
        $sliderdata=Product::limit(4)->get();
        $productlist1=Product::limit(6)->get();
        $setting=Setting::first();

        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'productlist1'=>$productlist1
        ]);
    }

    public function cars()
    {
        $productlist2=Product::limit(20)->get();
        $setting=Setting::first();
        return view('home.cars',[
            'setting'=>$setting,
            'productlist2'=>$productlist2
        ]);
    }

    public function categoryproducts($id)
    {
        $category=Category::find($id);
        $products=DB::table('products')->where('category_id',$id)->get();
        return view('home.categoryproducts',[
            'category'=>$category,
            'products'=>$products
        ]);
    }

    public function aboutus()
    {
        $setting=Setting::first();
        return view('home.aboutus',[
            'setting'=>$setting,
        ]);
    }

    public function contact()
    {
        $setting=Setting::first();
        return view('home.contact',[
            'setting'=>$setting,
        ]);
    }

    public function reference()
    {
        $setting=Setting::first();
        return view('home.reference',[
            'setting'=>$setting,
        ]);
    }

    public function faq()
    {
        $setting=Faq::first();
        $datalist=Faq::all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }

    public function storemessage(Request $request)
    {
        $data=new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent, Thank you.');
    }

    public function storecomment(Request $request)
    {
        //dd($request);  // chech your values
        $data=new Comment();
        $data->user_id=Auth::id();  // Logged in user id
        $data->product_id=$request->input('product_id');
        $data->subject=$request->input('subject');
        $data->comment=$request->input('comment');
        $data->ip=request()->ip();
        $data->rate=$request->input('rate');
        $data->save();

        return redirect()->route('product',['id'=>$request->input('product_id')])->with('success','Your comment has been sent, Thank you.');
    }

    public function product($id)
    {
        $data=Product::find($id);
        $images=DB::table('images')->where('product_id',$id)->get();
        $reviews=Comment::where('product_id',$id)->where('status','True')->get();
        return view('home.product',[
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews

        ]);
    }

    public function test()
    {
        return view('home.test');
    }

    public function param($id,$number)
    {
        //echo "Parameter 1: ", $id;
        //echo "<br>Parameter 2: ", $number;
        //echo "<br>Sum Parameters: ",$id+$number;
        return view('home.test2',
        [
            'id'=> $id,
            'number'=> $number
        ]);
    }
    public function save()
    {
        echo "Save Function<br>";
        echo "First Name:",$_REQUEST["fname"];
        echo "<br>Last Name:",$_REQUEST["lname"];

        return view('home.test2',
        [
            'id'=>$_REQUEST["fname"],
            'number'=>$_REQUEST["lname"]
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}

