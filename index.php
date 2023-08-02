<?php
	include 'weather.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form>
		<label>CITY</label><br>
		<input type="text" name="city" id="city" placeholder="Ex. Manila"><br>
		<button type="submit" name="submit" id="submit">ENTER</button>
	</form>

	<?php
		
		if (isset($weather)) {
		  echo $weather;
		}	

	?>


</body>
</html>