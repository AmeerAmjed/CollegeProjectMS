

<?php $__env->startSection('title', 'Admin- Project'); ?>
<?php $__env->startSection('Jtitle', 'Project'); ?>

<?php $__env->startSection('content'); ?> 
    <div class="container" style="margin-bottom: 10%">
        <div id='dashboard' class="card" >
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <?php $__env->startComponent('components.search'); ?>   
                        <?php echo $__env->renderComponent(); ?>
                    </div>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-4">
                            <div class="card mb-" >
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <a id='<?php echo e($project->id); ?>' href="#!" data-toggle="modal" data-target="#project-<?php echo e($project->id); ?>"  class="text-dark" ><?php echo e($project->name); ?></a>
                                                <div class="modal fade" id="project-<?php echo e($project->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo e($project->name); ?></h5>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                Users :  
                                                                <?php $__currentLoopData = $project->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <span class="badge badge-dark"><?php echo e($user->fullname); ?></span>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                            <div class="col-12">
                                                                <p class="mt-5">
                                                                    Description: 
                                                                    <p class="ml-5"><?php echo e($project->description); ?></p>
                                                                </p>
                                                            </div>
                                                            <div class="col-12">
                                                                <p class="mt-3">
                                                                    link: 
                                                                    <p class="ml-5">
                                                                        <i class="fa fa-github" aria-hidden="true"></i>
                                                                        <a href="<?php echo e($project->link); ?>"> <?php echo e($project->link); ?> </a>
                                                                    </p>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </h5>
                                            <div class="card-text " >
                                                <p id='<?php echo e($project->id); ?>' class="float-right ">
                                                    <a href="#!"  class="btn-active btn <?php if($project->active): ?> btn-success <?php else: ?> btn-danger <?php endif; ?> ">
                                                        <?php if($project->active): ?> 
                                                            <i class="fa fa-toggle-on"></i>
                                                        <?php else: ?> 
                                                            <i class="fa fa-toggle-off"></i>
                                                        <?php endif; ?>
                                                    </a>
                                                </p>
                                                <span style="text-transform: capitalize"><?php echo e($project->college->name); ?> | <?php echo e($project->stage->stage); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <?php echo e($projects); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
  <script src="<?php echo e(asset('js/projects.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/admin/projects.blade.php ENDPATH**/ ?>