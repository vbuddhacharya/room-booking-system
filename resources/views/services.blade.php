<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/services.css')}}">
        <title>Services</title>
    </head>
    <body>
    @include('layouts.nav')
        <div class="banner">
            <img src="{{asset('images/servicesphotos/servicebg.jpg')}}" width="1864px">
            <div class="logo">
                <img src="{{asset('images/logoillustration/mainlogo.png')}}" width="230px" height="270px">
            </div>
        </div>
        <div class="services">
            <div class="title">
                <h1><font color="#8A191D">Our Services</font></h1>
            </div>
            <div class="row">
                <div class="restaurant">
                    <div class="img">
                        <img src="{{asset('images/servicesphotos/restaurant.png')}}" height="65px" width="65px">
                    </div>
                    <h5>Restaurant</h5>
                    <p>We are proud to present our speciality restaurants.</p>
                </div>
                <div class="swimming">
                    <div class="img">
                        <img src="{{asset('images/servicesphotos/swimmingpool.png')}}" height="80px" width="80px">
                    </div>
                    <h5>Swimming Pool</h5>
                    <p>One of the best cardio workouts or aerobic exercises you can do</p>
                </div>
                <div class="eventroom">
                    <div class="img">
                        <img src="{{asset('images/servicesphotos/eventroom.png')}}" height="80px" width="80px">
                    </div>
                    <h5>Event Room</h5>
                    <p>Our goal is to make your event as simple and seamless as possible</p>
                </div>
                <div class="wifi">
                    <div class="img">
                        <img src="{{asset('images/servicesphotos/wifi available.png')}}" height="80px" width="80px">
                    </div>
                    <h5>Wifi</h5>
                    <p>Independent fast speed Wifi in all rooms and public areas</p>
                </div>
                <div class="meeting-hall">
                    <div class="img">
                        <img src="{{asset('images/servicesphotos/meeting hall.png')}}" height="80px" width="80px">
                    </div>
                    <h5>Meeting Hall</h5>
                    <p>Conduct business meets with modern facilities.</p>
                </div>
                <div class="parking">
                    <div class="img">
                        <img src="{{asset('images/servicesphotos/free onsite parking.png')}}" height="80px" width="80px">
                    </div>
                    <h5>Free Parking</h5>
                    <p>Spacious well lit parking area with tight security </p>
                </div>
                <div class="doctor">
                    <div class="img">
                        <img src="{{asset('images/servicesphotos/doctor on call.png')}}" height="80px" width="80px">
                    </div>
                    <h5>Doctor on call</h5>
                    <p>We offer doctors on call upon necessity of the guests</p>
                </div>
                <div class="safe-deposit">
                    <div class="img">
                        <img src="{{asset('images/servicesphotos/safe deposit.png')}}" height="80px" width="80px">
                    </div>
                    <h5>Safe Deposit</h5>
                    <p>Feel secure about your belongings by depositing it in our safe.</p>
                </div>
                <div class="laundry">
                    <div class="img">
                        <img src="{{asset('images/servicesphotos/laundry & drycleaning.png')}}" height="80px" width="80px">
                    </div>
                    <h5>Laundry & Dry Cleaning</h5>
                    <p>Give us your precious clothes for delicate cleaning</p>
                </div>
                <div class="security">
                    <div class="img">
                        <img src="{{asset('images/servicesphotos/uniformed security.png')}}" height="80px" width="80px">
                    </div>
                    <h5>Uniformed Security</h5>
                    <p>Feel secured with 24 hours security from us</p>
                </div>
                <div class="smoke">
                    <div class="img">
                        <img src="{{asset('images/servicesphotos/smoke detector.png')}}" height="80px" width="80px">
                    </div>
                    <h5>Smoke Detector</h5>
                    <p>Feel safe with smoke detectors in all rooms and public areas</p>
                </div>
                <div class="concierge">
                    <div class="img">
                        <img src="{{asset('images/servicesphotos/concierge.png')}}" height="80px" width="80px">
                    </div>
                    <h5>Concierge</h5>
                    <p>We are available at all hours to give quality room service</p>
                </div>
            </div>
        </div>
    </body>
</html>