

<?php $__env->startSection('title','Cursos' .  $curso); ?>

<?php $__env->startSection('content'); ?>

<<h1>Bienvenido al curso: <?php echo e($curso); ?></h1>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\blog\resources\views/cursos/show.blade.php ENDPATH**/ ?>