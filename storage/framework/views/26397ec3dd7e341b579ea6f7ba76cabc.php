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
    <nav class="navbar navbar-expand-lg custom-navbar-top fixed-top navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="<?php echo e(asset('aset/img/logo.png')); ?>" alt="Logo Del" class="logo-img">
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
                            <li><a class="dropdown-item" href="<?php echo e(url('/metaprofile')); ?>">Profil Umum</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/curriculum')); ?>">Kurikulum</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/structure_organization')); ?>">Struktur
                                    Organisasi</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/lecturer')); ?>">Dosen Staff</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPrestasi" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Prestasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownPrestasi">
                            <li><a class="dropdown-item" href="<?php echo e(url('/achievements/publication')); ?>">Publikasi</a>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/achievements/research')); ?>">Penelitian</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/achievements/achievement')); ?>">Pencapaian</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('facility')); ?>">Fasilitas</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#laboratorium">Laboratorium</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kegiatan">Kegiatan Prodi</a></li>
                </ul>
                <form class="d-flex ms-auto mt-2 mt-lg-0 search-bar" role="search" action="<?php echo e(route('search')); ?>"
                    method="GET">
                    <input class="form-control search-input" type="search" placeholder="Cari Informasi"
                        aria-label="Search" name="query">
                    <button class="btn search-button" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <!-- As a heading -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Footer -->
    <footer>
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
<?php /**PATH C:\Users\User\OneDrive\ドキュメント\GitHub\PA1_Kelompok01\resources\views/layouts/main.blade.php ENDPATH**/ ?>