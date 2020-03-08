<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" >
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Fonts -->
    
    
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/normalize.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo $__env->yieldContent('style'); ?>

</head>
<body>
    <?php echo $__env->yieldContent('layout'); ?>

    <script src="<?php echo e(asset('js/app.js')); ?>" ></script>
    <?php echo $__env->yieldContent('js'); ?>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/layouts/base.blade.php ENDPATH**/ ?>