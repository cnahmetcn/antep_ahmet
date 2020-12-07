<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Imports\ProductImport;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * Ürün listesini göreceğimiz yer
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $product=Product::all();
        $product=Product::with(['user'])->get();
        return view('product.index',compact('product'));


    }

    /**
     * Show the form for creating a new resource.
     * Ürün ekleme formu
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        $categories=Category::all();
        return view('product.create',compact('categories','users'));
    }

    /**
     * Store a newly created resource in storage.
     * Db kaydı
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->get('name');
        $description=$request->get('description');
        $category_id=$request->get('category_id');
        $price=$request->get('price');
        $created_by=$request->user_id;
        Product::create([
            'name'=>$name,
            'description'=>$description,
            'category_id'=>$category_id,
            'price'=>$price,
            'created_by'=>$created_by

        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function export()
    {
    return Excel::download(new ProductExport,'product.xlsx');
    }

    public function import()
    {
        Excel::import(new ProductImport, request()->file('file'));
        return back();
    }
}
