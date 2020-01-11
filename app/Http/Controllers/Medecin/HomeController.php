<?php

namespace App\Http\Controllers\Medecin;
use App\User;
use App\Http\Controllers\Controller;
use App\Rendez_vous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:medecin');
    }
    public function index()
    {
        // $recup = User::orderBy('created_at','DESC')->get();
        $user_carre = Rendez_vous::where('medecin_id',Auth::user()->id)->orderBy('created_at','DESC')->paginate('5');
        $fixer = Rendez_vous::where('medecin_id',Auth::user()->id)->orderBy('created_at','DESC')->whereNotNull('date')->get();
        $rv = Rendez_vous::where('medecin_id',Auth::user()->id)->orderBy('created_at','DESC')->whereNull('date')->get();
        return view('medecin/home-medecin',compact(['user_carre','fixer','rv']));
    }

    public function patient_list()
    {
        $user_carre = Rendez_vous::where('medecin_id',Auth::user()->id)->orderBy('created_at','DESC')->paginate('9');
        // dd($user_carre);
        return view('medecin.auth.patient-liste',compact('user_carre'));
    }

    public function patient_carre()
    {
        // $rv = Rendez_vous::orderBy('created_at','DESC')->paginate('9');
        // foreach($rv as $r){
        //     dd($r->users[0]);
        // }
        $user_carre = Rendez_vous::where('medecin_id',Auth::user()->id)->orderBy('created_at','DESC')->paginate('9');
        // dd($user_carre);
        return view('medecin.auth.patient-carres',compact('user_carre'));
    }

    // public function recup()
    // {
    //     $recup = User::orderBy('created_at','DESC')->get();
    //     return view('medecin/home-medecin',compact('recup'));
    // }


    public function delete($id)
    {
        $users =  \App\Rendez_vous::find($id);
        if($users)
        $users->delete();
        return redirect()->back();
    }

    public function fixer(Request $request,$id)
    {
        // dd($request->all());
        $insert = Rendez_vous::find($id);
        $insert->date = $request->date;
        $insert->heure = $request->time;
        $insert->save();
        return redirect()->back();
    }

   

}


