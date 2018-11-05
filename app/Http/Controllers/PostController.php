<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }
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
