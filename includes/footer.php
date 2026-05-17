<?php
$base = (($navPage ?? '') === 'details' || ($navPage ?? '') === 'contact') ? './index.php' : '';
?>
<footer class="lara-footer" id="contact">
  <div class="footer-container">
    <div class="footer-top">

      <div class="footer-col brand-col">
        <div class="footer-logo">THE ASPIRE</div>
        <p class="brand-text">
          Excellence in hospitality since 1970. We redefine luxury through
          personalized experiences and architectural masterpieces in the
          heart of the city.
        </p>
      </div>

      <div class="footer-col links-col">
        <h4 class="footer-title">QUICK LINKS</h4>
        <ul class="footer-nav">
          <li><a href="<?= $base ?>#home">Home</a></li>
          <li><a href="<?= $base ?>#about">About Us</a></li>
          <li><a href="<?= $base ?>#rooms">Rooms &amp; Suites</a></li>
          <li><a href="./dining.php">Dining</a></li>
          <li><a href="<?= $base ?>#explore">Explore</a></li>
          <li><a href="./offers.php">Offers</a></li>
          <li><a href="<?= $base ?>#tariff">Tariff</a></li>
          <li><a href="./contact.php">Contact Us</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4 class="footer-title">CONTACT US</h4>
        <div class="contact-info">
          <p>Silver Aspire Tower, MD Shah Rd, Paltan Bazaar,<br />Guwahati, Assam 781008</p>
          <p class="phone">+91 91819 12340</p>
          <p class="email">theaspirehotel@gmail.com</p>
          <p class="whatsapp">WhatsApp: +91 91819 12340</p>
        </div>
      </div>

    </div>
    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> The Aspire Hotel. All Rights Reserved.</p>
      <div class="legal-links">
        <a href="#">Privacy Policy</a>
        <a href="./terms.php">Terms &amp; Conditions</a>
      </div>
    </div>
  </div>
</footer>