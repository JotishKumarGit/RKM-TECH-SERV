<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Home Page</title>
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

    <nav class="breadcrumb-hero" aria-label="breadcrumb">
        <div class="overlay"></div>

        <ol class="breadcrumb centered-text">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" style="color: #f9f9f9;" aria-current="page">About Us</li>
        </ol>
    </nav>

    <!-- About Us Section -->
    <section style="padding: 60px 0; background-color: #edf0f3;">
        <div class="container">
            <!-- About Us Heading -->
            <div class="text-center mb-5">
                <h2 style="color: #0B5ED7; font-weight: bold;">About Us</h2>
                <p style="color: #6c757d; font-size: 18px;">We provide innovative solutions for all your technology and
                    electronic needs.</p>
            </div>

            <!-- Main Content Row -->
            <div class="row align-items-center">
                <!-- Image Content -->
                <div class="col-md-6 text-center">
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <img src="assets/img/Corporate_Gifts.webp" alt="Electronics and Watches"
                            style="max-width: 100%; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                    </div>
                </div>
                <!-- Text Content -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h3 style="color: #0B5ED7; font-weight: bold;">Welcome To RKM TECH SERV</h3>
                    <p style="color: #495057; font-size: 16px; line-height: 1.6;">
                        At <strong>RKM TECH SERV</strong>, is a partnership firm
                        in Cable, Bulb, Fan, Display, CCTV, Mobile Phones, Smart Watches, Makhana, Batteries &
                        Accessorises, Gifting items, Accounting software and Contract Work business formed in 2024. We
                        are proud to provide a good service of electric iteams and contract work which is capable of
                        raising its goodwill. we solve your problems and your business needs. We want to make your
                        expectations, more mutually beneficial so that you can stay here for a long time and grow and do
                        business with us.
                    </p>
                    <ul style="color: #495057; font-size: 16px; line-height: 1.8;">
                        <li>High-quality mobile phones and tablets with latest features.</li>
                        <li>Durable electronic accessories including cables and batteries.</li>
                        <li>Premium watches that combine style and technology.</li>
                        <li>Innovative solutions tailored for modern technology needs.</li>
                        <li>Customer-centric approach ensuring satisfaction and support.</li>
                    </ul>
                    <p style="color: #495057; font-size: 16px; line-height: 1.6;">
                        Our mission is to empower individuals and businesses with reliable technology solutions that
                        make life easier and more connected. With a commitment to excellence, we continuously strive to
                        deliver products that meet the highest standards of quality and innovation.
                    </p>
                    <button class="btn"
                        style="background-color: #0B5ED7; color: #fff; padding: 10px 25px; border-radius: 5px; font-weight: 500; transition: 0.3s;">
                        Read More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>