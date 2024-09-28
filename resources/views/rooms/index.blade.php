<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<body>
    <h1>Test Page</h1>
</body>
</html>
@section('content')
<div class="container">
    <h1>Available Rooms</h1>

    @if($rooms->isEmpty())
        <p>No rooms available at the moment.</p>
    @else
        <div class="row">
            @foreach($rooms as $room)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Room Category: {{ $room->room_cat }}</h5>
                            <p class="card-text">Check-in: {{ $room->checkin }}</p>
                            <p class="card-text">Check-out: {{ $room->checkout }}</p>
                            <p class="card-text">Name: {{ $room->name }}</p>
                            <p class="card-text">Phone: {{ $room->phone }}</p>
                            <p class="card-text">Booked: {{ $room->book ? 'Yes' : 'No' }}</p>
                            <a href="{{ route('book', $room->room_id) }}" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection