<?php get_header(); ?>
<div class="contents">
  <div class="container">
    <div class="main">
      <div class="cardBoxes">
         <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <article <?php post_class('cardBox'); ?>>
          <div class="eyeCatch">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('original_thumbnail'); ?>
              <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/eyeCatch.jpg" alt="no-img"/>
              <?php endif; ?>
              <!-- text from each articles -->  
              <div class="textBox">
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                  <?php echo get_the_date(); ?>
                </time>
                <h4><?php echo mb_substr($post->post_title, 0, 20).'……'; ?></h4>
                <?php if (!is_category()): ?>
                  <?php if (has_category()): ?>
                    <span class="cat-data">
                      <?php $postcat = get_the_category(); echo $postcat[0]->name; ?>
                    </span>
                  <?php endif; ?>
                <?php endif; ?>
                <!-- for texts⬇︎ -->
                <?php //the_excerpt();?>
              </div>
              <!-- text from each articles -->
            </a>
          </div>
         </article>
         <?php endwhile; endif; ?>
      </div>
      <div class="pagination">
        <?php echo paginate_links(array(
          'type' => 'list',
          'mid_size' => '1',
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;',
          )); ?>
      </div>
    </div>
    <div class="sub">
      <?php get_sidebar(); ?>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer(); ?>
