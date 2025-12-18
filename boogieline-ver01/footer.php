<footer class="footer">
  <div class="footer__inner">
    <div class="footer__content">
      <div class="footer__top">
        <nav class="footer__nav">
          <div class="footer__nav-columns">
            <ul class="footer__nav-list">
              <li class="footer__nav-item"><a href="<?php echo ARTIST_URL; ?>" class="footer__nav-link">ARTIST</a></li>
              <li class="footer__nav-item"><a href="<?php echo SYSTEM_URL; ?>" class="footer__nav-link">SYSTEM &amp; PRICE</a></li>
              <li class="footer__nav-item"><a href="<?php echo FAQ_URL; ?>" class="footer__nav-link">FAQ</a></li>
            </ul>
            <ul class="footer__nav-list">
              <li class="footer__nav-item"><a href="<?php echo GOODS_URL; ?>" class="footer__nav-link">GOODS &amp; SHOP</a></li>
              <li class="footer__nav-item"><a href="<?php echo INTERVIEW_URL; ?>" class="footer__nav-link">INTERVIEW</a></li>
              <li class="footer__nav-item"><a href="<?php echo CONTACT_URL; ?>" class="footer__nav-link">CONTACT</a></li>
            </ul>
          </div>
        </nav>

        <ul class="footer__sns-list">
          <li class="footer__sns-item">
            <a href="#" class="footer__sns-link" aria-label="Instagram">
              <img src="<?php echo IMAGEPATH; ?>/common/instagram-icon-white.webp" alt="Instagramのアイコン" width="55" height="55" loading="lazy" class="footer__sns-img">
            </a>
          </li>
          <li class="footer__sns-item">
            <a href="#" class="footer__sns-link" aria-label="YouTube">
              <img src="<?php echo IMAGEPATH; ?>/common/youtube-icon-white.webp" alt="YouTubeのアイコン" width="55" height="55" loading="lazy" class="footer__sns-img">
            </a>
          </li>
          <li class="footer__sns-item">
            <a href="#" class="footer__sns-link" aria-label="LINE">
              <img src="<?php echo IMAGEPATH; ?>/common/line-icon-white.webp" alt="LINEのアイコン" width="55" height="55" loading="lazy" class="footer__sns-img">
            </a>
          </li>
        </ul>
      </div>

      <div class="footer__middle">
        <div class="footer__divider"></div>
        <ul class="footer__legal-links">
          <li class="footer__legal-item"><a href="<?php echo COMPANY_URL; ?>" class="footer__legal-link">運営会社</a></li>
          <li class="footer__legal-item"><a href="<?php echo PRIVACY_URL; ?>" class="footer__legal-link">プライバシーポリシー</a></li>
          <li class="footer__legal-item"><a href="<?php echo TOKUSHOHO_URL; ?>" class="footer__legal-link">特定商取引法に基づく表示</a></li>
        </ul>
      </div>

      <a href="<?php echo HOME_URL; ?>" class="footer__logo-wrap">
        <img src="<?php echo IMAGEPATH; ?>/common/logo-white.svg" alt="Boogie Lineのロゴ" width="519" height="249" loading="lazy" class="footer__logo-img">
      </a>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>