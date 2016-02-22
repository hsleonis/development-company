var timer = 0;


// check tiles related to selected colors
function colorFilter(p_class,selColorArr){
	$("."+ p_class +" .pattern-section").find("a").each(function(){
		var tileColors = $(this).attr("data-colors").split(",");
		//var isSubset = selColorArr.every(function(val) { return tileColors.indexOf(val) >= 0; });

		var isIntersect = selColorArr.filter(function(el) {
			return tileColors.indexOf(el) != -1
		});
		
		if(isIntersect.length > 0){
			$(this).show();
		}else{
			$(this).hide();
		}
	
	});
}

function setImageContainer(){

	$("#wrapper").height($(window).height());

	var wW = $(window).width();
	var hH = (wW*9)/16;
	var ml = -wW/2;

	$(".view").css({
		height : hH + "px",
		width  : wW + "px"
	});
}

//| Remove specified value from Array
//| Take 2 arguments > ( array , specified value)
function removeA(arr) {
	var what, a = arguments, L = a.length, ax;
	while (L > 1 && arr.length) {
		what = a[--L];
		while ((ax= arr.indexOf(what)) !== -1) {
			arr.splice(ax, 1);
		}
	}
	return arr;
}

//| Hide selection on change layout mode
//| E.g : if user select from 4 tiles layout to 2 tiles layout then 
//| we need to hide 3 & 4 tiles selection
function hideSelectionbylayout(p_old_layout,p_new_layout,p_class){
	if(p_old_layout == p_new_layout){
		return;
	}
	if(p_old_layout > p_new_layout)
	{
		for(var i=p_new_layout+1; i <= p_old_layout; i++){
			$targetA = $("."+p_class).find(".layer").find("div:contains('"+i+"')").closest("a");	

			if($targetA && $targetA.length > 0)
			{
				if(typeof($targetA.attr("data-hide-layout")) == "undefined" || $targetA.attr("data-hide-layout") == ""){
					$targetA.attr("data-hide-layout",i);
				}else{
					var addE = $targetA.attr("data-hide-layout");
					$targetA.attr("data-hide-layout",addE+","+i);
				}

				var dataArr = $targetA.attr("data-layout").split(",");
				data = removeA(dataArr,String(i));
				$targetA.attr("data-layout",$.trim(data.join(",")));
			}
			$("."+p_class).find(".layer").find("div:contains('"+i+"')").remove();
			$targetA.find(".layer").attr("class","layer layer"+$targetA.find(".layer").find("div").length);
		}
	}
	else{		
		$("."+p_class).find(".pattern-section").find("a").each(function(){
			$hiddenData = $(this).attr("data-hide-layout");
			if(typeof($hiddenData) != "undefined")
			{
				
				var hArr = $.trim($hiddenData).split(",");
				for(var j = hArr.length-1;j >= 0 ;j--){
				
					if((Number(hArr[j]) > Number(p_old_layout)) && (Number(hArr[j]) <= Number(p_new_layout)) )
					{

						$(this).find(".layer").append("<div>"+hArr[j]+"</div>");
						if(typeof($(this).attr("data-layout")) == "undefined" || $(this).attr("data-layout") == ""){
							$(this).attr("data-layout",hArr[j]);
						}else{
							var addE = $(this).attr("data-layout");
							$(this).attr("data-layout",addE+","+hArr[j]);
						}
						hArr = removeA(hArr,String(hArr[j]));
					}
				}
				$(this).find(".layer").attr("class","layer layer"+$(this).find(".layer").find("div").length);
				$(this).attr("data-hide-layout",hArr.join(","));
				
			}
		});
	}
}

function shareOnFB(u){

	 t = $(".resp-tab-active").text();
	
	 window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');
	 return false;
}
