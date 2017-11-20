$(document).ready(function(){
	
	
	$(".liste").on("click",function(){
		$(".menu").slideToggle();
		$(".menu-xs").slideToggle();
		

	});
	$("body").on("click",function(e){
		
		
		if(!$(e.target).hasClass("deroule") )
		{
			if($("menu").css("display")!="none")
			{
				$(".menu").slideUp();
			}
			if($("menu-xs").css("display")!="none")
			{
				
				$(".menu-xs").slideUp();
			}
		}
		

	});

});