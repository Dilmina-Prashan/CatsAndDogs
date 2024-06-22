<?php
function dbConn()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "catsanddogs_db";
    $port = 3306;

    $conn = new mysqli($servername, $username, $password, $db_name, $port);
    if ($conn->connect_error) {
        die("Connation Faild " . $conn->connect_error);
    } else {
        return $conn;
    }
}

function dataClean($data = null){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
