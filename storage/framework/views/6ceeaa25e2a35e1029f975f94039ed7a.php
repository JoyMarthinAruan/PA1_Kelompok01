<form action="<?php echo e(route('admin.curriculum.update', $curriculum->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="mb-3">
        <label for="course_code" class="form-label">Kode Mata Kuliah</label>
        <input type="text" class="form-control" id="course_code" name="course_code"
            value="<?php echo e(old('course_code', $curriculum->course_code)); ?>" required>
        <?php $__errorArgs = ['course_code'];
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
        <label for="course_name" class="form-label">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="course_name" name="course_name"
            value="<?php echo e(old('course_name', $curriculum->course_name)); ?>" required>
        <?php $__errorArgs = ['course_name'];
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
        <label for="semester" class="form-label">Semester</label>
        <input type="text" class="form-control" id="semester" name="semester"
            value="<?php echo e(old('semester', $curriculum->semester)); ?>" required>
        <?php $__errorArgs = ['semester'];
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
        <label for="credits" class="form-label">Credits (SKS)</label>
        <input type="number" class="form-control" id="credits" name="credits"
            value="<?php echo e(old('credits', $curriculum->credits)); ?>" required min="1">
        <?php $__errorArgs = ['credits'];
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
        <label for="status" class="form-label">Status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="aktif" <?php echo e(old('status', $curriculum->status) == 'aktif' ? 'selected' : ''); ?>>Aktif</option>
            <option value="tidak" <?php echo e(old('status', $curriculum->status) == 'tidak' ? 'selected' : ''); ?>>Tidak Aktif
            </option>
        </select>
        <?php $__errorArgs = ['status'];
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
<?php /**PATH C:\xampp\htdocs\MetalurgiITDEL\resources\views/admin/curriculum/edit.blade.php ENDPATH**/ ?>