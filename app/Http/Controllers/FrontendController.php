<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
      return view('frontend.index');
    }

    public function functionalitati()
    {
      return view('frontend.functionalitati');
    }

    public function beneficii()
    {
      return view('frontend.beneficii');
    }
}
