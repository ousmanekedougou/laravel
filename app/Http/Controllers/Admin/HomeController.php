<?php

namespace App\Http\Controllers\Admin;
use App\Medecin;
use App\Specialite;
use App\User;
use App\Comment;
use App\PatientComment;
use App\MedecinComment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $recup_spec = Specialite::orderBy('id','DESC')->paginate('4');
        $patient = User::All();
        $medecin = Medecin::All();
        $comment = Comment::orderBy('id','DESC')->get();
        $patient_comment = PatientComment::orderBy('id','DESC')->get();
        $medecin_comment = MedecinComment::orderBy('id','DESC')->get();
        return view('admin.auth.home-admin',compact(['recup_spec','comment','patient','medecin','patient_comment','medecin_comment']));
    }

    public function patient_list()
    {
        $user_list = User::orderBy('created_at','DESC')->paginate('6');
        return view('admin.auth.patient-list-admin',compact('user_list'));
    }

    public function patient_carre()
    {
        $user_carre = User::orderBy('created_at','DESC')->paginate('6');
        return view('admin.auth.patient-carre-admin',compact('user_carre'));
    }

    public function medecin_list()
    {
        $medecin_list = Medecin::orderBy('created_at','DESC')->paginate('6');
        return view('admin.auth.medecin-list-admin',compact('medecin_list'));
    }

    public function medecin_carre()
    {
        $medecin_carre = Medecin::orderBy('created_at','DESC')->paginate('6');
        return view('admin.auth.medecin-carre-admin',compact('medecin_carre'));
    }

    // La partie edition

    public function edite($id)
    {   
       $admin = \App\Admin::find($id);//on recupere le admin
    //    dd($admin);
       return view('admin.auth.edit_admin',compact('admin'));
    }


    public function sup($id)
    {
        $medecin =  \App\Medecin::find($id);
        if($medecin)
        $medecin->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $admin= \App\Admin::find($id);
        $admin->name = $request->input('name');
        $admin->prenom = $request->input('prenom');
        $admin->email = $request->input('email');
        $admin->password = Hash::make( $request->input('password'));
        $admin->phone = $request->input('phone');
        $admin->save();
        
            // $client = $this->update($request->all());
            if($request->has('image')){
                $folder = '/uploads/admin';
                $admin->update([
                'images' => request('image')->store($folder,'public')
                ]);
            }
        return redirect()->route('home-admin');
    }


    public function supp($id)
    {
        $sp =  \App\Comment::find($id);
        if($sp)
        $sp->delete();
        return redirect()->back();
    }

    public function patient_comment($id)
    {
        $comment_patient =  \App\PatientComment::find($id);
        if($comment_patient)
        $comment_patient->delete();
        return redirect()->back();
    }

    public function medecin_comment($id)
    {
        $comment_medecin =  \App\MedecinComment::find($id);
        if($comment_medecin)
        $comment_medecin->delete();
        return redirect()->back();
    }

   
}

