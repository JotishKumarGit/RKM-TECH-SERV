<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Electric Cables</title>

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
            <li class="breadcrumb-item active text-light" aria-current="page">Electric Cables</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/Electric_Cables.jpg" class="img-fluid rounded" alt="Electric Cables">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">Durable Electric Cables</h2>

                    <p class="text-muted">
                        Our Electric Cables offer reliable conductivity, safety, and long-term durability for residential, 
                        commercial, and industrial applications. Designed to meet international standards for performance 
                        and safety.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> High-quality copper or aluminum conductors</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Durable insulation for safety and longevity</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Flexible design for easy installation</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Compliant with international safety standards</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Suitable for indoor and outdoor use</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Conductor Material</th>
                                <td>Copper / Aluminum</td>
                            </tr>
                            <tr>
                                <th>Insulation</th>
                                <td>PVC / XLPE / Rubber</td>
                            </tr>
                            <tr>
                                <th>Voltage Rating</th>
                                <td>110V – 1100V (as per model)</td>
                            </tr>
                            <tr>
                                <th>Cable Type</th>
                                <td>Single Core / Multi Core</td>
                            </tr>
                            <tr>
                                <th>Applications</th>
                                <td>Residential, Commercial, Industrial</td>
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
