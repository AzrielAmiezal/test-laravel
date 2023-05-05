<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:25',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => ['required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()],
            //'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // die and dump || var_dump()
        // dd('Registered Success!');

        User::create($validatedData);

        /*
        Option - 1 (Invalid method)
        
        $request->session()->flash('success', 'Registration Successful! Please login');
        */

        /*
        Option - 2
        
        use Illuminate\Support\Facades\Session;
        Session::flash('success', 'Registration Successful! Please login');
        */

        /*
        Option - 3
        
        $request = session();
        $request->flash('success', 'Registration Successful! Please login');
        */

        return redirect('/login')->with('success', 'Registration successfull! Please login');
        //return redirect('/login');
    }
}
