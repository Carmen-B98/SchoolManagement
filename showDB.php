<?php
$servername="localhost";
$username="root";
$password="Carmen19.,.";
$dbname="mydb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Connection Failes" . mysqli_connect_error());
}

?>