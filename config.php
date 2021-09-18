<?php

$conn = new mysqli("localhost","root","","login");
if($conn->connect_error){
	die("connection Failes!".$conn->connect_error);
}




  ?>