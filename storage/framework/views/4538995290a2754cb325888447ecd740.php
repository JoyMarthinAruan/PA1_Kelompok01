<form action="<?php echo e(route('admin.metaprofile.update', $metaProfile->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="mb-3">
        <label for="metakey" class="form-label">Meta Key</label>
        <input type="text" class="form-control" id="metakey" name="metakey"
            value="<?php echo e(old('metakey', $metaProfile->metakey)); ?>" required>
        <?php $__errorArgs = ['metakey'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" class="form-control" id="title" name="title"
            value="<?php echo e(old('title', $metaProfile->title)); ?>" required>
        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" name="description" rows="5"><?php echo e(old('description', $metaProfile->description)); ?></textarea>
        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Gambar</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
        <?php if($metaProfile->image): ?>
            <img src="<?php echo e(asset('storage/' . $metaProfile->image)); ?>" class="img-thumbnail mt-2"
                alt="Current Meta Profile Image">
        <?php endif; ?>
        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="mb-3">
        <label for="is_active" class="form-label">Status</label>
        <select class="form-control" id="is_active" name="is_active" required>
            <option value="1" <?php echo e(old('is_active', $metaProfile->is_active) == 1 ? 'selected' : ''); ?>>Aktif</option>
            <option value="0" <?php echo e(old('is_active', $metaProfile->is_active) == 0 ? 'selected' : ''); ?>>Tidak Aktif
            </option>
        </select>
        <?php $__errorArgs = ['is_active'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?php /**PATH C:\xampp\htdocs\MetalurgiITDEL\resources\views/admin/metaprofile/edit.blade.php ENDPATH**/ ?>