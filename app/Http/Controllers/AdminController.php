<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
      return view('admin.index');
    }

    public function create_news()
    {
      return view('admin.news.create');
    }

    public function store_news()
    {
      
    }
}
