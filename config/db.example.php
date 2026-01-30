<?php
$host = '127.0.0.1';
$user = 'coffeedb';
$password = 'your_password_here';
$dbname = 'coffeeshop';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}
?>