
    <!--start upper bar -->
    <div class="upper-bar">
        <div class="container">
            <div class="row">
                <div class="info col-sm  text-sm-left">
                    <img src="<?php echo e(asset('image/logo.png')); ?>">
                    <p>Univeristy of wasit </p>
                </div>
                <div class="info col-sm  text-sm-right">
                    <ul>
                        <li>
                            <a href="<?php echo e(route('login')); ?>"> <?php echo e(__('signin')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('register')); ?>"><?php echo e(__('signup')); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end upper bar-->

    <!--  start navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php $__env->startComponent('components.navbars.itemnav'); ?>
        <?php echo $__env->renderComponent(); ?>
    </nav>
    <!-- end navbar--><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/components/navbars/navbar.blade.php ENDPATH**/ ?>