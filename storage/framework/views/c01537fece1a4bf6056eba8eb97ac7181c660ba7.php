

<?php $__env->startSection('title', 'Admin- Users'); ?>
<?php $__env->startSection('Jtitle', 'User'); ?>

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
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        <div class="col-4">
                            <div class="d-flex flex-row border rounded">
                                    <div class="p-0 " style="width: 40%;">
                                        <img  id='<?php echo e($user->id); ?>-avatar' src="/storage/images/users/<?php echo e($user->avatar); ?>" class="img-thumbnail border-0 " />
                                    </div>
                                    <div class="pl-3 pt-2 pr-2 pb-2 w-75 border-left">
                                        <h4 class="text-dark"> <a href="/profile/<?php echo e($user->id); ?>"></a> <?php echo e($user->fullname); ?></h4>
                                        <h5 class="text-dark" style="text-transform: capitalize"><?php echo e($user->college->name); ?> | <?php echo e($user->stage->stage); ?></h5>
                                        <ul class="m-0 float-left" style="list-style: none; margin:0; padding: 0">
                                            <li> 
                                                <a target="_blank" href="https://github.com/<?php echo e($user->github); ?>" class="text-dark">
                                                    <i class="fa fa-github fa-2x"></i> 
                                                    
                                                </a>
                                                
                                            </li>
                                        </ul>
                                        <p id='<?php echo e($user->id); ?>' class="text-right m-0" >
                                            <a href="#!" class="btn btn-primary setting" disabled>
                                                <i class="fa fa-cog "></i>
                                            </a>
                                            
                                        </p>
                                </div>
                            </div>
                        </div>                
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <?php echo e($users); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="settingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="p-0 m-auto" style="width: 30%;">
                        <img  id='0-avatar' src="/storage/images/users/471a1ad342659289433e05a611d206f8.png" class="img-thumbnail border-0 " />
                        <h4 id='userName' class="text-center mt-2"> User Name </h4>
                        <hr> 
                    </div>
                    <div>
                        <div class="form-group text-center">
                            <a id='userActive' href="#!"  class="btn-active btn btn-success">
                                
                                <i class="fa fa-toggle-on text-white" ></i>
                            </a>
                        </div>
                        <div class="form-group m-auto" style="width: 50%">
                            <select class="form-control" id="userRole">
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($role->id); ?>'> <?php echo e($role->name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id='saveChanges' type="button" class="btn btn-primary">Save </button>
                </div>
            </div>
        </div>
    </div>


    <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false" style="position: absolute; top: 0; right: 0;">
        <div class="toast-header">
            <strong class="mr-auto">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            Hello, world! This is a toast message.
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
  <script src="<?php echo e(asset('js/users.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/admin/users.blade.php ENDPATH**/ ?>