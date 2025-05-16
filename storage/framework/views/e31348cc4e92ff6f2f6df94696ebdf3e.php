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
            <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">Semua Prestasi</li>
        </ol>
    </nav>

    <div class="container">
        <h1 class="my-4">Prestasi</h1>

        <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-4 shadow-sm">
                <div class="row no-gutters align-items-center">
                    <?php if($achievement->image): ?>
                        <div class="col-md-4">
                            <img src="<?php echo e(asset('storage/' . $achievement->image)); ?>" class="img-fluid p-3"
                                alt="<?php echo e($achievement->title); ?>">
                        </div>
                    <?php endif; ?>

                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($achievement->title); ?></h5>
                            <p class="mb-1 text-muted">
                                <strong>By:</strong> <?php echo e($achievement->author ?? 'Anonim'); ?>

                                &nbsp;&nbsp;
                                <strong>Date:</strong>
                                <?php echo e($achievement->date ? \Carbon\Carbon::parse($achievement->date)->translatedFormat('F Y') : '-'); ?>


                                <?php if($achievement->type): ?>
                                    &nbsp;&nbsp;
                                    <strong>Type:</strong> <?php echo e(ucfirst($achievement->type)); ?>

                                <?php endif; ?>

                                <?php if($achievement->file): ?>
                                    <a href="<?php echo e(asset('storage/' . $achievement->file)); ?>" class="ms-2" download
                                        title="Download">
                                        <i class="bi bi-download"></i>
                                    </a>
                                <?php endif; ?>
                            </p>
                            <p class="card-text"><?php echo e($achievement->description); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="d-flex justify-content-center">
            <?php echo e($achievements->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\OneDrive\ドキュメント\GitHub\PA1_Kelompok01\resources\views/achievements/achievement.blade.php ENDPATH**/ ?>