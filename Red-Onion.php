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
            <h1 class="text-white">Red Onion</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Red Onion</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- products details -->
    <section class="container my-5">
        <div class="row align-items-center">

            <!-- Left Side: Product Image -->
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="img/red-onion.jpg" alt="Fresh Red Onion" class="img-fluid rounded shadow">
            </div>

            <!-- Right Side: Product Details -->
            <div class="col-md-6">
                <h2 class="mb-3">Fresh Red Onion</h2>
                <p class="text-muted">
                    Red Onion is a popular vegetable known for its vibrant color, mild sweetness, and crisp texture.
                    Perfect for salads, cooking, and pickling.
                </p>

                <ul class="list-unstyled mb-4">
                    <li><strong>Type:</strong> Organic Red Onion</li>
                    <li><strong>Color:</strong> Deep Red / Purple</li>
                    <li><strong>Form:</strong> Whole Bulbs</li>
                    <li><strong>Usage:</strong> Cooking, Salads, Pickles, Garnishing</li>
                    <li><strong>Packaging:</strong> 500g, 1kg, 5kg</li>
                </ul>

                <p>
                    Our Red Onions are handpicked for freshness and natural flavor,
                    adding color, taste, and nutrition to your meals.
                </p>

                <!-- Enquiry Button -->
                <a href="" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-primary mt-3">
                    Enquiry Now
                </a>
            </div>

        </div>
    </section>

    <!-- Footer  -->
    <?php include('footer.php') ?>