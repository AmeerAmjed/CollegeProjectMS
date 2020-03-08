

<?php $__env->startSection('title', $user->fullname); ?>

<?php $__env->startSection('content'); ?>


    <!-- Vertical navbar -->
    <div class="vertical-nav " id="sidebar" style="z-index:1">
        <div class="user_info">
            <div class="circle">
                <img class="profile-pic" style="max-width: 100%;width: 100%;" src="/storage/images/users/<?php echo e($user->avatar); ?>">
            </div>
            <?php if($auth): ?>
                <div class="p-image">
                    <i onclick='$(".file-upload").click();' class="fa fa-plus-circle fa-2x upload-button"></i>
                    <input  class="file-upload" type="file" name='avatar' accept="image/*" />
                </div>
            <?php endif; ?>

        </div>
        <div class="user-name">
            <h3><?php echo e($user->fullname); ?></h3>

            <ul class="list-group text-left">
                <li>
                    <i class="fa fa-envelope" ></i>
                    <span style="margin-left: 10px;"><?php echo e($user->email); ?></span>
                </li>
                <li>
                    <i class="fa fa-graduation-cap" ></i>
                    <span class="college" >
                        <?php echo e($user->college->name); ?>

                    </span>
                </li>
                <li>
                    <i class="fa fa-briefcase" ></i>
                    <span class="fields" style="margin-left: 10px;"> 
                        <?php echo e($user->work ?  $user->work : 'not work yet'); ?> 
                    </span>
                    <?php if($auth): ?>
                    <i class="fa fa-pencil-square-o btn-edit" ></i>
                    <?php endif; ?>
                </li>
                <li>
                    <i class="fa  fa-github" ></i> 
                    <a name='github' class="fields" href="https://github.com/<?php echo e(trim($user->github, '@')); ?>" style="font-size: 14px;margin-left: 25px;" contenteditable="false">
                        <?php echo e($user->github ?  $user->github : 'None'); ?> 
                    </a> 
                    <?php if($auth): ?>
                    <i class="fa fa-pencil-square-o btn-edit" ></i>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
    <!-- End vertical navbar -->

    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
        <!-- Toggle button -->
        

        <!-- Demo content -->
        <div class="info">
            <div class="row">
                <?php $__currentLoopData = $user->projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12">
                    <div class="card tranining">
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-4">
                                <p class="text">
                                    
                                    <?php echo e($project->name); ?> 
                                    
                                    <small style="color:#999595"> 
                                        <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                        <?php echo e(date('Y-m-d', strtotime($project->created_at))); ?> 
                                    </small>
                                </p>
                                <a class="float-right" href="/project/<?php echo e($project->id); ?>/edit"> 
                                    <i class="fa fa-edit fa-2x"></i> 
                                </a>
                            </div>
                            <article>
                                <?php echo e($project->description); ?> 
                                <a href="<?php echo e($project->link); ?>">github</a>
                            </article>
    
                            <div class="card-footer"></div>
                        </div>
                        <div class="card-text card-show pt-4 ">
                            <?php $__currentLoopData = $project->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="/user/<?php echo e($user->id); ?>"><?php echo e('@'.$user->fullname); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </div>
                        
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>
        .btn-edit{
            color:#ddd;
            margin-left: 0px;
            font-size: 1rem !important;
            float: right;
            margin-top: 6%;
        }
        .btn-edit:hover{
            color:#333;
        }
        .btn-edit:active {
            font-weight: bold;
        }
        .fields[contenteditable='true']{
            border-bottom:1px solid #333;
            padding-left: 0 !important;
            padding-bottom: 6px !important;
            color: #000;
            padding-right: 1%;
        }
    </style>
<?php $__env->stopSection(); ?> 

<?php if($auth): ?>
    <?php $__env->startSection('script'); ?>
        <script>
            $(function(){
                $('.btn-edit').click(function(event){
                    $(this).toggleClass('fa-pencil-square-o').toggleClass('fa-check'); 
                    $(this).parent().find('.fields').attr('contenteditable',function(index, attr){
                        
                        if (attr == 'true'){
                            $(this).parent().find('.btn-edit').toggleClass('fa-pencil-square-o').toggleClass('spinner-border');
                            var data  = {}
                            var  evalue = $(this).text().trim();
                            if ($(this).attr('href')){
                                $(this).attr('href',"https://github.com/"+evalue.replace("@",'').trim());
                            }
                            data[$(this).attr('name')] = evalue 
                            axios.put('/api/profile',data).then(resp=>{
                                $(this).parent().find('.btn-edit').toggleClass('fa-pencil-square-o').toggleClass('spinner-border');
                            })
                            return 'false'
                        }
                        
                        return 'true'
                    });
                })

                $(".file-upload").on('change', function() {
                    let reader = new FileReader();
                    let df = new FormData();

                    df.append('avatar',this.files[0])
                    df.append('_method','PUT');
                    $('.profile-pic').toggleClass('spinner-border');
                    reader.onload = function(e) {
                        $('.profile-pic').toggleClass('spinner-border').attr('src', e.target.result);
                        $('#nav-avatar img').attr('src', e.target.result);
                        df.delete('avatar');
                    }
                    
                    axios.post("/api/profile", df).then(resp=>{
                        reader.readAsDataURL(this.files[0]);
                    })

                });
            }) 
        </script>
    <?php $__env->stopSection(); ?>
<?php endif; ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/profile/view.blade.php ENDPATH**/ ?>