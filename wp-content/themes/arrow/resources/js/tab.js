jQuery(document).ready(function ($) {
    'use strict';

    function setUpOptionsTabs() {
        var $container = $('#normal-sortables');

        $container.prepend('<ul id="tab-nav"></ul>');

        // create the tabs from title fields
        /*$('#normal-sortables h2.hndle').each(function(i, item){
            var ret = '<li><a class="nav-tab" href="#tab-'+(i+1)+'">'+ $(this).text() +'</a></li>';
            $('#tab-nav').append(ret);
        });*/
        var ret = '<li><a class="nav-tab" href="#_themeaxe_group_extra">Additional Info</a></li>';
        ret += '<li><a class="nav-tab" href="#_themeaxe_group_gallery">Gallery</a></li>';
        ret += '<li><a class="nav-tab" href="#_themeaxe_group_floor">Floor Plan</a></li>';
        ret += '<li><a class="nav-tab" href="#_themeaxe_projects_meta">Settings</a></li>';
        $('#tab-nav').append(ret);

        $container.tabs();
    }

    setUpOptionsTabs();
});