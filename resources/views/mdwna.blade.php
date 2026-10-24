<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>المدونة | استحقاق العرب للسباكة ومواد البناء</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="مدونة استحقاق العرب: مقالات ونصائح عملية عن مستلزمات السباكة ومواد البناء والأدوات الصحية والمضخات والسخانات.">
    <meta name="keywords"
        content="مدونة سباكة, نصائح السباكة, مواد بناء, أدوات صحية, سخانات المياه, مضخات المياه, استحقاق العرب">
    <meta name="author" content="استحقاق العرب للسباكة ومواد البناء">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://YOUR-DOMAIN.com/blog.html">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="ar_AR">
    <meta property="og:site_name" content="استحقاق العرب للسباكة ومواد البناء">
    <meta property="og:title" content="المدونة | استحقاق العرب">
    <meta property="og:description" content="نصائح ومقالات عملية عن السباكة ومواد البناء والتجهيز.">
    <meta property="og:url" content="https://YOUR-DOMAIN.com/blog.html">
    <meta name="theme-color" content="#16899A">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="css/index.css">
    <style>
        :root {
            --blog-primary: #16899A;
            --blog-primary-dark: #0f6b79;
            --blog-deep: #0b3a43;
            --blog-ink: #14272b;
            --blog-muted: #5d7277;
            --blog-line: #dfe9eb;
            --blog-soft: #f2f8f9;
            --blog-white: #ffffff;
            --blog-radius: 18px;
            --blog-font: 'Cairo', sans-serif;
        }

        .blog-page {
            font-family: var(--blog-font);
            color: var(--blog-ink);
            background: var(--blog-white);
        }

        .blog-page .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            overflow: hidden;
            clip: rect(0 0 0 0);
            white-space: nowrap;
        }

        /* ---------- Hero ---------- */
        .blog-hero {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, var(--blog-deep) 0%, #0e5560 55%, var(--blog-primary-dark) 100%);
            color: #fff;
            padding: 140px 0 70px;
        }

        .blog-hero .hero-grid-pattern {
            position: absolute;
            inset: 0;
            opacity: .18;
            pointer-events: none;
        }

        .blog-hero-orb {
            position: absolute;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            inset-inline-start: -140px;
            bottom: -220px;
            background: radial-gradient(circle, rgba(255, 255, 255, .14), transparent 68%);
            pointer-events: none;
        }

        .blog-hero-container {
            position: relative;
            z-index: 2;
        }

        .blog-breadcrumb {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: .92rem;
            margin-bottom: 28px;
            color: rgba(255, 255, 255, .75);
        }

        .blog-breadcrumb a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }

        .blog-breadcrumb a:hover {
            text-decoration: underline;
        }

        .blog-breadcrumb i {
            font-size: .7rem;
        }

        .blog-hero-kicker {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            font-size: .98rem;
            margin-bottom: 18px;
            color: rgba(255, 255, 255, .9);
        }

        .blog-hero-kicker .kicker-line {
            display: inline-block;
            width: 40px;
            height: 2px;
            background: #fff;
            opacity: .7;
        }

        .blog-hero h1 {
            font-size: clamp(2rem, 4.2vw, 3.3rem);
            font-weight: 900;
            line-height: 1.35;
            margin: 0 0 16px;
        }

        .blog-hero h1 span {
            display: block;
            color: #8fe3f0;
        }

        .blog-hero p {
            font-size: 1.08rem;
            line-height: 2;
            max-width: 560px;
            color: rgba(255, 255, 255, .82);
            margin: 0;
        }

        /* ---------- Meta / tags ---------- */
        .blog-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 8px 16px;
            font-size: .86rem;
            color: var(--blog-muted);
        }

        .blog-meta i {
            color: var(--blog-primary);
            margin-inline-end: 4px;
        }

        .blog-card-tag {
            background: rgba(22, 137, 154, .12);
            color: var(--blog-primary-dark);
            font-weight: 700;
            font-size: .8rem;
            padding: 5px 14px;
            border-radius: 999px;
        }

        .blog-card-tag.static {
            display: inline-block;
        }

        /* ---------- List ---------- */
        .blog-list-section {
            padding: 60px 0 90px;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 26px;
        }

        .blog-card {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            background: #fff;
            border: 1px solid var(--blog-line);
            border-radius: var(--blog-radius);
            transition: border-color .25s, box-shadow .25s;
        }

        .blog-card:hover {
            border-color: var(--blog-primary);
            box-shadow: 0 16px 36px rgba(22, 137, 154, .14);
        }

        .blog-card[hidden] {
            display: none;
        }

        .blog-card-media {
            position: relative;
            display: block;
            aspect-ratio: 16 / 10;
            overflow: hidden;
            background: var(--blog-soft);
        }

        .blog-card-fallback {
            position: absolute;
            inset: 0;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, #e3f3f5, #c9e7ec);
            color: var(--blog-primary);
            font-size: 2.6rem;
        }

        .blog-card-media img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .5s ease;
        }

        .blog-card:hover .blog-card-media img {
            transform: scale(1.05);
        }

        .blog-card-media .blog-card-tag {
            position: absolute;
            top: 14px;
            inset-inline-start: 14px;
            background: #fff;
            box-shadow: 0 6px 16px rgba(0, 0, 0, .12);
        }

        .blog-card-body {
            display: flex;
            flex-direction: column;
            flex: 1;
            padding: 22px 22px 24px;
        }

        .blog-card-body h3 {
            font-size: 1.12rem;
            font-weight: 800;
            line-height: 1.7;
            margin: 12px 0 8px;
        }

        .blog-card-body h3 a {
            color: var(--blog-ink);
            text-decoration: none;
        }

        .blog-card-body h3 a:hover {
            color: var(--blog-primary-dark);
        }

        .blog-card-body p {
            color: var(--blog-muted);
            font-size: .95rem;
            line-height: 1.95;
            margin: 0 0 18px;
        }

        .blog-read-more {
            margin-top: auto;
            align-self: flex-start;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--blog-primary-dark);
            font-weight: 800;
            text-decoration: none;
            font-size: .95rem;
        }

        .blog-read-more i {
            font-size: .8rem;
            transition: transform .25s;
        }

        .blog-read-more:hover i {
            transform: translateX(-5px);
        }

        /* ---------- Focus ---------- */
        .blog-page .blog-card a:focus-visible {
            outline: 3px solid var(--blog-primary);
            outline-offset: 3px;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991.98px) {
            .blog-hero {
                padding: 130px 0 80px;
            }

            .blog-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 575.98px) {
            .blog-grid {
                grid-template-columns: 1fr;
            }

            .blog-list-section {
                padding: 50px 0 70px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .blog-page * {
                transition: none !important;
            }
        }
    </style>
</head>

<body class="blog-page">
    <header class="modern-header" id="siteHeader">
        <div class="container">
            <nav class="modern-nav">
                <a href="/#home" class="modern-brand">
                    <span class="brand-symbol"><i class="fas fa-screwdriver-wrench"></i></span>
                    <span class="brand-copy">
                        <strong>استحقاق العرب</strong>
                        <small>للسباكة ومواد البناء</small>
                    </span>
                </a>

                <button class="modern-menu-toggle" id="menuToggle" aria-label="فتح القائمة" aria-expanded="false"
                    aria-controls="mainNavigation">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div class="modern-navigation" id="mainNavigation">
                    <a href="/#home" class="modern-link">الرئيسية</a>
                    <a href="/#about" class="modern-link">من نحن</a>
                    <a href="/#categories" class="modern-link">الأقسام</a>
                    <a href="/#services" class="modern-link">خدماتنا</a>
                    <a href="{{ route('blog.index') }}" class="modern-link active">المدونة</a>
                    <a href="/#faq" class="modern-link">الأسئلة الشائعة</a>
                    <a href="/#contact" class="modern-link">تواصل معنا</a>

                    <a href="https://wa.me/966536008411" target="_blank" rel="noopener noreferrer"
                        class="modern-nav-cta">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>اطلب استفسارك</span>
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <!-- Blog hero -->
        <section class="blog-hero" id="blog-top">
            <div class="hero-grid-pattern"></div>
            <div class="blog-hero-orb"></div>

            <div class="container blog-hero-container">
                <nav class="blog-breadcrumb" aria-label="مسار الصفحة">
                    <a href="/">الرئيسية</a>
                    <i class="fas fa-angle-left"></i>
                    <span>المدونة</span>
                </nav>

                <div class="row align-items-end g-4">
                    <div class="col-lg-8">
                        <div class="blog-hero-kicker">
                            <span class="kicker-line"></span>
                            <span>مدونة استحقاق العرب</span>
                        </div>
                        <h1>معرفة عملية تسبق <span>قرار الشراء.</span></h1>
                        <p>
                            مقالات قصيرة عن السباكة ومواد البناء والمياه والتجهيز،
                            نكتبها لتختار المنتج المناسب وتنفذ عملك بثقة.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- List -->
        <section class="blog-list-section" id="articles">
            <div class="container">
                <div class="blog-grid" id="blogGrid">
                    @foreach ($blogs as $blog)
                        <article class="blog-card" data-title="{{ $blog->title }}">
                            <a href="{{ route('blog.show', $blog->id) }}" class="blog-card-media"
                                aria-label="{{ $blog->title }}">
                                <span class="blog-card-fallback"><i class="fas fa-faucet"></i></span>
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                    loading="lazy" onerror="this.remove()">
                            </a>
                            <div class="blog-card-body">
                                <div class="blog-meta">
                                    <span>
                                        <i class="far fa-calendar"></i>
                                        {{ $blog->created_at->locale('ar')->translatedFormat('d F Y') }}
                                    </span>
                                </div>
                                <h3><a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></h3>
                                <a href="{{ route('blog.show', $blog->id) }}" class="blog-read-more">
                                    <span>اقرأ المقال</span>
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <footer class="arab-footer" dir="rtl">
            <div class="arab-footer-top-line"></div>
            <div class="container">
                <div class="arab-footer-main">
                    <div class="row g-5">
                        <div class="col-lg-4 col-md-6">
                            <div class="arab-footer-brand">
                                <a href="/" class="arab-footer-logo">
                                    <span class="arab-footer-logo-icon"><i
                                            class="fas fa-screwdriver-wrench"></i></span>
                                    <span class="arab-footer-logo-text">
                                        <strong>استحقاق العرب</strong>
                                        <small>للسباكة ومواد البناء</small>
                                    </span>
                                </a>
                                <p class="arab-footer-description">
                                    نوفر لك مجموعة متنوعة من مستلزمات السباكة ومواد البناء
                                    والأدوات الصحية، لمساعدتك في تلبية احتياجاتك ومستلزمات مشروعاتك.
                                </p>
                                <a href="https://wa.me/966536008411?text=%D8%A7%D9%84%D8%B3%D9%84%D8%A7%D9%85%20%D8%B9%D9%84%D9%8A%D9%83%D9%85%D8%8C%20%D8%A3%D8%B1%D8%BA%D8%A8%20%D9%81%D9%8A%20%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D9%81%D8%B3%D8%A7%D8%B1%20%D8%B9%D9%86%20%D9%85%D9%86%D8%AA%D8%AC%D8%A7%D8%AA%20%D8%A7%D8%B3%D8%AA%D8%AD%D9%82%D8%A7%D9%82%20%D8%A7%D9%84%D8%B9%D8%B1%D8%A8."
                                    target="_blank" rel="noopener noreferrer" class="arab-footer-whatsapp">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>تواصل معنا عبر واتساب</span>
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <div class="arab-footer-social">
                                    <a href="https://wa.me/966536008411" target="_blank" rel="noopener noreferrer"
                                        aria-label="واتساب"><i class="fab fa-whatsapp"></i></a>
                                    <a href="tel:+966536008411" aria-label="اتصل بنا"><i
                                            class="fas fa-phone-alt"></i></a>
                                    <a href="https://www.snapchat.com/add/esthqaq" target="_blank"
                                        rel="noopener noreferrer" aria-label="سناب شات"><i
                                            class="fab fa-snapchat"></i></a>
                                    <a href="https://www.facebook.com/share/1FnF4bQWdc/" target="_blank"
                                        rel="noopener noreferrer" aria-label="فيسبوك"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.tiktok.com/@esthqaq?_r=1&_t=ZS-9AUlYB97BG4" target="_blank"
                                        rel="noopener noreferrer" aria-label="تيك توك"><i
                                            class="fab fa-tiktok"></i></a>
                                    <a href="https://www.instagram.com/esthqaq_1/" target="_blank"
                                        rel="noopener noreferrer" aria-label="إنستجرام"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-6">
                            <div class="arab-footer-column">
                                <h3 class="arab-footer-title">روابط سريعة</h3>
                                <ul class="arab-footer-links">
                                    <li><a href="/"><i class="fas fa-angle-left"></i> الرئيسية</a></li>
                                    <li><a href="/#about"><i class="fas fa-angle-left"></i> من نحن</a></li>
                                    <li><a href="/#services"><i class="fas fa-angle-left"></i> خدماتنا</a>
                                    </li>
                                    <li><a href="/#categories"><i class="fas fa-angle-left"></i> أقسامنا</a>
                                    </li>
                                    <li><a href="{{ route('blog.index') }}"><i class="fas fa-angle-left"></i>
                                            المدونة</a></li>
                                    <li><a href="/#faq"><i class="fas fa-angle-left"></i> الأسئلة الشائعة</a>
                                    </li>
                                    <li><a href="/#contact"><i class="fas fa-angle-left"></i> اتصل بنا</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="arab-footer-column">
                                <h3 class="arab-footer-title">أقسام المنتجات</h3>
                                <ul class="arab-footer-links">
                                    <li><a href="/#categories"><i class="fas fa-angle-left"></i> مستلزمات
                                            السباكة</a></li>
                                    <li><a href="/#categories"><i class="fas fa-angle-left"></i> مواد البناء
                                            والتشييد</a></li>
                                    <li><a href="/#categories"><i class="fas fa-angle-left"></i> الأدوات
                                            الصحية</a></li>
                                    <li><a href="/#categories"><i class="fas fa-angle-left"></i> المضخات
                                            والسخانات</a></li>
                                    <li><a href="/#categories"><i class="fas fa-angle-left"></i> فلاتر المياه
                                            والخزانات</a></li>
                                    <li><a href="/#categories"><i class="fas fa-angle-left"></i> الكهرباء
                                            والتمديدات</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="arab-footer-column arab-footer-contact-column">
                                <h3 class="arab-footer-title">معلومات التواصل</h3>
                                <a href="tel:+966536008411" class="arab-footer-contact-item">
                                    <span class="arab-footer-contact-icon"><i class="fas fa-phone-alt"></i></span>
                                    <div><strong>رقم الهاتف</strong>
                                        <p dir="ltr">+966 53 600 8411</p>
                                    </div>
                                </a>
                                <a href="https://wa.me/966536008411" target="_blank" rel="noopener noreferrer"
                                    class="arab-footer-contact-item">
                                    <span class="arab-footer-contact-icon"><i class="fab fa-whatsapp"></i></span>
                                    <div><strong>واتساب</strong>
                                        <p>راسلنا للاستفسار عن المنتجات</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="arab-footer-bottom">
                    <p>جميع الحقوق محفوظة © <span id="arabFooterYear"></span> <strong>استحقاق العرب</strong></p>
                    <a href="https://wa.me/966536008411" target="_blank" rel="noopener noreferrer">صُمم لخدمتكم <i
                            class="fas fa-heart"></i></a>
                </div>
            </div>
        </footer>

        <div class="arab-floating-contact" dir="ltr">
            <a href="https://wa.me/966536008411?text=%D8%A7%D9%84%D8%B3%D9%84%D8%A7%D9%85%20%D8%B9%D9%84%D9%8A%D9%83%D9%85%D8%8C%20%D8%A3%D8%B1%D8%BA%D8%A8%20%D9%81%D9%8A%20%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D9%81%D8%B3%D8%A7%D8%B1%20%D8%B9%D9%86%20%D9%85%D9%86%D8%AA%D8%AC%D8%A7%D8%AA%20%D8%A7%D8%B3%D8%AA%D8%AD%D9%82%D8%A7%D9%82%20%D8%A7%D9%84%D8%B9%D8%B1%D8%A8."
                class="arab-floating-btn arab-floating-whatsapp" target="_blank" rel="noopener noreferrer"
                aria-label="تواصل معنا عبر واتساب" title="تواصل عبر واتساب">
                <i class="fab fa-whatsapp"></i>
                <span class="arab-floating-tooltip">تواصل عبر واتساب</span>
            </a>
            <a href="tel:+966536008411" class="arab-floating-btn arab-floating-phone"
                aria-label="اتصل بشركة استحقاق العرب" title="اتصل الآن">
                <i class="fas fa-phone-alt"></i>
                <span class="arab-floating-tooltip">اتصل الآن</span>
            </a>
        </div>
        <button id="arabBackToTop" class="arab-back-to-top" aria-label="العودة إلى أعلى الصفحة"
            title="العودة للأعلى">
            <i class="fas fa-arrow-up"></i>
        </button>
    </main>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="js/index.js"></script>
    <script>
        (function() {
            var year = document.getElementById('arabFooterYear');
            if (year && !year.textContent) year.textContent = new Date().getFullYear();
            if (window.AOS) AOS.init({
                duration: 700,
                once: true
            });
        })();
    </script>
</body>

</html>
