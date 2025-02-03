<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(Request $request)
    {


        $request->validate([
            'website_name' => 'required',
            'search_placeholder' => 'required'
        ]);

        $header = Header::first();

        if ($header) {
            $header->update([
                'website_name' => $request->website_name,
                'search_placeholder' => $request->search_placeholder
            ]);
        } else {
            Header::create([
                'website_name' => $request->website_name,
                'search_placeholder' => $request->search_placeholder
            ]);
        }

        return redirect()->back()->with('success', 'Header updated successfully');
    }
}
