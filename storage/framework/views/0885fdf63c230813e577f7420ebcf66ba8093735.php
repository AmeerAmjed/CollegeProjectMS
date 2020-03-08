

<?php $__env->startSection('title', 'Admin- Dashboard'); ?>
<?php $__env->startSection('Jtitle', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
  <div class="container" style="margin-bottom: 10%">
    <div id='dashboard' class="card" >
      <div class="card-body">
        <div class="row">
          <div class="col-6 col-md-3">	
            <div class="card border-left-dark mb-3 " style="max-width: 18rem;">
              <div class="card-body">
                <small class="card-title text-dark">Have <?php echo e($users->count()); ?> Users </small>
                <p class="card-text">
                    <?php echo e($users->where('role_id', 2)->count()); ?> student  
                      |  
                    <?php echo e($users->where('role_id', 1)->count()); ?> Admin</p>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">	
              <div class="card border-left-success mb-3 " style="max-width: 18rem;">
              <div class="card-body">
                <small class="card-title text-success">Users </small>
                <p class="card-text">Have <?php echo e($users->where('active', 0)->count()); ?> InActive user</p>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">	
              <div class="card border-left-primary mb-3 " style="max-width: 18rem;">
              <div class="card-body">
                <small class="card-title text-primary">Have <?php echo e($projects->count()); ?> Project </small>
                <p class="card-text">
                    <?php echo e($projects->where('active', 1)->count()); ?> Active  
                      |  
                    <?php echo e($projects->where('active', 0)->count()); ?> InActive
                </p>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">	
              <div class="card border-left-warning mb-3 " style="max-width: 18rem;">
              <div class="card-body">
                <small class="card-title text-warning">College</small>
                <p class="card-text">Have <?php echo e($colleges->count()); ?> college</p>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col col-12 col-md-6" style="margin-bottom: 1%">
            <div class="card">
              <div class="card-header">
                Users InActive<span class="badge badge-primary"><?php echo e($users->where('active', 0)->count()); ?></span>
            </div>
            <div class="container" style="margin-top: 10px">
                <div class="card-body" >
                  <?php $__env->startComponent('components.dashboard.users_table', ['items' => $users->where('active', 0)]); ?>
                  <?php echo $__env->renderComponent(); ?>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="col col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                Projects InActive <span class="badge badge-primary"><?php echo e($projects->where('active', 0)->count()); ?></span>
            </div>
            <div class="container" style="margin-top: 10px">
                <div class="card-body" >
                  <?php $__env->startComponent('components.dashboard.projects_table', ['items' => $projects->where('active', 0)]); ?>
                  <?php echo $__env->renderComponent(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col col-12">
            <div class="card">
              <div class="card-header">
                Colleges  
                <button class="btn btn-primary float-right btn-sm"  data-toggle="modal" data-target="#staticBackdrop"> 
                  <i class="fa fa-plus"></i> 
                </button>
                <div class="modal fade" id="staticBackdrop" data-backdrop="static">
                  <div class="modal-dialog" >
                    <form id="add_college" onsubmit="event.preventDefault()">
                      <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-group">
                              <label for="image"> College Name </label>
                              <input type="text" class="form-control" id="input_college" placeholder="Name College">
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" id='btn_add_college' >Add</button>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
            <div class="container" style="margin-top: 10px">
                <div class="card-body" >
                  <?php $__env->startComponent('components.dashboard.college_table', ['items' => $colleges]); ?>  
                  <?php echo $__env->renderComponent(); ?>   
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col col-12" style="margin-top: 1%;">
            <div class="card">
              <div class="card-header">
                Training
              </div>
              <div class="card-body">
                <?php $__currentLoopData = $tranining; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $train): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <blockquote class="blockquote">
                    <p class="mb-0">
                      <?php echo e($train->text); ?>

                    </p>
                    <footer class="blockquote-footer"><?php echo e($train->support); ?> 
                        <cite title="Source Title"> <?php echo e($train->getAt()); ?> </cite>
                    </footer>
                  </blockquote>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
  <script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/d/laravel/project/CollProjectMS/resources/views/admin/dashborad.blade.php ENDPATH**/ ?>