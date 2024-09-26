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
        return view('rooms'); // Create rooms.blade.php
    }

    public function reservation()
    {
        return view('reservation'); // Create reservation.blade.php
    }

    public function admin()
    {
        return view('admin'); // Create admin.blade.php
    }
}
