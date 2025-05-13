<?php $__env->startSection('content'); ?>
    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
        }

        .table th {
            background-color: #f8f9fa;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #e9ecef;
        }

        .table td {
            vertical-align: middle;
            font-size: 0.9rem;
        }

        .table tr:hover {
            background-color: #f1f3f5;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-warning,
        .btn-danger,
        .btn-info {
            border-radius: 8px;
            padding: 6px 12px;
            font-size: 0.85rem;
        }

        .img-thumbnail {
            border-radius: 8px;
            max-width: 80px;
            object-fit: cover;
        }

        .badge {
            padding: 6px 12px;
            border-radius: 12px;
            font-weight: 500;
        }

        .modal-content {
            border-radius: 12px;
            border: none;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            border-bottom: none;
            padding: 20px 24px;
        }

        .modal-title {
            font-weight: 600;
            font-size: 1.25rem;
        }

        .modal-body {
            padding: 24px;
        }

        .title-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .table-responsive {
                font-size: 0.85rem;
            }

            .btn-sm {
                padding: 4px 8px;
                font-size: 0.8rem;
            }
        }
    </style>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="mb-3">
                    <h2 class="mb-0 fw-bold text-dark">Kolaborasi</h2>
                    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal"
                        data-bs-target="#modal-collaborate">
                        <i class="fas fa-plus me-2"></i>Tambah Kolaborasi
                    </button>
                </div>

                <div class="card">
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered text-center" id="collaborateTable">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 20%;">Nama Institusi</th>
                                        <th scope="col" style="width: 25%;">Deskripsi</th>
                                        <th scope="col" style="width: 15%;">Tanggal</th>
                                        <th scope="col" style="width: 10%;">Logo</th>
                                        <th scope="col" style="width: 10%;">Aktif</th>
                                        <th scope="col" style="width: 20%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $collaborates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collaborate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($collaborate->institution_name); ?></td>
                                            <td><?php echo e(Str::limit($collaborate->institution_description, 100)); ?></td>
                                            <td><?php echo e($collaborate->date ? $collaborate->date->format('d-m-Y') : '-'); ?></td>
                                            <td>
                                                <?php if($collaborate->logo): ?>
                                                    <img src="<?php echo e(asset('storage/' . $collaborate->logo)); ?>"
                                                        class="img-thumbnail" alt="Collaborate Logo">
                                                <?php else: ?>
                                                    <span class="text-muted">Tidak ada logo</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge <?php echo e($collaborate->is_active ? 'bg-success' : 'bg-danger'); ?>">
                                                    <?php echo e($collaborate->is_active ? 'Aktif' : 'Tidak Aktif'); ?>

                                                </span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#modal-read-collaborate-<?php echo e($collaborate->id); ?>">
                                                    <i class="fas fa-eye"></i> Lihat
                                                </button>
                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#modal-edit-collaborate-<?php echo e($collaborate->id); ?>">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                                <form action="<?php echo e(route('admin.collaborate.destroy', $collaborate->id)); ?>"
                                                    method="POST" class="d-inline">
                                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- MODAL READ COLLABORATE -->
                                        <div class="modal fade" id="modal-read-collaborate-<?php echo e($collaborate->id); ?>"
                                            tabindex="-1"
                                            aria-labelledby="modal-read-collaborateLabel-<?php echo e($collaborate->id); ?>"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Detail Kolaborasi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php echo $__env->make('admin.collaborate.read', [
                                                            'collaborate' => $collaborate,
                                                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- MODAL EDIT COLLABORATE -->
                                        <div class="modal fade" id="modal-edit-collaborate-<?php echo e($collaborate->id); ?>"
                                            tabindex="-1"
                                            aria-labelledby="modal-edit-collaborateLabel-<?php echo e($collaborate->id); ?>"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Kolaborasi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php echo $__env->make('admin.collaborate.edit', [
                                                            'collaborate' => $collaborate,
                                                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL ADD COLLABORATE -->
    <div class="modal fade" id="modal-collaborate" tabindex="-1" aria-labelledby="modal-collaborateLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kolaborasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $__env->make('admin.collaborate.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <!-- Include DataTables and SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTables without search and pagination
            $('#collaborateTable').DataTable({
                responsive: true,
                pageLength: 10,
                searching: false,
                lengthChange: false,
                paging: false,
                info: false
            });

            // Flash message handling
            <?php if(session('success')): ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '<?php echo e(session('success')); ?>',
                    timer: 2500,
                    showConfirmButton: false
                });
            <?php endif; ?>

            <?php if(session('error')): ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: '<?php echo e(session('error')); ?>',
                    timer: 2500,
                    showConfirmButton: false
                });
            <?php endif; ?>

            // Custom delete confirmation
            $('.delete-btn').on('click', function(e) {
                e.preventDefault();
                const form = $(this).closest('form');
                Swal.fire({
                    title: 'Hapus Kolaborasi?',
                    text: "Tindakan ini tidak dapat dibatalkan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MetalurgiITDEL\resources\views/admin/collaborate/index.blade.php ENDPATH**/ ?>