<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website Teknik Metalurgi Institut Teknologi Del">
    <meta name="author" content="Tim Pengembang Teknik Metalurgi IT Del">
    <title>Teknik Metalurgi | IT Del</title>
    <link rel="icon" type="image/png" href="{{ asset('aset/img/logo.png') }}">

    <!-- Styles -->
    <link href="{{ asset('aset/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('aset/css/feli.css') }}" rel="stylesheet">
    <link href="{{ asset('aset/css/hero.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar-top fixed-top navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('aset/img/logo.png') }}" alt="Logo Del" class="logo-img">
                <div class="divider"></div>
                <div class="brand-text">
                    <div class="brand-title">TEKNIK METALURGI</div>
                    <div class="brand-subtitle">INSTITUT TEKNOLOGI DEL</div>
                </div>
            </a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavPrimaryAndSecondary" aria-controls="navbarNavPrimaryAndSecondary"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list" style="font-size: 1.5rem; color: white;"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavPrimaryAndSecondary">
                <ul class="navbar-nav nav-links-custom">
                    <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfil" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownProfil">
                            <li><a class="dropdown-item" href="{{ url('/metaprofile') }}">Profil Umum</a></li>
                            <li><a class="dropdown-item" href="{{ url('/curriculum') }}">Kurikulum</a></li>
                            <li><a class="dropdown-item" href="{{ url('/structure_organization') }}">Struktur
                                    Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{ url('/lecturer') }}">Dosen Staff</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPrestasi" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Prestasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownPrestasi">
                            <li><a class="dropdown-item" href="{{ url('/achievements/publication') }}">Publikasi</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/achievements/research') }}">Penelitian</a></li>
                            <li><a class="dropdown-item" href="{{ url('/achievements/achievement') }}">Pencapaian</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/facility') }}">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#laboratorium">Laboratorium</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kegiatan">Kegiatan Prodi</a></li>
                </ul>
                <form class="d-flex ms-auto mt-2 mt-lg-0 search-bar" role="search" action="{{ route('search') }}"
                    method="GET">
                    <input class="form-control search-input" type="search" placeholder="Cari Informasi"
                        aria-label="Search" name="query">
                    <button class="btn search-button" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>


    <!-- Header / Hero -->
    <header>
        <div class="image-container position-relative">
            <img src="{{ asset('aset/img/latarbelakang.png') }}" alt="Background Image" class="bg-image">
            <div class="content-overlay d-flex flex-column justify-content-center align-items-center text-center">
                <img class="img-fluid-head mb-3" src="{{ asset('aset/img/logo.png') }}" alt="Logo"
                    width="120">
                <h3 class="text-white fw-bold welcome-text">SELAMAT DATANG DI</h3>
                <h2 class="text-white fw-bold title-text">TEKNIK METALURGI</h2>
                <p class="text-white fw-semibold subtitle-text">INSTITUT TEKNOLOGI DEL</p>
                <p class="text-white slogan-text">Shaping the World Through Metals</p>
                <div class="image-logos-container">
                    <img class="logo-image" src="{{ asset('aset/img/kampus.png') }}" alt="Kampus" width="150">
                    <img class="logo-image" src="{{ asset('aset/img/akreditasi.png') }}" alt="Akreditasi"
                        width="150">
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Poster Section -->
    <section class="hero-section">
        <div class="hero">
            <img src="{{ asset('aset/img/poster.png') }}" alt="Gedung Teknik Metalurgi IT Del"
                class="background-img">
            <div class="overlay"></div>
            <div class="hero-text d-flex flex-column flex-md-row justify-content-center align-items-center">
                <div class="left-content text-center text-md-start">
                    <div class="title-container">
                        <h1>TEKNIK METALURGI IT DEL</h1>
                    </div>
                    <div class="icon-container">
                        <img src="{{ asset('aset/img/ikon.png') }}" alt="Icon Del" class="icon">
                    </div>
                </div>
                <div class="right-side text-center text-md-start">
                    <div class="description-box">
                        Teknik Metalurgi adalah bidang ilmu teknik yang mempelajari proses ekstraksi, pengolahan,
                        karakterisasi, dan rekayasa material logam agar dapat dimanfaatkan secara optimal dalam berbagai
                        sektor industri. Teknik Metalurgi IT Del dikembangkan untuk menjawab tantangan industri modern
                        dengan pendekatan yang terintegrasi antara teori, praktik laboratorium, dan pemanfaatan
                        teknologi terkini. Fokus utamanya mencakup metalurgi ekstraktif, fisik, dan mekanik, serta
                        pengembangan material yang ramah lingkungan dan berkelanjutan. Melalui program ini, mahasiswa
                        dibekali dengan kompetensi teknis, analitis, serta etika profesi yang kuat, sehingga mampu
                        berkontribusi dalam inovasi teknologi material dan mendukung pembangunan industri nasional.
                    </div>
                    <div class="inform-box">
                        Ingin tahu lebih banyak tentang Teknik Metalurgi IT DEL?
                    </div>
                    <div class="button-box d-flex flex-column flex-sm-row justify-content-center gap-2">
                        <a href="#" class="button beasiswa">Informasi Beasiswa</a>
                        <a href="#" class="button pmb">Penerimaan Mahasiswa Baru</a>
                    </div>
                </div>
            </div>
            recording
        </div>
    </section>

    <!-- News Section -->
    <div class="news-container">
        <h3 class="my-4 mb-5 text-center"><strong>BERITA TERBARU</strong></h3>
        <div class="row justify-content-center">
            @if (isset($news) && $news->count() > 0)
                @foreach ($news as $item)
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="news-card">
                            <div class="news-image-container">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                    class="news-image">
                            </div>
                            <div class="news-title">{{ $item->title }}</div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">Belum ada berita.</p>
            @endif
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('news') }}" class="btn btn-outline-primary">Semua Berita</a>
        </div>
    </div>

    <!-- Testimonials Section -->
    <section class="testimonial-section py-5">
        <div class="container">
            <h3 class="text-center mb-5 fw-bold">TESTIMONI</h3>
            <div class="testimonial-wrapper">
                <button class="nav-arrow left">◀</button>
                <div class="testimonial-carousel">
                    @if (isset($testimonials) && $testimonials->count() > 0)
                        @foreach ($testimonials as $item)
                            <div class="testimonial-card">
                                <div class="testimonial-image-wrapper">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                        class="testimonial-image">
                                </div>
                                <div class="testimonial-header text-center mt-3">
                                    <div class="testimonial-info">{{ strtoupper($item->name) }}</div>
                                    <p class="job">({{ $item->job }})</p>
                                </div>
                                <blockquote class="testimonial-content mt-3">“{{ $item->content }}”</blockquote>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center">Belum ada testimoni.</p>
                    @endif
                </div>
                <button class="nav-arrow right">▶</button>
            </div>
        </div>
    </section>

    <!-- Kerjasama Section -->
    <section class="kerjasama-section">
        <h3 class="section-title"><strong>KERJA SAMA</strong></h3>
        <div class="kerjasama-container">
            <button class="nav-arrow left-arrow">❮</button>
            @foreach ($collaborates as $data)
                <div class="kerjasama-item"
                    onclick="showModal('{{ $data->institution_name }}', '{{ $data->company_profile }}', '{{ $data->institution_description }}')">
                    <div class="institution-name">{{ $data->institution_name }}</div>
                    <img src="{{ asset('storage/' . $data->logo) }}" alt="logo">
                    <span class="tanggal">Tanggal Kerjasama:
                        {{ \Carbon\Carbon::parse($data->date)->format('d F Y') }}</span>
                </div>
            @endforeach
            <button class="nav-arrow right-arrow">❯</button>
        </div>
    </section>

    <!-- Modal -->
    <div id="popupModal" class="popup-modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">×</span>
            <div class="modal-section horizontal-section">
                <strong>PROFIL PERUSAHAAN:</strong>
                <p id="modalProfil"></p>
            </div>
            <div class="modal-section horizontal-section">
                <strong>DESKRIPSI SINGKAT KERJASAMA:</strong>
                <p id="modalDeskripsi"></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-top">
            <div class="footer-info">
                <div class="footer-item">
                    <div class="img-container">
                        <img src="{{ asset('aset/img/help circle.PNG') }}" alt="Chat Box Icon">
                    </div>
                    <div>
                        <h4>Chat Box</h4>
                        <p>Jika ingin bertanya lebih lanjut,<br>dapat menghubungi</p>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="img-container">
                        <img src="{{ asset('aset/img/Clock.PNG') }}" alt="Hours Icon">
                    </div>
                    <div>
                        <h4>Hours</h4>
                        <p>08.00 am – 05.00 pm</p>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="img-container">
                        <img src="{{ asset('aset/img/Pen tool.PNG') }}" alt="Review Icon">
                    </div>
                    <div>
                        <h4>Review</h4>
                        <p>Kami membutuhkan tanggapan anda<br>terhadap website kami</p>
                    </div>
                </div>
                <div class="footer-item arrow-up">
                    <div class="img-container">
                        <img src="{{ asset('aset/img/Icon.png') }}" alt="Arrow Up Icon">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-container">
                <div class="footer-left">
                    <img src="{{ asset('aset/img/logo.png') }}" alt="Logo IT Del" class="logo-original">
                    <div class="footer-title">
                        <div class="fakultas-title">
                            <div class="baris-1">FAKULTAS TEKNOLOGI INDUSTRI <br> TEKNIK METALURGI</div>
                            <div class="baris-2">INSTITUT TEKNOLOGI DEL</div>
                        </div>
                    </div>
                </div>
                <div class="footer-right">
                    <h3>Kontak Kami</h3>
                    <p><i class="fas fa-phone"></i> +62 632 331234</p>
                    <p><i class="fab fa-instagram"></i> <a
                            href="https://www.instagram.com/metalurgidel?igsh=Y2Y4M3pqancxdHdn"
                            target="_blank">metalurgidel</a></p>
                    <p><i class="fas fa-map-marker-alt"></i> Institut Teknologi Del Jl. Sisingamangaraja,<br>Sitoluama
                        Laguboti, Toba Samosir Sumatera Utara, Indonesia</p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:info@del.ac.id"
                            class="footer-link">info@del.ac.id</a></p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 30px; color: #ccc; font-size: 0.9rem;">
                Dibuat oleh Kelompok 1 PA 1 D3TI 2024
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('aset/js/feli.js') }}"></script>
    <script src="{{ asset('aset/js/scripts.js') }}"></script>
</body>

</html>
