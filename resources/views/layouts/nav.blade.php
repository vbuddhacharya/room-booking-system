<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>XYZ Hotel</title>
        <link rel="stylesheet" href="{{asset('css/nav.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="portrait">
      <img src="{{asset('images/logoillustration/mainlogo.png')}}">
    </div>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Rooms
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('standard')}}">Standard Room</a>
            <a class="dropdown-item" href="{{route('deluxe')}}">Deluxe Room</a>
            <a class="dropdown-item" href="{{route('suite')}}">Suite Room</a>
       
        </div>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{route('services')}}">Services</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{route('gallery')}}">Gallery</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{route('date')}}">Book Now</a>
      </li>
      @if(Auth::check() && Auth::user()->isAdmin==1)
        <li class="nav-item">
        <a class="nav-link" href = "{{route('admin.panel')}}">Administrator</a>
        </li>
    @endif
    @if (Auth::check())
            
        <div class = "nav-login">
                <table>
                <tr><td><a href="{{route('edit.data')}}" class="nav-link username"><i class="fa fa-fw fa-user"></i>{{Auth::user()->name}}</td>

                <li class="nav-item">
                    <td><a class="nav-link" href="{{route('logout')}}">Logout</a></td>
                </li>
                </tr>
</table>
        </div>
    @else
        <div class="nav-login">
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}"><i class="fa fa-fw fa-user"></i>Login/Register</a>
            </li>
        </div>
    @endif
    </ul>
  </div>
</nav>
    </body>
</html>