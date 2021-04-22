<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "studentlogin";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}