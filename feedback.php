<html>
    <head>
        <title>Feedback | AARUUSH'17</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/aaruush_title_logo.ico" />

   <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/preloader.css" rel="stylesheet" type="text/css">
  <link rel = "stylesheet" type = "text/css" href = "css/montserrat.css">
    <link rel = "stylesheet" type = "text/css" href = "css/style3.css">
      <link rel = "stylesheet" type = "text/css" href = "css/hover.css">
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
    <li style="font-family:Xirod-Regular;"><a href="index.html">AARUUSH'17</a></li>
  <li><a href="aboutus.html">About Us</a></li>
  <li><a href="highlights.html">Highlights</a></li>
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
<section class="register">
	<div class="register-full">

		<div class="register-right">
			<div class="register-in">
				<h2>Your Feedback</h2>
				<div class="register-form">
					<form action="" method="post">
						<div class="fields-grid">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" >
								<label>Name(Optional)</label>
								<span></span>
							</div>
              <div class="styled-input agile-styled-input-top">
								<input type="text" name="event" required>
								<label>Event Name</label>
								<span></span>
							</div>
              <div class="styled-input agile-styled-input-top" align="left" >
                <p>Event Experiance</p><br>
                <input type="radio" name="eventExp" value="Excellent" >Excellent
                  <input type="radio" name="eventExp" style="margin-left:50px;" value = "Good" >Good
                    <input type="radio" name="eventExp" style="margin-left:50px;" value="Bad" >Bad
                <span></span>
              </div>
              <div class="styled-input agile-styled-input-top">
								<input type="text" name="comment" required>
								<label>Your Feedback</label>
								<span></span>
							</div>
              <div class="styled-input agile-styled-input-top">
                <input type="text" name="overall" >
                <label>Overall AARUUSH Experience(Optional)</label>
                <span></span>
              </div>
							<div class="clear"> </div>
							 </div>
						<input type="submit" class="hvr-wobble-horizontal" value="Submit" name="sub">
					</form>
				</div>
			</div>


			<div class="clear"> </div>
		</div>
	<div class="clear"> </div>
	</div>
</section>

  <a href="credits.html"><img src = "ac1.png" width="300px" align="right"></a>
        <script>
    $(window).preloader({
        delay: 1500
    });
</script>


    </body>
</html>

<?php

    if (isset($_POST['sub']))
    {
        $con = mysqli_connect('localhost','aaruush2017','xyRhtabnWTvbE28w','aaruush2017') or die("Error: ".mysqli_connect_error());
        $name = $_POST['name'];
        $event = $_POST['event'];
        $eventExp = $_POST['eventExp'];
        $comment = $_POST['comment'];
        $overall = $_POST['overall'];
        // the message


       $insert = "insert into feedback (`name`, `event_name`,`event_exp`,`feedback`,`overall_exp`) values ('$name', '$event', '$eventExp','$comment', '$overall')";
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
