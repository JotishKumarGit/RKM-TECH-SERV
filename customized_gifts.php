<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Customized Gifts</title>

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
            <li class="breadcrumb-item active text-light" aria-current="page">Customized Gifts</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Product Image -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="assets/images/Customized_Gifts.jpg" class="img-fluid rounded" alt="Customized Gifts">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-md-6" data-aos="fade-left">

                    <h2 class="mb-3">Personalized & Customized Gifts</h2>

                    <p class="text-muted">
                        Our Customized Gifts allow you to create unique, memorable presents for loved ones, clients, or employees. 
                        Choose from a variety of products and personalization options for truly one-of-a-kind gifts.
                    </p>

                    <h5 class="fw-bold mt-4">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Wide range of customizable gift options</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> High-quality materials and finishing</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Personalization with names, logos, or messages</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Perfect for corporate gifting or special occasions</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Available in bulk orders</li>
                    </ul>

                    <h4 class="text-primary mt-4">Specifications:</h4>
                    <table class="table table-bordered w-75">
                        <tbody>
                            <tr>
                                <th>Material</th>
                                <td>Wood, Metal, Glass, Acrylic, Fabric (varies by product)</td>
                            </tr>
                            <tr>
                                <th>Customization</th>
                                <td>Engraving, Printing, Embossing, Embroidery</td>
                            </tr>
                            <tr>
                                <th>Packaging</th>
                                <td>Gift Box / Wrapping / Custom Packaging</td>
                            </tr>
                            <tr>
                                <th>Applications</th>
                                <td>Corporate Gifts, Personal Gifts, Special Occasions</td>
                            </tr>
                            <tr>
                                <th>Order Quantity</th>
                                <td>Single Piece / Bulk Orders Available</td>
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

