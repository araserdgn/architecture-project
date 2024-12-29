@extends('layouts.app')

@section('title', 'İletisim')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>İletişim</h1>
                            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio
                                sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus
                                dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="current">İletişim</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-5">

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Konum</h3>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>İletişim Numarası</h3>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                    </div>
                </div>

                <form action="{{ route('contact.submit') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="İsim Soyisim" required>
                        </div>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="col-md-12">
                            <input type="tel" name="phone" class="form-control" placeholder="Telefon Numarası">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Mesajınız" required></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Yükleniyor...</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Mesajınız gönderildi, en kısa sürede size geri dönüş yapacağız!</div>
                            <button type="submit">Mesaj Gönderin</button>
                        </div>
                    </div>
                </form>

            </div>

        </section><!-- /Contact Section -->

    </main>
@endsection

