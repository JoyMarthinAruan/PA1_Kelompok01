<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website Teknik Metalurgi Institut Teknologi Del">
    <meta name="author" content="Tim Pengembang Teknik Metalurgi IT Del">
    <title>Teknik Metalurgi | IT Del</title>

    <link rel="icon" type="image/png" href="<?php echo e(asset('aset/img/logo.png')); ?>">

    <!-- CSS Styles -->
    <link href="<?php echo e(URL::asset('aset/css/styles.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('aset/css/feli.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Condensed:wght@400;600&display=swap"
        rel="stylesheet">
</head>

<body id="top">
    <!-- Navbar Atas -->
    <nav class="navbar navbar-expand-lg custom-navbar-top fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="<?php echo e(asset('aset/img/logo.png')); ?>" alt="Logo Del" class="logo-img">
                <div class="divider"></div>
                <div class="brand-text">
                    <div class="brand-title">TEKNIK METALURGI</div>
                    <div class="brand-subtitle">Institut Teknologi Del</div>
                </div>
            </a>

            <!-- Search Bar -->
            <form class="d-flex ms-lg-3 mt-2 mt-lg-0 search-bar" role="search" action="<?php echo e(route('search')); ?>"
                method="GET">
                <input class="form-control search-input" type="search" placeholder="Cari Informasi" aria-label="Search"
                    name="query">
                <button class="btn search-button" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>

            <!-- Toggle Button (Mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavPrimaryAndSecondary" aria-controls="navbarNavPrimaryAndSecondary"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list" style="font-size: 1.5rem; color: white;"></i>
            </button>
        </div>
    </nav>

    <!-- Navbar Bawah -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-secondary">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavPrimaryAndSecondary">
                <ul class="navbar-nav nav-links-custom">
                    <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>

                    <!-- Dropdown Profil -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo e(url('/metaprofile')); ?>">Profil Umum</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/curriculum')); ?>">Kurikulum</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/structure_organization')); ?>">Struktur
                                    Organisasi</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/lecturer')); ?>">Dosen Staff</a></li>
                        </ul>
                    </li>

                    <!-- Dropdown Prestasi -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Prestasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo e(url('/achievements/publication')); ?>">Publikasi</a>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/achievements/research')); ?>">Penelitian</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/achievements/achievement')); ?>">Pencapaian</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/facility')); ?>">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#laboratorium">Laboratorium</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kegiatan">Kegiatan Prodi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header / Hero Awal -->
    <header>
        <div class="image-container position-relative">
            <img src="<?php echo e(asset('aset/img/latarbelakang.png')); ?>" alt="Background Image" class="bg-image">

            <div class="content-overlay d-flex flex-column justify-content-center align-items-center text-center">
                <img class="img-fluid-head mb-3" src="<?php echo e(asset('aset/img/logo.png')); ?>" alt="Logo"
                    width="120">

                <h3 class="text-white fw-bold welcome-text">SELAMAT DATANG DI</h3>
                <h2 class="text-white fw-bold title-text">TEKNIK METALURGI</h2>
                <p class="text-white fw-semibold subtitle-text">INSTITUT TEKNOLOGI DEL</p>

                <p class="text-white slogan-text">Shaping the World Through&nbsp;Metals</p>

                <div class="image-logos-container">
                    <img class="logo-image" src="<?php echo e(asset('aset/img/kampus.png')); ?>" alt="Kampus" width="150">
                    <img class="logo-image" src="<?php echo e(asset('aset/img/akreditasi.png')); ?>" alt="Akreditasi"
                        width="150">
                </div>
            </div>
        </div>
    </header>

    <!-- Section Hero Poster -->
    <section class="hero-section">
        <div class="hero">
            <img src="<?php echo e(asset('aset/img/poster.png')); ?>" alt="Gedung Teknik Metalurgi IT Del"
                class="background-img">
            <div class="overlay"></div>

            <div class="hero-text d-flex flex-column flex-md-row justify-content-center align-items-center">
                <!-- Kiri: Judul dan Ikon -->
                <div class="left-content text-center text-md-start">
                    <div class="title-container">
                        <h1>TEKNIK METALURGI IT DEL</h1>
                    </div>
                    <div class="icon-container">
                        <img src="<?php echo e(asset('aset/img/ikon.png')); ?>" alt="Icon Del" class="icon">
                    </div>

                </div>

                <!-- Kanan: Deskripsi dan Tombol -->
                <div class="right-side text-center text-md-start">
                    <div class="description-box">
                        Teknik Metalurgi adalah cabang ilmu teknik yang mempelajari sifat-sifat fisik dan kimia dari
                        logam dan paduannya, serta proses pengolahan dan penggunaannya dalam berbagai industri.
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
        </div>
    </section>


    <div class="news-container">
        <h3 class="my-4 mb-5 text-center"><strong>BERITA TERBARU</strong></h3>
        <div class="row justify-content-center">
            <?php if(isset($news) && $news->count() > 0): ?>
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                        <div class="news-card">
                            <div class="news-image-container">
                                <img src="<?php echo e(asset('storage/' . $item->image)); ?>" alt="<?php echo e($item->title); ?>"
                                    class="news-image">
                            </div>
                            <div class="news-title"><?php echo e($item->title); ?></div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p class="text-center">Belum ada berita.</p>
            <?php endif; ?>
        </div>
        <div class="text-center mt-3">
            <a href="<?php echo e(route('news')); ?>" class="btn btn-outline-primary">Semua Berita</a>
        </div>
    </div>

    <!-- Testimonials Section -->
    <section class="testimonial-section py-5">
        <div class="container">
            <h3 class="text-center mb-5 fw-bold">TESTIMONI</h3>
            <div class="testimonial-wrapper">
                <button class="nav-arrow left">&#9664;</button>
                <div class="testimonial-carousel">
                    <?php if(isset($testimonials) && $testimonials->count() > 0): ?>
                        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="testimonial-card">
                                <div class="testimonial-image-wrapper">
                                    <img src="<?php echo e(asset('storage/' . $item->image)); ?>" alt="<?php echo e($item->name); ?>"
                                        class="testimonial-image">
                                </div>
                                <div class="testimonial-header text-center mt-3">
                                    <div class="testimonial-info"><?php echo e(strtoupper($item->name)); ?></div>
                                    <p class="job">(<?php echo e($item->job); ?>)</p>
                                </div>
                                <blockquote class="testimonial-content mt-3">“<?php echo e($item->content); ?>”</blockquote>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <p class="text-center">Belum ada testimoni.</p>
                    <?php endif; ?>
                </div>
                <button class="nav-arrow right">&#9654;</button>
            </div>
        </div>
    </section>

    <section class="kerjasama-section">
        <h3 class="section-title"><strong>KERJA SAMA</strong></h3>
        <div class="kerjasama-container">
            <?php $__currentLoopData = $collaborates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="kerjasama-item"
                    onclick="showModal(
                        `<?php echo e($data->institution_name); ?>`,
                        `<?php echo e($data->company_profile); ?>`,
                        `<?php echo e($data->institution_description); ?>`
                    )">
                    <img src="<?php echo e(asset('storage/' . $data->logo)); ?>" alt="logo">
                    <span class="tanggal">Tanggal Kerjasama:
                        <?php echo e(\Carbon\Carbon::parse($data->date)->format('d F Y')); ?></span>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!-- Modal -->
    <div id="popupModal" class="popup-modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">×</span>
            <h4 id="modalTitle"></h4>

            <div class="modal-section horizontal-section">
                <strong>PROFIL PERUSAHAAN :</strong>
                <p id="modalProfil"></p>
            </div>

            <div class="modal-section horizontal-section">
                <strong>DESKRIPSI SINGKAT KERJASAMA:</strong>
                <p id="modalDeskripsi"></p>
            </div>
        </div>
    </div>

    <!--Footer-->

    <div class="footer-top">
        <div class="footer-info">
            <div class="footer-item">
                <div class="img-container">
                    <img src="<?php echo e(asset('aset/img/help circle.PNG')); ?>" alt="Chat Box Icon">
                </div>
                <div>
                    <h4>Chat Box</h4>
                    <p>Jika ingin bertanya lebih lanjut,<br>dapat menghubungi</p>
                </div>
            </div>
            <div class="footer-item">
                <div class="img-container">
                    <img src="<?php echo e(asset('aset/img/Clock.PNG')); ?>" alt="Hours Icon">
                </div>
                <div>
                    <h4>Hours</h4>
                    <p>08.00 am – 05.00 pm</p>
                </div>
            </div>
            <div class="footer-item">
                <div class="img-container">
                    <img src="<?php echo e(asset('aset/img/Pen tool.PNG')); ?>" alt="Review Icon">
                </div>
                <div>
                    <h4>Review</h4>
                    <p>Kami membutuhkan tanggapan anda<br>terhadap website kami</p>
                </div>
            </div>
            <div class="footer-item arrow-up">
                <div class="img-container">
                    <img src="<?php echo e(asset('aset/img/Icon.png')); ?>" alt="Arrow Up Icon">
                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="footer-container">
            <div class="footer-left">
                <img src="<?php echo e(asset('aset/img/logo.png')); ?>" alt="Logo IT Del" class="logo-original">
                <div class="footer-title">
                    <div class="fakultas-title">
                        <div class="baris-1">FAKULTAS TEKNOLOGI INDUSTRI <br> TEKNIK METALURGI</div>
                        <div class="baris-2">INSTITUT TEKNOLOGI DEL</div>
                    </div>
                </div>
            </div>
            <div class="footer-right">
                <h3>Kontak Kami</h3>
                <p><i class="fas fa-phone"></i>+62 632 331234</p>
                <p><i class="fab fa-instagram"></i>
                    <a href="https://www.instagram.com/metalurgidel?igsh=Y2Y4M3pqancxdHdn"
                        target="_blank">metalurgidel</a>
                </p>
                <p><i class="fas fa-map-marker-alt"></i> Institut Teknologi Del Jl. Sisingamangaraja,<br>
                    Sitoluama Laguboti, Toba Samosir Sumatera Utara, Indonesia</p>
                <p><i class="fas fa-envelope"></i>
                    <a href="mailto:info@del.ac.id" class="footer-link">info@del.ac.id</a>
                </p>
            </div>
        </div>

        <!-- Tambahan credit di bawah -->
        <div style="text-align: center; margin-top: 30px; color: #ccc; font-size: 0.9rem;">
            Dibuat oleh Kelompok 1 PA 1 D3TI 2024
        </div>
    </div>







    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('aset/js/feli.js')); ?>"></script>

    <script>
        document.querySelector('.nav-arrow.left').addEventListener('click', () => {
            document.querySelector('.testimonial-carousel').scrollBy({
                left: -320,
                behavior: 'smooth'
            });
        });

        document.querySelector('.nav-arrow.right').addEventListener('click', () => {
            document.querySelector('.testimonial-carousel').scrollBy({
                left: 320,
                behavior: 'smooth'
            });
        });
    </script>

</body>

</html>
<?php /**PATH C:\Users\User\OneDrive\ドキュメント\GitHub\PA1_Kelompok01\resources\views/home.blade.php ENDPATH**/ ?>