<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function try($try)
    {
        $name= "guess".$try;
        return view('pages.home', compact('name'));
    }
}
