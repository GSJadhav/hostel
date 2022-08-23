<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hostel";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,'hostel');


if(!$con){
echo "failed to connect!";
}
?>