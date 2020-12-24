<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Navigation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class NavigationController extends Controller
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
    public function create(Request $request)
    {
        //
        $uuid = Str::uuid();
        $numberid = Navigation::where('id',$uuid)->get()->count();
        
        $nav_item = new Navigation;
        return Inertia::render('Admin/Navigation/Manage', [
            'event' => $numberid,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function show(navigation $navigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function edit(navigation $navigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, navigation $navigation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(navigation $navigation)
    {
        //
    }
}
