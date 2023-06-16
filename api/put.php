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
$url = 'http://'.$domain.'api/product.php?id='.$id;
$data = array('name' => 'MAC', 'description' => 'Ordinateur portable', 'price' => '9658', 'category' => '2');

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
$response = curl_exec($ch);
var_dump($response);
curl_close($ch);
if (!$response) 
{
    return false;
}