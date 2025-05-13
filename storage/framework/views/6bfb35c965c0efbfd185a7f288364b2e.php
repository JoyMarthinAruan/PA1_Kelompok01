<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left Navbar Links -->
    <ul class="navbar-nav">
        <!-- Toggle Sidebar -->
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Logout -->
        <li class="nav-item">
            <a href="#" class="nav-link text-danger"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            <form id="logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
            </form>
        </li>
    </ul>
</nav>
<?php /**PATH C:\xampp\htdocs\MetalurgiITDEL\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>