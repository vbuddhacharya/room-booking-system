<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>index</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <div id="navbar">
            <img src="logoillustration/mainlogo.png">
            <a href="index.html">Home</a>
            <a href="#rooms">Rooms</a>
            <a href="services.html">Services</a>
            <a href="gallery.html">Gallery</a>
            <a href="login.html">Book Now</a>
            <div class="nav-login">
                <a href="login.html"><i class="fa fa-fw fa-user"></i>Login/Register</a>
            </div>
        </div>

        <div class="content">
            <div class="banner">
                <div class="banner-content">
                    <img src="images/banner1.jpg" width="100%">
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
                            <img src="images/w1.jpg">
                            <img src="images/w2.jpg">
                        </div>
                        <div class="column2">    
                            <img src="images/w3.jpg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="rooms">
                <div class="rooms-title">
                    <h1><font color="#8A191D">Rooms</font></h1>
                </div>
                <div class="room-details">
                    <div class="room1">
                        <img src="images/standardroom.jpg">
                    </div>
                    <div class="room2">
                        <img src="images/deluxeroom.jpg">
                    </div>
                    <div class="room3">
                        <img src="images/juniorsuiteroom.jpg">
                    </div>
                </div>
            </div>
    
            <div class="services">
                <h1><font color="#8A191D">Our Services</font></h1>
                <div class="row">
                    <div class="restaurant">
                        <img src="images/restaurant.png" height="120px" width="120px">
                    </div>
                    <div class="swimming">
                        <img src="images/swimming.png" height="80px" width="80px">
                    </div>
                    <div class="eventroom">
                        <img src="images/eventroom.png" height="80px" width="80px">
                    </div>
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
                          <button class="btn" type="submit" name="button">
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