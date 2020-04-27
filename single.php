<?php get_header(); ?> <!--追加header読み込み-->
  <div id="contents">
    <div id="conL">
    <?php if(have_posts()): while(have_posts()): the_post();?>
    <h2><?php the_title(); ?></h2>
    <p><?php the_time('Y/m/d'); ?></p>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
        <a href="<?php bloginfo('url'); ?>/contact"><button class="btn1">お問い合わせ</button></a>
    </div><!-- /#conL -->
<?php get_sidebar(); ?>  <!--追加sidebar読み込み-->
  </div><!-- /#contents -->
<!--追加footer読み込み-->
<?php get_footer(); 