@extends('layouts.app')

@section('title', 'Hakkımızda')

@section('content')
<main class="main">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Hakkımızda</h1>
                        <p class="mb-0">2010 yılından bu yana, modern mimari ve özgün tasarım anlayışımızla yaşam alanlarınıza değer katıyoruz. Sürdürülebilir ve yenilikçi çözümlerle, hayallerinizi gerçeğe dönüştürüyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Anasayfa</a></li>
                    <li class="current">Hakkımızda</li>
                </ol>
            </div>
        </nav>
    </div>

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <img src="assets/img/profile-img.jpg" class="img-fluid" alt="Mercia Mimarlık Ofisi">
                </div>
                <div class="col-lg-5 content">
                    <h2>Modern Mimari ve Özgün Tasarım Anlayışı</h2>
                    <p class="fst-italic py-3">
                        Mercia Mimarlık olarak, her projeye özgün bir bakış açısıyla yaklaşıyor, müşterilerimizin ihtiyaç ve beklentilerini en ince ayrıntısına kadar değerlendiriyoruz.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Kuruluş:</strong> <span>2010</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Uzmanlaşma:</strong> <span>Mimari Tasarım</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Proje Sayısı:</strong> <span>200+</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Hizmet Alanı:</strong> <span>Türkiye Geneli</span></li>
                            </ul>
                        </div>
                    </div>
                    <p class="py-3">
                        Mercia Mimarlık olarak, modern mimari anlayışımızı geleneksel değerlerle harmanlayarak özgün yaşam alanları tasarlıyoruz. Sürdürülebilir mimari prensiplerine bağlı kalarak, çevreye duyarlı projeler geliştiriyoruz. Her projemizde fonksiyonellik ve estetiği bir araya getirerek, kullanıcılarımızın ihtiyaçlarına optimal çözümler sunuyoruz.
                    </p>
                    <p class="m-0">
                        Konut projelerinden ticari yapılara, kamu binalarından peyzaj düzenlemelerine kadar geniş bir yelpazede hizmet veriyoruz. Deneyimli ekibimiz ve güçlü teknik altyapımızla, projelerin konsept aşamasından uygulamaya kadar tüm süreçlerini titizlikle yönetiyoruz. Müşteri memnuniyetini ön planda tutarak, kaliteli ve zamanlı hizmet sunmayı ilke ediniyoruz.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Müşteri Yorumları</h2>
            <p>Müşterilerimizin Deneyimleri</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 1,
                                "spaceBetween": 40
                            },
                            "1200": {
                                "slidesPerView": 3,
                                "spaceBetween": 1
                            }
                        }
                    }
                </script>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                "Mercia Mimarlık ile villa projemizi hayata geçirdik. Modern tasarım anlayışları ve profesyonel yaklaşımları ile hayalimizdeki evi tam istediğimiz gibi tasarladılar. Süreç boyunca gösterdikleri özen ve sundukları çözümler için teşekkür ederiz."
                            </p>
                            <div class="profile mt-auto">
                                <h3>Ahmet Yılmaz</h3>
                                <h4>Villa Projesi Müşterisi</h4>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                "Ofisimizin iç mekan tasarımında Mercia Mimarlık'ı tercih ettik. Fonksiyonel ve estetik çözümleriyle çalışma alanımıza değer kattılar. Ekibin profesyonelliği ve yaratıcı yaklaşımı gerçekten etkileyiciydi."
                            </p>
                            <div class="profile mt-auto">
                                <h3>Ayşe Kaya</h3>
                                <h4>Şirket Yöneticisi</h4>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                "Alışveriş merkezimizin renovasyon projesinde Mercia Mimarlık ile çalıştık. Sürdürülebilir ve yenilikçi çözümleriyle mekanı tamamen dönüştürdüler. Müşteri trafiğimiz ve memnuniyetimiz arttı."
                            </p>
                            <div class="profile mt-auto">
                                <h3>Mehmet Demir</h3>
                                <h4>AVM Yöneticisi</h4>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                "Ev renovasyonumuzda Mercia Mimarlık'ın desteğini aldık. Sınırlı bütçemize rağmen maksimum verim alacağımız çözümler sundular. Yaşam alanımız hem daha fonksiyonel hem de daha estetik bir görünüme kavuştu."
                            </p>
                            <div class="profile mt-auto">
                                <h3>Zeynep Aydın</h3>
                                <h4>Konut Projesi Müşterisi</h4>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                "Restoranımızın tasarımında Mercia Mimarlık'ın imzası var. Mekanın ruhunu yansıtan özgün tasarımları ve detaylara verdikleri önem sayesinde müşterilerimizden çok olumlu geri dönüşler alıyoruz."
                            </p>
                            <div class="profile mt-auto">
                                <h3>Can Özkan</h3>
                                <h4>Restoran Sahibi</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</main>
@endsection
