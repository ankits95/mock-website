<?php
$host = "sql208.infinityfree.com";
$user = "if0_41105682";
$pass = "XdjqlNbJncp8";
$db   = "if0_41105682_school_db";

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
