<?php

namespace App\Http\Controllers;

use App\News;
use App\Setting;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
      return view('admin.index');
    }

    public function index_news()
    {
      return view('admin.news.index')->with('news', News::paginate(3));
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

    public function edit_news($id)
    {
      return view('admin.news.edit')->with('news', News::find($id));
    }

    public function dump_news($id)
    {
      News::find($id)->delete();
      return redirect()->back();
    }

    public function trashed_news()
    {
      return view('admin.news.trashed')->with('news', News::onlyTrashed()->paginate(3));
    }

    public function destroy_news($id)
    {
      News::onlyTrashed()->find($id)->forceDelete();
      return redirect()->back();
    }

    public function update_news($id)
    {
      $this->validate(request(), [
          'title' => 'required|max:255',
          'thumbnail' => 'required|image',
          'content' => 'required'
        ]);
        $thumbnail_name = time() . request('thumbnail')->getClientOriginalName();
        request('thumbnail')->move('images/thumbnails/', $thumbnail_name);
        $n = News::find($id);
        $n->title = request('title');
        $n->thumbnail = '/images/thumbnails/' . $thumbnail_name;
        $n->content = request('content');

        $n->save();

        Session::flash('success', 'Postul a fost updatat cu succes');
        return redirect()->back();
    }

    public function restore_news($id)
    {
      News::onlyTrashed()->find($id)->restore();
      return redirect()->back();
    }

    public function settings()
    {
      return view('admin.settings')->with('settings', Setting::first());
    }

    public function settings_update()
    {
      $this->validate(request(), [
        'logo' => 'required|image',
        'title' => 'required|max:255',
        'phone' => 'required|max:255',
        'email' => 'required|max:255',
        'mobile' => 'required|max:255',
        'address' => 'required|max:255',
        'fax' => 'required|max:255',
        'about' => 'required',
      ]);

      $logo_name = time() . request('logo')->getClientOriginalName();
      request('logo')->move('/images/logos/', $logo_name);

      $s = Setting::first();
      $s->logo = request('logo');
      $s->title = request('title');
      $s->phone = request('phone');
      $s->email = request('email');
      $s->mobile = request('mobile');
      $s->address = request('address');
      $s->fax = request('fax');
      $s->about = request('about');
      $s->save();

      Session::flash('success', 'Ati modificat cu succes setarile site-ului');

      return redirect()->back();
    }
}
