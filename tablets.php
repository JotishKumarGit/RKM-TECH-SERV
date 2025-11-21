<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Tablets</title>

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
            <li class="breadcrumb-item active text-light" aria-current="page">Tablets</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/tablets.jpg" class="img-fluid rounded" alt="Tablets">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">High-Performance Tablets</h2>

                    <p class="text-muted">
                        Our Tablets are designed for work, entertainment, online learning, and 
                        high-performance mobile computing. Featuring powerful processors, crisp displays, 
                        long battery life, and sleek designs suitable for all age groups.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> High-resolution touchscreen display</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Fast processors for smooth multitasking</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Long battery life for all-day usage</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Lightweight & portable design</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Available in Wi-Fi & 4G/5G variants</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Screen Size</th>
                                <td>8" / 10" / 12.4"</td>
                            </tr>
                            <tr>
                                <th>Processor</th>
                                <td>Quad-Core / Octa-Core</td>
                            </tr>
                            <tr>
                                <th>RAM</th>
                                <td>3GB / 4GB / 6GB</td>
                            </tr>
                            <tr>
                                <th>Storage</th>
                                <td>32GB / 64GB / 128GB</td>
                            </tr>
                            <tr>
                                <th>Battery</th>
                                <td>5000mAh – 8000mAh</td>
                            </tr>
                            <tr>
                                <th>Connectivity</th>
                                <td>Wi-Fi / 4G / 5G</td>
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
