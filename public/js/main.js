(function () {
    'use strict';

    var doc = document;
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var finePointer = window.matchMedia('(pointer: fine)').matches;

    /* ---------- Navbar, parallax hero, tombol to-top ---------- */
    var nav = doc.getElementById('nav');
    var toTop = doc.getElementById('to-top');
    var hero = doc.getElementById('hero');
    var heroMedia = doc.getElementById('hero-media');
    var ticking = false;

    function update() {
        ticking = false;
        var y = window.scrollY || 0;
        if (nav) nav.classList.toggle('is-scrolled', y > 24);
        if (toTop) toTop.classList.toggle('is-show', y > 640);
        if (hero && heroMedia && !reduceMotion) {
            var h = hero.offsetHeight;
            if (y <= h) heroMedia.style.transform = 'translate3d(0,' + (y * 0.28).toFixed(1) + 'px,0)';
        }
    }
    window.addEventListener('scroll', function () {
        if (!ticking) { window.requestAnimationFrame(update); ticking = true; }
    }, { passive: true });
    update();

    if (toTop) {
        toTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
        });
    }

    /* ---------- Menu mobile ---------- */
    var burger = doc.getElementById('nav-burger');
    var menu = doc.getElementById('nav-menu');

    function setMenu(open) {
        if (!burger || !menu) return;
        burger.classList.toggle('is-open', open);
        menu.classList.toggle('is-open', open);
        doc.body.classList.toggle('menu-open', open);
        burger.setAttribute('aria-expanded', open ? 'true' : 'false');
        burger.setAttribute('aria-label', open ? 'Tutup menu' : 'Buka menu');
    }
    if (burger && menu) {
        burger.addEventListener('click', function () {
            setMenu(!menu.classList.contains('is-open'));
        });
        menu.addEventListener('click', function (e) {
            if (e.target.closest('a')) setMenu(false);
        });
        doc.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') setMenu(false);
        });
        window.addEventListener('resize', function () {
            if (window.innerWidth > 960) setMenu(false);
        });
    }

    /* ---------- Reveal saat scroll ---------- */
    var revealEls = doc.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && !reduceMotion) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });
        revealEls.forEach(function (el) { io.observe(el); });
    } else {
        revealEls.forEach(function (el) { el.classList.add('is-visible'); });
    }

    /* ---------- Angka dampak (counter) ---------- */
    function formatNum(n, dec) {
        return n.toLocaleString('id-ID', { minimumFractionDigits: dec, maximumFractionDigits: dec });
    }
    function runCounter(el) {
        var target = parseFloat(el.getAttribute('data-count')) || 0;
        var dec = parseInt(el.getAttribute('data-decimals') || '0', 10);
        if (reduceMotion) { el.textContent = formatNum(target, dec); return; }
        var start = null, dur = 1600;
        function step(ts) {
            if (start === null) start = ts;
            var p = Math.min(1, (ts - start) / dur);
            var eased = 1 - Math.pow(1 - p, 3);
            el.textContent = formatNum(target * eased, dec);
            if (p < 1) window.requestAnimationFrame(step);
            else el.textContent = formatNum(target, dec);
        }
        window.requestAnimationFrame(step);
    }
    var counters = doc.querySelectorAll('[data-count]');
    if (counters.length) {
        if ('IntersectionObserver' in window) {
            var cio = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) { runCounter(entry.target); cio.unobserve(entry.target); }
                });
            }, { threshold: 0.6 });
            counters.forEach(function (el) { cio.observe(el); });
        } else {
            counters.forEach(runCounter);
        }
    }

    /* ---------- Spotlight kartu layanan ---------- */
    if (finePointer) {
        doc.querySelectorAll('[data-spot]').forEach(function (card) {
            card.addEventListener('pointermove', function (e) {
                var r = card.getBoundingClientRect();
                card.style.setProperty('--mx', (e.clientX - r.left) + 'px');
                card.style.setProperty('--my', (e.clientY - r.top) + 'px');
            });
        });
    }

    /* ---------- Scrollspy anchor navbar ---------- */
    var spyLinks = Array.prototype.slice.call(doc.querySelectorAll('[data-spy]'));
    if (spyLinks.length && 'IntersectionObserver' in window) {
        var pairs = [];
        spyLinks.forEach(function (link) {
            var hash = (link.getAttribute('href') || '').split('#')[1];
            var sec = hash && doc.getElementById(hash);
            if (sec) pairs.push({ sec: sec, link: link });
        });
        if (pairs.length) {
            var sio = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    var match = pairs.find(function (p) { return p.sec === entry.target; });
                    if (!match) return;
                    spyLinks.forEach(function (l) { l.classList.remove('is-active'); });
                    match.link.classList.add('is-active');
                });
            }, { rootMargin: '-45% 0px -50% 0px' });
            pairs.forEach(function (p) { sio.observe(p.sec); });
        }
    }

    /* ---------- Form kontak → buka aplikasi email ---------- */
    var form = doc.getElementById('contact-form');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var data = new FormData(form);
            var nama = String(data.get('nama') || '').trim();
            var email = String(data.get('email') || '').trim();
            var pesan = String(data.get('pesan') || '').trim();
            var subject = encodeURIComponent('Halo ATMI Recycle Studio — ' + nama);
            var body = encodeURIComponent(pesan + '\n\n— ' + nama + '\n' + email);
            var status = doc.getElementById('form-status');
            if (status) {
                status.textContent = 'Membuka aplikasi email Anda…';
                status.classList.add('is-on');
            }
            window.location.href = 'mailto:halo@recyclestudio.id?subject=' + subject + '&body=' + body;
        });
    }
})();