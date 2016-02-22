<?php
    get_header();
?>

        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left custom_nav" id="cbp-spmenu-s1">
            <div role="tabpanel">
                <ul style='display:none;' class="nav nav-tabs custom_sidebar_tabs_wrap" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#menuPanel1" aria-controls="1" role="tab" data-toggle="tab">
                            <img src="<?php echo get_template_directory_uri(); ?>/visualizer/images/1_icon.png" alt="">
                            <br>1 </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#menuPanel2" aria-controls="2" role="tab" data-toggle="tab">
                            <img src="<?php echo get_template_directory_uri(); ?>/visualizer/images/2_icon.png" alt="">
                            <br>2 </a>
                    </li>
                </ul>
                <div class="tab-content tab_click">
                    <div role="tabpanel" class="tab-pane active custom_sidebar_tab_content" id="menuPanel1">
                        <form action="" autocomplete="off" onsubmit="return false;">
                            <div class="top_btns">
                                <button onclick="delete tile_datas['1'];delete tile_datas['1_'];render(vis_cvs);" type="button" class="btn btn-default btn-sm btn-block custom_default_btn">Clear Tiles</button>
                                <button type="button" class="btn btn-default btn-sm btn-block custom_default_btn" data-toggle="modal" data-target="#layouts-section-1">Select Layout</button>
                                <button type="button" class="btn btn-default btn-sm btn-block custom_default_btn" data-toggle="modal" data-target="#grouts-section-1">Select Grout</button>
                                <button style='display:none;' type="button" class="btn btn-default btn-sm btn-block custom_default_btn" data-toggle="modal" data-target="#model-section-1">3D Model</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="checkbox">
                                <div class="rotation">
                                    Rotate
                                    <select class="rotate-degree" data-tile-id="1">
                                        <option value="0">0</option>
                                        <!--<option value="45">45</option>-->
                                        <option value="90">90</option>
                                    </select>
                                    <input onkeyup='searchKeyPress(1,this);' placeholder="Search by tile names" style='margin-left:17px;width:163px;padding:3px;border-radius:0;border:1px solid gray;'></input>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="filter_thumbs">
                                <ul class="tiles-list" id='tiles-list-1'>
                                    <?php get_template_part('content-thumb'); ?>
                                </ul>
                                <script>
                                    $(function () {
                                        $("#tiles-list-1").preloader();
                                    });
                                </script>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane  custom_sidebar_tab_content" id="menuPanel2">
                        <form action="" autocomplete="off" onsubmit="return false;">
                            <div class="top_btns">
                                <button onclick="delete tile_datas['2'];delete tile_datas['2_'];render(vis_cvs);" type="button" class="btn btn-default btn-sm btn-block custom_default_btn">Clear Tiles</button>
                                <button type="button" class="btn btn-default btn-sm btn-block custom_default_btn" data-toggle="modal" data-target="#layouts-section-2">Select Layout</button>
                                <button type="button" class="btn btn-default btn-sm btn-block custom_default_btn" data-toggle="modal" data-target="#grouts-section-2">Select Grout</button>
                                <button style='display:none;' type="button" class="btn btn-default btn-sm btn-block custom_default_btn" data-toggle="modal" data-target="#model-section-2">3D Model</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="checkbox">
                                <div class="rotation">
                                    Rotate
                                    <select class="rotate-degree" data-tile-id="2">
                                        <option value="0">0</option>
                                        <!--<option value="45">45</option>-->
                                        <option value="90">90</option>
                                    </select>
                                    <input onkeyup='searchKeyPress(2,this);' placeholder="Search by tile names" style='margin-left:17px;width:163px;padding:3px;border-radius:0;border:1px solid gray;'></input>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="filter_thumbs">
                                <ul class="tiles-list" id='tiles-list-2'>
                                    <?php get_template_part('content-thumb2'); ?>
                                </ul>
                                <script>
                                    $(function () {
                                        $("#tiles-list-2").preloader();
                                    });
                                </script>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Side controls -->

        <div class="right_toggle_btn">
            <a id="show_btn" href="#">
                <img class="show_img" src="<?php echo get_template_directory_uri(); ?>/visualizer/images/toolbar-open-lg.png">
                <img class="hide_img" src="<?php echo get_template_directory_uri(); ?>/visualizer/images/toolbar-close-lg.png">
            </a>
        </div>
        <div class="btns_wrap">
            <div class="header_nav header_nav_xs">
                <!--<a class="btn pre_btn" id='addArea'>Add Area</a>-->
                <a data-toggle="modal" class="btn pre_btn" data-target="#roomsModal">Select Room</a>
                <a href="#" data-toggle="modal" class="btn pre_btn" data-target=".modal_info">Product Info</a>
            </div>
            <div class="right_side_btns">
                <a href="#" data-toggle="modal" data-target="#modal_save">
                    <img src="<?php echo get_template_directory_uri(); ?>/visualizer/images/save_icon.png" alt="">
                </a>
                <br class="mobile_br_hide">
                <a href="#" class="print-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/visualizer/images/print_icon.png" alt="">
                </a>
                <br class="mobile_br_hide">
                <a href="#modal_mail" data-toggle="modal" data-target="#modal_mail">
                    <img src="<?php echo get_template_directory_uri(); ?>/visualizer/images/mail_icon.png" alt="">
                </a>
                <br class="mobile_br_hide">
                <a href="#" class="share-toggle">
                    <img src="<?php echo get_template_directory_uri(); ?>/visualizer/images/share_icon.png" alt="">
                </a>
                <br class="mobile_br_hide">
                <a href="#" class="enter-full-screen">
                    <img src="<?php echo get_template_directory_uri(); ?>/visualizer/images/full_screen_icon.png" alt="">
                </a>
            </div>
        </div>

        <!-- Product Info Modal -->
        <div class="modal_info modal fade" id="modal_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header custom_modal_header">
                        <button type="button" class="close custom_modal_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title custom_modal_title" id="myModalLabel">Product Information</h4>
                    </div>
                    <div class="modal-body">
                        <div class="content_wrapper">
                            <ul class="nav nav-tabs prod-info-tabs" role="tablist" id="myTab">
                                <li role="presentation" class="active"><a href="#1Tab" aria-controls="1Tab" role="tab" data-toggle="tab">Wall</a></li>
                                <li role="presentation" class=""><a href="#2Tab" aria-controls="2Tab" role="tab" data-toggle="tab">Floor</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="1Tab">
                                    <div class="tabs-content-wrapper">
                                        <div id="tile_info_list_1"></div>
                                        <div id="tile_info_list_shapes_1"></div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane " id="2Tab">
                                    <div class="tabs-content-wrapper">
                                        <div id="tile_info_list_2"></div>
                                        <div id="tile_info_list_shapes_2"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Layout Modal -->
        <div class="modal fade" id="layouts-section-1" tabindex="-1" role="dialog" aria-labelledby="layouts-section-1-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header custom_modal_header">
                        <button type="button" class="close custom_modal_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title custom_modal_title" id="layouts-section-1-label">Select Layout</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" onsubmit="return false;" autocomplete="off">
                            <ul class="layout_thumbs no-list layout-list" align="center">
                                <li class="stack-item">
                                    <input id="layout-grid-1" data-room="1" data-tile-id="1" value="grid" class="layout-type-input" type="radio" name="layout-type-1" checked>
                                    <label class="layout-type-label" aria-label="Grid" for="layout-grid-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/visualizer/layout_thumbs/grid.png" alt="Grid">
                                    </label>
                                </li>
                                <li class="stack-item">
                                    <input id="layout-brickRow-1" data-room="1" data-tile-id="1" value="brickRow" class="layout-type-input" type="radio" name="layout-type-1">
                                    <label class="layout-type-label" aria-label="Brick Row" for="layout-brickRow-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/visualizer/layout_thumbs/brickRow.png" alt="Brick Row">
                                    </label>
                                </li>
                                <li class="stack-item">
                                    <input id="layout-brickColumn-1" data-room="1" data-tile-id="1" value="brickColumn" class="layout-type-input" type="radio" name="layout-type-1">
                                    <label class="layout-type-label" aria-label="Brick Column" for="layout-brickColumn-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/visualizer/layout_thumbs/brickColumn.png" alt="Brick Column">
                                    </label>
                                </li>
                                <li class="stack-item">
                                    <input id="layout-checkered-1" data-room="1" data-tile-id="1" value="checkered" class="layout-type-input" type="radio" name="layout-type-1">
                                    <label class="layout-type-label" aria-label="Checkered" for="layout-checkered-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/visualizer/layout_thumbs/checkered.png" alt="Checkered">
                                    </label>
                                </li>
                                <li class="stack-item">
                                    <input id="layout-dragdrop-1" data-room="1" data-tile-id="1" value="dragdrop" class="layout-type-input" type="radio" name="layout-type-1">
                                    <label class="layout-type-label" aria-label="Free Design" for="layout-dragdrop-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/visualizer/layout_thumbs/dragdrop.png" alt="Free Design">
                                    </label>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="modal-footer custome_modal_footer">
                        <button class="btn btn-default btn-sm custom_default_btn" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-default btn-sm custom_primery_btn" type="button">Select</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grout Modal -->
        <div class="modal fade" id="grouts-section-1" tabindex="-1" role="dialog" aria-labelledby="grouts-section-1-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header custom_modal_header">
                        <button type="button" class="close custom_modal_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title custom_modal_title" id="grouts-section-1-label">Select Grout</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" onsubmit="return false;" autocomplete="off">
                            <div class="row" align="center">
                                <div class="grout_color_box">
                                    <span>
                                                                                <input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,-1);"  name="tile_grout_1" id="tile_grout_1_null">
                                                                                <label class="grout-type-label" data-hint="No Grouth" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_null"><div style='display:inline-block;width:50px;height:50px;margin:3px;padding:3px;border-radius:0;border:1px solid gray;'>No Grout</div></label>
                                                                        </span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,1);" data-color="#aeaeae" name="tile_grout_1" id="tile_grout_1_1" checked>
										<label class="grout-type-label" data-hint="Gray" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_1"><div alt="Gray" title="Gray" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#aeaeae;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,2);" data-color="#000000" name="tile_grout_1" id="tile_grout_1_2" >
										<label class="grout-type-label" data-hint="Black" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_2"><div alt="Black" title="Black" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#000000;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,3);" data-color="#ffffff" name="tile_grout_1" id="tile_grout_1_3" >
										<label class="grout-type-label" data-hint="White" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_3"><div alt="White" title="White" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#ffffff;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,4);" data-color="#894545" name="tile_grout_1" id="tile_grout_1_4" >
										<label class="grout-type-label" data-hint="Brown" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_4"><div alt="Brown" title="Brown" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#894545;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,5);" data-color="#ffffd2" name="tile_grout_1" id="tile_grout_1_5" >
										<label class="grout-type-label" data-hint="Cream" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_5"><div alt="Cream" title="Cream" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#ffffd2;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,6);" data-color="#2f3e17" name="tile_grout_1" id="tile_grout_1_6" >
										<label class="grout-type-label" data-hint="Wood" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_6"><div alt="Wood" title="Wood" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#2f3e17;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,7);" data-color="#575757" name="tile_grout_1" id="tile_grout_1_7" >
										<label class="grout-type-label" data-hint="Dark Gray" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_7"><div alt="Dark Gray" title="Dark Gray" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#575757;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer custome_modal_footer">
                        <button class="btn btn-default btn-sm custom_default_btn" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-default btn-sm custom_primery_btn" type="button">Select</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 3D Model  Modal -->
        <div class="modal fade" id="grouts-section-1" tabindex="-1" role="dialog" aria-labelledby="grouts-section-1-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header custom_modal_header">
                        <button type="button" class="close custom_modal_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title custom_modal_title" id="grouts-section-1-label">Select Grout</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" onsubmit="return false;" autocomplete="off">
                            <div class="row" align="center">
                                <div class="grout_color_box">
                                    <span>
                                                                                <input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,-1);"  name="tile_grout_1" id="tile_grout_1_null">
                                                                                <label class="grout-type-label" data-hint="No Grouth" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_null"><div style='display:inline-block;width:50px;height:50px;margin:3px;padding:3px;border-radius:0;border:1px solid gray;'>No Grout</div></label>
                                                                        </span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,1);" data-color="#aeaeae" name="tile_grout_1" id="tile_grout_1_1" checked>
										<label class="grout-type-label" data-hint="Gray" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_1"><div alt="Gray" title="Gray" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#aeaeae;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,2);" data-color="#000000" name="tile_grout_1" id="tile_grout_1_2" >
										<label class="grout-type-label" data-hint="Black" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_2"><div alt="Black" title="Black" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#000000;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,3);" data-color="#ffffff" name="tile_grout_1" id="tile_grout_1_3" >
										<label class="grout-type-label" data-hint="White" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_3"><div alt="White" title="White" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#ffffff;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,4);" data-color="#894545" name="tile_grout_1" id="tile_grout_1_4" >
										<label class="grout-type-label" data-hint="Brown" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_4"><div alt="Brown" title="Brown" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#894545;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,5);" data-color="#ffffd2" name="tile_grout_1" id="tile_grout_1_5" >
										<label class="grout-type-label" data-hint="Cream" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_5"><div alt="Cream" title="Cream" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#ffffd2;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,6);" data-color="#2f3e17" name="tile_grout_1" id="tile_grout_1_6" >
										<label class="grout-type-label" data-hint="Wood" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_6"><div alt="Wood" title="Wood" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#2f3e17;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(1,7);" data-color="#575757" name="tile_grout_1" id="tile_grout_1_7" >
										<label class="grout-type-label" data-hint="Dark Gray" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_1_7"><div alt="Dark Gray" title="Dark Gray" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#575757;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer custome_modal_footer">
                        <button class="btn btn-default btn-sm custom_default_btn" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-default btn-sm custom_primery_btn" type="button">Select</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Filter Modal -->
        <div class="modal fade" id="filter-section-1" tabindex="-1" role="dialog" aria-labelledby="filter-section-label-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header custom_modal_header">
                        <button type="button" class="close custom_modal_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title custom_modal_title" id="filter-section-label-1">Filter</h4>
                    </div>
                    <div class="modal-body">
                        <form action="#" class="form-horizontal filter_form" autocomplete="off" onsubmit="return false;">
                            <div style="display:none;">
                                <div class="form-group">
                                    <label for="filter-category-a-1" class="col-sm-3 control-label">Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control filter-category-a" data-id="1" id="filter-category-a-1">
                                            <option selected="selected" value="-1">-All-</option>
                                            <option value='12'>Tiles</option>
                                            <option value='23'>Wallpaper</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group gray_bg">
                                    <label for="filter-category-b-1" class="col-sm-3 control-label">Colour</label>
                                    <div class="col-sm-9">
                                        <select class="form-control filter-category-b" data-id="1" id="filter-category-b-1"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="filter-size-1" class="col-sm-3 control-label">Size</label>
                                    <div class="col-sm-9">
                                        <select class="form-control filter-size" data-id="1" id="filter-size-1"></select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="filter-9" class="col-sm-3 control-label">Price per sqft</label>
                                <div class="col-sm-9">
                                    <input type="text" data-filter-input-id="9" readonly style="width:100%; border:0; color:#f6931f; font-weight:bold;">
                                    <hr/>
                                    <div data-for="filter" data-filter-type="number" data-filter-id="9"></div>

                                    <script>
                                        $(function () {
                                            $("[data-filter-id=9]", $("#filter-section-1")).slider({
                                                range: true,
                                                min: 0,
                                                max: 1,
                                                values: [0, 1],
                                                slide: function (event, ui) {
                                                    update_filter_text_1_9(ui.values[0], ui.values[1]);
                                                }
                                            });
                                        });

                                        update_filter_1_9 = function (min, max, v_min, v_max) {
                                            $("[data-filter-id=9]", $("#filter-section-1")).slider("option", "min", min);
                                            $("[data-filter-id=9]", $("#filter-section-1")).slider("option", "max", max);
                                            $("[data-filter-id=9]", $("#filter-section-1")).slider("option", "values", [v_min, v_max]);
                                            update_filter_text_1_9(v_min, v_max);
                                        }
                                        update_filter_text_1_9 = function (v_min, v_max) {
                                            $('[data-filter-input-id=9]', $("#filter-section-1")).val('Range at, Minimum: ' + v_min + ', Maximum: ' + v_max);
                                            $('[data-filter-input-id=9]', $("#filter-section-1")).attr('data-min', v_min);
                                            $('[data-filter-input-id=9]', $("#filter-section-1")).attr('data-max', v_max);
                                        }
                                    </script>


                                </div>
                            </div>

                        </form>
                        <script>
                            filter_select = function (inputs, mask) {
                                inputs.each(function () {
                                    this.checked = eval(mask.replace('$', this.checked));
                                });
                            }
                        </script>
                    </div>
                    <div class="modal-footer custome_modal_footer">
                        <button class="btn btn-default btn-sm custom_default_btn" type="button" data-dismiss="modal">Close</button>
                        <button data-key='1' class="apply-filter btn btn-default btn-sm custom_primery_btn" type="button">Apply Filter</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function () {
                init_number_filters('1');
                applyFilter('1');
            });
        </script>

        <!-- Layout Modal -->
        <div class="modal fade" id="layouts-section-2" tabindex="-1" role="dialog" aria-labelledby="layouts-section-2-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header custom_modal_header">
                        <button type="button" class="close custom_modal_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title custom_modal_title" id="layouts-section-2-label">Select Layout</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" onsubmit="return false;" autocomplete="off">
                            <ul class="layout_thumbs no-list layout-list" align="center">
                                <li class="stack-item">
                                    <input id="layout-grid-2" data-room="2" data-tile-id="2" value="grid" class="layout-type-input" type="radio" name="layout-type-2" checked>
                                    <label class="layout-type-label" aria-label="Grid" for="layout-grid-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/visualizer/layout_thumbs/grid.png" alt="Grid">
                                    </label>
                                </li>
                                <li class="stack-item">
                                    <input id="layout-brickRow-2" data-room="2" data-tile-id="2" value="brickRow" class="layout-type-input" type="radio" name="layout-type-2">
                                    <label class="layout-type-label" aria-label="Brick Row" for="layout-brickRow-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/visualizer/layout_thumbs/brickRow.png" alt="Brick Row">
                                    </label>
                                </li>
                                <li class="stack-item">
                                    <input id="layout-brickColumn-2" data-room="2" data-tile-id="2" value="brickColumn" class="layout-type-input" type="radio" name="layout-type-2">
                                    <label class="layout-type-label" aria-label="Brick Column" for="layout-brickColumn-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/visualizer/layout_thumbs/brickColumn.png" alt="Brick Column">
                                    </label>
                                </li>
                                <li class="stack-item">
                                    <input id="layout-checkered-2" data-room="2" data-tile-id="2" value="checkered" class="layout-type-input" type="radio" name="layout-type-2">
                                    <label class="layout-type-label" aria-label="Checkered" for="layout-checkered-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/visualizer/layout_thumbs/checkered.png" alt="Checkered">
                                    </label>
                                </li>
                                <li class="stack-item">
                                    <input id="layout-dragdrop-2" data-room="2" data-tile-id="2" value="dragdrop" class="layout-type-input" type="radio" name="layout-type-2">
                                    <label class="layout-type-label" aria-label="Free Design" for="layout-dragdrop-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/visualizer/layout_thumbs/dragdrop.png" alt="Free Design">
                                    </label>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="modal-footer custome_modal_footer">
                        <button class="btn btn-default btn-sm custom_default_btn" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-default btn-sm custom_primery_btn" type="button">Select</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grout Modal -->
        <div class="modal fade" id="grouts-section-2" tabindex="-1" role="dialog" aria-labelledby="grouts-section-2-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header custom_modal_header">
                        <button type="button" class="close custom_modal_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title custom_modal_title" id="grouts-section-2-label">Select Grout</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" onsubmit="return false;" autocomplete="off">
                            <div class="row" align="center">
                                <div class="grout_color_box">
                                    <span>
                                                                                <input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,-1);"  name="tile_grout_2" id="tile_grout_2_null">
                                                                                <label class="grout-type-label" data-hint="No Grouth" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_null"><div style='display:inline-block;width:50px;height:50px;margin:3px;padding:3px;border-radius:0;border:1px solid gray;'>No Grout</div></label>
                                                                        </span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,1);" data-color="#aeaeae" name="tile_grout_2" id="tile_grout_2_1" checked>
										<label class="grout-type-label" data-hint="Gray" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_1"><div alt="Gray" title="Gray" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#aeaeae;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,2);" data-color="#000000" name="tile_grout_2" id="tile_grout_2_2" >
										<label class="grout-type-label" data-hint="Black" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_2"><div alt="Black" title="Black" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#000000;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,3);" data-color="#ffffff" name="tile_grout_2" id="tile_grout_2_3" >
										<label class="grout-type-label" data-hint="White" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_3"><div alt="White" title="White" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#ffffff;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,4);" data-color="#894545" name="tile_grout_2" id="tile_grout_2_4" >
										<label class="grout-type-label" data-hint="Brown" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_4"><div alt="Brown" title="Brown" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#894545;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,5);" data-color="#ffffd2" name="tile_grout_2" id="tile_grout_2_5" >
										<label class="grout-type-label" data-hint="Cream" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_5"><div alt="Cream" title="Cream" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#ffffd2;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,6);" data-color="#2f3e17" name="tile_grout_2" id="tile_grout_2_6" >
										<label class="grout-type-label" data-hint="Wood" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_6"><div alt="Wood" title="Wood" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#2f3e17;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,7);" data-color="#575757" name="tile_grout_2" id="tile_grout_2_7" >
										<label class="grout-type-label" data-hint="Dark Gray" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_7"><div alt="Dark Gray" title="Dark Gray" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#575757;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer custome_modal_footer">
                        <button class="btn btn-default btn-sm custom_default_btn" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-default btn-sm custom_primery_btn" type="button">Select</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 3D Model  Modal -->
        <div class="modal fade" id="grouts-section-2" tabindex="-1" role="dialog" aria-labelledby="grouts-section-2-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header custom_modal_header">
                        <button type="button" class="close custom_modal_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title custom_modal_title" id="grouts-section-2-label">Select Grout</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" onsubmit="return false;" autocomplete="off">
                            <div class="row" align="center">
                                <div class="grout_color_box">
                                    <span>
                                                                                <input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,-1);"  name="tile_grout_2" id="tile_grout_2_null">
                                                                                <label class="grout-type-label" data-hint="No Grouth" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_null"><div style='display:inline-block;width:50px;height:50px;margin:3px;padding:3px;border-radius:0;border:1px solid gray;'>No Grout</div></label>
                                                                        </span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,1);" data-color="#aeaeae" name="tile_grout_2" id="tile_grout_2_1" checked>
										<label class="grout-type-label" data-hint="Gray" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_1"><div alt="Gray" title="Gray" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#aeaeae;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,2);" data-color="#000000" name="tile_grout_2" id="tile_grout_2_2" >
										<label class="grout-type-label" data-hint="Black" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_2"><div alt="Black" title="Black" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#000000;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,3);" data-color="#ffffff" name="tile_grout_2" id="tile_grout_2_3" >
										<label class="grout-type-label" data-hint="White" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_3"><div alt="White" title="White" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#ffffff;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,4);" data-color="#894545" name="tile_grout_2" id="tile_grout_2_4" >
										<label class="grout-type-label" data-hint="Brown" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_4"><div alt="Brown" title="Brown" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#894545;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,5);" data-color="#ffffd2" name="tile_grout_2" id="tile_grout_2_5" >
										<label class="grout-type-label" data-hint="Cream" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_5"><div alt="Cream" title="Cream" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#ffffd2;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,6);" data-color="#2f3e17" name="tile_grout_2" id="tile_grout_2_6" >
										<label class="grout-type-label" data-hint="Wood" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_6"><div alt="Wood" title="Wood" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#2f3e17;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                    <span>
										<input type="radio" class="grout-type-input" onchange="if(this.checked)selectGrout(2,7);" data-color="#575757" name="tile_grout_2" id="tile_grout_2_7" >
										<label class="grout-type-label" data-hint="Dark Gray" style="display:inline-block;width:auto;cursor:pointer;" for="tile_grout_2_7"><div alt="Dark Gray" title="Dark Gray" style="display:inline-block;margin:3.7px;border-radius:0;background-color:#575757;border:1.3px solid black;width:37px;height:37px;" /></div /></label>
									</span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer custome_modal_footer">
                        <button class="btn btn-default btn-sm custom_default_btn" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-default btn-sm custom_primery_btn" type="button">Select</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Filter Modal -->
        <div class="modal fade" id="filter-section-2" tabindex="-1" role="dialog" aria-labelledby="filter-section-label-2" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header custom_modal_header">
                        <button type="button" class="close custom_modal_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title custom_modal_title" id="filter-section-label-2">Filter</h4>
                    </div>
                    <div class="modal-body">
                        <form action="#" class="form-horizontal filter_form" autocomplete="off" onsubmit="return false;">
                            <div style="display:none;">
                                <div class="form-group">
                                    <label for="filter-category-a-2" class="col-sm-3 control-label">Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control filter-category-a" data-id="2" id="filter-category-a-2">
                                            <option selected="selected" value="-1">-All-</option>
                                            <option value='18'>Ceramic Tiles</option>
                                            <option value='19'>Wooden Tiles</option>
                                            <option value='20'>Random Tiles</option>
                                            <option value='12'>Tiles</option>
                                            <option value='21'>Marble</option>
                                            <option value='22'>Carpet</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group gray_bg">
                                    <label for="filter-category-b-2" class="col-sm-3 control-label">Colour</label>
                                    <div class="col-sm-9">
                                        <select class="form-control filter-category-b" data-id="2" id="filter-category-b-2"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="filter-size-2" class="col-sm-3 control-label">Size</label>
                                    <div class="col-sm-9">
                                        <select class="form-control filter-size" data-id="2" id="filter-size-2"></select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="filter-10" class="col-sm-3 control-label">Price per sqft</label>
                                <div class="col-sm-9">
                                    <input type="text" data-filter-input-id="10" readonly style="width:100%; border:0; color:#f6931f; font-weight:bold;">
                                    <hr/>
                                    <div data-for="filter" data-filter-type="number" data-filter-id="10"></div>

                                    <script>
                                        $(function () {
                                            $("[data-filter-id=10]", $("#filter-section-2")).slider({
                                                range: true,
                                                min: 0,
                                                max: 1,
                                                values: [0, 1],
                                                slide: function (event, ui) {
                                                    update_filter_text_2_10(ui.values[0], ui.values[1]);
                                                }
                                            });
                                        });

                                        update_filter_2_10 = function (min, max, v_min, v_max) {
                                            $("[data-filter-id=10]", $("#filter-section-2")).slider("option", "min", min);
                                            $("[data-filter-id=10]", $("#filter-section-2")).slider("option", "max", max);
                                            $("[data-filter-id=10]", $("#filter-section-2")).slider("option", "values", [v_min, v_max]);
                                            update_filter_text_2_10(v_min, v_max);
                                        }
                                        update_filter_text_2_10 = function (v_min, v_max) {
                                            $('[data-filter-input-id=10]', $("#filter-section-2")).val('Range at, Minimum: ' + v_min + ', Maximum: ' + v_max);
                                            $('[data-filter-input-id=10]', $("#filter-section-2")).attr('data-min', v_min);
                                            $('[data-filter-input-id=10]', $("#filter-section-2")).attr('data-max', v_max);
                                        }
                                    </script>


                                </div>
                            </div>

                        </form>
                        <script>
                            filter_select = function (inputs, mask) {
                                inputs.each(function () {
                                    this.checked = eval(mask.replace('$', this.checked));
                                });
                            }
                        </script>
                    </div>
                    <div class="modal-footer custome_modal_footer">
                        <button class="btn btn-default btn-sm custom_default_btn" type="button" data-dismiss="modal">Close</button>
                        <button data-key='2' class="apply-filter btn btn-default btn-sm custom_primery_btn" type="button">Apply Filter</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function () {
                init_number_filters('2');
                applyFilter('2');
            });
        </script>

    </div>

    <script>
        dont_hide_leftmenu_on_tile_click_for_one_time = false;

        function init_number_filters(key) {
            $('[data-for="filter"][data-filter-type="number"]', $("#filter-section-" + key)).each(function () {
                var elm = $(this);
                var filter_id = elm.attr('data-filter-id');
                var min = null;
                var max = null;
                $(".tile-item-" + key).each(function () {
                    var fval = Number($(this).attr('data-filter-' + filter_id));

                    if (fval * 0 != 0)
                        return;

                    if (min == null || fval < min)
                        min = fval;
                    if (max == null || fval > max)
                        max = fval;
                });
                if (min == null)
                    min = 0;
                if (max == null)
                    max = min + 1;
                window["update_filter_" + key + "_" + filter_id](min, max, min, max);
            });
        }

        $("button.apply-filter").click(function () {
            var elm = $(this);
            var key = elm.attr("data-key");

            applyFilter(key);
        });

        applyFilter = function (key) {
            //$('.filter-category-a').click();
            var items = $(".tile-item-" + key);
            //items.show();

            items.each(function () {
                var el = $(this);
                var show = true;
                $('[data-for="filter"]', $("#filter-section-" + key)).each(function () {
                    if (!show)
                        return;

                    var elm = $(this);

                    var ft = elm.attr('data-filter-type');
                    var fid = elm.attr('data-filter-id');

                    if (ft == 'option') {
                        var val = elm.val();
                        if (!elm.is(':checked')) {
                            var data = ',' + el.attr('data-filter-' + fid) + ',';
                            if (data.indexOf(',' + val + ',') > -1)
                                show = false;
                        } else if (elm.is(':checked')) {
                            var data = ',' + el.attr('data-filter-' + fid) + ',';
                            if (data.indexOf(',' + val + ',') > -1)
                                show = true;
                        }
                    } else if (ft == 'number') {
                        var fvals = elm.slider("option", "values");
                        var min = fvals[0];
                        var max = fvals[1];
                        var data = Number(el.attr('data-filter-' + fid));
                        if (min > data || max < data)
                            show = false;
                        else
                            show = true;
                    }
                });

                el[show ? 'show' : 'hide']();

            });
        }

        function arraysInCommon(arrays) {
            var i, common,
                L = arrays.length,
                min = Infinity;
            while (L) {
                if (arrays[--L].length < min) {
                    min = arrays[L].length;
                    i = L;
                }
            }
            common = arrays.splice(i, 1)[0];
            return common.filter(function (itm, indx) {
                if (common.indexOf(itm) == indx) {
                    return arrays.every(function (arr) {
                        return arr.indexOf(itm) != -1;
                    });
                }
            });
        }
    </script>

    <div class="modal_save modal fade" id="modal_save" tabindex="-1" role="dialog" aria-labelledby="save-design-dialog-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header custom_modal_header">
                    <button type="button" class="close custom_modal_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title custom_modal_title" id="save-design-dialog-label">Save Design</h4>
                </div>
                <div class="modal-body">
                    <div class="row" align="center">
                        <a class="btn btn-default btn-sm custom_primery_btn save-design stack-item" data-as="image">Save Design as image</a>
                        <a class="btn btn-default btn-sm custom_primery_btn save-design stack-item" data-as="info-pdf">Save with info as PDF</a>

                        <a class="btn btn-default btn-sm custom_primery_btn save-design stack-item" data-as="link">Save Design for later</a>
                    </div>
                </div>
                <div class="modal-footer custome_modal_footer">
                    <button class="btn btn-default btn-sm custom_default_btn" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal_share modal fade" id="modal_share" tabindex="-1" role="dialog" aria-labelledby="share-dialog-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header custom_modal_header">
                    <button type="button" class="close custom_modal_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title custom_modal_title" id="share-dialog-label">Share</h4>
                </div>
                <div class="modal-body">
                    <div class="row" align="center">
                        <a href="#" class="fa fa-facebook share-link" title="Share on Facebook" data-service="facebook" data-dismiss="modal"></a>
                        <a href="#" class="fa fa-twitter share-link" title="Share on Twitter" data-service="twitter" data-dismiss="modal"></a>
                        <a href="#" class="fa fa-google-plus share-link" title="Share on Google Plus" data-service="google" data-dismiss="modal"></a>
                    </div>
                </div>
                <div class="modal-footer custome_modal_footer">
                    <button class="btn btn-default btn-sm custom_default_btn" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_mail" tabindex="-1" role="dialog" aria-labelledby="mail-dialog-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form name="mailform" id="mailform" method="post" action="">
                    <div class="modal-header custom_modal_header">
                        <button type="button" class="close custom_modal_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title custom_modal_title" id="mail-dialog-label">Email</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="from" class="from" value="info@tilesvisualizer.com">
                        <div class="form-group">
                            <input type="text" placeholder="Your Full Name" name="full_name" class="full_name form-control" />
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Recipient's Email Address" name="to" class="to form-control" />
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Subject" name="subject" class="subject form-control" />
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Write your message here" class="message form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer custome_modal_footer">
                        <input type="submit" id="sendMail" value="Send" name="submit" class="btn btn-default btn-sm custom_default_btn" type="button">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id='cont_for_vis_cvs'>
        <canvas id='vis_cvs' class="view"></canvas>
        <!--a data-isdragging="no" data-type="move" data-left="640" data-top="275" class='move_icon' data-side="1"><img  src='<?php echo get_template_directory_uri(); ?>/visualizer/images/move.png'></img></a-->
        <a data-isdragging="no" data-left="640" data-top="275" onclick="showLeftMenu(1);" class='brush_icon' href="#menuPanel1" aria-controls="1" role="tab" data-toggle="tab"><img src='<?php echo get_template_directory_uri(); ?>/visualizer/images/brush.png'></img>
        </a>
        <!--a data-isdragging="no" data-type="move" data-left="804.5" data-top="803" class='move_icon' data-side="2"><img  src='<?php echo get_template_directory_uri(); ?>/visualizer/images/move.png'></img></a-->
        <a data-isdragging="no" data-left="804.5" data-top="803" onclick="showLeftMenu(2);" class='brush_icon' href="#menuPanel2" aria-controls="2" role="tab" data-toggle="tab"><img src='<?php echo get_template_directory_uri(); ?>/visualizer/images/brush.png'></img>
        </a>

        <style>
            .brush_icon {
                position: absolute;
                width: 50px;
                height: 50px;
                margin-left: -55px;
                margin-top: -55px;
                cursor: pointer;
                opacity: 0.5;
                z-index: 99999;
            }
            
            .brush_icon img {
                width: 100%;
                height: 100%;
            }
            
            .brush_icon:hover {
                opacity: 1;
            }
            
            .brush_icon:active {
                opacity: 0.55;
            }
            
            .move_icon {
                position: absolute;
                width: 55px;
                height: 55px;
                margin-left: 40px;
                margin-top: 0;
                cursor: move;
                opacity: 0.33;
            }
            
            .move_icon img {
                width: 100%;
                height: 100%;
            }
            
            .move_icon:hover {
                opacity: 1;
            }
            
            .move_icon:active {
                opacity: 0.55;
                cursor: move;
            }
        </style>
    </div>
    <section id="inverted-contain" style='display:none;'>
        <div class="panzoom-parent">
            <div class="canvas-wrap panzoom">
                <div class='mask view' id='mask' style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; display:none;">
                    <canvas id='line_cvs' class="view"></canvas>
                </div>
            </div>
        </div>
    </section>



    <script>
        var avail_tiles = <?php get_template_part('content-tiles') ?>;
        var tits = {
            "a12": "Tiles",
            "b8": "Type-1",
            "a23": "Wallpaper",
            "b15": "Type-1",
            "a18": "Ceramic Tiles",
            "b10": "Type-1",
            "a19": "Wooden Tiles",
            "b11": "Type-1",
            "a20": "Random Tiles",
            "b12": "Type-1",
            "a21": "Marble",
            "b13": "Type-1",
            "a22": "Carpet",
            "b14": "Type-1"
        };
        var cats = {
            "1": {
                "12": {
                    "8": {
                        "600x300": 0
                    }
                },
                "23": {
                    "15": {
                        "600x300": 1
                    }
                }
            },
            "2": {
                "18": {
                    "10": {
                        "600x600": 2
                    }
                },
                "19": {
                    "11": {
                        "600x600": 3
                    }
                },
                "20": {
                    "12": {
                        "600x600": 4
                    }
                },
                "12": {
                    "8": {
                        "1200x1200": 5
                    }
                },
                "21": {
                    "13": {
                        "1200x1200": 6
                    }
                },
                "22": {
                    "14": {
                        "1200x1200": 7,
                        "600x600": 8
                    }
                }
            }
        };

        var colors = {
            "1": "#aeaeae",
            "2": "#000000",
            "3": "#ffffff",
            "4": "#894545",
            "5": "#ffffd2",
            "6": "#2f3e17",
            "7": "#575757"
        };
        var grout_y_img_path = "<?php echo str_replace("/","\/", get_template_directory_uri()); ?>\/visualizer\/res\/grout-y.png";
        var grout_x_img_path = "<?php echo str_replace("/","\/", get_template_directory_uri()); ?>\/visualizer\/res\/grout-x.png";
        var send_mail_addr = "<?php echo str_replace("/","\/", get_template_directory_uri()); ?>\/admin\/visualizer\/mail"
    </script>

    <script id='script_0' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/iscroll.js"></script>
    <script id='script_1' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/modernizr.custom.js"></script>
    <script id='script_2' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/jquery-2.1.4.min.js"></script>
    <script id='script_3' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/respond.min.js"></script>
    <script id='script_4' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/jquery-ui.min.js"></script>
    <script id='script_5' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/jquery.validate.min.js"></script>
    <script id='script_6' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/easyResponsiveTabs.js"></script>
    <script id='script_7' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/jquery.slimscroll.min.js"></script>
    <script id='script_8' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/jQueryRotate.js"></script>
    <script id='script_9' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/jquery.prettySocial.min.js"></script>
    <script id='script_10' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/jquery.preloader.js"></script>
    <script id='script_11' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/popup.js"></script>
    <script id='script_12' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/fullscreen.js"></script>
    <script id='script_13' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/script.js"></script>
    <script id='script_14' src="<?php echo get_template_directory_uri(); ?>/visualizer/three.min.js"></script>
    <script id='script_15' src="<?php echo get_template_directory_uri(); ?>/visualizer/DDSLoader.js"></script>
    <script id='script_16' src="<?php echo get_template_directory_uri(); ?>/visualizer/MTLLoader.js"></script>
    <script id='script_17' src="<?php echo get_template_directory_uri(); ?>/visualizer/OBJMTLLoader.js"></script>
    <script id='script_18' src="<?php echo get_template_directory_uri(); ?>/visualizer/engine.js"></script>
    <script id='script_19' src="<?php echo get_template_directory_uri(); ?>/visualizer/engine.scene.js"></script>
    <script id='script_20' src="<?php echo get_template_directory_uri(); ?>/visualizer/engine.tile.js"></script>
    <script id='script_21' src="<?php echo get_template_directory_uri(); ?>/visualizer/engine.render.js"></script>
    <script id='script_22' src="<?php echo get_template_directory_uri(); ?>/visualizer/engine.shape.js"></script>
    <script id='script_23' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/bootstrap.min.js"></script>
    <script id='script_24' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/masonry.pkgd.min.js"></script>
    <script id='script_25' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/jquery.slimscroll.min.js"></script>
    <script id='script_26' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/hideAddressbar.min.js"></script>
    <script id='script_27' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/classie.js"></script>
    <script id='script_28' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/script-2.js"></script>
    <script id='script_29' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/jquery.panzoom.js"></script>
    <script id='script_jspdf' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/jspdf.min.js"></script>
    <script id='script_html2canvas' src="<?php echo get_template_directory_uri(); ?>/visualizer/js/html2canvas.js"></script>


    <script type="text/javascript">
        (function () {
            var $section = $('#inverted-contain');
            $section.find('.panzoom').panzoom({
                $zoomIn: $section.find(".zoom-in"),
                $zoomOut: $section.find(".zoom-out"),
                $zoomRange: $section.find(".zoom-range"),
                $reset: $(".reset"),
                startTransform: 'scale(1.1)',
                increment: 0.1,
                contain: 'invert',
                minScale: 1
            }).panzoom('zoom');
        })();
        var $panzoom = $('.panzoom').panzoom();
        $(window).on('resize', function () {
            $panzoom.panzoom('resetDimensions');
        });

        setScene(["<?php echo str_replace('/','\/', get_template_directory_uri()); ?>\/images\/room_background_6.png", "<?php echo str_replace('/','\/', get_template_directory_uri()); ?>\/images\/room_foreground_6.png", "[{\"0\":1,\"1\":-64,\"2\":-17.4,\"3\":22,\"4\":0,\"5\":0,\"6\":0,\"7\":70,\"8\":150,\"9\":12,\"10\":12,\"11\":[[0,0],[1600,0],[1600,687.5],[0,687.5],[0,0]],\"12\":2,\"13\":2,\"14\":0,\"15\":0,\"177\":0,\"176\":\"Wall\"},{\"0\":2,\"1\":-60,\"2\":-23,\"3\":20,\"4\":-88,\"5\":0,\"6\":0,\"7\":70,\"8\":130,\"9\":22,\"10\":22,\"11\":[[-4.5,688.5],[1618.5,686.5],[1604.5,919.5],[-0.5,917.5]],\"12\":4,\"13\":2,\"14\":0.035,\"15\":0,\"177\":1,\"176\":\"Floor\"}]"], function () {
            render(vis_cvs);
            $('#preloader').hide();
            $('#preloader2').hide();
            // Start loading the tiles images
            setTimeout(function () {
                $('.tile-type-label > img').each(function () {
                    this.src = this.dataset.src;
                    delete this.dataset.src;
                })
                if (window.location.hash.lastIndexOf("#design-data:") === 0) {
                    var design_data = JSON.parse(atob(window.location.hash.substring("#design-data:".length)));

                    console.log_(design_data);

                    loadDesign(design_data);
                }
            }, 1000);
        });
    </script>
    <script>
        searchKeyPress = function (key, inp) {
            var text = inp.value;
            console.log_(text);
            $(".tile-item-" + key).each(function () {
                var title = $("label", this).attr("aria-label");
                $(this).css({
                    display: title.toLowerCase().indexOf(text.toLowerCase()) > -1 ? "inline-block" : "none"
                });
            });
        }


        function asc_sort(a, b) {
            var title_a = $("label", a).attr("aria-label");
            var title_b = $("label", b).attr("aria-label");
            return title_a > title_b ? 1 : -1;
        }

        $(function () {

            setInterval(function () {
                $("a", cont_for_vis_cvs).each(function () {
                    var elm = $(this);
                    //if(elm.attr("data-isdragging")=="no")
                    elm.css({
                        left: Number(elm.attr("data-left")) * (vis_cvs.offsetWidth / vis_cvs.width),
                        top: Number(elm.attr("data-top")) * (vis_cvs.offsetHeight / vis_cvs.height)
                    });
                });
            }, 100);

            var dragging_side = null;

            if (option_side_draggable) {
                $("a[data-type=move]", cont_for_vis_cvs).draggable({
                    revert: true,
                    helper: "<div>qua</div>",
                    start: function () {

                        dragging_side = null;

                        $(this).attr("data-isdragging", "yes");
                        $(body).css({
                            "cursor": "move"
                        });
                        $(this).hide();

                        var sk = Number($(this).attr("data-side"));
                        var s = null;
                        for (var i = 0; i < scene_data.length; i++)
                            if (scene_data[i][0] == sk)
                                s = scene_data[i];

                        s[10001] = s[1];
                        s[10002] = s[2];

                        dragging_side = s;
                    },
                    drag: function (e) {
                        $(this).attr("data-isdragging", "no");
                        $(body).css({
                            "cursor": "default"
                        });
                        $(this).show();

                        var deltaX = obj.position.left - obj.originalPosition.left;
                        var deltaY = obj.position.top - obj.originalPosition.top;
                        var s = dragging_side;

                        if (s == null)
                            return;

                        s[1] = s[10001] + deltaX / 33;
                        s[2] = s[10002] - deltaY / 33;

                        if (Date.now() - last_dragdraw_epoch > 50) {
                            render(vis_cvs);
                            last_dragdraw_epoch = Date.now();
                        }
                    },
                    stop: function (e, obj) {
                        render(vis_cvs);
                    }

                    ,
                    revertDuration: 100
                });

                var drag_down_ox = -1;
                var drag_down_oy = -1;
                $("#vis_cvs", cont_for_vis_cvs).draggable({
                    revert: true,
                    helper: "none",
                    start: function (e) {

                        dragging_side = null;

                        dont_click = true;

                        $(body).css({
                            "cursor": "move"
                        });

                        drag_down_ox = e.offsetX;
                        drag_down_oy = e.offsetY;

                        var x = drag_down_ox;
                        var y = drag_down_oy;

                        var w = vis_cvs.width;
                        var h = vis_cvs.height;

                        var ow = vis_cvs.offsetWidth;
                        var oh = vis_cvs.offsetHeight;

                        x *= w / ow;
                        y *= h / oh;

                        x = Math.floor(x);
                        y = Math.floor(y);

                        if (indexer_data != null) {
                            var j = (y * w + x) * 4;
                            var clr = [indexer_data[j++], indexer_data[j++], indexer_data[j]];

                            if (clr[0] == 0 && clr[1] == 0 && clr[2] == 0)
                                return;

                            console.log_(clr);

                            var sk = clr[2];

                            if (sk >= scene_data.length) {
                                var k = Math.floor(128 / scene_data.length);
                                var sk_ = sk;
                                for (var i = 0; i < scene_data.length; i++) {
                                    if (sk <= 255 - k * i)
                                        sk_ = i;
                                    else
                                        break;
                                }
                                sk = sk_;
                            }

                            var s = scene_data[sk];

                            s[10001] = s[1];
                            s[10002] = s[2];

                            dragging_side = s;
                        }

                    },
                    drag: function (e, obj) {

                        var deltaX = obj.position.left - obj.originalPosition.left;
                        var deltaY = obj.position.top - obj.originalPosition.top;
                        var s = dragging_side;

                        if (s == null)
                            return;
                        s[1] = s[10001] + deltaX / 33;
                        s[2] = s[10002] - deltaY / 33;

                        if (Date.now() - last_dragdraw_epoch > 50) {
                            render(vis_cvs);
                            last_dragdraw_epoch = Date.now();
                        }

                    },
                    stop: function (e, obj) {

                        $(body).css({
                            "display": "block",
                            "cursor": "default"
                        });

                        render(vis_cvs);

                    }

                    ,
                    revertDuration: 100
                });

            }

            var last_dragdraw_epoch = 0;

            $(".tiles-list").each(function () {
                $("li", this).sort(asc_sort).appendTo(this);
            });

            showLeftMenu = function (sk) {
                var mp = $("#menuPanel" + sk);
                if (mp.hasClass("active"))
                    classie.toggle(menuLeft, 'cbp-spmenu-open');
                else {
                    classie.remove(menuLeft, 'cbp-spmenu-open');
                    classie.add(menuLeft, 'cbp-spmenu-open');
                }
            }

        });




        function addStuff(tk, obj, x, y, z) {
            if (!(stuffs[tk] instanceof Array))
                stuffs[tk] = [];

            stuffs[tk].push([obj, x, y, z]);
        }

        function loadAndAddStuff(tk, name, x, y, z) {
            var data = null;
            for (var i = 0; i < scene_data.length; i++)
                if (scene_data[i][0] == tk)
                    data = scene_data[i];

            var tn = data[176];

            THREE.Loader.Handlers.add(/\.dds$/i, new THREE.DDSLoader());

            console.log_('/app/visualizer/3DModels/Stuffs/' + tn + '/' + name + '/' + name + '.obj');

            var loader = new THREE.OBJMTLLoader();
            loader.load(

                '/app/visualizer/3DModels/Stuffs/' + tn + '/' + name + '/' + name + '.obj',
                '/app/visualizer/3DModels/Stuffs/' + tn + '/' + name + '/' + name + '.mtl',

                function (object) {

                    addStuff(tk, object, x, y, z);

                });
        }

        /*$(function()
        {
            ray_casting_for=2;
            ray_casting_for_subid=0;
            loadAndAddStuff(ray_casting_for,"Armchair", 0,0,0);
        });*/
    </script>


    <style>
        .preloading_image {
            width: 75px !important;
            height: 75px !important;
            background: url(visualizer/images/loading.gif) no-repeat center !important;
        }
    </style>
</body>

</html>