@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <!-- Breadcrumb -->
        @extends('layouts.main')

    @section('content')
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb bg-transparent px-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="text-decoration-none text-muted">
                        <i class="bi bi-house-door"></i> Beranda
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/achievements') }}" class="text-decoration-none text-muted">Prestasi</a>
                </li>
                <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">Semua Prestasi</li>
            </ol>
        </nav>

        <h2 class="mb-4 text-center">Publications, Research, and Awards</h2>

        {{-- Publications --}}
        <div class="row align-items-center achievement-section">
            <div class="col-md-6 order-md-1">
                <img src="{{ asset('aset/img/publication.png') }}" class="img-fluid rounded" alt="Publication Image">
            </div>
            <div class="col-md-6 order-md-2">
                <h3 class="achievement-title">PUBLIKASI</h3>
                <p class="achievement-description">
                    Menu bar ini berisi berbagai informasi terkait hasil karya akademik, penelitian, dan kegiatan ilmiah
                    yang dilakukan oleh dosen maupun mahasiswa. Pada menu bar ini, pengguna dapat mengakses jurnal,
                    prosiding konferensi, artikel ilmiah, serta publikasi lain yang mendukung pengembangan ilmu pengetahuan
                    di bidang terkait.
                </p>
                <a href="{{ route('achievements.publication') }}" class="btn btn-outline-primary achievement-btn">Lihat
                    Publikasi</a>
            </div>
        </div>


        {{-- Research --}}
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-1">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('aset/img/penelitian.png') }}" class="img-fluid rounded" alt="Research Image">
                </div>
            </div>
            <div class="col-md-6 order-md-2">
                <h3 class="fw-bold mb-3">PENELITIAN</h3>
                <p class="text-justify">
                    Temukan berbagai proyek penelitian, kolaborasi, dan inovasi yang dilakukan oleh komunitas akademik kami.
                    Bagian ini menampilkan inisiatif penelitian mutakhir dan terobosan di berbagai bidang keilmuan.
                </p>
                <a href="{{ route('achievements.research') }}" class="btn btn-outline-success mt-3">Lihat Penelitian</a>
            </div>
        </div>

        {{-- Award --}}
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-1">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('aset/img/penghargaan.png') }}" class="img-fluid rounded" alt="Award Image">
                </div>
            </div>
            <div class="col-md-6 order-md-2">
                <h3 class="fw-bold mb-3">PENGHARGAAN</h3>
                <p class="text-justify">
                    Pelajari lebih lanjut tentang penghargaan dan pengakuan yang diterima oleh dosen dan mahasiswa kami.
                    Prestasi ini mencerminkan dedikasi, keunggulan, dan kontribusi terhadap komunitas akademik maupun
                    profesional.
                </p>
                <a href="{{ route('achievements.award') }}" class="btn btn-outline-warning mt-3">Lihat Penghargaan</a>
            </div>
        </div>
    </div>
@endsection
