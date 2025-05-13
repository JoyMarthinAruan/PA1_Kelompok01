<form action="<?php echo e(route('admin.testimonial.update', $testimonial->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group mb-3">
        <label for="name" class="form-label">Nama <span class="text-danger">*</span></label>
        <input type="text" name="name" id="name-edit-<?php echo e($testimonial->id); ?>"
            class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name', $testimonial->name)); ?>"
            required>
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group mb-3">
        <label for="student" class="form-label">Status <span class="text-danger">*</span></label>
        <input type="text" name="student" id="student-edit-<?php echo e($testimonial->id); ?>"
            class="form-control <?php $__errorArgs = ['student'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            value="<?php echo e(old('student', $testimonial->student)); ?>" required>
        <small class="text-muted">Contoh: Siswa Kelas X, Alumni 2022, Orang Tua Siswa, dll.</small>
        <?php $__errorArgs = ['student'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group mb-3">
        <label for="content" class="form-label">Isi Testimoni <span class="text-danger">*</span></label>
        <textarea name="content" id="content-edit-<?php echo e($testimonial->id); ?>" rows="4"
            class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required><?php echo e(old('content', $testimonial->content)); ?></textarea>
        <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group mb-3">
        <label for="image" class="form-label">Foto</label>
        <input type="file" name="image" id="image-edit-<?php echo e($testimonial->id); ?>"
            class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" accept="image/*">
        <small class="text-muted">Format: jpg, jpeg, png (Maks. 2MB). Biarkan kosong jika tidak ingin mengubah
            foto.</small>
        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <?php if($testimonial->image): ?>
            <div class="mt-2">
                <img src="<?php echo e(asset('storage/' . $testimonial->image)); ?>" alt="Current Image" class="img-thumbnail"
                    id="current-image-<?php echo e($testimonial->id); ?>" style="max-height: 200px">
                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" name="remove_image"
                        id="remove-image-<?php echo e($testimonial->id); ?>" value="1">
                    <label class="form-check-label" for="remove-image-<?php echo e($testimonial->id); ?>">
                        Hapus foto
                    </label>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div class="form-group mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="is_active" id="is-active-edit-<?php echo e($testimonial->id); ?>"
                value="1" <?php echo e(old('is_active', $testimonial->is_active) ? 'checked' : ''); ?>>
            <label class="form-check-label" for="is-active-edit-<?php echo e($testimonial->id); ?>">
                Aktif
            </label>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </div>
</form>

<?php $__env->startPush('scripts'); ?>
    <script>
        // Preview image before upload for edit form
        document.getElementById('image-edit-<?php echo e($testimonial->id); ?>').addEventListener('change', function(e) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const currentImage = document.getElementById('current-image-<?php echo e($testimonial->id); ?>');
                if (currentImage) {
                    currentImage.src = event.target.result;
                } else {
                    const preview = document.createElement('img');
                    preview.id = 'preview-edit-<?php echo e($testimonial->id); ?>';
                    preview.src = event.target.result;
                    preview.classList.add('img-thumbnail', 'mt-2', 'mb-2');
                    preview.style.maxHeight = '200px';
                    document.getElementById('image-edit-<?php echo e($testimonial->id); ?>').parentNode.appendChild(
                        preview);
                }

                // Uncheck the remove image checkbox if it exists and is checked
                const removeCheckbox = document.getElementById('remove-image-<?php echo e($testimonial->id); ?>');
                if (removeCheckbox && removeCheckbox.checked) {
                    removeCheckbox.checked = false;
                }
            }
            reader.readAsDataURL(e.target.files[0]);
        });

        // Handle remove image checkbox
        const removeCheckbox = document.getElementById('remove-image-<?php echo e($testimonial->id); ?>');
        if (removeCheckbox) {
            removeCheckbox.addEventListener('change', function() {
                const currentImage = document.getElementById('current-image-<?php echo e($testimonial->id); ?>');
                if (this.checked && currentImage) {
                    currentImage.style.opacity = '0.3';
                } else {
                    currentImage.style.opacity = '1';
                }

                // Clear file input if remove checkbox is checked
                if (this.checked) {
                    document.getElementById('image-edit-<?php echo e($testimonial->id); ?>').value = '';
                }
            });
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\MetalurgiITDEL\resources\views/admin/testimonial/edit.blade.php ENDPATH**/ ?>