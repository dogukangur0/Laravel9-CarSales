<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
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
        /*echo "Save Function<br>";
        echo "First Name:",$_REQUEST["fname"];
        echo "<br>Last Name:",$_REQUEST["lname"];*/

        return view('home.test2',
        [
            'id'=>$_REQUEST["fname"],
            'number'=>$_REQUEST["lname"]
        ]);
    }
}
