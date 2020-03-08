

<?php $__env->startSection('title', 'Admin- Tranining'); ?>
<?php $__env->startSection('Jtitle', 'Tranining'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="margin-bottom: 10%">
    <div id='dashboard' class="card" >
        
        <div class="card-body">
            <button id='btn_toggle_modal' class="btn btn-outline-primary float-right" >
                <i class="fa fa-plus" aria-hidden="true"></i>
                
            </button>
            <?php $__env->startComponent('components.traning_model'); ?>
            <?php echo $__env->renderComponent(); ?>
            <br>
            <hr>
            <div id="blockquotes">
                <?php $__currentLoopData = $trans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $train): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <blockquote id='quote-<?php echo e($train->id); ?>' class="blockquote">
                        <p class="text" class="mb-0">
                            <?php echo e($train->text); ?>

                        </p>
                        <footer id='<?php echo e($train->id); ?>' class="blockquote-footer">
                            <span class="support"><?php echo e($train->support); ?></span>
                            <cite class="at" title="Source Title"><?php echo e($train->getAt()); ?> </cite>
                            
                            <button onclick="btn_delete(event)" class="btn-delete btn  btn-danger btn-sm">
                                <i class="fa fa-trash" aria-hidden="true"></i> 
                            </button>
                            
                            <button onclick='toggle_update_model(event)' style="z-index: 1024"  class="btn-update btn  btn-primary btn-sm"> 
                                <i class="fa fa-edit" aria-hidden="true"></i> 
                            </button>
                        </footer>
                    </blockquote>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
  <script src="<?php echo e(asset('js/tranining.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/admin/tranining.blade.php ENDPATH**/ ?>