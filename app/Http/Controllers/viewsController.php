<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function index()
    {
        return view('registerStore');
    }
    public function indexWhoWeAre()
    {
        return view('whoWeAre');
    }
    public function faqs()
    {
        return view('faqs');
    }

}
