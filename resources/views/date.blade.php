<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "icon" href = "{{asset('images/logoillustration/mainlogo.png')}}" type = "image/png">
  <title>Booking</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="{{asset('/css/booking.css')}}">
  

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
  @include('layouts.nav')
  <div class = "wrapper">
    
    <div class = "title">Schedule Your Dates</div>
    {{-- <div class = "container"> --}}
      
        <form action="{{route('choose.rooms')}}" method="get">
          @csrf
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
          <div class="form-container">
            
            <div class = "date">
                <div class = "date-element">
                  <label for="from">Arrival</label>
                  <input type="text" id="from" name="from" value="{{old('from')}}">
                </div>
                <div class = "date-element">
                  <label for="to">Departure</label>
                  <input type="text" id="to" name="to" value="{{old('to')}}">
                </div>
            </div>
              <div class="nums">
                <p id = "change">No. of Rooms</p>
                <select name="rooms" id="">
                  @for($i=1;$i<=$num;$i++)
                      <option value = "{{$i}}" @selected(old('rooms')==$i)>{{$i}}</option>
                  @endfor
              </select><br>
              </div>
              <div class="nums">
                <p id="change">No. of Guests (Max 4 in each room)</p>
                <input type="text" name="guests" id="">
                
                </div>
                <br>
              </div>
                <button type="submit">Confirm</button>
                
          </div>
        </form>
        
    {{-- </div> --}}
  </div>
</body>
</html>