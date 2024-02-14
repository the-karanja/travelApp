<?php

namespace App\Http\Controllers;

use App\Models\Accomodations;
use App\Http\Requests\StoreAccomodationsRequest;
use App\Http\Requests\UpdateAccomodationsRequest;

class AccomodationsController extends Controller
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
     * @param  \App\Http\Requests\StoreAccomodationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAccomodationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accomodations  $accomodations
     * @return \Illuminate\Http\Response
     */
    public function show(Accomodations $accomodations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accomodations  $accomodations
     * @return \Illuminate\Http\Response
     */
    public function edit(Accomodations $accomodations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAccomodationsRequest  $request
     * @param  \App\Models\Accomodations  $accomodations
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccomodationsRequest $request, Accomodations $accomodations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accomodations  $accomodations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accomodations $accomodations)
    {
        //
    }
}
