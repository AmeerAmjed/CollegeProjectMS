

<?php $__env->startSection('title', 'College MS'); ?>

<?php $__env->startSection('content'); ?>

    <!--start content -->
    <div class="overivwe">
        <div class="container">
            <div class="overviwe_card_img contaimg" >
                <img   src="<?php echo e(asset('image/index.png')); ?>" alt="index-img">
            </div>
            <div class="overviwe_card_info">
                <p>
                    <span class="c">C</span>an You join and upload your project <br> &amp; use <span>READ.ME</span> to write iead project
                </p>
                <div class="pdg" >
                    <a  class="btn btn-primary" href="signup.html">JOIN</a>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/index.blade.php ENDPATH**/ ?>