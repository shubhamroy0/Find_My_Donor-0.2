<?php
		
			function calDistance($lat1, $lon1, $lat2, $lon2, $unit) {

				  $theta = $lon1 - $lon2;
				  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
				  $dist = acos($dist);
				  $dist = rad2deg($dist);
				  $miles = $dist * 60 * 1.1515;
				  $kilometers = $miles * 1.609344;
				  
				  
				  
				  
				  $unit = strtoupper($unit);

				  if ($unit == "K") {
					  
					return ($miles * 1.609344);
				  } else if ($unit == "N") {
					  return ($miles * 0.8684);
					} else {
						return $miles;
					  }
				}
	?>

<html>
	<body>
		<?php
				echo calDistance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
				echo calDistance(22.60501992, 88.4095147, 22.57470848, 88.43376187, "K") . " Kilometers<br>";
				echo calDistance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";
	
		?>
	</body>
</html>	
	