<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>index</title>
        <link rel="stylesheet" href="{{asset('css/admin.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
        function confirmDel(){
            return confirm('Are you sure you want to delete data?');
        }
    </script>

    </head>
    <body>
        @include('layouts.nav')
        <div class = "flex-container">
                <div class = "text">
                   <h1><font color="#8A191D">Admin Dashboard</font></h1>
                </div>
                <div class = "room">
                    <h2>Room Information</h2>
                    <div class = "">
                        <table id = "info" height = "100px">
                            <tr"><th>Room Number</th><th>Location</th><th>Rate</th><th>Type</th><th>Size</th><th colspan="3">Actions</th>
                            </tr>
                            @foreach($rooms as $room)
                                    <tr>
                                        <td>{{$room->id}}</td>
                                        <td>{{$room->location}}</td>
                                        <td>{{$room->rate}}</td>
                                        <td>{{$room->type}}</td>
                                        <td>{{$room->size}}</td>
                                        <td><form action = "{{route('room.bookings')}}" method="get">
                                        @csrf
                                        <input type="hidden" name="id" value = "{{$room->id}}">
                                        <button>View Bookings</button>
                                        </form></td>
                                        <td><form action = "{{route('edit.room')}}" method="get">
                                        @csrf
                                        <input type="hidden" name="id" value = "{{$room->id}}">
                                        <button>Edit</button>
                                        </form></td>
                                        <td><form action="{{route('delete.room',['id'=>$room->id])}}" method="POST"  onsubmit="return confirmDel()">
                                        @csrf
                                        <button>Delete</button>
                                        </form></td>
                                    </tr>
                            @endforeach
                            <tr><td  colspan = "7"><form action="{{route('add.room')}}">@csrf<button>Add Room</button></form></td></tr>
                        </table>
                    </div>
                </div>
                <div class = "customers">
                    <h2>Customer Information</h2>
                    <table id = "info">
                        <tr><th>User ID</th><th>Name</th><th>Email</th><th colspan="2">Actions</th>
                        </tr>
                        @foreach($users as $user)
                            @if(!$user->isAdmin)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><form action="{{route('view.booking')}}" method="get">
                                    @csrf    
                                    <input type="hidden" name="id" value = "{{$user->id}}">
                                    <button>View Bookings</button>
                                    </form></td>
                                    <td><form action="{{route('delete.user',['id'=>$user->id])}}" method="POST" onsubmit="return confirmDel()">
                                    @csrf
                                    <button >Delete</button>
                                    </form></td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
                <div class = "admin">
                    
                    <h2>Administrator Information</h2>
                    <table id="info" width=10px>
                        <tr><th>User ID</th><th>Name</th><th>Email</th><th>Actions</th>
                        </tr>
                        @foreach($users as $user)
                            @if($user->isAdmin)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><form action="{{route('delete.user',['id'=>$user->id])}}" method="POST" onsubmit="return confirmDel()">
                                    @csrf
                                    <button >Delete</button>
                                    </form></td>
                                </tr>
                            @endif
                        @endforeach
                        <tr><td  colspan = "7"><form action="{{route('add.admin')}}">@csrf<button>Add Admin</button></form></td></tr>
                    </table>
                </div>
                <div class = "bookings">
                    
                    <h2>Booking Information</h2>
                    <table id="info" width=10px>
                        <tr><th>Booking ID</th><th>Name</th><th>Email</th><th>Contact</th><th>No. of Rooms</th><th>No. of Guests</th><th>Arrival</th><th>Departure</th><th>Days</th><th>Actions</th>
                        </tr>
                        @foreach($bookings as $book)
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
                                    <td><form action="{{route('view.rooms')}}" method="get">
                                    @csrf
                                    <input type="hidden" name="id" value = "{{$book->id}}">
                                    <button >View Rooms</button>
                                    </form></td>
                                    <td><form action="{{route('delete.booking',['id'=>$book->id])}}" method="POST" onsubmit="return confirmDel()">
                                    @csrf
                                    <button >Delete</button>
                                    </form></td>
                                </tr>
                        @endforeach
                    </table>
                </div>
            </div>
    </body>
    
</html>