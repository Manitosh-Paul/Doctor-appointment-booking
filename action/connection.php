<?php 

$username = 'root';
$password = '';
$database_name = 'max24x7';
$server = 'localhost';

$connect_to = mysqli_connect($server, $username, $password, $database_name) or die(mysqli_error($connect_to));
