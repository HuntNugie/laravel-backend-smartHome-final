<?php

namespace App\Http\Controllers;

use App\Models\Max;
use Illuminate\Http\Request;

class MaxController extends Controller
{
    /**
     * mendapatkan data max temp dan humd
     */
    public function index()
    {
        $data = Max::first();
        return response()->json($data);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Max $max)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Max $max)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Max $max)
    {
        $max_temp = $request->max_temp;
        $max_humd = $request->max_humd;

        $data = Max::first();
        $data->update([
            "max_temp" => $max_temp,
            "max_humd" => $max_humd
        ]);

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Max $max)
    {
        //
    }
}
