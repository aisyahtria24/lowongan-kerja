@extends('layouts.guest')
@section('title', $title)
@section('content')
    <!-- Header-->
    <header class="pb-3">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div>
                    <h1 class="display-5 fw-bold">Selamat Datang!</h1>
                    <p class="fs-4">Platform ini hadir untuk membantu Anda menemukan lowongan kerja yang paling sesuai
                        dengan keahlian dan minat, dengan akses informasi yang jelas dari perusahaan terpercaya.
                        Mulailah langkah pertama menuju karier yang lebih baik melalui berbagai peluang pekerjaan
                        terverifikasi yang diperbarui setiap hari. Berikut 6 Lowongan Kerja Terbaru:</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content-->
    <section>
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                @forelse ($lowongans as $item)
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 ">
                            <div class="card-body ">
                                <a class="text-decoration-none" href="{{ route('lowongan.show', $item) }}">
                                    <div class="col mr-2">
                                        <div class="h6 font-weight-bold text-primary text-uppercase mb-1 desc-limit">
                                            {{ $item->judul }}</div>
                                        <p class="desc-limit text-muted small text-justify">{{ $item->deskripsi }}</p>
                                        <div class="row mt-3">
                                            <div class="h6 mb-0 font-weight-bold text-gray-800 col-sm"><i
                                                class="bi bi-building me-2"></i>{{ $item->perusahaan }}
                                            </div>
                                            <div class="h6 mb-0 font-weight-bold text-gray-800 col-sm"><i
                                                class="bi bi-geo-fill me-2 text-danger"></i>{{ $item->lokasi }}
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-3">
                                                <a href="{{ route('lowongan.show',$item) }}"
                                                class="btn btn-sm btn-outline-primary bg-gradient-danger">
                                                    <i class="fas fa-sign-in-alt mr-1"></i> lamar
                                                </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body text-center">
                                Tidak ada data lowongan tersedia.
                            </div>
                        </div>
                    </div>
                @endforelse

            </div>
        </div>
    </section>
@endsection
