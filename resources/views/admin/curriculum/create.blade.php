<form action="{{ route('admin.curriculum.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="course_code" class="form-label">Kode Mata Kuliah</label>
        <input type="text" class="form-control" id="course_code" name="course_code" value="{{ old('course_code') }}"
            required>
        @error('course_code')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="course_name" class="form-label">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="course_name" name="course_name" value="{{ old('course_name') }}"
            required>
        @error('course_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="semester" class="form-label">Semester</label>
        <input type="text" class="form-control" id="semester" name="semester" value="{{ old('semester') }}"
            required>
        @error('semester')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="credits" class="form-label">Credits (SKS)</label>
        <input type="number" class="form-control" id="credits" name="credits" value="{{ old('credits') }}" required
            min="1">
        @error('credits')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="aktif" {{ old('status', 'aktif') == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="tidak" {{ old('status', 'aktif') == 'tidak' ? 'selected' : '' }}>Tidak Aktif</option>
        </select>
        @error('status')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
