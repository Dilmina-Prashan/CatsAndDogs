<?php
include '../database/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="../assets/cat-halloween-kitty-svgrepo-com.svg">
    <title>Signup</title>
</head>

<body>
    <section class="loginMain">
        <a href="../public/product.php" class="bacbutton"><i class="bi bi-arrow-left-circle"></i></a>
        <div class="container">
            <div class="logo">
                <a href="../index.php"><img src="../assets/cat-halloween-kitty-svgrepo-com.svg" alt="logo"></a>
            </div>
            <div class="login">
                <div class="row innerRow">
                    <div class="col image">
                        <img src="../assets/signup.webp" alt="ginger color cat">
                    </div>
                    <div class="col form">
                        <div class="formContainer">
                            <h1>Sign Up</h1>
                            <?php
                            ?>
                            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                    <input type="password" name="cpassword" class="form-control form-control-sm" id="exampleInputPassword2" required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-dark btn-sm" type="submit">Signup</button>
                                    <a href="../public/login.php" class="btn btn-outline-dark btn-sm">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>