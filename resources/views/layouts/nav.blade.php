<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>XYZ Hotel</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

    </head>
    <body>
        <div id="navbar">
            <img src="{{asset('images/logoillustration/mainlogo.png')}}">
            <a href="{{route('home')}}">Home</a>
            <a href="#rooms">Rooms</a>
            <a href="{{route('services')}}">Services</a>
            <a href="{{route('gallery')}}">Gallery</a>
            <a href="">Book Now</a>
            @if(Auth::check() && Auth::user()->isAdmin==1)
                <a href = "{{route('admin')}}">Administrator</a>
            @endif
            @if (Auth::check())
            
                <div class = "nav-login">
                
                    <span class = "username"><a href="{{route('edit.data')}}"><i class="fa fa-fw fa-user" style="float:left;" ></i>{{Auth::user()->name}}
                    <a href="{{route('logout')}}">Logout</a></span>
                </div>
            @else
            <div class="nav-login">
                <a href="{{route('login')}}"><i class="fa fa-fw fa-user"></i>Login/Register</a>
            </div>
            @endif
        </div>
    </body>

<script>
        //Sticky Navigation Bar
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.getElementById("navbar");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } 
            else {
                navbar.classList.remove("sticky");
            }
        }

    </script>
</html>