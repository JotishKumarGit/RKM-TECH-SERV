<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Switches & Sockets</title>

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
            <li class="breadcrumb-item active text-light" aria-current="page">Switches & Sockets</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/Switches_Sockets.jpg" class="img-fluid rounded" alt="Switches & Sockets">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">Premium Switches & Sockets</h2>

                    <p class="text-muted">
                        Our Switches & Sockets are designed for safety, durability, and aesthetic appeal. 
                        Suitable for homes, offices, and commercial spaces, offering reliable electrical connections 
                        with modern designs.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> High-quality materials for long life</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Sleek, modern, and elegant designs</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Safe & fire-resistant construction</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Easy installation & maintenance</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Variety of types: Modular, USB, Data, & Power</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Material</th>
                                <td>ABS Plastic + Flame Retardant</td>
                            </tr>
                            <tr>
                                <th>Voltage Rating</th>
                                <td>250V AC</td>
                            </tr>
                            <tr>
                                <th>Current Rating</th>
                                <td>6A / 10A / 16A</td>
                            </tr>
                            <tr>
                                <th>Finish</th>
                                <td>Glossy / Matte / Metallic</td>
                            </tr>
                            <tr>
                                <th>Types</th>
                                <td>Switches, Sockets, USB, Modular, Data Ports</td>
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
