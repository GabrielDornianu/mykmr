<?php

namespace App\Http\Controllers;

use App\News;
use Session;
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
      $this->validate(request(), [
        'title' => 'required|max:255',
        'thumbnail' => 'required|image',
        'content' => 'required'
      ]);
      $thumbnail_name = time() . request('thumbnail')->getClientOriginalName();
      request('thumbnail')->move('images/thumbnails/', $thumbnail_name);
      News::create([
        'title' => request('title'),
        'thumbnail' => '/images/thumbnails/' . $thumbnail_name,
        'content' => request('content')
      ]);
      Session::flash('success', 'Ati creat o stire noua');
      return redirect()->back();
    }

    public function index_news()
    {
      return view('admin.news.index')->with('news', News::paginate(3));
    }
}
