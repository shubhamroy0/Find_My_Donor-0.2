<?php
include 'Donor.php';
use PHPUnit\Framework\TestCase;
include 'db.php';


class DonorTest extends TestCase{
		
		function test_Donor_initialisation(){
		//Set up and Action
		$donor1 = new Donor('Jabber','Wock',22,'Male','A +ve','jwock@gmail.com','Kolkata',700089,9432668169);
		$donor1->saveLocation(22.50,88.60);
		include 'db.php';
		$password = $mysqli->escape_string(password_hash('123', PASSWORD_BCRYPT));
		$donor1->savePassword($password);
		
		
		//Assert
		$this->assertEquals('Jabber', $donor1->getFirstName());
		$this->assertEquals('Wock', $donor1->getLastName());
		$this->assertEquals(22, $donor1->getAge());
		$this->assertEquals('Male', $donor1->gender);
		$this->assertEquals('A +ve', $donor1->bloodgroup);
		$this->assertEquals('jwock@gmail.com', $donor1->getEmailId());
		$this->assertEquals('Kolkata', $donor1->address);
		$this->assertEquals(700089, $donor1->pincode);
		$this->assertEquals(9432668169, $donor1->getMobile());
		$this->assertEquals($password, $donor1->password);
		$this->assertEquals(22.50, $donor1->getLatitude());
		$this->assertEquals(88.60, $donor1->getLongitude());
		
		
		
		}
		
		
		
		
	}
?>