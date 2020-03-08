<?php $__env->startSection('title', 'MS '.Auth::user()->fullname); ?>

<?php $__env->startSection('content'); ?>


    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
        <!-- Toggle button -->
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4 visible-sm"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>

        <!-- Demo content -->
            <!--end header-->
            <div class="row">
                <?php $__currentLoopData = Auth::user()->projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card tranining">
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-4">
                                <p class="text">
                                    <?php echo e($project->name); ?> 
                                    <small style="color:#999595"> 
                                        <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                        <?php echo e(date('Y-m-d', strtotime($project->created_at))); ?> 
                                    </small>
                                </p>
                                
                            </div>
                            <article>
                                Lorem ipsum dolor sit amet, sectetur adipisicing elit, eiusmod
                                tempor incididunalquis nostrud exercitation... 
                                <a href="<?php echo e($project->link); ?>">github</a>
                            </article>
    
                            <div class="card-footer"></div>
                        </div>
                        <div class="card-text card-show pt-4 ">
                            <?php $__currentLoopData = $project->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="/user/<?php echo e($user->id); ?>"><?php echo e('@'.$user->fullname); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/home.blade.php ENDPATH**/ ?>