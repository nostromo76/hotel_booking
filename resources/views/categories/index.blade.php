<x-layout/>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Rooms Category </h1>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Room Name</th>
                        <th scope="col" class="px-6 py-3">Room Category</th>
                        <th scope="col" class="px-6 py-3">Check-in Date</th>
                        <th scope="col" class="px-6 py-3">Check-out Date</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Phone</th>
                        <th scope="col" class="px-6 py-3">Booking Status</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $room->room_id }}</td>
                            <td class="px-6 py-4">{{ $room->room_cat }}</td>
                            <td class="px-6 py-4">{{ $room->checkin === '0000-00-00' ? 'Not Set' : $room->checkin }}</td>
                            <td class="px-6 py-4">{{ $room->checkout === '0000-00-00' ? 'Not Set' : $room->checkout }}</td>
                            <td class="px-6 py-4">{{ $room->name ?: 'Not Provided' }}</td>
                            <td class="px-6 py-4">{{ $room->phone ?: 'Not Provided' }}</td>
                            <td class="px-6 py-4">{{ $room->book === 'true' ? 'Booked' : 'Available' }}</td>
                            <td class="px-6 py-4">
                                @if($room->book === 'false')
                                    <button 
                                        class="text-blue-600 hover:underline" 
                                        onclick="openModal({{ $room->room_id }})">
                                        Book Now
                                    </button>
                                    <x-booking-modal :roomId="$room->room_id" />
                                @else
                                    <span class="text-gray-500">N/A</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>