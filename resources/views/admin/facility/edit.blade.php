<form action="{{ route('admin.facility.update', $facility->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="type" class="form-label">Tipe</label>
        <select class="form-control" id="type" name="type" required>
            <option value="classroom" {{ old('type', $facility->type) == 'classroom' ? 'selected' : '' }}>Classroom
            </option>
            <option value="smartclass" {{ old('type', $facility->type) == 'smartclass' ? 'selected' : '' }}>Smartclass
            </option>
            <option value="reading_room" {{ old('type', $facility->type) == 'reading_room' ? 'selected' : '' }}>Reading
                Room</option>
        </select>
        @error('type')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" name="description" rows="5">{{ old('description', $facility->description) }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="academic_days" class="form-label">Hari Akademik</label>
        <select class="form-control" id="academic_days" name="academic_days[]" multiple>
            <option value="Monday"
                {{ in_array('Monday', old('academic_days', $facility->academic_days ?? [])) ? 'selected' : '' }}>Senin
            </option>
            <option value="Tuesday"
                {{ in_array('Tuesday', old('academic_days', $facility->academic_days ?? [])) ? 'selected' : '' }}>Selasa
            </option>
            <option value="Wednesday"
                {{ in_array('Wednesday', old('academic_days', $facility->academic_days ?? [])) ? 'selected' : '' }}>Rabu
            </option>
            <option value="Thursday"
                {{ in_array('Thursday', old('academic_days', $facility->academic_days ?? [])) ? 'selected' : '' }}>
                Kamis</option>
            <option value="Friday"
                {{ in_array('Friday', old('academic_days', $facility->academic_days ?? [])) ? 'selected' : '' }}>Jumat
            </option>
            <option value="Saturday"
                {{ in_array('Saturday', old('academic_days', $facility->academic_days ?? [])) ? 'selected' : '' }}>
                Sabtu</option>
            <option value="Sunday"
                {{ in_array('Sunday', old('academic_days', $facility->academic_days ?? [])) ? 'selected' : '' }}>Minggu
            </option>
        </select>
        @error('academic_days')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="academic_hours" class="form-label">Jam Akademik</label>
        <input type="text" class="form-control" id="academic_hours" name="academic_hours"
            value="{{ old('academic_hours', $facility->academic_hours) }}" placeholder="Contoh: 08:00-16:00">
        @error('academic_hours')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="collaborative_hours" class="form-label">Jam Kolaborasi</label>
        <input type="text" class="form-control" id="collaborative_hours" name="collaborative_hours"
            value="{{ old('collaborative_hours', $facility->collaborative_hours) }}" placeholder="Contoh: 16:00-18:00">
        @error('collaborative_hours')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="images" class="form-label">Gambar (Maksimum 5)</label>
        <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple>
        <small class="text-muted">Pilih hingga 5 gambar (JPEG/PNG/JPG/GIF, maks 2MB per gambar). Unggah baru untuk
            mengganti gambar lama.</small>
        @if ($facility->images && count($facility->images) > 0)
            <div class="mt-2">
                <p>Gambar saat ini:</p>
                @foreach ($facility->images as $image)
                    <img src="{{ asset('storage/' . $image) }}" class="img-thumbnail" alt="Facility Image"
                        style="max-width: 100px; margin-right: 10px;">
                @endforeach
            </div>
        @endif
        @error('images')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
