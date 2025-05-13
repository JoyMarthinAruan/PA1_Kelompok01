<div>
    <div class="mb-3">
        <label class="form-label fw-bold">Tipe</label>
        <p>
            <span
                class="badge {{ $facility->type == 'classroom' ? 'bg-primary' : ($facility->type == 'smartclass' ? 'bg-info' : 'bg-success') }}">
                {{ $facility->type }}
            </span>
        </p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Deskripsi</label>
        <p>{{ $facility->description ?? '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Hari Akademik</label>
        <p>{{ $facility->academic_days ? implode(', ', $facility->academic_days) : '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Jam Akademik</label>
        <p>{{ $facility->academic_hours ?? '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Jam Kolaborasi</label>
        <p>{{ $facility->collaborative_hours ?? '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Gambar</label>
        <div>
            @if ($facility->images && count($facility->images) > 0)
                @foreach ($facility->images as $image)
                    <img src="{{ asset('storage/' . $image) }}" class="img-thumbnail" alt="Facility Image"
                        style="max-width: 150px; margin-right: 10px;">
                @endforeach
            @else
                <span class="text-muted">Tidak ada gambar</span>
            @endif
        </div>
    </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
</div>
