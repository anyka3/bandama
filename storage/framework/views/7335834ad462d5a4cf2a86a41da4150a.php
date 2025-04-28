<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Notifications</h3>
        <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert <?php echo e($notification->status == 'confirmed' ? 'alert-success' : 'alert-danger'); ?>">
                <?php echo e($notification->data['message']); ?>

                <small class="text-muted">Ordre N°: <?php echo e($notification->data['order_id']); ?></small>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projet\docflow\resources\views/notifications/index.blade.php ENDPATH**/ ?>