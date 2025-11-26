 

<?php $__env->startSection('title', 'Saludo Personalizado'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-body text-center">
            <h1 class="card-title text-primary display-3">Hola, <?php echo e($nombre); ?></h1>
            <p class="card-text fs-5 mt-4">
                ¡Gracias por visitar nuestra página! Este saludo fue generado
                dinámicamente usando el parámetro de la URL.
            </p>
        </div>
        <div class="card-footer text-center">
             <a href="/bienvenida" class="btn btn-outline-secondary">Regresar a Bienvenida</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Jorge Gamez\P1_a2233336133\resources\views/saludo.blade.php ENDPATH**/ ?>