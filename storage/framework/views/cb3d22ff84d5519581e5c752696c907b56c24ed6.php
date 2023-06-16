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
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Kegiatan</h6>
                    <h2 class="mt-2">Kegiatan di Program Studi Teknik Informatika</h2>
                </div>
                <div class="row g-4">
                  
                  <?php $__empty_1 = true; $__currentLoopData = $kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  
                      <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                          <div class=" service-item  d-flex flex-column justify-content-center text-justify rounded">
                              
                              <div class="card-body">
                               
                                <img src="<?php echo e(asset('gambar/'.$item->gambar)); ?>" class="img-fluid" alt="foto-kegiatan">
                                <h5 class="mb-3"><?php echo e($item->judul); ?></h5>
                                <p style="
                                    overflow: hidden;
                                    max-width: 150ch;
                                    text-overflow: ellipsis;
                                    white-space: nowrap;
                                ">
                                    <?php echo e($item->deskripsi); ?>

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                </p>
                                    <a class="btn px-3 mt-auto mx-auto" href="<?php echo e(route('detail-kegiatan', $item->id)); ?>" >
                                        Read More
                                    </a>
                              </div>
                              
                          </div>
                      </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      
                  <?php endif; ?>
                    
                    
                </div>
            </div>
        </div>
        <!-- Service End -->
        

        <!-- Footer Start -->
        <?php echo $__env->make('landingPage.partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php echo $__env->make('landingPage.partial.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH D:\xampp\htdocs\SI_TI\resources\views/landingPage/kegiatan/index.blade.php ENDPATH**/ ?>