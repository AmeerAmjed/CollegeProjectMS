

<?php $__env->startSection('title', 'Projects - college '.$college->name); ?>

<?php $__env->startSection('content'); ?>
    <!-- header start-->
    <div class="header text-center">
        <h2 style='text-transform: capitalize;'>
            <?php echo e($college->name); ?>

        </h2>
    </div>

    <div class="search2">
        <center>
            <div class="container">
                <div class=" col-lg-8  col-sm-12 ">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name_project" placeholder="search">
                        </div>
                        <div class="bottom">
                            <button class="search-icons" type="submit">
                                <i class="fa fa-search fa-1x" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                </div>
        </center>
    </div>
    </div>
    <!-- end search form-->

    <div class="card_project">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $college->projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <img src="/storage/images/projects/<?php echo e($project->image); ?>" class="card-img-top" alt="">
                            <div class="card-body " >
                                
                                <p class="card-text w-100" style='float: unset;'>
                                    <?php echo e($project->description); ?><br>
                                    <a href="<?php echo e($project->link); ?>" class="code"> <i class="fa fa-github"></i> </a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/projects.blade.php ENDPATH**/ ?>