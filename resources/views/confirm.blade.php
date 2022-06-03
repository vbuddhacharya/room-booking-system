<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('layouts.nav')
    <form action="{{route('store.booking')}}" method="post">
    @csrf

        <div class = "date">
                <label for="from">Arrival</label>
                <input type="text" id="from" name="from" value="{{$values['from']}}" readonly>
                <label for="to">Departure</label>
            <input type="text" id="to" name="to" value="{{$values['to']}}" readonly>
        </div>
        <div class = "information">
            <label for="contact">Contact</label>
            <input type="text" name = "contact" value="{{$values['contact']}}" readonly>
            <label for="guests">No. of Guests</label>
            <input type="number" name="guests" id="" value ="{{$values['guests']}}" readonly>
            <label for="rooms">No. of Rooms</label>
            <input type="text" name="rooms" id="" value = "{{$values['rooms']}}" readonly>
            <label for="rooms">No. of Days</label>
            <input type="text" name="days" id="" value = "{{$days}}" readonly>
            <label for="roomNums">Room Numbers</label>
            <?php $i= 0 ?>
                @foreach($roomNumbers as $number)
                <input type="text" name = "roomNo[]" value = "{{$number}}" readonly ><br>
                <input type="text" name="rate[]" id="" value = "{{$rate[$i++]}}" readonly>
                @endforeach
        </div>
        <label for="total">Total</label>
        <input type="text" name="total" id="" value = "{{$total}}">
        <input type="hidden" name="user" value = "{{Auth::user()->id}}">
        <button type="submit" name = "choose" value = "confirm">Confirm</button>
        <button type="submit" name = "choose" value="discard">Discard</button>
        <p>Please Note: Once confirmed, bookings cannot be canceled.</p>
    </form>
</body>
</html>