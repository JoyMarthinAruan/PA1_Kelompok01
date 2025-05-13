<form action="{{ route('admin.testimonial.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
        <label for="name" class="form-label">Nama <span class="text-danger">*</span></label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name') }}" required>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="student" class="form-label">Status <span class="text-danger">*</span></label>
        <input type="text" name="student" id="student" class="form-control @error('student') is-invalid @enderror"
            value="{{ old('student') }}" required>
        <small class="text-muted">Contoh: Siswa Kelas X, Alumni 2022, Orang Tua Siswa, dll.</small>
        @error('student')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="content" class="form-label">Isi Testimoni <span class="text-danger">*</span></label>
        <textarea name="content" id="content" rows="4" class="form-control @error('content') is-invalid @enderror"
            required>{{ old('content') }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="image" class="form-label">Foto</label>
        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror"
            accept="image/*">
        <small class="text-muted">Format: jpg, jpeg, png (Maks. 2MB)</small>
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1"
                {{ old('is_active', true) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">
                Aktif
            </label>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>

@push('scripts')
    <script>
        // Preview image before upload
        document.getElementById('image').addEventListener('change', function(e) {
            const reader = new FileReader();
            reader.onload = function(event) {
                if (document.getElementById('preview')) {
                    document.getElementById('preview').src = event.target.result;
                } else {
                    const preview = document.createElement('img');
                    preview.id = 'preview';
                    preview.src = event.target.result;
                    preview.classList.add('img-thumbnail', 'mt-2', 'mb-2');
                    preview.style.maxHeight = '200px';
                    document.querySelector('.form-group:nth-child(4)').appendChild(preview);
                }
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    </script>
@endpush
