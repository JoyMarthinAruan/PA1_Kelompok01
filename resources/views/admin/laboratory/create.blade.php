<form action="{{ route('admin.laboratory.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama Laboratorium</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" name="description" rows="5">{{ old('description') }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="academic_days" class="form-label">Hari Akademik</label>
        <select class="form-control" id="academic_days" name="academic_days[]" multiple>
            <option value="Monday" {{ in_array('Monday', old('academic_days', [])) ? 'selected' : '' }}>Senin</option>
            <option value="Tuesday" {{ in_array('Tuesday', old('academic_days', [])) ? 'selected' : '' }}>Selasa
            </option>
            <option value="Wednesday" {{ in_array('Wednesday', old('academic_days', [])) ? 'selected' : '' }}>Rabu
            </option>
            <option value="Thursday" {{ in_array('Thursday', old('academic_days', [])) ? 'selected' : '' }}>Kamis
            </option>
            <option value="Friday" {{ in_array('Friday', old('academic_days', [])) ? 'selected' : '' }}>Jumat</option>
            <option value="Saturday" {{ in_array('Saturday', old('academic_days', [])) ? 'selected' : '' }}>Sabtu
            </option>
            <option value="Sunday" {{ in_array('Sunday', old('academic_days', [])) ? 'selected' : '' }}>Minggu</option>
        </select>
        @error('academic_days')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="academic_hours" class="form-label">Jam Akademik</label>
        <input type="text" class="form-control" id="academic_hours" name="academic_hours"
            value="{{ old('academic_hours') }}" placeholder="Contoh: 08:00-16:00">
        @error('academic_hours')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="collaborative_hours" class="form-label">Jam Kolaborasi</label>
        <input type="text" class="form-control" id="collaborative_hours" name="collaborative_hours"
            value="{{ old('collaborative_hours') }}" placeholder="Contoh: 16:00-18:00">
        @error('collaborative_hours')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="images" class="form-label">Gambar (Maksimum 5)</label>
        <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple>
        <small class="text-muted">Pilih hingga 5 gambar (JPEG/PNG/JPG/GIF, maks 2MB per gambar).</small>
        @error('images')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
