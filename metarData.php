<?php
 
$location = $_REQUEST['location'];
 
$metar = file_get_contents("http://metar.vatsim.net/?id=".$location);
 
print json_encode(['location' => $location, 'metar' => $metar]);
 
?>