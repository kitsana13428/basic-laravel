<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index() {
        $city = "123 อยุธยา ประเทศไทย";
        $tel = "081 xxx xxxx";
        $email = "kitxxxx@gxxx.com";
        return view('about',compact('city','tel','email')); // compact ทำให้เขียนสั้นขึ้น
        /*
        return view('about')
        -> with ('address',$address)
        -> with ('tel', $tel)
        การส่งค่าแบบ with ส่งแบบ value + key*/
    }
}
