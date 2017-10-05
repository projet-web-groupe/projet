$(document).ready(function(){
	console.log("chargé");
	$(".diplome").on("keyup",function(){
		console.log("entrer");
		$(".cache").fadeIn();
		$(".gene").hide();
		$.get('http://#',{mot:$("diplome").val()},
			function(rep){
				$(".suggestion ul").html(rep);
				$(".cache").show();
				$(".gene").hide();
			});
	});

	$(".diplome").on("blur",function(){
		console.log("blur");
		$(".cache").fadeOut(300);
		$(".gene").show();
	})

	$(".domaine").on("keyup",function(){
		console.log("entrer2");
		$(" .cache2").fadeIn();
		$(".gene").hide();
		$.get('http://#',{mot:$("domaine").val()},
			function(rep){
				$(".suggestion2 ul").html(rep);
				$(".cache2").show();
				$(".gene").hide();
			});
	});

	$(".domaine").on("blur",function(){
		console.log("blur");
		$(".cache2").fadeOut(300);
		$(".gene").show();
	})
	$("#exp").on("keyup",function(){

		if($("#exp").val()<0 || !$.isNumeric($("#exp").val()))
		{
			if($("#croix").hasClass("glyphicon glyphicon-ok"))
			{
				$("#croix").removeClass("glyphicon glyphicon-ok");
			}
			if(!$("#croix").hasClass("glyphicon glyphicon-remove"))
			{
				$("#croix").addClass("glyphicon glyphicon-remove");
			}
			
		}
		else{
			if($("#croix").hasClass("glyphicon glyphicon-remove"))
			{
				$("#croix").removeClass("glyphicon glyphicon-remove");
			}
			if(!$("#croix").hasClass("glyphicon glyphicon-ok"))
			{
				$("#croix").addClass("glyphicon glyphicon-ok");
			}
		}
	});
	$("#email").on("keyup",function(){
		
		var pattern = new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
		console.log(pattern.test($("#email").val()));
		if(!pattern.test($("#email").val()))
		{
			
			//$('#croix').hide();
			if(!$('#e-croix').hasClass("glyphicon glyphicon-remove"))
			{
				if($('#e-croix').hasClass("glyphicon glyphicon-ok"))
				{
					$('#e-croix').removeClass("glyphicon glyphicon-ok")
				}
				$("#e-croix").addClass("glyphicon glyphicon-remove");
			}
		}
		else{
			
			if(!$('#e-croix').hasClass("glyphicon glyphicon-ok"))
			{
				if($('#e-croix').hasClass("glyphicon glyphicon-remove"))
				{
					$('#e-croix').removeClass("glyphicon glyphicon-remove")
				}
				$("#e-croix").addClass("glyphicon glyphicon-ok");
			}
		}
	});
});