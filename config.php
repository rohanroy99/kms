<?php
session_start();
# connection code
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';

$conn = mysqli_connect($host,$username,$password,$dbname) or die(mysqli_error($conn));
// the conn variable is going to store the object datatype if the connection is established

//var_dump($conn);


?>