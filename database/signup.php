<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['$pass'];
    $cpassword = $_POST['$cpass'];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count_emai = mysqli_num_rows($result);

    if ($count_emai == 0) {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            echo $sql = "INSERT INTO user(email, password) VALUES ('$email,$pass')"; 
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: ../public/login.php");
            }
        }
    } else {
        if ($count_emai > 0) {
            echo '<script>
                window.location.href="myprofile.php";
                alert("Email already exists");
            </script>';
        }
    }
}