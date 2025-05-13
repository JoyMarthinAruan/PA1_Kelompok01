<div>
    <div class="mb-3">
        <label class="form-label fw-bold">Nama Institusi</label>
        <p>{{ $collaborate->institution_name }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Deskripsi Institusi</label>
        <p>{{ $collaborate->institution_description ?? '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Profil Perusahaan</label>
        <p>{{ $collaborate->company_profile ?? '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Deskripsi Kerjasama</label>
        <p>{{ $collaborate->cooperation_description ?? '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Logo</label>
        <div>
            @if ($collaborate->logo)
                <img src="{{ asset('storage/' . $collaborate->logo) }}" class="img-thumbnail" alt="Collaborate Logo"
                    style="max-width: 150px;">
            @else
                <span class="text-muted">Tidak ada logo</span>
            @endif
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Tanggal</label>
        <p>{{ $collaborate->date ? $collaborate->date->format('d-m-Y') : '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Status</label>
        <p>
            <span class="badge {{ $collaborate->is_active ? 'bg-success' : 'bg-danger' }}">
                {{ $collaborate->is_active ? 'Aktif' : 'Tidak Aktif' }}
            </span>
        </p>
    </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
</div>
