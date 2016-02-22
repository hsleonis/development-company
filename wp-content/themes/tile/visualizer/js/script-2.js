var actualWdth;
var menuLeft = document.getElementById('cbp-spmenu-s1'),
    showLeft = document.getElementById('showLeft'),
    body     = document.body;
$(window).load(function() {
    $('#preloader').hide();
    $('#preloader2').hide(); 
    // img_click();
    orient();
    sidemenu();
    // btn_click();
    hideAddressbar('#page');
    setRightMenu();

    $('#show_btn').click(function(event) {
        if ($('.show_img').is(":visible")) {
            $('#cbp-spmenu-s1').removeClass('cbp-spmenu-open');
            $(".header_nav_xs").show();
            $(".right_side_btns").show();
            $(".show_img").hide();
            $(".hide_img").show();
            $('.right_toggle_btn').css({
                'left': '0px'
            });
        } else {
            if ($('.hide_img').is(':visible')) {
                $(".header_nav_xs").hide();
                $(".right_side_btns").hide();
                $('.right_toggle_btn').show();
                $(".show_img").show();
                $(".hide_img").hide();
                $('.right_toggle_btn').css('left', '90%');
            }
        }
    });

    $("#showLeft").click(function() {
        classie.toggle(this, 'active');
        classie.toggle(menuLeft, 'cbp-spmenu-open');
        disableOther('showLeft');
    });
});

