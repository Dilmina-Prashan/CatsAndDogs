<?php
include '../database/connection.php';

if(isset($_POST['signup'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password !== $cpassword){
        die('Password do not match.');
    }

    $hashPassword = password_hash($password, PASSWORD_BCRYPT);

    $stmt=$conn->prepare('SELECT id FROM user WHERE = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0){
        echo 'Email already exists.';
    }

    $stmt = $conn->prepare('INSERT INTO user (email, passworrd) VALUES (?, ?)');
    $stmt->bind_param('ss', $email, $hashPassword);

    if ($stmt->execute()){
        header('Location: login.php');
    }else{
        echo 'Error: ' .$stmt->error;
    }
    $stmt->close();
    $conn->close();
}