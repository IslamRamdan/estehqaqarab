<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>{{ $post->title }} | مدونة استحقاق العرب</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $post->excerpt }}">
    <meta name="author" content="استحقاق العرب للسباكة ومواد البناء">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ route('blog.show', $post) }}">

    <meta property="og:type" content="article">
    <meta property="og:locale" content="ar_AR">
    <meta property="og:site_name" content="استحقاق العرب للسباكة ومواد البناء">
    <meta property="og:title" content="{{ $post->title }} | استحقاق العرب">
    <meta property="og:description" content="{{ $post->excerpt }}">
    <meta property="og:url" content="{{ route('blog.show', $post) }}">
    @if ($post->image_url)
        <meta property="og:image" content="{{ $post->image_url }}">
    @endif
    <meta name="theme-color" content="#16899A">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

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

        .blog-hero h1 {
            font-size: clamp(2rem, 4.2vw, 3.3rem);
            font-weight: 900;
            line-height: 1.35;
            margin: 0 0 16px;
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

        /* ---------- Grid / Cards ---------- */
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

        .blog-page .blog-card a:focus-visible {
            outline: 3px solid var(--blog-primary);
            outline-offset: 3px;
        }

        /* ==========================================================
       صفحة المقال (blog-show)
       ========================================================== */
        .show-hero {
            padding: 130px 0 110px;
        }

        .show-hero h1 {
            font-size: clamp(1.8rem, 3.6vw, 2.8rem);
            max-width: 860px;
        }

        .show-hero .blog-meta {
            color: rgba(255, 255, 255, .8);
            margin-top: 18px;
            font-size: .95rem;
        }

        .show-hero .blog-meta i {
            color: #8fe3f0;
        }

        .show-hero .blog-card-tag {
            background: rgba(255, 255, 255, .16);
            color: #fff;
        }

        .show-hero .show-tag-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 10px 18px;
            margin-bottom: 16px;
        }

        .show-cover-section {
            position: relative;
            z-index: 3;
            margin-top: -64px;
        }

        .show-cover {
            margin: 0;
            border-radius: 24px;
            overflow: hidden;
            background: var(--blog-soft);
            aspect-ratio: 21 / 9;
            box-shadow: 0 24px 60px rgba(11, 58, 67, .18);
            border: 1px solid var(--blog-line);
        }

        .show-cover img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .show-article-section {
            padding: 56px 0 30px;
        }

        .show-article {
            max-width: 780px;
            margin-inline: auto;
        }

        .show-lead {
            font-size: 1.2rem;
            font-weight: 600;
            line-height: 2.1;
            color: var(--blog-ink);
            margin: 0 0 34px;
            padding-bottom: 30px;
            border-bottom: 1px solid var(--blog-line);
        }

        .show-content {
            font-size: 1.05rem;
            line-height: 2.15;
            color: #2b3f43;
        }

        .show-content h2 {
            font-size: 1.5rem;
            font-weight: 800;
            line-height: 1.6;
            color: var(--blog-ink);
            margin: 44px 0 14px;
            padding-inline-start: 16px;
            border-inline-start: 4px solid var(--blog-primary);
        }

        .show-content h3 {
            font-size: 1.15rem;
            font-weight: 800;
            margin: 28px 0 10px;
        }

        .show-content p {
            margin: 0 0 18px;
        }

        .show-content ul {
            list-style: none;
            margin: 0 0 22px;
            padding: 0;
        }

        .show-content ul li {
            position: relative;
            padding-inline-start: 34px;
            margin-bottom: 10px;
        }

        .show-content ul li::before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free", "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            inset-inline-start: 0;
            top: 4px;
            width: 22px;
            height: 22px;
            line-height: 22px;
            text-align: center;
            font-size: .65rem;
            color: #fff;
            background: var(--blog-primary);
            border-radius: 50%;
        }

        .show-note {
            display: flex;
            gap: 16px;
            align-items: flex-start;
            margin: 30px 0;
            background: var(--blog-soft);
            border: 1px solid var(--blog-line);
            border-inline-start: 4px solid var(--blog-primary);
            border-radius: 14px;
            padding: 20px 22px;
        }

        .show-note i {
            color: var(--blog-primary);
            font-size: 1.3rem;
            margin-top: 6px;
        }

        .show-note strong {
            display: block;
            font-weight: 800;
            margin-bottom: 4px;
        }

        .show-note p {
            margin: 0;
            font-size: 1rem;
            line-height: 2;
        }

        .show-footer-bar {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-top: 44px;
            padding-top: 26px;
            border-top: 1px solid var(--blog-line);
        }

        .show-share {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .show-share>span {
            font-weight: 700;
            font-size: .95rem;
            margin-inline-end: 4px;
        }

        .show-share a,
        .show-share button {
            width: 42px;
            height: 42px;
            display: inline-grid;
            place-items: center;
            cursor: pointer;
            border-radius: 12px;
            border: 1px solid var(--blog-line);
            background: #fff;
            color: var(--blog-primary-dark);
            font-size: 1rem;
            text-decoration: none;
            transition: background .2s, color .2s, border-color .2s;
        }

        .show-share a:hover,
        .show-share button:hover {
            background: var(--blog-primary);
            border-color: var(--blog-primary);
            color: #fff;
        }

        .show-share-note {
            font-size: .85rem;
            color: var(--blog-primary-dark);
            font-weight: 700;
            min-height: 1.4em;
        }

        .show-back {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-weight: 800;
            color: var(--blog-primary-dark);
            text-decoration: none;
        }

        .show-back:hover {
            text-decoration: underline;
        }

        .show-inquiry {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 18px;
            margin-top: 40px;
            background: linear-gradient(135deg, var(--blog-deep), var(--blog-primary-dark));
            color: #fff;
            border-radius: 20px;
            padding: 26px 28px;
        }

        .show-inquiry-icon {
            width: 56px;
            height: 56px;
            display: grid;
            place-items: center;
            border-radius: 16px;
            background: rgba(255, 255, 255, .14);
            font-size: 1.4rem;
        }

        .show-inquiry-text {
            flex: 1 1 240px;
        }

        .show-inquiry-text h3 {
            font-size: 1.15rem;
            font-weight: 800;
            margin: 0 0 4px;
        }

        .show-inquiry-text p {
            margin: 0;
            color: rgba(255, 255, 255, .82);
            font-size: .95rem;
            line-height: 1.9;
        }

        .show-inquiry-btn {
            display: inline-flex;
            gap: 10px;
            align-items: center;
            background: #25d366;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 12px;
        }

        .show-nav-section {
            padding: 30px 0 10px;
        }

        .show-nav {
            max-width: 780px;
            margin-inline: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .show-nav a {
            display: block;
            text-decoration: none;
            color: var(--blog-ink);
            border: 1px solid var(--blog-line);
            border-radius: var(--blog-radius);
            padding: 18px 22px;
            transition: border-color .2s, box-shadow .2s;
        }

        .show-nav a:hover {
            border-color: var(--blog-primary);
            box-shadow: 0 12px 28px rgba(22, 137, 154, .12);
        }

        .show-nav small {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--blog-primary-dark);
            font-weight: 700;
            font-size: .85rem;
            margin-bottom: 6px;
        }

        .show-nav strong {
            display: block;
            font-weight: 800;
            line-height: 1.7;
            font-size: 1rem;
        }

        .show-nav .next {
            text-align: end;
        }

        .show-nav .next small {
            justify-content: flex-end;
        }

        .show-related {
            padding: 60px 0 90px;
        }

        .show-related-title {
            font-size: 1.6rem;
            font-weight: 800;
            margin: 0 0 26px;
        }

        .blog-page .show-share a:focus-visible,
        .blog-page .show-share button:focus-visible,
        .blog-page .show-nav a:focus-visible,
        .blog-page .show-back:focus-visible {
            outline: 3px solid var(--blog-primary);
            outline-offset: 3px;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991.98px) {
            .blog-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .show-cover {
                aspect-ratio: 16 / 9;
            }
        }

        @media (max-width: 575.98px) {
            .blog-grid {
                grid-template-columns: 1fr;
            }

            .show-hero {
                padding: 120px 0 90px;
            }

            .show-nav {
                grid-template-columns: 1fr;
            }

            .show-nav .next {
                text-align: start;
            }

            .show-nav .next small {
                justify-content: flex-start;
            }

            .show-content h2 {
                font-size: 1.3rem;
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
        <!-- Article hero -->
        <section class="blog-hero show-hero">
            <div class="hero-grid-pattern"></div>
            <div class="blog-hero-orb"></div>

            <div class="container blog-hero-container">
                <nav class="blog-breadcrumb" aria-label="مسار الصفحة">
                    <a href="/">الرئيسية</a>
                    <i class="fas fa-angle-left"></i>
                    <a href="{{ route('blog.index') }}">المدونة</a>
                    <i class="fas fa-angle-left"></i>
                    <span>{{ \Illuminate\Support\Str::limit($post->title, 40) }}</span>
                </nav>

                <div class="show-tag-row">
                    <span class="blog-card-tag static">المدونة</span>
                </div>
                <h1>{{ $post->title }}</h1>
                <div class="blog-meta">
                    <span><i class="far fa-calendar"></i> {{ $post->created_at->translatedFormat('d F Y') }}</span>
                    <span><i class="far fa-clock"></i> {{ $post->reading_time }} دقائق قراءة</span>
                    <span><i class="far fa-user"></i> فريق استحقاق العرب</span>
                </div>
            </div>
        </section>

        <!-- Cover -->
        @if ($post->image)
            <section class="show-cover-section">
                <div class="container">
                    <figure class="show-cover">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                            fetchpriority="high">
                    </figure>
                </div>
            </section>
        @endif

        <!-- Article -->
        <section class="show-article-section">
            <div class="container">
                <article class="show-article">
                    <p class="show-lead">{{ $post->excerpt }}</p>

                    <div class="show-content">
                        {!! $post->content !!}
                    </div>

                    <div class="show-inquiry">
                        <span class="show-inquiry-icon"><i class="fas fa-headset"></i></span>
                        <div class="show-inquiry-text">
                            <h3>جاهز بقائمتك؟</h3>
                            <p>أرسلها لنا ونوضح لك الأصناف والمواصفات المتاحة.</p>
                        </div>
                        <a href="https://wa.me/966536008411?text={{ urlencode('السلام عليكم، قرأت مقالكم "' . $post->title . '" وأرغب في الاستفسار.') }}"
                            target="_blank" rel="noopener noreferrer" class="show-inquiry-btn">
                            <i class="fab fa-whatsapp"></i>
                            <span>استفسر عبر واتساب</span>
                        </a>
                    </div>

                    <div class="show-footer-bar">
                        <div class="show-share" id="showShare">
                            <span>شارك المقال</span>
                            <a href="#" data-share="whatsapp" target="_blank" rel="noopener noreferrer"
                                aria-label="مشاركة عبر واتساب"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" data-share="facebook" target="_blank" rel="noopener noreferrer"
                                aria-label="مشاركة عبر فيسبوك"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" data-share="x" target="_blank" rel="noopener noreferrer"
                                aria-label="مشاركة عبر إكس"><i class="fab fa-x-twitter"></i></a>
                            <button type="button" id="copyLink" aria-label="نسخ رابط المقال"><i
                                    class="fas fa-link"></i></button>
                            <span class="show-share-note" id="copyNote" aria-live="polite"></span>
                        </div>

                        <a href="{{ route('blog.index') }}" class="show-back">
                            <i class="fas fa-arrow-right"></i>
                            <span>العودة إلى المدونة</span>
                        </a>
                    </div>
                </article>
            </div>
        </section>



        <!-- Related -->
        @if ($related->isNotEmpty())
            <section class="show-related">
                <div class="container">
                    <h2 class="show-related-title">مقالات قد تهمك</h2>
                    <div class="blog-grid">
                        @foreach ($related as $item)
                            <article class="blog-card">
                                <a href="{{ route('blog.show', $item) }}" class="blog-card-media"
                                    aria-label="{{ $item->title }}">
                                    <span class="blog-card-fallback"><i class="fas fa-faucet"></i></span>
                                    @if ($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                            loading="lazy" onerror="this.remove()">
                                    @endif
                                    <span class="blog-card-tag">المدونة</span>
                                </a>
                                <div class="blog-card-body">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar"></i>
                                            {{ $item->created_at->translatedFormat('d F Y') }}</span>
                                        <span><i class="far fa-clock"></i> {{ $item->reading_time }} دقائق</span>
                                    </div>
                                    <h3><a href="{{ route('blog.show', $item) }}">{{ $item->title }}</a></h3>
                                    <p>{{ $item->excerpt }}</p>
                                    <a href="{{ route('blog.show', $item) }}" class="blog-read-more">
                                        <span>اقرأ المقال</span>
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        {{-- ====== الفوتر والأزرار العائمة: انسخهم من ملفك القديم كما هم (بدون تغيير) ====== --}}
    </main>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script>
        {{-- سكربت المشاركة ونسخ الرابط كما هو في ملفك القديم --}}
    </script>
</body>

</html>
