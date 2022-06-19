<?php

namespace App\Http\Controllers;

use App\Models\Salesmen;
use Illuminate\Http\Request;

class SalesmenController extends Controller
{
    public function index()
    {
        return Salesmen::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'branch_id' => 'required|numeric',
        ]);

        return Salesmen::create($request->all());
    }
}
