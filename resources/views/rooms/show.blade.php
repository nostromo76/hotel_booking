<x-layout/>
@section('content')
<div class="container">
    <h1>Room Details</h1>

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
@endsection
