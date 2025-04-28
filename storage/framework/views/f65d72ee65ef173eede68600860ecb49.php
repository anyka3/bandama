<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="mb-4">Liste des ordres de paiement</h2>
    <?php if(session('success')): ?>
        <div class="alert alert-success mt-3">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

    <!-- Table des ordres de paiement -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom du client</th>
                <th scope="col">Numéro de compte</th>
                <th scope="col">Montant</th>
                <th scope="col">Bénéficiaire</th>
                <th scope="col">Statut</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($order->id); ?></th>
                    <td><?php echo e($order->client_name); ?></td>
                    <td><?php echo e($order->account_number); ?></td>
                    <td><?php echo e(number_format($order->amount, 2, ',', ' ')); ?> €</td>
                    <td><?php echo e($order->beneficiary_name); ?></td>
                    <td>
                        <?php if($order->status == 'pending'): ?>
                            <span class="badge bg-warning">En attente</span>
                        <?php elseif($order->status == 'confirmed'): ?>
                            <span class="badge bg-success">Confirmé</span>
                        <?php else: ?>
                            <span class="badge bg-secondary">Traité</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($order->status == 'pending'): ?>
                            <form action="<?php echo e(route('orders.validate', $order->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
                                <button type="submit" class="btn btn-primary btn-sm">Valider</button>
                            </form>
                        <?php else: ?>
                            <button class="btn btn-secondary btn-sm" disabled>Déjà validé</button>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Pagination si nécessaire -->
    <?php echo e($orders->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projet\docflow\resources\views/orders/index.blade.php ENDPATH**/ ?>