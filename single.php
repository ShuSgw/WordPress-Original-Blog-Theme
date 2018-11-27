<?php get_header(); ?>
<div class="contents">
  <div class="container">
    <div class="main">
    <div class="left">
      <?php if (have_posts()): the_post(); ?>
      <article <?php post_class('article'); ?>>
        <div class="articleInfo">
          <span class="date">
            <time
            datetime="<?php echo get_the_date('Y-m-d'); ?>">
            <?php echo get_the_date(); ?>
            </time>
          </span>
          <?php if (has_category()): ?>
          <span class="cat-data">
            <?php echo get_the_category_list(' '); ?>
          </span>
          <?php endif; ?>
        </div>
        <h3><?php the_title(); ?></h3>
        <?php if (has_post_thumbnail()): ?>
        <div class="articleImg">
          <?php the_post_thumbnail('large'); ?>
        </div>
        <?php endif; ?>
        <?php the_content(); ?>
        <div class="articleTag">
          <?php the_tags('<ul><li>タグ： </li><li>', '</li><li>', '</li></ul>'
        ); ?>
        </div>
      </article>
      <?php endif; ?>
    </div>
    </div>
    <div class="sub">
      <?php get_sidebar(); ?>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer(); ?>