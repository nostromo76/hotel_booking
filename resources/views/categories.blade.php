<x-layout/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms Category</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body
    body class="bg-gray-100">
    \<div class="container mx-auto mt-10">
        <h1 class="text-4xl font-bold mb-6 text-center">Rooms Category</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($categories as $category)
                <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105">
                    <h4 class="text-2xl font-semibold text-gray-800">{{ $category->roomname }}</h4>
                    <hr class="my-2 border-gray-300">
                    @foreach($category->rooms as $room)
                        <h6 class="text-gray-600">Room Number: <strong>{{ $room->room_number }}</strong></h6>
                    @endforeach
                    <h6 class="text-gray-600">No of Beds: <strong>{{ $category->no_bed }}</strong> {{ $category->bedtype }} bed.</h6>
                    <h6 class="text-gray-600">Facilities: <strong>{{ $category->facility }}</strong></h6>
                    <h6 class="text-gray-600">Price: <strong>{{ $category->price }} tk/night</strong></h6>
                    <div class="mt-4">
                        <a href="{{ route('book', $category->roomname) }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition duration-200">Book Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    

</body>
</html>
