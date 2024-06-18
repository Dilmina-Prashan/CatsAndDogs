<?php
include '../database/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {
        $sql = "INSERT INTO user (email, password, cpassword) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt ->bind_param("ss", $email, $password, $cpassword);
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $stmt->close();
}
