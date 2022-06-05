<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/choose_rooms.css')}}">
    <link rel = "icon" href = "{{asset('images/logoillustration/mainlogo.png')}}" type = "image/png">
    <title>Choose Rooms</title>
</head>
<body>
    @include('layouts.nav')
    <div class = "wrapper">
        <div class = "title">Pick Rooms</div>
    
    <form action="{{route('confirm.rooms')}}" method="post">
        @csrf
        <div class="form-container">
        <div class = "date">
                <label for="from">Arrival</label>
                <input type="text" id="from" name="from" value="{{$values['from']}}" readonly>
                <label for="to">Departure</label>
            <input type="text" id="to" name="to" value="{{$values['to']}}" readonly>
        </div>
        <div class = "rooms-choose">
            <div class = "nums">
                <p id = "change">Rooms</p>
            
            <input type="text" name="rooms" id="" value="{{$values['rooms']}}" readonly>
        </div>
        <div class = "nums">
            <p id = "change">Guests</p>
            <input type="text" name="guests" id="" value ="{{$values['guests']}}" readonly>
        </div>
        </div>
        <hr>
        @if ($errors->any())
        <div class="alert alert-danger">
            <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class = "room-form">
            <div class = "nums">
            <p id = "change">Contact</p>
            <input type="text" name = "contact"  value="{{old('contact')}}">
            </div>
            
            <div class = "choose">
            @for($j=1;$j<=$values['rooms'];$j++)
            <div class="room">
                <h4>Room {{$j}}</h4>
                <div class = "room-choice">
                <label for="type">Room Type</label>
                <select name="type[]" id="">
                    <option value="Standard" selected>Standard</option>
                    <option value="Deluxe">Deluxe</option>
                    <option value="Suite">Suite</option>
                </select>
                 </div>
                 <div class = "room-choice">
                <label for="size">Beds</label>
                <select name="size[]" id="">
                    <option value="Single" selected>Single</option>
                    <option value="Double">Double</option>
                </select>
            </div>
            <div class = "room-choice">
                <label for="location">Location (*optional)</label>
                <select name="location[]" id="">
                    <option value="0">Select a floor</option>
                    <option value="First Floor">First Floor</option>
                    <option value="Second Floor">Second Floor</option>
                    <option value="Third Floor">Third Floor</option>
                    <option value="Fourth Floor">Fourth Floor</option>
                    <option value="Fifth Floor">Fifth Floor</option>
                </select>
            </div>
            </div>
            @endfor
        </div>
        </div>
            <input type="hidden" name="user" value = "{{Auth::user()->id}}">
            <div class = "buttons">
            <button type="submit" name = "action" value = "confirm">Continue</button>
            <button type="submit" name = "action" value = "discard">Go Back</button>
        </div>
    </div>
    </form>
    </div>
</body>
</html>