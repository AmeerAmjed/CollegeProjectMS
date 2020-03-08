<div class="collapse navbar-collapse ml-4" id="navbarSupportedContent">
    <ul class="navbar-nav  <?php if(auth()->guard()->guest()): ?> container <?php else: ?> mr-auto <?php endif; ?>">
        
        <li class="nav-item  active">

            <a class="nav-link" href="<?php echo e(url('/')); ?>">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Colleges 
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <i class="fa fa-caret-up fa-5x  triangle-up"></i>
                <?php $__currentLoopData = $colleges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $college): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a class="dropdown-item" href="/projects/<?php echo e($college->id); ?>"> <?php echo e($college->name); ?> </a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>

        
        <li class="nav-item">
            <a class="nav-link" href="/tranining"> Tranining </a>
        </li>

        <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item">
                <a class="nav-link" href="/about"> About</a>
            </li>
        <?php endif; ?>

    </ul>
    <?php echo e($slot); ?>

</div><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/components/navbars/itemnav.blade.php ENDPATH**/ ?>