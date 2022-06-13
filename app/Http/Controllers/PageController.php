<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $hello = 'Hello World!';
        return view('home', compact('hello'));
    }
}
