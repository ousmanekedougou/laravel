<?php

namespace App\Http\Controllers\Medecin;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Medecin;
use App\MedecinComment;
use App\Specialite;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home-medecin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('medecin_comment');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:medecins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Medecin
     */
    protected function create(array $data)
    {
        return Medecin::create([
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'specialite_id' => $data['specialite'],
            'adresse' => $data['adresse'],
            'images' => $data['image'],
        ]);
    }
    public function register(Request $request)
    {
        $this->validator($request->all());
        $client = $this->create($request->all());
        if($request->has('image')){
        $folder = '/uploads/medecin';
        $client->update([
        'images' => request('image')->store($folder,'public')
        ]);
      
        }

        event(new Registered($user = $client));
        
        $this->guard()->login($user);

        return $this->registered($request, $user)
                ?: redirect($this->redirectPath());
    }
    public function showRegisterForm()
    {
        if(Auth::guard('admin')->user()){
            $recup_spec = Specialite::All();
            return view('medecin/auth/register',compact('recup_spec'));
        }
        else{
            return view('welcome');
        }
    }

    public function guard()
    {
        return Auth::guard('medecin');
    }

    public function edite($id)
    {   
       $medecin = \App\Medecin::find($id);//on recupere le admin
    
       return view('medecin.auth.edit_medecin',compact('medecin'));
    }

    public function update(Request $request, $id)
    {
        $medecin= \App\Medecin::find($id);
        $medecin->name = $request->input('name');
        $medecin->prenom = $request->input('prenom');
        $medecin->email = $request->input('email');
        $medecin->password = Hash::make( $request->input('password'));
        $medecin->phone = $request->input('phone');
        $medecin->adresse = $request->input('adresse');
        $medecin->specialite_id = $request->input('specialite');
        $medecin->save();
        
            // $client = $this->update($request->all());
            if($request->has('image')){
                $folder = '/uploads/medecin';
                $medecin->update([
                'images' => request('image')->store($folder,'public')
                ]);
            }
        return redirect()->route('home-medecin');
    }

    public function medecin_comment(Request $request)
    {
        // dd($request);
        MedecinComment::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'comment' => $request->comment
        ]);
        return redirect()->back()->with('success','Votre commentaire a ete bien poster');
    }


}
