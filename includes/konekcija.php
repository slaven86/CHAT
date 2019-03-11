<?php

$localhost = 'localhost';
$user = 'root';
$pass = '';
$db = 'ajax';

$conn = mysqli_connect($localhost,$user,$pass,$db)or die( DATABASE_CONNECT_ERROR . mysqli_error($connection));

	
?>