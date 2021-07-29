<?php

namespace App\Http\Controllers;

use App\Mail\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){

        //validation
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'username' => 'required|max:255',
            'password' => 'required|confirmed'
        ]);

        
        //store user
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password) 
        ]);
        
        //sign the user in
        //Auth::attempt($request->only('email', 'password'));

        Mail::to($user)->send(new Registration($user));

        //redirect
        return redirect()->route('index');
    }
}
