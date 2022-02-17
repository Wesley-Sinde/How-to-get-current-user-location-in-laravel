<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function ip_details()
    {
       // $ip = '197.248.45.195'; //For static IP address get
        $ip = '41.139.222.63'; //For static IP address get
        //$ip = request()->ip(); //Dynamic IP address get
        $data = \Location::get($ip);                
        return view('details',compact('data'));
    }
}