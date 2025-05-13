@extends('layouts.app')

@section('content')
    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
        }

        .table th {
            background-color: #f8f9fa;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #e9ecef;
        }

        .table td {
            vertical-align: middle;
            font-size: 0.9rem;
        }

        .table tr:hover {
            background-color: #f1f3f5;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-warning,
        .btn-danger {
            border-radius: 8px;
            padding: 6px 12px;
            font-size: 0.85rem;
        }

        .img-thumbnail {
            border-radius: 8px;
            max-width: 80px;
            object-fit: cover;
        }

        .badge {
            padding: 6px 12px;
            border-radius: 12px;
            font-weight: 500;
        }

        .modal-content {
            border-radius: 12px;
            border: none;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            border-bottom: none;
            padding: 20px 24px;
        }

        .modal-title {
            font-weight: 600;
            font-size: 1.25rem;
        }

        .modal-body {
            padding: 24px;
        }

        .title-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .table-responsive {
                font-size: 0.85rem;
            }

            .btn-sm {
                padding: 4px 8px;
                font-size: 0.8rem;
            }
        }
    </style>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="mb-3">
                    <h2 class="mb-0 fw-bold text-dark">Berita</h2>
                    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#modal-news">
                        <i class="fas fa-plus me-2"></i>Tambah Berita
                    </button>
                </div>

                <div class="card">
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered text-center" id="newsTable">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 20%;">Judul</th>
                                        <th scope="col" style="width: 25%;">Deskripsi</th>
                                        <th scope="col" style="width: 15%;">Tanggal</th>
                                        <th scope="col" style="width: 15%;">Penulis</th>
                                        <th scope="col" style="width: 10%;">Gambar</th>
                                        <th scope="col" style="width: 10%;">Aktif</th>
                                        <th scope="col" style="width: 10%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($news as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ Str::limit($item->description, 100) }}</td>
                                            <td>{{ $item->date->format('d-m-Y') }}</td>
                                            <td>{{ $item->author }}</td>
                                            <td>
                                                @if ($item->image)
                                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-thumbnail"
                                                        alt="News Image">
                                                @else
                                                    <span class="text-muted">Tidak ada gambar</span>
                                                @endif
                                            </td>
                                            <td>
                                                <span class="badge {{ $item->is_active ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $item->is_active ? 'Aktif' : 'Tidak Aktif' }}
                                                </span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#modal-edit-news-{{ $item->id }}">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                                <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <!-- MODAL EDIT NEWS -->
                                        <div class="modal fade" id="modal-edit-news-{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="modal-edit-newsLabel-{{ $item->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Berita</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @include('admin.news.edit', ['news' => $item])
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL ADD NEWS -->
    <div class="modal fade" id="modal-news" tabindex="-1" aria-labelledby="modal-newsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('admin.news.create')
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Include DataTables and SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTables without search and pagination
            $('#newsTable').DataTable({
                responsive: true,
                pageLength: 10,
                searching: false, // Disable search
                lengthChange: false, // Disable entries dropdown
                paging: false, // Disable pagination
                info: false // Disable table info
            });

            // Flash message handling
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    timer: 2500,
                    showConfirmButton: false
                });
            @endif

            @if (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: '{{ session('error') }}',
                    timer: 2500,
                    showConfirmButton: false
                });
            @endif

            // Custom delete confirmation
            $('.delete-btn').on('click', function(e) {
                e.preventDefault();
                const form = $(this).closest('form');
                Swal.fire({
                    title: 'Hapus Berita?',
                    text: "Tindakan ini tidak dapat dibatalkan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
