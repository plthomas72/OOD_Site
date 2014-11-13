<?php
if(isset($_POST['eventName'])){
	$eventData = $_POST['eventName'];
	echo $eventData;
	$calfile = fopen("calevents.php", "w");
	fwrite($calfile, $eventData);
	fclose($calfile);
}
?>
