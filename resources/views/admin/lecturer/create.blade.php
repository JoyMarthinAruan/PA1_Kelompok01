<form action="{{ route('admin.lecturer.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="employee_id" class="form-label">ID Karyawan</label>
        <input type="text" class="form-control" id="employee_id" name="employee_id" value="{{ old('employee_id') }}"
            required>
        @error('employee_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Foto</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
        <small class="text-muted">Pilih gambar (JPEG/PNG/JPG/GIF, maks 2MB).</small>
        @error('image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="linkedIn" class="form-label">LinkedIn</label>
        <input type="url" class="form-control" id="linkedIn" name="linkedIn" value="{{ old('linkedIn') }}"
            placeholder="https://linkedin.com/in/username">
        @error('linkedIn')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="room" class="form-label">Ruangan</label>
        <input type="text" class="form-control" id="room" name="room" value="{{ old('room') }}" required>
        @error('room')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="education" class="form-label">Pendidikan</label>
        <textarea class="form-control" id="education" name="education" rows="5" required>{{ old('education') }}</textarea>
        @error('education')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="research" class="form-label">Penelitian</label>
        <textarea class="form-control" id="research" name="research" rows="5" required>{{ old('research') }}</textarea>
        @error('research')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="courses" class="form-label">Mata Kuliah</label>
        <textarea class="form-control" id="courses" name="courses" rows="5" required>{{ old('courses') }}</textarea>
        @error('courses')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
