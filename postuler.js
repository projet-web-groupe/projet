$(document).ready(function(){
	$(".panel-heading").on("click",function(){
		console.log("entrer");
		//console.log($(this).parent().children(".panel-body"));
		$(this).parent().children(".panel-body").slideToggle();
		if($(this).children().hasClass("glyphicon-menu-down"))
		{
			$(this).children().removeClass("glyphicon-menu-down");
			$(this).children().addClass("glyphicon-menu-up");
		}
		else{
			$(this).children().addClass("glyphicon-menu-down");
			$(this).children().removeClass("glyphicon-menu-up");
		}
	});
});

