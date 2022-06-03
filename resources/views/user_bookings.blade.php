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
    <label for="number">Name</label>
    <input type="text" name="name" id="" value = "{{$user->id}}" readonly>
    <label for="number">Number of Bookings</label>
    <input type="text" name="number" id="" value = "{{$count}}" readonly>
    <table>
        <tr><th>Booking ID</th><th>Contact</th><th>No. of Rooms</th><th>No. of Guests</th><th>Arrival</th><th>Departure</th><th>Days</th><th>Actions</th>
        </tr>
        @foreach($user->bookings as $book)
            <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->contact}}</td>
                    <td>{{$book->no_of_rooms}}</td>
                    <td>{{$book->no_of_people}}</td>
                    <td>{{$book->from_date}}</td>
                    <td>{{$book->to_date}}</td>
                    <td>{{$book->days}}</td>
                    <td>
                    @if(Auth::user()->isAdmin==1)
                    <form action="{{route('delete.booking',['id'=>$book->id])}}" method="POST" onsubmit="return confirmDel()">
                        @csrf
                        <button >Delete</button>
                    </form></td>
                    @endif
                    <form action="{{route('view.rooms')}}" method="get">
                         @csrf
                        <input type="hidden" name="id" value = "{{$book->id}}">
                        <button >View Rooms</button>
                        </form>
                    </td>
                 </tr>
            @endforeach
        </table>
</body>
</html>