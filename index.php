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
      <div class="hero-stars">★★★★★</div>
      <h1 class="hero-title">THE ASPIRE HOTEL</h1>
      <div class="hero-divider"></div>
      <p class="hero-sub">
        Located in the heart of the city, this luxurious, modern hotel offers
        top-notch amenities for a perfect stay.
      </p>
      <a href="#rooms" class="hero-explore" id="hero-explore-btn">EXPLORE ROOMS &nbsp;→</a>
    </div>

    <div class="hero-bottom-bar">
      <div class="hero-op-info">
        <div class="since-box">SINCE 2025 — 1 YEAR OF HOSPITALITY</div>
        <a href="#about" class="story-link">OUR STORY &nbsp;→</a>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════ FEATURES ═══════════════════════ -->
  <section class="features-row" id="features">
    <div class="features-grid">
      <?php
      $features = [
        ['icon' => 'ph-map-pin', 'num' => '01', 'title' => 'Heart of the City', 'text' => "Ideally situated for easy access to landmarks, dining, and business centres."],
        ['icon' => 'ph-sparkle', 'num' => '02', 'title' => 'Luxurious & Modern', 'text' => 'Elegantly appointed spaces blending contemporary design with timeless comfort.'],
        ['icon' => 'ph-hand-heart', 'num' => '03', 'title' => 'Atithi Devo Bhava', 'text' => 'Warm, personalised hospitality that treats every guest as an honoured visitor.'],
        ['icon' => 'ph-tag', 'num' => '04', 'title' => 'Best Price Guarantee', 'text' => 'Exceptional value with exclusive rates for direct bookings, always.'],
        ['icon' => 'ph-buildings', 'num' => '05', 'title' => 'Corporate & Business', 'text' => 'Tailored packages, meeting facilities, and swift check-in for professionals.'],
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

    <!-- RATINGS STRIP -->
    <div class="ratings-row reveal">
      <div class="ratings-container">

        <div class="rating-item">
          <div class="rating-logo">B.</div>
          <div class="rating-info">
            <div class="rating-val">4.9<span class="rating-sep">/</span>5 <span class="stars">★</span> <span
                class="quality">Excellent</span></div>
            <div class="rating-count">3.5K Reviews on Booking</div>
          </div>
        </div>

        <div class="rating-divider"></div>

        <div class="rating-item">
          <div class="rating-logo brand-agoda">a</div>
          <div class="rating-info">
            <div class="rating-val">5<span class="rating-sep">/</span>5 <span class="stars">★</span> <span
                class="quality">Excellent</span></div>
            <div class="rating-count">4.1K Reviews on Agoda</div>
          </div>
        </div>

        <div class="rating-divider"></div>

        <div class="rating-item">
          <div class="rating-logo brand-trip">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M12 .5C5.649.5.5 5.649.5 12c0 6.351 5.149 11.5 11.5 11.5s11.5-5.149 11.5-11.5C23.5 5.649 18.351.5 12 .5zM9 16c-1.104 0-2-.896-2-2s.896-2 2-2 2 .896 2 2-.896 2-2 2zm6 0c-1.104 0-2-.896-2-2s.896-2 2-2 2 .896 2 2-.896 2-2 2z" />
            </svg>
          </div>
          <div class="rating-info">
            <div class="rating-val">4.8<span class="rating-sep">/</span>5 <span class="stars">★</span> <span
                class="quality">Very Good</span></div>
            <div class="rating-count">2.4K Reviews on Tripadvisor</div>
          </div>
        </div>

      </div>
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
  <section class="facilities-section" id="services">
    <div class="rooms-header reveal">
      <span class="eyebrow">FACILITIES AND SERVICES</span>
      <h2 class="section-title">Discover Our Services</h2>
    </div>

    <div class="collection-slider embla reveal" id="facilities-slider">
      <div class="slider-track embla__container">

        <!-- Railway & Hygiene -->
        <div class="slider-slide embla__slide">
          <div class="room-card-large">
            <div class="room-info-pane">
              <div class="room-price-tag">
                <span class="price-label">Location</span>
                <span class="price-val">Strategic & Central</span>
              </div>
              <h3 class="room-name-large">Prime Location &amp; Hygiene</h3>
              <p class="room-desc-large">Ideally located near the Guwahati Railway Station. We offer spacious rooms and
                prioritize utmost hygiene care for your comfortable and memorable stay.</p>
              <div class="room-details-grid">
                <div class="detail-item"><i class="ph ph-train"></i><span>NEAR RAILWAY STATION</span></div>
                <div class="detail-item"><i class="ph ph-sparkle"></i><span>HYGIENE CARE</span></div>
                <div class="detail-item"><i class="ph ph-arrows-out"></i><span>SPACIOUS ROOMS</span></div>
              </div>
              <div class="room-actions-large no-res">
                <a href="#about" class="btn-view-room">EXPLORE MORE &nbsp;→</a>
              </div>
            </div>
            <div class="room-image-pane">
              <img src="./assets/images/about_2.png" alt="Prime Location" />
            </div>
          </div>
        </div>

        <!-- Tour Packages -->
        <div class="slider-slide embla__slide">
          <div class="room-card-large">
            <div class="room-info-pane">
              <div class="room-price-tag">
                <span class="price-label">Travel Desk</span>
                <span class="price-val">Explore North-East</span>
              </div>
              <h3 class="room-name-large">Tour &amp; Group Bookings</h3>
              <p class="room-desc-large">Specialized tour packages and seamless arrangements for group bookings to
                explore popular destinations across the North-East states.</p>
              <div class="room-details-grid">
                <div class="detail-item"><i class="ph ph-users-three"></i><span>GROUP BOOKINGS</span></div>
                <div class="detail-item"><i class="ph ph-map-trifold"></i><span>TOUR PACKAGES</span></div>
                <div class="detail-item"><i class="ph ph-van"></i><span>TRAVEL ASSIST</span></div>
              </div>
              <div class="room-actions-large no-res">
                <a href="./offers.php" class="btn-view-room">VIEW OFFERS &nbsp;→</a>
              </div>
            </div>
            <div class="room-image-pane">
              <img src="./assets/images/facility_tour.png" alt="Tour Packages" />
            </div>
          </div>
        </div>

        <!-- Parking -->
        <div class="slider-slide embla__slide">
          <div class="room-card-large">
            <div class="room-info-pane">
              <div class="room-price-tag">
                <span class="price-label">Convenience</span>
                <span class="price-val">Hassle-Free Parking</span>
              </div>
              <h3 class="room-name-large">Ample Car Parking</h3>
              <p class="room-desc-large">Enjoy peace of mind with our dedicated and ample car parking facilities,
                ensuring safety and convenience for all our guests travelling by road.</p>
              <div class="room-details-grid">
                <div class="detail-item"><i class="ph ph-car"></i><span>SECURE PARKING</span></div>
                <div class="detail-item"><i class="ph ph-shield-check"></i><span>24/7 SAFETY</span></div>
                <div class="detail-item"><i class="ph ph-clock"></i><span>EASY ACCESS</span></div>
              </div>
              <div class="room-actions-large no-res">
                <a href="#contact" class="btn-view-room">REACH US &nbsp;→</a>
              </div>
            </div>
            <div class="room-image-pane">
              <img src="./assets/images/facility_parking.png" alt="Ample Parking" />
            </div>
          </div>
        </div>

        <!-- Rooftop Dining -->
        <div class="slider-slide embla__slide">
          <div class="room-card-large">
            <div class="room-info-pane">
              <div class="room-price-tag">
                <span class="price-label">Rooftop View</span>
                <span class="price-val">Dine with a View</span>
              </div>
              <h3 class="room-name-large">Rooftop Restaurant</h3>
              <p class="room-desc-large">Experience breathtaking views of the city and hills from our rooftop. Savour
                delicious, home-style food prepared fresh on request.</p>
              <div class="room-details-grid">
                <div class="detail-item"><i class="ph ph-mountains"></i><span>CITY &amp; HILL VIEWS</span></div>
                <div class="detail-item"><i class="ph ph-house-line"></i><span>HOME STYLE FOOD</span></div>
                <div class="detail-item"><i class="ph ph-chef-hat"></i><span>ON REQUEST</span></div>
              </div>
              <div class="room-actions-large no-res">
                <a href="./dining.php" class="btn-view-room">VIEW DINING &nbsp;→</a>
              </div>
            </div>
            <div class="room-image-pane">
              <img src="./assets/images/facility_rooftop.png" alt="Rooftop Restaurant" />
            </div>
          </div>
        </div>

        <!-- Events -->
        <div class="slider-slide embla__slide">
          <div class="room-card-large">
            <div class="room-info-pane">
              <div class="room-price-tag">
                <span class="price-label">Events</span>
                <span class="price-val">Celebrate with Us</span>
              </div>
              <h3 class="room-name-large">Parties &amp; Gatherings</h3>
              <p class="room-desc-large">The perfect venue for birthday party celebrations and small get-together
                arrangements, crafted with care for your special moments.</p>
              <div class="room-details-grid">
                <div class="detail-item"><i class="ph ph-cake"></i><span>BIRTHDAY PARTIES</span></div>
                <div class="detail-item"><i class="ph ph-users-four"></i><span>GET TOGETHERS</span></div>
                <div class="detail-item"><i class="ph ph-sparkle"></i><span>CUSTOM EVENTS</span></div>
              </div>
              <div class="room-actions-large no-res">
                <a href="#contact" class="btn-view-room">BOOK AN EVENT &nbsp;→</a>
              </div>
            </div>
            <div class="room-image-pane">
              <img src="./assets/images/facility_events.png" alt="Celebrations" />
            </div>
          </div>
        </div>

      </div>

      <button class="slider-arrow prev" aria-label="Previous facility">
        <i class="ph ph-arrow-left"></i>
      </button>
      <button class="slider-arrow next" aria-label="Next facility">
        <i class="ph ph-arrow-right"></i>
      </button>
    </div>
  </section>


  <!-- ═══════════════════════ GALLERY ═══════════════════════ -->
  <section class="explore" id="explore">
    <div class="container">
      <div class="section-header reveal">
        <span class="eyebrow">DISCOVER MORE</span>
        <h2 class="section-title">Explore The Aspire Hotel</h2>
      </div>
      <div class="gallery-grid reveal">
        <div class="gallery-cell gallery-cell-large">
          <img src="./assets/images/lobby_gallery.png" alt="Grand Lobby" />
          <div class="gallery-label">Grand Lobby</div>
        </div>
        <div class="gallery-cell gallery-cell-tall">
          <img src="./assets/images/room_deluxe.png" alt="City Views" />
          <div class="gallery-label">City Views</div>
        </div>
        <div class="gallery-cell gallery-cell-wide">
          <img src="./assets/images/gallery_pool.png" alt="Infinity Pool" />
          <div class="gallery-label">Infinity Pool</div>
        </div>
      </div>
    </div>
  </section>




  <!-- ═══════════════════════ MAP ═══════════════════════ -->
  <section class="map-section" id="map">
    <div class="container">
      <div class="section-header reveal">
        <span class="eyebrow">FIND US</span>
        <h2 class="section-title">Our Location</h2>
        <p class="section-sub">
          5PHX+G6W, MD Shah Rd, Paltan Bazaar, Guwahati, Assam 781008 — easily accessible from the airport and major
          landmarks.
        </p>
      </div>
      <div class="map-container reveal">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57408.42095597567!2d91.7086485!3d26.1445169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5948b879f007%3A0x6f5f3e3a069a6a7b!2sGuwahati%2C%20Assam!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
          width="100%" height="450" style="border:0" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade" title="The Aspire Hotel Location – Guwahati">
        </iframe>
      </div>
    </div>
  </section>


  <?php require_once __DIR__ . '/includes/footer.php'; ?>
  <?php require_once __DIR__ . '/includes/lightbox.php'; ?>
  <script src="./js/script.js"></script>
</body>

</html>