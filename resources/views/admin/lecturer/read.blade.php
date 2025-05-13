<div>
    <div class="mb-3">
        <label class="form-label fw-bold">ID Karyawan</label>
        <p>{{ $lecturer->employee_id }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Foto</label>
        <div>
            @if ($lecturer->image)
                <img src="{{ asset('storage/' . $lecturer->image) }}" class="img-thumbnail" alt="Lecturer Image"
                    style="max-width: 150px;">
            @else
                <span class="text-muted">Tidak ada foto</span>
            @endif
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Nama</label>
        <p>{{ $lecturer->name }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Email</label>
        <p>{{ $lecturer->email }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">LinkedIn</label>
        <p>{{ $lecturer->linkedIn ?? '-' }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Ruangan</label>
        <p>{{ $lecturer->room }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Pendidikan</label>
        <p>{{ $lecturer->education }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Penelitian</label>
        <p>{{ $lecturer->research }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Mata Kuliah</label>
        <p>{{ $lecturer->courses }}</p>
    </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
</div>
