<?php
$host="http://192.168.2.7/openbravo/ws/dal/";
$username="Openbravo";
$password="openbravo";
$additionalHeaders="";
$payloadName="something";
$process = curl_init($host);
curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/xml', $additionalHeaders));
curl_setopt($process, CURLOPT_HEADER, 1);
curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($process, CURLOPT_TIMEOUT, 30);
echo file_get_contents("http://192.168.2.7/openbravo/ws/dal/schema");
curl_close($process);

?>