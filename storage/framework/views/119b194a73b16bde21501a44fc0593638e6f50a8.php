<?php $__env->startSection('title', 'Confirm'); ?>

<?php $__env->startSection('layout'); ?>
    

    <div class="lContainer">
        <div class="l-lColumn ">
            <div class="card_login_header">
                <a href="<?php echo e(url('/')); ?>">
                    <i class="fa fa-home fa-2x"></i>
                    
                </a>
            </div>
            <div class="conta card_login_img  col-sm-12 col-lg-4">
                <img class="img" src="<?php echo e(asset('image/signIn.png')); ?>" alt="img-siginUp">

            </div>
        </div>

        <div class="r-lColumn  card_login col-sm-12 col-lg-4">
            
            <form method="POST" action="<?php echo e(route('password.confirm')); ?>">
                <h2 style="border-left: 4px solid #6c63ff;text-align: center" class='mb-2'><?php echo e(__('Confirm Password')); ?></h2>
                <?php echo csrf_field(); ?>

                

                <div class="form-group ">
                    <span class="input-icons"> 
                        <i class="fa fa-lock fa-2x"></i>
                    </span>
                    <input id="password" type="password" placeholder="<?php echo e(__('Password')); ?>" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required >
                   
                    <small id="emailHelp" class="form-text text-muted">
                        <?php echo e(__('Please confirm your password before continuing.')); ?>

                    </small>
                    
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <?php if(Route::has('password.request')): ?>
                <div class="text-left">
                    <div class="passforget custom-control  ">
                    
                        
                            <a href='<?php echo e(route('password.request')); ?>' class="text-secondary" >
                                <?php echo e(__('Forgot Your Password?')); ?>

                            </a>
                        
                    </div>
                </div>
                <?php endif; ?>

                <div class="form-group row mb-0">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                            <?php echo e(__('Confirm')); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/auth/passwords/confirm.blade.php ENDPATH**/ ?>