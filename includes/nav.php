<?php
// $navPage: 'home' (default), 'details', or 'contact'
// 'home'    → anchor links on the same page
// 'details' → links pointing back to index.php
// 'contact' → links pointing to appropriate pages
$navPage = $navPage ?? 'home';
$navClass = $navClass ?? '';

require_once __DIR__ . '/../data/rooms.php';

$base = ($navPage === 'details' || $navPage === 'contact') ? './index.php' : '';
$contactLink = ($navPage === 'contact') ? './contact.php' : './contact.php';
?>
<!-- NAV -->
<nav id="main-nav" <?= $navClass ? ' class="' . $navClass . '"' : '' ?>>
  <a href="<?= $base ?>#home" class="nav-logo" id="nav-logo-link">
    <img src="./assets/images/LOGO1.png" alt="The Aspire Hotel Logo" class="nav-logo-home" />
    <span class="nav-logo-text">
      <span class="nav-logo-title">The Aspire Hotel</span>
      <span class="nav-logo-subtitle">Guwahati</span>
    </span>
  </a>
  <ul class="nav-links" id="nav-links">
    <li><a href="<?= $base ?>#home">Home</a></li>
    <li class="nav-dropdown">
      <a href="<?= $base ?>#rooms">Rooms</a>
      <ul class="nav-dropdown-menu">
        <?php foreach ($roomsData as $key => $room): ?>
          <li><a href="./room-details.php?type=<?= urlencode($key) ?>"><?= htmlspecialchars($room['name']) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </li>
    <li><a href="./dining.php">Dining</a></li>
    <li><a href="<?= $base ?>#explore">Explore</a></li>
    <li><a href="./offers.php">Offers</a></li>
    <li><a href="<?= $base ?>#tariff">Tariff</a></li>
    <li><a href="./contact.php">Contact Us</a></li>
  </ul>
  <button class="nav-hamburger" id="nav-hamburger" aria-label="Open menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- MOBILE MENU DRAWER -->
<div class="mobile-menu" id="mobile-menu">
  <button class="mobile-menu-close" id="mobile-menu-close" aria-label="Close menu">✕</button>
  <ul class="mobile-nav-links">
    <li><a href="<?= $base ?>#home">Home</a></li>
    <li class="has-subnav">
      <div class="mobile-nav-item">
        <a href="<?= $base ?>#rooms">Rooms</a>
        <button class="subnav-toggle" aria-label="Toggle sub-navigation"><i class="ph ph-caret-down"></i></button>
      </div>
      <ul class="mobile-subnav">
        <?php foreach ($roomsData as $key => $room): ?>
          <li><a href="./room-details.php?type=<?= urlencode($key) ?>"><?= htmlspecialchars($room['name']) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </li>
    <li><a href="./dining.php">Dining</a></li>
    <li><a href="<?= $base ?>#explore">Explore</a></li>
    <li><a href="./offers.php">Offers</a></li>
    <li><a href="<?= $base ?>#tariff">Tariff</a></li>
    <li><a href="./contact.php">Contact Us</a></li>
  </ul>
</div>
<div class="mobile-menu-overlay" id="mobile-menu-overlay"></div>