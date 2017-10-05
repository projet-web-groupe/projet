$(document).ready(function(){
	console.log("chargé");
	/*$("#mail").on("keyup",function(){
		
		var pattern = new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
		console.log(pattern.test($("#mail").val()));
		if(!pattern.test($("#mail").val()))
		{
			$("#mVal").text("ca marche pas pour l'instant");
			//$('#croix').hide();
			if(!$('#croix i').hasClass("glyphicon glyphicon-remove"))
			{
				if($('#croix i').hasClass("glyphicon glyphicon-ok"))
				{
					$('#croix i').removeClass("glyphicon glyphicon-ok")
				}
				$("#croix i").addClass("glyphicon glyphicon-remove");
			}
		}
		else{
			$("#mVal").text("ca marche bien pour l'instant");
			if(!$('#croix i').hasClass("glyphicon glyphicon-ok"))
			{
				if($('#croix i').hasClass("glyphicon glyphicon-remove"))
				{
					$('#croix i').removeClass("glyphicon glyphicon-remove")
				}
				$("#croix i").addClass("glyphicon glyphicon-ok");
			}
		}
	});
	$("#tel").on("keyup",function(){
		var pattern= new RegExp("^0[1-9]([-. ]?[0-9]{2}){4}$");
		
		if(!pattern.test($("#tel").val()))
		{
			if(!$('#tel-croix i').hasClass("glyphicon glyphicon-remove"))
			{
				if($('#tel-croix i').hasClass("glyphicon glyphicon-ok"))
				{
					$('#tel-croix i').removeClass("glyphicon glyphicon-ok")
				}
				$("#tel-croix i").addClass("glyphicon glyphicon-remove");
			}
		}
		else{
			console.log("pass");
			if(!$('#tel-croix i').hasClass("glyphicon glyphicon-ok"))
			{
				if($('#tel-croix i').hasClass("glyphicon glyphicon-remove"))
				{
					$('#tel-croix i').removeClass("glyphicon glyphicon-remove")
				}
				$("#tel-croix i").addClass("glyphicon glyphicon-ok");
			}
		}
	});
	$("#fax").on("keyup",function(){
		var pattern= new RegExp("^0[1-9]([-. ]?[0-9]{2}){4}$");
		
		if(!pattern.test($("#fax").val()))
		{
			if(!$('#tel-croix i').hasClass("glyphicon glyphicon-remove"))
			{
				if($('#fax-croix i').hasClass("glyphicon glyphicon-ok"))
				{
					$('#fax-croix i').removeClass("glyphicon glyphicon-ok")
				}
				$("#fax-croix i").addClass("glyphicon glyphicon-remove");
			}
		}
		else{
			console.log("pass");
			if(!$('#fax-croix i').hasClass("glyphicon glyphicon-ok"))
			{
				if($('#fax-croix i').hasClass("glyphicon glyphicon-remove"))
				{
					$('#fax-croix i').removeClass("glyphicon glyphicon-remove")
				}
				$("#fax-croix i").addClass("glyphicon glyphicon-ok");
			}
		}
	});*/
	$(".rechercher").on("click",function(){
		$("#res").show();
	});
});