<?php
/**
 * Created By Storm Nant 2022
 * User: Nantenaina
 * Date: 14/06/2023
 * Time: 14:16
 */

//$url = 'http://127.0.0.1/api/product';
$domain =  $_SERVER['HTTP_HOST'];
$url = 'http://'.$domain.'api/product.php';
$data = array('name' => 'PEC', 'description' => 'Pencil 2H', 'price' => '2.25', 'category' => '9');

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }
var_dump($result);


