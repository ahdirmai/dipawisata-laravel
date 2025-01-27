<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $table = 'setting_headers';
    protected $fillable = ['website_name', 'search_placeholder'];
}
