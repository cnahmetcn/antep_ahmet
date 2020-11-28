<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function hakkimda()
    {
        $name='Ahmet Can';
        $job='Full Stack Developer (İşsiz)';
        $city='Kayseri';
        return view('hakkimda',compact('name','job','city'));
    }
}
