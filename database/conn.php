<?php
$studentNumber = $_SESSION['students']['studentNumber'];
$idType = $_SESSION['idType'];
$reason = $_SESSION['reason'];

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "student_data"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}