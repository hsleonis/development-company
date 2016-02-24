<?php get_header(); ?>

<section id="body-content">
	<div class="specification-body-content">
        <?php while(have_posts()): the_post(); ?>
	   	<div class="spec-left-bg"></div>
	   	<div class="container height100">
	   		<div class="col-md-5 col-sm-6 col-xs-7 remove-padding height100 spec-left-wrapper">
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
	   			<!-- end of spec project cat -->

	   			<!-- project detail -->
	   			<div class="spec-project-detail tab-content">
	   				<div class="spec-project-nav">
	   					<h3><?php the_title(); ?> at gulshan 2, dhaka</h3>
                        <?php previous_post_link( '%link', '<i class="sprite sprite-left-arrow"></i>', TRUE, ' ', 'status' ); ?>
                        <?php next_post_link( '%link', '<i class="sprite sprite-right-arrow"></i>', TRUE, ' ', 'status' ); ?>
	   				</div>
	   				<div id="a-glance" class="spec-info tab-pane fade in active">
	   					<?php the_content(); ?>
						<p>Tab 1</p>
	   				</div>
					<div id="specification" class="spec-info tab-pane fade">
						<?php the_content(); ?>
						<p>Tab 2</p>
					</div>
	   			</div>
	   			<!-- end of project detail -->
	   		</div>
	   		<div class="col-md-7 col-sm-6 col-xs-5 remove-padding height100 spec-right-wrapper">
	   			<div class="spec-project-tab">
	   				<ul class="spec-project-tab-ul nav nav-tabs">
						<li class="col-md-3 col-sm-12 col-xs-12 remove-padding active">
							<a href="#a-glance" data-toggle="tab">
								<i class="sprite sprite-at-a-glance display-block"></i>
								<i class="sprite sprite-hover-at-a-glance display-none"></i>
								<span>at a glance</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-12 col-xs-12 remove-padding">
							<a href="#specification" data-toggle="tab">
								<i class="sprite sprite-spec display-block"></i>
								<i class="sprite sprite-hover-spec display-none"></i>
								<span>specification</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-12 col-xs-12 remove-padding">
							<a href="#">
								<i class="sprite sprite-floor-map display-block"></i>
								<i class="sprite sprite-hover-floor-map display-none"></i>
								<span>floor plans</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-12 col-xs-12 remove-padding">
							<a href="#">
								<i class="sprite sprite-camera display-block"></i>
								<i class="sprite sprite-hover-camera display-none"></i>
								<span>gallery</span>
							</a>
						</li>
	   				</ul>
	   			</div>
	   		</div>
	   </div>
        <?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>