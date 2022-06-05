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
<div class="info-in biginp">
<p class="lab fontclass">Name</p>
    <input type="text" name="name" id="" value = "{{$user->name}}" readonly>
</div>
<div class="info-in smallinp">
    <p class="lab fontclass">Total Bookings</p>
    <input type="text" name="number" id="" value = "{{$count}}" readonly>
</div>
</div>
    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead class=" thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Contact</th>
                <th scope="col">Rooms</th>
                <th scope="col">Guests</th>
                <th scope="col">Arrival</th>
                <th scope="col">Depart</th>
                <th scope="col">Days</th>
                @if(Auth::user()->isAdmin==1)
                    <th scope="col">Delete</th>
                @endif
                <th scope="col">View Rooms</th>
              </tr>
            </thead>
            <tbody>
        @foreach($user->bookings as $book)
            <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->contact}}</td>
                    <td>{{$book->no_of_rooms}}</td>
                    <td>{{$book->no_of_people}}</td>
                    <td>{{$book->from_date}}</td>
                    <td>{{$book->to_date}}</td>
                    <td>{{$book->days}}</td>
                    
                    @if(Auth::user()->isAdmin==1)
                    <td>
                    <form action="{{route('delete.booking',['id'=>$book->id])}}" method="POST" onsubmit="return confirmDel()">
                        @csrf
                        <button class="btn btn-outline-danger btn-sm">Delete</button>
                    </form></td>
                    @endif
                    <td>
                    <form action="{{route('view.rooms')}}" method="get">
                         @csrf
                        <input type="hidden" name="id" value = "{{$book->id}}">
                        <button class="btn btn-outline-danger btn-sm">View Rooms</button>
                        </form>
                    </td>
                 </tr>
            @endforeach
                </tbody>
        </table>
</body>
</html>