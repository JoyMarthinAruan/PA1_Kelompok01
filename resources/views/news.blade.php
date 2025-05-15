@extends('layouts.main')

@section('content')
    <div class="container all-news-page">
        <div class="breadcrumbs">
            <a href="{{ url('/') }}">Home</a>
            <span style="margin: 0 10px;">/</span>
            <span>Semua Berita</span>
        </div>

        <div class="main-content">
            <div class="news-list">
                @forelse ($news as $item)
                    <div class="news-item">
                        <div class="news-image-container">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="news-image">
                        </div>
                        <div class="news-details">
                            <a href="{{ route('newsdetail', $item->id) }}">
                                <h3 class="news-title">{{ $item->title }}</h3>
                            </a>
                            <p class="news-excerpt">
                                {{ Str::limit($item->description, 300, '...') }}
                            </p>
                            <a href="{{ route('newsdetail', $item->id) }}" class="read-more">Lihat Selengkapnya</a>

                            <div class="news-meta mt-2">
                                <span><i class="far fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($item->date)->format('d F Y') }}</span>
                                <span><i class="far fa-user"></i> {{ $item->author }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Belum ada berita.</p>
                @endforelse

                <div class="mt-4">
                    {{ $news->links() }}
                </div>
            </div>

            <div class="sidebar">
                <h3>Rilis Berita</h3>
                <ul class="recent-news">
                    @foreach ($recentNews as $recent)
                        <li>
                            <a href="{{ route('newsdetail', $recent->id) }}"><strong>{{ $recent->title }}</strong></a>
                            <span class="news-meta">
                                <i class="far fa-calendar-alt"></i>
                                {{ \Carbon\Carbon::parse($recent->date)->format('d F Y') }}
                                <i class="far fa-user ml-2"></i> {{ $recent->author }}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
