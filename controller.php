<?php
$apiKey = "cdf1fd6f335ee7af085bdb32c48caeb5";
$cityId = $_POST['ciudad'];
 if(isset($_POST['enviar'])){
     $var = true;
 }

$googleApiUrl = 'http://api.openweathermap.org/data/2.5/forecast?id='.$cityId.'&APPID='.$apiKey.'';
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response);
$currentTime = time(); 

?>