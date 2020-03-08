

<?php $__env->startSection('title', 'College MS'); ?>

<?php $__env->startSection('layout'); ?>

    <?php $__env->startComponent('components.navbar'); ?>
    <?php echo $__env->renderComponent(); ?>

    <div id="app">
        <?php echo $__env->yieldContent('content'); ?>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/layouts/login.blade.php ENDPATH**/ ?>