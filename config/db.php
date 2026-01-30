<?php
$host = '10.219.200.131';
$user = 'coffeedb';
$password = 'passwd123'; // Replace with your MySQL password
$dbname = 'coffeeshop'; // Replace with your database name

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}
?>