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
            <h1 class="text-white">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- contact us form -->
    <section class="contact-section">
        <div class="container">
            <div class="row contact-card">
                <!-- MAP -->
                <div class="col-lg-6 p-0 map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2001635.9609039703!2d76.27240333027525!3d11.519885174609142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s229%2C%20VOC%20Street%2C%20Jayanagar%2C%20Theni%20District%2C%20Periyakulam%20(T.K)%2C%20Tamil%20Nadu%2C%20India%20-%20625603!5e0!3m2!1sen!2sin!4v1767680627441!5m2!1sen!2sin">
                    </iframe>
                </div>

                <!-- FORM -->
                <div class="col-lg-6 p-4 contact-form">
                    <h3>Contact Us</h3>

                    <form onsubmit="sendWhatsApp(); return false;">
                        <div class="mb-3">
                            <input type="text" id="name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <div class="mb-3">
                            <input type="email" id="email" class="form-control" placeholder="Your Email" required>
                        </div>

                        <div class="mb-3">
                            <input type="tel" id="phone" class="form-control" placeholder="Contact Number" required>
                        </div>

                        <div class="mb-3">
                            <select id="subject" class="form-select" required>
                                <option value="">Select Subject</option>
                                <option>General Inquiry</option>
                                <option>Support</option>
                                <option>Business</option>
                                <option>Feedback</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <textarea id="message" rows="4" class="form-control" placeholder="Your Message"
                                required></textarea>
                        </div>

                        <button type="submit" class="btn btn-theme w-100">
                            Send on WhatsApp
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer  -->
    <?php include('footer.php') ?>