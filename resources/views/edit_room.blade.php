<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rooms</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('update.room',['id'=>$room->roomNo])}}" method="post">
        @csrf
        Room Number: <input type="number" name="roomNo" id="" value = "{{$room->roomNo}}"><br>
        Room Location: <select name="location" id="">
            @foreach($locs as $loc)
            <option value="{{$loc}}" @if($room->location==$loc) selected @endif>{{$loc}}</option>
            @endforeach
        </select><br>
        
        Room Type: <select name="type" id="">
            @foreach($types as $type)
            <option value="{{$type}}" @if($room->type==$type) selected @endif>{{$type}}</option>
            @endforeach
        </select><br>
        Rate: <input type="number" name="rate" value = "{{$room->rate}}" id=""><br>
        <button type="submit">Confirm</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
<!-- Room Type: <select name="type" id="">
            <option value="" selected="selected">Select</option>
            <option value="Standard" {{$room->type == "Standard" ? 'selected' : ''>Standard</option>
            <option value="Standard" @if($room->type=='Standard') selected @endif>Standard</option>
            <option value="Deluxe">Deluxe</option>
            <option value="Suite">Suite</option>
        </select><br>
    -->