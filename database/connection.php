<?php
function dbConn()
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "catsanddogs_db";
    $port = 3306;

    $conn = new mysqli($server, $username, $password, $db, $port);

    if ($conn->connect_error) {
        die("Database Error : " . $conn->connect_error);
    } else {
        return $conn;
    }
}
