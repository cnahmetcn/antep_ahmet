<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function hakkimda()
    {
        $users=DB::table('users')->get();
       // $name=$users->name;
       // $job='Full Stack Developer (İşsiz)';
       // $city='Kayseri';
        return view('hakkimda',compact('users'));
    }

    public function urunler()
    {
        $products=DB::table('products')->get();
        return view('urunler',compact('products'));
    }

    public function satis()
    {
        $satis=DB::table('user_products')
            ->leftjoin('users', 'user_products.user_id', '=', 'users.id')
            ->leftjoin('products', 'user_products.product_id', '=', 'products.id')
            ->select('user_products.*','users.name as username', 'products.name as productname', 'products.price')
            ->get();
        return view('satis',compact('satis'));
    }
}
