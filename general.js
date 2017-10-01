$(document).ready(function(){
	
	
	$(".liste").on("click",function(){
		//console.log("enter");
		$(".menu").slideToggle();
		$(".menu-xs").slideToggle();
		

	});
	$("body").on("click",function(e){
		
		
		if(!$(e.target).hasClass("deroule") )
		{//console.log("test!");
			if($("menu").css("display")!="none")
			{
				//console.log("test2 !");
				$(".menu").slideUp();
			}
			if($("menu-xs").css("display")!="none")
			{
				//console.log("test2 !");
				$(".menu-xs").slideUp();
			}
		}
		

	});

});