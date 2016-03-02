<?php get_header(); ?>
<?php get_template_part('content-slider'); ?>

<section id="body-content" class="body-content">
    <div class="container remove-padding">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' =>'projects-cat' ) ); ?>
    </div>
</section>

<?php get_footer(); ?>