<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Smartphones</title>

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
            <li class="breadcrumb-item active text-light" aria-current="page">Smartphones</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/Smartphones.jpeg" class="img-fluid rounded" alt="Smartphones">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">Latest Smartphones</h2>

                    <p class="text-muted">
                        Our Smartphones deliver high performance, sleek design, and innovative features. 
                        Perfect for communication, productivity, gaming, and photography with long battery life 
                        and crystal-clear displays.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> High-resolution displays with vibrant colors</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Powerful processors for smooth multitasking</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Long-lasting battery for all-day usage</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Advanced camera systems for professional photography</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Sleek, lightweight, and durable designs</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Screen Size</th>
                                <td>5.5" – 7.2"</td>
                            </tr>
                            <tr>
                                <th>Processor</th>
                                <td>Octa-Core / Snapdragon / MediaTek</td>
                            </tr>
                            <tr>
                                <th>RAM</th>
                                <td>4GB / 6GB / 8GB</td>
                            </tr>
                            <tr>
                                <th>Storage</th>
                                <td>64GB / 128GB / 256GB</td>
                            </tr>
                            <tr>
                                <th>Battery</th>
                                <td>4000mAh – 6000mAh</td>
                            </tr>
                            <tr>
                                <th>Connectivity</th>
                                <td>4G / 5G / Wi-Fi / Bluetooth</td>
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
    