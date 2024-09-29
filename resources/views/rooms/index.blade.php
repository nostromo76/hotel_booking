<x-layout/>


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
                            <p class="card-text">Check-in: {{ $room->checkin !== '0000-00-00' ? $room->checkin : 'Not set' }}</p>
                            <p class="card-text">Check-out: {{ $room->checkout !== '0000-00-00' ? $room->checkout : 'Not set' }}</p>
                            <p class="card-text">Name: {{ $room->name ?: 'Not provided' }}</p>
                            <p class="card-text">Phone: {{ $room->phone ?: 'Not provided' }}</p>
                            <p class="card-text">Booked: {{ $room->book === 'true' ? 'Yes' : 'No' }}</p>
                            <a href="{{ route('rooms.show', $room->room_id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div> 
            @endforeach
        </div>
    @endif
</div>
@endsection
