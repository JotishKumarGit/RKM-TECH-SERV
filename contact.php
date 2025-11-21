<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKM TECH SERV - Contact</title>
    <link rel="stylesheet" href="assets/style.css">
    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!-- bootsrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />


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
            <li class="breadcrumb-item active" style="color: #f9f9f9;" aria-current="page">Contact Us</li>
        </ol>
    </nav>

    <!-- Contact Us Section -->
    <div class="container-fluid py-5" style="background-color: #e3f2fd;">
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mb-5">
                <h2 class="animate__animated animate__fadeInDown" style="color: #0d6efd; font-weight: bold;">Contact Us
                </h2>
                <p class="animate__animated animate__fadeIn" style="color: #0d47a1; font-size: 18px;">
                    Get in touch with RKM TECH SERV for inquiries, support, or feedback regarding our products and
                    services.
                    Fill the form below and reach out to us directly on WhatsApp for quick assistance!
                </p>
            </div>

            <div class="row g-4">
                <!-- Map -->
                <div class="col-md-6 animate__animated animate__fadeInLeft">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d458487.22694729315!2d85.76611687281226!3d26.13377765239997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sGround%20Floor%2C%20Majhaura%2C%20Ward%20no-15%2C%20Benipur%20%2CPo-Bahera%2C%20Darbhanga%2C%20Bihar%20%E2%80%93%20847201%2C%20Nearby%20Indian%20Oil%20Petrol%20Pump!5e0!3m2!1sen!2sin!4v1763539375554!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0; border-radius:10px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Contact Form -->
                <div class="col-md-6 animate__animated animate__fadeInRight">
                    <div class="card shadow-sm p-4 border-0" style="border-radius: 15px; background-color: #ffffff;">
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="name" class="form-label" style="color: #0d6efd;">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label" style="color: #0d6efd;">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="number" class="form-label" style="color: #0d6efd;">Phone Number</label>
                                <input type="tel" class="form-control" id="number" placeholder="Your Phone Number"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label" style="color: #0d6efd;">Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Your Message"
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100"
                                style="background-color: #0d6efd; border:none;">Send via WhatsApp</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>