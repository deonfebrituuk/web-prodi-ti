  <script src="<?php echo e(asset ('NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js')); ?>"></script>
  <script src="<?php echo e(asset ('NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset ('NiceAdmin/assets/vendor/chart.js/chart.umd.js')); ?>"></script>
  <script src="<?php echo e(asset ('NiceAdmin/assets/vendor/echarts/echarts.min.js')); ?>"></script>
  <script src="<?php echo e(asset ('NiceAdmin/assets/vendor/quill/quill.min.js')); ?>"></script>
  <script src="<?php echo e(asset ('NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js')); ?>"></script>
  <script src="<?php echo e(asset ('NiceAdmin/assets/vendor/tinymce/tinymce.min.js')); ?>"></script>
  <script src="<?php echo e(asset ('NiceAdmin/assets/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset ('NiceAdmin/assets/js/main.js')); ?>"></script>

  <script>
    $(document).ready(function(){
        $('.wa').inputmask('(+99)-999-9999-99999');
        $('.email').inputmask({ alias: "email"});
        $('.ig').inputmask('@*{1,150}');
        $('.fb').inputmask('@*{1,150}');
    });
</script><?php /**PATH D:\xampp\htdocs\SI_TI\resources\views/admin/partials/script.blade.php ENDPATH**/ ?>