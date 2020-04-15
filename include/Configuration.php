<?php

$host = 'localhost:3308';
$db   = 'cela';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db";
$bdd = new PDO($dsn, $user, $pass);

?>