<x-layout/>
<body>
    <div>
        <h1>Rooms Category</h1>
        <ul>
            @foreach($categories as $category)
                <li>{{ $category->roomname }}</li>
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
        </ul>
    </div>
</body>
</html>
