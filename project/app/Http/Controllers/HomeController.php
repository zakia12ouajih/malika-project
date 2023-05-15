<?php

namespace App\Http\Controllers;

use App\Models\boock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;
        $cr=boock::all();
        if ($role == 1) {
            return view('welcome2',compact('cr'));
        }
    }
    public function store(Request $request)
    {
        // $n=$request->pa->getClientOriginalExtention();
        // $mn=time().".".$n;
        // $path="image";
        // $request->pa->move($path,$mn);
        // boock::create([
        //     "image"=>$request->i,
        //     "nom"=>$request->n,
        //     "class"=>$request->c,
        //     "longage"=>$request->l,
        //     "societe"=>$request->s,
        //     "radmk"=>$request->r,
        //     "date-isdar"=>$request->di,
        //     "page"=>$request->p,
        //     "volum"=>$request->v,
        //     "type"=>$request->t,
        //     "date-creat"=>$request->d,
        // ]);
        // return redirect()->route('/index');

    }
}
