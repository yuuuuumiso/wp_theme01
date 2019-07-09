<?php get_header(); ?>

<div class="article">
  <p style="font-weight: bold;font-size:30px;">投稿ページ用のテンプレ single.phpだよ～ん</p>
<p><?php echo get_post_meta($post->ID, '天気', true); ?></p>
<p><?php echo get_post_meta($post->ID, '気温', true); ?></p>
<?php if(have_posts()): the_post(); ?>
<article <?php post_class( 'kiji' ); ?>>
  <!--投稿日・著者を表示-->
  <div class="kiji-info">
    <!--投稿日を取得-->
    <span class="kiji-date">
      <i class="fas fa-pencil-alt"></i>
      <time
      datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
      <?php echo get_the_date(); ?>
      </time>
    </span>
    <!--カテゴリ取得-->
    <?php if(has_category() ): ?>
    <span class="cat-data">
<!--       <?php echo get_the_category_list( ' ' ); ?> -->
            <?php the_category(','); ?>
    </span>
    <?php endif; ?>
  </div>
  <!--タイトル-->
  <h1><?php the_title(); ?></h1>
  <!--アイキャッチ取得-->
  <div class="kiji-img">
    <?php if( has_post_thumbnail() ): ?>
      <?php the_post_thumbnail( 'large' ); ?>
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/cmn/non-thumb.gif">
      <?php endif; ?>
  </div>
  <!--本文取得-->
  <?php the_content(); ?>
  <!--タグ-->
  <div class="kiji-tag">
    <?php the_tags('<ul><li>タグ： </li><li>','</li><li>','</li></ul>'); ?>
  </div>
  <!--/タグ-->
</article>
<?php endif; ?>
</div>

<?php get_footer(); ?>