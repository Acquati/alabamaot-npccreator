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
        /* Pega o arquivo mapa-spawn.xml */
        /* Cria a lista de Monstros, não deixa mostros duplicados */
        /* Procura o monstro na pasta */

        //$item = "brutetamer's staff";
        // TODO: Crawlear a tibiawiki para transformar itens em tabelas e agilizar a brincadeira
        $item = "sword";
        file_get_contents("https://www.tibiawiki.com.br/$item");

        /* Pega a lista de Itens do forgotten Server */
        $itemList = file_get_contents(app_path("./items.xml"));
        $regex = '<item id="(\d*)" article="a" name="' . $item . '">';
        /* Procura a expressão regular e coloca o ID do item no $output */
        preg_match($regex,$itemList,$output);
        /* Se for article="an" */
        if (empty($output)) {
            $regex = '<item id="(\d*)" article="an" name="' . $item . '">';
            preg_match($regex,$itemList,$output);
        }
        if (empty($output)) {
            $regex = '<item id="(\d*)" name="' . $item . '">';
            preg_match($regex,$itemList,$output);
        }
        /* Guarda a ID do Item */
        $itemId = $output[1];

        /* Trata itens com com duas palavras e underscore */
        if (!@file_get_contents("https://www.tibiawiki.com.br/$item")) {
            $item = ucwords($item);
            $item = str_replace(" ", "_", $item);
        }
        /* Pega o HTML da página do item no Tibia Wiki */
        $wiki = file_get_contents("https://www.tibiawiki.com.br/$item");
        /* Procura a expressão regular e coloca o valor do item no $output */
        preg_match('/npcvalue">(\d*) <a/', $wiki, $output);
        $output;
        /* Guarda o valor do Item */
        $itemPrice = $output[1];

        //dd($item, $itemId, $itemPrice);
        $itemSell = "$item,$itemId,$itemPrice;";

        return view('pages.npc-creator', compact('itemSell'));
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
