$(document).ready(function(){
	$(".sec").on("click",function(){
		console.log("entrer");
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

