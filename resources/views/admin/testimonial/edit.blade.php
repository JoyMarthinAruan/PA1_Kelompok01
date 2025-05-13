<form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label for="name" class="form-label">Nama <span class="text-danger">*</span></label>
        <input type="text" name="name" id="name-edit-{{ $testimonial->id }}"
            class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $testimonial->name) }}"
            required>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="student" class="form-label">Status <span class="text-danger">*</span></label>
        <input type="text" name="student" id="student-edit-{{ $testimonial->id }}"
            class="form-control @error('student') is-invalid @enderror"
            value="{{ old('student', $testimonial->student) }}" required>
        <small class="text-muted">Contoh: Siswa Kelas X, Alumni 2022, Orang Tua Siswa, dll.</small>
        @error('student')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="content" class="form-label">Isi Testimoni <span class="text-danger">*</span></label>
        <textarea name="content" id="content-edit-{{ $testimonial->id }}" rows="4"
            class="form-control @error('content') is-invalid @enderror" required>{{ old('content', $testimonial->content) }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="image" class="form-label">Foto</label>
        <input type="file" name="image" id="image-edit-{{ $testimonial->id }}"
            class="form-control @error('image') is-invalid @enderror" accept="image/*">
        <small class="text-muted">Format: jpg, jpeg, png (Maks. 2MB). Biarkan kosong jika tidak ingin mengubah
            foto.</small>
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        @if ($testimonial->image)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Current Image" class="img-thumbnail"
                    id="current-image-{{ $testimonial->id }}" style="max-height: 200px">
                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" name="remove_image"
                        id="remove-image-{{ $testimonial->id }}" value="1">
                    <label class="form-check-label" for="remove-image-{{ $testimonial->id }}">
                        Hapus foto
                    </label>
                </div>
            </div>
        @endif
    </div>

    <div class="form-group mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="is_active" id="is-active-edit-{{ $testimonial->id }}"
                value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}>
            <label class="form-check-label" for="is-active-edit-{{ $testimonial->id }}">
                Aktif
            </label>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </div>
</form>

@push('scripts')
    <script>
        // Preview image before upload for edit form
        document.getElementById('image-edit-{{ $testimonial->id }}').addEventListener('change', function(e) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const currentImage = document.getElementById('current-image-{{ $testimonial->id }}');
                if (currentImage) {
                    currentImage.src = event.target.result;
                } else {
                    const preview = document.createElement('img');
                    preview.id = 'preview-edit-{{ $testimonial->id }}';
                    preview.src = event.target.result;
                    preview.classList.add('img-thumbnail', 'mt-2', 'mb-2');
                    preview.style.maxHeight = '200px';
                    document.getElementById('image-edit-{{ $testimonial->id }}').parentNode.appendChild(
                        preview);
                }

                // Uncheck the remove image checkbox if it exists and is checked
                const removeCheckbox = document.getElementById('remove-image-{{ $testimonial->id }}');
                if (removeCheckbox && removeCheckbox.checked) {
                    removeCheckbox.checked = false;
                }
            }
            reader.readAsDataURL(e.target.files[0]);
        });

        // Handle remove image checkbox
        const removeCheckbox = document.getElementById('remove-image-{{ $testimonial->id }}');
        if (removeCheckbox) {
            removeCheckbox.addEventListener('change', function() {
                const currentImage = document.getElementById('current-image-{{ $testimonial->id }}');
                if (this.checked && currentImage) {
                    currentImage.style.opacity = '0.3';
                } else {
                    currentImage.style.opacity = '1';
                }

                // Clear file input if remove checkbox is checked
                if (this.checked) {
                    document.getElementById('image-edit-{{ $testimonial->id }}').value = '';
                }
            });
        }
    </script>
@endpush
