<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="ml-auto navbar-nav gap-x-5">
        <li class="nav-item">
            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                <i class="fas fa-user"></i>
            </a>            
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" data-widget="logout" href="<?php echo e(route('logout')); ?>" role="button">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<?php echo $__env->make('components.modal-edit-user', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- /.navbar --><?php /**PATH C:\laragon\www\website-monitoring-bpn\resources\views/admin/header.blade.php ENDPATH**/ ?>