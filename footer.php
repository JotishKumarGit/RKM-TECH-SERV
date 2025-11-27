<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;"> <!-- Narrow width -->
        <div class="modal-content">
            <form id="enquiryForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3"> <!-- Use Bootstrap row for 2-column layout -->
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name*</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="col-md-6">
                            <label for="subject" class="form-label">Subject*</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Message*</label>
                            <textarea class="form-control" id="message" rows="3" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success w-100">Submit via WhatsApp</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript to Handle enquiryForm WhatsApp Redirect -->
<script>
document.getElementById("enquiryForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const subject = document.getElementById("subject").value.trim();
    const message = document.getElementById("message").value.trim();

    // WhatsApp Number (without any spaces)
    const phoneNumber = "919643612318";

    // WhatsApp formatted message
    const whatsappMessage =
        `Name: ${name}\n` +
        `Email: ${email}\n` +
        `Phone: ${phone}\n` +
        `Subject: ${subject}\n` +
        `Message: ${message}`;

    const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(whatsappMessage)}`;

    // Open WhatsApp in a new tab
    window.open(whatsappURL, "_blank");

    // Optional: Close the modal after submission
    const enquiryModal = bootstrap.Modal.getInstance(document.getElementById('enquiryModal'));
    if (enquiryModal) enquiryModal.hide();
});
</script>





    <!-- Footer Section -->
    <footer class="text-white" style="background-color: #0d6efd; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-4 mb-4">
                    <h5 style="font-weight: bold;">RKM TECH SERV</h5>
                    <p>Providing top-notch services and products including tablets, smart watches, batteries, cables,
                        and Makhana electronics to keep you connected and powered.</p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4 mb-4">
                    <h5 style="font-weight: bold;">Quick Links</h5>
                    <p><a href="index.php" class="text-white text-decoration-none">Home</a></p>
                    <p><a href="about.php" class="text-white text-decoration-none">About</a></p>
                    <p><a href="services.php" class="text-white text-decoration-none">Services</a></p>
                    <p><a href="https://rkmtechserv.blogspot.com/" class="text-white text-decoration-none">Blog</a></p>
                    <p><a href="contact.php" class="text-white text-decoration-none">Contact</a></p>
                </div>

                <!-- Contact Info & Social -->
                <div class="col-md-4 mb-4">
                    <h5 style="font-weight: bold;">Contact Us</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i>Ground Floor, Majhaura, Ward no-15, Benipur, Po-Bahera,
                        Darbhanga, Bihar – 847201</p>
                    <p><i class="fas fa-envelope me-2"></i>rkmtechserv@gmail.com</p>
                    <p><i class="fas fa-phone-alt me-2"></i>6206767417 | 9643612318 | 8409812065 </p>

                    <h5 style="font-weight: bold;" class="mt-3">Follow Us</h5>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://www.instagram.com/rkmtechserv/?igsh=ZnN2bm4zZ2p4ZzQz#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="" class="text-white me-3"><i class="fab fa-linkedin fa-2x"></i></a>
                    <a href="https://www.youtube.com/@rkmtechserv" class="text-white me-3"><i class="fab fa-youtube fa-2x"></i></a>
                </div>
            </div>

            <hr style="border-color: rgba(255,255,255,0.3);">

            <!-- Newsletter Subscription -->
            <div class="row mb-4">
                <div class="col-md-6 mx-auto text-center">
                    <h5 style="font-weight: bold;">Subscribe to our Newsletter</h5>
                    <p>Get the latest updates, offers, and news about our products and services.</p>
                    <form class="d-flex justify-content-center" action="#" method="POST">
                        <input type="email" class="form-control me-2" placeholder="Enter your email"
                            style="max-width: 300px;" required>
                        <button type="submit" class="btn btn-light text-primary">Subscribe</button>
                    </form>
                </div>
            </div>

            <div class="container text-center py-3">
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-2">
                    <span>&copy; 2025 RKM TECH SERV. All Rights Reserved.</span>
                    <span> | Designed By <a href="https://trade4export.com/"
                            class="text-white text-decoration-underline" target="_blank">Trade4Export</a></span>
                </div>
            </div>

        </div>
    </footer>

    <!-- WhatsApp Form Script -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var number = document.getElementById('number').value;
            var message = document.getElementById('message').value;

            var whatsappMessage = `Hello, my name is ${name}.%0AEmail: ${email}%0APhone: ${number}%0AMessage: ${message}`;
            var whatsappURL = `https://wa.me/919643612318?text=${whatsappMessage}`; // Replace with your WhatsApp number
            window.open(whatsappURL, '_blank');
        });
    </script>

    <!-- bootstrap js link -->
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            easing: 'ease-out-cubic'
        });
    </script>

</body>

</html>