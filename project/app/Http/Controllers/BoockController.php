<?php

namespace App\Http\Controllers;

use App\Models\boock;
use Illuminate\Http\Request;

class BoockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cr=boock::all();
        return view("welcome",compact("cr"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Formulaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        boock::create([
            "image"=>$request->i,
            "nom"=>$request->n,
            "class"=>$request->c,
            "longage"=>$request->l,
            "societe"=>$request->s,
            "radmk"=>$request->r,
            "date-isdar"=>$request->di,
            "page"=>$request->p,
            "volum"=>$request->v,
            "type"=>$request->t,
            "date-creat"=>$request->d,
        ]);
        return redirect()->route('url.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(boock $boock)
    {
        return view('test');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(boock $boock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, boock $boock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(boock $boock)
    {
        //
    }
}
