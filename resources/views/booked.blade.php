<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/confirm.css')}}">
    <title>Document</title>
</head>
<body>
    @include('layouts.nav')
    <div class = "wrapper">
    <div class = "title">Booking Confirmed</div>
    
    <form action="{{route('home')}}">
        @csrf
        <div class="form-container">
            <div class="book">
                <div class="book-in">
            <p class = "change">Booking ID</p>
            <input type="text" name="booking" id="book-1" value = "{{$book->id}}" readonly>
                </div>
                <div class="book-in2">
            <p class = "change">Name</p>
            <input type="text" name="name" id="book-2" value = "{{$book->user->name}}" readonly>
                </div>
            </div>
            <div class = "date">
                <label for="from">Arrival</label>
                <input type="text" name="from" id="" value = "{{$book->from_date}}" readonly>
                <label for="to">Departure</label>
                <input type="text" name="to" id="" value = "{{$book->to_date}}" readonly>
            </div>
            <div class = "rooms-choose">
                <div class="con">
                    <p class = "change">Contact</p>
                    <input type="text" name="contact" id="" value = "{{$book->contact}}" readonly>
                </div>
                <div class="room-choice">
                    <p class = "change">No. of Guests</p>
                    <input type="text" name="guests" id="" value = "{{$book->no_of_people}}" readonly>
                </div>

                <div class="room-choice">
                    <p class = "change">No. of Rooms</p>
                    <input type="text" name="rooms" id="" value = "{{$book->no_of_rooms}}" readonly>
                </div>
                <div class="room-choice total">
                    <p class = "change">Total</p>
                    <input type="text" name="total" id="" value = "{{$book->total}}" readonly>
                </div>
            </div>
            <p class ="info-1">If you have any concerns, please contact the hotel.
                Thank you for trusting us to make your stay comfortable.
            </p> 
            <div class = "buttons">
                <button type="submit">Back to Home</button>
            </div>
        </div>   
    </form>
</div>
</body>
</html>