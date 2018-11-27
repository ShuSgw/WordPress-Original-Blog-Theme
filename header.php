<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport"
  content="width=device-width, initial-scale=1.0">
  <!-- SEO -->
  <?php if (is_tag() || is_date() || is_search() || is_404()) : ?>
    <meta name="robots" content="noindex"/>
  <?php endif; ?>
    
  <?php if (is_single() || is_page()): ?>
  <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
  <?php if (has_tag()): ?>
  <?php $tags = get_the_tags();
  $kwds = array();
  foreach ($tags as $tag) {
      $kwds[] = $tag->name;
  }	?>
  <meta name="keywords" content="<?php echo implode(',', $kwds); ?>">
  <?php endif; ?>
  <?php else: ?>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php $allcats = get_categories();
    $kwds = array();
    foreach ($allcats as $allcat) {
        $kwds[] = $allcat->name;
    } ?>
    <meta name="keywords" content="<?php echo implode(',', $kwds); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
      <div class="wrap">
          <div id="navBtn">
            <i class="fas fa-bars"></i>
          </div>
          <nav>
            <?php wp_nav_menu(array(
              'container_class' => 'container',
              'fallback_cb' => false,
              )); ?>
          </nav>
        <header>
          <div class="container">
              <div class="headerBox">
                <h1>
                  <a href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                  </a>
                </h1>
              </div>
          </div>
        </header>

