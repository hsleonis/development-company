<?php get_header(); ?>
<?php get_template_part('content-slider'); ?>

<section id="body-content" class="body-content">
    <div class="container remove-padding">
        <!--<ul class="projects-cat">
            <li><a href="project-detail.php">ongoing</a></li>
            <li><a href="project-detail.php">upcoming</a></li>
            <li><a href="project-detail.php">completed</a></li>
        </ul>-->
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' =>'projects-cat' ) ); ?>
    </div>
</section>

<?php get_template_part('content-mobile-menu'); ?>
<?php get_template_part('content-search'); ?>
<?php get_footer(); ?>