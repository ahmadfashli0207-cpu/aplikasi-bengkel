// app.js - Mekaniku.id Interactive Scripts

document.addEventListener('DOMContentLoaded', function() {

    // === Navbar Scroll Effect ===
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            navbar?.classList.add('scrolled');
        } else {
            navbar?.classList.remove('scrolled');
        }
    });

    // === Mobile Menu Toggle ===
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    hamburger?.addEventListener('click', () => {
        mobileMenu?.classList.toggle('open');
        // Animate hamburger
        if (mobileMenu?.classList.contains('open')) {
            hamburger.children[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
            hamburger.children[1].style.opacity = '0';
            hamburger.children[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
        } else {
            hamburger.children[0].style.transform = '';
            hamburger.children[1].style.opacity = '';
            hamburger.children[2].style.transform = '';
        }
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (mobileMenu?.classList.contains('open') &&
            !hamburger?.contains(e.target) &&
            !mobileMenu?.contains(e.target)) {
            mobileMenu.classList.remove('open');
            hamburger.children[0].style.transform = '';
            hamburger.children[1].style.opacity = '';
            hamburger.children[2].style.transform = '';
        }
    });

    // === Scroll Animation ===
    const animatables = document.querySelectorAll('.animate-fadeInUp');
    const animObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                animObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    animatables.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        animObserver.observe(el);
    });

    // === Service Selection (Dashboard) ===
    const serviceOptions = document.querySelectorAll('.service-option');
    serviceOptions.forEach(opt => {
        opt.addEventListener('click', () => {
            serviceOptions.forEach(o => o.classList.remove('selected'));
            opt.classList.add('selected');
        });
    });

    // === Tab switching ===
    const tabs = document.querySelectorAll('[data-tab]');
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-tab');
            tabs.forEach(t => { t.classList.remove('active'); });
            tab.classList.add('active');
            document.querySelectorAll('[data-tab-content]').forEach(c => {
                c.style.display = c.getAttribute('data-tab-content') === target ? 'block' : 'none';
            });
        });
    });

    // === Smooth scroll for anchor links ===
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const target = document.querySelector(anchor.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // === Category Filter ===
    const filterBtns = document.querySelectorAll('[data-filter]');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const filter = btn.getAttribute('data-filter');
            document.querySelectorAll('[data-category]').forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = '';
                    card.classList.add('animate-fadeInUp');
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    console.log('Mekaniku.id app loaded ✓');
});
