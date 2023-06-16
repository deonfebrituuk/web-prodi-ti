

<?php $__env->startSection('page-title', 'Data Profil'); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo e($title); ?>  
                  <?php if($data->count() < 1): ?>
                    - <a href="<?php echo e(route('data-profil.create')); ?>" class="btn btn-success">
                      <i class="bi bi-file-earmark-plus"></i>
                      Tambah Data
                    </a>  
                  <?php else: ?>
                    <a href=""></a>
                  <?php endif; ?>
                  
              </h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"  style="height: 15%">opsi</th>
                    <th scope="col">Visi</th>
                    <th scope="col" style="height: 10%">Misi</th>
                    <th>Media Sosial</th>
                    <th scope="col">Logo Prodi</th>
                    <th scope="col">Time Stamps</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <tr>
                        <th scope="row"><?php echo e($no += 1); ?></th>
                        <th scope="row">
                          <form action="<?php echo e(route('data-profil.destroy', $item->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <a href="<?php echo e(route('data-profil.edit', $item->id)); ?>" class="btn btn-warning">
                              <i class="bi bi-pencil-square"></i>
                            </a>
                            <button type="submit" class="btn btn-danger">
                              <i class="bi bi-trash"></i>
                            </button>
                          </form>
                        </th>
                        <td>
                          <?php echo e($item->visi); ?> <br>

                        </td>
                         <td>
                          <?php echo e($item->misi); ?> <br>

                        </td>
                        <td>
                            <i class="bi bi-instagram"></i>
                            <a href="https://www.instagram.com/<?php echo e($item->ig); ?>"><?php echo e($item->ig); ?></a> <br>
                            <i class="bi bi-facebook"></i>
                            <a href="https://web.facebook.com/<?php echo e($item->fb); ?>"><?php echo e($item->fb); ?></a> <br>
                            <i class="bi bi-linkedin"></i>
                            <a href="https://linkedin.com/in/<?php echo e($item->fb); ?>/"><?php echo e($item->linkedin); ?></a> 
                        </td>
                        
                        <td>
                          <a href="<?php echo e(asset('gambar/'.$item->gambar)); ?>" alt="" srcset="">
                          <?php echo e($item->gambar); ?>

                        </td>
                        <td> 
                          dibuat : <?php echo e($item->created_at); ?> <br> 
                          diperbaharui : <?php echo e($item->updated_at); ?>

                        </td>

                      </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <tr >
                        <td colspan='6' style="text-align: center;font-weight: 700">
                          <h2>
                            Data Kosong
    
                          </h2>
                        </td>
                      </tr>
                  <?php endif; ?>
                  
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SI_TI\resources\views/admin/profil/index.blade.php ENDPATH**/ ?>