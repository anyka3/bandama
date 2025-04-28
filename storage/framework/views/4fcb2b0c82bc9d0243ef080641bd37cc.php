<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Logo / Titre -->
        <a class="navbar-brand" href="#">DOCFLOW- BANDAMA</a>

        <!-- Barre de navigation -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Notifications -->
                <li class="nav-item">
                    <a class="nav-link position-relative" href="<?php echo e(route('notifications.index')); ?>">
                        <i class="fas fa-bell"></i>
                        <span class="badge bg-danger position-absolute top-0 start-100 translate-middle p-1 rounded-circle">
                            <?php echo e(auth()->user()->unreadNotifications->count()); ?>

                        </span>
                    </a>
                </li>

                <!-- Avatar de l'utilisateur -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> <?php echo e(Auth::user()->name); ?>

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Projet\docflow\resources\views/partials/nav.blade.php ENDPATH**/ ?>