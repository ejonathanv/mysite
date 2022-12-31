<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        return view('site.index');
    }

    public function about()
    {
        return view('site.about');
    }

    public function websites()
    {
        return view('site.websites');
    }

    public function start()
    {
        return view('site.start-project');
    }

    public function terms()
    {
        return view('site.terms');
    }

    public function login()
    {
        return view('site.login');
    }
}
