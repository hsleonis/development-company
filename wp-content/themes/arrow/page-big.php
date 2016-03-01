<?php
/*
Template Name: Full width
*/
get_header(); ?>

<section id="body-content">
	<div class="specification-body-content">
        <?php while(have_posts()): the_post(); ?>
	   	<div class="spec-left-bg"></div>
	   	<div class="container height100">
	   		<div class="col-md-9 col-sm-6 col-xs-7 remove-padding height100 spec-left-wrapper page-wrapper">

	   			<!-- project detail -->
	   			<div class="spec-page-detail">
	   				<div class="spec-project-nav">
	   					<h3><?php the_title(); ?></h3>
	   				</div>
	   				<div id="a-glance" class="spec-page-info">
	   					<?php the_content(); ?>
	   				</div>
	   			</div>
	   			<!-- end of project detail -->
	   		</div>
	   		<div class="col-md-3 col-sm-6 col-xs-5 remove-padding height100 spec-right-wrapper" style="background-image:url('<?php ?>')">
	   			<div class="spec-project-tab">
	   			</div>
	   		</div>
            <div class="thumb-full" style="width: 29.15%;background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>');"></div>
	   </div>
        <?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>