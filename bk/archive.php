<?php get_header(); ?>
<!-- 上記が追記するコード -->
 	<p style="font-weight: bold;font-size:30px;">アーカイブのテンプレート archive.phpだよ～～ん</p>


<!-- 「タグページもしくはカテゴリーページなら」という条件分岐にするにはif ( is_tag() || is_category() ) :と書きます。 だけどcategory.phpがあるので分岐1は採用されない。2と3だけ-->
<?php if(is_category() || is_tag()): ?>
  <h1><?php single_cat_title() ?>の記事　一覧</h1>
<?php elseif(is_year()): ?>
  <h1><?php the_time("Y年") ?>の記事　一覧</h1>
<?php elseif(is_month()): ?>
  <h1><?php the_time("Y年m月") ?>の記事一覧</h1>
<?php endif; ?>
<!-- /カテゴリページやタグページにタイトルを追加する -->


 <section id="content">
 <div id="content-wrap" class="container">
 <div id="main" class="col-md-9">
      <h1>記事一覧</h1>
      <hr>
      <?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>
          <h2>
            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <section>
            <p>作成日時：<?php the_time('Y年n月j日'); ?></p>
            <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
          </section>
          <hr>
      <?php 
          endwhile;
      endif;
      ?>
 </div>
 <div id="sidebar" class="col-md-3">
 <?php get_sidebar(); ?>
 <!-- 上記が追記するコード -->
 </div>
 </div>
 </section>
 <!-- 下記が追記するコード -->
<?php get_footer(); ?>