<?php

$server = 'localhost:3306';
$username = 'admin';
$password = 'contra1234';
$database = 'php_login_database';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
