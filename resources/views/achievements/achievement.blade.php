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

    <div class="container">
        <h1 class="my-4">Prestasi</h1>

        @foreach ($achievements as $achievement)
            <div class="card mb-4 shadow-sm">
                <div class="row no-gutters align-items-center">
                    @if ($achievement->image)
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $achievement->image) }}" class="img-fluid p-3"
                                alt="{{ $achievement->title }}">
                        </div>
                    @endif

                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $achievement->title }}</h5>
                            <p class="mb-1 text-muted">
                                <strong>By:</strong> {{ $achievement->author ?? 'Anonim' }}
                                &nbsp;&nbsp;
                                <strong>Date:</strong>
                                {{ $achievement->date ? \Carbon\Carbon::parse($achievement->date)->translatedFormat('F Y') : '-' }}

                                @if ($achievement->type)
                                    &nbsp;&nbsp;
                                    <strong>Type:</strong> {{ ucfirst($achievement->type) }}
                                @endif

                                @if ($achievement->file)
                                    <a href="{{ asset('storage/' . $achievement->file) }}" class="ms-2" download
                                        title="Download">
                                        <i class="bi bi-download"></i>
                                    </a>
                                @endif
                            </p>
                            <p class="card-text">{{ $achievement->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center">
            {{ $achievements->links() }}
        </div>
    </div>
@endsection
