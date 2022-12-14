<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:255',
            'username'=>'required|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }else {
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            Auth::attempt($request->only('email','password'));

            return redirect()->route('dashboard');
        }

    }
}
