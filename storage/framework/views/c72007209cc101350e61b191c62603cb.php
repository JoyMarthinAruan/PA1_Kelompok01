<?php $__env->startSection('content'); ?>
    <div class="container all-news-page">
        <div class="breadcrumbs">
            <a href="#">Home</a> / Semua Berita
        </div>

        <div class="main-content">
            <div class="news-list">
                <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="news-item">
                        <div class="news-image-container">
                            <img src="<?php echo e(asset('storage/' . $item->image)); ?>" alt="<?php echo e($item->title); ?>" class="news-image">
                        </div>
                        <div class="news-details">
                            <a href="#">
                                <h3 class="news-title"><?php echo e($item->title); ?></h3>
                            </a>
                            <p class="news-excerpt">
                                <?php echo e(Str::limit($item->content, 300, '...')); ?>

                            </p>
                            <p class="news-excerpt">
                                <?php echo e(Str::limit($item->description, 400, '...')); ?>

                                <a href="<?php echo e(route('news1', $item->id)); ?>" class="read-more">Lihat Selengkapnya</a>
                            </p>


                            <div class="news-meta">
                                <span class="news-date"><i class="far fa-calendar-alt"></i>
                                    <?php echo e(\Carbon\Carbon::parse($item->date)->format('d F Y')); ?></span>
                                <span class="news-author"><i class="far fa-user"></i> <?php echo e($item->author); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-center">Belum ada berita.</p>
                <?php endif; ?>

                <?php echo e($news->links()); ?> 
            </div>

            <div class="sidebar">
                <h3>Rilis Berita</h3>
                <ul class="recent-news">
                    <?php $__currentLoopData = $recentNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="#"><strong><?php echo e($recent->title); ?></strong></a>
                            <span class="news-meta">
                                <i class="far fa-calendar-alt"></i>
                                <?php echo e(\Carbon\Carbon::parse($recent->date)->format('d F Y')); ?>

                                <i class="far fa-user"></i> <?php echo e($recent->author); ?>

                            </span>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- More recent news items -->
                </ul>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MetalurgiITDEL\resources\views/news.blade.php ENDPATH**/ ?>