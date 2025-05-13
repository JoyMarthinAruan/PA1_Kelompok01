<form action="{{ route('admin.achievement.update', $achievement->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" class="form-control" id="title" name="title"
            value="{{ old('title', $achievement->title) }}" required>
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $achievement->description) }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Penulis</label>
        <input type="text" class="form-control" id="author" name="author"
            value="{{ old('author', $achievement->author) }}">
        @error('author')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="date" name="date"
            value="{{ old('date', $achievement->date ? $achievement->date->format('Y-m-d') : '') }}">
        @error('date')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Gambar</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
        @if ($achievement->image)
            <img src="{{ asset('storage/' . $achievement->image) }}" class="img-thumbnail mt-2"
                alt="Current Achievement Image">
        @endif
        @error('image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">File (PDF/DOC/DOCX)</label>
        <input type="file" class="form-control" id="file" name="file" accept=".pdf,.doc,.docx">
        @if ($achievement->file)
            <a href="{{ asset('storage/' . $achievement->file) }}" class="mt-2 d-block" target="_blank">Lihat file saat
                ini</a>
        @endif
        @error('file')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipe</label>
        <select class="form-control" id="type" name="type" required>
            <option value="publikasi" {{ old('type', $achievement->type) == 'publikasi' ? 'selected' : '' }}>Publikasi
            </option>
            <option value="penelitian" {{ old('type', $achievement->type) == 'penelitian' ? 'selected' : '' }}>
                Penelitian</option>
            <option value="pencapaian" {{ old('type', $achievement->type) == 'pencapaian' ? 'selected' : '' }}>
                Pencapaian</option>
        </select>
        @error('type')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
