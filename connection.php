<?php
$server = "localhost";
$dbname='student_db';
$username = 'root';
$password ="";
// Create connection
$conn = new mysqli($server, $username,$password,$dbname);
// Check connection
if (!$conn) {
echo "Connection failed";
}else{
// echo "Connected successfully!";
}
?>