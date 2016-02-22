<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/visualizer/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/visualizer/viewer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/visualizer/engine.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/visualizer/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/visualizer/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/visualizer/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/visualizer/css/component.css">
    <script src="<?php echo get_template_directory_uri(); ?>/visualizer/js/jquery-2.1.4.min.js"></script>
    
    <style type="text/css">
        .cnt223 a {
            text-decoration: none;
        }
        
        .popup {
            width: 100%;
            margin: 0 auto;
            display: none;
            position: fixed;
            z-index: 101;
        }
        
        .cnt223 {
            min-width: 600px;
            width: 600px;
            min-height: 150px;
            margin: 100px auto;
            background: #f3f3f3;
            position: relative;
            z-index: 103;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px #000;
        }
        
        .cnt223 p {
            clear: both;
            color: #555555;
            text-align: center;
            font-size: 17px;
        }
        
        .cnt223 p a {
            color: #d91900;
            font-weight: bold;
        }
        
        .cnt223 .x {
            float: right;
            height: 35px;
            left: 22px;
            position: relative;
            top: -25px;
            width: 34px;
        }
        
        .cnt223 .x:hover {
            cursor: pointer;
        }
    </style>
    <script type='text/javascript'>
        $(function () {
            var overlay = $('<div id="overlay"></div>');
            overlay.show();
            overlay.appendTo(document.body);
            $('.popup').show();
            $('.close1').click(function () {
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });

            $('.x').click(function () {
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });
        });
    </script>




</head>

<body class="inner_page_bg cbp-spmenu-push" style="padding-right: 15px;">



    <div class="js">
        <!--pre loader code-->
        <div>
            <div id="preloader">Go to landscape mode</div>
        </div>
    </div>
    <!--END: pre loader element-->

    <div class="js">
        <!--pre loader code-->
        <div>
            <div id="preloader2"></div>
        </div>
    </div>
    <!--END: pre loader element-->


    <div id="page">
        <?php get_template_part('content-room'); ?>
        
        <div style='top:15px;left:15px;position:fixed;'>
            <a href="#" class="menu_toggle" id="showLeft">
                <img src="<?php echo get_template_directory_uri(); ?>/visualizer/images/toggle_btn.png" alt="">
            </a>
            <a href="#" class="logo" align="center">
                <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
            </a>
        </div>
        <div style='top:15px;right:15px;position:fixed;' class='header_nav hidden-xs'>
            <!--<a class="btn pre_btn" id='addArea'>Add Area</a>-->
            <a data-toggle="modal" class="btn pre_btn" data-target="#roomsModal">Select Room</a>
            <a href="#" data-toggle="modal" class="btn pre_btn" data-target=".modal_info">Product Info</a>
        </div>
        <!-- Header -->