<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      
      <!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>
      
      <li class="nav-item " >
        <a class="nav-link <?php echo e(request()->is('data-mahasiswa/*') || request()->is('data-mahasiswa') ? '' : 'collapsed'); ?>" href="<?php echo e(route('data-mahasiswa.index')); ?>">
          <i class="bi bi-person"></i>
          <span>Mahasiswa</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('data-dosen/*') || request()->is('data-dosen') ? '' : 'collapsed'); ?>" href="<?php echo e(route('data-dosen.index')); ?>">
           <i class="bi bi-person"></i>
          <span>Dosen</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link nav-link <?php echo e(request()->is('data-kegiatan/*') || request()->is('data-kegiatan') ? '' : 'collapsed'); ?>" href="<?php echo e(route('data-kegiatan.index')); ?>">
          <i class="bi bi-calendar-event"></i>
          <span>Kegiatan</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link nav-link <?php echo e(request()->is('data-profil/*') || request()->is('data-profil') ? '' : 'collapsed'); ?>" href="<?php echo e(route('data-profil.index')); ?>">
          <i class="bi bi-calendar-event"></i>
          <span>Profil Prodi</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link nav-link <?php echo e(request()->is('data-tentang/*') || request()->is('data-tentang') ? '' : 'collapsed'); ?>" href="<?php echo e(route('data-tentang.index')); ?>">
          <i class="bi bi-calendar-event"></i>
          <span>Tentang Prodi</span>
        </a>
      </li><!-- End Contact Page Nav -->

      
      <!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(route('logout.post')); ?>">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

      
      <!-- End Error 404 Page Nav -->

      
      <!-- End Blank Page Nav -->

    </ul>

  </aside><?php /**PATH D:\xampp\htdocs\SI_TI\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>