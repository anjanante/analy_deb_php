<?php
/**
 * Created By Storm Nant 2022
 * User: Nantenaina
 * Date: 14/06/2023
 * Time: 14:16
 */
//$url = 'http://127.0.0.1/api/product';
$domain =  $_SERVER['HTTP_HOST'];
$id  = 1;
$url = 'http://'.$domain.'/api/product.php?id='.$id;
$data = array('name' => 'MAC', 'description' => 'Ordinateur portable', 'price' => '9658', 'category' => '2');
$jsonData = json_encode($data);
var_dump($url);

// Config
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData),
));
// Execute request
$response = curl_exec($curl);
var_dump($response);
// check error
if ($response === false) {
    $error = curl_error($curl);
     die('Erreur cURL : ' . $error);
}
curl_close($curl);
if ($response !== false) {
     var_dump("Success response");
}