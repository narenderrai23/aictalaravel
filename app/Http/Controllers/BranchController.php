<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    public function index($id)
    {
        $branchData = Branch::find($id);
        // dd($branchData);
        return view('branch-frontend.index');

    }
}
