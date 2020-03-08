<?php $__env->startSection('title', 'Register '); ?>

<?php $__env->startSection('style'); ?>
   <style> 
        @media (min-width: 220px) and (max-width: 970px) {
            .rContainer {
                flex-direction: column;
            }
        
            .l-rColumn {
                order: 2;
                width: 100%;
            }
        
            .r-rColumn {
                order: 1;
                width: 100%;
            }
        
            .rightColumn {
                order: 3;
            }
        }
    
        @media  all and (max-width: 970px) and (min-width: 200px) {
            .card_login_img .img {
                width: 100%;
                margin: 70px auto;
            }
        
            .conta {
                display: flex;
                background: white;
                width: 90%;
                margin: 0 auto;
            }
        
            .r-rColumn {
                height: 50%;
            }
        
            .l-rColumn {
                height: 50%;
            }
        
            .card_signup_img .img {
                width: 100%;
                margin: 70px auto;
            }
        }
  </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('layout'); ?>

    <div class="rContainer">
        <div class="l-rColumn   col-sm-12 col-lg-4" >
          
          <div class="card_login_header" style='margin-bottom: 10%'>
            <a href="<?php echo e(url('/')); ?>">
              <i class="fa fa-home fa-2x"></i>
            </a>
          </div>
          
          <!--sign up form -->
          <div class="card_signup">
            <form class="needs-validation" method="POST" action="<?php echo e(route('register')); ?>" >
                <?php echo csrf_field(); ?>

                <div class="form-group validate-me">
                    <span class="input-icons"><i class="fa fa-user fa-2x"></i></span>
                    <input class="form-control <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="fullname" id="fullName" min="6" autocomplete="off"
                    placeholder="Full Name" required />
                    <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            Please enter the name.
                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
    
                <div class=" control-group  validate-me row style">
                    <span class="input-icons" style="font-size:27px">
                        <i class="fa fa-transgender"></i>
                    </span>
                    <label class="control-label" style="color:#6e777f;">
                        &nbsp; Gender &nbsp;
                    </label>
                    <div class="controls">
                        <label class="radio inline">
                            <input type="radio" name="gender" value="Male" /> Male
                        </label>
                        <label class="radio inline">
                            <input type="radio" name="gender" value="Female" />Female
                        </label>
                    </div>
                </div>


                <div class="form-group validate-me">
                    <span class="input-icons_c">
                        <i class="fa fa-graduation-cap fa-2x"></i>
                    </span>
        
                    <select class="custom-select" name="college" required>
                        <option selected disabled value=""><?php echo e(__('Select College')); ?></option>
                        <?php $__currentLoopData = $colleges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $college): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($college->id); ?>"><?php echo e($college->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
        
                    <span>
                        <select class="custom-select" name="stage" required>
                            <option selected disabled value=""> <?php echo e(__('Select Stage')); ?></option>
                            <?php $__currentLoopData = $stages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value='<?php echo e($stage->id); ?>'><?php echo e($stage->stage); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </span>
                </div>
    
                <div class="form-group validate-me">
                    <span class="input-icons">
                        <i class="fa fa-envelope fa-2x"></i>
                    </span>
                    <input type="email" class="form-control  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" required autocomplete="off" placeholder="E-mail" />
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <span class="input-icons"> 
                        <i class="fa fa-lock fa-2x "></i>
                    </span>
                    <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="password" placeholder="Password" autocomplete="new-password">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <span class="input-icons"> 
                        <i class="fa fa-lock fa-2x "></i>
                    </span>
                    <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="<?php echo e(__('Confirm Password')); ?>" autocomplete="new-password">
                </div>
    
              <div class="link">
                <p>Realy have account ? <a href="<?php echo e(route("login")); ?>"> <?php echo e(__('signin')); ?></a></p>
              </div>
              <button type="submit" class="btn btn-primary"><?php echo e(__('signup')); ?></button>
            </form>
          </div>
        </div>
        
        <div class="r-rColumn  col-sm-12 col-lg-4 " style='margin-top: 5%'>
          <div class="card_signup_img ">
            <img class="img" src="<?php echo e(asset('image/siginUp.png')); ?>" alt="img-signup" />
          </div>
        </div>
    </div>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/auth/register.blade.php ENDPATH**/ ?>