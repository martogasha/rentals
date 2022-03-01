<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function propertyDetail(){
        return view('propertyDetail');
    }
    public function shop(){
        return view('shop');
    }
}
