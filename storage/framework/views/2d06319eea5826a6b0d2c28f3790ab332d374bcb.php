<table class="table table-hover" id='table_college'>
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Student</th>
            <th scope="col">Project</th>
            <th scope="col">Admin</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th name='id'> <?php echo e($item->id); ?> </th>  
                <th style="text-transform: capitalize" name='name'> <?php echo e($item->name); ?> </th>   
                <th name='user'> <?php echo e($item->users->count()); ?> </th>   
                <th name='project'> <?php echo e($item->projects->count()); ?> </th>
                <th name='admins'> <?php echo e($item->admin->count()); ?> </th> 
                <th name='action'> 
                    <button class="btn btn-outline-danger delete_college" onclick='delete_college(event, <?php echo e($item->id); ?>)'> 
                        <i class="fa fa-trash"></i> 
                    </button> 
                </th> 
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/components/dashboard/college_table.blade.php ENDPATH**/ ?>