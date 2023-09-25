<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('page-title'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo e(asset('public/img/westminster/logo.jpg')); ?>" class="rounded-circle" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('public/lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('public/css/style.css')); ?>" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="<?php echo e(url('/')); ?>" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <img src="<?php echo e(asset('public/img/westminster/logo.jpg')); ?>" alt="WestminsterPh Logo" class="logo-img rounded-circle" style="width: 40px;">
                <h1 class="brand-name ml-2 text-primary p-0 m-0">Westminster</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="<?php echo e(url('about')); ?>" class="nav-item nav-link">About</a>
                    <a href="<?php echo e(url('news')); ?>" class="nav-item nav-link">News</a>
                    <a href="<?php echo e(url('job-list')); ?>" class="nav-item nav-link">Job List</a>
                    <a href="<?php echo e(url('#')); ?>" class="nav-item nav-link">Team</a>
                    <a href="<?php echo e(url('contact')); ?>" class="nav-item nav-link">Contact</a>
                </div>
                <a href="<?php echo e(url('#')); ?>" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"><i class="fa fa-phone-alt me-3"></i> +632 8689 6796</a>
            </div>
        </nav>
        <!-- Navbar End -->

        <?php echo $__env->yieldContent('content'); ?>        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">                    
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">News</a>
                        <a class="btn btn-link text-white-50" href="">Job List</a>
                        <a class="btn btn-link text-white-50" href="">Team</a>
                        <a class="btn btn-link text-white-50" href="">Contact</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Legal</h5>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>34F World Trade Exchange Bldg., 215 Juan Luna St., Manila, Philippines</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+632 8689 6796</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>wm_applicant@wsm.ph</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Subscribe Now</h5>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Westminster</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="<?php echo e(asset('public/lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('public/js/main.js')); ?>"></script>
</body>

</html><?php /**PATH D:\Programs\XAMPP\htdocs\westminsterph\resources\views/layout/layout.blade.php ENDPATH**/ ?>