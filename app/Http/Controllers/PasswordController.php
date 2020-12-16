<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PasswordController extends Controller
{
    public function index()
    {
        return view('forgotpass');
    }

    public function sendPassword(Request $request)
    {


        $phone=$request->get('phone');
        $password=mt_rand(100000,999999);
        $new_password=Hash::make($password);
       if (User::where('phone', '=', $phone)) {

        $basic  = new \Nexmo\Client\Credentials\Basic('c466b1dc', 'zTjpT7TCKuKUjr5V');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' => '90'.$phone,
            'from' => 'Ahmet Can',
            'text' => 'Talebiniz uzerine sifreniz degişmiştir.Yeni sifreniz :'.$password.' Lutfen Sifrenizi Degistiriniz...'
        ]);

           User::where('phone',$phone)
               ->update(['password'=>$new_password]);
            return redirect()->back();

        }


    }
}
