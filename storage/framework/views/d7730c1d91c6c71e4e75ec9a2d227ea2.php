<?php $__env->startSection('content'); ?>
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-transparent px-0">
            <li class="breadcrumb-item">
                <a href="<?php echo e(url('/')); ?>" class="text-decoration-none text-muted">
                    <i class="bi bi-house-door"></i> Beranda
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?php echo e(url('/metaprofile')); ?>" class="text-decoration-none text-muted">Profil</a>
            </li>
            <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">Kurikulum</li>
        </ol>
    </nav>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\OneDrive\ドキュメント\GitHub\PA1_Kelompok01\resources\views/curriculum.blade.php ENDPATH**/ ?>