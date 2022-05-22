<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
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

    public function product($id)
    {
        $data=Product::find($id);
        $images=DB::table('images')->where('product_id',$id)->get();

        return view('home.product',[
            'data'=>$data,
            'images'=>$images

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
}

