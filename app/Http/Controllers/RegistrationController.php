<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
class RegistrationController extends Controller
{
    public function create(){
        return view('register.regis');
    }
 
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'no_telp'  => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'pin' => 'required'
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        $request->session()->flash('sukses', 'Registrasi berhasil dilakukan!! Silahkan login');
 
        return redirect('/tes');
      //  $user = User::create(request(['name', 'username', 'no_telp', 'email', 'password', 'pin']));
 
      // auth()->login($user);
       // return redirect()->to('/tes');
    }
}
