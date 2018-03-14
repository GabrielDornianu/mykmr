<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['logo', 'title', 'phone', 'email', 'mobile', 'address', 'fax', 'about'];
}
