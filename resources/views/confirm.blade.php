<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/confirm.css')}}">
    <title>Confirmation</title>
</head>
<body>
    @include('layouts.nav')
    <div class = "wrapper">
        <div class = "title">Booking Confirmation</div>
    <form action="{{route('store.booking')}}" method="post">
    @csrf
    <div class="form-container">
        <div class = "date">
                <label for="from">Arrival</label>
                <input type="text" id="from" name="from" value="{{$values['from']}}" readonly>
                <label for="to">Departure</label>
                <input type="text" id="to" name="to" value="{{$values['to']}}" readonly>
        </div>
        <div class = "rooms-choose">
            <div class="con">
            <p class = "change">Contact</p>
        
            <input type="text" name = "contact" value="{{$values['contact']}}" readonly>
        </div>
            <div class="room-choice">
            <p class = "change">No. of Guests</p>
            <input type="text" name="guests" id="" value ="{{$values['guests']}}" readonly>
            </div>
            <div class="room-choice">
            <p class = "change">No. of Rooms</p>
            <input type="text" name="rooms" id="" value = "{{$values['rooms']}}" readonly>
            </div>
            <div class="room-choice">
            <p class = "change">No. of Days</p>
            <input type="text" name="days" id="" value = "{{$days}}" readonly>
            </div>
            <div class="room-choice">
            <?php $i= 0 ?>
                @foreach($roomNumbers as $number)
                <div class = "room-num">
                <p class = "change">Room</p><input type="text" name = "roomNo[]" value = "{{$number}}" readonly ><br>
                <p class = "change">Rate</p><input type="text" name="rate[]" id="" value = "{{$rate[$i++]}}" readonly>
            </div>
                @endforeach
            </div>
            <div class="room-choice total">
            <p class = "change">Total</p>
        <input type="text" name="total" id="" value = "{{$total}}">
            </div>
        </div>
        
        <input type="hidden" name="user" value = "{{Auth::user()->id}}">
        <p id ="info">Please Note: Once confirmed, bookings cannot be canceled.</p>
        <div class = "buttons">
        <button type="submit" name = "choose" value = "confirm">Confirm</button>
        <button type="submit" name = "choose" value="discard">Discard</button>
        </div>
        
    </div>
    </form>
    </div>
</body>
</html>