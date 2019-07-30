<?php 
/**
 * Template Name: 固定ページ>お問い合わせ用
 * Description: 固定ページ>お問い合わせ用のテンプレ page-contact.phpだよ～ん
 */
?>
<?php get_header(); ?>
<div class="contents">
	<p style="font-weight: bold;font-size:30px;">固定ページ>お問い合わせ用のテンプレ page-contact.phpだよ～ん</p>
  <!--記事本文-->
  <?php if(have_posts()): the_post(); ?>
  <article <?php post_class( 'kiji' ); ?>>
    <!--タイトル-->
    <h1><?php the_title(); ?></h1>
    <!--本文取得-->
    <?php the_content(); ?>
  </article>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
