@extends('layouts.app')

@section('title', 'Selamat Datang Admin!')

@section('header', 'Selamat Datang, Admin!')

@section('subtitle', 'Kumpulan Data')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Kumpulan Data</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Berita -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <p>Berita</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <a href="{{ route('admin.news.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Testimoni -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <p>Testimoni</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <a href="{{ route('admin.testimonial.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Kerjasama -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <p>Kerjasama</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <a href="{{ route('admin.collaborate.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Meta Profile -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <p>Meta Profile</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-plane"></i>
                            </div>
                            <a href="{{ route('admin.metaprofile.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Curriculum -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <p>Kurikulum</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <a href="{{ route('admin.curriculum.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Achievement -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-light">
                            <div class="inner">
                                <p>Prestasi</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="{{ route('admin.achievement.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Facility -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <p>Fasilitas</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <a href="{{ route('admin.facility.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Laboratory -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <p>Laboratorium</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-flask"></i>
                            </div>
                            <a href="{{ route('admin.laboratory.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Lecturer -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <p>Dosen</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <a href="{{ route('admin.lecturer.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Structure -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-dark">
                            <div class="inner">
                                <p>Struktur Dosen</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-sitemap"></i>
                            </div>
                            <a href="{{ route('admin.structure_organization.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Student Activity -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <p>Kegiatan Mahasiswa</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="{{ route('admin.studentactivity.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
