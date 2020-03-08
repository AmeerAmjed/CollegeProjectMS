<?php $__env->startSection('title', 'Reset Password'); ?>

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
                <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('password.email')); ?>">
                    <?php echo csrf_field(); ?>
                    <h2 style="border-left: 4px solid #6c63ff;text-align: center" class='mb-2'><?php echo e(__('Reset Password')); ?></h2>
                    <div class="form-group">
                            <span class="input-icons"> 
                                <i class="fa fa-envelope fa-2x"></i>
                            </span>
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('E-Mail Address')); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                            <?php $__errorArgs = ['email'];
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

                    <div class="form-group ">
                        <button type="submit" class="btn btn-primary">
                            <?php echo e(__('Submit')); ?>

                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>