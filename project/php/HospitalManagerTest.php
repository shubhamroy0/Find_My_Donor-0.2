<?php
include 'HospitalManager.php';


use PHPUnit\Framework\TestCase;



	class HospitalManagerTest extends TestCase{
		
		
		function test_HospitalManager_addNewHospital(){
		//Set up
		$hMgr = new HospitalManager();
		
		//Action
		$hMgr->addNewHospital('R.G. Kar Medical College & Hospital', '03325557656' , '1, Kshudiram Bose Sarani, Bidhan Sarani, Kolkata, West Bengal 700004',
											22.6046318, 88.3782378);
		//echo '$hMgr->hospital_name';
		include 'db.php';
		$sql1 = "SELECT * FROM hospitals WHERE hospital_name='$hMgr->hospital_name' 
							AND hospital_contact_info='$hMgr->hospital_contact_info'";
		$result1 = $mysqli->query($sql1);
		$row = mysqli_fetch_array($result1);
		
		//Assert
		$this->assertEquals('R.G. Kar Medical College & Hospital', $row['hospital_name']);
		/*$this->assertEquals(22.5847517, $row['hospital_latitude']);
		$this->assertEquals(88.4230538, $row['hospital_longitude']);
		
		*/
		}
		
		
		
		
		
	}
?>