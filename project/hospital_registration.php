<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register/View Hospitals</title>
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
        /*Script for donor field validation*/
		//Validate regular expression
		var re_age=/^\d{1,3}$/;
		var re_name=/^[A-Za-z]+$/;
		var re_cntc=/^\d{10}$/;
        var re_pin=/^\d{6}$/;
        var re_addr=/^[A-Za-z0-9'\.\-\s\,]+$/;
		
		
		
		var vaidate_mobile=document.getElementById('mobile').value;
		var vaidate_age=document.getElementById('age').value;
		var vaidate_firstname=document.getElementById('firstname').value;
		var vaidate_lastname=document.getElementById('lastname').value;
		var vaidate_address=document.getElementById('address').value;
		var vaidate_pincode=document.getElementById('pincode').value;

		
		
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
            
        if(!re_addr.test(vaidate_address)){
				alert("Please enter a valid address!");
				return false;
			}
		
        if(!re_pin.test(vaidate_pincode)){
				alert("Please enter a 6 digit pincode!");
				return false;
			}
		
			
		}
		
		
		
		
		</script>

	
  
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in
        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>

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
			<li><a href="hospital_registration.php">Register Hospitals</a></li>
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
        <li class="tab"><a href="#newhosp">Register Hospital</a></li>
        <li class="tab active"><a href="#viewhosp">View Existing Hospitals</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="viewhosp">   
             <style>
				table,th,td{border:1px solid black;border-collapse:collapse;

				table.gridtable{
					border-collapse:collapse;
					border-color:#666666;
					color:#333333;
					font-family:verdana,arial,sans-serif;
					font-size:11px;
			}
			
			}
			.homebutton
			{
				padding-left: 30em;
				
                                border: none;
 
			}
			</style>
			<h1>Hospital Details</h1>
			<table style=" width:100%; " class="gridtable">
			<tr style="background-color: #4CAF50; color: white; height: 35px;">
			<th>ID</th>
			<th>Name</th>
			<th>Address</th>
			<th>Contact</th>
            <th>E-mail</th>
			</tr> 
			     <tr>
				<!--<td><center><?php echo $row['first_name'] . " ". $row['last_name']?><center></td>
				<td><center><?php echo $row['age']?><center></td>
				<td><center><?php echo $row['gender']?><center></td>
				<td><center><?php echo $row['address']?><center></td>
				-->                <!-- Add the hospital details from the SQL File -->
                </tr>
			</table>
            

        </div>
          
        <div id="newhosp">   
          <h1>Enter Hospital Details</h1>
        
          <!-- <form onsubmit="return myValidation()" action="donor_registration.php" method="post" autocomplete="off">
		  

            Enter submission method for registering the hospital details. -->

          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Hospital ID<span class="req">*</span>
              </label>
              <input type="text" id='hospid' required autocomplete="off" name='hospid'/>
            </div>
        
            <div class="field-wrap">
              <label>
                Hospital Name<span class="req">*</span>
              </label>
              <input id='hospname' type="text"required autocomplete="off" name='hospname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
		  
		  <div class="field-wrap">
            <label>
              Hospital Address<span class="req">*</span>
            </label>
            <input type="text" id='address' required autocomplete="off" name='address' />
		 </div>
		
		<div class="top-row">
			<div class="field-wrap">
              <label>
                Pincode<span class="req">*</span>
              </label>
              <input type="text" id='pincode' required autocomplete="off" name='pincode' />
            </div>
        
            <div class="field-wrap">
              <label>
                Hospital Contact Number<span class="req">*</span>
              </label>
              <input id='mobile' type="text" required autocomplete="off" name='mobile' />
            </div>
        </div>
          <span style="font-size:15px;"> Latitude</span> <span style ="padding-left:16em;font-size:15px;"> Longitude </span>
		  <div class="top-row">
			<div class="field-wrap">
              <input size="20" type="text" required autocomplete="off" id="latbox" name="lat" readonly>
            </div>
           
            <div class="field-wrap">
              <input size="20" type="text" required autocomplete="off" id="lngbox" name="lng" readonly>
            </div>		
        </div>
		  
          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
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