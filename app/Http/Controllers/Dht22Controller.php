<?php

namespace App\Http\Controllers;

use App\Models\Dht22;
use Illuminate\Http\Request;

class Dht22Controller extends Controller
{
    /**
     * Mendapatkan seluruh data dht22
     */
    public function index()
    {
        $data = Dht22::first();
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
    public function show(Dht22 $dht22)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dht22 $dht22)
    {
        //
    }

    /**
     * untuk mengupdate data dht22
     */
    public function update(Request $request, Dht22 $dht22)
    {
        $temperature = $request->temp;
        $humidity = $request->humd;
        $heatIndex = $request->heat;

        $data = Dht22::first();
        $data->update([
            "temperature" => $temperature,
            "humidity" => $humidity,
            "heatIndex" => $heatIndex
        ]);
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dht22 $dht22)
    {
        //
    }
}
