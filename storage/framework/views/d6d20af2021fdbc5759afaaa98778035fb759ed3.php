

<?php $__env->startSection('title', 'Admin Panel'); ?>

<?php $__env->startSection('layout'); ?>
    <div class="app" >
        <div class="row" style="width: 100%;">
            <div id='nav' class="col col-2 col-lg-2 col-md-3" style="z-index: 1">
                <?php $__env->startComponent('components.sidenav'); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
            <div class="col col-12 col-lg-10 col-md-9" style="padding-right: 0px;">
                <div id='dash-jumb' class="jumbotron" style="">
                    <button class="navbar-toggler text-secondary d-md-none d-sm-block" type="button" onclick="$('#nav').toggleClass('side-toogle')" >
                        <i class="fa fa-bars text-white"></i>
                    </button>
                    <h3 style="font-weight: bold"> <?php echo $__env->yieldContent('Jtitle'); ?> </h3>
                </div>

                <?php echo $__env->yieldContent('content'); ?>

                <div class="footer text-dark bg-white" >
                    © Alaa Akiel 2020
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/layouts/admin.blade.php ENDPATH**/ ?>