<?php

namespace App\Http\Controllers;

use App\Models\veisle;
use App\Http\Requests\StoreveisleRequest;
use App\Http\Requests\UpdateveisleRequest;

class VeisleController extends Controller
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
     * @param  \App\Http\Requests\StoreveisleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreveisleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\veisle  $veisle
     * @return \Illuminate\Http\Response
     */
    public function show(veisle $veisle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\veisle  $veisle
     * @return \Illuminate\Http\Response
     */
    public function edit(veisle $veisle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateveisleRequest  $request
     * @param  \App\Models\veisle  $veisle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateveisleRequest $request, veisle $veisle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\veisle  $veisle
     * @return \Illuminate\Http\Response
     */
    public function destroy(veisle $veisle)
    {
        //
    }
}
