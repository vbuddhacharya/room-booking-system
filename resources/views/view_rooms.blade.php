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
    <label for="number">Booking ID</label>
    <input type="text" name="number" id="" value = "{{$book->id}}" readonly>
    <label for="name">Name</label>
    <input type="text" name="name" id="" value = "{{$book->user->name}}" readonly>
    <label for="contact">Contact</label>
    <input type="text" name="contact" id="" value = "{{$book->contact}}" readonly>
    <label for="rooms">Number of Rooms</label>
    <input type="text" name="rooms" id="" value = "{{$book->no_of_rooms}}" readonly>
    <label for="guests">Number of Guests</label>
    <input type="text" name="guests" id="" value = "{{$book->no_of_people}}" readonly>
    <label for="arrive">Arrival</label>
    <input type="text" name="arrive" id="" value = "{{$book->from_date}}" readonly>
    <label for="depart">Departure</label>
    <input type="text" name="depart" id="" value = "{{$book->to_date}}" readonly>
    <label for="days">Number of Days</label>
    <input type="text" name="days" id="" value = "{{$book->days}}" readonly>
    <table id = "info" height = "100px">
                            <tr"><th>Room Number</th><th>Location</th><th>Rate</th><th>Type</th><th>Size</th>@if(Auth::user()->isAdmin==1)<th>Actions</th>@endif
                            </tr>
                            @foreach($book->rooms as $room)
                                    <tr>
                                        <td>{{$room->id}}</td>
                                        <td>{{$room->location}}</td>
                                        <td>{{$room->rate}}</td>
                                        <td>{{$room->type}}</td>
                                        <td>{{$room->size}}</td>
                                        @if(Auth::user()->isAdmin==1)
                                        <td><form action = "{{route('room.bookings')}}" method="get">
                                        @csrf
                                        <input type="hidden" name="id" value = "{{$room->id}}">
                                        <button>View Bookings</button>
                                        </form></td>
                                        @endif
                                    </tr>
                            @endforeach
                        </table>
</body>
</html>