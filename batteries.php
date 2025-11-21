<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Battery Details</title>

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
            <li class="breadcrumb-item active" style="color: #fff;" aria-current="page">Battery Details</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/Batteries.jpg" class="img-fluid rounded" alt="Battery">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">
                    <h2 class="mb-3">High-Performance Industrial Battery</h2>

                    <p class="text-muted">
                        Our industrial-grade batteries are designed for durability, long life, and superior power output.
                        Perfect for UPS systems, solar applications, telecom, and heavy-duty machinery.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Long backup & high efficiency</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Maintenance-free design</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Fast charging capability</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Highly durable outer casing</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Suitable for UPS, Solar & Industrial use</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Capacity</th>
                                <td>75 Ah</td>
                            </tr>
                            <tr>
                                <th>Voltage</th>
                                <td>12V</td>
                            </tr>
                            <tr>
                                <th>Technology</th>
                                <td>VRLA / Tubular</td>
                            </tr>
                          
                        </tbody>
                    </table>

                    <button class="btn btn-primary btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal" >
                     Enquiry Now
                    </button>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php') ?>
