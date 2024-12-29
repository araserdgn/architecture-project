@extends('layouts.app')

@section('title', 'Anasayfa')

@section('content')
<main class="main">
    <section id="hero" class="hero section">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <h2><span>Biz </span><span class="underlight">Mercia Mimarlık</span> ofisi<span>
                        olarak hayallerinizi gerçekleştiriyoruz.</span></h2>
                    <p>Uzman mimarlık olarak, geçmişin farkındalığıyla, bugün için, özünde bilinmeyen bir gelecek için tasarlıyoruz.</p>
                    <a href="{{ route('contact') }}" class="btn-get-started">Bizlere Ulaşın<br></a>
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-2.jpg" title="Gallery 2"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-3.jpg" title="Gallery 3"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-4.jpg" title="Gallery 4"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-5.jpg" title="Gallery 5"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-6.jpg" title="Gallery 6"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-7.jpg" title="Gallery 7"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-8-2.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-8-2.jpg" title="Gallery 8"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->

            </div>

        </div>

    </section><!-- /Gallery Section -->

</main>
@endsection
