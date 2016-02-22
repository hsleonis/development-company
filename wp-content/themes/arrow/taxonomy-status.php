<?php get_header(); ?>
<?php
        global $wp_query;
        $args = array_merge( $wp_query->query, array( 'post_type' => 'projects' ) );
        $post = query_posts( $args );
?>

<section id="body-content" class="body-content">
    <div class="project-detail-body">
        <div class="container height100">
            <!-- Project detail page left side -->
            <div class="col-sm-3 col-xs-4 remove-padding height100">
                <div class="project-detail-left">
                    <h1><?php echo count($post); ?></h1>
                    <p>
                        <?php echo get_query_var('term'); ?>
                        <span><?php the_archive_description( '', '' ); ?></span>
                    </p>
                </div>
                <div class="project-detail-nav">
                    <a class="slick-prev" href="#">
                        <i class="sprite sprite-left-arrow"></i>
                    </a>
                    <a class="slick-next" href="#">
                        <i class="sprite sprite-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- End of project detail page left side -->

            <!-- Project detail page right side -->
            <div class="col-sm-9 col-xs-8 remove-padding height100">
                <div class="project-detail-right">
                    <!-- Slider part -->
                    <div class="project-detail">
                        <?php
                            while(have_posts()): the_post(); ?>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <a href="<?php the_permalink(); ?>">
                                <div class="project-list-img" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
                                </div>
                                <h4><?php the_title(); ?></h4>
                                <p>Address</p>
                            </a>
                        </div>
                        <?php
                            endwhile;
                            wp_reset_query();
                        ?>
                    </div>
                    <!-- End of slider part -->
                </div>
            </div>
            <!-- End of project detail page right side -->
        </div>
    </div>
</section>

<?php get_footer(); ?>