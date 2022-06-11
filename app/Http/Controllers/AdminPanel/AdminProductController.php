<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Carbon\Exceptions\BadComparisonUnitException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    /*public static function maincategorylist()
    {
        return Product::where('category_id','=',0)->with('children')->get();
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Product::all();
        return view('admin.product.index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=Category::all();
        return view('admin.product.create',[
            'data'=>$data
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=new Product();
        $data->category_id = $request->category_id;
        $data->user_id = 0;
        $data->brand_id = $request->brand_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->series = $request->series;
        $data->model = $request->model;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->year = $request->year;
        $data->fuel = $request->fuel;
        $data->gear = $request->gear;
        $data->km = $request->km;
        $data->casetype = $request->casetype;
        $data->motorpower = $request->motorpower;
        $data->color = $request->color;
        $data->guarantee = $request->guarantee;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,$id)
    {
        //
        $data=Product::find($id);
        return view('admin.product.show',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        //
        $data=Product::find($id);
        $datalist=Category::all();
        return view('admin.product.edit',[
            'data'=>$data,
            'datalist'=>$datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        //
        $data=Product::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->year = $request->year;
        $data->fuel = $request->fuel;
        $data->gear = $request->gear;
        $data->km = $request->km;
        $data->casetype = $request->casetype;
        $data->motorpower = $request->motorpower;
        $data->color = $request->color;
        $data->guarantee = $request->guarantee;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        //
        $data=Product::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/product');
    }
}
