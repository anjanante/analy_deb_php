<?php
$host   = 'localhost';
$dbname = 'nconstrunction';
$port   = '3307';

$dsn = "mysql:host=$host;port=$port;dbname=$dbname";
$username = 'root';
$password = '';

try {
    $oConn = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}