<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/home');
    }

    public function profile()
    {
        return view('pages/profile');
    }

    public function gallery()
    {
        return view('pages/gallery');
    }

    public function contact()
    {
        return view('pages/contact');
    }
}
