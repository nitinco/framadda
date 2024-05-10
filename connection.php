<?php

echo "i am here cutiepie <br>";

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("oops unable to connect :" .mysqli_connect_error());
}

echo "connection was successful";

?>