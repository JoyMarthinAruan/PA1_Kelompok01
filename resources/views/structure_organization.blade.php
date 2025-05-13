@extends('layouts.main') <!-- Assuming you have a layout file -->

@section('content')
    <nav class="navbar bg-primary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">STRUKTUR ORGANISASI DOSEN</span>
        </div>
    </nav>

    <nav class="navbar">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-center mx-auto text-dark">
                STRUKTUR ORGANISASI FAKULTAS TEKNOLOGI INDUSTRI<br>
                JURUSAN MANAJEMEN REKAYASA<br>
                INSTITUT TEKNOLOGI DEL
            </span>
        </div>
    </nav>

    <section class="struktur-dosen">
        <style>
            .struktur-dosen {
                font-family: 'Poppins', sans-serif;

            }

            .container-dosen {
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
            }

            .level {
                display: flex;
                justify-content: center;
                margin: 20px 0;
            }

            .box {
                background-color: #0056b3;
                color: white;
                text-align: center;
                padding: 10px 20px;
                margin: 0 10px;
                border-radius: 5px;
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                min-width: 200px;
                /* Set a minimum width for the boxes */
            }

            .box img {
                border-radius: 50%;
                width: 100px;
                height: 100px;
                display: block;
                margin-bottom: 10px;
                object-fit: cover;
                /* Ensure images fill the space nicely */
            }

            .connector {
                width: 2px;
                height: 20px;
                background-color: black;
                position: absolute;
                top: -20px;
                left: 50%;
                transform: translateX(-50%);
            }

            .connector-horizontal {
                width: 20px;
                height: 2px;
                background-color: black;
                position: absolute;
                top: 50%;
                left: -20px;
                transform: translateY(-50%);
            }

            .box:first-child .connector-horizontal {
                display: none;
            }
        </style>

        <div class="container-dosen">
            @php
                $levels = [];
                foreach ($organizations as $organization) {
                    $levels[$organization->level][] = $organization;
                }
            @endphp

            @foreach ($levels as $level => $organizationsInLevel)
                <div class="level">
                    @foreach ($organizationsInLevel as $index => $organization)
                        <div class="box">
                            @if ($level > 1)
                                <div class="connector"></div>
                                @if ($index > 0)
                                    <div class="connector-horizontal"></div>
                                @endif
                            @endif

                            @if ($organization->image)
                                <img src="{{ asset('storage/structure-organization/' . $organization->image) }}"
                                    alt="{{ $organization->position }}">
                            @endif

                            <div>{{ $organization->position }}</div>
                            @if ($organization->name)
                                <div>{{ $organization->name }}</div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@endsection
