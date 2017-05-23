<?php
include 'Location.php';
use PHPUnit\Framework\TestCase;

	class LocationTest extends TestCase{
		function test_location_latitude(){
		//Set up and Action
		$loc = new Location(22.30,88.5);
		//Assert
		$this->assertEquals(22.30, $loc->latitude);
		}
		
		function test_location_longitude(){
		//Set up and Action
		$loc = new Location(22.30,88.50);
		//Assert
		$this->assertEquals(88.50, $loc->longitude);
		}
		
	}
?>