// JavaScript Document
$.fn.preloader = function(options){
	
	var defaults = {
		             delay:1000,
					 preload_parent:"a",
					 check_timer:300,
					 ondone:function(){ },
					 oneachload:function(image){  },
					 fadein:500 
					};
	
	// variables declaration and precaching images and parent container
	 var options = $.extend(defaults, options),
	 root = $(this) , images = root.find("img").addClass("preloading_image") ,  timer ,  counter = 0, i=0 , checkFlag = [] , delaySum = options.delay;
         
	 var init = function(){
		
		timer = setInterval(function(){
			if(counter>=checkFlag.length)
			{
			clearInterval(timer);
			options.ondone();
			return;
			}
		
			for(i=0;i<images.length;i++)
			{
				if(images[i].complete==true)
				{
					if(checkFlag[i]==false)
					{
						checkFlag[i] = true;
						options.oneachload(images[i]);
						counter++;
						
						delaySum = delaySum + options.delay;
					}
					
					$(images[i]).removeClass("preloading_image");
					
					
					
				 
				}
			}
		
			},options.check_timer) 
		 
		 
		 } ;
	
	images.each(function(){
		
		checkFlag[i++] = false;
		
		
		}); 
	images = $.makeArray(images); 
        
        setTimeout(init,options.delay);
	
	}
	
	