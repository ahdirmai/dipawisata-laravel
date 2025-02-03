<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'instagram_url' => 'url',
            'facebook_url' => 'url',
            'twitter_url' => 'url',
            'linkedin_url' => 'url',
            'youtube_url' => 'url',
            'whatsapp_url' => 'url',
            'copyright_footer' => 'required'

            // 'instagram' => 'required',
            // 'facebook' => 'required',
            // 'twitter' => 'required',
            // 'linkedin' => 'required',
            // 'youtube' => 'required',
            // 'whatsapp' => 'required',
            // 'copy_right' => 'required'
        ]);

        $footer = Footer::first();

        if ($footer) {
            $footer->update([
                'instagram_url' => $request->instagram_url,
                'facebook_url' => $request->facebook_url,
                'twitter_url' => $request->twitter_url,
                'linkedin_url' => $request->linkedin_url,
                'youtube_url' => $request->youtube_url,
                'whatsapp_url' => $request->whatsapp_url,
                'copy_right' => $request->copyright_footer
            ]);
        } else {
            Footer::create([
                'instagram_url' => $request->instagram_url,
                'facebook_url' => $request->facebook_url,
                'twitter_url' => $request->twitter_url,
                'linkedin_url' => $request->linkedin_url,
                'youtube_url' => $request->youtube_url,
                'whatsapp_url' => $request->whatsapp_url,
                'copy_right' => $request->copyright_footer
            ]);
        }


        return redirect()->back()->with('success', 'Footer updated successfully');
    }
}
