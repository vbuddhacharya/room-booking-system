<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booking</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <script>
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1
          
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
</head>
<body>
    @include('layouts.nav');
    <div class = "content">
        <form action="{{route('choose.rooms')}}" method="get">
          @csrf
            <div class = "date">
                <label for="from">From</label>
                <input type="text" id="from" name="from" value="{{old('from')}}">
                <label for="to">to</label>
                <input type="text" id="to" name="to" value="{{old('to')}}">
            </div>
            <div class ="rooms-choose">
                <label for="rooms">No. of Rooms</label>
                <select name="rooms" id="">
                    @for($i=1;$i<=10;$i++)
                        <option value = "{{$i}}" @selected(old('rooms')==$i)>{{$i}}</option>
                    @endfor
                </select><br>
                <label for="guests">No. of Guests(Max 4 in each room)</label>
                <input type="number" name="guests" id="">
                @if ($errors->any())
                  <div class="alert alert-danger">
                          @foreach ($errors->all() as $error)
                              {{ $error }} <br/>
                          @endforeach
                  </div>
              @endif
                <br>
                <button type="submit">Confirm</button>
            </div>
        </form>
    </div>
</body>
</html>