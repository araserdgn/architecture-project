@extends('layouts.app')

@section('title', 'Projeler')
@section('description', 'Mimarlık ofisimizin tamamlanmış ve devam eden projeleri')
@section('keywords', 'mimari projeler, konut projeleri, ticari projeler, iç mimari')

@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Projelerimiz</h1>
                            <p class="mb-0">Mimarlık ofisimizin portföyünde yer alan seçkin projelerimizi inceleyebilirsiniz.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="current">Projeler</li>
                    </ol>
                </div>
            </nav>
        </div>

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">
            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 justify-content-center">
                    @forelse($projects as $project)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="project-card">
                            <div class="gallery-item">
                                @if($project->images && count($project->images) > 0)
                                    @if(Str::startsWith($project->images[0], 'projects/'))
                                        <img src="{{ Storage::url($project->images[0]) }}"
                                             class="img-fluid"
                                             alt="{{ $project->title }}">
                                    @else
                                        <img src="{{ asset('assets/img/gallery/' . $project->images[0]) }}"
                                             class="img-fluid"
                                             alt="{{ $project->title }}">
                                    @endif
                                @else
                                    <img src="{{ asset('assets/img/no-image.jpg') }}"
                                         class="img-fluid"
                                         alt="No Image">
                                @endif
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    @if($project->images && count($project->images) > 0)
                                        @if(Str::startsWith($project->images[0], 'projects/'))
                                            <a href="{{ Storage::url($project->images[0]) }}"
                                               title="{{ $project->title }}"
                                               class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        @else
                                            <a href="{{ asset('assets/img/gallery/' . $project->images[0]) }}"
                                               title="{{ $project->title }}"
                                               class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        @endif
                                    @endif
                                    <a href="{{ route('projects.show', $project->slug) }}"
                                       class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                            <div class="project-info">
                                <h4>{{ $project->title }}</h4>
                                <p class="project-category">{{ $project->category }}</p>
                                <p class="project-desc">{{ $project->short_description }}</p>
                                <a href="{{ route('projects.show', $project->slug) }}"
                                   class="btn btn-primary btn-sm">Detayları İncele</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <p>Henüz proje eklenmemiş.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
@endsection

<style>
.project-card {
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    height: 450px;
    display: flex;
    flex-direction: column;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    height: 250px;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.3s ease;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-links {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6);
    opacity: 0;
    transition: all 0.3s ease;
}

.gallery-item:hover .gallery-links {
    opacity: 1;
}

.project-info {
    padding: 20px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.project-info h4 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #333;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.project-category {
    color: #666;
    font-size: 14px;
    margin-bottom: 8px;
}

.project-desc {
    font-size: 14px;
    color: #777;
    margin-bottom: 15px;
    line-height: 1.6;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    flex: 1;
}

.btn-primary.btn-sm {
    padding: 8px 20px;
    font-size: 14px;
    border-radius: 4px;
    display: inline-block;
    transition: all 0.3s ease;
    margin-top: auto;
    align-self: flex-start;
}

.btn-primary.btn-sm:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.gallery-links a {
    color: #fff;
    font-size: 24px;
    margin: 0 8px;
    opacity: 0.8;
    transition: 0.3s;
}

.gallery-links a:hover {
    opacity: 1;
}
</style>
