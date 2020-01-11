<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

use App\Http\Controllers\Controller;
use App\Admin;
use App\MedecinComment;
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
    protected $redirectTo = '/home-admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
     * @return \App\Admin
     */
    protected function create(array $data)
    {
        // dd($data);
        return Admin::create([
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'images' => $data['image'],
        ]);
    }
    public function register(Request $request)
    {
        $this->validator($request->all());
        $client = $this->create($request->all());
        if($request->has('image')){
        $folder = '/uploads/admin';
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
        if($this->guard()->user()){
            return view('admin.auth.register');
        }else{return view('welcome');}
    }

    public function guard()
    {
        // dd('nnnnnn') ;
        return Auth::guard('admin');
    }

}
