@extends('layouts.main')

@section('content')
    <style>
        .content-wrapper {
            background-color: #fff;
            padding-bottom: 40px;
        }

        .profile-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #fff;
        }

        .number-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1000px;
            /* Increased for better spacing between nav items */
            position: relative;
            padding: 0 20px;
            /* Added padding to create space from edges */
        }

        .nav-number {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ddd;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            user-select: none;
            transition: background-color 0.3s ease;
            z-index: 1;
        }

        .nav-number.active {
            background-color: #007bff;
            /* Blue when active */
        }

        .nav-number:hover {
            background-color: #ccc;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
            /* Distribute space evenly */
            text-align: center;
        }

        .nav-label {
            margin-top: 10px;
            color: #333;
            font-size: 12px;
            font-weight: normal;
            text-align: center;
            line-height: 1.2;
            max-width: 200px;
        }

        /* Dashed line connector */
        .number-nav::before {
            content: "";
            position: absolute;
            top: 20px;
            left: 80px;
            /* Adjusted to start after the first nav-item padding */
            right: 80px;
            /* Adjusted to end before the last nav-item padding */
            height: 2px;
            background: repeating-linear-gradient(to right, #000 0, #000 10px, transparent 10px, transparent 30px);
            z-index: 0;
        }

        @media (max-width: 768px) {
            .number-nav {
                flex-direction: column;
                align-items: center;
            }

            .nav-number {
                width: 30px;
                height: 30px;
                font-size: 14px;
                margin-bottom: 20px;
            }

            .nav-label {
                font-size: 10px;
                margin-top: 5px;
            }

            .number-nav::before {
                display: none;
            }
        }

        .image-gallery {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 30px;
            padding: 0 20px;
            /* Added padding for consistency */
        }

        .image-gallery img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .image-gallery p {
            font-size: 12px;
            /* Smaller text to match the image */
            color: #333;
            line-height: 1.5;
            margin: 0;
            text-align: justify;
            /* Justified text for neatness */
            padding: 10px 0;
            /* Added padding for spacing */
        }

        .breadcrumb {
            font-size: 14px;
            margin: 20px;
        }

        .breadcrumb a {
            color: #555;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .breadcrumb span {
            color: #999;
        }

        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .image-overlay {
            position: relative;
            text-align: center;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }

        .image-overlay span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

    <!-- JavaScript for click event -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navNumbers = document.querySelectorAll('.nav-number');
            navNumbers.forEach(number => {
                number.addEventListener('click', function() {
                    navNumbers.forEach(n => n.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-transparent px-0">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}" class="text-decoration-none text-muted">
                    <i class="bi bi-house-door"></i> Beranda
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('/metaprofile') }}" class="text-decoration-none text-muted">Profil </a>
            </li>
            <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">Sejarah, Visi dan Misi Keilmuan,
                Prospek Kerja</li>
        </ol>
    </nav>

    <!-- Judul -->
    <div class="title">PROFIL UMUM</div>

    <!-- Number Nav -->
    <div class="profile-container">
        <div class="number-nav">
            <div class="nav-item">
                <div class="nav-number active">
                    <span>1</span>
                </div>
                <div class="nav-label">SEJARAH PROGRAM STUDI TEKNIK METALURGI</div>
            </div>
            <div class="nav-item">
                <div class="nav-number">
                    <span>2</span>
                </div>
                <div class="nav-label">VISI DAN MISI KEILMUAN</div>
            </div>
            <div class="nav-item">
                <div class="nav-number">
                    <span>3</span>
                </div>
                <div class="nav-label">PROSPEK KERJA</div>
            </div>
        </div>
    </div>

    <!-- Gambar -->
    <div class="image-gallery">
        <div class="image-overlay">
            <img src="{{ asset('aset/img/gambar1.png') }}" alt="Gambar 1">
            <span>2023</span>
        </div>
        <p>Program Studi Sarjana Teknik Metalurgi di Institut Teknologi Del (untuk selanjutnya disebut sebagai Prodi Teknik
            Metalurgi) didirikan berdasarkan Surat Keputusan Menteri Pendidikan, Kebudayaan, Riset dan Teknologi No.
            5698/E1/HK.03.00/0/2023 tahun 2023. Pendirian Prodi Teknik Metalurgi di Institut Teknologi Del merupakan bentuk
            dukungan terhadap program pemerintah dalam melakukan hilirisasi bahan tambang di Indonesia. Institut Teknologi
            Del menjalin kerja sama dengan sejumlah perusahaan dalam rangka mendukung pengembangan Program Studi baru, yaitu
            Program Studi Teknik Metalurgi. Kerja sama ini bertujuan untuk memperkuat kurikulum, menyediakan fasilitas
            pendukung, serta membuka peluang magang dan riset terapan bagi mahasiswa.</p>
        <div class="image-overlay">
            <img src="{{ asset('aset/img/gambar2.png') }}" alt="Gambar 2">
            <span>2023</span>
        </div>
        <p>Politeknik Informatika Del didirikan oleh Yayasan Del sesuai dengan visi dan misinya untuk menyediakan akses
            pendidikan berkualitas di daerah terpencil bagi siswa berprestasi, khususnya yang berasal dari latar belakang
            ekonomi lemah. Politeknik Informatika Del (PI Del) resmi berdiri pada tahun 2001 dan menyelenggarakan pendidikan
            program Diploma 3 untuk Teknik Informatika, Teknik Komputer, dan Manajemen Informasi, serta Diploma 4 untuk
            Teknik Informatika. Berdasarkan Surat Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia No.
            266/E/O/2013 tertanggal 6 Juli 2013, PI Del secara resmi berubah status menjadi Institut Teknologi Del (IT Del).
            Seiring dengan perubahan ini, IT Del mengembangkan Fakultas baru yaitu Fakultas Teknologi Industri. Fakultas
            Teknologi Industri memiliki Program Studi Manajemen Rekayasa (PSMR) dan pada tahun 2023 terdapat Program Studi
            baru yaitu Program Studi Teknik Metalurgi (PSTM). Fakultas Teknologi Industri didirikan pada tahun 2013. Saat
            ini, Fakultas Teknologi Industri dipimpin oleh Dr. Fitriani Tupa R. Silalahi sebagai Dekan, dengan Rizal Horas
            Manahan Sinaga, S.Si., M.T., Ph.D. menjabat sebagai Kepala Program Studi Teknik Metalurgi.</p>
        <div class="image-overlay">
            <img src="{{ asset('aset/img/gambar3.png') }}" alt="Gambar 3">
            <span>2023 - 2025</span>
        </div>
        <p>Program Studi Teknik Metalurgi mulai menerima mahasiswa baru sejak tahun akademik 2023/2024, dengan total
            penerimaan awal sebanyak 35 orang mahasiswa pada tahun 2023 dan 55 orang mahasiswa pada tahun 2024. Saat ini,
            jumlah dosen Prodi Teknik Metalurgi secara de facto adalah sebanyak 5 orang, dan seluruhnya telah terdaftar pada
            Pangkalan Data Pendidikan Tinggi (PDDikti). Dengan jumlah mahasiswa aktif sebanyak 90 orang. Pada tahun 2023,
            PSTM telah melaksanakan akreditasi dan memperoleh akreditasi B dari Badan Akreditasi Nasional Perguruan Tinggi
            (BAN-PT) berdasarkan Keputusan BAN-PT No. 0461/SK/LAM Teknik/PB.AS/XII/2023.</p>
        <div class="image-overlay">
            <img src="{{ asset('aset/img/gambar4.png') }}" alt="Gambar 4">
            <span>2025</span>
        </div>
        <p>Untuk mendukung penyelenggaraan proses pembelajaran yang optimal pada Program Studi Teknik Metalurgi, Institut
            Teknologi Del mendirikan Gedung Program Studi Teknik Metalurgi. Gedung ini dirancang secara khusus untuk
            memenuhi kebutuhan akademik dan praktikum mahasiswa, serta menunjang kegiatan dosen dan tenaga kependidikan.
            Fasilitas yang tersedia mencakup ruang laboratorium, ruang kelas yang representatif, ruang staf dan dosen, serta
            berbagai ruangan dan sarana pendukung lainnya guna menciptakan lingkungan belajar yang kondusif dan berstandar
            tinggi.</p>
    </div>
@endsection
