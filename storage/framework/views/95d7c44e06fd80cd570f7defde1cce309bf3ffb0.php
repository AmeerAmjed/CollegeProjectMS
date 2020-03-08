
<?php if(auth()->guard()->guest()): ?>
    
    <?php $__env->startComponent('components.navbars.navbar'); ?>     
    <?php echo $__env->renderComponent(); ?>
<?php else: ?> 
    <?php $__env->startComponent('components.navbars.login'); ?>     
    <?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/components/navbar.blade.php ENDPATH**/ ?>