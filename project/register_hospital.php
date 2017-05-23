
<?php
	session_start();
	include 'php/HospitalManager.php';
	
	$HospName=$_POST["hospname"];
	$HospContact=$_POST["hospcontact"];
	$HospAddress=$_POST["hospaddress"];
	$HospLatitude=$_POST["lat"];
	$HospLongitude=$_POST["lng"];
	
	/*echo "'$HospName', '$HospContact' , '$HospAddress',
										'$HospLatitude', 'HospLongitude'";
	*/
	$hMgr = new HospitalManager();
	$hMgr->addNewHospital($HospName, $HospContact , $HospAddress,
											$HospLatitude, $HospLongitude);
										
	

	$_SESSION['new_hosp_mgr'] = $hMgr ; 
	
	 header("location:  http://localhost/project/hospital_registration.php");
?>
