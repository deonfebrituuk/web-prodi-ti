

<?php $__env->startSection('page-title', 'Form Tambah Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($title); ?></h5>

          <!-- Floating Labels Form -->
          <form class="row g-3 "  method="POST" action="<?php echo e(route('data-mahasiswa.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="col-md-12">
              <div class="form-floating">
                <input name="nama" value="<?php echo e(old('nama')); ?>" type="text" class="form-control" id="floatingName" placeholder="Nama Mahasiswa">
                <label for="floatingName">Nama</label>
              </div>
              <?php $__errorArgs = ['nama'];
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
            <div class="col-md-6">
              <div class="form-floating">
                <input name="nim" value="<?php echo e(old('nim')); ?>" type="number" class="form-control" id="validationCustom03 floatingEmail" placeholder="NIM" >
                <label for="floatingEmail">NIM</label>
              </div>
              <?php $__errorArgs = ['nim'];
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
            
            
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <select name="status" class="form-select" id="floatingSelect " aria-label="State">
                  <option selected disabled>Pilih Status</option>
                  <option  <?php echo e(old('status') == 'aktif' ? 'selected' : ''); ?> value="aktif">Aktif</option>
                  <option <?php echo e(old('status') == 'lulus' ? 'selected' : ''); ?> value="lulus">Lulus</option>
                </select>
                <label for="floatingSelect">Status</label>
              </div>
              <?php $__errorArgs = ['status'];
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
            <div class="col-md-12">
              <label for="inputNumber"  class="col-sm-2 col-form-label">File Upload</label>
              <div class="col-sm-10">
                <input name="gambar" value="<?php echo e(old('gambar')); ?>" class="form-control" type="file" id="formFile" accept=".jpg, .png, .jpeg">
              </div>
              <?php $__errorArgs = ['gambar'];
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
<?php echo $__env->make('admin.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SI_TI\resources\views/admin/mahasiswa/create.blade.php ENDPATH**/ ?>