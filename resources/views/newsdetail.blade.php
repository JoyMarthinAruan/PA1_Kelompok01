@extends('layouts.main')

@section('content')
    <div class="news-detail-page">
        <div class="image-container">
            <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}">
        </div>

        <div class="title-overlay">
            <h1>{{ $newsItem->title }}</h1>
            <p>{{ $newsItem->description ?? 'Deskripsi tidak ditemukan' }}</p>

        </div>

        <div class="content">
            {!! $newsItem->content !!}
        </div>
    </div>
@endsection
