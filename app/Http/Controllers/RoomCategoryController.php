<?php
namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\RoomCategory;
use Illuminate\Http\Request;

class RoomCategoryController extends Controller
{
    public function index()
    {
        $categories = RoomCategory::all(); // Retrieve all room categories
        dd($categories); // Dump the categories and stop execution
        return view('reservations', compact('categories'));
    }

    public function show($roomname)
    {
        $category = RoomCategory::where('roomname', $roomname)->firstOrFail(); // This will throw a 404 if not found
        return view('reservations', compact('category'));
    }
}


