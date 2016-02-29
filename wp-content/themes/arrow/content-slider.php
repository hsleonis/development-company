<section id="slider">
	<div class="slider-body-content">
		<!-- Main slider content -->
		<div class="main-slider">
            <?php
                $args = array(
                    'post_type' => 'projects'
                );
                $pr = new wp_query($args);
                while($pr->have_posts()): $pr->the_post();
                    if(get_post_meta(get_the_ID(),'_themeaxe_featured',false)[0]==1):
            ?>
			<div class="col-md-12 remove-padding">
				<div style="background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>') no-repeat scroll 0% 0% / cover;">
                    <div class="slider-content">
                        <div class="slider-project-title"><strong><?php the_title(); ?></strong></div>
                        <div class="slider-project-location"><?php echo get_post_meta(get_the_ID(),'_themeaxe_group_location',false)[0]; ?></div>
                        <div class="main-slider-nav">
                            <a class="main-slider-prev" href="#">
                                <i class="sprite sprite-left-arrow"></i>
                            </a>
                            <a class="main-slider-next" href="#">
                                <i class="sprite sprite-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
			</div>
            <?php endif; endwhile; wp_reset_query(); ?>
		</div>
		<!-- End of main slider content -->
	</div>
</section>