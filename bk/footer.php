<section class="intro sec">
  <div class="inner">
    <ul class="row">
      <li class="item">
        <a href="http://www.zengakkyo.com/event/" target="_blank">
          <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/cmn/cmn/intro_img01.png"></p>
          <p class="txt">全国音楽・楽器<br class="is-sp">イベント案内</p>
        </a>
      </li>
      <li class="item">
        <a href="http://www.zengakkyo.com/interview/" target="_blank">
          <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/cmn/cmn/intro_img02.png"></p>
          <p class="txt">インタビュー<br class="is-sp">「楽器と人」</p>
        </a>
      </li>
      <li class="item">
        <a href="http://www.zengakkyo.com/links/" target="_blank">
          <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/cmn/cmn/intro_img03.png"></p>
          <p class="txt">楽器を楽しむ人向けの<br>「お役立ち情報」</p>
        </a>
      </li>
      <li class="item">
        <a href="./course/">
          <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/cmn/cmn/intro_img04.png"></p>
          <p class="txt">下層ページ</p>
        </a>
      </li>
    </ul>
  </div>
</section>
<footer class="foot">
  <p class="pageTop"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/cmn/cmn/pagetop.png"></a></p>
  <div class="foot__inner">
    <p class="foot__logo">
      <?php wp_nav_menu( array(
      'theme_location' => 'footer-nav',
      'container' => 'nav',
      'container_class' => 'footer-nav',
      'container_id' => 'footer-nav',
      'fallback_cb' => ''
      ) ); ?>
    </p>
    <ul class="foot__lists">
      <li class="foot__list"><a class="foot__link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></li>
    </ul>
  </div>
</footer>
<!-- ./wrap -->
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>