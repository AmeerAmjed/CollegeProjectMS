

<?php $__env->startSection('title', 'Best Projects'); ?>

<?php $__env->startSection('content'); ?>

        <!--start card project-->
        <div class="card_project">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $colleges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $college): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <!--start card-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <img src="/image/computer.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <p class="header"> 
                                        <a href="/projects/<?php echo e($college->id); ?>"><?php echo e($college->name); ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </div>
            </div>
        </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/colleges.blade.php ENDPATH**/ ?>