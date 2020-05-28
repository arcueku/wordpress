<div class="entry-related">
  <div class="related-title">関連記事</div>
  <?php
  // 現在のカテゴリーIDを取得
  $categories = get_the_category($id->ID);
  // 現在のカテゴリーIDを格納する配列を用意
  $category_ID = array();
  // 現在のカテゴリーIDをすべて先ほどの配列に格納
  foreach ($categories as $category) :
    array_push($category_ID, $category->cat_ID);
  endforeach;
  ?>
  <?php
  //関連記事の抽出条件
  $args = array(
    'category__in' => $category_ID, //カテゴリー
    'posts_per_page' => 8, //取得数
    'orderby' => 'rand',  //ランダム表示
    'post__not_in' => array($post->ID), //表示中の投稿を除く
  );
  echo '<div class="related-items">';
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();
  ?>
      <a class="related-item" href="<?php the_permalink(); ?>">
        <div class="related-item-img">
          <?php
          if (has_post_thumbnail()) {
            the_post_thumbnail('medium');
          } else {
            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
          }
          ?>
        </div>
        <div class="related-item-title"><?php the_title(); ?></div>
      </a>
  <?php
    endwhile;
  endif;
  wp_reset_postdata();
  echo '</div>';
  ?>