<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Workorder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view("home.index", [
            'workorders' => Workorder::all(),
            'branches' => Branch::all(),
        ]);
    }
}
