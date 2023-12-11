<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Workorder;
use App\Models\Production;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("production.index", [
            'productions' => Production::all(),
            'categories' => Category::all(),
            'workorders' => Workorder::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $ins = $request->in;
        $outs = $request->out;
        foreach($ins as $id => $in) {
            $production = Production::findOrFail($id);
            $production->update([
                'in' => $in,
                'out' => $outs[$id],
            ]);
        }
        return redirect()->route('production.index')->withSucess('status', __('Done'));
    }

}
