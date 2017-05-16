<!DOCTYPE html>
<?php
/* Displays all successful messages */
session_start();
include 'db.php';
$rq_id = $_SESSION['rq_id'];
$don_id = $_SESSION['don_id'];


    
    // Select requester with matching rq_id
	$result_rq = $mysqli->query("SELECT * FROM requester WHERE id='$rq_id'");
	
	
	
	// Select donor with matching don_id
	$result_don = $mysqli->query("SELECT * FROM users WHERE id='$don_id'");
	
	$row_don=mysqli_fetch_array($result_don);
	
	while($row_rq = mysqli_fetch_array($result_rq)){
                        
                        $don = $row_don['id'];
			$rqid = $row_rq['id'];
                        $sql = "UPDATE requester SET donor_id= $don' WHERE id='$rqid'";
                        $mysqli->query($sql);
			
                        
		        $to = $row_rq['email'];
				$subject = 'Donor details ( FindMyDonor.com )';
				$message_body = '
				Hello '.$row_rq['first_name'].',

				Your request is accepted by '.$row_don['first_name'].' '.$row_don['last_name'].'

				The donor details are:
				
				Email Id:'.$row_don['email'].'
				
				Contact info:'. $row_don['mobile'].'
				
				Age:'. $row_don['age'];
                                
                                
				mail( $to, $subject, $message_body );
				}

    

?>


<html>
<head>
  <title>Thank You</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<div class="form">
    <h1> 'Thank You for accepting!' </h1>
    <p>
     An Email is sent to you about the requester information.
	 The requester will also get your info by mail!.
    </p>
    <a href="index.php"><button class="button button-block"/>Home</button></a>
</div>
</body>
</html>