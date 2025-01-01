<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\HeroSection;

class MainController extends Controller
{
    public function index()
    {
        $heroSections = HeroSection::where('is_active', true)->get();
        $facilities = Facility::where('is_active', true)->get();

        return view('main.index', compact('heroSections', 'facilities'));
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
