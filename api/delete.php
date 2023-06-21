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
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 400); //timeout in seconds
$response  = curl_exec($ch);
var_dump($response);
curl_close($ch);