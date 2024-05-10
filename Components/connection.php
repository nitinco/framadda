<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farm";

$conn = mysqli_connect($servername,$username,$password, $dbname);

if(!$conn){
    die("oops unable to connect :" .mysqli_connect_error());
}

// echo "connection was successful";

?>