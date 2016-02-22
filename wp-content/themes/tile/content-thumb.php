<?php

$args = array( 'post_type' => 'tiles', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
$arr = array();
while ( $loop->have_posts() ) : $loop->the_post();
    if(get_post_meta( get_the_ID(), '_tmx_tile_type', true)[0] == 2) continue;
?>
<li class="tile-wrap tile-item-1" data-q="0" data-cat-a="12" data-cat-b="8">
    <input type="radio" class="tile-type-input" value="<?php the_ID(); ?>" data-tile-width="600" data-tile-height="300" name="tile_1_radio" id="tile_radio_<?php the_ID(); ?>" />
    <label class="tile-type-label" aria-label="Title" for="tile_radio_<?php the_ID(); ?>">
        <img style="max-width:100%;max-height:62px;" data-src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>" />
    </label>
</li>
<?php
endwhile;
wp_reset_query();