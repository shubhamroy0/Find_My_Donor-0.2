<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
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
				document.getElementById("latbox").value = latitude;
				
				document.getElementById("lngbox").value = longitude;
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
            
			google.maps.event.addListener(marker, 'dragend', function (event) {
				document.getElementById("latbox").value = this.getPosition().lat();
				document.getElementById("lngbox").value = this.getPosition().lng();
			});

			
			}
        </script>
		
		<script type="text/javascript">
		function myValidation(){
		//Validate regular expression
		var re_age=/^\d{1,3}$/;
		var re_name=/^[A-Za-z]+$/;
		var re_cntc=/^\d{10}$/;
		
		
		
		var vaidate_mobile=document.getElementById("mobile").value;
		var vaidate_age=document.getElementById("age").value;
		var vaidate_firstname=document.getElementById("firstname").value;
		var vaidate_lastname=document.getElementById("lastname").value;
		
		
		if(!re_cntc.test(vaidate_mobile)){
				alert("Please enter 10 digit mobile number!");
				return false;
			}
		
		
		if(!re_age.test(vaidate_age)){
				alert("Please enter correct age!");
				return false;
			}
		
		
		if(!re_name.test(vaidate_firstname)){
				alert("First name should be alphabetic!");
				return false;
			}
		
		
		if(!re_name.test(vaidate_lastname)){
				alert("Last name should be alphabetic!");
				return false;
			}
			
		}
		
		
		
		
		</script>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Welcome to FindMyDonor</title>
<link href="css/webpagestyle.css" rel="stylesheet" type="text/css" media="screen" />
</head>
  <style>
    #mapPlaceholder {
        height: 150px;
        width: 1000px;
	 }
	 .homebutton
	 {
		 padding: 10px;
		 padding-left:33em
	 }
    </style>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
		 
			<h1><a href="index.php">Findmydonor</a></h1>
			<p>save life, give blood.</p>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="http://23.236.147.19/wiki/index.php?title=Jarvis_buckle_up:Main">About</a></li>
			<li><a href="donor_registration.php">Donor Registration</a></li>
			<li><a href="admin_login.php">Register Hospitals</a></li>
			<li><a href="#">Report Problem</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		 
		<form  name="indexform" onsubmit="return myValidation()" action="donorlist.php" method="post" autocomplete="off">		
		<table style="font-size:12 px" align="center">
			<tr><td><h3><b><font color="purple">Please fill in the details:</font></b></h3><td>
	        </tr>
			
			<tr>
				<td>Blood Group:</td>
				<td><select name="blood_group" id="Blood_Group" class =""  required >
                                                <option value="">-- Select Blood Group --</option>
                                                       <option value="A +ve" >A+</option>
                                                       <option value="A -ve" >A-</option>
                                                       <option value="B +ve" >B+</option>
                                                       <option value="B -ve" >B-</option>
                                                       <option value="AB +ve" >AB+</option>
                                                       <option value="AB -ve" >AB-</option>
                                                       <option value="A1 +ve" >A1+</option>
                                                       <option value="A1 -ve" >A1-</option>
                                                       <option value="A2 +ve" >A2+</option>
                                                       <option value="A2 -ve" >A2-</option>
                                                       <option value="O +ve" >O+</option>
                                                       <option value="O -ve" >O-</option>
             </select></td>
			</tr>
			
			<tr>
				<td>Age:</td>
				<td><input type="text" required autocomplete="off" name='age' id='age'/></td>
			</tr>
			
			<tr>
				<td>First Name:</td>
				<td><input type="text" required autocomplete="off" name='firstname' id='firstname'/></td>
			</tr>
			
			<tr>
				<td>Last Name:</td>
				<td><input type="text" required autocomplete="off" name='lastname' id='lastname'/></td>
			</tr>
					
			<tr>
				<td>Email Id:</td>
				<td><input type="email"required autocomplete="off" name='email' /></td>
			</tr>
			
			
			
			
			<tr>
				<td>Mobile number:</td>
				<td><input type="text" required autocomplete="off" name='mobile' id='mobile'/></td>
			</tr>
			<tr>
				<td><h4><b><font color="green">Your current location:</font></b></h4>
			<tr/>
			<tr>
				<td>Latitude:</td>
				<td><input size="20" type="text" id="latbox" name="lat" readonly> </td>
			</tr>
		    <tr>
				<td>Longitude:</td>
				<td><input size="20" type="text" id="lngbox" name="lng" readonly> </td>
				<div id="mapPlaceholder"></div>
				
			</tr>
			
			
		</table>
		<div class="homebutton">
	    <button type="submit" class="button button-block" name="Search" />Search</button>
		</div>
		</form>
		
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright &copy All rights reserved.</p>
</div>
<!-- end #footer -->
</body>
</html>