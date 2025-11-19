<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="enquiryForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject*</label>
                        <input type="text" class="form-control" id="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message*</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit via WhatsApp</button>
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

    // WhatsApp Number (NO spaces)
    const phoneNumber = "916206767417";

    // WhatsApp formatted message
    const whatsappMessage =
        `Name: ${name}%0A` +
        `Email: ${email}%0A` +
        `Phone: ${phone}%0A` +
        `Subject: ${subject}%0A` +
        `Message: ${message}`;

    const whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;

    // Open WhatsApp
    window.open(whatsappURL, "_blank");
});
</script>
