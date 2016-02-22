var isFullScreen = 0;

/* Full Screen */

$(document).ready(function(){
	$(".btnFullScr").click(function(e){
		e.preventDefault();
		requestFullScreen(document.body);
		$(this).hide();
		$(".btnExitFullScr").show();
	});

	// Exit From Full screen Mode
	$(".btnExitFullScr").click(function(e){
		e.preventDefault();
		exitFullScreen();
		$(this).hide();
		$(".btnFullScr").show();
	});
	
});

document.addEventListener("mozfullscreenchange", function () {
	if(!document.mozFullScreen)
	{
		if(isFullScreen == 1)
		{
			isFullScreen = 0;
			$(".btnExitFullScr").hide();
			$(".btnFullScr").show();
		}
	}
}, false); 

document.addEventListener("webkitfullscreenchange", function () {
	if(!document.webkitIsFullScreen)
	{
		if(isFullScreen == 1)
		{
			isFullScreen = 0;
			$(".btnExitFullScr").hide();
			$(".btnFullScr").show();
		}
	}
}, false); 


function requestFullScreen(element) {
	
	isFullScreen = 1;
	
    // Supports most browsers and their versions.
    var requestMethod = element.requestFullScreen || element.webkitRequestFullScreen || element.mozRequestFullScreen || element.msRequestFullScreen;

    if (requestMethod) { // Native full screen.
        requestMethod.call(element);
    } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
        var wscript = new ActiveXObject("WScript.Shell");
        if (wscript !== null) {
            wscript.SendKeys("{F11}");
        }
    }   
}

function exitFullScreen(){
	if(isFullScreen == 1)
	{
		isFullScreen = 0;
	
		if (document.cancelFullScreen) {
	        document.cancelFullScreen();
	    } else if (document.mozCancelFullScreen) {
	        document.mozCancelFullScreen();
	    } else if (document.webkitCancelFullScreen) {
	        document.webkitCancelFullScreen();
	    }  
	}
}
	