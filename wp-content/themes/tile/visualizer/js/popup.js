$(document).ready(function(){

    // Load new popup
    $("a.popupBtn").click(function(e){
    	e.preventDefault();
    	var popupid = $(this).data("popup");

        if($("#"+ popupid).is(":visible")){
            return;
        }

    	$(".popup").fadeOut();
    	$("#"+ popupid).fadeIn();
    	$(".wrapper").slideUp("slow",function(){
			$(".downarrow").slideDown();
		});

    });

	$(".close").click(function(){
		$(this).closest(".popup").fadeOut();
	});

});