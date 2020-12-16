<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use SoapClient;

class PostmanController extends Controller
{
    public function products()
    {
        return Product::with(['user'])->get();
    }

    public function users()
    {
        return User::all();
    }

    public function categories()
    {
        return Category::all();
    }

    private $soapClient;

    public function __construct()
    {
        $this->soapClient = SoapClient("http://soap.netgsm.com.tr:8080/Sms_webservis/SMS?wsdl");
    }

    public function sendPasswordWithMessage($gsm = array())
    {
        try {
            $password = mt_rand(100000,999999);
            $newPass = Hash::make($password);
            $message = 'Yeni şifreniz: '. $password . 'Bu Şifreyi Sisteme Girdikten Sonra Lütfen Değiştirin';
            $this->soapClient->smsGonder1NV2([
                'username' => 'Kullanıcı Adı',
                'password' => 'Şifreniz',
                'header' => 'Ahmet Can',
                'msg' => $message,
                'gsm' => $gsm,
                'filter' => '',
                'startdate'  => '',
                'stopdate'  => '',
                'encoding' => 'TR',
            ]);
        } catch (\Exception $e) {
            echo "Soap Hatasi Olustu: " . $e->getMessage();
        }
    }
}
