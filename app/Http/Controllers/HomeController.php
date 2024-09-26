<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function rooms()
    {
        return view('rooms');
    }

    public function reservation()
    {
        return view('reservation'); 
    }

    public function admin()
    {
        return view('admin'); 
    }
}
