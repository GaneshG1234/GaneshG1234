<?php

$server = "localhost";
$username = "root";
$password = "";
$database="winter-trip";

$con = mysqli_connect($server,$username, $password);

if(!$con){
    die("connection to this database failed due to".mysqli_connct_error());
}
?>