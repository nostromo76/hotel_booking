<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<div id="bookingModal{{ $roomId }}" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-lg font-bold mb-4">Book Room</h2>
        <form id="bookingForm{{ $roomId }}" method="POST" action="{{ route('book', $roomId) }}">
            @csrf
            <input type="hidden" name="room_id" value="{{ $roomId }}">
            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Phone</label>
                <input type="text" name="phone" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Check-in Date</label>
                <input type="date" name="checkin_date" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Check-out Date</label>
                <input type="date" name="checkout_date" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>
            <div class="flex justify-end">
                <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="closeModal({{ $roomId }})">Cancel</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Book Now</button>
            </div>
        </form>
    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        flatpickr("input[type=date]", {
            minDate: "today", // Prevent past dates
        });
    });
</script>

