<form action="{{ route('admin.collaborate.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="institution_name" class="form-label">Nama Institusi</label>
        <input type="text" class="form-control" id="institution_name" name="institution_name"
            value="{{ old('institution_name') }}" required>
        @error('institution_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="institution_description" class="form-label">Deskripsi Institusi</label>
        <textarea class="form-control" id="institution_description" name="institution_description" rows="5">{{ old('institution_description') }}</textarea>
        @error('institution_description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="company_profile" class="form-label">Profil Perusahaan</label>
        <textarea class="form-control" id="company_profile" name="company_profile" rows="5">{{ old('company_profile') }}</textarea>
        @error('company_profile')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="logo" class="form-label">Logo</label>
        <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
        @error('logo')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}">
        @error('date')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="is_active" class="form-label">Status</label>
        <select class="form-control" id="is_active" name="is_active" required>
            <option value="1" {{ old('is_active', 1) == 1 ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ old('is_active', 1) == 0 ? 'selected' : '' }}>Tidak Aktif</option>
        </select>
        @error('is_active')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
