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
    
        <div class = "content">
                <div class = "text">
                   <h1><font color="#8A191D">Admin Dashboard</font></h1>
                </div>
                <div class = "room">
                    <h2>Room Information</h2>
                    <table>
                        <tr><th>Room Number</th><th>Location</th><th>Rate</th><th>Type</th><th>Booked</th><th colspan="2">Actions</th>
                        </tr>
                        @foreach($rooms as $room)
                                <tr>
                                    <td>{{$room->roomNo}}</td>
                                    <td>{{$room->location}}</td>
                                    <td>{{$room->rate}}</td>
                                    <td>{{$room->type}}</td>
                                    <td>{{$room->booked}}</td>
                                    <td><form action = "{{route('edit.room')}}" method="get">
                                    @csrf
                                    <input type="hidden" name="id" value = "{{$room->roomNo}}">
                                    <button>Edit</button>
                                    </form></td>
                                    <td><form action="{{route('delete.room',['id'=>$room->roomNo])}}" method="POST"  onsubmit="return confirmDel()">
                                    @csrf
                                    <button>Delete</button>
                                    </form></td>
                                </tr>
                        @endforeach
                        <tr><td  colspan = "7"><form action="{{route('add.room')}}">@csrf<button>Add Room</button></form></td></tr>
                    </table>
                </div>
                <div class = "customers">
                    <h2>Customer Information</h2>
                    <table>
                        <tr><th>User ID</th><th>Name</th><th>Email</th><th colspan="2">Actions</th>
                        </tr>
                        @foreach($users as $user)
                            @if(!$user->isAdmin)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><form action="{{route('view.booking',['id'=>$user->id])}}">
                                    @csrf    
                                    <button>View Bookings</button>
                                    </form></td>
                                    <td><form action="{{route('delete.cust',['id'=>$user->id])}}" method="POST" onsubmit="return confirmDel()">
                                    @csrf
                                    <button >Delete</button>
                                    </form></td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>
    </body>
    
</html>