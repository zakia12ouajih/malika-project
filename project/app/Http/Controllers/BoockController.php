<?php

namespace App\Http\Controllers;

use App\Models\boock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $cr=boock::all();
        return view("welcome",compact("cr"));
    }
    public function afficher(){
        $cr = DB::table("lesuser")->get();
        return view("",compact("cr"));
    }
    public function edit ($id){
        $md =DB::table("lesuser")->where("id",$id)->first();
        return view("modifier",compact("md"));
    }
    public function modifier(Request $request,$id){
       DB::table("lesuser")->where("id",$id)->update([
      "id"=>$request->i,
           " name" =>$request->n,
            "email" =>$request->e,
            "password"=>$request->p,
       ]);
       return redirect()->Route("aff");
    }
    public function supprimer($id){
        DB::table("users")->where("id",$id)->delete();
        return redirect()->Route("aff");
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
        $n=$request->pa->getClientOriginalExtension();
        $mn=time().".".$n;
        $path="image";
        $request->pa->move($path,$mn);
        boock::create([
            "image"=>$mn,
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
