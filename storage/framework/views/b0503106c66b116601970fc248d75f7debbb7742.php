

<?php $__env->startSection('title','Cursos create'); ?>

<?php $__env->startSection('content'); ?>

<h1>En esta pagina se crearan cursos</h1>

<form action = "<?php echo e(route('cursos.store')); ?>" method="POST">

    <?php echo csrf_field(); ?>

    <label>
        Nombre:
        <br>
        <input type = 'text'  name = 'name'>
    </label>
    
    <br>
    <label>
        Descripcion:
        <br>
        <textarea name = 'descripcion'  rows = '5'></textarea>
    </label>
    
    <br>
    <label>
        Categoria:
        <br>
        <input type = 'text'  name = 'categoria'>
    </label>
    <br>
    <button type="submit"> Enviar Formulario</button>

            
       

</form>    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/cursos/create.blade.php ENDPATH**/ ?>