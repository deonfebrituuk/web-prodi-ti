

<?php $__env->startSection('page-title', 'Form Ubah Dosen'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($title); ?></h5>

          <!-- Floating Labels Form -->
          <form class="row g-3 "  method="POST" action="<?php echo e(route('data-dosen.update', $data->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="col-md-12">
              <div class="form-floating">
                <input name="nama" value="<?php echo e(old('nama', $data->nama)); ?>" type="text" class="form-control" id="floatingName" placeholder="Nama dosen">
                <label for="floatingName">Nama Dosen</label>
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
                <input name="nidn" value="<?php echo e(old('nidn', $data->nidn)); ?>" type="number" class="form-control" id="validationCustom03 " placeholder="NIDN" >
                <label for="">NIDN</label>
              </div>
              <?php $__errorArgs = ['nidn'];
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
                <input name="jabatan" value="<?php echo e(old('jabatan', $data->jabatan)); ?>" type="text" class="form-control" id="validationCustom03 " placeholder="Petinggi, Atasan, Pimpinan" >
                <label for="">Jabatan : Petinggi, Atasan, Pimpinan</label>
              </div>
              <?php $__errorArgs = ['jabatan'];
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

            <div class="col-12">
              <div class="form-floating">
                <textarea name="ttl" class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"><?php echo e(old('ttl', $data->ttl)); ?></textarea>
                <label for="floatingTextarea">Tempat Tanggal Lahir</label>
              </div>
              <?php $__errorArgs = ['ttl'];
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
                <input data-inputmask-alias="email" name="email" value="<?php echo e(old('email', $data->email)); ?>" type="email" class="form-control email" id="validationCustom03 " placeholder="NIDN" >
                <label for="">Email Dosen : email@dosen.com</label>
              </div>
              <?php $__errorArgs = ['email'];
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
                <input name="wa" value="<?php echo e(old('wa', $data->wa)); ?>" type="text" class="form-control wa" id="validationCustom03 " placeholder="Petinggi, Atasan, Pimpinan" >
                <label for="">Nomor Whatsapp : Petinggi, Atasan, Pimpinan</label>
              </div>
              <?php $__errorArgs = ['wa'];
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
                <input name="ig" value="<?php echo e(old('ig', $data->ig)); ?>" type="text" class="form-control ig" id="validationCustom03 " placeholder="NIDN" >
                <label for="">Instagram Dosen : @instagramDosen  </label>
              </div>
              <?php $__errorArgs = ['ig'];
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
                <input name="fb" value="<?php echo e(old('fb', $data->fb)); ?>" type="text" class="form-control fb" id="validationCustom03 " placeholder="Petinggi, Atasan, Pimpinan" >
                <label for="">Facebook Dosen : @fb_dosen  </label>
              </div>
              <?php $__errorArgs = ['fb'];
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
                <input name="gambar" value="<?php echo e(old('gambar', $data->gambar)); ?>" class="form-control" type="file" id="formFile" accept=".jpg, .png, .jpeg">
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
              <button type="submit" class="btn btn-warning">Update</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End floating Labels Form -->

        </div>
      </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SI_TI\resources\views/admin/dosen/edit.blade.php ENDPATH**/ ?>