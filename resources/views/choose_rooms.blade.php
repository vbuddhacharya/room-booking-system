<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Rooms</title>
</head>
<body>
    @include('layouts.nav')
    <form action="{{route('confirm.rooms')}}" method="post">
        @csrf
        <div class = "date">
                <label for="from">Arrival</label>
                <input type="text" id="from" name="from" value="{{$values['from']}}" readonly>
                <label for="to">Departure</label>
            <input type="text" id="to" name="to" value="{{$values['to']}}" readonly>
        </div>
        <div class = "rooms-choose">
            <label for="rooms">No. of Rooms</label>
            <select name="rooms" id="" readonly>
                        @for($i=1;$i<=10;$i++)
                            <option value = "{{$i}}" @if($i==$values['rooms']) selected @endif>{{$i}}</option>
                        @endfor
            </select><br>
            <label for="guests">No. of Guests</label>
            <input type="number" name="guests" id="" value ="{{$values['guests']}}" readonly>
        </div>
        <div class = "room-form">
            <label for="contact">Contact</label>
            <input type="text" name = "contact">
            @for($j=1;$j<=$values['rooms'];$j++)
                <h2>{{$j}}</h2>
                <label for="type">Room Type</label>
                <select name="type[]" id="">
                    <option value="Standard" selected>Standard</option>
                    <option value="Deluxe">Deluxe</option>
                    <option value="Suite">Suite</option>
                </select>
                <label for="size">Beds</label>
                <select name="size[]" id="">
                    <option value="Single" selected>Single</option>
                    <option value="Double">Double</option>
                </select>
                <label for="location">Location (*optional)</label>
                <select name="location[]" id="">
                    <option value="">Select a floor</option>
                    <option value="First Floor">First Floor</option>
                    <option value="Second Floor">Second Floor</option>
                    <option value="Third Floor">Third Floor</option>
                    <option value="Fourth Floor">Fourth Floor</option>
                    <option value="Fifth Floor">Fifth Floor</option>
                </select>
            @endfor
        </div>
            <input type="hidden" name="user" value = "{{Auth::user()->id}}">
            <button type="submit" name = "action" value = "confirm">Continue</button>
            <button type="submit" name = "action" value = "discard">Go Back</button>
    </form>
</body>
</html>