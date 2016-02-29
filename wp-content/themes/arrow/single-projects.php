<?php get_header(); ?>
<?php
    while(have_posts()): the_post();
    $gallery = get_post_meta(get_the_ID(), '_themeaxe_group_gallery_image', false)[0];
    $floor = get_post_meta(get_the_ID(), '_themeaxe_group_floor_image', false)[0];
?>
<section id="body-content">
    <div class="container height100 project-nav-wrapper">
        <div class="col-md-5 col-sm-6 col-xs-7 remove-padding height100">
            <!-- spec project cat -->
            <div class="spec-project-cat">
                <?php
                    $args = array( 'hide_empty=0' );

                    $terms = get_terms( 'status', $args );
                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                        $count = count( $terms );
                        $i = 0;
                        $term_list = '<ul class="spec-project-cat-ul">';
                        foreach ( $terms as $term ) {
                            $i++;
                            $term_list .= '<li class="col-xs-4 remove-padding"><a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all %s projects', 'themeaxe' ), $term->name ) ) . '">' . $term->name . '</a></li>';
                            if ( $count != $i ) {
                                $term_list .= '';
                            }
                            else {
                                $term_list .= '</ul>';
                            }
                        }
                        echo $term_list;
                    }
                ?>
            </div>
        </div>
        <div class="col-md-7 col-sm-6 col-xs-5 remove-padding height100 spec-right-wrapper">
        <div class="spec-project-tab">
            <ul class="spec-project-tab-ul nav nav-tabs">
                <li class="col-md-3 col-sm-12 col-xs-12 remove-padding spec-btn active">
                    <a href="#a-glance" data-toggle="tab">
                        <i class="sprite sprite-at-a-glance display-block"></i>
                        <i class="sprite sprite-hover-at-a-glance display-none"></i>
                        <span>at a glance</span>
                    </a>
                </li>
                <?php if(get_post_meta(get_the_ID(),'_themeaxe_group_specification',false)[0]): ?>
                <li class="col-md-3 col-sm-12 col-xs-12 remove-padding glance-btn">
                    <a href="#specification" data-toggle="tab">
                        <i class="sprite sprite-spec display-block"></i>
                        <i class="sprite sprite-hover-spec display-none"></i>
                        <span>specification</span>
                    </a>
                </li>
                <?php endif; ?>
                <?php if(count($floor)>0): ?>
                <li class="col-md-3 col-sm-12 col-xs-12 remove-padding plan-btn">
                    <a href="#">
                        <i class="sprite sprite-floor-map display-block"></i>
                        <i class="sprite sprite-hover-floor-map display-none"></i>
                        <span>floor plans</span>
                    </a>
                </li>
                <?php endif; ?>
                <?php if(count($gallery)>0): ?>
                <li class="col-md-3 col-sm-12 col-xs-12 remove-padding gallery-btn">
                    <a href="#">
                        <i class="sprite sprite-camera display-block"></i>
                        <i class="sprite sprite-hover-camera display-none"></i>
                        <span>gallery</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    </div>
	<div class="specification-body-content div-panel">
	   	<div class="spec-left-bg"></div>
        <div class="thumb-full" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>');"></div>
	   	<div class="container height100">
	   		<div class="col-md-5 col-sm-6 col-xs-7 remove-padding height100 spec-left-wrapper">
	   			<!-- spec project cat -->
	   			<div class="padding-top-150">
	   			</div>
	   			<!-- end of spec project cat -->

	   			<!-- project detail -->
	   			<div class="spec-project-detail tab-content">
	   				<div class="spec-project-nav">
	   					<h3><?php the_title(); ?> at <?php echo get_post_meta(get_the_ID(),'_themeaxe_group_location',false)[0]; ?></h3>
                        <?php previous_post_link( '%link', '<i class="sprite sprite-left-arrow"></i>', TRUE, ' ', 'status' ); ?>
                        <?php next_post_link( '%link', '<i class="sprite sprite-right-arrow"></i>', TRUE, ' ', 'status' ); ?>
	   				</div>
	   				<div id="a-glance" class="spec-info tab-pane fade in active">
	   					<?php the_content(); ?>
	   				</div>
					<div id="specification" class="spec-info tab-pane fade">
						<?php echo get_post_meta(get_the_ID(),'_themeaxe_group_specification',false)[0]; ?>
					</div>
	   			</div>
	   			<!-- end of project detail -->
	   		</div>
	   </div>
	</div>
    <div id="project-gallery" class="div-panel">
        <div class="gallery-slider">
          <?php
                if(count($gallery)>0)
                foreach($gallery as $item):
          ?>
            <div class="col-md-6" data-src="<?php echo $item['image']; ?>">
                <h4><?php echo $item['title']; ?></h4>
                <p><?php echo $item['description']; ?></p>
                <a href="<?php echo $item['image']; ?>"><i class="sprite sprite-maximize"></i></a>
                <img src="<?php echo $item['image']; ?>">
            </div>
          <?php endforeach; ?>
        </div>
    </div>
    <div id="project-plan" class="div-panel">
        <div class="plan-slider">
            <?php
                if(count($floor)>0)
                foreach($floor as $item):
          ?>
            <div class="col-md-6" data-src="<?php echo $item['image']; ?>">
                <h4><?php echo $item['title']; ?></h4>
                <p><?php echo $item['description']; ?></p>
                <a href="<?php echo $item['image']; ?>"><i class="sprite sprite-maximize"></i></a>
                <img src="<?php echo $item['image']; ?>">
            </div>
          <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>