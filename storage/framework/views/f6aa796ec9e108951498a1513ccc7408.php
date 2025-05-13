<?php $__env->startSection('content'); ?>
    <div class="news-detail-page">
        <div class="image-container">
            <img src="<?php echo e(asset('storage/' . $newsItem->image)); ?>" alt="<?php echo e($newsItem->title); ?>">
        </div>

        <div class="title-overlay">
            <h1><?php echo e($newsItem->title); ?></h1>
            <p><?php echo e($newsItem->description ?? 'Deskripsi tidak ditemukan'); ?></p>

        </div>

        <div class="content">
            <?php echo $newsItem->content; ?>

        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MetalurgiITDEL\resources\views/news1.blade.php ENDPATH**/ ?>