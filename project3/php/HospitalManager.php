<?php

 class HospitalManager {
     var $hospital_name;
	 var $hospital_contact_info;
	 var $hospital_address;
	 var $hospital_latitude;
	 var $hospital_longitude;
	 
	  function getHName(){
        return $this->hospital_name;
      }
		  
	  function getHContactNo(){
        $this->hospital_contact_info;
      }	
	  
	  function getHAddress(){
        $this->hospital_address;
      }
	  
	  function getHLatitude(){
        $this->hospital_latitude;
      }

	  function getHLongitude(){
        return $this->hospital_longitude;
      }
	  
	  function addNewHospital( $par1, $par2, $par3, $par4, $par5 ){
        
		include 'db.php';
		
		$this->hospital_name= $par1;
		$this->hospital_contact_info = $par2;
		$this->hospital_address = $par3;
		$this->hospital_latitude = $par4;
		$this->hospital_longitude = $par5;
		
		$sql = "INSERT INTO hospitals (hospital_name, hospital_contact_info, hospital_address, hospital_latitude, hospital_longitude) " 
            . "VALUES ('$this->hospital_name','$this->hospital_contact_info', '$this->hospital_address', '$this->hospital_latitude', '$this->hospital_longitude')";
		$result = $mysqli->query($sql);
		
	  }
	  
	  
	   function getHospitalId(){
        
		include 'db.php';
		$sql2 = "SELECT * from hospitals where hospital_latitude=$this->hospital_latitude";
		$result2 = $mysqli->query($sql2);
		$row2=mysqli_fetch_array($result2);
		return $row2['hid'];
		
	  }
	  
	   function initHospital( $par1, $par2, $par3, $par4, $par5 ){
        
		
		$this->hospital_name= $par1;
		$this->hospital_contact_info = $par2;
		$this->hospital_address = $par3;
		$this->hospital_latitude = $par4;
		$this->hospital_longitude = $par5;
		
	  }
	  
	  function searchHospitals($newReq){
		include 'db.php';
		$index = 0;
		$selId = '';
		
		
		$result = $mysqli->query("SELECT * 
		FROM hospitals")  or die($mysqli->error());
		
		$min_dist=5.0;
		while($row=mysqli_fetch_array($result)){
			$dist = $newReq->calDistance($row['hospital_latitude'],$row['hospital_longitude']);
			
			if($dist<=$min_dist){
				$selId = $row['hid'];
				$min_dist=$dist;
				
			}
		}
		
		$result = $mysqli->query("SELECT * 
		FROM hospitals
		WHERE hid='$selId'")  or die($mysqli->error());
		
		return $result;
		
         
      }
	  
	  function editExistingHospitalInfo(){
        
      }	  
	  
	  
		
	  
		
 }	
	  
?>