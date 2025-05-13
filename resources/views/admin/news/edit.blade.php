<form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $news->title) }}"
            required>
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $news->description) }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="date" name="date"
            value="{{ old('date', $news->date->format('Y-m-d')) }}" required>
        @error('date')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Penulis</label>
        <input type="text" class="form-control" id="author" name="author"
            value="{{ old('author', $news->author) }}" required>
        @error('author')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Gambar</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
        @if ($news->image)
            <img src="{{ asset('storage/' . $news->image) }}" class="img-thumbnail mt-2" alt="Current News Image">
        @endif
        @error('image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="is_active" class="form-label">Status</label>
        <select class="form-control" id="is_active" name="is_active" required>
            <option value="1" {{ $news->is_active ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ !$news->is_active ? 'selected' : '' }}>Tidak Aktif</option>
        </select>
        @error('is_active')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
