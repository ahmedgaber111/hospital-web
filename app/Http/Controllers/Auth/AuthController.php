<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Hospital_System\Pharmacy;
use App\Secretaries;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
    public function register()
    {

        return view('auth.register');
    }

    public function storeUser(Request $request)
    {

       $Validator=Validator::make($request->all(),[
            'id'                         => 'required|numeric|unique:users',
            'username'                   => 'required|string|max:255',
            'Email'                      => 'required|string|email|max:255|unique:users',
            'password'                   => 'required|string|min:8|confirmed',
            'password_confirmation'      => 'required',
            'Role'                       => 'required|string',
            'phone'                      => 'required|min:11|numeric',
            'age'                        => 'required|numeric',
            'gender'                     => 'required|string',
        ],[
            'id.required'                         => 'id must be required',
            'id.numeric'                          => 'id must be  numeric',
            'id.unique'                           => 'id must be  unique',
            'username.required'                   => 'username must be  ',
            'username.string'                     => 'username  must be',
            'Email.required'                      => 'Email must be',
            'Email.string'                        => 'Email  must be',
            'Email.email'                         => 'Email must be',
            'Email.unique'                        => 'Email  must be unique',
            'Role.required'                       => 'Role must be required',
            'Role.string'                         => 'Role must be string',
            'password.required'                   => 'password must be required',
            'password.string'                     => 'password must be  string',
            'password.min:8'                      => 'password must be minimum 8',
            'password_confirmation.required'      => 'password_confirmation required',
            'phone.required'                      => 'phone must be required',
            'phone.min:11'                        => 'phone must be minimum 11',
            'phone.numeric'                       => 'phone must be  numeric',
            'age.required'                        => 'age  must be required',
            'age.numeric'                         => 'age must be numeric',
            'gender.required'                     => 'gender must be required',
            'gender.string'                       => 'gender must be string',

        ]);
     if ($Validator->fails()){
         return redirect()->back()->withErrors($Validator)->withInput($request->all());
     }
        User::create([
            'id'       => $request->id,
            'username' => $request->username,
            'Email'    => $request->Email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
            'age'      => $request->age,
            'gender'   => $request->gender,
            'address'  => $request->address,
            'img'      => $request->img,
            'is_admin' => $request->is_admin,
            'Role'     => $request->Role,

        ]);
    }

        public function login()
    {

        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'Email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('Email', 'password');

        if (Auth::attempt($credentials)) {
           $Role = Auth::user()->Role;

            if ($Role == "Secretary") {
                return redirect()->to('secretary');
            }
            if ($Role == "Doctor") {
                return redirect()->to('DoctorPage');
            }
            if ($Role == "Pharmacist") {
                return redirect()->to('PharmacyPage');
            }
            if ($Role == "Analysis doctor") {
                return redirect()->to('LabPage');
            }
            return redirect('login')->with('error', 'error in Email or Password ');
        }

    }


    public function logout() {

        Auth::logout();

        return redirect('login');
    }

    public function home()
    {
        return view('home');
    }
}
