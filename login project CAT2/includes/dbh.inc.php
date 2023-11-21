<?php

$servername ="localhost";
$dbUsername ="root";
$dBpassword ="";
$dBname ="login";

$conn = mysqli_connect($servername, $dbUsername, $dBpassword, $dBname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}