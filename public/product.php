<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/products.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Products</title>
</head>

<body>
    <header>
        <?php include '../components/navbar.php'; ?>
    </header>
    <section class="hero">
        <div class="container col-xxl-8 px-4 ">
            <div class="row flex-lg-row-reverse align-items-center g-5 ">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="../assets/Golden Dog.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Discover the Best for Your Furry Friends</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <div class="topNav">
                <ul class="nav nav-underline justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Cat's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dog's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Others</a>
                    </li>
                </ul>
            </div>
            <div class="productsGrid">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-outline-secondary">Add to cart</a>
                                <a href="#" class="btn btn-warning">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a short card.</p>
                                <a href="#" class="btn btn-outline-secondary">Add to cart</a>
                                <a href="#" class="btn btn-warning">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-outline-secondary">Add to cart</a>
                                <a href="#" class="btn btn-warning">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-outline-secondary">Add to cart</a>
                                <a href="#" class="btn btn-warning">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php include '../components/footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>