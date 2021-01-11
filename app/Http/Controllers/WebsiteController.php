<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    function index(){
        return view("website.index");
    }
    function about(){
        return view("website.about");
    }
    function store(){
        return view("website.store");
    }
    function products(){
        return view("website.products");
    }


}

