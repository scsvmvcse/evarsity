<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname); 
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname); 
if ($conn->connect_error) {
		die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
	}
$connect = new PDO("mysql:host=localhost;dbname=test","root","");
$host_name = "localhost";
$database = "test"; 
$username = "root"; 
$password = "";     
$connection = mysqli_connect($host_name, $username, $password, $database);
if (!$connection) {
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    echo "<br>Debugging error: " . mysqli_connect_error();
    exit;
}
date_default_timezone_set('Asia/Kolkata');
$dat= date('d-m-Y h:i:s');
$da= date('d-m-Y');
$t= date('h:i:s');
?>