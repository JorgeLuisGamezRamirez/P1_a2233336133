 

<?php $__env->startSection('title', 'Bienvenida'); ?>

<?php $__env->startSection('content'); ?>
    <div class="alert alert-success text-center" role="alert">
        <h1 class="display-4">Bienvenido a mi primera aplicación de Laravel</h1>
        <p class="lead">Esta es una ruta estática que utiliza Bootstrap para una mejor presentación.</p>
        <hr>
        <p>¡Todo el código de la tarea ha sido implementado correctamente!</p>
    </div>
    <div class="text-center">
        <a href="/saludo/TuNombre" class="btn btn-primary btn-lg">Probar Ruta Dinámica</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Jorge Gamez\P1_a2233336133\resources\views/bienvenida.blade.php ENDPATH**/ ?>