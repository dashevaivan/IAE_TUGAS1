<?php

namespace App\Http\Controllers;

use App\Models\player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class compe extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $request = Http::get('https://apiv3.apifootball.com/?action=get_leagues&country_id=59&APIkey=9c74298f5318dd689108c32545b765a71b32c2eecce0de8ddf4660151c724393');
        $responseData = $request->json();
        return view('competitions', ['responseData' => $responseData]);
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
    public function show(player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(player $player)
    {
        //
    }
}
