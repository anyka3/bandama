<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Créer un ordre de paiement</h2>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    <form action="<?php echo e(route('orders.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="client_name">Nom du client</label>
            <input type="text" name="client_name" id="client_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="account_number">Numéro de compte</label>
            <input type="text" name="account_number" id="account_number" class="form-control">
        </div>
        <div class="form-group">
            <label for="amount">Montant</label>
            <input type="number" step="0.01" name="amount" id="amount" class="form-control">
        </div>
        <div class="form-group">
            <label for="beneficiary_name">Nom du bénéficiaire</label>
            <input type="text" name="beneficiary_name" id="beneficiary_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="documents">Documents justificatifs</label>
            <input type="file" name="documents[]" id="documents" class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Créer l'ordre</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projet\docflow\resources\views/orders/create.blade.php ENDPATH**/ ?>