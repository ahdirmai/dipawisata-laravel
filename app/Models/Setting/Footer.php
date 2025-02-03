<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'instagram_url',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'youtube_url',
        'whatsapp_url',
        'copy_right'
    ];

    protected $table = 'setting_footers';
}
