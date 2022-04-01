<?php

// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_HOST', 'localhost');
// define('DB_NAME', 'task4');

// // Make the connection:
// $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error() );

// mysqli_set_charset($dbc, 'utf8');


// ********************************************************************
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrent";

$conn = @mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}