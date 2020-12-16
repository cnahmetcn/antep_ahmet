<?php

namespace App\Http\Controllers;

use App\Imports\UserImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AboutController extends Controller
{
    public function kisiler()
    {
       // $users=DB::table('users')->get();
       // $users=User::all(); // tüm kayıtları gösteirri
       $users=User::paginate(5); // Tüm kayıtları gösterir ancak her sayfada 5 tane olacak şekilde
        $user=User::all();
       // $name=$users->name;
       // $job='Full Stack Developer (İşsiz)';
       // $city='Kayseri';
        return view('kisiler',compact('users'));
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

    public function create()
    {
        $kisiler=User::all();
        return view('kisiekle',compact('kisiler'));
    }

    public function store(Request $request)
    {
        $name= $request->name;
        $email= $request->email;
        $password= $request->password;
        User::create([
            'name'=>$name,
            'email'=>$email,
            'password' => $password,

        ]);
        return back();
    }

    public function import()
    {
        Excel::import(new UserImport, request()->file('file'));
        return back();
    }
}
