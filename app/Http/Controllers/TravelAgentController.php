<?php

namespace App\Http\Controllers;

use App\Models\TravelAgent;
use App\Http\Requests\StoreTravelAgentRequest;
use App\Http\Requests\UpdateTravelAgentRequest;

class TravelAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTravelAgentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTravelAgentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TravelAgent  $travelAgent
     * @return \Illuminate\Http\Response
     */
    public function show(TravelAgent $travelAgent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TravelAgent  $travelAgent
     * @return \Illuminate\Http\Response
     */
    public function edit(TravelAgent $travelAgent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTravelAgentRequest  $request
     * @param  \App\Models\TravelAgent  $travelAgent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTravelAgentRequest $request, TravelAgent $travelAgent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TravelAgent  $travelAgent
     * @return \Illuminate\Http\Response
     */
    public function destroy(TravelAgent $travelAgent)
    {
        //
    }
}
