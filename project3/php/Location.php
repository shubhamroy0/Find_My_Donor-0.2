<?php

 class Location {
      
	  var $latitude;
	  var $longitude;
	  var region;
	  var city;
	 	  
	function __construct( $par1, $par2) {
	   $this->latitude = $par1;
	   $this->longitude = $par2;
	  
	}
 }	
	  
?>