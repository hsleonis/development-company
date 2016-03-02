jQuery(document).ready(function ($) {
    'use strict';

    function setUpOptionsTabs() {
        var $container = $('#normal-sortables');

        $container.prepend('<ul id="tab-nav"></ul>');
        var ret = '';

        $('#normal-sortables > .postbox').each(function(i, item){
            if(item.id!=='slugdiv')
            ret += '<li><a class="nav-tab" href="#'+item.id+'">'+$('#'+item.id+' h2.hndle').text()+'</a></li>';
        });
        $('#tab-nav').append(ret);

        $container.tabs();
    }

    setUpOptionsTabs();
});