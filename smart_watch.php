<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Smart Watches</title>

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
            <li class="breadcrumb-item active text-light" aria-current="page">Smart Watches</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/smart_watch.jpeg" class="img-fluid rounded" alt="Smart Watches">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">Advanced Smart Watches</h2>

                    <p class="text-muted">
                        Our Smart Watches combine style and technology, offering fitness tracking, notifications, 
                        heart rate monitoring, and long battery life. Perfect for health-conscious and tech-savvy users.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Heart rate and activity tracking</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Sleep monitoring & health insights</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Call, message & app notifications</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Water-resistant and durable design</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Long battery life with fast charging</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Display</th>
                                <td>1.2" – 1.5" AMOLED / LCD</td>
                            </tr>
                            <tr>
                                <th>Battery Life</th>
                                <td>5 – 14 days</td>
                            </tr>
                            <tr>
                                <th>Connectivity</th>
                                <td>Bluetooth 5.0 / Wi-Fi</td>
                            </tr>
                            <tr>
                                <th>Sensors</th>
                                <td>Heart Rate, SpO2, Accelerometer, GPS</td>
                            </tr>
                            <tr>
                                <th>Compatibility</th>
                                <td>iOS & Android</td>
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

    