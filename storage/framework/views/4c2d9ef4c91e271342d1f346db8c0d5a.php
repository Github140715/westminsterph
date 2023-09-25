
<?php $__env->startSection('page-title'); ?>404 <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Header End -->
<div class="container-fluid py-5 bg-dark page-header mb-5">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Error</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">404</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->

<!-- 404 Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4">Page Not Found</h1>
                <p class="mb-4">The page you are looking for is not found, possibly due to the <br/> page not existing or being removed!</p>
                <a class="btn btn-primary py-3 px-5" href="<?php echo e(url('/')); ?>">Go Back To Home</a>
            </div>
        </div>
    </div>
</div>
<!-- 404 End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\webproject\htdocs\westminsterph\resources\views/errors/404.blade.php ENDPATH**/ ?>