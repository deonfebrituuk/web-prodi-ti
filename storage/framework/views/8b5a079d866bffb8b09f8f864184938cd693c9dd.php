<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('landingPage.partial.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <?php echo $__env->make('landingPage.partial.spinner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <?php echo $__env->make('landingPage.partial.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">Data</h6>
                            <h2 class="mt-2">Daftar Mahasiswa</h2>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="row">
                  <div class="col-lg-12">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Datatables</h5>
                              <p>Daftar Mahasiswa yang terdaftar di program studi teknik informatika sejak tahun 2016

                              <!-- Table with stripped rows -->
                              <table class="table datatable">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">opsi</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Time Stamps</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $__empty_1 = true; $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                      <tr>
                                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                                        <th scope="row">
                                          <form action="<?php echo e(route('data-mahasiswa.destroy', $item->id)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <a href="<?php echo e(route('data-mahasiswa.edit', $item->id)); ?>" class="btn btn-warning">
                                              <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger">
                                              <i class="bi bi-trash"></i>
                                            </button>
                                          </form>
                                        </th>
                                        <td><?php echo e($item->nim); ?></td>
                                        <td><?php echo e($item->nama); ?></td>
                                        <td><?php echo e($item->status); ?></td>
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
                                        <td colspan='7' style="text-align: center;font-weight: 700">
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
            </div>
        </div>
        <!-- About End -->


        



        <!-- Footer Start -->
        <?php echo $__env->make('landingPage.partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php echo $__env->make('landingPage.partial.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH D:\xampp\htdocs\SI_TI\resources\views/landingPage/mahasiswa.blade.php ENDPATH**/ ?>