<x-layout/>



<!DOCTYPE html>
<html>
<head>
    <title>Rooms</title>
</head>
<body>
    <h1>Rooms List</h1>
    <table border="1">
        <tr>
            <th>Room ID</th>
            <th>Room Category</th>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Booking Status</th>
        </tr>
        @foreach($rooms as $room)
            <tr>
                <td>{{ $room->room_id }}</td>
                <td>{{ $room->room_cat }}</td>
                <td>{{ $room->checkin === '0000-00-00' ? 'Not Set' : $room->checkin }}</td>
                <td>{{ $room->checkout === '0000-00-00' ? 'Not Set' : $room->checkout }}</td>
                <td>{{ $room->name ?: 'Not Provided' }}</td>
                <td>{{ $room->phone ?: 'Not Provided' }}</td>
                <td>{{ $room->book === 'true' ? 'Booked' : 'Available' }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
