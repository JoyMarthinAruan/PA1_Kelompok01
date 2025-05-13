@extends('layouts.main')

@section('content')
    <style>
        .content-wrapper {
            background-color: #f5f5f5;
            padding-bottom: 40px;
            /* Biar konten tidak mepet bawah */
        }

        .profile-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .number-nav {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 800px;
            justify-content: space-around;
        }

        .nav-number {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #ddd;
            color: #fff;
            font-size: 48px;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            user-select: none;
            transition: background-color 0.3s ease;
        }

        .nav-number span {
            position: relative;
            z-index: 1;
        }

        .nav-number:hover {
            background-color: #ccc;
        }

        .nav-number.active {
            background-color: #ddd;
        }

        .nav-label {
            margin-top: 10px;
            color: #333;
            font-size: 14px;
            font-weight: normal;
            text-align: center;
        }

        .nav-number:not(:first-child)::before {
            content: "";
            position: absolute;
            left: -50%;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            height: 2px;
            background-color: #ddd;
            border-top: 2px dotted #333;
            z-index: 0;
        }

        @media (max-width: 768px) {
            .number-nav {
                flex-direction: column;
                align-items: center;
            }

            .nav-number {
                width: 80px;
                height: 80px;
                font-size: 32px;
                margin-bottom: 20px;
            }

            .nav-number:not(:first-child)::before {
                display: none;
            }

            .nav-label {
                font-size: 12px;
            }
        }

        .image-gallery {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 30px;
        }

        .image-gallery img {
            width: 100%;
            height: auto;
            object-fit: cover;
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
        }
    </style>

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
            <div class="nav-number active">
                <span>1</span>
                <span class="nav-label">SEJARAH PROGRAM STUDI<br>TEKNIK METALURGI</span>
            </div>
            <div class="nav-number">
                <span>2</span>
                <span class="nav-label">VISI DAN MISI<br>KEILMUAN</span>
            </div>
            <div class="nav-number">
                <span>3</span>
                <span class="nav-label">PROSPEK<br>KERJA</span>
            </div>
        </div>
    </div>

    <!-- Gambar -->
    <div class="image-gallery">
        <img src="{{ asset('aset/img/gambar1.png') }}" alt="Gambar 1">
        <img src="{{ asset('aset/img/gambar2.png') }}" alt="Gambar 2">
        <img src="{{ asset('aset/img/gambar3.png') }}" alt="Gambar 3">
        <img src="{{ asset('aset/img/gambar4.png') }}" alt="Gambar 4">
    </div>
@endsection
