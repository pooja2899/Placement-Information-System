<?php

$con=mysqli_connect("localhost","root","","demo");
@session_start();
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
