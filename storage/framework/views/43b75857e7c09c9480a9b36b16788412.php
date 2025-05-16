<?php $__env->startSection('content'); ?>
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-transparent px-0">
            <li class="breadcrumb-item">
                <a href="<?php echo e(url('/')); ?>" class="text-decoration-none text-muted">
                    <i class="bi bi-house-door"></i> Beranda
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?php echo e(url('/achievements')); ?>" class="text-decoration-none text-muted">Prestasi</a>
            </li>
            <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">Semua Publikasi</li>
        </ol>
    </nav>

    <div class="container">
        <h1 class="my-4">Publikasi</h1>

        <?php $__currentLoopData = $publications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-4 shadow-sm border-0">

                <div class="row no-gutters align-items-center">
                    <?php if($pub->image): ?>
                        <div class="col-md-4">
                            <img src="<?php echo e(asset('storage/' . $pub->image)); ?>" class="img-fluid p-3"
                                alt="<?php echo e($pub->title); ?>">
                        </div>
                    <?php endif; ?>

                    <div class="col-md-<?php echo e($pub->image ? '8' : '12'); ?>">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase" style="color: #1976d2;"><?php echo e($pub->title); ?></h5>
                            <p class="mb-1 text-muted">
                                <strong>By:</strong> <?php echo e($pub->author ?? 'Anonim'); ?>


                                <strong>Date:</strong>
                                <?php echo e($pub->date ? \Carbon\Carbon::parse($pub->date)->translatedFormat('F Y') : '-'); ?>


                                <?php if($pub->type): ?>
                                    <strong>Type:</strong> <?php echo e($pub->type); ?>

                                <?php endif; ?>

                                <?php if($pub->file): ?>
                                    <a href="<?php echo e(asset('storage/' . $pub->file)); ?>" class="ms-2" download title="Download">
                                        <i class="bi bi-download"></i>
                                    </a>
                                <?php endif; ?>
                            </p>
                            <p class="card-text" style="text-align: justify;"><?php echo e($pub->description); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="d-flex justify-content-center">
            <?php echo e($publications->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\OneDrive\ドキュメント\GitHub\PA1_Kelompok01\resources\views/achievements/publication.blade.php ENDPATH**/ ?>