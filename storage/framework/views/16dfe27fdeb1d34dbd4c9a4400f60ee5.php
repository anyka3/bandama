<div class="sidebar">
    <div class="text-center mb-3">
        <h4>DOCFLOW-BANDAMA</h4>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?> " href="<?php echo e(url('/')); ?>">
                <i class="fas fa-tachometer-alt"></i> Tableau de bord
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->routeIs('orders.create') ? 'active' : ''); ?>" href="<?php echo e(route('orders.create')); ?>">
                <i class="fas fa-plus"></i> Créer un ordre
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->routeIs('orders.index') ? 'active' : ''); ?>" href="<?php echo e(route('orders.index')); ?>">
                <i class="fas fa-list"></i> Liste des ordres
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-cogs"></i> Paramètres
            </a>
        </li>
    </ul>
</div>
<?php /**PATH C:\Projet\docflow\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>