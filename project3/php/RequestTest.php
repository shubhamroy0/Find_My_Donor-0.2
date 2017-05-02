<?php
include 'Request.php';
use PHPUnit\Framework\TestCase;

	class RequestTest extends TestCase{
		
		function test_Request_bloodgroup(){
		//Set up 
		$req = new Request();
		//Action
		$req->setBloodType('A -ve');
		//Assert
		$this->assertEquals('A -ve', $req->bloodgroup);
		}
		
			
	}
?>