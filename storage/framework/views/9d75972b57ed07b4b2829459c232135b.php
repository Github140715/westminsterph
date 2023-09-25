
<?php $__env->startSection('page-title'); ?>Home <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="<?php echo e(asset('public/img/westminster/carousel-1.jpeg')); ?>" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4">We recruit exclusively for Wallem Ship Management</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Westminster exclusively for Wallem Group in the Philippines</p>
                            <a href="<?php echo e(url('job-list')); ?>" class="btn btn-secondary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Job</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="<?php echo e(asset('public/img/westminster/carousel-2.jpeg')); ?>" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4">We recruit exclusively for Wallem Ship Management</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Westminster exclusively for Wallem Group in the Philippines</p>
                            <a href="<?php echo e(url('job-list')); ?>" class="btn btn-secondary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Job</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <div class="row g-2">
            <div class="col-md-10">
                <div class="row g-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control form-select-lg border-0" placeholder="Keyword" />
                    </div>
                    <div class="col-md-4">
                        <select class="form-select form-select-lg border-0">
                            <option selected>Select Rank</option>
                            <option value="1">Master</option>
                            <option value="2">Chief Officer</option>
                            <option value="3">Safety Officer</option>
                            <option value="4">Second Officer</option>
                            <option value="5">Third Officer</option>
                            <option value="6">Fourth Officer</option>
                            <option value="7">Junior Officer</option>
                            <option value="8">Chief Engineer</option>
                            <option value="9">Second Engineer</option>
                            <option value="10">Pumpman</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select form-select-lg border-0">
                            <option selected>Select Vessel</option>
                            <option value="1">Bulk Carrier</option>
                            <option value="2">Bulk/Oil Carrier (OBO)</option>
                            <option value="3">Car Carrier</option>
                            <option value="4">Chemical Tanker</option>
                            <option value="5">Container Feeder</option>
                            <option value="6">Fishing vessel</option>
                            <option value="7">Gas Tanker</option>
                            <option value="8">Heavy Load Carrier</option>
                            <option value="9">Liquefied Natural Gas</option>
                            <option value="10">Research Vessel</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-lg btn-secondary border-0 w-100">Search</button>
            </div>
        </div>
    </div>
</div>
<!-- Search End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 about-bg rounded overflow-hidden">
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100" src="<?php echo e(asset('public/img/westminster/about-1.jpeg')); ?>">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid" src="<?php echo e(asset('public/img/westminster/about-3.jpeg')); ?>" style="width: 85%; margin-top: 15%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid" src="<?php echo e(asset('public/img/westminster/about-4.jpeg')); ?>" style="width: 85%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-100" src="<?php echo e(asset('public/img/westminster/about-2.jpeg')); ?>">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">Join our team and become a member of the Wallem's professional crew.</h1>
                <p class="mb-4">Westminster exclusively for Wallem Group in the Philippines</p>
                <a class="btn btn-primary py-3 px-5 mt-3" href="<?php echo e(url('about')); ?>">About Us</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Jobs Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp text-secondary" data-wow-delay="0.1s">Job Listing</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <div class="text-start">
                                    <h4 class="mb-3">Chief Officer</h4>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-primary" href="<?php echo e(url('job-detail')); ?>">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <div class="text-start">
                                    <h4 class="mb-3">Second Engineer</h4>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-primary" href="<?php echo e(url('job-detail')); ?>">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <div class="text-start">
                                    <h4 class="mb-3">Master</h4>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-primary" href="<?php echo e(url('job-detail')); ?>">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <div class="text-start">
                                    <h4 class="mb-3">Pumpman</h4>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-primary" href="<?php echo e(url('job-detail')); ?>">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <div class="text-start">
                                    <h4 class="mb-3">Junior Officer</h4>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-primary" href="<?php echo e(url('job-detail')); ?>">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="<?php echo e(url('job-list')); ?>">Browse More Jobs</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jobs End -->


