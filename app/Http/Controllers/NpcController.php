<?php

namespace App\Http\Controllers;

use App\Npc;
use Illuminate\Http\Request;

class NpcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = 'mace';
        $wiki = file_get_contents("https://www.tibiawiki.com.br/$item");
        dd($wiki);

        return view('pages.npc-creator');
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
     * @param  \App\Npc  $npc
     * @return \Illuminate\Http\Response
     */
    public function show(Npc $npc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Npc  $npc
     * @return \Illuminate\Http\Response
     */
    public function edit(Npc $npc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Npc  $npc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Npc $npc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Npc  $npc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Npc $npc)
    {
        //
    }
}
