<!DOCTYPE html>
<html lang="ja">
  <head>
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.3/css/all.css">
<script defer src="//use.fontawesome.com/releases/v5.6.3/js/all.js"></script>
    <?php wp_head(); ?>
  </head>
  <body class="top" <?php body_class(); ?>>
    <div class="wrap">
      <header class="head">
        <div class="head__inner">
        <h1 class="head__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/cmn/pc/head_logo.png" alt="<?php bloginfo( 'name' ); ?>"></a></h1>
        <p class="head__img"><a href="http://www.zengakkyo.com/" target="_blank"><?php bloginfo('description'); ?></a></p>
      </div>
      <?php wp_nav_menu(array(//カテゴリを出力
      'theme_location' => 'header-nav',//func.phpと紐づけ
      'container' => 'nav',//navタグ
      'container_class' => 'header-nav',
      'container_id' => 'header-nav',
      'fallback_cb' => ''));
       ?>

<!-- noindex -->
<?php if(is_tag() || is_date() || is_search() || is_404()) : ?>
  <meta name="robots" content="noindex"/>
<?php endif; ?>
<!-- /noindex -->
    </header>