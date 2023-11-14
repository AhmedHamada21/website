<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about.index');
    }

    public function blog()
    {
        return view('front.blog.index');
    }
    public function showBlog()
    {
        return view('front.blog.show');
    }
    public function checkout()
    {
        return view('front.checkout.index');
    }

    public function contact()
    {
        return view('front.contact.index');
    }


    public function legal()
    {
        return view('front.legal.index');
    }


    public function faq()
    {
        return view('front.faq.index');
    }

    public function OurPortfolio()
    {
        return view('front.OurPortfolio.index');
    }

    public function ourcompany()
    {
        return view('front.ourcompany.index');
    }

    public function services()
    {
        return view('front.services.index');
    }

    public function showServices()
    {
        return view('front.services.show');
    }

    public function team()
    {
        return view('front.team.index');
    }



}
