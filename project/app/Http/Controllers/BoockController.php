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
        $cr=boock::all();
        if ($role == 0) {
            return view("welcome2",compact('cr'));
        }
    }
    public function firstFunction()
    {
        $cr = boock::all();
        return view("welcome", compact('cr'));
    }
    public function welcome()
    {
        $m= boock::find(1);
        return view('show',compact("m"));
    }
    
    public function indexx()
    {
        $cr=boock::all();
        return view("arabe",compact("cr"));
        
    }
    public function roman()
    {
        $cr=boock::all();
        return view("lasroman",compact("cr"));
        
    }
    public function fronci()
    {
        $cr=boock::all();
        return view("francais",compact("cr"));
        
    }
    public function show()
    {
        $cr=boock::all();
        return view("siyasa",compact("cr"));
        
    }
    public function din()
    {
        $cr=boock::all();
        return view("din",compact("cr"));
        
    }
    public function nafs()
    {
        $cr=boock::all();
        return view("3limnafs",compact("cr"));
        
    }
    public function save()
    {
        
            return view("save");
        
    }
    public function service()
    {  
        return view("service");
        
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
        // $n=$request->file('i')->getClientOriginalExtension();
        // $n=$request->pa->getClientOriginalExtension();
        // $mn=time().".".$n;
        // $path="image";
        // $request->pa->move($path,$mn);
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
        return redirect()->back();

    }
    public function search(Request $request)
    {
        // $cr = Computer::where('divition','LIKE' ,'%'.$get_name.'%')->get();

        // $get_name =$request->search_name;
        // $cr = Computer::where('nom','LIKE' ,'%'.$get_name.'%')
        // ->orwhere('prenom','LIKE' ,'%'.$get_name.'%')
        // ->orwhere('email','LIKE' ,'%'.$get_name.'%')
        // ->orwhere('mobil1','LIKE' ,'%'.$get_name.'%')
        // ->orwhere('mobil2','LIKE' ,'%'.$get_name.'%')
        // ->orwhere('telephone1','LIKE' ,'%'.$get_name.'%')
        // ->orwhere('telephone2','LIKE' ,'%'.$get_name.'%')
        // ->orwhere('fonction','LIKE' ,'%'.$get_name.'%')
        // ->get();
        // $cr = DB:: table("computers")->get();
        // $m =  DB:: table("nom_models")->get();
        // return view("search",compact(["cr","m"]));


        $cr=boock::all();
        $get_name = $request->search_name;  
        $c =boock::where('nom','LIKE' ,'%'.$get_name.'%')->get();
        // ->orwhere('radmk','LIKE' ,'%'.$get_name.'%')
        // ->orwhere('societe','LIKE' ,'%'.$get_name.'%')
        // ->get();  
        return view("search",compact(['cr','c']));
        // return $c;
    } 
    public function update(Request $request, boock $boock)
    {
      
    }
    public function destroy(boock $boock,$id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('users');
    }
}
