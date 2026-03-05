/**
 * Dhanvis UltraTek - Dark Cyber-Tech Animations
 * Custom cursor, scroll reveals, counters, parallax & micro-interactions
 */

(function () {
    'use strict';

    // Configuration
    const config = {
        threshold: 0.15,
        rootMargin: '0px 0px -80px 0px',
        staggerDelay: 100,
        animationDuration: 800
    };

    // ─── Custom Cursor ─────────────────────────────────────────
    const initCursor = () => {
        // Skip on touch devices
        if ('ontouchstart' in window) return;

        const cursor = document.createElement('div');
        cursor.id = 'cursor';
        cursor.innerHTML = '<div id="cd"></div><div id="cr"></div>';
        document.body.appendChild(cursor);

        const cd = cursor.querySelector('#cd');
        const cr = cursor.querySelector('#cr');
        let mx = 0, my = 0, cx = 0, cy = 0;

        document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; });

        const lerp = (a, b, n) => a + (b - a) * n;

        const tick = () => {
            cx = lerp(cx, mx, 0.18);
            cy = lerp(cy, my, 0.18);
            cd.style.transform = `translate(${mx}px, ${my}px) translate(-50%, -50%)`;
            cr.style.transform = `translate(${cx}px, ${cy}px) translate(-50%, -50%)`;
            requestAnimationFrame(tick);
        };
        requestAnimationFrame(tick);

        // Hover expand on interactive elements
        const hoverTargets = 'a, button, .dv-btn, .dv-service-card, .dv-industry-card, .dv-nav__link, input, textarea';
        document.addEventListener('mouseover', e => {
            if (e.target.closest(hoverTargets)) document.body.classList.add('hov');
        });
        document.addEventListener('mouseout', e => {
            if (e.target.closest(hoverTargets)) document.body.classList.remove('hov');
        });
    };

    // Intersection Observer for scroll animations
    const createObserver = () => {
        return new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const delay = el.dataset.delay || 0;

                    setTimeout(() => {
                        el.classList.add('dv-animate--visible');

                        // Trigger counter animation for stats
                        if (el.classList.contains('dv-stats__number')) {
                            animateCounter(el);
                        }
                    }, delay);
                }
            });
        }, {
            threshold: config.threshold,
            rootMargin: config.rootMargin
        });
    };

    // Counter animation for statistics
    const animateCounter = (el) => {
        const target = parseInt(el.dataset.count) || parseFloat(el.textContent);
        const duration = 2000;
        const isDecimal = el.textContent.includes('.');
        const suffix = el.querySelector('span') ? el.querySelector('span').textContent : '';

        if (isNaN(target)) return;

        let start = 0;
        const startTime = performance.now();

        const updateCounter = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);

            // Easing function (ease-out-expo)
            const easeOut = 1 - Math.pow(1 - progress, 4);
            const current = start + (target - start) * easeOut;

            if (isDecimal) {
                el.innerHTML = current.toFixed(1) + suffix;
            } else {
                el.innerHTML = Math.floor(current).toLocaleString() + suffix;
            }

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                // Restore original content with suffix span
                if (suffix) {
                    el.innerHTML = (isDecimal ? target.toFixed(1) : target.toLocaleString()) + `<span>${suffix}</span>`;
                }
            }
        };

        requestAnimationFrame(updateCounter);
    };

    // Apply staggered delays to child elements
    const applyStaggeredDelays = (parent, childSelector) => {
        const children = parent.querySelectorAll(childSelector);
        children.forEach((child, index) => {
            child.dataset.delay = index * config.staggerDelay;
        });
    };

    // Initialize animations when DOM is ready
    const init = () => {
        const observer = createObserver();

        // Elements to animate with scroll reveal
        const animateElements = [
            // Hero / Banner
            '.dv-hero__badge',
            '.dv-hero__title',
            '.dv-hero__desc',
            '.dv-hero__actions',
            '.dv-page-banner__content',
            // Section headers
            '.dv-section-header',
            '.dv-services-header',
            // Cards and items
            '.dv-features__item',
            '.dv-service-card',
            '.dv-industry-card',
            '.dv-ind-card',
            '.dv-ind-hero-card',
            '.dv-feature-card',
            '.dv-stats__item',
            '.dv-vmg-card',
            '.dv-service-detail__feature',
            // Why-us
            '.dv-why-us__list',
            '.dv-why-us__badge',
            '.dv-why-us__visual',
            '.dv-why-us__stats',
            '.dv-why-us__title',
            '.dv-why-us__desc',
            // Images / Content blocks
            '.dv-about-image',
            '.dv-about-content',
            '.dv-service-info__image',
            '.dv-service-info__section',
            '.dv-service-info__footer',
            // Contact
            '.dv-contact-info',
            '.dv-contact-form',
            '.dv-contact-details',
            // Sidebar
            '.dv-sidebar-widget',
            '.dv-sidebar-cta',
            // CTA
            '.dv-cta-content',
            // Standards & Industries
            '.dv-standard-item',
            // Testimonials
            '.dv-testimonial',
            // Footer columns
            '.dv-footer__grid > div'
        ];

        // Apply animation classes and observe
        animateElements.forEach(selector => {
            document.querySelectorAll(selector).forEach(el => {
                // Don't re-apply if already animated
                if (el.classList.contains('dv-animate')) return;

                el.classList.add('dv-animate');
                observer.observe(el);
            });
        });

        // Apply staggered delays to grouped elements
        document.querySelectorAll('.dv-features__grid').forEach(grid => {
            applyStaggeredDelays(grid, '.dv-features__item');
        });

        document.querySelectorAll('.dv-industries__grid').forEach(grid => {
            applyStaggeredDelays(grid, '.dv-industry-card');
        });

        document.querySelectorAll('.dv-stats__grid').forEach(grid => {
            applyStaggeredDelays(grid, '.dv-stats__item');
        });

        document.querySelectorAll('.dv-services-grid').forEach(grid => {
            applyStaggeredDelays(grid, '.dv-service-card');
        });

        document.querySelectorAll('.dv-vmg-grid').forEach(grid => {
            applyStaggeredDelays(grid, '.dv-vmg-card');
        });

        document.querySelectorAll('.dv-ind-masonry__row').forEach(row => {
            applyStaggeredDelays(row, '.dv-ind-card, .dv-ind-hero-card');
        });

        document.querySelectorAll('.dv-ind-mega__featured-grid').forEach(grid => {
            applyStaggeredDelays(grid, '.dv-ind-hero-card');
        });

        document.querySelectorAll('.dv-features-grid').forEach(grid => {
            applyStaggeredDelays(grid, '.dv-feature-card');
        });

        document.querySelectorAll('.dv-testimonials__grid').forEach(grid => {
            applyStaggeredDelays(grid, '.dv-testimonial');
        });

        // Initialize smooth scroll for anchor links
        initSmoothScroll();

        // Initialize parallax effects
        initParallax();

        // Initialize hover effects
        initHoverEffects();

        // Initialize button ripple effect
        initButtonRipple();

        // Initialize CTA parallax
        initCtaParallax();

        // Initialize mobile menu animations
        initMobileMenu();
    };

    // Smooth scroll for anchor links
    const initSmoothScroll = () => {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    };

    // Parallax effects for backgrounds
    const initParallax = () => {
        const parallaxElements = document.querySelectorAll('[data-parallax]');

        if (parallaxElements.length === 0) return;

        let ticking = false;

        const updateParallax = () => {
            const scrollY = window.pageYOffset;

            parallaxElements.forEach(el => {
                const speed = parseFloat(el.dataset.parallax) || 0.5;
                const rect = el.getBoundingClientRect();
                const isVisible = rect.bottom >= 0 && rect.top <= window.innerHeight;

                if (isVisible) {
                    const yPos = (rect.top - window.innerHeight) * speed;
                    el.style.transform = `translate3d(0, ${yPos}px, 0)`;
                }
            });

            ticking = false;
        };

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }, { passive: true });
    };

    // Hover effects for interactive elements
    const initHoverEffects = () => {
        // Add magnetic effect to buttons
        document.querySelectorAll('.dv-btn').forEach(btn => {
            btn.addEventListener('mousemove', function (e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;

                this.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px)`;
            });

            btn.addEventListener('mouseleave', function () {
                this.style.transform = '';
            });
        });

        // Add tilt effect to cards
        document.querySelectorAll('.dv-service-card, .dv-industry-card, .dv-features__item').forEach(card => {
            card.addEventListener('mousemove', function (e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;

                this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
            });

            card.addEventListener('mouseleave', function () {
                this.style.transform = '';
            });
        });
    };

    // Button Ripple Effect
    const initButtonRipple = () => {
        document.querySelectorAll('.dv-btn').forEach(btn => {
            btn.addEventListener('click', function (e) {
                const ripple = document.createElement('span');
                ripple.classList.add('dv-ripple');

                const rect = this.getBoundingClientRect();
                ripple.style.left = (e.clientX - rect.left) + 'px';
                ripple.style.top = (e.clientY - rect.top) + 'px';

                this.appendChild(ripple);
                setTimeout(() => ripple.remove(), 600);
            });
        });
    };

    // CTA Background Parallax
    

    // Mobile menu animations
    const initMobileMenu = () => {
        const hamburger = document.querySelector('.dv-hamburger');
        const mobileMenu = document.querySelector('.dv-mobile-menu');

        if (!hamburger || !mobileMenu) return;

        hamburger.addEventListener('click', function () {
            this.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });
    };

    // Header scroll effect
    const initHeaderScroll = () => {
        const header = document.querySelector('.industify_fn_header, .dv-header');
        if (!header) return;

        let lastScroll = 0;

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll <= 0) {
                header.classList.remove('scrolled', 'scroll-up');
                return;
            }

            if (currentScroll > lastScroll && currentScroll > 100) {
                // Scrolling down
                header.classList.add('scrolled');
                header.classList.remove('scroll-up');
            } else if (currentScroll < lastScroll) {
                // Scrolling up
                header.classList.add('scroll-up');
            }

            lastScroll = currentScroll;
        }, { passive: true });
    };

    // Loading animation
    const initLoadingAnimation = () => {
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });
    };

    // Reduced motion support
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!prefersReducedMotion) {
        // Initialize all animations
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
        } else {
            init();
        }

        initCursor();
        initHeaderScroll();
        initLoadingAnimation();
    } else {
        // Show all content immediately for users who prefer reduced motion
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.dv-animate').forEach(el => {
                el.classList.add('dv-animate--visible');
            });
        });
    }

    // Export for use in other scripts
    window.DhanvisAnimations = {
        init,
        animateCounter,
        createObserver
    };

})();
