<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>index</title>
        <link rel="stylesheet" href="{{asset('css/admin_panel.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script>
        function confirmDel(){
            return confirm('Are you sure you want to delete data?');
        }
    </script>

    </head>
    <body style="background-color: #F5F5F5">
        @include('layouts.nav')
        <div class="text-1">Room Information</div>
        <table class="table table-hover table-sm" style="margin-left:15%; width:70%; background-color:#fff">
            <thead class=" thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Location</th>
                <th scope="col">Rate</th>
                <th scope="col">Type</th>
                <th scope="col">Size</th>
                <th scope="col">Bookings</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                        <tr>
                            <th scope="row">{{$room->id}}</th>
                            <td>{{$room->location}}</td>
                            <td>{{$room->rate}}</td>
                            <td>{{$room->type}}</td>
                            <td>{{$room->size}}</td>
                            <td><form action = "{{route('room.bookings')}}" method="get">
                            @csrf
                            <input type="hidden" name="id" value = "{{$room->id}}">
                            <button class="btn btn-outline-danger btn-sm" >View Bookings</button>
                            </form></td>
                            <td><form action = "{{route('edit.room')}}" method="get">
                            @csrf
                            <input type="hidden" name="id" value = "{{$room->id}}">
                            <button class="btn btn-outline-danger btn-sm">Edit</button>
                            </form></td>
                            <td><form action="{{route('delete.room',['id'=>$room->id])}}" method="POST"  onsubmit="return confirmDel()">
                            @csrf
                            <button class="btn btn-outline-danger btn-sm">Delete</button>
                            </form></td>
                        </tr>

                @endforeach
            </tbody>
          </table>
          <center><form action="{{route('add.room')}}">@csrf<button class="btn btn-outline-danger btn-sm">Add Room</button></form></center>
          <div class="text-1">Customer Information</div>
          <div class="table-responsive">
        <table class="table table-hover table-sm" style="margin-left:15%; width:70%; background-color:#fff">
            <thead class=" thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Bookings</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    @if(!$user->isAdmin)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><form action="{{route('view.booking')}}" method="get">
                            @csrf    
                            <input type="hidden" name="id" value = "{{$user->id}}">
                            <button class="btn btn-outline-danger btn-sm">View Bookings</button>
                            </form></td>
                            <td><form action="{{route('delete.user',['id'=>$user->id])}}" method="POST" onsubmit="return confirmDel()">
                            @csrf
                            <button class="btn btn-outline-danger btn-sm">Delete</button>
                            </form></td>
                        </tr>
                    @endif
                @endforeach
             </tbody>
            </table>
        </div>
        <div class="text-1">Admin Information</div>
            <div class="table-responsive">
        <table class="table table-hover table-sm" style="margin-left:15%; width:70%; background-color:#fff">
            <thead class=" thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    @if($user->isAdmin)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><form action="{{route('delete.user',['id'=>$user->id])}}" method="POST" onsubmit="return confirmDel()">
                            @csrf
                            <button class="btn btn-outline-danger btn-sm">Delete</button>
                            </form></td>
                        </tr>
                    @endif
                @endforeach
                
                    </tbody>
                </table>
            </div>
                <center><form action="{{route('add.admin')}}">@csrf<button class="btn btn-outline-danger btn-sm">Add Admin</button></form></center>
                <div class="text-1">Booking Information</div>
                <div class="table-responsive">
                <table class="table table-hover table-sm bl" style="margin-left:15%; width:70%; background-color:#fff">
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
                        <th scope="col">Room Numbers</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $book)
                                <tr>
                                    <th scope="raw">{{$book->id}}</th>
                                    <td>{{$book->user->name}}</td>
                                    <td>{{$book->user->email}}</td>
                                    <td>{{$book->contact}}</td>
                                    <td>{{$book->no_of_rooms}}</td>
                                    <td>{{$book->no_of_people}}</td>
                                    <td>{{$book->from_date}}</td>
                                    <td>{{$book->to_date}}</td>
                                    <td>{{$book->days}}</td>
                                    <td><form action="{{route('view.rooms')}}" method="get">
                                    @csrf
                                    <input type="hidden" name="id" value = "{{$book->id}}">
                                    <button class="btn btn-outline-danger btn-sm">View Rooms</button>
                                    </form></td>
                                    <td><form action="{{route('delete.booking',['id'=>$book->id])}}" method="POST" onsubmit="return confirmDel()">
                                    @csrf
                                    <button class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form></td>
                                </tr>
                        @endforeach
                            </tbody>
                    </table>
                </div>
    </body>
    
</html>