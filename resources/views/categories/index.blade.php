<x-layout/>


<body>
    <div>
        <h1>Rooms Category</h1>
        <table>
            <thead>
                <tr>
                    <th>Room Name</th>
                    <th>Room Quantity</th>
                    <th>Available</th>
                    <th>Booked</th>
                    <th>Number of Beds</th>
                    <th>Facility</th>
                    <th>Bed Type</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->roomname }}</td>
                        <td>{{ $category->room_qnty }}</td>
                        <td>{{ $category->available }}</td>
                        <td>{{ $category->booked }}</td>
                        <td>{{ $category->no_bed }}</td>
                        <td>{{ $category->facility }}</td>
                        <td>{{ $category->bedtype }}</td>
                        <td>{{ $category->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
