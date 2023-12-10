<?php

namespace App\Http\Controllers;

use App\Models\Workorder;
use Illuminate\Http\Request;

class WorkorderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $workorder = Workorder::create($data);
        return redirect()->route('home.index')->withSucess('status', __('Done'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Workorder $workorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workorder $workorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workorder $workorder)
    {
        $data = ['delivery_date' => $request->input('delivery_date')];
        $workorder->update($data);
        return redirect()->route('branches.show', ['branch' => $workorder->branch])->withSucess('status', __('Done'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workorder $workorder)
    {
        $workorder->delete();
        return redirect()->route('home.index')->withSucess('status', __('Done'));
    }
}
