<div>
    <div class="mb-3">
        <label class="form-label fw-bold">Nama</label>
        <p>{{ $structure->name }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Jabatan</label>
        <p>{{ $structure->title }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Gelar</label>
        <p>{{ $structure->degree ?? '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Induk</label>
        <p>{{ $structure->parent ? $structure->parent->name : '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Foto</label>
        <div>
            @if ($structure->image)
                <img src="{{ asset('storage/' . $structure->image) }}" class="img-thumbnail" alt="Structure Image"
                    style="max-width: 150px;">
            @else
                <span class="text-muted">Tidak ada foto</span>
            @endif
        </div>
    </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
</div>
