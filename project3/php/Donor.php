<?php

 class Donor {
      var $donorid;
	  var $firstname;
	  var $lastname;
	  var $age;
	  var $gender;
	  var $bloodgroup;
	  var $email_id;
	  var $address;
	  var $pincode;
	  var $latitude;
	  var $longitude;
	  var $mobile;
	  var $password;
	  var $active;
	  var $lastDateofDonation;
   
    function saveLocation($lat, $lon){
		$this->latitude=$lat;
		$this->longitude=$lon;
      }
	function savePassword($par){
		$this->password=$par;
	}  
	function getFirstName(){
        echo $this->firstname; 
      }
	
	function getLastName(){
        echo $this->lastname; 
      }	
	  
	function getEmailId(){
        echo $this->email_id; 
      }
	  
	function getMobile(){
        echo $this->mobile;         
      }
	  
	function getAge(){
        echo $this->age;         
      }
	  
	function getLatitude(){
        return $this->latitude;         
      }
	  
	function getLongitude(){
        return $this->longitude;         
      }
	
	function getlastDateofDonation(){
			return $this->lastDateofDonation;
		}	
		
	function registerDonor($hash){
		// active is 0 by DEFAULT (no need to include it here)
	include 'db.php';  
	$sql = "INSERT INTO users (first_name, last_name, age, gender, blood_group, email, address, pincode, latitude, longitude, mobile, password, hash) " 
            . "VALUES ('$this->firstname','$this->lastname', '$this->age', '$this->gender', '$this->bloodgroup','$this->email_id', '$this->address', '$this->pincode',
				'$this->latitude', '$this->longitude', '$this->mobile', '$this->password', '$hash')";

    // Add user to the database
    if ( $mysqli->query($sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $to      = $this->email_id;
        $subject = 'Account Verification ( FindMyDonor.com )';
        $message_body = '
        Hello '.$this->firstname.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://findmydonor.comli.com/verify.php?email='.$this->email_id.'&hash='.$hash;  

        mail( $to, $subject, $message_body );

        header("location: http://findmydonor.comli.com/profile.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: http://findmydonor.comli.com/error.php");
    }
		
	}

	function acceptRequest(){
		
	}

	function alertLocation(){
		
	}
		  
	function __construct( $par1, $par2, $par3, $par4, $par5,
			$par6, $par7, $par8, $par9) {
	   $this->firstname = $par1;
	   $this->lastname = $par2;
	   $this->age = $par3;
	   $this->gender = $par4;
	   $this->bloodgroup = $par5;
	   $this->email_id = $par6;
	   $this->address = $par7;
	   $this->pincode = $par8;
	   $this->mobile = $par9;
		}
 }	
	  
?>