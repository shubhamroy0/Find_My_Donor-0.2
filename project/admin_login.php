<?php 
/* Admin login page to register hospitals */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login Form</title>
  <link href="css/webpagestyle.css" rel="stylesheet" type="text/css" media="screen" />
  <?php include 'css/css.html'; ?>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyAFFc-v0T5zqyiJwyqpU2gZo6gSC0g3x48&sensor=false">
  </script>
  <script>
            if (navigator.geolocation)
            {
                navigator.geolocation.getCurrentPosition(showCurrentLocation);
            }
            else
            {
               alert("Geolocation API not supported.");
            }

            function showCurrentLocation(position)
            {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var coords = new google.maps.LatLng(latitude, longitude);
				//document.getElementById("latbox").value = latitude;
				
				//document.getElementById("lngbox").value = longitude;
                var mapOptions = {
                zoom: 15,
                center: coords,
                mapTypeControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            //create the map, and place it in the HTML map div
            map = new google.maps.Map(
            document.getElementById("mapPlaceholder"), mapOptions
            );

            //place the initial marker
            var marker = new google.maps.Marker({
            position: coords,
			draggable:true,
            map: map,
            title: "Current location!"
            });
			}
        </script> 
</head>



<style>
    #mapPlaceholder {
	     height: 180px;
        width: 350px;
		color: #000;
	 }
	 body {
		 background-color: #f1f1f1;
		 
	 }
</style>


<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
		 
			<h1><a href="index.php">Findmydonor</a></h1>
			<p style="color:red;">save life, give blood.</p>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="donor_registration.php">Donor Registration</a></li>
			<li><a href="admin_login.php">Register Hospitals</a></li>
			<li><a href="#">Report a Problem</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
    
	 <div class="fix-type">
			<b>Your current location</b>
			<br />
			<div id="mapPlaceholder"></div>
	     </div>	
	 <div class="form" style="margin: 20px 0 0 1%;">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Login</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>Login as Admin to Continue!</h1>
          
          <form action="donor_registration.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="email" required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" id="password" required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" onclick="window.location.href='/project/hospital_registration.php'">Login</button>
          <!-- Please enter valid checks here. Defaulted to email: root@gmail.com  password: 123 -->
              
          </form>

        </div>
          <script type="text/javascript">
          function submit()
              {
                  var em = window.getElementById("email");
                  var pass = window.getElementById("password");
                  if((em == 'root@gmail.com') && (pass == '123'))
                      window.location.href='/project/hospital_registration.php';
                  else
                      {
                          window.alert("Wrong username/password.");
                          window.location.href='/project/admin_login.php';
                      }
              };
          </script>
        
        
      </div><!-- tab-content -->
	  
      
</div> <!-- /form -->
		 
		 
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
</div>
</div>
<div id="footer">
	<p>Copyright &copy All rights reserved.</p>
</div>
</body>
</html>