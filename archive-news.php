 <?php get_header(); ?> 
 <div class="single-eyecatch page-eyecatch">
       
      <div class="page-title">
        <h1 class="page-title__h1">NEWS</h1>
        <p class="page-title__p">ニュース記事一覧</p>
      </div>
    </div>

    <main>
      <div id="news" class="wrap">
        <div class="news-contain">
          <ul>
             <?php if (have_posts()): ?>
              <?php while (have_posts()) : the_post(); ?> 
            <li class="news-list">
              <p class="news-date"><?php echo get_the_date('Y-m-d'); ?></p>
              <p class="news-category"> <?php
               $days = 3;
               $today = date_i18n('U');
               $entry_day = get_the_time('U');
               $keika = date('U',($today - $entry_day)) / 86400;
               if ( $days > $keika ):
               $limit = 3;
               $num = $wp_query->current_post; 
               if ( $limit > $num ):
               echo 'New';
               endif;
               endif;
               ?>
              </p> 

              <a href="<?php the_permalink(); ?>" class="news-title">
               <?php the_title(); ?>
              </a>
            </li>
             <?php endwhile; endif; ?>
            </ul>
          </div> 
        </div>
      </main>

       <?php get_footer(); ?>