<?php
	include 'weather.php';
?>
	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Helvetica|Montserrat|Roboto|Inter|Libre Baskerville|san-serif">
	<link href="https://fonts.cdnfonts.com/css/childish" rel="stylesheet">

	<title>LQ | Weather Application</title>
</head>

<body>
	<!--MAIN CONTAINER-->
	<div class="main">
		<!--CITY FORM CONTAINER-->
		<div class="form-bar">
			<h5>Weather Application</h5>
			<form>	
				<input type="text" name="city" id="city" placeholder="Enter City (ex. Manila)">
				<button type="submit" name="submit" id="submit">Submit</button>
			</form>
		</div>

		<!--DATA CONTAINER-->
		<div class="info-bar">
			<!--LEFT CONTAINER-->
			<div class="left-body-container"> 
				<!--COUNTRY CONTAINER-->
				<div class="country-container">
					<?php	
						if (isset($country)) {

						 	echo "<h6>".date("F j, Y, g:i a"). "</h6><br>";
						 	echo "<h1>".$tempCelcius. "°C</h1><br>";
							echo "<p>" .$name. " " .$country."<br>";
							$name. "</p><br>";	
							
					?>
				</div>			
			</div>


			<!--RIGHT CONTAINER-->
			<div class="right-body-container"> 
				<br>
				<h2>Weather Update</h2>
				<!--WEATHER CONTAINER-->
				<div class="weather-container">
					<div class="wea-container">		
						<h4>Weather</h4>
						<div class="box1">
							<img src="images/weather.png">
						</div>
						<div class="box2">
							<?php
									echo "<b>Condition: </b><br><span>" .$weatherCondition. "</span><br>";
									echo "<b>Description: </b><br><span>" .$weatherDescription. "</span><br>";		
							?>	
						</div>
					</div>

					<div class="temp-container">		
						<h4>Temperature</h4>
						<div class="box3">
							<img src="images/temperature.png">
						</div>
						<div class="box4">
							<?php
								echo "<b>Maximum: </b><span>" .$tempMax. "°C</span><br>";
								echo "<b>Minimum: </b><span>" .$tempMin. "°C</span><br>";
								echo "<b>Feels Like: </b><span>" .$feelsLike. "°C</span><br><br>";
							?>
						</div>
					</div>

					
				</div>
				<br><br>
				<h2>Additional Weather Information</h2>
				<div class="row-container">
					<!--WIND CONTAINER-->
					<div class ="info-box2">
						<div class="wind-container">
							<?php	
								echo "<b>Wind Speed: </b><h1>" .$windspeed. "m/s</h1><br>";
							?>	
						</div>
						<img src="images/wind.png">
					</div>

					<!--CLOUDINESS CONTAINER-->
					<div class ="info-box2">
						<div class="cloudiness-container">
							<?php	
								echo "<b>Cloudiness: </b><h1>" .$clouds. "%</h1><br>";
							?>	
						</div>
						<img src="images/cloudy.png">
					</div>



					<!--HUMIDITY CONTAINER-->

					<div class ="info-box2">
						<div class="humidity-container">
							<?php	
								echo "<b>Humidity: </b><h1>" .$humidity. "%</h1><br>";
							?>	
						</div>
						<img src="images/humid.png">
					</div>
				</div>
				
				<!--SUNRISE/SUNSET CONTAINER-->
				<div class="sun-container">
					<div class ="info-box">
						<div class="sunrise-container">
							<?php	
								echo "<b>Sunrise Time in PH: </b><h1>" .date("g:i a",$sunrise). "</h1>";
							?>	
						</div>
						<img src="images/sunrise.png">
					</div>

					<div class="info-box1">
						<div class="sunset-container">
							<?php
								echo "<b>Sunset Time in PH: </b><h1>" .date("g:i a",$sunset). "</h1><br>";
							}	
						?>	
						</div>
						<img src="images/sunset.png">
					</div>	

						<?php	
							if ($country = null){
								echo '<h3><center>---no data---</center></h3>';
							}
						?>
					
					

						
					
				</div>
			</div>	
		</div>
	</div>


</body>
</html>