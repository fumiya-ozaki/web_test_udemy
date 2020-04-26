<?php get_header(); ?> <!--追加header読み込み-->
  <div id="contents">
    <div id="conL">
      
        <?php if (in_category(array('5'))) {?>
          <div class="information">
            <h2>Blog</h2>
              <dl>
                <?php if(have_posts()): while(have_posts()): the_post();?>
                  <dt><?php the_time('Y-m-d'); ?></dt>
                  <dd>
                    <div class="b_img">
                      <?php the_post_thumbnail('thumbside'); ?>
                    </div>
                    <div class="b_right">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                  </dd>
                <?php endwhile; endif; ?>
              </dl>
            </div><!-- /.information -->

        <?php } elseif(in_category(array('4'))){ ?>
          <div class="information">
            <h2>INFORMATION</h2>
            <dl>
              <!-- numberposts:投稿数  category:カテゴリーのID -->
              <?php if(have_posts()): while(have_posts()): the_post();?>                  
                <dt><?php the_time('Y-m-d'); ?></dt>
                <dd>
                  <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を更新しました。
                </dd><!--修正-->
              <?php endwhile; endif; ?>
            </dl>
          </div><!-- /.information -->

        <?php }else{ ?>
          <div class="information">
            <h2>INFORMATION</h2>
              <dl>
                <!-- numberposts:投稿数  category:カテゴリーのID -->
                <?php if(have_posts()): while(have_posts()): the_post();?>
                  <dt><?php the_time('Y-m-d'); ?></dt>
                  <dd>
                    <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を更新しました。
                  </dd><!--修正-->
                <?php endwhile; endif; ?>
              </dl>
            </div><!-- /.information -->
        <?php } ?>

    </div><!-- /#conL -->
<?php get_sidebar(); ?>  <!--追加sidebar読み込み-->
  </div><!-- /#contents -->
<!--追加footer読み込み-->
<?php get_footer(); 