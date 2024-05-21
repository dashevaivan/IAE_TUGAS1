<?php

namespace App\Http\Controllers;

use App\Models\standing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class standings extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $request = Http::get('https://apiv3.apifootball.com/?action=get_standings&league_id=194&APIkey=9c74298f5318dd689108c32545b765a71b32c2eecce0de8ddf4660151c724393');
        $responseData = $request->json();

        
        return view('liga1', ['responseData' => $responseData]);

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
    public function show(standing $standing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(standing $standing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, standing $standing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(standing $standing)
    {
        //
    }
}
