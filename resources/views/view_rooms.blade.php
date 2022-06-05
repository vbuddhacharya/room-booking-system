<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/roomview.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @include('layouts.nav')
    <div class="info">
        <div class="info-in smallinp">
            <p class="lab fontclass">Booking ID:</p>
            <input type="text" name="number" id="" value = "{{$book->id}}" readonly>
        </div>
        <div class="info-in biginp">
            <p class="lab fontclass">Name:</p>
            <input type="text" name="name" id="" value = "{{$book->user->name}}" readonly>
        </div>
        <div class="info-in biginp">
            <p class="lab fontclass">Contact:</p>
            <input type="text" name="contact" id="inpu" value = "{{$book->contact}}" readonly>
        </div>
    </div>
    <table class="table table-hover table-sm" id="res">
        <thead class=" thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Location</th>
            <th scope="col">Rate</th>
            <th scope="col">Type</th>
            <th scope="col">Size</th>
            <th scope="col">Bookings</th>
          </tr>
        </thead>
        <tbody>
             @foreach($book->rooms as $room)
                <tr>
                <th scope="row">{{$room->id}}</th>
                    <td>{{$room->location}}</td>
                     <td>{{$room->rate}}</td>
                                        <td>{{$room->type}}</td>
                                        <td>{{$room->size}}</td>
                                        @if(Auth::user()->isAdmin==1)
                                        <td><form action = "{{route('room.bookings')}}" method="get">
                                        @csrf
                                        <input type="hidden" name="id" value = "{{$room->id}}">
                                        <button class="btn btn-outline-danger btn-sm">View Bookings</button>
                                        </form></td>
                                        @endif
                                    </tr>
                            @endforeach
                        </table>
</body>
</html>