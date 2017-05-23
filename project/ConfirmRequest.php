<?php 

require 'db.php';
session_start();

// getting requeste and donor details

	if(isset($_GET['don_id']) && !empty($_GET['don_id']) AND isset($_GET['rq_id']) && !empty($_GET['rq_id']))
{
    $don_id = $mysqli->escape_string($_GET['don_id']); 
    $rq_id = $mysqli->escape_string($_GET['rq_id']); 
	
	if(isset($_GET['don_id']) && !empty($_GET['don_id'])){
		$hosp_id = $mysqli->escape_string($_GET['hosp_id']); 
	}
	
    
    // Select requester with matching rq_id
	$result_rq = $mysqli->query("SELECT * FROM requester WHERE id='$rq_id'");
	
	$row_rq=mysqli_fetch_array($result_rq);
	
	// Select donor with matching don_id
	$result_don = $mysqli->query("SELECT * FROM users WHERE id='$don_id'");
	
	$row_don=mysqli_fetch_array($result_don);
	
	// Select hospital with matching hosp_id
	$result_hosp = $mysqli->query("SELECT * FROM hospitals WHERE hid='$hosp_id'");
	
	$row_hosp=mysqli_fetch_array($result_hosp);
	

	$_SESSION['rq_id']=$rq_id;
	$_SESSION['don_id']=$don_id;
	$_SESSION['hosp_id']=$hosp_id;
    
}	


 
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome </title>
  <?php include 'css/css.html'; ?>
  <script type="text/javascript">
    
    function redirect()
    {
	alert("Success!");
    }

</script>
 
</head>


<body>
<?php
   if($row_rq['matched']==1){
	   header( "location: error.php" );
   }

?>

  <div class="form">

          <h1>Welcome <?php echo $row_don['first_name'].' '.$row_don['last_name'].'!'; ?></h1>
          
          <p>
		  
          You have been matched for a blood donation request of blood group <?php echo $row_don['blood_group'];?>.
          </p>
          
          <p>
		  The requester details are:<br>
		  </p>
      
		  <table>
		  <tr>
			<p>Name: &nbsp <?php echo $row_rq['first_name'].' '.$row_rq['last_name']; ?> </p>
			
		  </tr>
		  <tr>
               <p>Email: &nbsp <?php echo $row_rq['email']; ?></p>
		  </tr>
			
		   <tr>
		       <p>Age: &nbsp <?php echo $row_rq['age'];?></p>
		  </tr>
		   
		   <tr>
		      	<p>Mobile No: &nbsp <?php echo $row_rq['mobile'];?><p>
			</tr>
			
		<p>
		  The hospital details are:<br>
		  </p>
      
			<tr>
		       <p>Hospital name: &nbsp <?php echo $row_hosp['hospital_name'];?></p>
		  </tr>
		   
		   <tr>
		      	<p>Hospital contact: &nbsp <?php echo $row_hosp['hospital_contact_info'];?><p>
			</tr>
			
			 <tr>
		      	<p>Hospital address: &nbsp <?php echo $row_hosp['hospital_address'];?><p>
			</tr>
			 
			</table>
		 <?php
		 
		 //Sending requester details to donor
		 $result_rq = $mysqli->query("SELECT * FROM requester WHERE id='$rq_id'");
	
		 $row_rq=mysqli_fetch_array($result_rq);
		 
		 $result_don = $mysqli->query("SELECT * FROM users WHERE id='$don_id'");
		 
		 while($row_don=mysqli_fetch_array($result_don)){
					

		        $to = $row_don['email'];
				$subject = 'Request acceptance details ( FindMyDonor.com )';
				$message_body = '
				Hello '.$row_don['first_name'].',

				You have accepted request of '.$row_rq['first_name'].' '.$row_rq['last_name'].'

				The requester details are:
				
				Email Id:'.$row_rq['email'].'
				
				Contact info:'. $row_rq['mobile'];

				mail( $to, $subject, $message_body );
				}
				
				
		 
		 ?> 
		 <form action="Thankyou.php" method="post" autocomplete="off">
		 
         <button class="button button-block" onClick="redirect()" id="bttn" name="conf_req"/>Confirm Request</button>
		 </form>
         
    </div>
    
	
	

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>