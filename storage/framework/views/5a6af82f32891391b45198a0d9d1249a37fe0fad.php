

<?php $__env->startSection('title','Cursos' .  $curso->name); ?>

<?php $__env->startSection('content'); ?>

<<h1>Bienvenido al curso: <?php echo e($curso->name); ?></h1>
<a href="<?php echo e(route('cursos.index')); ?>">Volver a Cursos</a>
<br>
<a href="<?php echo e(route('cursos.edit', $curso)); ?>">Editar Cursos</a>

<p><strong>Categoria: </strong><?php echo e($curso->categoria); ?></p>
<p><?php echo e($curso->descripcion); ?></p>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/cursos/show.blade.php ENDPATH**/ ?>