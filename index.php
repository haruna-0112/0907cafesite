<?php get_header(); ?>

<div class="news">
  <div class="news-content">
    <h2 class="news_title">NEWS</h2>
    <ul>
      <?php
      $posts = new WP_Query(
        array(
          'post_type' => 'news',
          'posts_per_page' => 3
        )
      );
      if (have_posts()) : while ($posts->have_posts()) : $posts->the_post();
      ?>
          <li class="news-list">
            <p class="news-date"><?php echo get_the_date('Y-m-d'); ?></p>
            <p class="news-category">
              <?php
              $days = 3;
              $today = date_i18n('U');
              $entry_day = get_the_time('U');
              $keika = date('U', ($today - $entry_day)) / 86400;
              if ($days > $keika) :
                $limit = 3;
                $num = $wp_query->current_post;
                if ($limit > $num) :
                  echo 'New';
                endif;
              endif;
              ?>

            </p>

            <a href="<?php the_permalink(); ?>" class="news-title">
              <?php the_title(); ?>
            </a>
          </li>
      <?php endwhile;
      endif;
      wp_reset_query(); ?>
    </ul>
     <p class="news-articles_link">
        <a href="<?php echo 
        get_post_type_archive_link( 'news' ); ?>" class="news-articles_link_text">ニュース一覧はこちら→</a>
    </p>
  </div>
</div>
<div class="concept">
  <h2 class="concept-title">concept</h2>
  <div class="concept-content wrapper">
    
    <div class="slide active"><img src="<?php echo get_template_directory_uri(); ?>/img/top1.jpg" /></div>
    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/top2.jpg" /></div>
    <div class=" slide"><img src="<?php echo get_template_directory_uri(); ?>/img/top3.jpg" /></div>
    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/top4.jpg" /></div>
     <div class="button prev">
              <i class="fas fa-chevron-circle-left fa-2x"></i>
            </div>
            
            <div class="button next ">
              <i class="fas fa-chevron-circle-right fa-2x"></i>
            </div>
    <div class="concept-content_inner">
      <p class="concept-text">
        緑に囲まれた静かな公園に隣接し、
        お客様がホッと安心することのできるスタイリッシュなカフェです。<br />
        リラックスできる時間を過ごしませんか？
      </p>
    </div>
  </div>
</div>
<div class="menu wrapper">
  <div class="menu-container">
     <h2 class="menu-title">MENU</h2>
     <h3 class="menu-subtitle">期間限定MENU</h3>
    <div class="menu-content">
      <div class="menu-item">
        <div class="menu-item-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/menu1.jpg" alt="" />
        </div>
        <h3 class="menu-name">パエリア</h3>
        <p class="menu-text">夏野菜使用　780円(税込)</p>
      </div>
      <div class="menu-item">
        <div class="menu-item-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/menu1.jpg" alt="" />
        </div>
        <h3 class="menu-name">さっぱりチキン</h3>
        <p class="menu-text">夏野菜使用　780円(税込)</p>
      </div>
      <div class="menu-item">
        <div class="menu-item-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/menu1.jpg" alt="" />
        </div>
        <h3 class="menu-name">さっぱりチキン</h3>
        <p class="menu-text">夏野菜使用　780円(税込)</p>
      </div>
      <div class="menu-item">
        <div class="menu-item-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/menu1.jpg" alt="" />
        </div>
        <h3 class="menu-name">さっぱりチキン</h3>
        <p class="menu-text">夏野菜使用　780円(税込)</p>
      </div>
      <div class="menu-item">
        <div class="menu-item-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/menu1.jpg" alt="" />
        </div>
        <h3 class="menu-name">さっぱりチキン</h3>
        <p class="menu-text">夏野菜使用　780円(税込)</p>
      </div>
      <div class="menu-item">
        <div class="menu-item-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/menu1.jpg" alt="" />
        </div>
        <h3 class="menu-name">さっぱりチキン</h3>
        <p class="menu-text">夏野菜使用　780円(税込)</p>
      </div>
    </div>
  </div>
  <div class="menu-side-content">
    <h3 class="side-title">MENU LIST</h3>
    <ul class="side-list">
      <li><a href="" class="side-item">lunch</a></li>
      <li><a href="" class="side-item">dinner</a></li>
      <li><a href="" class="side-item">teatime</a></li>
      <li><a href="" class="side-item">drink</a></li>
    </ul>
  </div>
</div>

<div class="contact">
  <h2 class="contact-title">Access</h2>
  <div class="contact-content wrapper">
    <div class="location-info">
      <h3 class="contact-subtitle">CHA cafe</h3>
      <p class="contact-text">
        住所：東京都渋谷区<br />
        あかさたな町22-22-2222<br />
        駅前ビル３<br />
        電話：03-4444-4444<br />
        営業時間：<br />
        lunch 11:00～14：00<br />
        teatime 14:00～17:00<br />
        dinner 17：00～21：00<br />

        定休日：火曜日<br />
      </p>
    </div>
    <div class="location-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10592.332538869372!2d139.6886162896899!3d35.667261915557475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca3f81b2913%3A0x6cf7f15501c79503!2z44Kt44Oj44OD44OI44K544OI44Oq44O844OI!5e0!3m2!1sja!2sjp!4v1599133963349!5m2!1sja!2sjp" width="800" height="400" frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
</div>
<?php get_footer(); ?>