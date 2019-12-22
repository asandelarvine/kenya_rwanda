<?php
$servername="localhost";
$username="root";
$password="password";
$databasename="rwanda";

$conn=mysqli_connect($servername,$username,$password,$databasename);

if(!$conn){
    echo "not connected";
}else{
    echo "connected";
}