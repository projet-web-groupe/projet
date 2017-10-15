$(document).ready(function(){
	$(".chercher").on("click",function(){
		//console.log("entrer");
		$(".part2").show();
		var tab=[];
		$("input[type=checkbox]:checked").each( 
		    function() { 
		       // Insérer son code ici
		       tab.push($(this).val());
		      // console.log($(this).val());
		    } 
		);

		$.get("http://#",{coche:tab},function(rep){
			$("table").html(rep);
		});
	});
});