<!-- News Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp text-secondary" data-wow-delay="0.1s">Our Latest News</h1>
        <div class="row g-4 ">
            <div class="col-lg-4 col-sm-6 wow fadeInUp d-flex" data-wow-delay="0.5s">
                <div class="card cat-item flex-fill rounded-3">
                    <img src="<?php echo e(asset('public/img/westminster/carousel-5.jpeg')); ?>" class="card-img-top rounded-top" alt="News Image">
                    <div class="card-body border-top border-primary border-3">
                        <ul class="list-inline">
                            <!-- List Item for Font Awesome Icon -->
                            <li class="list-inline-item text-primary"><i class="fas fa-calendar-alt"></i></li>
                            <!-- List Item for Date -->
                            <li class="list-inline-item news-date">September 22, 2023</li>
                        </ul>

                        <h4 class="card-title">Wallem Trains Crew On Green Shipping Technology</h4>
                        <p class="card-text fw-medium">The Hong Kong-based shipmanagement company, Wallem Group Ltd., wants to ensure its multinational officers and crew especially Filipinos are quite familiar and properly...</p>
                        <a href="<?php echo e(url('news-detail')); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 wow fadeInUp d-flex" data-wow-delay="0.5s">
                <div class="card cat-item flex-fill rounded-3">
                    <img src="<?php echo e(asset('public/img/westminster/carousel-6.jpeg')); ?>" class="card-img-top rounded-top" alt="News Image">
                    <div class="card-body border-top border-primary border-3">
                        <ul class="list-inline">
                            <!-- List Item for Font Awesome Icon -->
                            <li class="list-inline-item text-primary"><i class="fas fa-calendar-alt"></i></li>
                            <!-- List Item for Date -->
                            <li class="list-inline-item news-date">September 22, 2023</li>
                        </ul>
                        <h4 class="card-title">Wallem Inaugurates State-of-the-Art In-House Maritime Training Center</h4>
                        <p class="card-text fw-medium">Initially scheduled to be inaugurated back in 2020 but was set back due to the pandemic, Wallem Group was now...</p>
                        <a href="<?php echo e(url('news-detail')); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 wow fadeInUp d-flex" data-wow-delay="0.5s">
                <div class="card cat-item flex-fill rounded-3">
                    <img src="<?php echo e(asset('public/img/westminster/carousel-7.jpeg')); ?>" class="card-img-top rounded-top" alt="News Image">
                    <div class="card-body border-top border-primary border-3">
                        <ul class="list-inline">
                            <!-- List Item for Font Awesome Icon -->
                            <li class="list-inline-item text-primary"><i class="fas fa-calendar-alt"></i></li>
                            <!-- List Item for Date -->
                            <li class="list-inline-item news-date">September 22, 2023</li>
                        </ul>

                        <h4 class="card-title">Seafarers express their views in latest Splash TV instalment</h4>
                        <p class="card-text fw-medium">The latest instalment of the Maritime CEO Seafarer Leader Series powered by Ocean Technologies Group launches today. Sponsored by the Wallem Group, today’s...</p>
                        <a href="<?php echo e(url('news-detail')); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 wow fadeInUp d-flex" data-wow-delay="0.5s">
                <div class="card cat-item flex-fill rounded-3">
                    <img src="<?php echo e(asset('public/img/westminster/carousel-1.jpeg')); ?>" class="card-img-top rounded-top" alt="News Image">
                    <div class="card-body border-top border-primary border-3">
                        <ul class="list-inline">
                            <!-- List Item for Font Awesome Icon -->
                            <li class="list-inline-item text-primary"><i class="fas fa-calendar-alt"></i></li>
                            <!-- List Item for Date -->
                            <li class="list-inline-item news-date">September 22, 2023</li>
                        </ul>

                        <h4 class="card-title">Wallem Trains Crew On Green Shipping Technology</h4>
                        <p class="card-text fw-medium">The Hong Kong-based shipmanagement company, Wallem Group Ltd., wants to ensure its multinational officers and crew especially Filipinos are quite familiar and properly...</p>
                        <a href="<?php echo e(url('news-detail')); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 wow fadeInUp d-flex" data-wow-delay="0.5s">
                <div class="card cat-item flex-fill rounded-3">
                    <img src="<?php echo e(asset('public/img/westminster/carousel-2.jpeg')); ?>" class="card-img-top rounded-top" alt="News Image">
                    <div class="card-body border-top border-primary border-3">
                        <ul class="list-inline">
                            <!-- List Item for Font Awesome Icon -->
                            <li class="list-inline-item text-primary"><i class="fas fa-calendar-alt"></i></li>
                            <!-- List Item for Date -->
                            <li class="list-inline-item news-date">September 22, 2023</li>
                        </ul>
                        <h4 class="card-title">Wallem Inaugurates State-of-the-Art In-House Maritime Training Center</h4>
                        <p class="card-text fw-medium">Initially scheduled to be inaugurated back in 2020 but was set back due to the pandemic, Wallem Group was now...</p>
                        <a href="<?php echo e(url('news-detail')); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 wow fadeInUp d-flex" data-wow-delay="0.5s">
                <div class="card cat-item flex-fill rounded-3">
                    <img src="<?php echo e(asset('public/img/westminster/carousel-4.jpeg')); ?>" class="card-img-top rounded-top" alt="News Image">
                    <div class="card-body border-top border-primary border-3">
                        <ul class="list-inline">
                            <!-- List Item for Font Awesome Icon -->
                            <li class="list-inline-item text-primary"><i class="fas fa-calendar-alt"></i></li>
                            <!-- List Item for Date -->
                            <li class="list-inline-item news-date">September 22, 2023</li>
                        </ul>

                        <h4 class="card-title">Seafarers express their views in latest Splash TV instalment</h4>
                        <p class="card-text fw-medium">The latest instalment of the Maritime CEO Seafarer Leader Series powered by Ocean Technologies Group launches today. Sponsored by the Wallem Group, today’s...</p>
                        <a href="<?php echo e(url('news-detail')); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center wow fadeInUp" data-wow-delay="0.5s">
                <a class="btn btn-primary py-3 px-5" href="<?php echo e(url('news')); ?>">Browse More News</a>
            </div>
        </div>
    </div>
