<?php
	require_once 'CCar.php';
?>

<form method="GET">
	Enter car name: <input type="text" name="carName" value=<?=$_REQUEST['carName']?>><br>
	Enter carcase: <input type="text" name="carcase" value=<?=$_REQUEST['carcase']?>><br>
	Enter time (h): <input type="text" name="time" value=<?=$_REQUEST['time']?>><br>
	Enter distance (km): <input type="text" name="distance" value=<?=$_REQUEST['distance']?>><br>
	Enter max speed (km/h): <input type="text" name="maxSpeed" value=<?=$_REQUEST['maxSpeed']?>><br>
	Enter number of wheels: <input type="text" name="wheelsNum" value=<?=$_REQUEST['wheelsNum']?>><br>
	<input type="radio" name="speedType" value="km/h" <?=($_REQUEST['speedType'] == "km/h") ? 'checked' : ''?>>Km/h<br>
	<input type="radio" name="speedType" value="m/s" <?=($_REQUEST['speedType'] == "m/s") ? 'checked' : ''?>>M/s<br>
	<input type="submit" value="Calculate">
</form>

<?php
	$car = new CCar($_REQUEST['carName'], $_REQUEST['carcase'], $_REQUEST['time'], $_REQUEST['distance'], $_REQUEST['maxSpeed'], $_REQUEST['wheelsNum'], $_REQUEST['speedType']);

	$car->setCarSpeed($_REQUEST['time'], $_REQUEST['distance'], $_REQUEST['speedType']);

	echo "Current speed is ".$car->getCarSpeed()." ".$car->getSpeedType().".";
?>