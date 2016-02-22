scene_room_img=null;
scene_shadow_img=null;
scene_data=null;
scene_id=-1;
scene_data_path=null;
setScene=function(room,ondone)
{
		console.log(room);
        scene_data=room[2];
        console.log(scene_data);
        if(typeof scene_data!="string")scene_data="[]";
        try{scene_data=JSON.parse(scene_data);}
        catch(e)
        {
            scene_data=[];
        }
        if(typeof devpan_add_tile_area=="function")
            for(var i in scene_data)
            {
                devpan_add_tile_area(scene_data[i]);
            }
	scene_room_img=lmage(room[0],
		function()
		{
			scene_shadow_img=lmage(room[1],
				function()
				{
                                        ondone();
				}
			);
		}
	);
}


renderRoom=function(cvs)
{
	console.log('room');
	var ctx=cvs.getContext("2d");
	ctx.globalCompositeOperation = "source-over";
	ctx.drawImage(scene_room_img,0,0,cvs.width,cvs.height);
}
renderShadow=function(cvs)
{
    
	console.log('shadow');
	var ctx=cvs.getContext("2d");
	ctx.save();
	ctx.globalAlpha = 0.99;
	ctx.globalCompositeOperation = "multiply";
	ctx.drawImage(scene_shadow_img,0,0,cvs.width,cvs.height);
    ctx.globalCompositeOperation = "source-over";
	ctx.restore();
}

stuffs={};
        
        
renderStuffs=function(cvs)
{
	console.log('stuffs');
        blendStuffs(cvs,stuffs);
}
