<?php

namespace App\Http\Controllers;

use App\Http\Resources\BranchCollection;
use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::with('cars')->get();

        return response()->json($branches);
    }

    public function store(Request $request)
    {
        $request->validate([
            'branch' => 'required',
            'city' => 'required',
        ]);



        return Branch::create($request->all());
    }
}
