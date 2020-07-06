<?php
$host="localhost";
$user="root";
$password="";
$database="ngo";
$con=mysqli_connect($host, $user, $password, $database);
if(!$con){
    echo 'something went wrong';
}

?>
