document.addEventListener('DOMContentLoaded', () => {
  const nav = document.getElementById('main-nav');

  // ── Reveal Animations ──
  window.revealObserver = new IntersectionObserver(
    (entries) => entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); }),
    { threshold: 0.12 }
  );
  document.querySelectorAll('.reveal').forEach(el => window.revealObserver.observe(el));

  // ── Embla Carousels ──
  document.querySelectorAll('.collection-slider').forEach(wrapper => {
    const embla = EmblaCarousel(wrapper, { loop: true, dragFree: false, duration: 12 });
    const prev  = wrapper.querySelector('.slider-arrow.prev');
    const next  = wrapper.querySelector('.slider-arrow.next');
    if (prev) prev.addEventListener('click', () => embla.scrollPrev());
    if (next) next.addEventListener('click', () => embla.scrollNext());
  });

  // ── Scroll: Nav + Back-to-Top ──
  window.addEventListener('scroll', () => {
    if (!nav) return;
    nav.classList.toggle('scrolled', window.scrollY > 60);

    const btn = document.getElementById('back-to-top');
    if (btn) btn.classList.toggle('visible', window.scrollY > 400);
  });

  const backToTopBtn = document.getElementById('back-to-top');
  if (backToTopBtn) {
    backToTopBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  // ── Lightbox ──
  const lightbox        = document.getElementById('lightbox');
  const lightboxImg     = document.getElementById('lightbox-img');
  const lightboxCaption = document.getElementById('lightbox-caption');
  const lightboxClose   = document.querySelector('.lightbox-close');
  const lightboxPrev    = document.querySelector('.lightbox-prev');
  const lightboxNext    = document.querySelector('.lightbox-next');

  // Gallery data: injected by PHP on room-details.php, or derived from DOM on index.php
  let activeGallery = window.roomGallery || [];
  let lightBoxIndex = 0;

  const openLightbox = (index, gallery) => {
    if (gallery) activeGallery = gallery;
    lightBoxIndex = index;
    if (!activeGallery.length) return;
    lightboxImg.src              = activeGallery[lightBoxIndex].url;
    lightboxCaption.textContent  = activeGallery[lightBoxIndex].title;
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
  };

  const closeLightbox = () => {
    lightbox.classList.remove('active');
    document.body.style.overflow = '';
  };

  const showNext = () => {
    lightBoxIndex = (lightBoxIndex + 1) % activeGallery.length;
    lightboxImg.src             = activeGallery[lightBoxIndex].url;
    lightboxCaption.textContent = activeGallery[lightBoxIndex].title;
  };

  const showPrev = () => {
    lightBoxIndex = (lightBoxIndex - 1 + activeGallery.length) % activeGallery.length;
    lightboxImg.src             = activeGallery[lightBoxIndex].url;
    lightboxCaption.textContent = activeGallery[lightBoxIndex].title;
  };

  // Room details gallery (server-rendered)
  const detailsGallery = document.querySelector('.gallery-grid-new');
  if (detailsGallery) {
    detailsGallery.addEventListener('click', e => {
      const item = e.target.closest('.gallery-item-new');
      if (item) openLightbox(parseInt(item.dataset.index), window.roomGallery);
    });
  }

  if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
  if (lightboxNext)  lightboxNext.addEventListener('click',  showNext);
  if (lightboxPrev)  lightboxPrev.addEventListener('click',  showPrev);
  if (lightbox)      lightbox.addEventListener('click', e => { if (e.target === lightbox) closeLightbox(); });

  // ── Mobile Menu ──
  const hamburger   = document.getElementById('nav-hamburger');
  const mobileMenu  = document.getElementById('mobile-menu');
  const menuOverlay = document.getElementById('mobile-menu-overlay');
  const menuClose   = document.getElementById('mobile-menu-close');

  if (hamburger && mobileMenu && menuOverlay && menuClose) {
    const openMenu  = () => { mobileMenu.classList.add('open'); menuOverlay.classList.add('open'); document.body.style.overflow = 'hidden'; };
    const closeMenu = () => { mobileMenu.classList.remove('open'); menuOverlay.classList.remove('open'); document.body.style.overflow = ''; };

    hamburger.addEventListener('click', openMenu);
    menuClose.addEventListener('click', closeMenu);
    menuOverlay.addEventListener('click', closeMenu);
    
    // Updated listener for mobile links: don't close if it has subnav or is a toggle
    document.querySelectorAll('.mobile-nav-links a').forEach(a => {
      a.addEventListener('click', () => {
        closeMenu();
      });
    });

    // Mobile Subnav Toggle
    document.querySelectorAll('.subnav-toggle').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        const parent = btn.closest('.has-subnav');
        parent.classList.toggle('open');
      });
    });
  }



  // ── SwiperJS: Gallery ──
  if (document.querySelector('.gallery-swiper')) {
    new Swiper('.gallery-swiper', {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.gallery-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
      }
    });
  }
});
