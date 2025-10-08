<footer class="footer <?php if (is_front_page()): ?>footer--top<?php endif; ?>">
  <div class="footer__inner">
    <ul class="footer__sns-list">
      <li class="footer__sns-item">
        <a href="#" class="footer__sns-link" aria-label="Facebook">
            <img src="<?php echo IMAGEPATH; ?>/common/facebook-icon.svg" alt="Facebookのアイコン" width="56" height="56" loading="lazy" class="footer__img">
        </a>
      </li>
      <li class="footer__sns-item">
        <a href="#" class="footer__sns-link" aria-label="YouTube">
            <img src="<?php echo IMAGEPATH; ?>/common/youtube-icon.svg" alt="YouTubeのアイコン" width="56" height="56" loading="lazy" class="footer__img">
        </a>
      </li>
      <li class="footer__sns-item">
        <a href="#" class="footer__sns-link" aria-label="X">
            <img src="<?php echo IMAGEPATH; ?>/common/x-twitter-icon.svg" alt="Xのアイコン" width="56" height="56" loading="lazy" class="footer__img">
        </a>
      </li>
      <li class="footer__sns-item">
        <a href="#" class="footer__sns-link" aria-label="Instagram">
            <img src="<?php echo IMAGEPATH; ?>/common/instagram-icon.svg" alt="Instagramのアイコン" width="56" height="56" loading="lazy" class="footer__img">
        </a>
      </li>
      <li class="footer__sns-item">
        <a href="#" class="footer__sns-link" aria-label="Spotify">
            <img src="<?php echo IMAGEPATH; ?>/common/spotify-icon.svg" alt="Spotifyのアイコン" width="56" height="56" loading="lazy" class="footer__img">
        </a>
      </li>
    </ul>

    <ul class="footer__links">
      <li class="footer__links-item"><a href="#" class="footer__links-link">会社概要</a></li>
      <li class="footer__links-item"><a href="#" class="footer__links-link">プライバシーポリシー</a></li>
      <li class="footer__links-item"><a href="#" class="footer__links-link">特定商取引法に基づく表記</a></li>
    </ul>

    <a href="<?php echo HOME_URL; ?>" class="footer__logo-wrap">
      <img src="<?php echo IMAGEPATH; ?>/common/logo-white.svg" alt="Boogie Lineのロゴ" width="360" height="150" loading="lazy" class="footer__logo-img">
    </a>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>