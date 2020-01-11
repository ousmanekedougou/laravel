<?php

namespace App\Http\Controllers;


use App\Medecin;
use App\Rendez_vous;
use DateTime;
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
        $medecins = Medecin::orderBy('created_at','DESC')->get();
        $notifications = Auth::user()->rendez_vouses()->whereNotNull('date')->whereNull('red')->get();
       
        // dd($notifications); 
        return view('home',compact(['medecins','notifications']));
    }

    public function table()
    {
        $rv = Auth::user()->rendez_vouses()->paginate('5');
        $notifications = Auth::user()->rendez_vouses()->whereNotNull('date')->whereNull('red')->get();
        return view('auth.table',compact(['rv','notifications']));
    }

    public function preparer(Request $request,$id)
    {
        // dd($id);
        $med = Medecin::find($request->id);
        return view('rv',compact('med'));
        
    }

    public function demande(Request $request)
    {
        $user = Auth::user();
        $rv  = Rendez_vous::create([
            'medecin_id' => $request->medecin_id,
            'motif' => $request->motif
        ]);
        $user->rendez_vouses()->attach($rv->id);
        
        return redirect()->route('home')->with('success','Votre demande est enregistre et en cours de traitement');
    }

    public function notif(Request $request,$id)
    {
        $insert = Rendez_vous::find($id);
        // dd($insert);
        $insert->red = now();
        $insert->save();
        return view('auth.notif',compact('insert'));
    }

    public function client()
    {
        return view('auth.register');
    }

    

   
}
