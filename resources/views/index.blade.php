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
    @include('layouts.nav')
        <div class="content">
            <div class="banner">
                <div class="banner-content">
                    <img src="{{asset('images/hotel/banner1.jpg')}}" width="100%">
                </div>
            </div>
            
            <div class="greeting-content">
                <div class="welcome">
                    <div class="text">
                        <h1><font color="#8A191D">Namaste</font></h1>
                        <h2><font color="#8A191D">We bow to the divinity within you.</font></h2>
                        <p>On the outer edge of the busy tourist hub of Thamel, The Malla Hotel also has a long and storied past. Its rooms have all been newly renovated to provide modern, up to date comforts, and whether you're here for business, leisure or an event, this is not just a place to stay, but a bit of history to savor. Wander in the beautiful garden, take a dip in the pool, try your luck at the casino, or visit the newly updated Shanti Spa, equipped with five massage rooms and a renovated steam and sauna room. Extensive yoga and meditation services are also available, for an unforgettable personalized experience.</p>
                    </div>
                    <div class="row">
                        <div class="column1">
                            <img src="{{asset('images/hotel/w1.jpg')}}">
                            <img src="{{asset('images/hotel/w2.jpg')}}">
                        </div>
                        <div class="column2">    
                            <img src="{{asset('images/hotel/w3.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="rooms">
                <div class="rooms-title">
                    <h1><font color="#8A191D">Our Rooms</font></h1>
                </div>
                <div class="room-details">
                    <div class="room1">
                        <img src="{{asset('images/hotel/standardroom.jpg')}}">
                        <h5>Standard Room</h5>
                        <p>Enjoy your stay in our inspired standard rooms. It comes with comfortable king size bed or double bed including 43" Smart LED TV, bathtub and independent high speed Wi-Fi.</p>
                        <a href="" target="_self" class="booknow-btn">Book Now</a>
                    </div>
                    <div class="room2">
                        <img src="{{asset('images/hotel/deluxeroom.jpg')}}">
                        <h5>Deluxe Room</h5>
                        <p>Enjoy an amazing stay in our cozy & comfortable deluxe rooms. It comes with single, double & twin bed including 43" Smart LED TV, bathtub & independent high speed Wi-Fi.</p>
                        <a href="" target="_self" class="booknow-btn">Book Now</a>
                    </div>
                    <div class="room3">
                        <img src="{{asset('images/hotel/juniorsuiteroom.jpg')}}">
                        <h5>Suite Room</h5>
                        <p>Enjoy an amazing stay in our comfortable suite room for our vip guest. It is now also available for family tourist including 55" Smart LED TV, bathtub & independent high speed Wi-Fi.</p>
                        <a href="" target="_self" class="booknow-btn">Book Now</a>
                    </div>
                    <div class="btndiv">
                        <a href="" target="_self" class="btn1">See More</a>
                    </div>
                </div>
            </div>
    
            <div class="services">
                <h1><font color="#8A191D">Our Services</font></h1>
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
                </div>
                <div class="btndiv">
                    <a href="{{route('services')}}" target="_self" class="btn2">See More</a>
                </div>
            </div>

            <div class="contact-us">
                <h1><font color="#8A191D">Contact Us</font></h1>
                <div class="row">
                    <div class="col-1">
                        <div class="gmap">
                            <iframe width="500" height="400"  src="https://maps.google.com/maps?q=pokhara%20lake%20side&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                    <div class="col-2">
                        <h3><strong><font color="#8A191D">Get in Touch</font></strong></h3>
                        <form>
                          <div class="form-group">
                            <input type="text" class="form-control" name="" value="" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <input type="email" class="form-control" name="" value="" placeholder="E-mail">
                          </div>
                          <div class="form-group">
                            <input type="tel" class="form-control" name="" value="" placeholder="Phone">
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" name="" rows="3" placeholder="Message"></textarea>
                          </div>
                          <button class="btn3" type="submit" name="button">
                            <font color="white">Send Message</font>
                          </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <footer class="footer">
            <div class="footer-info">
                Lakeside,Pokhara,Nepal<br/>
                <a href="mailto:info@xyzhotel.com">info@xyzhotel.com</a><br/>
                +977 1 4481385, +977 1 4456851, +977 1 4568710<br/>
                Copyright © 2022 The XYZ Hotel. All Right Reserved.<br/>
                Website by Team-B
            </div>
        </footer>
         
    </body>
</html>