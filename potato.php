<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sivan Sakthi Enterprises - Premium Agricultural Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Swiper CSS for slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- Animate.css for WOW.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- style -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <!-- header -->
    <?php include('header.php') ?>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section">
        <div class="container breadcrumb-content">
            <h1 class="text-white">Potato</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Potato</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ================= PRODUCT DETAILS ================= -->
    <section class="container my-5">
        <div class="row align-items-center">

            <!-- Product Image -->
            <div class="col-md-6 mb-4">
                <img src="img/potato.jpg" class="img-fluid rounded shadow" alt="Fresh Potato">
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h2>Fresh Potato</h2>
                <p class="text-muted">
                    Potato is one of the most widely consumed vegetables, known for its
                    versatility, nutritional value, and long shelf life. Suitable for
                    daily cooking and commercial use.
                </p>

                <ul class="list-unstyled">
                    <li><strong>Type:</strong> Fresh Potato</li>
                    <li><strong>Color:</strong> Light Brown</li>
                    <li><strong>Form:</strong> Whole Tuber</li>
                    <li><strong>Usage:</strong> Cooking, Frying, Curry, Snacks</li>
                    <li><strong>Supply:</strong> Bulk & Retail</li>
                </ul>

                <p>
                    Our potatoes are carefully sourced from reliable farms,
                    ensuring freshness, good texture, and excellent taste.
                </p>

                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                    Enquiry Now
                </button>
            </div>

        </div>
    </section>


    <!-- Footer  -->
    <?php include('footer.php') ?>