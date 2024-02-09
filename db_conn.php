<?php
$servername = "localhost"; // or the database host provided by domains.co.za
$username = "webensar_admin1"; // the username you created
$password = "Rc1256L418"; // the password you set
$database = "webensar_demo2"; // the name of your database

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


