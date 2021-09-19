<?php

namespace App\Http\Controllers;

use App\Models\Bairro;
use App\Models\Casa;
use App\Models\RelatedBairro;
use Illuminate\Http\Request;

class CasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function casas(Request $request)
    {
        if ($request->bairro_id or $request->preco or $request->quartos) {
            $casas = Casa::whereBetween("preco", [$request->preco - 2000, $request->preco + 2000])->orWhere("bairro_id", $request->bairro_id)->orWhere("quartos", $request->quartos)->with("bairro")->get();
            $bairrosv = RelatedBairro::where("bairro_id",$request->bairro_id)->get()->pluck('related_id');
//            return $bairrosv;
            $vizinhos = Casa::whereIn("bairro_id", $bairrosv)->with("bairro")->get();
//            return $vizinhos;
        } else {
            $casas = Casa::with("bairro")->get();
            $vizinhos = null;
        }
        //
        $bairros = Bairro::all();

        return view("listing", compact("casas", "bairros", "vizinhos"));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bairros = Bairro::all();

        $casas = Casa::with("bairro")->get();

        //
        return view("welcome", compact("casas", "bairros"));

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Casa $casa
     * @return \Illuminate\Http\Response
     */
    public function show(Casa $casa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Casa $casa
     * @return \Illuminate\Http\Response
     */
    public function edit(Casa $casa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Casa $casa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Casa $casa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Casa $casa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Casa $casa)
    {
        //
    }
}
