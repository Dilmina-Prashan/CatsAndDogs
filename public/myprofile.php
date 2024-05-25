<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/myprofile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Products</title>
</head>

<body>

    <div class="btn-one">
        <a href="../public/product.php" class="btn">
            < Back to Home</a>
    </div>

    <div class="imageClass">
        <img src="../assets/profilepic.jpg" alt="profile picture" width="260">
    </div>

    <div class="container">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Delivery Address</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
            <input type="Name" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Password</label>
            </div>
            <div class="col-auto">
                <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                    Must be 8-20 characters long.
                </span>
            </div>
        </div>

        <div class="btn-grp">
            <div class="savebtn samesize">

                <button type="button" class="btn btn-success">Success</button>

            </div>

            <div class="deletebtn samesize">

                <button type="button" class="btn btn-danger">Danger</button>

            </div>
        </div>




    </div>

</body>

</html>