<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\ApiKey;
use Illuminate\Http\Request;

class ApiKeyController extends Controller
{
    // invoke
    public function __invoke(Request $request)
    {
        $request->validate([
            'google_client_id' => 'required',
            'google_client_secret' => 'required',
            'midtrans_client_key' => 'required',
            'midtrans_server_key' => 'required'
        ]);

        $api_key = ApiKey::first();

        if ($api_key) {
            $api_key->update([
                'google_client_id' => $request->google_client_id,
                'google_client_secret' => $request->google_client_secret,
                'midtrans_client_key' => $request->midtrans_client_key,
                'midtrans_server_key' => $request->midtrans_server_key
            ]);
        } else {
            ApiKey::create([
                'google_client_id' => $request->google_client_id,
                'google_client_secret' => $request->google_client_secret,
                'midtrans_client_key' => $request->midtrans_client_key,
                'midtrans_server_key' => $request->midtrans_server_key
            ]);
        }

        return redirect()->back()->with('success', 'Api Key updated successfully');
    }
}
