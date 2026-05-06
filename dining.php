<!doctype html>
<html lang="en">
<head>
  <?php
  $pageTitle = 'Dining – The Aspire Hotel';
  $pageDescription = 'Experience fine dining at The Aspire Hotel. From global cuisines to local delicacies, our chefs prepare every dish with passion and excellence.';
  require_once __DIR__ . '/includes/head.php';
  ?>
</head>
<body>

<?php
$navPage  = 'contact'; // Use 'contact' state to ensure links point back to index.php
$navClass = 'scrolled';
require_once __DIR__ . '/includes/nav.php';
?>

<!-- ═══════════════════════ DINING HERO ═══════════════════════ -->
<section class="details-hero">
  <img
    src="./assets/images/facility_dining.png"
    alt="The Grand Restaurant"
    class="details-hero-img"
  />
  <div class="details-hero-overlay">
    <div class="details-hero-inner">
      <a href="./index.php" class="details-breadcrumb">
        <i class="ph ph-arrow-left"></i> The Aspire Hotel
      </a>
      <h1 class="details-room-name">The Grand Restaurant</h1>
      <div class="details-hero-meta">
        <span class="details-room-view">FINE DINING & GLOBAL CUISINE</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ DINING CONTENT ═══════════════════════ -->
<main class="details-main">
  <div class="details-grid" style="grid-template-columns: 1fr; max-width: 900px;">

    <!-- Left: Content -->
    <div class="details-content">
      <div class="details-intro reveal">
        <span class="amenities-eyebrow">CULINARY EXCELLENCE</span>
        <h2 class="details-heading">Savour the world<br />on your plate.</h2>
        <p class="details-desc">
          At The Aspire Hotel, we believe that dining is more than just a meal—it's an experience. 
          Our flagship, The Grand Restaurant, offers a curated selection of global cuisines prepared 
          by award-winning chefs. Whether you are looking for a romantic dinner, a business lunch, 
          or a family gathering, our intimate atmosphere and exceptional service provide the perfect 
          setting for every occasion.
        </p>
      </div>

      <!-- Dining Stats/Info -->
      <div class="details-stats reveal">
        <div class="stat-box">
          <i class="ph ph-clock stat-icon"></i>
          <span class="stat-label">Breakfast</span>
          <span class="stat-value">07 AM – 10 AM</span>
        </div>
        <div class="stat-box">
          <i class="ph ph-fork-knife stat-icon"></i>
          <span class="stat-label">Lunch</span>
          <span class="stat-value">12 PM – 03 PM</span>
        </div>
        <div class="stat-box">
          <i class="ph ph-moon stat-icon"></i>
          <span class="stat-label">Dinner</span>
          <span class="stat-value">07 PM – 11 PM</span>
        </div>
      </div>
    </div>


  </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
<script src="./js/script.js"></script>
</body>
</html>
