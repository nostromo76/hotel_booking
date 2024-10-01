<?php
namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; 
use Illuminate\Support\Facades\Log;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all(); // Retrieve all rooms
        return view('rooms.index', compact('rooms')); // Pass them to the view
    }
    

    public function show($room_id)
{
    $room = Room::where('room_id', $room_id)->firstOrFail(); // This will throw a 404 if not found
    return view('rooms.show', compact('room'));
}
public function book(Request $request, $room_Id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'checkin_date' => 'required|date',
        'checkout_date' => 'required|date|after:checkin_date',
    ]);

    try {
        $room = Room::findOrFail($room_Id);
        $room->name = $request->input('name');
        $room->phone = $request->input('phone');
        $room->checkin = $request->input('checkin_date');
        $room->checkout = $request->input('checkout_date');
        $room->book = 'Booked'; // Set to 'Booked'
        $room->save();

        return redirect()->route('rooms')->with('success', 'Room booked successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Failed to reserve the room. Please try again.');
    }
}


}
    









