<form action="{{ route('admin.structure_organization.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Jabatan</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="degree" class="form-label">Gelar</label>
        <input type="text" class="form-control" id="degree" name="degree" value="{{ old('degree') }}">
        @error('degree')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="parent_id" class="form-label">Induk</label>
        <select class="form-control" id="parent_id" name="parent_id">
            <option value="">Tidak ada induk</option>
            @foreach (\App\Models\StructureOrganization::all() as $parent)
                <option value="{{ $parent->id }}" {{ old('parent_id') == $parent->id ? 'selected' : '' }}>
                    {{ $parent->name }} ({{ $parent->title }})
                </option>
            @endforeach
        </select>
        @error('parent_id')
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
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
