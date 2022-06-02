<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
@include('layouts.nav')
<div class="container">
<div class="cover">
      <div class="front">
        <img src="{{asset('images/logoillustration/mainlogo.jpg')}}" alt="">
      </div>
      <div class="back">
      </div>
    </div>
<div class="forms">
        <div class="form-content">
<div class="signup-form">
          <div class="title">New Admin</div>
        <form action="{{route('register')}}" method = "post">
            @csrf
            <input type="hidden" name="isAdmin" value = "1">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name = "name" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name = "email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name = "password" placeholder="Enter your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
            </div>
      </form>
    </div>
        </div>
</div>
</div>
</body>
</html>