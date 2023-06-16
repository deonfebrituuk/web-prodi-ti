          <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">
                      Teknik<span class="fs-5">Informatika</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="<?php echo e(route('home')); ?> " class="nav-item nav-link <?php echo e(request()->is('home') ? 'active' : ''); ?> ">Home</a>
                        <a href="<?php echo e(route('profil')); ?>" class="nav-item nav-link <?php echo e(request()->is('profil') ? 'active' : ''); ?>">Profil</a>
                        <a href="<?php echo e(route('mahasiswa')); ?>" class="nav-item nav-link <?php echo e(request()->is('mahasiswa') ? 'active' : ''); ?>">Mahasiswa</a>
                        <a href="<?php echo e(route('dosen')); ?>" class="nav-item nav-link <?php echo e(request()->is('dosen') ? 'active' : ''); ?>">Dosen</a>
                        <a href="<?php echo e(route('kegiatan')); ?>" class="nav-item nav-link <?php echo e(request()->is('kegiatan') ? 'active' : ''); ?>">Kegiatan</a>
                        <a href="<?php echo e(route('login')); ?>" class="nav-item nav-link">Login</a>
                        
                        
                    </div>
                    
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn"><?php echo e($profil->visi); ?></h1>
                            <p class="text-white pb-3 animated zoomIn">
                                <?php echo e($profil->misi); ?>

                            </p>
                            
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div><?php /**PATH D:\xampp\htdocs\SI_TI\resources\views/landingPage/partial/navbar.blade.php ENDPATH**/ ?>