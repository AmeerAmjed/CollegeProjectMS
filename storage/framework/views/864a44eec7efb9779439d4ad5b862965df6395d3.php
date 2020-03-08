

<?php $__env->startSection('title', 'Add Project'); ?>

<?php $__env->startSection('content'); ?>

    <div class="add_project">
        <div class="container">
            <h1 class="add-titel text-center">
                Add project
            </h1>
            
            <form class="form" method="POST" action="/project" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php $__env->startComponent('components.form_project'); ?>
                 
                <?php echo $__env->renderComponent(); ?>

                <button type="submit" class="btn btn-primary">Create</button>
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


            // $('input#tagsinput').tagsinput({
            //     typeahead: {
            //         source: function(query) {
            //             return axios.get("/users").then(resp=>{
            //                 console.log(resp.data.users);
            //             });
            //         }
            //     }
            // });

            // $(document).on('keyup keypress', 'form input[type="text"]', function(e) {
            //     if (e.keyCode == 13) {
            //         e.preventDefault();
            //         return false;
            //     }
            // });

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/addproject.blade.php ENDPATH**/ ?>