<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Vision Vacation</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="./assets/img/logos/favicon.png" rel="shortcut icon" type="image/png">
    <link href="assets/css/main2.css" rel="stylesheet">
    <link href="assets/css/main1.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body>
    <!-- Header -->
    <?php include 'include/header.php'; ?>
    <!-- /Header -->

    <!-- Main -->
    <main>
        <!-- Title -->
        <section class="hero aos-init aos-animate" data-aos="fade">
            <div class="hero-bg">
                <img src="./assets/img/about/contact-us.webp" srcset="./assets/img/about/contact-us.webp 2x" alt="">
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <span class="hero-sub-title">Connect with us</span>
                    <h1 class="display-4 hero-title">
                        Contact Us
                    </h1>
                </div>

            </div>
        </section>
        <!-- /Title -->

        <!-- About -->
        <section class="bg-gray-gradient p-bottom-90 aos-init aos-animate" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <!-- Contac Information -->
                        <div class="p-top-90 mb-4">
                            <div class="border-bottom pb-4 mb-4">
                                <h2 class="me-auto mb-0">Ready to help you!</h2>
                            </div>
                            <p class="mb-4">We're here to help and answer any question you might have.</p>
                            <div class="row">
                                <div class="col-12">
                                    <div class="fw-medium mb-3">
                                        <i class="bi bi-telephone"></i>
                                        <span> +91 8739056222</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="fw-medium mb-3">
                                        <i class="bi bi-envelope"></i>
                                        <span> booking@visionvacation.com</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="fw-medium mb-3">
                                        <i class="bi bi-geo-alt"></i>
                                        <span> Plot No-60, Street Number 12, Jogabai Extension, Zakir Nagar, Okhla, New
                                            Delhi-110025</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Contac Information -->
                    </div>
                    <div class="col-12 col-xl-6">
                        <!-- Contact Form -->
                        <div class="form-contact rounded shadow-sm">
                            <form id="contactForm" class="needs-validation" novalidate>

                                <div class="border-bottom pb-4 mb-4">
                                    <h2 class="text-white mb-0">Looking for any help?</h2>
                                </div>

                                <div class="alert d-none" role="alert" id="msg_alert"></div>

                                <!-- Name -->
                                <div class="form-floating mb-4">
                                    <input id="txtYourName" type="text" name="yourname" class="form-control shadow-sm"
                                        placeholder="Your Name" required>
                                    <label for="txtYourName">Your Name *</label>
                                </div>

                                <!-- Email -->
                                <div class="form-floating mb-4">
                                    <input id="txtEmail" type="email" name="email" class="form-control shadow-sm"
                                        placeholder="Email" required>
                                    <label for="txtEmail">Your Email *</label>
                                </div>

                                <!-- Subject -->
                                <div class="form-floating mb-4">
                                    <input id="txtSubject" type="text" name="subject" class="form-control shadow-sm"
                                        placeholder="Subject" required>
                                    <label for="txtSubject">Subject *</label>
                                </div>

                                <!-- Message -->
                                <div class="form-floating mb-4">
                                    <textarea id="txtMessage" name="message" class="form-control shadow-sm"
                                        placeholder="Message" style="height:150px" required></textarea>
                                    <label for="txtMessage">Message *</label>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-light mnw-180">
                                    <i class="bi bi-envelope"></i>
                                    <span>Send Message</span>
                                </button>

                            </form>


                            <script>

                                document.getElementById("contactForm").addEventListener("submit", function (e) {

                                    e.preventDefault();

                                    var name = document.getElementById("txtYourName").value;
                                    var email = document.getElementById("txtEmail").value;
                                    var subject = document.getElementById("txtSubject").value;
                                    var message = document.getElementById("txtMessage").value;

                                    var whatsappMessage =
                                        "*New Contact Inquiry*%0A%0A" +
                                        "*Name:* " + name + "%0A" +
                                        "*Email:* " + email + "%0A" +
                                        "*Subject:* " + subject + "%0A" +
                                        "*Message:* " + message;

                                    var whatsappNumber = "918739056222";

                                    var url = "https://wa.me/" + whatsappNumber + "?text=" + whatsappMessage;

                                    window.open(url, "_blank");

                                });

                            </script>
                        </div>
                        <!-- /Contact Form -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /About -->
    </main>
    <!-- /Main -->

    <!-- Footer -->
    <?php include 'include/footer.php'; ?>
    <!-- /Footer -->

    <script defer="" src="./assets/js/theme-1.min.js"></script>
    <script defer="" src="./assets/js/theme-2.min.js"></script>
    <script defer="" src="./assets/js/theme-3.min.js"></script>

</body>

</html>