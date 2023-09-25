
<?php $__env->startSection('page-title'); ?>About <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Header End -->
<div class="container-fluid py-5 bg-dark page-header mb-5">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeIn order-lg-1 order-0 px-0">
                <div class="row g-0 about-bg rounded overflow-hidden bg-primary">
                    <div class="col-12 text-center py-5 ">
                        <i class="fa fa-bullseye text-white ico-about"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn order-lg-2 order-0">
                <h1 class="mb-4 display-3 text-center fw-normal text-primary">Our Mission</h1>
                <p class="mb-4 fs-3 text-xl-start">To be a dedicated, trusted partner in maritime globally, delivering expertise and industry-leading services that support safe, smart and sustainable operations</p>
            </div>
        
            <div class="col-lg-6 wow fadeIn order-lg-4 order-0 px-0">
                <div class="row g-0 about-bg rounded overflow-hidden bg-secondary">
                    <div class="col-12 text-center py-5">
                        <i class="fa fa-regular fa-eye text-white ico-about"></i>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-6 wow fadeIn order-lg-3 order-0">
                <h1 class="mb-4 display-3 text-center fw-normal text-secondary">Our Vision</h1>
                <p class="mb-4 fs-3 text-xl-start">To support the evolving needs of our clients and the wider maritime industry with world-class solutions that aim to serve the Ship of the Future.</p>
            </div>

            <div class="col-lg-6 wow fadeIn order-lg-5 order-0 px-0">
                <div class="row g-0 about-bg rounded overflow-hidden bg-primary">
                    <div class="col-12 text-center py-5">
                        <i class="fa fa-regular fa-hand-holding-heart text-white ico-about"></i>
                    </div>
                </div>
            </div>
        
           <div class="col-lg-6 wow fadeIn order-lg-last order-0">
                <h1 class="mb-4 display-3 text-center fw-normal text-primary">Our Values</h1>
                <p class="mb-4 fs-3 text-xl-start">Committed to delivering excellence, we take a collaborative and people-oriented approach to our operations, prioritising the needs of our client and seafarers.</p>
            </div>
        </div>
        
    </div>
</div>
<!-- About End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programs\XAMPP\htdocs\westminsterph\resources\views/about.blade.php ENDPATH**/ ?>