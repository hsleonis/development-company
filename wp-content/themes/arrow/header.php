<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(''); ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="loading">
  <img id="loading-image" src="<?php echo get_template_directory_uri(); ?>/resources/img/715.GIF" alt="Loading..." />
</div>
    <section id="header" class="top-header">
        <div class="container-fluid">
            <div class="row">
                <div class="container margin-top">
                    <div class="row">
                        <div class="col-md-2 col-sm-8 col-xs-7 top-header-left always-visible">
                            <!-- <div class="row"> -->
                                <!-- menu-left -->
                                <div class="menu-left">
                                    <a class="menu-bar mobile-menu-button" href="#">
                                        <p class="menu-bar-bg"></p>
                                        <p class="menu-bar-bg"></p>
                                        <p class="menu-bar-bg"></p>
                                    </a>
                                </div>
                                <!-- end of menu-left -->

                                <!-- Logo -->
                                <div class="logo">
                                    <a href="<?php bloginfo('url'); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
                                </div>
                                <!-- End of logo -->
                            <!-- </div> -->
                        </div>

                        <!-- right panel -->
                        <div class="col-md-4 col-sm-4 col-xs-5 top-header-right pull-right">
                            <!-- <div class="row"> -->
                                <!-- main-menu -->
                                <div class="menu-right col-xs-pull-right">
                                    <a class="menu-bar menu-button-add" href="#">
                                        <p class="menu-bar-bg"></p>
                                        <p class="menu-bar-bg"></p>
                                        <p class="menu-bar-bg"></p>
                                    </a>
                                    <div class="menu-bar-border"></div>
                                    <p>MENU</p>
                                </div>
                                <!-- end of main-menu -->

                                <!-- search-panel -->
                                <div class="search-panel">
                                    <a id="search-btn" class="search-button-add" href="#">
                                        <i class="sprite sprite-search"></i>
                                    </a>
                                </div>
                                <!-- end of search-panel -->
                            <!-- </div> -->
                        </div>
                        <!-- end of right panel -->
                    </div>
                </div>

                <div class="header-border-bottom margin-top"></div>   <!--header-border-->

                <div class="container-fluid">
                    <div id="menu-bg" class="row">
                        <div class="container">
                            <!-- <div class="row"> -->
                            <div class="row">
                                <!-- main-menu-content -->
                                <div class="main-menu-content">
                                    <!-- left side menu content -->
                                    <div class="col-md-8 col-sm-12 col-xs-12">
                                        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' =>'menu-content-left-ul' ) ); ?>
                                    </div>
                                    <!-- end of left side menu content -->

                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <!-- right side menu content -->
                                        <?php wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container_class' =>'menu-content-right-ul' ) ); ?>
                                        <!-- end of right side menu content -->


                                        <!-- right-side-social -->
                                        <ul class="menu-content-social-ul">
                                            <li><a href="#">
                                                <i class="sprite sprite-yt display-block"></i><i class="sprite sprite-hover-yt display-none"></i></a>
                                            </li>

                                            <li><a href="#">
                                                <i class="sprite sprite-gp display-block"></i><i class="sprite sprite-hover-gp display-none"></i></a>
                                            </li>

                                            <li><a href="#">
                                                <i class="sprite sprite-tw display-block"></i><i class="sprite sprite-hover-tw display-none"></i></a>
                                            </li>

                                            <li><a href="#">
                                                <i class="sprite sprite-fb display-block"></i><i class="sprite sprite-hover-fb display-none"></i></a>
                                            </li>
                                        </ul>
                                        <!-- end of right-side-social -->
                                    </div>


                                </div>
                                <!-- end of main-menu-content -->
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>                        
            </div>
        </div>
        
        <!-- Mobile menu -->
        <?php get_template_part('mobile-menu'); ?>
        <!-- end of mobile menu -->

    </section>