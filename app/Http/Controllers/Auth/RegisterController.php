<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use App\User;
use App\Comment;
use App\PatientComment;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['editer','update','user_comment']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    // public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
    //     dd($uploadedFile);
    //     $name = !is_null($filename) ? $filename : str_random('25');
    //     $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
    //     return $file;
    //  } 
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'adresse' => $data['adresse'],
            'images' => $data['image'],
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all());
        $client = $this->create($request->all());
        if($request->has('image')){
        $folder = '/uploads/patients';
        $client->update([
        'images' => request('image')->store($folder,'public')
        ]);
      
        }

        event(new Registered($user = $client));
        
        $this->guard()->login($user);

        return $this->registered($request, $user)
                ?: redirect($this->redirectPath());
    }


    public function editer($id)
    {   
       $patient = \App\User::find($id);//on recupere le admin
       return view('auth/editer_patient',compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $patient= \App\User::find($id);
        $patient->name = $request->input('name');
        $patient->prenom = $request->input('prenom');
        $patient->email = $request->input('email');
        $patient->password = $request->input('password');
        $patient->phone = $request->input('phone');
        $patient->adresse = $request->input('adresse');
        $patient->save();
        
            // $client = $this->update($request->all());
            if($request->has('image')){
                $folder = '/uploads/clients';
                $patient->update([
                'images' => request('image')->store($folder,'public')
                ]);
            }
        return redirect()->route('home');
    }

    public function comment(Request $request)
    {
         Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment
        ]);

        // return view('welcome')->with('');
        return redirect()->back()->with('success','Votre commentaire a ete bien poster');
    }

    public function user_comment(Request $request)
    {
        // dd($request);
        PatientComment::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'comment' => $request->comment
        ]);
        return redirect()->back()->with('success','Votre commentaire a ete bien poster');
    }
}
