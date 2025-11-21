<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Data Cables</title>

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
            <li class="breadcrumb-item active text-light" aria-current="page">Data Cables</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/Data_Cables.jpg" class="img-fluid rounded" alt="Data Cables">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">Reliable Data Cables</h2>

                    <p class="text-muted">
                        Our Data Cables provide fast, secure, and reliable connectivity for computers, networking, 
                        and electronic devices. Designed for high-speed data transfer with minimal interference.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> High-speed data transmission</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Durable insulation for long-lasting use</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Compatible with multiple devices and standards</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Flexible and easy to install</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Suitable for home, office, and industrial use</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Type</th>
                                <td>USB, HDMI, Ethernet, Fiber, Serial (various options)</td>
                            </tr>
                            <tr>
                                <th>Length</th>
                                <td>0.5m – 10m (custom lengths available)</td>
                            </tr>
                            <tr>
                                <th>Conductor</th>
                                <td>Copper / Shielded Twisted Pair</td>
                            </tr>
                            <tr>
                                <th>Usage</th>
                                <td>Networking, Data Transfer, Device Connectivity</td>
                            </tr>
                            <tr>
                                <th>Standards</th>
                                <td>USB 2.0/3.0, HDMI 2.0, CAT5e/CAT6/CAT7, Others</td>
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
    