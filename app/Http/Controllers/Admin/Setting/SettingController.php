<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\ApiKey;
use App\Models\Setting\Footer;
use App\Models\Setting\Header;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {


        $header = Header::first();
        $footer = Footer::first();
        $api_key = ApiKey::first();

        $data = [
            'header' => $header,
            'footer' => $footer,
            'api_key' => $api_key


        ];

        return view('admin.setting.index', $data);
    }
}
