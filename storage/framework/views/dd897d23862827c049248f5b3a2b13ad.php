<form action="<?php echo e(route('admin.laboratory.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="name" class="form-label">Nama Laboratorium</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
        <?php $__errorArgs = ['name'];
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
        <textarea class="form-control" id="description" name="description" rows="5"><?php echo e(old('description')); ?></textarea>
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
        <label for="academic_days" class="form-label">Hari Akademik</label>
        <select class="form-control" id="academic_days" name="academic_days[]" multiple>
            <option value="Monday" <?php echo e(in_array('Monday', old('academic_days', [])) ? 'selected' : ''); ?>>Senin</option>
            <option value="Tuesday" <?php echo e(in_array('Tuesday', old('academic_days', [])) ? 'selected' : ''); ?>>Selasa
            </option>
            <option value="Wednesday" <?php echo e(in_array('Wednesday', old('academic_days', [])) ? 'selected' : ''); ?>>Rabu
            </option>
            <option value="Thursday" <?php echo e(in_array('Thursday', old('academic_days', [])) ? 'selected' : ''); ?>>Kamis
            </option>
            <option value="Friday" <?php echo e(in_array('Friday', old('academic_days', [])) ? 'selected' : ''); ?>>Jumat</option>
            <option value="Saturday" <?php echo e(in_array('Saturday', old('academic_days', [])) ? 'selected' : ''); ?>>Sabtu
            </option>
            <option value="Sunday" <?php echo e(in_array('Sunday', old('academic_days', [])) ? 'selected' : ''); ?>>Minggu</option>
        </select>
        <?php $__errorArgs = ['academic_days'];
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
        <label for="academic_hours" class="form-label">Jam Akademik</label>
        <input type="text" class="form-control" id="academic_hours" name="academic_hours"
            value="<?php echo e(old('academic_hours')); ?>" placeholder="Contoh: 08:00-16:00">
        <?php $__errorArgs = ['academic_hours'];
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
        <label for="collaborative_hours" class="form-label">Jam Kolaborasi</label>
        <input type="text" class="form-control" id="collaborative_hours" name="collaborative_hours"
            value="<?php echo e(old('collaborative_hours')); ?>" placeholder="Contoh: 16:00-18:00">
        <?php $__errorArgs = ['collaborative_hours'];
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
        <label for="images" class="form-label">Gambar (Maksimum 5)</label>
        <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple>
        <small class="text-muted">Pilih hingga 5 gambar (JPEG/PNG/JPG/GIF, maks 2MB per gambar).</small>
        <?php $__errorArgs = ['images'];
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
<?php /**PATH C:\xampp\htdocs\MetalurgiITDEL\resources\views/admin/laboratory/create.blade.php ENDPATH**/ ?>