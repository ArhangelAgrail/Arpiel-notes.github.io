jQuery(document).ready(function(){

//Check Height	
	if(jQuery("#content").height()<350) jQuery("#content").css("padding-bottom","350px");
	setInterval("checkheight()",1500);
		
//search box
	var tl_keyword='Search';
	jQuery(".mainsearch .keyword").val(tl_keyword);
	jQuery(".mainsearch").hover(
		function () {
			//jQuery(".mainsearch .keyword").css('visibility', 'visible');
			jQuery(this).addClass("mainsearch_hover");
		},	
		function () {
			if(jQuery(".mainsearch .keyword").val()==tl_keyword){
				//jQuery(".mainsearch .keyword").css('visibility', 'hidden');
				jQuery(this).removeClass("mainsearch_hover");
			}
	});
	jQuery(".mainsearch .keyword").bind("focus", function(){
  		if(jQuery(this).val()==tl_keyword) jQuery(this).val('');
	});
	
	jQuery(".mainsearch .keyword").bind("blur", function(){
  		if(jQuery(this).val()==''){
  			jQuery(this).val(tl_keyword);
  			//jQuery(this).css('visibility', 'hidden');
  			jQuery(".mainsearch").removeClass("mainsearch_hover");
  		}
	});
});

var new_content_height=0,new_content_padding=0,container_height=0,total_space;
function checkheight(){
	if(container_height!=jQuery("#container").height()){
		jQuery("#content").css({"padding-bottom":"0px"});
		total_space=jQuery("#container").height()-28;//height for content
		
		new_content_height=Math.ceil(total_space/40)*40;//new content height
		new_content_padding=Math.abs(new_content_height-jQuery("#content").height());
		
		jQuery("#content").css({"padding-bottom":new_content_padding+"px"});
		container_height=jQuery("#container").height();
	}
}

