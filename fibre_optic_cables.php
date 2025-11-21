<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Fibre Optic Cables</title>

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
            <li class="breadcrumb-item active text-light" aria-current="page">Fibre Optic Cables</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/Fibre_Optic_Cables.jpg" class="img-fluid rounded" alt="Fibre Optic Cables">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">High-Performance Fibre Optic Cables</h2>

                    <p class="text-muted">
                        Our Fibre Optic Cables ensure fast, reliable, and high-bandwidth data transmission. 
                        Suitable for telecommunications, networking, data centers, and industrial applications, 
                        these cables are designed for durability and minimal signal loss.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> High-speed data transmission</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Low attenuation and signal loss</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Flexible and durable design</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Suitable for indoor and outdoor installations</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Available in single-mode and multi-mode options</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Core Type</th>
                                <td>Single-mode / Multi-mode</td>
                            </tr>
                            <tr>
                                <th>Connector Type</th>
                                <td>SC, LC, ST, FC (as per requirement)</td>
                            </tr>
                            <tr>
                                <th>Cable Length</th>
                                <td>1m – 10km (custom lengths available)</td>
                            </tr>
                            <tr>
                                <th>Operating Temperature</th>
                                <td>-20°C to 70°C</td>
                            </tr>
                            <tr>
                                <th>Applications</th>
                                <td>Telecom, Networking, Data Centers, Industrial</td>
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
