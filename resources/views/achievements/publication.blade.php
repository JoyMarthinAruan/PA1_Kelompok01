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
            <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">Semua Publikasi</li>
        </ol>
    </nav>

    <div class="container">
        <h1 class="my-4">Publikasi</h1>

        @foreach ($publications as $pub)
            <div class="card mb-4 shadow-sm border-0">

                <div class="row no-gutters align-items-center">
                    @if ($pub->image)
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $pub->image) }}" class="img-fluid p-3"
                                alt="{{ $pub->title }}">
                        </div>
                    @endif

                    <div class="col-md-{{ $pub->image ? '8' : '12' }}">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase" style="color: #1976d2;">{{ $pub->title }}</h5>
                            <p class="mb-1 text-muted">
                                <strong>By:</strong> {{ $pub->author ?? 'Anonim' }}

                                <strong>Date:</strong>
                                {{ $pub->date ? \Carbon\Carbon::parse($pub->date)->translatedFormat('F Y') : '-' }}

                                @if ($pub->type)
                                    <strong>Type:</strong> {{ $pub->type }}
                                @endif

                                @if ($pub->file)
                                    <a href="{{ asset('storage/' . $pub->file) }}" class="ms-2" download title="Download">
                                        <i class="bi bi-download"></i>
                                    </a>
                                @endif
                            </p>
                            <p class="card-text" style="text-align: justify;">{{ $pub->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center">
            {{ $publications->links() }}
        </div>
    </div>
@endsection
