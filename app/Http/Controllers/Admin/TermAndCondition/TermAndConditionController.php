<?php

namespace App\Http\Controllers\Admin\TermAndCondition;

use App\Http\Controllers\Controller;
use App\Models\TermAndCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TermAndConditionController extends Controller
{
    public function index()
    {
        $termAndCondition = TermAndCondition::first();

        return view('admin.term-and-condition.index', compact('termAndCondition'));
    }

    public function store(Request $request)
    {
        // return 'x';
        $request->validate([
            'content' => 'required',
        ]);

        // return $request;
        DB::beginTransaction();
        try {
            $termAndCondition = TermAndCondition::first();
            if ($termAndCondition) {
                $termAndCondition->update([
                    'content' => $request->content,
                ]);
            } else {
                TermAndCondition::create([
                    'content' => $request->content,
                ]);
            }

            DB::commit();
            return redirect()->back()->with('success', 'Term and condition updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            if (app()->isLocal()) {
                return $e->getMessage();
            }
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
