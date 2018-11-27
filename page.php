<div class="contents">
  <?php if (have_posts()): the_post(); ?>
  <article <?php post_class('kiji'); ?>>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </article>
  <?php endif; ?>
</div>