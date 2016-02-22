<div class="modal fade" id="roomsModal" tabindex="-1" role="dialog" aria-labelledby="roomsModalLabel" aria-hidden="true">
    <div class="modal-dialog custom_modal_dialog">
        <div class="modal-content">
            <div class="modal-header custom_modal_header">
                <button type="button" class="close custom_modal_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="roomsModalLabel">SELECT ROOM</h4>
            </div>
            <div class="modal-body">
                <div role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs prod-info-tabs rooms-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#room-0" data-roomplate="0" aria-controls="room-0" role="tab" data-toggle="tab">ROOMS</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content custom_tab_content tab_click">
                        <div role="tabpanel" class="tab-pane active" id="room-0">
                            <div class="col-xs-12 room_thumb_wrap" align="center">
                                <?php
                                $args = array( 'post_type' => 'rooms', 'posts_per_page' => -1 );
                                $loop = new WP_Query( $args );
                                $arr = array();
                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="item w2">
                                    <a class="room-link" href="<?php echo get_the_permalink(); ?>" data-roomplate="0">
                                        <img src="<?php echo get_post_meta( get_the_ID(), '_tmx_room_foreground', true); ?>" />
                                        <img src="<?php echo get_post_meta( get_the_ID(), '_tmx_room_background', true); ?>" />
                                    </a>
                                </div>
                                <?php endwhile; wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Rooms dialog -->