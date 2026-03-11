<?php
 include('config.php');
?>
<!-- Header -->
<link href="<?= $base_url ?>assets/img/logos/favicon.png" rel="shortcut icon" type="image/png">
<link href="<?= $base_url ?>assets/css/main2.css" rel="stylesheet">
<link href="<?= $base_url ?>assets/css/main1.css" rel="stylesheet">
<link href="<?= $base_url ?>assets/css/main.css" rel="stylesheet">
<!-- bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<!-- Header -->
<div class="header-navbar">
    <div class="header-topbar">
        <div class="container">
            <div class="row g-0">
                <div class="col-6 col-xl-7 col-md-8">
                    <div class="d-flex align-items-center">
                        <a href="tel:+91 8739056222">
                            <i class="bi bi-telephone"></i>
                            <span>+91 8739056222</span>
                        </a>
                        <span class="vr bg-white d-none d-md-inline ms-3 me-3"></span>
                        <a href="mailto:booking@visionvacation.com" class="d-none d-md-inline">
                            <i class="bi bi-envelope"></i>
                            <span>booking@visionvacation.com</span>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-xl-5 col-md-4">
                    <div class="text-end">
                        <ul class="social-list m-0">
                            <li class="social-item">
                                <a href="https://www.instagram.com/visionvacation_vv?igsh=eDg3bDFxZnV0bm9q">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a href="https://www.facebook.com/share/1B8FJxLLEi/">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a href="tel:+91 8739056222">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <i class="bi bi-list"></i>
            </button>
            <a class="logo-for" href="#">
                <img src="<?= $base_url ?>assets/img/logos/logo.png" width="120px">
            </a>
            <div class="offcanvas offcanvas-navbar offcanvas-start border-end-0" tabindex="-1" id="offcanvasNavbar">
                <div class="offcanvas-header border-bottom p-xl-0">
                    <a href="#" class="d-inline-block">
                        <img src="assets/img/logos/logo.png" alt="logo">
                    </a>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-4 p-xl-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= $base_url ?>"
                                data-bs-display="static"><span>Home</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-hover" href="<?= $base_url ?>domestic-holidays.php"
                                data-bs-display="static">
                                <span>India Tour</span>
                                <i class="bi bi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu slideIn" data-bs-popper="static">
                                <div class="mega-menu">
                                    <!-- Domestic Plan -->
                                    <div class="mega-menu-item">
                                        <ul class="nav flex-column ms-6 ms-xl-0">
                                            <li><a class="dropdown-item"
                                                    href="<?= $base_url ?>domestic-holidays/goa-tour-packages">Goa
                                                    Tour </a></li>
                                            <li><a class="dropdown-item"
                                                    href="<?= $base_url ?>domestic-holidays/himachal-tour-packages">Himachal
                                                    Tour
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="<?= $base_url ?>domestic-holidays/kerala-tour-packages">Kerala
                                                    Tour </a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="<?= $base_url ?>domestic-holidays/kashmir-tour-packages">Kashmir
                                                    Tour
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="<?= $base_url ?>domestic-holidays/andaman-tour-packages">Andaman
                                                    Tour
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-display="static"><span>Hot Deals</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php" data-bs-display="static"><span>About Us</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php" data-bs-display="static"><span>Contact Us</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown user-menu ms-xl-auto">
                <div class="only-desktop">
                    <a href="https://wa.me/+918739056222" class="btn btn-primary mnw-180">
                        <span>Talk to an Expert</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- /Header --> <!-- /Header -->