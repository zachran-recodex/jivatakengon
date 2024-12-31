<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function about()
    {
        return view('main.about');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function event()
    {
        return view('main.event');
    }

    public function gallery()
    {
        return view('main.gallery');
    }

    public function service()
    {
        return view('main.service');
    }

    public function serviceDetail()
    {
        return view('main.service-detail');
    }

    public function blog()
    {
        return view('main.blog');
    }

    public function blogDetail()
    {
        return view('main.blog-detail');
    }
}
