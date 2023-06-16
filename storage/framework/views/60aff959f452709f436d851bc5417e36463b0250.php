

<?php $__env->startSection('page-title', 'Form Tambah Tentang'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($title); ?></h5>

          <!-- Floating Labels Form -->
          <form class="row g-3 "  method="POST" action="<?php echo e(route('data-tentang.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
           <div class="col-12">
              <div class="form-floating">
                <textarea name="deskripsi" class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"><?php echo e(old('deskripsi')); ?></textarea>
                <label for="floatingTextarea">Deskripsi</label>
              </div>
              <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  
                <div class="invalid-feedback" style="    
                  display: block;
                  width: 100%;
                  margin-top: .25rem;
                  font-size: .875em;
                  color: #dc3545;"
                >
                  <?php echo e($message); ?>

                </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            
            
            
            
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Save</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End floating Labels Form -->

        </div>
      </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SI_TI\resources\views/admin/tentang/create.blade.php ENDPATH**/ ?>