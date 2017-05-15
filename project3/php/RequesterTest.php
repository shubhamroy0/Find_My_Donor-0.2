<?php
include 'Requester.php';


use PHPUnit\Framework\TestCase;



	class RequesterTest extends TestCase{
		
		function test_Requester_initialisation(){
		//Set up and Action
		$req = new Requester('Jabber','Wock','jwock@gmail.com',9432668169,22,'A +ve');
		
		//Assert
		$this->assertEquals('Jabber', $req->getFirstName());
		$this->assertEquals('Wock', $req->getLastName());
		$this->assertEquals('jwock@gmail.com', $req->getEmailId());
		$this->assertEquals('9432668169', $req->getMobile());
		$this->assertEquals(22, $req->getAge());
		
		$bloodType = $req->bloodDetails->bloodgroup;
		
		$this->assertEquals('A +ve', $bloodType);
		
		}
		
		
		function test_Requester_trackLocation(){
		//Set up
		$req = new Requester('Jabber','Wock','jwock@gmail.com',9432668169,22,'A +ve');
		
		//Action
		$req->trackLocation(22.50,88.70);
		
		//Assert
		$this->assertEquals(22.50, $req->getLatitude());
		$this->assertEquals(88.70, $req->getLongitude());
		
		}
		
		
		function test_Requester_searchBlood(){
		//Set up and Action
		$req = new Requester('Jabber','Wock','jwock@gmail.com',9432668169,22,'A -ve');
		$req->trackLocation(22.56,88.43);
		
		include ('db.php');
		$result = $req->searchBlood($req->bloodDetails);
		$rowcount = mysqli_num_rows($result);
		
		//Assert for distance
		while($row=mysqli_fetch_array($result)){
			$this->assertEquals('A -ve', $row['blood_group']);
			$distanceKM = $req->calDistance($row['latitude'], $row['longitude']);
			$this->assertLessThan(5, $distanceKM);
		}
		
		//Assert
		$this->assertEquals(2, $rowcount);	
				
		}

		
	}
?>