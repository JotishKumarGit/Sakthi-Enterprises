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
            <h1 class="text-white">Drumstick</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Drumstick</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ================= PRODUCT DETAILS ================= -->
    <section class="container my-5">
        <div class="row align-items-center">

            <!-- Product Image -->
            <div class="col-md-6 mb-4">
                <img src="img/Drumstick.jpg" class="img-fluid rounded shadow" alt="Fresh Drumstick">
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h2>Fresh Drumstick</h2>
                <p class="text-muted">
                    Drumstick is a nutritious vegetable widely used in South Indian cuisine.
                    It is rich in vitamins, minerals, and antioxidants, perfect for curries,
                    soups, and traditional dishes.
                </p>

                <ul class="list-unstyled">
                    <li><strong>Type:</strong> Fresh Drumstick</li>
                    <li><strong>Color:</strong> Green</li>
                    <li><strong>Form:</strong> Whole Vegetable</li>
                    <li><strong>Usage:</strong> Curry, Sambar, Soup, Fry</li>
                    <li><strong>Supply:</strong> Bulk & Retail</li>
                </ul>

                <p>
                    Our drumsticks are carefully harvested for freshness and quality,
                    ensuring crisp texture, natural flavor, and premium taste.
                </p>

                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                    Enquiry Now
                </button>
            </div>

        </div>
    </section>


    <!-- Footer  -->
    <?php include('footer.php') ?>