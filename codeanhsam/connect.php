<?php
$server_username = "vohai";
$server_password = "12345678";
$server_host = "localhost";
$database = 'sign_up';

$conn = mysqli_connect($server_host,$server_username,$server_password,$database);
mysqli_select_db($conn,'sign_up');






