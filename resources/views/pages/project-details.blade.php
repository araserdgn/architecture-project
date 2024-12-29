@extends('layouts.app')

@section('title', $project->title)
@section('description', $project->short_description)
@section('keywords', 'mimari proje, ' . $project->category)

@section('content')
<main class="main">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>{{ $project->title }}</h1>
                        <p class="mb-0">{{ $project->short_description }}</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Anasayfa</a></li>
                    <li><a href="{{ route('projects') }}">Projeler</a></li>
                    <li class="current">{{ $project->title }}</li>
                </ol>
            </div>
        </nav>
    </div>

    <!-- Gallery Details Section -->
    <section id="gallery-details" class="gallery-details section">
        <div class="container" data-aos="fade-up">
            <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    @foreach($project->images as $image)
                        <div class="swiper-slide">
                            @if(Str::startsWith($image, 'projects/'))
                                <img src="{{ Storage::url($image) }}" alt="{{ $project->title }}">
                            @else
                                <img src="{{ asset('assets/img/gallery/' . $image) }}" alt="{{ $project->title }}">
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="row justify-content-between gy-4 mt-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>{{ $project->title }}</h2>
                        <div class="project-content">
                            {!! $project->description !!}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="portfolio-info">
                        <h3>Proje Bilgileri</h3>
                        <ul>
                            <li><strong>Kategori</strong> {{ $project->category }}</li>
                            <li><strong>Müşteri</strong> {{ $project->client }}</li>
                            <li><strong>Proje Tarihi</strong> {{ $project->project_date->format('d.m.Y') }}</li>
                            <li><strong>Konum</strong> {{ $project->location }}</li>
                            <li><strong>Alan</strong> {{ $project->area }}</li>
                            @if($project->website)
                            <li><strong>Website</strong> <a href="{{ $project->website }}" target="_blank">{{ $project->website }}</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.portfolio-details-slider', {
        loop: true,
        speed: 600,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });
});
</script>
@endpush
