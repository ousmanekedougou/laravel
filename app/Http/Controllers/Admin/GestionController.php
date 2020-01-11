<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Rendez_vous;
use App\Specialite;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function specialite(Request $request)
    {
        Specialite::create([
            'name' => $request->get('specialite')
        ]);
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $specialite = Specialite::findOrFail($request->spec_name);
        $specialite->name = $request->input('specialite');
        $specialite->save();
        return back();
    }

    public function patient1()
    {
        $recup_spec = Specialite::orderBy('id','DESC')->get();
        return view('admin.auth.patient-list-admin',compact('recup_spec'));
    }

    public function patient2()
    {
        $recup_spec = Specialite::orderBy('id','DESC')->get();
        return view('admin.auth.patient-carre-admin',compact('recup_spec'));
    }

    public function medecin1()
    {
        $recup1 = Specialite::orderBy('id','DESC')->get();
        return view('admin.auth.medecin-list-admin',compact('recup1'));
    }

    public function medecin2()
    {
        $recup_spec = Specialite::orderBy('id','DESC')->get();
        return view('admin.auth.medecin-carre-admin',compact('recup_spec'));
    }

   
}
