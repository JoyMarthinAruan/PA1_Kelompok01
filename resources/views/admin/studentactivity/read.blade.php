<div>
    <div class="mb-3">
        <label class="form-label fw-bold">Judul</label>
        <p>{{ $activity->title }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Deskripsi</label>
        <p>{{ $activity->description ?? '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Gambar</label>
        <div>
            @if ($activity->image)
                <img src="{{ asset('storage/' . $activity->image) }}" class="img-thumbnail" alt="Activity Image"
                    style="max-width: 150px;">
            @else
                <span class="text-muted">Tidak ada gambar</span>
            @endif
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Status</label>
        <p>
            <span class="badge {{ $activity->is_active ? 'bg-success' : 'bg-danger' }}">
                {{ $activity->is_active ? 'Aktif' : 'Tidak Aktif' }}
            </span>
        </p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Dibuat Oleh</label>
        <p>{{ $activity->createdBy?->name ?? 'Tidak ada' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Diperbarui Oleh</label>
        <p>{{ $activity->updatedBy?->name ?? 'Tidak ada' }}</p>
    </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
</div>
