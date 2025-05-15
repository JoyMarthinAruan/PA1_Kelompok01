@extends('layouts.main')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
        }

        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 1.5rem;
        }

        .breadcrumb-item a {
            color: #6c757d;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #212529;
            font-weight: 600;
        }

        .facility-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .facility-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #212529;
            margin-bottom: 2rem;
            text-align: center;
        }

        .accordion-button {
            font-size: 1.25rem;
            font-weight: 600;
            color: #212529;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 1rem;
            transition: all 0.3s ease;
        }

        .accordion-button:not(.collapsed) {
            color: #007bff;
            background-color: #f8f9fa;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: #007bff;
        }

        .accordion-item {
            border: none;
            margin-bottom: 1rem;
        }

        .accordion-body {
            border: 1px solid #dee2e6;
            border-top: none;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            padding: 1.5rem;
            background-color: #fff;
        }

        .facility-details {
            margin-bottom: 2rem;
        }

        .facility-details h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #212529;
            margin-bottom: 1rem;
        }

        .facility-details p {
            font-size: 1rem;
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .facility-schedule {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .facility-schedule i {
            color: #007bff;
            margin-right: 0.5rem;
        }

        .facility-schedule span {
            font-size: 1rem;
            color: #212529;
        }

        .facility-images {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1rem;
        }

        .facility-images img {
            max-width: 200px;
            border-radius: 8px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .facility-title {
                font-size: 1.5rem;
            }

            .accordion-button {
                font-size: 1rem;
            }

            .facility-details h3 {
                font-size: 1.25rem;
            }

            .facility-images img {
                max-width: 150px;
            }
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
                <a href="{{ url('/facility') }}" class="text-decoration-none text-muted">Fasilitas</a>
            </li>
            <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">Ruang Kelas, Smart Class, Ruang Baca
            </li>
        </ol>
    </nav>

    <!-- Facility Section -->
    <section class="facility-section">
        <h2 class="facility-title">Fasilitas Program Studi Teknik Metalurgi Fakultas Teknologi Industri</h2>
        <div class="accordion" id="facilityAccordion">
            <!-- Ruang Kelas -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingClassroom">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseClassroom" aria-expanded="false" aria-controls="collapseClassroom">
                        Ruang Kelas
                    </button>
                </h2>
                <div id="collapseClassroom" class="accordion-collapse collapse" aria-labelledby="headingClassroom"
                    data-bs-parent="#facilityAccordion">
                    <div class="accordion-body">
                        @if ($facilities->get('classroom', collect())->isNotEmpty())
                            @foreach ($facilities->get('classroom') as $facility)
                                <div class="facility-details">
                                    <h3>Informasi Umum</h3>
                                    <p>{{ $facility->description ?? 'Ruang kelas di Fakultas Teknologi Industri Institut Teknologi Del merupakan fondasi dari pengalaman belajar-mengajar. Meskipun tampak sederhana, ruang kelas memiliki peran yang sangat penting dalam membentuk lingkungan pembelajaran yang efektif dan nyaman bagi mahasiswa.' }}
                                    </p>
                                    <div class="facility-schedule">
                                        <i class="bi bi-calendar3"></i>
                                        <span>Hari Akademik:
                                            {{ $facility->academic_days ? implode(', ', $facility->academic_days) : 'Senin - Jumat' }}</span>
                                    </div>
                                    <div class="facility-schedule">
                                        <i class="bi bi-clock"></i>
                                        <span>Jam Akademik: {{ $facility->academic_hours ?? '07:00 - 17:00' }}</span>
                                    </div>
                                    <div class="facility-schedule">
                                        <i class="bi bi-clock-history"></i>
                                        <span>Jam Kolaboratif:
                                            {{ $facility->collaborative_hours ?? '19:00 - 22:00' }}</span>
                                    </div>
                                    @if ($facility->images && count($facility->images) > 0)
                                        <div class="facility-images">
                                            @foreach ($facility->images as $image)
                                                <img src="{{ asset('storage/' . $image) }}" alt="Classroom Image">
                                            @endforeach
                                        </div>
                                    @else
                                        <p class="text-muted">Tidak ada gambar tersedia.</p>
                                    @endif
                                </div>
                            @endforeach
                        @else
                            <p class="text-muted">Belum ada data untuk Ruang Kelas.</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Smart Class -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSmartClass">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSmartClass" aria-expanded="false" aria-controls="collapseSmartClass">
                        Smart Class
                    </button>
                </h2>
                <div id="collapseSmartClass" class="accordion-collapse collapse" aria-labelledby="headingSmartClass"
                    data-bs-parent="#facilityAccordion">
                    <div class="accordion-body">
                        @if ($facilities->get('smartclass', collect())->isNotEmpty())
                            @foreach ($facilities->get('smartclass') as $facility)
                                <div class="facility-details">
                                    <h3>Informasi Umum</h3>
                                    <p>{{ $facility->description ?? 'Smart Class di Fakultas Teknologi Industri dirancang dengan teknologi modern untuk mendukung pembelajaran interaktif.' }}
                                    </p>
                                    <div class="facility-schedule">
                                        <i class="bi bi-calendar3"></i>
                                        <span>Hari Akademik:
                                            {{ $facility->academic_days ? implode(', ', $facility->academic_days) : 'Senin - Jumat' }}</span>
                                    </div>
                                    <div class="facility-schedule">
                                        <i class="bi bi-clock"></i>
                                        <span>Jam Akademik: {{ $facility->academic_hours ?? '08:00 - 16:00' }}</span>
                                    </div>
                                    <div class="facility-schedule">
                                        <i class="bi bi-clock-history"></i>
                                        <span>Jam Kolaboratif:
                                            {{ $facility->collaborative_hours ?? '18:00 - 21:00' }}</span>
                                    </div>
                                    @if ($facility->images && count($facility->images) > 0)
                                        <div class="facility-images">
                                            @foreach ($facility->images as $image)
                                                <img src="{{ asset('storage/' . $image) }}" alt="Smart Class Image">
                                            @endforeach
                                        </div>
                                    @else
                                        <p class="text-muted">Tidak ada gambar tersedia.</p>
                                    @endif
                                </div>
                            @endforeach
                        @else
                            <p class="text-muted">Belum ada data untuk Smart Class.</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Ruang Baca -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingReadingRoom">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseReadingRoom" aria-expanded="false" aria-controls="collapseReadingRoom">
                        Ruang Baca
                    </button>
                </h2>
                <div id="collapseReadingRoom" class="accordion-collapse collapse" aria-labelledby="headingReadingRoom"
                    data-bs-parent="#facilityAccordion">
                    <div class="accordion-body">
                        @if ($facilities->get('reading_room', collect())->isNotEmpty())
                            @foreach ($facilities->get('reading_room') as $facility)
                                <div class="facility-details">
                                    <h3>Informasi Umum</h3>
                                    <p>{{ $facility->description ?? 'Ruang Baca menyediakan lingkungan yang nyaman untuk mahasiswa belajar dan mengakses sumber informasi.' }}
                                    </p>
                                    <div class="facility-schedule">
                                        <i class="bi bi-calendar3"></i>
                                        <span>Hari Akademik:
                                            {{ $facility->academic_days ? implode(', ', $facility->academic_days) : 'Senin - Jumat' }}</span>
                                    </div>
                                    <div class="facility-schedule">
                                        <i class="bi bi-clock"></i>
                                        <span>Jam Akademik: {{ $facility->academic_hours ?? '09:00 - 17:00' }}</span>
                                    </div>
                                    <div class="facility-schedule">
                                        <i class="bi bi-clock-history"></i>
                                        <span>Jam Kolaboratif:
                                            {{ $facility->collaborative_hours ?? '17:00 - 20:00' }}</span>
                                    </div>
                                    @if ($facility->images && count($facility->images) > 0)
                                        <div class="facility-images">
                                            @foreach ($facility->images as $image)
                                                <img src="{{ asset('storage/' . $image) }}" alt="Reading Room Image">
                                            @endforeach
                                        </div>
                                    @else
                                        <p class="text-muted">Tidak ada gambar tersedia.</p>
                                    @endif
                                </div>
                            @endforeach
                        @else
                            <p class="text-muted">Belum ada data untuk Ruang Baca.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
