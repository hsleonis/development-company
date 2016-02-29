<?php get_header(); ?>

<section id="body-content">
	<div class="specification-body-content">
        <?php while(have_posts()): the_post(); ?>
	   	<div class="spec-left-bg"></div>
	   	<div class="container height100">
	   		<div class="col-md-5 col-sm-6 col-xs-7 remove-padding height100 spec-left-wrapper page-wrapper">

	   			<!-- project detail -->
	   			<div class="spec-project-detail tab-content">
	   				<div class="spec-project-nav">
	   					<h3><?php the_title(); ?></h3>
	   				</div>
	   				<div id="a-glance" class="spec-info tab-pane fade in active">
	   					<?php the_content(); ?>
	   				</div>
	   			</div>
	   			<!-- end of project detail -->
	   		</div>
	   		<div class="col-md-7 col-sm-6 col-xs-5 remove-padding height100 spec-right-wrapper">
	   			<div class="spec-project-tab">
	   			</div>
	   		</div>
	   </div>
        <?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>