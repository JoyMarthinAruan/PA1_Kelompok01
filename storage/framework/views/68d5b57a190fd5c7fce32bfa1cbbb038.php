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

    <div class="container">
        <div class="row">
            <!-- Row 1: Semester 1 and 2 -->
            <div class="col-md-6 mb-4">
                <h3 class="text-center mb-3">SEMESTER 1</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead
                            style="background-color: #f8f9fa; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; border-bottom: 2px solid #e9ecef;">
                            <tr>
                                <th class="text-center">Kode Mata Kuliah</th>
                                <th class="text-center">Nama Mata Kuliah</th>
                                <th class="text-center">SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $semester1 = $curriculums->where('semester', 1);
                            ?>
                            <?php $__empty_1 = true; $__currentLoopData = $semester1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curriculum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($curriculum->course_code); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->course_name); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->sks); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data untuk Semester 1.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h3 class="text-center mb-3">SEMESTER 2</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead
                            style="background-color: #f8f9fa; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; border-bottom: 2px solid #e9ecef;">
                            <tr>
                                <th class="text-center">Kode Mata Kuliah</th>
                                <th class="text-center">Nama Mata Kuliah</th>
                                <th class="text-center">SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $semester2 = $curriculums->where('semester', 2);
                            ?>
                            <?php $__empty_1 = true; $__currentLoopData = $semester2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curriculum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($curriculum->course_code); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->course_name); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->sks); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data untuk Semester 2.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Row 2: Semester 3 and 4 -->
            <div class="col-md-6 mb-4">
                <h3 class="text-center mb-3">SEMESTER 3</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead
                            style="background-color: #f8f9fa; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; border-bottom: 2px solid #e9ecef;">
                            <tr>
                                <th class="text-center">Kode Mata Kuliah</th>
                                <th class="text-center">Nama Mata Kuliah</th>
                                <th class="text-center">SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $semester3 = $curriculums->where('semester', 3);
                            ?>
                            <?php $__empty_1 = true; $__currentLoopData = $semester3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curriculum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($curriculum->course_code); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->course_name); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->sks); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data untuk Semester 3.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="md-6 mb-4">
                <h3 class="text-center mb-3">SEMESTER 4</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead
                            style="background-color: #f8f9fa; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; border-bottom: 2px solid #e9ecef;">
                            <tr>
                                <th class="text-center">Kode Mata Kuliah</th>
                                <th class="text-center">Nama Mata Kuliah</th>
                                <th class="text-center">SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $semester4 = $curriculums->where('semester', 4);
                            ?>
                            <?php $__empty_1 = true; $__currentLoopData = $semester4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curriculum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($curriculum->course_code); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->course_name); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->sks); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data untuk Semester 4.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Row 3: Semester 5 and 6 -->
            <div class="col-md-6 mb-4">
                <h3 class="text-center mb-3">SEMESTER 5</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead
                            style="background-color: #f8f9fa; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; border-bottom: 2px solid #e9ecef;">
                            <tr>
                                <th class="text-center">Kode Mata Kuliah</th>
                                <th class="text-center">Nama Mata Kuliah</th>
                                <th class="text-center">SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $semester5 = $curriculums->where('semester', 5);
                            ?>
                            <?php $__empty_1 = true; $__currentLoopData = $semester5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curriculum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($curriculum->course_code); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->course_name); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->sks); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data untuk Semester 5.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h3 class="text-center mb-3">SEMESTER 6</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead
                            style="background-color: #f8f9fa; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; border-bottom: 2px solid #e9ecef;">
                            <tr>
                                <th class="text-center">Kode Mata Kuliah</th>
                                <th class="text-center">Nama Mata Kuliah</th>
                                <th class="text-center">SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $semester6 = $curriculums->where('semester', 6);
                            ?>
                            <?php $__empty_1 = true; $__currentLoopData = $semester6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curriculum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($curriculum->course_code); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->course_name); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->sks); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data untuk Semester 6.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Row 4: Semester 7 and 8 -->
            <div class="col-md-6 mb-4">
                <h3 class="text-center mb-3">SEMESTER 7</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead
                            style="background-color: #f8f9fa; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; border-bottom: 2px solid #e9ecef;">
                            <tr>
                                <th class="text-center">Kode Mata Kuliah</th>
                                <th class="text-center">Nama Mata Kuliah</th>
                                <th class="text-center">SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $semester7 = $curriculums->where('semester', 7);
                            ?>
                            <?php $__empty_1 = true; $__currentLoopData = $semester7; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curriculum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($curriculum->course_code); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->course_name); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->sks); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data untuk Semester 7.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h3 class="text-center mb-3">SEMESTER 8</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead
                            style="background-color: #f8f9fa; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; border-bottom: 2px solid #e9ecef;">
                            <tr>
                                <th class="text-center">Kode Mata Kuliah</th>
                                <th class="text-center">Nama Mata Kuliah</th>
                                <th class="text-center">SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $semester8 = $curriculums->where('semester', 8);
                            ?>
                            <?php $__empty_1 = true; $__currentLoopData = $semester8; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curriculum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($curriculum->course_code); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->course_name); ?></td>
                                    <td class="text-center"><?php echo e($curriculum->sks); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data untuk Semester 8.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MetalurgiITDEL\resources\views/curriculum.blade.php ENDPATH**/ ?>