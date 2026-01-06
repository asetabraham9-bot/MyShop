<?php

$host = 'localhost';
$dbname = 'myfirstdatabase';
$dbusername = 'root';
$dbpassword = '';

try {
   $pdo = new PDO("mysql:host=$host;dbname=$dbname",$dbusername,
   $dbpassword);
   $pod->setAttribute(POD::ATTR_ERRMODE, POD::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("connection failed: ". $e->getMessage());
}