<?php

namespace App\Http\Controllers;

use App\Models\Ogani;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class OganiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::all();
        $products=Product::all();
        $categories=Category::all();
        return view('ogani.index',compact('blogs','products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ogani  $ogani
     * @return \Illuminate\Http\Response
     */
    public function show(Ogani $ogani)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ogani  $ogani
     * @return \Illuminate\Http\Response
     */
    public function edit(Ogani $ogani)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ogani  $ogani
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ogani $ogani)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ogani  $ogani
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ogani $ogani)
    {
        //
    }
}
