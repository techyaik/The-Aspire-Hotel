<!doctype html>
<html lang="en">

<head>
  <?php
  $pageTitle = 'The Aspire Hotel – Guwahati';
  $pageDescription = 'The Aspire Hotel, located in the heart of Guwahati. Luxurious, modern and comfortable rooms. Best prices and memorable stay awaits you.';
  require_once __DIR__ . '/includes/head.php';
  ?>
</head>

<body>

  <?php require_once __DIR__ . '/includes/nav.php'; ?>

  <!-- ═══════════════════════ HERO ═══════════════════════ -->
  <section class="hero" id="home">
    <video class="hero-video" autoplay muted loop playsinline>
      <source src="./assets/videos/Vidio-BG.mp4" type="video/mp4" />
    </video>
    <div class="hero-overlay"></div>

    <div class="hero-content">
      <h1 class="hero-title">THE ASPIRE HOTEL</h1>
      <div class="hero-divider"></div>
      <p class="hero-sub">
        Located in the heart of the city, this luxurious, modern hotel offers
        top-notch amenities for a perfect stay.
      </p>
      <a href="#rooms" class="hero-explore" id="hero-explore-btn">EXPLORE ROOMS &nbsp;→</a>
    </div>

  </section>


  <!-- ═══════════════════════ FEATURES ═══════════════════════ -->
  <section class="features-row" id="features">
    <div class="features-grid">
      <?php
      $features = [
        ['icon' => 'ph-map-pin', 'num' => '01', 'title' => 'Heart of the City', 'text' => "Ideally situated at Paltanbazar, near Guwahati Railway Station. Easy access to business district and various tourist destinations."],
        ['icon' => 'ph-sparkle', 'num' => '02', 'title' => 'Luxurious & Modern', 'text' => 'Elegantly appointed spaces blending contemporary design with timeless comfort.'],
        ['icon' => 'ph-hand-heart', 'num' => '03', 'title' => 'Atithi Devo Bhava', 'text' => 'Warm, personalised hospitality that treats every guest as an honoured visitor.'],
        ['icon' => 'ph-tag', 'num' => '04', 'title' => 'Best Price Guarantee', 'text' => 'Exceptional value with exclusive rates for direct bookings, always.'],
        ['icon' => 'ph-buildings', 'num' => '05', 'title' => 'Corporate & Business', 'text' => 'Tailored packages for your business stays and transfers.'],
      ];
      foreach ($features as $f): ?>
        <div class="feature-item reveal">
          <span class="feature-num"><?= $f['num'] ?></span>
          <div class="feature-icon"><i class="ph <?= $f['icon'] ?>"></i></div>
          <h3 class="feature-title"><?= htmlspecialchars($f['title']) ?></h3>
          <p class="feature-text"><?= htmlspecialchars($f['text']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>


  <!-- ═══════════════════════ WELCOME / ABOUT ═══════════════════════ -->
  <section class="welcome-section" id="about">
    <div class="welcome-container">

      <div class="welcome-visuals reveal">
        <div class="welcome-image-single">
          <img src="./assets/images/about_2.png" alt="Luxury room" />
        </div>
      </div>

      <div class="welcome-content reveal">
        <span class="eyebrow">WELCOME TO THE ASPIRE</span>
        <h2 class="welcome-title">Luxury hotel in the<br />heart of the city.</h2>
        <p class="description">
          If you are looking for a luxury Hotel stay in Guwahati, The Aspire Hotel offers you with spacious rooms and
          utmost hygiene care for memorable stay. We truly believe our Guests feel comfortable. We are privileged to
          serve our guests. Located in Paltanbazar, Guwahati with a proximity of State Bus Stand and Guwahati Railway
          Station.
        </p>
        <a href="#explore" class="btn-lara-read">DISCOVER MORE &nbsp;→</a>
      </div>

    </div>

    <!-- TARIFF STRIP -->
    <div class="tariff-row reveal" id="tariff">
      <div class="tariff-header">
        <span class="eyebrow" style="color: var(--gold); letter-spacing: 4px; font-weight: 600;">PRICING GUIDE</span>
        <h2 class="tariff-heading">Room Tariff</h2>
      </div>
      <div class="tariff-container">
        <div class="tariff-item">
          <span class="tariff-name">Royale Family Room</span>
          <span class="tariff-dash"></span>
          <span class="tariff-price">₹4,000<span class="tariff-gst">+ G.S.T.</span></span>
        </div>
        <div class="tariff-item">
          <span class="tariff-name">Royale Deluxe Room</span>
          <span class="tariff-dash"></span>
          <span class="tariff-price">₹3,500<span class="tariff-gst">+ G.S.T.</span></span>
        </div>
        <div class="tariff-item">
          <span class="tariff-name">Deluxe Family Room</span>
          <span class="tariff-dash"></span>
          <span class="tariff-price">₹3,200<span class="tariff-gst">+ G.S.T.</span></span>
        </div>
        <div class="tariff-item">
          <span class="tariff-name">Deluxe Double Room</span>
          <span class="tariff-dash"></span>
          <span class="tariff-price">₹3,000<span class="tariff-gst">+ G.S.T.</span></span>
        </div>
        <div class="tariff-item">
          <span class="tariff-name">Standard Double Room</span>
          <span class="tariff-dash"></span>
          <span class="tariff-price">₹2,500<span class="tariff-gst">+ G.S.T.</span></span>
        </div>
        <div class="tariff-item">
          <span class="tariff-name">Standard Twin Room</span>
          <span class="tariff-dash"></span>
          <span class="tariff-price">₹2,600<span class="tariff-gst">+ G.S.T.</span></span>
        </div>
      </div>
    </div>

    <!-- CORPORATE DISCOUNT -->
    <div class="corporate-discount reveal">
      <p class="corp-sub">EXCLUSIVE PARTNERSHIPS</p>
      <h2 class="corporate-heading">Special Discount for Group Corporate Booking</h2>
      <a href="#contact" class="corporate-btn">BOOK NOW &nbsp;→</a>
    </div>
  </section>


  <!-- ═══════════════════════ ROOMS COLLECTION ═══════════════════════ -->
  <?php require_once __DIR__ . '/data/rooms.php'; ?>
  <section class="rooms-section" id="rooms">
    <div class="rooms-header reveal">
      <span class="eyebrow">EXQUISITE AND LUXURIOUS</span>
      <h2 class="section-title">Room &amp; Suite Collection</h2>
    </div>

    <div class="collection-slider embla reveal" id="rooms-slider">
      <div class="slider-track embla__container">

        <?php foreach ($roomsData as $key => $room): ?>
          <div class="slider-slide embla__slide">
            <div class="room-card-large">
              <div class="room-info-pane">
                <h3 class="room-name-large"><?= htmlspecialchars($room['name']) ?></h3>
                <div class="room-price-large"><?= htmlspecialchars($room['price']) ?></div>
                <p class="room-desc-large"><?= htmlspecialchars($room['description']) ?></p>
                <div class="room-details-grid">
                  <div class="detail-item"><i
                      class="ph ph-bed"></i><span><?= strtoupper(htmlspecialchars($room['beds'])) ?></span></div>
                  <div class="detail-item"><i
                      class="ph ph-users"></i><span><?= strtoupper(htmlspecialchars($room['guests'])) ?></span></div>
                  <div class="detail-item"><i
                      class="ph ph-map-trifold"></i><span><?= strtoupper(htmlspecialchars($room['view'])) ?></span></div>
                  <div class="detail-item"><i class="ph ph-prohibit"></i><span>NON-SMOKING</span></div>
                </div>
                <div class="room-actions-large">
                  <a href="./room-details.php?type=<?= urlencode($key) ?>" class="btn-book-now"><i
                      class="ph ph-calendar-check"></i>BOOK NOW</a>
                  <a href="./room-details.php?type=<?= urlencode($key) ?>" class="btn-view-room">VIEW DETAILS &nbsp;→</a>
                </div>
              </div>
              <div class="room-image-pane">
                <img src="<?= htmlspecialchars($room['gallery'][0]['url']) ?>"
                  alt="<?= htmlspecialchars($room['name']) ?>" />
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

      <button class="slider-arrow prev" aria-label="Previous room">
        <i class="ph ph-arrow-left"></i>
      </button>
      <button class="slider-arrow next" aria-label="Next room">
        <i class="ph ph-arrow-right"></i>
      </button>
    </div>
  </section>


  <!-- ═══════════════════════ FACILITIES ═══════════════════════ -->
  <section class="facilities-grid-section" id="services">
    <div class="container">
      <div class="rooms-header reveal">
        <span class="eyebrow" style="color: var(--gold); letter-spacing: 4px; font-weight: 600;">MODERN AND
          COMFORTABLE</span>
        <h2 class="section-title" style="font-family: var(--font-serif); font-size: 64px; margin-top: 10px;">Facilities
          and amenities</h2>
      </div>

      <div class="f-grid reveal">
        <!-- 01 -->
        <div class="f-card">
          <span class="f-num">01</span>
          <div class="f-icon"><i class="ph ph-train"></i></div>
          <h3 class="f-title">Prime Location</h3>
          <p class="f-desc">Ideally located near the Guwahati Railway Station with utmost hygiene care for your stay.
          </p>
        </div>

        <!-- 02 -->
        <div class="f-card">
          <span class="f-num">02</span>
          <div class="f-icon"><i class="ph ph-map-trifold"></i></div>
          <h3 class="f-title">Tour Packages</h3>
          <p class="f-desc">Specialized tour packages and arrangements for group bookings to explore the North-East.</p>
        </div>

        <!-- 03 -->
        <div class="f-card">
          <span class="f-num">03</span>
          <div class="f-icon"><i class="ph ph-car"></i></div>
          <h3 class="f-title">Ample Parking</h3>
          <p class="f-desc">Dedicated and secure car parking facilities ensuring convenience for all our guests.</p>
        </div>

        <!-- 04 -->
        <div class="f-card">
          <span class="f-num">04</span>
          <div class="f-icon"><i class="ph ph-mountains"></i></div>
          <h3 class="f-title">Rooftop Dining</h3>
          <p class="f-desc">Experience breathtaking city views and savour delicious home-style food fresh on request.
          </p>
        </div>

        <!-- 05 -->
        <div class="f-card">
          <span class="f-num">05</span>
          <div class="f-icon"><i class="ph ph-cake"></i></div>
          <h3 class="f-title">Event Hosting</h3>
          <p class="f-desc">The perfect venue for birthday parties and small get-togethers with personalised service.
          </p>
        </div>

        <!-- 06 -->
        <div class="f-card">
          <span class="f-num">06</span>
          <div class="f-icon"><i class="ph ph-clock"></i></div>
          <h3 class="f-title">24/7 Front Desk</h3>
          <p class="f-desc">Our dedicated staff is here to assist you with any requests at any hour of the day or night.
          </p>
        </div>

        <!-- 07 -->
        <div class="f-card">
          <span class="f-num">07</span>
          <div class="f-icon"><i class="ph ph-wifi-high"></i></div>
          <h3 class="f-title">Complimentary Wi-Fi</h3>
          <p class="f-desc">Stay connected with high-speed internet access available throughout the hotel premises.</p>
        </div>

        <!-- 08 -->
        <div class="f-card">
          <span class="f-num">08</span>
          <div class="f-icon"><i class="ph ph-house-line"></i></div>
          <h3 class="f-title">In-room Dining</h3>
          <p class="f-desc">Enjoy our curated menu of home-style food delivered directly to your room on request.</p>
        </div>

        <!-- 09 -->
        <div class="f-card">
          <span class="f-num">09</span>
          <div class="f-icon"><i class="ph ph-smoking-area"></i></div>
          <h3 class="f-title">Smoking Zone</h3>
          <p class="f-desc">Designated comfortable areas for smoking, ensuring a pleasant atmosphere throughout the hotel.</p>
        </div>

        <!-- 10 -->
        <div class="f-card">
          <span class="f-num">10</span>
          <div class="f-icon"><i class="ph ph-thermometer-cold"></i></div>
          <h3 class="f-title">Air Conditioned</h3>
          <p class="f-desc">All our rooms are fully air-conditioned to ensure your stay is comfortable and refreshing.</p>
        </div>
      </div>
    </div>
  </section>

  <style>
    .facilities-grid-section {
      padding: 100px 0;
      background: #fff;
    }

    .f-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 20px;
      margin-top: 60px;
    }

    .f-card {
      background: #fff;
      border: 1px solid #eee;
      padding: 40px 30px;
      text-align: center;
      position: relative;
      transition: all 0.3s ease;
    }

    .f-card:hover {
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      border-color: var(--gold);
    }

    .f-num {
      position: absolute;
      top: 15px;
      left: 20px;
      font-size: 11px;
      color: #ccc;
      font-weight: 600;
      letter-spacing: 1px;
    }

    .f-icon {
      font-size: 42px;
      color: var(--gold);
      margin-bottom: 25px;
    }

    .f-title {
      font-family: var(--font-serif);
      font-size: 22px;
      margin-bottom: 15px;
      color: #1a1a1a;
    }

    .f-desc {
      font-size: 14px;
      color: #666;
      line-height: 1.6;
    }

    @media (max-width: 1400px) {
      .f-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    @media (max-width: 1200px) {
      .f-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (max-width: 900px) {
      .f-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 600px) {
      .f-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>


  <!-- ═══════════════════════ GALLERY ═══════════════════════ -->
  <section class="explore" id="explore">
    <div class="container">
      <div class="section-header reveal">
        <span class="eyebrow">DISCOVER MORE</span>
        <h2 class="section-title">Explore The Aspire Hotel</h2>
      </div>
      <div class="gallery-slider-container reveal">
        <!-- Swiper -->
        <div class="swiper gallery-swiper">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
              <div class="gallery-slide-inner">
                <img src="./assets/images/lobby_gallery.png" alt="Grand Lobby" />
                <div class="gallery-label">Grand Lobby</div>
              </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
              <div class="gallery-slide-inner">
                <img src="./assets/images/gallery_pool.png" alt="Infinity Pool" />
                <div class="gallery-label">Infinity Pool</div>
              </div>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
              <div class="gallery-slide-inner">
                <img src="./assets/images/room_deluxe.png" alt="City Views" />
                <div class="gallery-label">City Views</div>
              </div>
            </div>
            <!-- Slide 4 -->
            <div class="swiper-slide">
              <div class="gallery-slide-inner">
                <img src="./assets/images/hero_1.png" alt="Modern Suites" />
                <div class="gallery-label">Modern Suites</div>
              </div>
            </div>
            <!-- Slide 5 -->
            <div class="swiper-slide">
              <div class="gallery-slide-inner">
                <img src="./assets/images/about_2.png" alt="Luxury Interior" />
                <div class="gallery-label">Luxury Interior</div>
              </div>
            </div>
            <!-- Slide 6 -->
            <div class="swiper-slide">
              <div class="gallery-slide-inner">
                <img src="./assets/images/room_standard_coll.png" alt="Cozy Rooms" />
                <div class="gallery-label">Cozy Rooms</div>
              </div>
            </div>
            <!-- Slide 7 -->
            <div class="swiper-slide">
              <div class="gallery-slide-inner">
                <img src="./assets/images/facility_tour.png" alt="Exceptional Service" />
                <div class="gallery-label">Exceptional Service</div>
              </div>
            </div>
          </div>
          
          <!-- Add Navigation -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        
        <!-- Add Pagination outside for better positioning -->
        <div class="swiper-pagination gallery-pagination"></div>
      </div>
    </div>
  </section>







  <?php require_once __DIR__ . '/includes/footer.php'; ?>
  <?php require_once __DIR__ . '/includes/lightbox.php'; ?>
  <script src="./js/script.js"></script>
</body>

</html>