<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Tube Lights</title>

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
            <li class="breadcrumb-item active text-light" aria-current="page">Tube Lights</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/Tube_Lights.jpg" class="img-fluid rounded" alt="Tube Lights">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">Energy-Efficient LED Tube Lights</h2>

                    <p class="text-muted">
                        Our LED Tube Lights deliver bright illumination with low power consumption, 
                        long life, and excellent durability. Ideal for homes, offices, industries, 
                        showrooms, and commercial spaces requiring consistent lighting performance.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> High brightness & low energy consumption</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Long-lasting LED technology (50,000+ hrs)</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Instant start with no flickering</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Eco-friendly & mercury-free</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Available in multiple wattages & sizes</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Wattage</th>
                                <td>10W / 18W / 22W</td>
                            </tr>
                            <tr>
                                <th>Length</th>
                                <td>2 ft / 4 ft / 8 ft</td>
                            </tr>
                            <tr>
                                <th>Color Temperature</th>
                                <td>3000K / 4000K / 6500K</td>
                            </tr>
                            <tr>
                                <th>Lumens</th>
                                <td>1000 – 2200 lm</td>
                            </tr>
                            <tr>
                                <th>Material</th>
                                <td>Polycarbonate + Aluminum</td>
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
