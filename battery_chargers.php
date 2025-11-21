<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Battery Chargers</title>

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
            <li class="breadcrumb-item active text-light" aria-current="page">Battery Chargers</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/Battery_Chargers.webp" class="img-fluid rounded" alt="Battery Chargers">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">Reliable Battery Chargers</h2>

                    <p class="text-muted">
                        Our Battery Chargers are designed for efficient, safe, and reliable charging of various battery types. 
                        Ideal for home, office, and industrial applications, ensuring long battery life and consistent performance.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Fast and efficient charging</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Overcharge, short-circuit, and temperature protection</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Compatible with multiple battery types (Li-ion, NiMH, Lead Acid)</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Compact, lightweight, and portable design</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> LED indicators for charging status</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Input Voltage</th>
                                <td>AC 100-240V, 50/60Hz</td>
                            </tr>
                            <tr>
                                <th>Output Voltage</th>
                                <td>12V / 24V / Custom Options</td>
                            </tr>
                            <tr>
                                <th>Charging Current</th>
                                <td>0.5A – 5A</td>
                            </tr>
                            <tr>
                                <th>Battery Types</th>
                                <td>Li-ion, NiMH, Lead Acid, Gel</td>
                            </tr>
                            <tr>
                                <th>Protection Features</th>
                                <td>Overcharge, Short Circuit, Overheat</td>
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
