<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Makhana</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
</head>

<body>

    <!-- Header -->
    <?php include('header.php') ?>

    <!-- Breadcrumb -->
    <nav class="breadcrumb-hero" aria-label="breadcrumb">
        <div class="overlay"></div>
        <ol class="breadcrumb centered-text">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Products</a></li>
            <li class="breadcrumb-item active text-light" aria-current="page">Makhana</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/makhana.jpeg" class="img-fluid rounded" alt="Makhana">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">Premium Makhana</h2>

                    <p class="text-muted">
                        Our Makhana (fox nuts) are hand-picked, roasted, and packaged for freshness. 
                        A healthy snack rich in protein, low in fat, and perfect for all age groups. 
                        Ideal for home consumption, gifting, or corporate packs.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> 100% natural and chemical-free</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Rich in protein and nutrients</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Roasted and ready-to-eat</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Ideal for healthy snacking</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Available in various pack sizes</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Type</th>
                                <td>Roasted / Plain / Flavored</td>
                            </tr>
                            <tr>
                                <th>Weight</th>
                                <td>100g / 250g / 500g</td>
                            </tr>
                            <tr>
                                <th>Packaging</th>
                                <td>Air-tight, hygienic packs</td>
                            </tr>
                            <tr>
                                <th>Ingredients</th>
                                <td>100% Natural Fox Nuts (Makhana)</td>
                            </tr>
                            <tr>
                                <th>Usage</th>
                                <td>Snacking, gifting, or cooking</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Enquiry Button -->
                    <button class="btn btn-primary btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Enquiry Now
                    </button>

                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php') ?>
