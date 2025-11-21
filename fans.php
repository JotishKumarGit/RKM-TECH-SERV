<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Fans</title>

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
            <li class="breadcrumb-item active text-light" aria-current="page">Fans</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/Fans.jpg" class="img-fluid rounded" alt="Fans">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">High-Performance Fans</h2>

                    <p class="text-muted">
                        Our range of Fans provides optimal airflow, energy efficiency, and quiet operation. 
                        Ideal for homes, offices, and industrial spaces, offering superior cooling and long-lasting performance.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Efficient airflow for comfortable cooling</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Energy-saving and low power consumption</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Quiet operation for indoor and office use</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Available in ceiling, table, pedestal, and wall types</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Durable and reliable motor design</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Types</th>
                                <td>Ceiling, Pedestal, Table, Wall</td>
                            </tr>
                            <tr>
                                <th>Power</th>
                                <td>40W – 75W (varies by model)</td>
                            </tr>
                            <tr>
                                <th>Voltage</th>
                                <td>AC 220V-240V</td>
                            </tr>
                            <tr>
                                <th>Speed</th>
                                <td>3 – 5 Adjustable Speeds</td>
                            </tr>
                            <tr>
                                <th>Blade Material</th>
                                <td>ABS / Metal (depending on model)</td>
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
