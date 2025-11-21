<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - CCTV Cameras</title>

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
            <li class="breadcrumb-item active text-light" aria-current="page">CCTV Cameras</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/CCTV_Cameras.webp" class="img-fluid rounded" alt="CCTV Cameras">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">Advanced CCTV Cameras</h2>

                    <p class="text-muted">
                        Our CCTV Cameras provide high-quality video surveillance for residential, commercial, and industrial use. 
                        Designed for security, durability, and clarity, they ensure reliable monitoring 24/7.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> High-resolution video capture (HD / Full HD / 4K)</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Night vision and low-light performance</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Weatherproof and durable housing</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Wired and wireless connectivity options</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Motion detection and remote monitoring support</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Camera Type</th>
                                <td>Dome / Bullet / PTZ / IP Cameras</td>
                            </tr>
                            <tr>
                                <th>Resolution</th>
                                <td>720p / 1080p / 4K</td>
                            </tr>
                            <tr>
                                <th>Connectivity</th>
                                <td>Wired, Wireless, PoE</td>
                            </tr>
                            <tr>
                                <th>Features</th>
                                <td>Night Vision, Motion Detection, Remote Access</td>
                            </tr>
                            <tr>
                                <th>Applications</th>
                                <td>Home, Office, Retail, Industrial Security</td>
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
