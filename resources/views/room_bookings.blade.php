<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('layouts.nav')
    <label for="number">Room Number</label>
    <input type="text" name="number" id="" value = "{{$rooms->id}}" readonly>
    <label for="number">Location</label>
    <input type="text" name="location" id="" value = "{{$rooms->location}}" readonly>
    <label for="number">Type</label>
    <input type="text" name="type" id="" value = "{{$rooms->type}}" readonly>
    <label for="number">Size</label>
    <input type="text" name="size" id="" value = "{{$rooms->size}}" readonly>
    <table>
    <tr><th>Booking ID</th><th>Name</th><th>Email</th><th>Contact</th><th>No. of Rooms</th><th>No. of Guests</th><th>Arrival</th><th>Departure</th><th>Days</th><th>Actions</th>
                        </tr>
                        @foreach($rooms->bookings as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td>{{$book->user->name}}</td>
                                    <td>{{$book->user->email}}</td>
                                    <td>{{$book->contact}}</td>
                                    <td>{{$book->no_of_rooms}}</td>
                                    <td>{{$book->no_of_people}}</td>
                                    <td>{{$book->from_date}}</td>
                                    <td>{{$book->to_date}}</td>
                                    <td>{{$book->days}}</td>
                                    <td><form action="{{route('delete.booking',['id'=>$book->id])}}" method="POST" onsubmit="return confirmDel()">
                                    @csrf
                                    <button >Delete</button>
                                    </form></td>
                                </tr>
                        @endforeach
                    </table>
</body>
</html>