$(function(){


    $("#mailform").validate({
        rules: {
            full_name: {
                required:true
            },
            to : {
                required:true,
                email : true
            },
            subject: {
                required:true
            },
            message: {
                required:true
            }
        },
        messages:{
            full_name:{
                required:"Please Enter your Full Name"
            },
            to:{
                required:"Please Fill to field"
            },
            subject:{
                required:"Please Fill the subject"
            },
            message:{
                required:"Please  Fill the message"
            }
        },
        submitHandler : function() {
            var from    = $(".from").val();
            var fullname    = $(".full_name").val();
            var to      = $(".to").val();
            var subject = $(".subject").val();
            var message = $(".message").val();
            var imgUrl  = vis_cvs.toDataURL_('image/jpeg');
            var roomname = $.trim($(".rooms-tabs li.active a").text());
            var tiles = {};
            for(var i in tile_datas) {
                if(isFinite(i)) {
                    tiles[i] = tile_datas[i].map(function(tile) {
                        var tileInfo = ['id', 'name', 'price', 'cat_a_title', 'cat_b_title', 'link', 'size'].reduce(function(t, prop) {
                            t[prop] = tile[prop];
                            return t;
                        }, {});
                        tileInfo.image = typeof tile.image === 'string' ? tile.image : tile.image.src;
                        return tileInfo;
                    });
                }
            }
            //var withinfo = $(".withinfo").is(":checked");
        
            /*if(withinfo)
            {
                patternwithInfo("email");
            }*/
            /*else{*/
                $("#sendMail").attr("disabled","disabled").val("sending...");
                $.ajax({
                    url: send_mail_addr,
                    type: "POST",
                    data : {"full_name":fullname,"from": from, "to" : to, "subject" : subject , "message" : message, "roomname" : roomname, tiles: JSON.stringify(tiles), "imgpath" : imgUrl},
                    success : function(data){
                        console.log("Email is sent");
                        alert("Email is sent.");
                        $("#mailform")[0].reset();
                        $("#modal_mail").modal('hide');
                        $("#sendMail").removeAttr("disabled").val("Send");
                    }
                });
            //}
        }
    });

    $(".ic-download").click(function(e){
        e.preventDefault();
        $(this).prev(".download_opt").slideToggle();
    });

    (function() {
        var imageUrl;

        $(".share-link").click(function(e) {
            var url;

            e.preventDefault();
            switch($(this).data("service")) {
            case "facebook":
                url = "https://www.facebook.com/sharer/sharer.php?u=";
                break;

            case "twitter":
                url = "https://twitter.com/intent/tweet?url=";
                break;

            case "google":
                url = "https://plus.google.com/share?url=";
                break;
            }

            window.open(url + imageUrl, "sharer", "width=626,height=436");
        });

        $(".share-toggle").click(function(e) {
            e.preventDefault();

            $('#preloader2').show();

            $.post(send_mail_addr, {share: true, imgpath: vis_cvs.toDataURL_('image/jpeg'), roomname: $(".resp-tab-active").text()}, function(response) {
                $('#preloader2').hide();
                $('#modal_share').modal('show');
                if(response.error) {
                    alert('An error occured while saving the image.');
                    return;
                }
                imageUrl = response.url;
            }, 'json');
        });
    }());

    $(".download_opt li").click(function(e){
        e.preventDefault();

        /*if(roomthumb === ''){
            alert("Please select Room First");
            return false;
        }*/

        if($(this).hasClass("without")){
            if($(".view").attr("src").indexOf(hostname) != -1)
            {
                var imgSrc = $(".view").attr("src").split(hostname)[1];
            }
            else{
                var imgSrc = $(".view").attr("src");
            }

            $(".download").attr("href",imgSrc);
            $(".download img").trigger("click");
        }

        /*if($(this).hasClass("with")){
            patternwithInfo("withproduct");
        }*/
        $(".download_opt").slideUp();
    });

    setImageContainer();

    /* Up & Down Setting Panel */
    $(".downarrow").click(function(){
        
        $(this).hide();
        $(".popup").hide();

        $(".wrapper").slideDown("slow",function(){
            $(".uparrow").slideDown();
        });

    });

    $(".uparrow").click(function(){
        $(".wrapper").slideUp("slow",function(){
            $(".downarrow").slideDown();
        });

    });


    $('.enter-full-screen').click(function(e) {
        e.preventDefault();
        elem = document.querySelector('.canvas-wrap');
        if (elem.requestFullscreen) {
          elem.requestFullscreen();
        } else if (elem.msRequestFullscreen) {
          elem.msRequestFullscreen();
        } else if (elem.mozRequestFullScreen) {
          elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
          elem.webkitRequestFullscreen();
        }
    });

    /* clear individual section filter */
    $(".discount-section a").click(function(e){
        e.preventDefault();
        $(this).closest(".discount-section").next(".discount-row").find("input[type='checkbox']").prop("checked",false);
    });

    $(".btn").click(function(){
        $(this).toggleClass("active");
    });

   
    $(document).on('click', '.colorblock', function (e) {  
        $(this).toggleClass("active");
    });

    // | Print Functioanlity
    $('.print-btn').on('click', function (e) {  
        e.preventDefault();
        var pwidth = vis_cvs.width;
        var pheight = vis_cvs.height;
        var content = '<body style="margin:0;"><img src="' + vis_cvs.toDataURL_() + '" style="position:absolute;left:0;top:0;"><img src="' + line_cvs.toDataURL() + '" style="position:absolute;left:0;top:0;"></body>';
        var WinPrint = window.open('', '', 'width='+pwidth+',height='+pheight+',toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write(content);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    });


    

    $(window).resize(function(){
        setImageContainer();
    });


    $(".fb").click(function(){
        var cvs=document.createElement("canvas");
        cvs.width=vis_cvs.width;
        cvs.height=vis_cvs.height;
        cvs.getContext("2d").drawImage(vis_cvs,0,0,cvs.width,cvs.height);

        var imageData=cvs.toDataURL('image/png');

        /*try {
            blob = dataURItoBlob(imageData);
        } catch (e) {
            console.log(e);
        }*/

        shareOnFB(imageData);
    });

    // Convert a data URI to blob
    function dataURItoBlob(dataURI) {
        var byteString = atob(dataURI.split(',')[1]);
        var ab = new ArrayBuffer(byteString.length);
        var ia = new Uint8Array(ab);
        for (var i = 0; i < byteString.length; i++) {
            ia[i] = byteString.charCodeAt(i);
        }
        return new Blob([ab], {
            type: 'image/png'
        });
    }

    $(".btnClose").click(function(){
        $(".mpopup").fadeOut();
        $(".user-action ul li").removeClass("active");
    });
    


    $(".layout-type-input").on("change", function(e) {
        var layout = this.value,
            checked = $('#menuPanel' + this.dataset.room).find(".tile-type-input").filter(":checked").first();

        var tile_id=Number(this.getAttribute("data-tile-id"));
        
        free_tiles[tile_id]=[];

        $('#menuPanel' + this.dataset.room)
            .find(".tile-type-input").each(function() {
                this.type = layout === "checkered" ? "checkbox" : "radio";
                // var thisCheckbox = this;

                // if(layout === "checkered") {
                //     this.type = "checkbox";
                //     if(this.checked) {
                //         $(this).closest(".tiles-list").find(".tile-type-input").not(this).each(function() {
                //             $(this).closest('.tile-wrap').toggleClass('no-match', this.dataset.tileWidth !== thisCheckbox.dataset.tileWidth || this.dataset.tileHeight !== thisCheckbox.dataset.tileHeight);
                //         });
                //     }
                // } else {
                //     this.type = "radio";
                //     $(this).closest(".tiles-list").find(".tile-type-input").not(this).prop("checked", false);
                // }
            });
            $('#menuPanel' + this.dataset.room).find(".tile-type-input").filter(":checked").prop("checked", false);
        dont_hide_leftmenu_on_tile_click_for_one_time=true;    
        checked.click();
    });

    $(".tile-type-input").on("change", function(e) {
        if(!dont_hide_leftmenu_on_tile_click_for_one_time)
            classie.remove(menuLeft, 'cbp-spmenu-open');
        else
            console.log_("asd");
        dont_hide_leftmenu_on_tile_click_for_one_time=false;
        
        var $allCheckboxes = $(this).closest(".tiles-list").find(".tile-type-input"),
            $checkedCheckboxes = $allCheckboxes.filter(":checked"),
            thisCheckbox = this,
            tiles = [this.value];

        if(!this.checked) {
            this.checked = true;
            return false;
        }

        if(this.type === "radio") {
            $allCheckboxes.closest('.tile-wrap').removeClass('no-match');
        } else {
            if($(this).closest('.tile-wrap').hasClass('no-match')) {
                $checkedCheckboxes.not(this).prop('checked', false);
            }
            if($checkedCheckboxes.length === 2 && !$(this).closest('.tile-wrap').hasClass('no-match')) {
                tiles.push($checkedCheckboxes.not(this).val());
            } else {
                if($checkedCheckboxes.length > 2) $checkedCheckboxes.not(this).attr("checked", false);
                $allCheckboxes.each(function() {
                    $(this).closest('.tile-wrap').toggleClass('no-match', this.dataset.tileWidth !== thisCheckbox.dataset.tileWidth || this.dataset.tileHeight !== thisCheckbox.dataset.tileHeight);
                });
            }
        }
        console.log_(tiles);
        tiles = tiles.map(function(id) {
            id=Number(id);
            console.log_("#"+id);
            return avail_tiles[id];
        });
        console.log_(tiles);
        
        selectTile(tiles);
    });

    $('.rotate-degree').change(function() {
        render(vis_cvs);
    });

    $('.close-popup-btn').click(function() {
        $(this).closest('.popup').fadeOut();
    });
    
    function rgbToHex(r, g, b) {
        return "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1);
    }

    $(".save-design").click(function() {
        
        if(this.dataset.as=="link")
        {
            var _layouts={};
            var _click_tiles={};
            var _indexeds=indexeds;
            
            var link_data={tiles:{},indexeds:_indexeds};
            
            for(var tk in tile_datas)
            {
                if(tk[0]=="_")
                    continue;
                
                _layouts[tk]=$('.layout-type-input[data-tile-id=' + tk + ']:checked').val() || "grid";
                
                var _grout_color_id=eval($('.grout-type-input[name="tile_grout_'+tk+'"]:checked').attr("id").substring("tile_grout_x_".length));
                
                _click_tiles[tk]=[];
                if(free_tiles[tk] && free_tiles[tk].length>0)
                    for(var i=0;i<free_tiles[tk].length;i++)
                    {
                        _click_tiles[tk].push(free_tiles[tk][i].id);
                    }
                else
                    for(var i=0;i<tile_datas[tk].length;i++)
                    {
                        _click_tiles[tk].push(tile_datas[tk][i].id);
                    }
                
                link_data.tiles[tk]=[_grout_color_id,_layouts[tk],_click_tiles[tk]];
            }
            
            /*var link_data=
            [
                _click_tiles,
                _layouts,
                _indexeds
            ];*/
            
            link_data=JSON.stringify(link_data);
            
            console.log_(link_data);
            
            var based64=btoa(link_data);
            
            var link=window.location.href.split("#")[0]+"#design-data:"+based64;
            
            $('button[data-dismiss="modal"]').click();
            $( "<div title='Design has been saved'><style>.no-close .ui-dialog-titlebar-close {display: none }</style>Copy & Save <a style='text-decoration:underline;' href='"+link+"' target='_blank'>this link</a>.</div>" ).appendTo(document.body).dialog({
                modal: true,
                dialogClass: 'no-close',
                buttons: {
                  Close: function() {
                    $( this ).dialog( "close" ).remove();
                  }
                }
              });
            
        }
        else
        {
            var infoHtml = '',
                dt = vis_cvs.toDataURL_('image/jpeg');
                l = document.createElement("a");

            switch(this.dataset.as) {
            case "image":
                l.download="Design.jpg";
                break;

            case "info-pdf":
            case "info":
                $('#modal_info .tabs-content-wrapper').each(function(index, content) {
                    var title = $('#modal_info [role=tab]').eq(index).text();
                    content = $(content).clone();
                    content.find('img').each(function() {
                        var cvs = document.createElement('canvas');
                        cvs.width = 100;
                        cvs.height = this.height / this.width * 100;
                        cvs.getContext('2d').drawImage(this, 0, 0, cvs.width, cvs.height);
                        this.src = cvs.toDataURL('image/png');
                    });
                    infoHtml += '<section><h2>' + title + '</h2><div class="info-content">' + content.html() + '</div></section>';
                });

                var htdata=['<!DOCTYPE html><html><head><title>' + $.trim($(".resp-tab-active").text()) + ' Design</title></head>',
                    '<style>' +
                    '*,::after,::before{-moz-box-sizing:border-box;box-sizing:border-box}body{font-family:Helvetica neue,Helvetica,Arial,sans-serif}.room-image{border:4px solid #0f73ae}section{margin-top:2em}h2{background-color:#0f73ae;color:#fff;padding:15px;margin:0;border-top-left-radius:15px;border-top-right-radius:15px}.info-content{padding:1em;border-bottom-left-radius:15px;border-bottom-right-radius:15px;border:2px solid #0f73ae}.row::after,.row::before{display:table;content:" "}.row::after{clear:both}.product_wrapper{margin:15px 15px 0}.col-xs-3{float:left;width:25%;padding-right:15px;padding-left:15px}.img-responsive{display:block;max-width:100%;height:auto;vertical-align:middle}.col-xs-9{float:left;width:75%;padding-right:15px;padding-left:15px}.selected_product_name{color:#bc211e;font-weight:700;padding-bottom:5px;text-transform:uppercase}p{margin:0}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}' +
                    '</style>',
                    '<body style="background-color:white;"><img class="room-image" src="' + dt + '" style="max-width: 100%;"><div id="infoTab">' + infoHtml + '</div><span style="display:none;">%addonjs%</span></body></html>'
                ].join("");

                if(this.dataset.as=="info-pdf")
                {
                    var addonjs="<script src='"+script_html2canvas.src+"'></script><script>parent.saveAsPdf(document.body)</script>";
                    var dtmp = new Blob([htdata.split("%addonjs%").join(addonjs)], {type: 'text/html'});
                    dtmp = URL.createObjectURL(dtmp);
                    var iframe = $('<iframe class="temporary" width="1920" height="1080"></iframe>');
                    iframe.attr("src",dtmp);
                    iframe.appendTo(document.body);

                    return;

                }
                else
                {
                    dt = new Blob([htdata], {type: 'text/html'});
                    dt = URL.createObjectURL(dt);
                    l.download="Design.html";
                }

                break;
            }

            l.href=dt;
            l.style.display='none';
            document.body.appendChild(l);
            l.click();
            document.body.removeChild(l);
        
        }
        
    });
    
    setClickTimeout=function(es,to)
    {
        setTimeout(function(){$(es).click()},to);
    }
    
    loadDesign=function(dd)
    {
        var old_blend_mode=blend_mode;
        blend_mode=-1;
        
        var to=100;
        var tos=100;
        
        var tiles=dd.tiles;
        
        for(var tk in tiles)
        {
            var t=tiles[tk];
            setClickTimeout("#tile_grout_"+tk+"_"+t[0], to+=tos);
            setClickTimeout("#layout-"+t[1]+"-"+tk, to+=tos);
            
            var ts=t[2];
            for(var i=0;i<ts.length;i++)
            {
                setClickTimeout("#tile_radio_"+ts[i], to+=tos);
            }
        }
        
        indexeds=dd.indexeds;
        
        
        setTimeout(function()
        {
            blend_mode=old_blend_mode;

            render(vis_cvs);
        }, to+=tos);
    }
    
    saveAsPdf=function(dom)
    {
        
        var printDoc = new jsPDF();
        
        
        printDoc.addHTML(dom,function() {
                printDoc.save("Design.pdf");
                
                $(".temporary").remove();
        });
        
    }

    vis_cvs.toDataURL_=function(t) {
        var c = document.createElement("canvas");
        c.width=vis_cvs.width;
        c.height=vis_cvs.height;
        c.getContext("2d").fillStyle="white";
        c.getContext("2d").fillRect(0,0, c.width, c.height);
        c.getContext("2d").drawImage(vis_cvs,0,0,c.width,c.height);
        return c.toDataURL(t);
    };

    $('.filter-category-a').change(function(e) {
        fillCatSelB(+this.dataset.id);
    });

    $('.filter-category-b').change(function(e) {
        fillCatSelSize(+this.dataset.id);
    });

    $('.filter-size').change(function(e) {
        setTileFilter(+this.dataset.id, {q: this.value, catB: $('#filter-category-b-' + this.dataset.id).val()});
    });

    $('.room-link').click(function() {
    	$('#preloader2').show();
    });
});

$(window).load(function() {
    $('.filter_thumbs').slimScroll({
        width: '100%',
		height: '370px'
    });
    $('.room_thumb_wrap').slimScroll({
        width: '100%',
        height: '270px'
    });
    $('.tabs-content-wrapper').slimScroll({
        width: '100%',
        height: '350px'
    });
    var homeContainer = document.querySelector('#home');
    var msnry = new Masonry(homeContainer, {
        columnWidth: 1,
        itemSelector: '.item'
    });

});
// $('.custom_nav_tabs li a').click(function(event) {
//   if(this.id == "second"){
//      var container = document.querySelector('#profile');
//     var msnry = new Masonry( container, {
//       // options
//       columnWidth: 1,
//       itemSelector: '.item'
//     });
//   }
// });

$('a[data-toggle=tab]').on('shown.bs.tab', function(e) {
    $(window).trigger("resize");
});
$(window).resize(function() {
    orient();
    setRightMenu();
    sidemenu();
    $this = $('#home');
    $this.masonry({
        columnWidth: 1,
        gutter: 0,
        itemSelector: '.item'
    });
    $this = $('#profile');
    $this.masonry({
        columnWidth: 1,
        gutter: 0,
        itemSelector: '.item'
    });
    $this = $('#settings');
    $this.masonry({
        columnWidth: 1,
        gutter: 0,
        itemSelector: '.item'
    });
    $this = $('#messages');
    $this.masonry({
        columnWidth: 1,
        gutter: 0,
        itemSelector: '.item'
    });
    
    // $('.filter_thumbs').slimScroll({
    //     width: '100%'
    // });
    // $('.room_thumb_wrap').slimScroll({
    //     width: '100%'
    // });
});


function fillCatSelB(key) {
    var a=document.getElementById("filter-category-a-"+key);
    var b=document.getElementById("filter-category-b-"+key);

    var cat=cats[key];

    var val=Number(a.value);
    if(val === -1) $('.tile-item-' + key).show();

    b.innerHTML="";
    var bs=cat[val];
    var sel="selected";
    var fv=null;


    var e=document.createElement("option");
    e.value=-1;
    e.innerHTML="-All-";
    e.setAttribute("selected","selected");
    b.add(e);


    for(var i in bs)
    {
        var e=document.createElement("option");
        e.value=i;
        if(fv==null)fv=e.value;
        e.innerHTML=tits["b"+i];
        //e.setAttribute("selected",sel);
        b.add(e);
        sel="no";
    }
    b.value=-1;
    /*$(b).selectmenu();
    $(b).selectmenu("refresh");*/
    // b.onchange();

    fillCatSelSize(key);
}

function fillCatSelSize(key) {
    var a=document.getElementById("filter-category-a-"+key);
    var b=document.getElementById("filter-category-b-"+key);
    var s=document.getElementById("filter-size-"+key);

    var cat=cats[key];

    var val=Number(b.value);
    if(val==-1 && Number(a.value)!=-1)
        setTileFilter(key, {catA: a.value});

    s.innerHTML="";

    var e=document.createElement("option");
    e.value=-1;
    e.innerHTML="-All-";
    e.setAttribute("selected","selected");
    s.add(e);


    if(val!=-1){var ss=cat[Number(a.value)][Number(b.value)];
    var sel="selected";
    var fv=null;
    for(var i in ss)
    {
        e=document.createElement("option");
        e.value=ss[i];
        if(fv==null)fv=e.value;
        e.innerHTML=i;
        e.setAttribute("selected",sel);
        s.add(e);
        sel="no";
    }}
    s.value=-1;
    /*$(s).selectmenu();
    $(s).selectmenu("refresh");*/
    // if(val!=-1)s.onchange();
    if(val!=-1) setTileFilter(key, {catB: val});
}

function setTileFilter(key, filters) {
    $(".tile-item-" + key).each(function() {
        var el = this;
        $(this).toggle(Object.keys(filters).every(function(prop) {
            return +el.dataset[prop] === +filters[prop];
        }));
    });
}    



// ======
// SHAPES
// ======
var tile_datas = {};
var shape_datas = [];var shapes = [];
var activeShape;

var w_ratio = 1;
var h_ratio = 1;
var eph = 11;
var pointer_img = 'visualizer/pointer.png';

/*addArea.onclick = function(e){
    var newShape = [];
    editPoints(newShape);
};*/

line_cvs.width = 1600;
line_cvs.height = 900;

/*apply.onclick = function(e){
    shapes = list;
    selectShape(10);
};*/

clearMask = function(){
    activeShape = null;
    /*var ctx=line_cvs.getContext("2d");
    ctx.clearRect ( 0 , 0 , line_cvs.width, line_cvs.height );
    $(".pointer-drag").remove();*/
    cancel();
};

editPoints=function(shape) {
    var list =[];
    var lest =[];
    
    $("body").bind("keyup",function(e){
        if(e.which==27) {
            if(confirm("Are you sure to cancel ?"))
                cancel();
        }
        else if(e.which==13) {
            if(confirm("Are you sure to save changes?"))
                save();
        }
    });

    cancel = function(){
        list =[];
        lest =[];
        activeShape = null;
        $(".pointer-drag").remove();
        $("body").unbind("keyup");
        $("#mask").unbind("click");
        draw();
    }


    draw=function()    {
        var ctx=line_cvs.getContext("2d");
        ctx.clearRect ( 0 , 0 , line_cvs.width, line_cvs.height );

        ctx.fillStyle="rgba(255,255,255,0.75)";
        ctx.strokeStyle="black";
        ctx.beginPath();
        for(var i=0;i<list.length;i++){
            ctx.lineTo(list[i][0] / w_ratio ,list[i][1] / h_ratio);
        }
        ctx.closePath();
        ctx.fill();
        ctx.stroke();
    }
    
    $("#mask").bind("click",function(e){
        var parentOffset = $(this).parent().offset(); 
        var x = e.pageX - parentOffset.left;
        var y = e.pageY - parentOffset.top;
        add(x,y);
        draw();
    });
 
   
    mask.oncontextmenu=function(){
        rem();
        draw();
        return false;
    }
    
    
    var rem=function()
    {
        list.pop();
        lest.pop().remove();
    }
    
    var add=function(x,y)
    {
        var e=$( "<div class='pointer-drag' style='cursor:cross-hair;width:"+eph+"px;height:"+eph+"px;background-image:url("+pointer_img+");background-size:cover;'></div>" );
    
        e.attr("data-ind",list.length);

        list.push([x,y]);
        lest.push(e);

        var f=function(event)  {   
            var parentOffset = $(this).parent().offset(); 
            var xPos = event.pageX - parentOffset.left;
            var yPos = event.pageY - parentOffset.top;
            var ind=Number($(this).attr("data-ind"));

            list[ind]=[xPos,yPos];
            draw();
        };
        
        e.appendTo($("#mask")).css({'top': y- Math.floor(eph/2), 'left' : x-Math.floor(eph/2), 'position':'absolute'}).draggable().bind("drag",f);
        
        
        draw();
    }
    
    var save= function(){
        activeShape = list;
        $(".downarrow").click();
    }
    return false;
}

var shape_datas;

var cvs_w=screen.width;
var cvs_h=screen.height;


function cloneObj(obj){ 
    return JSON.parse(JSON.stringify(obj));
}

function selectShape(id) {
    var avai = cloneObj(avail_tiles);
    var d = avai[id];
    setShape(d.tile_type,d,function(data1){
        data1.shape = cloneObj(activeShape);
        shapes.push(data1);
        render(vis_cvs);
        clearMask();
    });

    updateInfo([d], true);
}



function setShape(tid, data, ondone) { 
        data.image=lmage(typeof data.image=="string"?data.image:data.image.src,
        function() {
            ondone(data);
        }
    );
}

// =======
// /SHAPES
// =======


function selectTile(tiles) {
    if(activeShape != null){
        selectShape(tiles[0].id);
    } else {
        setTile(tiles[0].tile_type,tiles,function(tid,tile_data)
        {
            var layoutType = $('.layout-type-input[data-tile-id=' + tid + ']:checked').val() || "grid";
            
            if(layoutType=="dragdrop")
            {
                var td=tile_data[0];
                var i=free_tiles[tid].indexOf(td);
                if(i==-1)
                    free_tiles[tid].push(td);
                free_tiles_cur[tid]=td;
            }
            
            render(vis_cvs);
        });
        // d = tiles[0];

        // $('input[name="tile_grout_'+d.tile_type+'"]').prop('checked', false);//.checkboxradio( "refresh" );;
        // $('#tile_grout_'+d.tile_type+'_'+d.grout_id).prop('checked', true);//.checkboxradio( "refresh" );;

        updateInfo(tiles);
    }
}


function selectGrout(key,id,dont_render) {
    if(!tile_datas[key]) return;
    tile_datas[key].forEach(function(tile) {
        tile.grout_color=id==-1?"rgba(0,0,0,0)":colors[id];
        
    });
    if(free_tiles && free_tiles[key])
        free_tiles[key].forEach(function(tile) {
            if(tile)
                tile.grout_color=colors[id];
        });
    if(!dont_render)
        render(vis_cvs);
}


function updateInfo(tiles, isShape) {
    var t, html = '';
    
    var tls=[];
    
    tiles.map(function(tile){tls.push(tile);});
    
    var type=tiles[0].tile_type;
    
    var fts=free_tiles[type];
    if(fts instanceof Array)
    {
        fts.map(function(tile)
        {
            if(tls.indexOf(tile)==-1)
                tls.push(tile);
        });
    }
    
    console.log_(tls[0]);
    
    for(var i = 0; i < tls.length; i++) {
        t = tls[i];
        html += '<div class="row product_wrapper">' +
                    '<div class="col-xs-3">' +
                        '<img src="' + (typeof t.image == "string" ? t.image : t.image.src) + '" class="img-responsive">' +
                    '</div>' +
                    '<div class="col-xs-9">' +
                        '<p class="selected_product_name">' + t.name + '</p>' +
                        '<!--p class="product_style">' +
                            '<label>Upper Category: </label> ' + t.cat_a_title + '</p>' +
                        '<p class="product_style">' +
                            '<label>Sub Category: </label> ' + t.cat_b_title + '</p-->' +
                        '<p class="product_type">' +
                            '<label>Size: </label> ' + (t.size[0]+"x"+t.size[1]) + 'mm'+'</p>' +
                        drawFilters(t.filters)+
                        '<p class="product_type">' +
                            '<label>Price: </label> ' + '$' + t.price + '</p>' +
                        '<p class="product_type">' +
                            '<a target="_blank" href="' + t.link + '">Product page</a></p>' +
                    '</div>' +
                '</div>';
    }

    $("#tile_info_list_" + (isShape ? 'shapes_' : '') +type).html(html);
}

function drawFilters(fd)
{
    if(fd instanceof Object)
    {
        var ret="";
        for(var fid in fd)
        {
            var d=fd[fid];
            var fn=$("label[for='filter-"+fid+"']").html();
            if(fn.length>0)
                ret+='<p class="product_type">' +
                            '<label>'+fn+': </label> ' + d + '</p>';
        }
        return ret;
    }
    return "";
}


// getATitle=function(i){return tits["a"+i];}
// getBTitle=function(i){return tits["b"+i];}








function disableOther(button) {
    if (button !== 'showLeft') {
        classie.toggle(showLeft, 'disabled');
    }
}
// set the right side buttons
function setRightMenu() {
    var winWdth = $(window).width();
    if (winWdth < 768) {
        $(".right_side_btns").css({
            width: '90%',
            right: '0px'
        });
        $(".right_side_btns").hide();
        $(".header_nav_xs").hide();
        $(".right_toggle_btn").show();
        $("#show_btn").show();
        $(".show_img").show();
        $(".hide_img").hide();
        $('.right_toggle_btn').css('left', '90%');
    }
    else{
        $(".right_toggle_btn").hide();
        $("#show_btn").hide();
        $(".right_side_btns").css({
            width: '50px'
        });
        $(".right_side_btns").show();
        $(".header_nav_xs").hide();
                
    }
}


function sidemenu()
{
    window_width=$(window).width();
    window_height=$(window).height();
    cust_position = window_height / 2 ;
    if( window_width > 767 )
    {
    $(".right_side_btns").css("top",cust_position+"px");    
    }


}

function btn_click()
{
    $(".pre_btn").on("click",function(){

           $('#preloader2').show().delay(1000).fadeOut();

    });
}
function img_click()
{
    
    $(".tab_click img").on("click",function(){

           $('#preloader2').show().delay(1000).fadeOut();          
    });
}
function orient()
{
    
    if (window.matchMedia("(orientation: portrait)").matches) 
    {
        if( ($(window).width()) < 479)
        {
            $('#preloader').show();
        }
    }
    else
    {
        $('#preloader').hide(); 
    }
    // if (window.matchMedia("(orientation: landscape)").matches) 
    // {
    // $('#preloader').hide();
    // }
}
function confirm_Refresh()
{

        setTimeout("location.reload();",1000);
    
}