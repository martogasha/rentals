<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function property(){
        return view('admin.property');
    }
    public function addProperty(){
        return view('admin.addProperty');
    }
    public function propertyDetail(){
        return view('admin.propertyDetail');
    }
    public function orders(){
        return view('admin.orders');
    }
}
