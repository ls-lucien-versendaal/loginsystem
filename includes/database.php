<?php
//Params to connect to DB
$host = "localhost";
$user = "root";
$pass = "";
$db = "login_system_db";

//connection to database 
$conn = mysqli_connect($host,$user,$pass,$db);

if (!$conn) {
    die("Database connection failed");
}