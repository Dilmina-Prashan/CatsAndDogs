<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/faqs.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>FAQ</title>
</head>

<body>
    <header>
        <?php include '../components/navbar.php'; ?>
    </header>

    <div class="FaqHeading">
        <h1>Frequently Asked Questions (FAQ)</h1>
    </div>

    <div class="container faq">
        <div class="question">
            <span>Q.</span>
            <p>What is your return policy for pet products?</p>
        </div>
        <div class="answer">
            <span>A.</span>
            <p>We offer a 30-day return policy on all unused and unopened pet products.
                If you are not satisfied with your purchase, you can return it within 30
                days from the date of delivery for a full refund. Please ensure the item
                is in its original packaging and condition. For more details, visit our
                Return Policy page.</p>
        </div>
        <hr>
        <div class="question">
            <span>Q.</span>
            <p>How long does shipping take?</p>
        </div>
        <div class="answer">
            <span>A.</span>
            <p>Shipping times vary depending on your location. Typically, orders are
                processed within 1-2 business days and standard shipping takes 3-7 business
                days. Expedited shipping options are also available at checkout for faster
                delivery. You will receive a tracking number once your order has been shipped.</p>
        </div>
        <hr>
        <div class="question">
            <span>Q.</span>
            <p>Are your pet products safe and tested?</p>
        </div>
        <div class="answer">
            <span>A.</span>
            <p>Yes, all our pet products are thoroughly tested for safety and quality.
                We source our products from reputable manufacturers who follow strict
                safety standards. Additionally, many of our products have been reviewed
                and approved by veterinarians to ensure they are safe for your pets.</p>
        </div>
        <hr>
        <div class="question">
            <span>Q.</span>
            <p>Can I modify or cancel my order after it has been placed?</p>
        </div>
        <div class="answer">
            <span>A.</span>
            <p>We strive to process orders as quickly as possible, which means
                we may not be able to make changes or cancellations once an order
                has been placed. However, if you need to modify or cancel your order,
                please contact our customer service team immediately, and we will do
                our best to accommodate your request.</p>
        </div>
        <hr>
        <div class="question">
            <span>Q.</span>
            <p>Do you offer any discounts or loyalty programs for frequent buyers?</p>
        </div>
        <div class="answer">
            <span>A.</span>
            <p>Yes, we offer various discounts and promotions throughout the year.
                Additionally, we have a loyalty program for our frequent buyers where
                you can earn points for every purchase that can be redeemed for discounts
                on future orders. Sign up for our newsletter to stay updated on our latest
                offers and join our loyalty program to start earning rewards today.</p>
        </div>
        <hr>
        <div class="ask">
            <h5>Ask a Question ?</h5>
        </div>

        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com" enabled>
            <label for="floatingInputDisabled">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2Disabled" style="height: 100px" enabled></textarea>
            <label for="floatingTextarea2Disabled">Comments</label>
        </div>
        <div class="button">
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
    </div>
    <footer>
        <?php include '../components/footer.php'; ?>
    </footer>

</body>