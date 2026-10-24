document.addEventListener("DOMContentLoaded", () => {
    const header = document.getElementById("siteHeader");
    const menuToggle = document.getElementById("menuToggle");
    const navigation = document.getElementById("mainNavigation");
    const navLinks = document.querySelectorAll(".modern-link");

    const updateHeader = () => {
        header?.classList.toggle("header-scrolled", window.scrollY > 15);
    };

    updateHeader();

    window.addEventListener("scroll", updateHeader, {
        passive: true
    });

    const closeMenu = () => {
        if (!menuToggle || !navigation) return;

        navigation.classList.remove("menu-open");
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "فتح القائمة");
        menuToggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
    };

    menuToggle?.addEventListener("click", () => {
        const isOpen = navigation.classList.toggle("menu-open");

        menuToggle.setAttribute("aria-expanded", String(isOpen));
        menuToggle.setAttribute(
            "aria-label",
            isOpen ? "إغلاق القائمة" : "فتح القائمة"
        );

        menuToggle.innerHTML = isOpen
            ? '<i class="fa-solid fa-xmark"></i>'
            : '<i class="fa-solid fa-bars"></i>';
    });

    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            navLinks.forEach((item) => item.classList.remove("active"));
            link.classList.add("active");
            closeMenu();
        });
    });

    document.addEventListener("click", (event) => {
        if (
            header &&
            navigation?.classList.contains("menu-open") &&
            !header.contains(event.target)
        ) {
            closeMenu();
        }
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            closeMenu();
        }
    });

    window.addEventListener("resize", () => {
        if (window.innerWidth > 991) {
            closeMenu();
        }
    });

    const sections = document.querySelectorAll("main section[id]");

    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                navLinks.forEach((link) => {
                    const active = link.getAttribute("href") ===
                        `#${entry.target.id}`;

                    link.classList.toggle("active", active);

                    if (active) {
                        link.setAttribute("aria-current", "location");
                    } else {
                        link.removeAttribute("aria-current");
                    }
                });
            });
        }, {
            rootMargin: "-20% 0px -65% 0px"
        });

        sections.forEach((section) => observer.observe(section));
    }

    const heroImage = document.querySelector(".visual-image-main img");

    heroImage?.addEventListener("error", () => {
        heroImage.style.display = "none";
        const imageContainer = heroImage.closest(".visual-image-main");

        if (imageContainer) {
            imageContainer.style.background =
                "linear-gradient(135deg, #243651, #183AD2)";
        }
    }, { once: true });
        const section = document.querySelector(".arab-about-section");

    if (!section) return;

    const elements = section.querySelectorAll(
        ".arab-about-content, .arab-about-main-image, .arab-about-inset, .arab-location-card, .arab-opening-card"
    );

    if (!("IntersectionObserver" in window)) {
        elements.forEach(function (element) {
            element.style.opacity = "1";
            element.style.transform = "translateY(0)";
        });
        return;
    }

    elements.forEach(function (element, index) {
        element.style.opacity = "0";
        element.style.transform = "translateY(22px)";
        element.style.transition =
            `opacity 0.7s ease ${index * 100}ms, transform 0.7s ease ${index * 100}ms`;
    });

    const observer = new IntersectionObserver(function (entries, currentObserver) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;

            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";

            currentObserver.unobserve(entry.target);
        });
    }, {
        threshold: 0.12
    });

    elements.forEach(function (element) {
        observer.observe(element);
    });
        const supplySection = document.querySelector(".supplies-section");

    if (!supplySection) return;

    const cards = supplySection.querySelectorAll(".supply-card");
    const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    if (reduceMotion || !("IntersectionObserver" in window)) {
        cards.forEach(card => card.classList.add("is-visible"));
        return;
    }

    const supplyObserver = new IntersectionObserver((entries, currentObserver) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;

            const card = entry.target;
            const index = Array.from(cards).indexOf(card);

            card.style.transitionDelay = `${index % 4 * 100}ms`;
            card.classList.add("is-visible");

            currentObserver.unobserve(card);
        });
    }, {
        threshold: 0.12,
        rootMargin: "0px 0px -35px 0px"
    });

    cards.forEach(card => supplyObserver.observe(card));
        const faqSection = document.querySelector("#faq");

    if (!faqSection) return;

    const items = faqSection.querySelectorAll(".faq-item");

    const closeItem = item => {
        const button = item.querySelector(".faq-question");
        const answer = item.querySelector(".faq-answer");

        item.classList.remove("active");
        button.setAttribute("aria-expanded", "false");
        answer.hidden = true;
    };

    const openItem = item => {
        const button = item.querySelector(".faq-question");
        const answer = item.querySelector(".faq-answer");

        item.classList.add("active");
        button.setAttribute("aria-expanded", "true");
        answer.hidden = false;
    };

    items.forEach(item => {
        const button = item.querySelector(".faq-question");

        button.addEventListener("click", () => {
            const isOpen = item.classList.contains("active");

            items.forEach(closeItem);

            if (!isOpen) {
                openItem(item);
            }
        });
    });
        const gallery = document.querySelector("#product-gallery");

    if (!gallery) return;

    const galleyCards = gallery.querySelectorAll(".gallery-card");
    const lightbox = gallery.querySelector("#galleryLightbox");
    const lightboxImage = gallery.querySelector("#galleryLightboxImage");
    const lightboxTitle = gallery.querySelector("#galleryLightboxTitle");
    const closeButton = gallery.querySelector(".gallery-lightbox-close");
    const zoomButtons = gallery.querySelectorAll(".gallery-zoom");

    let previousFocus = null;

    const showCards = () => {
        galleyCards.forEach(card => card.classList.add("is-visible"));
    };

    if (
        window.matchMedia("(prefers-reduced-motion: reduce)").matches ||
        !("IntersectionObserver" in window)
    ) {
        showCards();
    } else {
        const observer = new IntersectionObserver((entries, currentObserver) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;

                const index = Array.from(galleyCards).indexOf(entry.target);

                entry.target.style.transitionDelay = `${(index % 3) * 100}ms`;
                entry.target.classList.add("is-visible");

                currentObserver.unobserve(entry.target);
            });
        }, {
            threshold: 0.12,
            rootMargin: "0px 0px -30px 0px"
        });

        galleyCards.forEach(card => observer.observe(card));
    }

    const openLightbox = button => {
        const imagePath = button.dataset.image;
        const imageTitle = button.dataset.title || "";

        if (!imagePath) return;

        previousFocus = button;

        lightboxImage.src = imagePath;
        lightboxImage.alt = imageTitle;
        lightboxTitle.textContent = imageTitle;

        lightbox.hidden = false;
        lightbox.setAttribute("aria-hidden", "false");
        document.body.classList.add("gallery-lightbox-open");

        closeButton.focus();
    };

    const closeLightbox = () => {
        if (lightbox.hidden) return;

        lightbox.hidden = true;
        lightbox.setAttribute("aria-hidden", "true");
        document.body.classList.remove("gallery-lightbox-open");

        lightboxImage.removeAttribute("src");
        lightboxImage.alt = "";
        lightboxTitle.textContent = "";

        if (previousFocus) previousFocus.focus();
    };

    zoomButtons.forEach(button => {
        button.addEventListener("click", () => {
            openLightbox(button);
        });
    });

    closeButton.addEventListener("click", closeLightbox);

    lightbox.addEventListener("click", event => {
        if (event.target === lightbox) {
            closeLightbox();
        }
    });

    document.addEventListener("keydown", event => {
        if (event.key === "Escape") {
            closeLightbox();
        }
    });
        const ctaSection = document.querySelector(".plumbing-cta-section");

    if (!ctaSection) return;

    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        ctaSection.classList.add("is-visible");
                        observer.unobserve(ctaSection);
                    }
                });
            },
            {
                threshold: 0.15
            }
        );

        observer.observe(ctaSection);
    } else {
        ctaSection.classList.add("is-visible");
    }
     const contactForm = document.getElementById("arabContactForm");

    if (!contactForm) return;

    contactForm.addEventListener("submit", function (event) {
        event.preventDefault();

        if (!contactForm.checkValidity()) {
            contactForm.reportValidity();
            return;
        }

        const name = document.getElementById("arabContactName").value.trim();
        const phone = document.getElementById("arabContactPhone").value.trim();
        const subject = document.getElementById("arabContactSubject").value;
        const message = document.getElementById("arabContactMessage").value.trim();

        if (!name || !phone || !subject || !message) {
            contactForm.reportValidity();
            return;
        }

        const whatsappMessage = [
            "السلام عليكم، أرغب في الاستفسار عن منتجات شركة استحقاق العرب.",
            "",
            "الاسم: " + name,
            "رقم الجوال: " + phone,
            "القسم: " + subject,
            "تفاصيل الاستفسار: " + message
        ].join("\n");

        const whatsappURL =
            "https://wa.me/966536008411?text=" +
            encodeURIComponent(whatsappMessage);

        window.open(whatsappURL, "_blank", "noopener,noreferrer");

        contactForm.reset();

        contactForm.querySelectorAll("input, textarea, select").forEach(function (field) {
            field.value = "";
        });
    });
    const footerYear = document.getElementById("arabFooterYear");

    if (footerYear) {
        footerYear.textContent = new Date().getFullYear();
    }

    document.querySelectorAll(".arab-footer a[href^='#']").forEach(function (link) {
        link.addEventListener("click", function (event) {
            const targetId = link.getAttribute("href");

            if (!targetId || targetId === "#") return;

            const target = document.querySelector(targetId);

            if (target) {
                event.preventDefault();

                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }
        });
    })
        const backToTop = document.getElementById("arabBackToTop");

    if (!backToTop) return;

    function toggleBackToTop() {
        backToTop.classList.toggle("show", window.scrollY > 300);
    }

    window.addEventListener("scroll", toggleBackToTop, { passive: true });

    backToTop.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });

    toggleBackToTop();
        AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100,
        delay: 0
    });
        const mapSection = document.querySelector(".arab-map-section");

    if (!mapSection) return;

    const mapCard = mapSection.querySelector(".arab-map-card");

    if (mapCard) {
        mapCard.addEventListener("pointermove", function (event) {
            if (window.innerWidth <= 767) return;

            const rect = mapCard.getBoundingClientRect();
            const x = event.clientX - rect.left;
            const y = event.clientY - rect.top;

            mapCard.style.setProperty("--pointer-x", `${x}px`);
            mapCard.style.setProperty("--pointer-y", `${y}px`);
        });
    }
});
