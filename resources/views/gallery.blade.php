<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <title>Gallery</title>
</head>
<body>
    <div class="container">
    @include('layouts.nav')
    <div class="banner">
        <img src="{{asset('images/servicesphotos/servicebg.jpg')}}">
        <div class="logo">
            <img src="{{asset('images/logoillustration/mainlogo.png')}}">
        </div>
    </div>
    <section class="photo" id="Photo">
        <div class="items">
            <div class="item">
                <div class="section-title text-center">
                    <h1>Gallery</h1>
                </div>
            </div>
            <div class="item">
                <div class="filter-buttons">
                    <ul id="filter-btns">
                        <li class="active" data-target="all">ALL</li>
                        <li data-target="Rooms">Rooms</li>
                        <li data-target="Restaurant">Restaurant</li>
                        <li data-target="Event-Rooms">Event Rooms</li>
                        <li data-target="Interiors">Interiors</li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="photo-gallery">
  
                    <div class="item" data-id="Rooms">
                        <div class="inner">
                            <img src="{{asset('images/galleryphotos/room1.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/room2.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/room3.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/room4.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/room5.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/room6.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/room7.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/room8.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/room9.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/room10.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/room11.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/room12.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/room13.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/room14.jpg')}}" alt="error">
                        </div>
                    </div>
  
                    <div class="item" data-id="Restaurant">
                        <div class="inner">
                            <img src="{{asset('images/galleryphotos/res1.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/res2.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/res3.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/res4.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/res5.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/res6.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/res7.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/res8.jpg')}}" alt="error">
                        </div>
                    </div>
  
                    <div class="item" data-id="Event-Rooms">
                        <div class="inner">
                            <img src="{{asset('images/galleryphotos/con1.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/con2.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/con3.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/con4.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/con5.jpg')}}" alt="error">
                        </div>
                    </div>
  
                    <div class="item" data-id="Interiors">
                        <div class="inner">
                            <img src="{{asset('images/galleryphotos/in1.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/in2.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/in3.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/in4.jpg')}}" alt="error">
                            <img src="{{asset('images/galleryphotos/in5.jpg')}}" alt="error">
                        </div>
                    </div>
  
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>

<script>
    const filterButtons = document.querySelector("#filter-btns").children;
    const items = document.querySelector(".photo-gallery").children;
  
    for (let i = 0; i < filterButtons.length; i++) {
        filterButtons[i].addEventListener("click", function () {
            for (let j = 0; j < filterButtons.length; j++) {
                filterButtons[j].classList.remove("active")
            }
            this.classList.add("active");
            const target = this.getAttribute("data-target")
    
            for (let k = 0; k < items.length; k++) {
                items[k].style.display = "none";
                if (target == items[k].getAttribute("data-id")) {
                    items[k].style.display = "block";
                }
                if (target == "all") {
                    items[k].style.display = "block";
                }
            }
    
        })
    }
</script>