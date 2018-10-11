<?php

namespace App\Http\Controllers;

use App\SeedRecord;
use Illuminate\Http\Request;

class SeedRecordController extends Controller
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
        return view('seeds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('seeds.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SeedRecord  $seedRecord
     * @return \Illuminate\Http\Response
     */
    public function show(SeedRecord $seedRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SeedRecord  $seedRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(SeedRecord $seedRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SeedRecord  $seedRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeedRecord $seedRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SeedRecord  $seedRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeedRecord $seedRecord)
    {
        //
    }
}
