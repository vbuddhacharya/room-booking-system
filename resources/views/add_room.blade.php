<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Rooms</title>
</head>
<body>
@include('layouts.nav')
    <h1>Add Room</h1>
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
        Room Number: <input type="number" name="id" id=""><br>
        Room Location: <select name="location" id="">
            <option value="" selected="selected">Select</option>
            <option value="First Floor">First Floor</option>
            <option value="Second Floor">Second Floor</option>
            <option value="Third Floor">Third Floor</option>
            <option value="Fourth Floor">Fourth Floor</option>
            <option value="Fifth Floor">Fifth Floor</option>
        </select><br>
        Room Type: <select name="type" id="">
            <option value="" selected="selected">Select</option>
            <option value="Standard">Standard</option>
            <option value="Deluxe">Deluxe</option>
            <option value="Suite">Suite</option>
        </select><br>
        Room Size: <select name="size" id="">
            <option value="Single">Single</option>
            <option value="Double">Double</option>
        </select>
        Rate: <input type="number" name="rate" id=""><br>
        <input type="hidden" name="booked" value = '0'>
        <button type="submit">Confirm</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>