<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Bienvenue, <?php echo e(Auth::user()->name); ?> !</h1>
    <p>Ceci est votre tableau de bord.</p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projet\docflow\resources\views/dashboard.blade.php ENDPATH**/ ?>