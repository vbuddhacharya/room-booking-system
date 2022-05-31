<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Information</title>
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
          <div class="title">Edit User</div>
    <form action="{{route('update.user',['id'=>$user->id])}}" method="post">
        @csrf
        <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" id="" value = "{{$user->name}}"><br>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" id="" value = "{{$user->email}}"><br>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id=""><br>
              </div>
              <div class="button input-box">
              <input type="submit" value="Confirm">
              <!-- <span style="margin-left:20%; width:50%;height:100%"><input type="reset" value="Clear"></span> -->
</div>
</div>
    </form>
</div>
        </div>
        </div>
</div>

</body>
</html>