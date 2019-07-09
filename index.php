<?php get_header(); ?>
      <div class="mv">
        <div class="mv__inner">
          <p class="mv__img"><img class="is-pc" src="<?php echo get_template_directory_uri(); ?>/img/top/pc/mv01.png" alt="楽器で脳活！全国の楽器店にて楽器で脳活！キャンペーン開催！"><img class="is-sp" src="<?php echo get_template_directory_uri(); ?>/img/top/sp/mv01.png" alt="楽器で脳活！"></p>
        </div>
      </div>





<!-- 記事 -->
<section class="sec event">
<div class="inner">




<!-- 記事出力 -->
<!-- <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article <?php post_class( 'kiji-list' ); ?> >
    <a href="<?php the_permalink(); ?>">
      <!--画像を追加
      <?php if( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail('thumbnail');  ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/cmn/non-thumb.gif">
      <?php endif; ?>
      <div class="text">
        <!--タイトル
        <h2><?php the_title(); ?></h2>
        <!--投稿日を表示
        <span class="kiji-date">
          <i class="fas fa-pencil-alt"></i>
          <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
            <?php echo get_the_date(); ?>
          </time>
        </span>
        <!--カテゴリ
        <?php if (!is_category()): ?>
          <?php if( has_category() ): ?>
          <span class="cat-data">
            <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
          </span>
          <?php endif; ?>
        <?php endif; ?>
        <!--抜粋
        <?php the_excerpt(); ?>
      </div>
    </a>
  </article>
<?php endwhile; endif; ?> -->


<!-- タイトルだけバージョン -->
       <?php 
       if (have_posts()):while (have_posts()) : the_post(); ?>
           <h2>
              <a href="<?php echo get_permalink(); ?>"><?php the_time('Y年n月j日'); ?> <?php the_title(); ?></a>
           </h2>
           <hr>
       <?php endwhile;endif;?> 
<!-- /記事出力 -->


<!-- ページネーション -->
<div class="pagination">
    <?php echo paginate_links( array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => '＜',
      'next_text' => '＞'
      ) ); ?>
</div>
<!-- /ページネーション -->

</div>
</section>
<!--ループ終了-->





      <!-- contents-->
      <section class="event sec">
        <div class="wrap">
          <h3 class="ttl02"><img src="<?php echo get_template_directory_uri(); ?>/img/top/pc/event_ttl02.png" class="is-pc" alt="お近くのキャンペーン実施点"><img src="<?php echo get_template_directory_uri(); ?>/img/top/sp/event_ttl02.png" class="is-sp" alt="お近くのキャンペーン実施点"></h3>
          <p class="btn01 -move"><a href="./map/">エリアから探す</a></p>
        </div>
      </section>

      <?php get_sidebar(); ?>
      <!-- contents end-->
      <?php get_footer(); ?>