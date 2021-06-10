<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index() {
        $city = "123 อยุธยา ประเทศไทย";
        $tel = "081 xxx xxxx";
        $email = "kitxxxx@gxxx.com";
        return view('about', ['adress'=>$city, 'tel'=>$tel, 'email'=>$email]); 
    }
}
