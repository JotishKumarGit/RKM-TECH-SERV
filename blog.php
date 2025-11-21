<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Blog</title>
    <link rel="stylesheet" href="assets/style.css">
    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!-- bootsrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <style>
        /* Mega Menu Centered */
        .dropdown-menu.mega-menu {
            width: 90vw;
            max-width: 1200px;
            left: 100% !important;
            /* Center horizontally */
            transform: translateX(-50%) !important;
            top: 100%;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 6px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .mega-column {
            flex: 1 1 200px;
            margin: 10px;
        }

        .mega-column h3 {
            margin-top: 0;
            font-size: 16px;
            color: #333;
        }

        .mega-column a {
            color: #333;
            display: block;
            padding: 4px 0;
            text-decoration: none;
        }

        .mega-column a:hover {
            text-decoration: underline;
        }

        /* Flex layout for desktop */
        .mega-menu .d-flex {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .dropdown-menu.mega-menu {
                position: static !important;
                transform: none !important;
                width: 100%;
                padding: 15px;
            }

            .mega-column {
                margin: 10px 0;
            }
        }
    </style>

</head>

<body>

<!-- header -->
<?php include('header.php') ?>

<!-- bread crums -->
<nav class="breadcrumb-hero" aria-label="breadcrumb">
  <div class="overlay"></div>
  <ol class="breadcrumb centered-text">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Pages</a></li>
    <li class="breadcrumb-item active" style="color: #f9f9f9;" aria-current="page">Blog</li>
  </ol>
</nav>

   <!-- Blog Section -->
    <section style="padding: 60px 0; background-color: #e3f2fd;">
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mb-5">
                <h2 style="color: #0d6efd; font-weight: bold;">Our Blog</h2>
                <p style="color: #6c757d; font-size: 18px;">
                    Explore the latest updates, tips, and insights on electronics, gadgets, and accessories from RKM
                    TECH SERV.
                </p>
            </div>

            <div class="row g-4">
                <!-- Blog Post 1 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="assets/img/Batteries.jpg" class="card-img-top" alt="Blog Post 1">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #0d6efd;">Top 5 Tips to Extend Battery Life</h5>
                            <p class="card-text" style="color: #0d47a1;">Learn how to maximize the performance and
                                lifespan of your device batteries with simple daily habits.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="assets/img/Watches.jpg" class="card-img-top" alt="Blog Post 2">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #0d6efd;">Smart Watch Setup Guide</h5>
                            <p class="card-text" style="color: #0d47a1;">Step-by-step instructions to set up your smart
                                watch for maximum efficiency and connectivity.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="assets/img/Cables.jpg" class="card-img-top" alt="Blog Post 3">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #0d6efd;">Choosing the Right Cables for Your Devices
                            </h5>
                            <p class="card-text" style="color: #0d47a1;">Discover the best cables and connectivity
                                options to ensure smooth operation of all your gadgets.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 4 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="assets/img/Tablets.jpg" class="card-img-top" alt="Blog Post 4">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #0d6efd;">Tablet Maintenance Tips</h5>
                            <p class="card-text" style="color: #0d47a1;">Keep your tablets running smoothly with our
                                expert maintenance and care tips.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 5 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="assets/img/Mobile_Phones.jpg" class="card-img-top" alt="Blog Post 5">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #0d6efd;">Top Gadgets of 2025</h5>
                            <p class="card-text" style="color: #0d47a1;">Explore the most innovative electronics and
                                smart gadgets available this year.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 6 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="assets/img/electronic.png" class="card-img-top" alt="Blog Post 6">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #0d6efd;">Troubleshooting Common Device Issues</h5>
                            <p class="card-text" style="color: #0d47a1;">Simple solutions to common problems with
                                tablets, smart watches, and electronic accessories.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


<!-- footer -->
<?php include('footer.php') ?> 