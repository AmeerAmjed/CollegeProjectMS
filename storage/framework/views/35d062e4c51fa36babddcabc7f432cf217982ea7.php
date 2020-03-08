

<?php $__env->startSection('title', 'Edit Project'); ?>

<?php $__env->startSection('content'); ?>

    <div class="add_project">
        <div class="container">
            <h1 class="add-titel text-center">
                Edit project
            </h1>
            <form class="form" method="POST" action="/project/<?php echo e($project->id); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo e(method_field('PUT')); ?>

                <?php $__env->startComponent('components.form_project',[
                    'name' => $project->name,
                    'description' => $project->description,
                    'link' => $project->link
                ]); ?>
                <?php echo $__env->renderComponent(); ?>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    
    <script>
        $(function(){

            $('input[type="file"]').change(function(e){
                $('.custom-file-label').html(e.target.files[0].name);
            });



        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/editproject.blade.php ENDPATH**/ ?>