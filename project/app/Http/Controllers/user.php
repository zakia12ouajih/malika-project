<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;


class user extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $c=ModelsUser::all();
        return view("lesuser",compact("c"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        return redirect()->route('viewAdminUser')->with('success', '');
        ModelsUser::create([
            "password_confirmation_at"=>$request->password_confirmation,
            "password"=>$request->password,
            "email"=>$request->email,
            "name"=>$request->name,
        ]);
        return redirect()->route('url.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
