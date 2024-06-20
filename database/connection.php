<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "catsanddogs_db";

$conn = new mysqli($servername,$username,$password,$db_name, 3306);
if($conn->connect_error){
    die("Connation Faild ".$conn->connect_error);
}
echo "";
