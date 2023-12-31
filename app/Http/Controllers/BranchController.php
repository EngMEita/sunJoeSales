<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'is_head' => $request->input('is_head', false)
        ];
        $branch = Branch::create($data);
        return redirect()->route('home.index')->withSucess('status', __('Done'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        return view("branch.index", [
            'workorders' => $branch->workorders,
            'branch' => $branch,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->route('home.index')->withSucess('status', __('Done'));
    }
}
