<?php
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    extract($_POST);
    $email = dataClean($email);
    $password = dataClean($password);
    $cpassword = dataClean($cpassword);

    $message = array();

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message['$email'] = "Invalid Email Address...!";
    } else {
        $db = dbConn();
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $message['$email'] = "This Email address already exists...!";
        }
    }

    if (!empty($password)) {
        if (strlen($password) < 8) {
            $message['password'] = "The password should be 8 characters more";
        }
    }

    if (empty($message)) {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $db = dbConn();
            $sql = "INSERT INTO user(email, password) VALUES ('$email,$pass')";
            $db->query($sql);

            $email_id = $db->insert_id;

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
