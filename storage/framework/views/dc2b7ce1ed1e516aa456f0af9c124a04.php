<div>
    <div class="mb-3">
        <label class="form-label fw-bold">Meta Key</label>
        <p><?php echo e($metaProfile->metakey); ?></p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Judul</label>
        <p><?php echo e($metaProfile->title); ?></p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Deskripsi</label>
        <p><?php echo e($metaProfile->description ?? '-'); ?></p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Gambar</label>
        <div>
            <?php if($metaProfile->image): ?>
                <img src="<?php echo e(asset('storage/' . $metaProfile->image)); ?>" class="img-thumbnail" alt="Meta Profile Image"
                    style="max-width: 150px;">
            <?php else: ?>
                <span class="text-muted">Tidak ada gambar</span>
            <?php endif; ?>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Status</label>
        <p>
            <span class="badge <?php echo e($metaProfile->is_active ? 'bg-success' : 'bg-danger'); ?>">
                <?php echo e($metaProfile->is_active ? 'Aktif' : 'Tidak Aktif'); ?>

            </span>
        </p>
    </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
</div>
<?php /**PATH C:\xampp\htdocs\MetalurgiITDEL\resources\views/admin/metaprofile/read.blade.php ENDPATH**/ ?>