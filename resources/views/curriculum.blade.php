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
                <a href="{{ url('/metaprofile') }}" class="text-decoration-none text-muted">Profil</a>
            </li>
            <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">Kurikulum</li>
        </ol>
    </nav>
@endsection
