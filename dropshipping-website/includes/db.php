<?php
$servrname = "localhost";
$username = "root";
$password = "";
$dbname = "dropshipping_db";

//create connection
$conn = new mysqli($servrname, $username, $password, $dbname);

//chech connection

if($conn->connect_error) {
    die("connection failed: ".$conn->connect_error);
}
?>