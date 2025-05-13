<div>
    <div class="mb-3">
        <label class="form-label fw-bold">Judul</label>
        <p><?php echo e($achievement->title); ?></p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Deskripsi</label>
        <p><?php echo e($achievement->description); ?></p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Penulis</label>
        <p><?php echo e($achievement->author ?? '-'); ?></p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Tanggal</label>
        <p><?php echo e($achievement->date ? $achievement->date->format('d-m-Y') : '-'); ?></p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Gambar</label>
        <div>
            <?php if($achievement->image): ?>
                <img src="<?php echo e(asset('storage/' . $achievement->image)); ?>" class="img-thumbnail" alt="Achievement Image"
                    style="max-width: 150px;">
            <?php else: ?>
                <span class="text-muted">Tidak ada gambar</span>
            <?php endif; ?>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">File</label>
        <div>
            <?php if($achievement->file): ?>
                <a href="<?php echo e(asset('storage/' . $achievement->file)); ?>" target="_blank">Lihat file</a>
            <?php else: ?>
                <span class="text-muted">Tidak ada file</span>
            <?php endif; ?>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Tipe</label>
        <p>
            <span
                class="badge <?php echo e($achievement->type == 'publikasi' ? 'bg-primary' : ($achievement->type == 'penelitian' ? 'bg-info' : 'bg-success')); ?>">
                <?php echo e($achievement->type); ?>

            </span>
        </p>
    </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
</div>
<?php /**PATH C:\xampp\htdocs\MetalurgiITDEL\resources\views/admin/achievement/read.blade.php ENDPATH**/ ?>