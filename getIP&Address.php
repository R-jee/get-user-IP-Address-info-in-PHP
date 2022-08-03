<?php

//Gets the IP Address from the visitor
$PublicIP = $_SERVER['REMOTE_ADDR'];
//Uses ipinfo.io to get the location of the IP Address, you can use another site but it will probably have a different implementation
$json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
//Breaks down the JSON object into an array
$json     = json_decode($json, true);
//This variable is the visitor's county
$country  = $json['country'];
//This variable is the visitor's region
$region   = $json['region'];
//This variable is the visitor's city
$city     = $json['city'];
//This variable is the visitor's postal
$postal     = $json['postal'];
//This variable is the visitor's timezone
$timezone     = $json['timezone'];

$client_address = $region .", ".$city .", ". $country ." ". $postal;
?>
