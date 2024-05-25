<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/cart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Cart</title>
</head>

<body>
    <header>
        <?php include '../components/navbar.php'; ?>
    </header>
    <div class="container cart">
        <h1>Cart</h1>
        <div class="row">
            <div class="row col-8 items">
                <div class="col">
                    <img src="" alt="">
                </div>
                <div class="col">
                    One of three columns
                </div>
                <div class="col">
                    <button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
            <div class="col-4 prices">
                <h2>Price</h2>
            </div>
        </div>
    </div>
</body>

</html>