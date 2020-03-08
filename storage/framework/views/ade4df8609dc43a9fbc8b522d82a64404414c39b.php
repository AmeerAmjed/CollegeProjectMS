<?php $__env->startSection('title', 'Sign IN'); ?>

<?php $__env->startSection('style'); ?>
    <style>
    
    


        @media (min-width: 220px) and (max-width: 970px) {
            .card_login_img .img {
                width: 100%;
                margin: 70px auto;
            }

            .card_login .btn-primary {
                float: right;
                color: #fff;
                background-color: #6c63ff !important;
                border-color: #6c63ff !important;
                margin-top: 20px;
                width: 100%;
                border-radius: 6px;
                margin-right: 0px;
            }

            .lContainer {
                flex-direction: column;
            }

            .r-lColumn {
                order: 2;
                width: 100%;

            }

            .l-lColumn {
                order: 1;
                width: 100%;

            }

        

        }

        @media  all and (max-width: 970px) and (min-width: 0px) {
            .card_login_img .img{
                display: none;}
        }

        @media  all and (max-width: 970px) and (min-width: 200px) {

            .card_login form {
                margin-top: 0%;
                margin-right: 10px;
                margin-left: 10px;

            }

            .conta {
                padding-top: 0px !important;
                margin-top: 0px !important;

                display: flex;
                background: white;
                width: 90%;
                margin: 0 auto;


            }

            .l-lColumn ,  .r-lColumn{
                height: 50%;
            }

        

        }
    </style>
<?php $__env->stopSection(); ?>

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
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger " role="alert"> 
                        <?php echo e($message); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    
                    <div class="form-group">
                        <span class="input-icons"> 
                            <i class="fa fa-envelope fa-2x"></i>
                        </span>
                        <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="off" placeholder="<?php echo e(__('E-Mail Address')); ?>" autofocus>
                        
                    </div>
                    <div class="form-group">
                        <span class="input-icons"> 
                                <i class="fa fa-lock fa-2x"></i>
                        </span>
                        <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" placeholder="<?php echo e(__('Password')); ?>" autocomplete="new-password">
                        
                    </div>
                    <div class="d-flex m-1 justify-content-between">
                        <div class="custom-control custom-checkbox my-1 mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="customControlInline" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                            <label class="custom-control-label" for="customControlInline"><?php echo e(__('Remember Me')); ?></label>
                        </div>
                        <div class="passforget custom-control  my-1 ">
                            <a href='/password/reset' class="text-secondary" >
                                forget password?
                            </a>
                        </div>
                    </div>

                    <div class="link">
                        <p>
                            Create New account ? <a href="<?php echo e(route('register')); ?>"><?php echo e(__('signup')); ?></a>
                        </p>
                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('signin')); ?></button>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/auth/login.blade.php ENDPATH**/ ?>