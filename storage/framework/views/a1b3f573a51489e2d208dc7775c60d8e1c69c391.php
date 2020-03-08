<table class="table table-hover" id='table_users'>
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Full Name</th>
            <th scope="col">College</th>
            <th scope="col">Stage</th>
            <th scope="col">Active</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th> <?php echo e($item->id); ?> </th>  
                <th> <?php echo e($item->fullname); ?> </th>   
                <th> <?php echo e($item->college->name); ?> </th>   
                <th> <?php echo e($item->stage->stage); ?> </th>
                <th> <?php echo e(boolval($item->active) ? 'True' : 'False'); ?> </th>   
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/components/dashboard/users_table.blade.php ENDPATH**/ ?>