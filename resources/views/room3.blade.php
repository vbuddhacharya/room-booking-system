<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Suite Room</title>
        <link rel="stylesheet" href="room3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        
    </head>
    <body>
        <div id="image">
            <img src="servicesphotos/servicebg2.jpg"  height="300vh" width="100%">
        </div>
        <div id="title">
            <h1>---------- Suite Room ----------</h1>
        </div> 
        <p class="details">Enjoy an amazing stay in our comfortable suite room for our vip guest. It is now also available for family tourist including 55" Smart LED TV, bathtub & independent high speed Wi-Fi.</p>
    

        <div class="contain">
            <table border="0" class="tab">
                <tr>
                    <td rowspan="2">
                        <div id="imag"><img src="images/juniorsuiteroom.jpg" height="750vh" width="950vh" alt=""></div>
                    <td id="dates">
                        <p style="text-align:center;">Check Availability</p>
                        <form action="" method="post">
                            <div class="input-box">
                                <input type="text" placeholder="Arrival Date" name="arrival">
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Departure Date" name="departure">
                            </div>
                            <div class="button input-boxes">
                                <input style="border:none;" type="submit" value="Check Availability">
                            </div>
                        </form>
                    </td>
                </tr>
                <tr> 
                    <td id="booknow">
                        <i class="material-icons"> phone </i>
                        <p class="content"><b>Book Hotel By Phone</b></p>
                        <p id="phone">+977 9841435662, +977 9860672524, +977 9818878625</p>
                        <p class="content"><b>OR</b></p>
                        <form method="post" action="">
                            <div class="button input-boxes">
                                <input style="border-color: white;"type="submit" value="Book Now">
                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="container">
            <p>Our Hotel XYZ offers 3 freshly refurnished rooms and suites all with attached bath and shower, air conditioning and heating, International Direct Dial Telephone system, multi Channel color television and mini bar. All rooms have a view over our awards wining gardens or our refreshing swimming pools.</p>
            <table border="1" id="tabsp">
                <tr>
                    <th class="title"> Type </th>
                    <th class="title"> No. of rooms </th>
                    <th class="title"> Single </th>
                    <th class="title"> Double </th>
                </tr>
                <tr>
                    <td class="new"> Suite Room </td>
                    <td class="new"> 03 </td>
                    <td class="new"> Rs. 15000 </td>
                    <td class="new"> Rs. 16000 </td>
                </tr>
            </table>
            <p>Above Rates are subject to 10% Service Charge & 13% Vat</p>
        </div>
        
        <div class="info">
            <button class="tablink" onclick="openPage('Features', this, 'white')" id="defaultOpen"><font color="#8A191D">Features</font></button>
            <button class="tablink" onclick="openPage('Amenities', this, 'white')"><font color="#8A191D">Amenities</font></button>

            <div id="Features" class="tabcontent">
                <ul type="square">
                    <li><font color="#8A191D">Room Size :</font> 377.9 sq. ft.</li>
                    <li><font color="#8A191D">Bed Type :</font> King Size, Double & Twin</li>
                    <li><font color="#8A191D">Occupancy :</font> Up to 2 people</li>
                    <li><font color="#8A191D">Bed Size :</font> Double 5x7ft</li>
                    <li><font color="#8A191D">View :</font> Garden Or Swimming Pool View</li>
                    <li><font color="#8A191D">Smoking :</font> On Request</li>
                    <li><font color="#8A191D">Drinks :</font> Yes</li>
                </ul>
            </div>

            <div id="Amenities" class="tabcontent">
                <ul type="square" class="list">
                    <li>Bath Gowns</li>
                    <li>Tea & Coffee</li>
                    <li>Safe Deposit Box</li>
                    <li>Double Bed</li>
                    <li>Breakfast</li>
                    <li>Bathtub</li>
                    <li>80 sq.ft.</li>
                    <li>43" Flat Screen TV</li>
                    <li>Guest Room</li>
                    <li>Free High Speed Wifi</li>
                    <li>Free Newspaper</li>
                    <li>Landline</li>
                    <li>Free Satellite TV Cable</li>
                    <li>Full AC</li>
                    <li>24/7 hrs. Room Service</li>
                </ul> 
            </div>
        </div>
        
        <div class="review">
            <p>Add Review</p>
            <form>
                <div class="review-item">  
                    <input type="text" placeholder=" Name " name="name">
                </div>
                <div class="review-item">
                    <input type="text" placeholder=" Email " name="email"> 
                </div>
                <div class="review-item">
                    <input type="text" placeholder=" Address " name="address">
                </div>
                <div class="review-item">
                    <textarea rows="5" cols="80" placeholder=" Review "></textarea>            
                </div>
                <div class="review-item">
                    <div class="message">
                        <input style="border:none;" type="submit" value="Send Message">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>


<script>
    function openPage(pageName,elmnt,color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>