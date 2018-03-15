<?php

namespace App\Http\ViewComposers;

use App\Setting;
use Illuminate\Contracts\View\View;

class TestViewComposer {
  public function compose(View $view)
  {
    $view->with('settings', Setting::first());
  }
}
