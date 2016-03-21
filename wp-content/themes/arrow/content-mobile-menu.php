<!-- mobile-menu-->
<div class="container-fluid mobile-menu">
    <div class="row height100">
        <div class="col-md-7 col-sm-7 col-xs-9 remove-padding mobile-menu-left" value="right">
            <!-- mobile-main-menu -->
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container'=> 'ul', 'menu_class' =>'mobile-menu-ul' ) ); ?>
            <!-- end of mabile-main-menu -->

            <div class="mobile-bottom">
                <!-- mabile-contact-menu -->
                <?php wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container'=> 'ul', 'menu_class' =>'mobile-menu-other-ul' ) ); ?>

                 <ul class="mobile-menu-social-ul">
                    <li><a href="<?php echo get_theme_mod( 'yt_txt_link', '#' ); ?>">
                        <i class="sprite sprite-yt display-block"></i><i class="sprite sprite-hover-yt display-none"></i></a>
                    </li>

                    <li><a href="<?php echo get_theme_mod( 'gp_txt_link', '#' ); ?>">
                        <i class="sprite sprite-gp display-block"></i><i class="sprite sprite-hover-gp display-none"></i></a>
                    </li>

                    <li><a href="<?php echo get_theme_mod( 'tw_txt_link', '#' ); ?>">
                        <i class="sprite sprite-tw display-block"></i><i class="sprite sprite-hover-tw display-none"></i></a>
                    </li>

                    <li><a href="<?php echo get_theme_mod( 'fb_txt_link', '#' ); ?>">
                        <i class="sprite sprite-fb display-block"></i><i class="sprite sprite-hover-fb display-none"></i></a>
                    </li>
                </ul>
                <!-- end of mabile-contact-menu -->
            </div>
        </div>

        <div class="col-md-5 col-sm-5 col-xs-3 mobile-menu-right"></div>
    </div>
</div>
<!-- end of mobile-menu-->