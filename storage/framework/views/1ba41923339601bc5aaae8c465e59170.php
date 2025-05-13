<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #343A40;">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="brand-link d-flex align-items-center p-3"
        style="text-decoration: none;">
        <img src="<?php echo e(asset('adminlte/dist/img/del.jpg')); ?>" alt="IT Del Logo" class="brand-image elevation-3"
            style="opacity: .8; width: 40px; height: auto; border-radius: 0;">
        <span class="brand-text font-weight-light ml-2" style="font-size: 1.2rem; font-weight: bold; color: white;">IT
            Del</span>
    </a>

    <!-- Sidebar Search -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?php echo e(route('admin.dashboard')); ?>"
                    class="nav-link <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('admin.news.index')); ?>"
                    class="nav-link <?php echo e(request()->routeIs('admin.news.*') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>Berita Terkini</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('admin.testimonial.index')); ?>"
                    class="nav-link <?php echo e(request()->routeIs('admin.testimonial.*') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comment-alt"></i>
                    <p>Testimoni</p>
                </a>
            </li>
        </ul>
    </nav>
</aside>
<?php /**PATH C:\xampp\htdocs\MetalurgiITDEL\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>