

<?php $__env->startSection('title', 'Tranining'); ?>

<?php $__env->startSection('content'); ?>
    <div class="tranining-card">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $trans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <div class="col-12 ">
                        <div class="card tranining mb-1">
                            <div class="card-s">
                                <div class="card-body">
                                    <h5 class="card-title " style="text-transform: capitalize"> <?php echo e($tran->support); ?> </h5>
                                    <div class="m-3">
                                        <p class="text-left">
                                            <?php echo e($tran->text); ?>

                                        </p>

                                    </div>
                                    
                                    <span>
                                        <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                        <time><?php echo e($tran->at); ?></time>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/tranining.blade.php ENDPATH**/ ?>