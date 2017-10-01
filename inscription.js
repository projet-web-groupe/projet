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

});