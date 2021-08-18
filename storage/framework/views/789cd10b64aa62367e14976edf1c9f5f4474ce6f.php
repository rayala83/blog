

<?php $__env->startSection('title','Cursos edit'); ?>

<?php $__env->startSection('content'); ?>

<h1>Editar un Curso</h1>

<form action = "<?php echo e(route('cursos.store')); ?>" method="POST">

    <?php echo csrf_field(); ?>

    <label>
        Nombre:
        <br>
        <input type = 'text'  name = 'name' values= "<?php echo e($curso->name); ?>">
    </label>
    
    <br>
    <label>
        Descripcion:
        <br>
        <textarea name = 'descripcion'  rows = '5'><?php echo e($curso->descripcion); ?></textarea>
    </label>
    
    <br>
    <label>
        Categoria:
        <br>
        <input type = 'text'  name = 'categoria' values= "<?php echo e($curso->categoria); ?>">
    </label>
    <br>
    <button type="submit"> Actualizar Formulario</button>

            
       

</form>    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/cursos/edit.blade.php ENDPATH**/ ?>