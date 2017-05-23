<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
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
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="donor_registration.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
        <div id="signup">   
          <h1>Sign Up for Free</h1>
        
          <form onsubmit="return myValidation()" action="donor_registration.php" method="post" autocomplete="off">
		  

          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" id='firstname' required autocomplete="off" name='firstname'/>
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input id='lastname' type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>
		  
		  <div class="top-row">
			<div class="field-wrap">
              <label>
                Age<span class="req">*</span>
              </label>
              <input id ='age' type="text" required autocomplete="off" name='age' />
            </div>
			
			<div class="field-wrap">
              
               <select name="donor_gender" id="Donor_gender" class =""  required style="background: rgba(19, 35, 47, 0.9); color:rgba(255, 255, 255, 0.5)">
                                                <option value="">-- Select Gender --</option>
                                                       <option style="color:white;" value="Male">Male</option>
                                                       <option style="color:white;" value="Female" >Female</option>
				</select>									   
            </div>
        
            <div class="field-wrap">
			 
             <select name="blood_group" id="Blood_Group" class =""  required  >
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
             </select>
			
              
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
              Present Address<span class="req">*</span>
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
                Mobile Number<span class="req">*</span>
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
		  
		  
		  <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
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