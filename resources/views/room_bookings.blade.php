<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/roombook.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    @include('layouts.nav')
    <div class="info">
        <p class="lab fontclass">Room Number:</p>
        <input type="text" name="number" id="" value = "{{$rooms->id}}" readonly>
        <p class="lab fontclass ">Location:</p>
        <input type="text" name="location" id="" value = "{{$rooms->location}}" readonly>
        <p class="lab fontclass">Type:</p>
        <input type="text" name="type" id="" value = "{{$rooms->type}}" readonly>
        <p class="lab fontclass">Size:</p>
        <input type="text" name="size" id="" value = "{{$rooms->size}}" readonly>
    </div>

    {{-- <label for="number">Room Number</label>
    <input type="text" name="number" id="" value = "{{$rooms->id}}" readonly>
    <label for="number">Location</label>
    <input type="text" name="location" id="" value = "{{$rooms->location}}" readonly>
    <label for="number">Type</label>
    <input type="text" name="type" id="" value = "{{$rooms->type}}" readonly>
    <label for="number">Size</label>
    <input type="text" name="size" id="" value = "{{$rooms->size}}" readonly> --}}
    <div class="text-1">Bookings</div>
    <div class="table-responsive">
        <table class="table table-hover table-sm" style="margin-left:8%; width:80%">
            <thead class=" thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Rooms</th>
                <th scope="col">Guests</th>
                <th scope="col">Arrival</th>
                <th scope="col">Depart</th>
                <th scope="col">Days</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                        @foreach($rooms->bookings as $book)
                                <tr>
                                    <th scope = "row">{{$book->id}}</th>
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
                                    <button class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form></td>
                                </tr>
                        @endforeach
                            </tbody>
                    </table>
</body>
</html>