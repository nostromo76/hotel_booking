<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.showLoginForm'); 
    }

    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required',  // Ensure 'name' matches your input
            'password' => 'required',  // Ensure 'password' matches your input
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('name', 'password'))) {  // Ensure keys match your form inputs
            return redirect()->intended('admin.index'); // Adjust this to your desired redirect
        }

        // If login fails, redirect back with an error
        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect()->route('login'); 
    }
    public function showAdminPage()
    {
        return view('admin.index'); 
}
}
