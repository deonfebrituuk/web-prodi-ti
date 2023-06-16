<div class="pagetitle">
    <h1><?php echo e($title); ?></h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Beranda</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(url( request()->segment(1) != ''  ? route(request()->segment(1).'.index') : route('dashboard.index') )); ?>"><?php echo e($page); ?></a></li>
        <li class="breadcrumb-item active"><?php echo e($title); ?></li>
    </ol>
    </nav>
</div><?php /**PATH D:\xampp\htdocs\SI_TI\resources\views/components/page-title.blade.php ENDPATH**/ ?>