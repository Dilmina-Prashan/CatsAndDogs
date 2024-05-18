<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Cats and Dogs</title>
</head>

<body>
    <header>
        <?php include './components/navbar.php'; ?>
    </header>
    <section class="main">
        <div class="container">
            <h1>Most Recent</h1>
            <div class="row">
                <div class="imageClass col-8">
                    <img src="./assets/britishLongHeair.jpeg" alt="british short hear">
                </div>
                <div class="textClass col-4">
                    <h2>The British Longhair: A Luxurious Feline with a Noble Presence</h2>
                    <p>The British Longhair cat, with its luscious coat and dignified demeanor, is a strikingly beautiful breed that exudes elegance and charm. Often overshadowed by its shorthaired counterpart, the British Longhair is gaining recognition for its unique qualities and endearing personality. Let’s explore what makes this breed a delightful addition to any cat lover’s home.</p>
                    <button type="button" class="btn btn-outline-secondary">Read More</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="imageClass col-8">
                    <img src="./assets/pexels-asapboyko-4089863.jpg" alt="british short hear">
                </div>
                <div class="textClass col-4">
                    <h2>The British Shorthair: A Majestic Companion with a Gentle Heart</h2>
                    <p>When one imagines a cat with regal bearing, a plush coat, and a demeanor that radiates calm, the British Shorthair often comes to mind. This iconic breed, renowned for its dense fur and rounded features, has captivated cat enthusiasts worldwide. Let’s delve into what makes the British Shorthair such a beloved pet.</p>
                    <button type="button" class="btn btn-outline-secondary">Read More</button>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php include './components/footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>