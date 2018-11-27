<!-- 404.php -->
<?php get_header(); ?>
<div class="contents">
    <div class="container">
            <div class="main">
                <h4>Not found</h4>
                <p>We can't find this page / 404 error/</p>
                <p>You might mistake type this page <span class="error_msg"> http://<?php echo esc_html($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?> </span></p>
            </div>
    </div>
</div>
<?php get_footer(); ?>