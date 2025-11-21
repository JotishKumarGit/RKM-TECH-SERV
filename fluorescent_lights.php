<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Fluorescent Lights</title>

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
            <li class="breadcrumb-item active text-light" aria-current="page">Fluorescent Lights</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/Fluorescent_Lights.webp" class="img-fluid rounded" alt="Fluorescent Lights">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">High-Efficiency Fluorescent Lights</h2>

                    <p class="text-muted">
                        Our Fluorescent Lights provide bright, uniform, and energy-efficient illumination for homes, offices, 
                        and industrial spaces. They are long-lasting, environmentally friendly, and available in various sizes 
                        and wattages.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Energy-efficient and cost-effective lighting</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Long lifespan with low maintenance</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Uniform illumination without flickering</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Available in multiple sizes and wattages</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Eco-friendly and mercury-compliant</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Wattage</th>
                                <td>18W / 24W / 36W / 40W / 60W</td>
                            </tr>
                            <tr>
                                <th>Color Temperature</th>
                                <td>Cool White / Warm White / Daylight</td>
                            </tr>
                            <tr>
                                <th>Tube Type</th>
                                <td>T5 / T8 / T12</td>
                            </tr>
                            <tr>
                                <th>Lifespan</th>
                                <td>8,000 – 15,000 hours</td>
                            </tr>
                            <tr>
                                <th>Voltage</th>
                                <td>AC 85V-265V</td>
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
