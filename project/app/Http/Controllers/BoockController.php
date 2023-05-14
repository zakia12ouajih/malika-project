<?php

namespace App\Http\Controllers;

use App\Models\boock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BoockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = Auth::user()->role;
        if ($role == 0) {
            return view("welcome2");
        } 
        
    }
    public function afficher(){
        $cr = DB::table("users")->get();
        return view("lesuser",compact("cr"));
    }
    public function edit ($id){
        $md =DB::table("users")->where("id",$id)->first();
        return view("modifier",compact("md"));
    }
    public function modifier(Request $request,$id){
        DB::table("users")->where("id",$id)->update([
            "name" =>$request->name,
            "email" =>$request->email,
            "password" => Hash::make($request->password),
        ]);
        return redirect()->route('users');
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
        // return redirect()->route('url.index');

    }

    /**
     * Display the specified resource.
     */
    


    /**
     * Show the form for editing the specified resource.
     */
    

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
    public function destroy(boock $boock,$id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('users');
    }
}
