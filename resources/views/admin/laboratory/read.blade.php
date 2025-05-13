<div>
    <div class="mb-3">
        <label class="form-label fw-bold">Nama Laboratorium</label>
        <p>{{ $laboratory->name }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Deskripsi</label>
        <p>{{ $laboratory->description ?? '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Hari Akademik</label>
        <p>{{ $laboratory->academic_days ? implode(', ', $laboratory->academic_days) : '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Jam Akademik</label>
        <p>{{ $laboratory->academic_hours ?? '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Jam Kolaborasi</label>
        <p>{{ $laboratory->collaborative_hours ?? '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Gambar</label>
        <div>
            @if ($laboratory->images && count($laboratory->images) > 0)
                @foreach ($laboratory->images as $image)
                    <img src="{{ asset('storage/' . $image) }}" class="img-thumbnail" alt="Laboratory Image"
                        style="max-width: 150px; margin-right: 10px;">
                @endforeach
            @else
                <span class="text-muted">Tidak ada gambar</span>
            @endif
        </div>
    </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
</div>