</div>
<!-- News End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="text-center mb-5 text-secondary">Our Clients Say!!!</h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-light rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Wallem is the only company I know that has built an exceptional reputation in the shipping industry and ship management on the basis of maintaining high levels of safety. This is partly due to teamwork and collaboration. Shore staff are very hands-on and supportive of their crew members.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="<?php echo e(asset('public/img/westminster/testimonial-1.jpeg')); ?>" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Capt. Jessie A. Buela</h5>
                        <small>Master in command, MV KSL Santos</small>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-item bg-light rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Wallem always treats all employees equally, at the office and on ships, too. Women empowerment is not just words for Wallem; they really do follow it.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="<?php echo e(asset('public/img/westminster/testimonial-2.jpeg')); ?>" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Amreem Bano</h5>
                        <small>Electrical Technical Officer</small>
                    </div>
                </div>
            </div>

            <div class="testimonial-item bg-light rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Our mission now is to realize the full potential that exists within the company for the benefit of our customers and to accelerate Wallem’s transformation. I am very proud to be joining such a dynamic team in a period of growth and innovation.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="<?php echo e(asset('public/img/westminster/testimonial-3.jpeg')); ?>" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">John-Karare Aune</h5>
                        <small>Managing Director, Ship Management</small>
                    </div>
                </div>
            </div>

            <div class="testimonial-item bg-light rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>I have been with Wallem for around 5 years, since joining as a cadet. I chose Wallem because it gives fair and equal opportunities to everyone. My ambition is to reach the highest position of my career at sea as Chief Engineer.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="<?php echo e(asset('public/img/westminster/testimonial-4.jpeg')); ?>" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Mary Jane Canencia</h5>
                        <small>Fourth Engineer</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programs\XAMPP\htdocs\westminsterph\resources\views/welcome.blade.php ENDPATH**/ ?>