<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/add_room.css')}}">
    <title>Add Rooms</title>
    <link rel = "icon" href = "{{asset('images/logoillustration/mainlogo.png')}}" type = "image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

</head>
<body>
@include('layouts.nav')
<div class="bg">
    <div class="add-rooms">
        <h1 style="color:#8A191D">Add Room</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('create.room')}}" method = "post">
            @csrf
            <div class="form-group">
                <label for="Room Number">Room Number</label>
                <input type="number" class="form-control inputstl" id="Room Number" placeholder="Room Number">
            </div>
            <div class="form-group">
                <label for="Room Location">Room Location</label>
                <select class="form-control inputstl" name="location" >
                    <option value="" selected="selected">Select</option>
                    <option value="First Floor">First Floor</option>
                    <option value="Second Floor">Second Floor</option>
                    <option value="Third Floor">Third Floor</option>
                    <option value="Fourth Floor">Fourth Floor</option>
                    <option value="Fifth Floor">Fifth Floor</option>  
                </select>
            </div> 
            <div class="form-group">
                <label for="Room Type">Room Type</label>
                <select class="form-control inputstl" name="type">
                    <option value="" selected="selected">Select</option>
                    <option value="Standard">Standard</option>
                    <option value="Deluxe">Deluxe</option>
                    <option value="Suite">Suite</option>
                </select>
            </div>    
            <div class="form-group">
                <label for="Room Size">Room Size</label>
                <select class="form-control inputstl" name="size">
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                </select>
            </div> 
            Rate: <input type="number" name="rate" id=""><br>
            <br>
            <input type="hidden" name="booked" value = '0'>
            <center>
            <button type="submit" id="btn1">Confirm</button>
            <button type="reset" id="btn2">Reset</button>
            </center>
        </form>
    </div>
</div>
</body>
</html>