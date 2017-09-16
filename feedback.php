<!--A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>AARUUSH | Feedback</title>
<!-- meta data -->
<link rel="shortcut icon" type="image/x-icon" href="srmrun/images/aaruush_title_logo.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Register Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta data -->
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
<!-- css files -->
<link href="srmrun/css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="srmrun/css/hover.css" type="text/css" rel="stylesheet" media="all">
<!-- //css files -->
<style type="text/css">
body{
overflow-x: hidden;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    font-family: montserrat;
}

li {
    float: left;
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
}
.down {
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}
li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<!-- body starts -->
<body>
<!-- section -->
<ul>
 <li><img src="logo.png" style="width:40px; margin-top:12px; margin-left:8px;"></li>
 <li style="font-family:xirod;"><a href="../index.html">AARUUSH'17</a></li>
<!--<li><a href="../aboutus.html">About Us</a></li>
<li><a href="../highlights.html">Highlights</a></li>
<li><a href="../work/work.html">Workshops</a></li>
<li><a shref="../champ/champ.html">Championships</a></li>
<li><a href="#" >Sponsors</a></li>
 <li><a href="../gallery/gallery.html">Gallery</a></li>
<li class="dropdown">
 <a href="javascript:void(0)" class="dropbtn">More <i class="down" style=" border: solid white; border-width: 0 3px 3px 0; display: inline-block; padding: 3px; margin-bottom:2px;"></i></a>
 <div class="dropdown-content">
	 <a href="swastika.html">Swastika</a>
<a href="tsummit/index.html" target="_blank">T-Summit</a>
	 <a href="#">Events</a>
	 <a href="#">Ambassador</a>
	 <a href="#">Initiatives</a>
 </div>
</li>

<li style="float:right;"><a href="../contact.php">Contact Us</a></li>-->
</ul>
<section class="register">
	<div class="register-full">

		<div class="register-right" style="width:100%;">
			<div class="register-in">
				<h2>Your Feedback</h2>
				<div class="register-form">
					<form action="" method="post">
						<div class="fields-grid">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" placeholder="Name(Optional)" >

								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="event" placeholder="Event Name" required>

								<span></span>
							</div><br>
							<div class="styled-input agile-styled-input-top" align="left" >
								<p>Event Experiance</p><br>
								<input type="radio" name="eventExp" value="Excellent" style="margin-left:50px;" >Excellent<br>
									<input type="radio" name="eventExp" style="margin-left:50px;" value = "Good" >Good<br>
										<input type="radio" name="eventExp" style="margin-left:50px;" value="Bad" >Bad
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="comment" placeholder="Your Feedback" required>

								<span></span>
							</div><br>
							<div class="styled-input agile-styled-input-top" >
								<input type="text" name="overall" placeholder="Overall AARUUSH Experience(Optional)" required >
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
<!-- //section -->
</body>
<!-- //body ends -->
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
