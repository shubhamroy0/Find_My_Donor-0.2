<?php
include 'php/Requester.php';
include 'php/HospitalManager.php';

session_start();

$email = $_SESSION['email'];
$f_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$age = $_SESSION['age'];
$donblood_group = $_SESSION['blood_group'];
$mobile = $_SESSION['mobile'];
$requesterid = 0;
$newReq = $_SESSION['newreq'];
$hMgr = $_SESSION['hMgr'];


			//echo $newReq->firstname;
			//echo $hMgr->hospital_name;
			//Inserting in Requester database
				include 'db.php';  
				$bloodType = $newReq->bloodDetails;
					$sql = "INSERT INTO requester (first_name, last_name, age, blood_group, email, latitude, longitude, mobile) " 
							. "VALUES ('$newReq->firstname','$newReq->lastname', '$newReq->age', '$bloodType->bloodgroup','$newReq->email_id',
							'$newReq->latitude', '$newReq->longitude', '$newReq->mobile')";
							
	

		
				 if ( $mysqli->query($sql) ){
					 
					  $result1 = $mysqli->query("SELECT id FROM requester WHERE email = '$newReq->email_id'")  or die($mysqli->error());
					  $row1=mysqli_fetch_array($result1);
					  $requesterid = $row1['id'];
				 }
				 
				
			
			//Notifying donors
			
				$result = $newReq->searchBlood($newReq->bloodDetails);
			    while($row=mysqli_fetch_array($result)){
					
					
				$donorfirst_name=$row['first_name'];
		        $to = $row['email'];
				$subject = 'Blood request ( FindMyDonor.com )';
				
				$message_body = '
				Hello '.$donorfirst_name.',

				'.$f_name.' is in need of blood.
				
				Suggested meeting point: 
				
				Hospital name: '.$hMgr->hospital_name.'
				
				Hospital address: '.$hMgr->hospital_address.'

				Please click this link to accept the request:
			

				http://localhost/ConfirmRequest.php?don_id='.$row['id'].'&rq_id='.$requesterid.'&hosp_id='.$hMgr->getHospitalId();

				mail( $to, $subject, $message_body );
				}

				header("location: index.php"); 
				
			

?>