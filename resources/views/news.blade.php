@extends('layouts.main')

@section('content')
    <div class="container all-news-page">
        <div class="breadcrumbs">
            <a href="#">Home</a> / Semua Berita
        </div>

        <div class="main-content">
            <div class="news-list">
                @forelse ($news as $item)
                    <div class="news-item">
                        <div class="news-image-container">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="news-image">
                        </div>
                        <div class="news-details">
                            <a href="#">
                                <h3 class="news-title">{{ $item->title }}</h3>
                            </a>
                            <p class="news-excerpt">
                                {{ Str::limit($item->content, 300, '...') }}
                            </p>
                            <p class="news-excerpt">
                                {{ Str::limit($item->description, 400, '...') }}
                                <a href="{{ route('news1', $item->id) }}" class="read-more">Lihat Selengkapnya</a>
                            </p>


                            <div class="news-meta">
                                <span class="news-date"><i class="far fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($item->date)->format('d F Y') }}</span>
                                <span class="news-author"><i class="far fa-user"></i> {{ $item->author }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Belum ada berita.</p>
                @endforelse

                {{ $news->links() }} {{-- Tampilkan link paginasi --}}
            </div>

            <div class="sidebar">
                <h3>Rilis Berita</h3>
                <ul class="recent-news">
                    @foreach ($recentNews as $recent)
                        <li>
                            <a href="#"><strong>{{ $recent->title }}</strong></a>
                            <span class="news-meta">
                                <i class="far fa-calendar-alt"></i>
                                {{ \Carbon\Carbon::parse($recent->date)->format('d F Y') }}
                                <i class="far fa-user"></i> {{ $recent->author }}
                            </span>
                        </li>
                    @endforeach
                    <!-- More recent news items -->
                </ul>
            </div>
        </div>
    </div>
@endsection
