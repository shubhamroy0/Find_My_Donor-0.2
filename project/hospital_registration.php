<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
/*For blocking anyone from accessing this page without logging in as admin*/
if(isset($_GET['admin_email']) && !empty($_GET['admin_email']) AND isset($_GET['admin_password']) && !empty($_GET['admin_password']))
{
    $admin_email= $mysqli->escape_string($_GET['admin_email']); 
    $admin_password = $mysqli->escape_string($_GET['admin_password']); 
}
	
else
	{header("location:  http://localhost/project/admin_login.php");}
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
        /*Script for hospital field validation*/
		var u1=document.getElementById("hospname").value;
		var u2=document.getElementById("hospcontact").value;
		var u3=document.getElementById("hospaddress").value;
		var u4=document.getElementById("latbox").value;
		var u5=document.getElementById("lngbox").value;

		if(u1==""){
		alert("Hospital name cannot be blank!")
		return false;
		}

		if(u2==""){
		alert("Hospital contact number cannot be blank!")
		return false;
		}
		if(u3==""){
		alert("Hospital address cannot be blank!")
		return false;
		}
					
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
			<li><a href="http://23.236.147.19/wiki/index.php?title=Jarvis_buckle_up:Main">About</a></li>
			<li><a href="donor_registration.php">Donor Registration</a></li>
			<li><a href="#">Report Problem</a></li>
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
			<th>Contact</th>
			<th>Address</th>
			</tr> 
			<?php
			include 'db.php';
			$sql2 = "SELECT * from hospitals";
			$hosp_result = $mysqli->query($sql2);
			$rowcount1 = mysqli_num_rows($hosp_result);
			if($rowcount1>=1){
			while($row1=mysqli_fetch_array($hosp_result)){?>
			    <tr style="color: white;">
				
				<td><center><?php echo $row1['hid']?><center></td>
				<td><center><?php echo $row1['hospital_name']?><center></td>
				<td><center><?php echo $row1['hospital_contact_info']?><center></td>
				<td><center><?php echo $row1['hospital_address']?><center></td>
				
				</tr>
			<?php	
			 }
			}
			?>
			</table>
			<a href="logout.php"><button class="button button-block"/>Logout</button></a>
            

        </div>
          
        <div id="newhosp">   
          <h1>Enter Hospital Details</h1>
        
          <!--Enter submission method for registering the hospital details. -->

		  <form onsubmit="return myValidation()" action="register_hospital.php" method="post" autocomplete="off">
          
       
            <div class="field-wrap">
              <label>
                Hospital Name<span class="req">*</span>
              </label>
              <input id='hospname' type="text"required autocomplete="off" name='hospname' />
            </div>
		  
		  <div class="field-wrap">
            <label>
              Hospital Address<span class="req">*</span>
            </label>
            <input type="text" id='hospaddress' required autocomplete="off" name='hospaddress' />
		 </div>
		
            <div class="field-wrap">
              <label>
                Hospital Contact Number<span class="req">*</span>
              </label>
              <input id='hospcontact' type="text" required autocomplete="off" name='hospcontact' />
            </div>
        
          <span style="font-size:15px;"> Latitude</span> <span style ="padding-left:16em;font-size:15px;"> Longitude </span>
		  <div class="top-row">
			<div class="field-wrap">
              <input size="20"id='latbox' type="text" required autocomplete="off" id="latbox" name="lat" readonly>
            </div>
           
            <div class="field-wrap">
              <input size="20" id='lngbox' type="text" required autocomplete="off" id="lngbox" name="lng" readonly>
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