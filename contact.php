<html>
    <head>
        <title>Contact Us</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/preloader.css" rel="stylesheet" type="text/css">
  <link rel = "stylesheet" type = "text/css" href = "css/montserrat.css">
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="js/jquery.preloader.min.js"></script>
<style type="text/css">

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    font-family: montserrat;
    text-decoration: none;
    font-size: 16px;
}

li {
    float: left;
    text-decoration: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #2c78a2;
    color: white;
    text-decoration: none;
}
li.selected {
    background-color: #2c78a2;
}
.down {
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}
li.dropdown1 {
    display: inline-block;
}

.dropdown1-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown1-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown1-content a:hover {background-color: #f1f1f1}

.dropdown1:hover .dropdown1-content {
    display: block;

}
#map {
        height: 400px;
        width: 100%;
       }
form {
    text-align: center;
}
form div{
    padding: 8px;
}
</style>
    </head>
    <body>
      <div id="preloader">
    <div id="preloader-inner"></div>
</div>
         <ul>
    <li><img src="logo.png" style="width:40px; margin-top:12px; margin-left:8px;"></li>
    <li style="font-family:xirod;"><a href="index.html">AARUUSH'17</a></li>
  <li><a href="aboutus.html">About Us</a></li>
  <li><a href="highlights/highlights.html">Highlights</a></li>
  <li><a href="work/work.html">Workshops</a></li>
  <li><a  href="champ/champ.html">Championships</a></li>
  <li><a href="spon/spon.html">Sponsors</a></li>
  <li><a href="gallery/gallery.html">Gallery</a></li>
 <li class="dropdown1">
    <a href="javascript:void(0)" class="dropbtn">More <i class="down" style=" border: solid white; border-width: 0 3px 3px 0; display: inline-block; padding: 3px; margin-bottom:2px;"></i></a>
    <div class="dropdown1-content">
      <a href="swastika.html" style="color:black;">Swastika</a>
      <a href="tsummit/index.html" target="_blank" style="color:black;">T-Summit</a>
      <a href="#" style="color:black;">Events</a>
      <a href="#" style="color:black;">Ambassador</a>
      <a href="#" style="color:black;">Initiatives</a>
    </div>
  </li>
  <li style="float:right;"><a href="#" style="background-color:#2c78a2;">Contact Us</a></li>
</ul> 
        <h2 align = "middle"><b>Contact Us</b></h2><br><br><br>
        <form method= "post" action = "contact.php">
            <div class = "row">
            <div class = "col-lg-offset-1 col-lg-2">
                <input type = "text" class = "form-control" name = "name" placeholder = "Name" required>
            </div>
            <div class = "col-lg-offset-1 col-lg-2">
                <input type = "text" class = "form-control" name = "email" placeholder = "Email" id= "email" required >
            </div>
            <div class = "col-lg-offset-1 col-lg-2">
                <input type = "text" class = "form-control" name = "phone" placeholder = "Phone Number" required>
            </div>
            <br><br><br>
            <div class = "col-lg-offset-1 col-lg-9">
                <textarea class = "form-control" name = "comment" placeholder = "Comment" rows = "5" required></textarea>
            </div>
            </div><br>
            <div class = "row">
                <div class = "col-lg-offset-9">
                    <button class = "btn btn-default" name = "sub" value = "submit" type = "submit">Submit</button>
                </div>
            </div>
        </form><hr>

        <h4 style="text-align:center;">For further details, contact:<br><br><span style="font-size:16px;">Nishanth Buggineni: +91 96005 79880 | Pranav Dhingra: +91 95661 61014<br><br>E-Mail: csi@aaruush.net</span></h4><br>
        <div id="map"></div>

        <script>
    $(window).preloader({
        delay: 1500
    });
</script>
    <script>
      function initMap() {
        var uluru = {lat: 12.8230, lng: 80.0438};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOZpIYRPNtYVD8y1-pNR3LWvZvGh9NGi0&callback=initMap">
    </script>

    </body>
</html>

<?php
    
    if (isset($_POST['sub']))
    {
        $con = mysqli_connect('localhost','aaruush','aaruush17','contactus') or die("Error: ".mysqli_connect_error());
        $name = $_POST['name'];
        $femail = $_POST['email'];
        $phone = $_POST['phone'];
        $comment = $_POST['comment'];
        echo $insert = "insert into contact (`name`, `email`,`phone`,`comment`) values ('$name', '$femail', '$phone','$comment')";
        $query = mysqli_query($con, $insert);
        if ($query)
        {
           echo "<script>alert ('Your feedback is successfully registered. Thank You!!')</script>";
           
           exit();
        }
        else {
           echo "<script>alert ('Please try again. Thank You!!')</script>";
           
           exit();
        }
    }

?>