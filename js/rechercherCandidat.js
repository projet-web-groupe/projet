$(document).ready(function(){
	console.log("enter");
	/*var countChecked = function() {
		  var n = $( "input:checked" ).length;
		  //$( "div" ).text( n + (n === 1 ? " is" : " are") + " checked!" );
		  console.log(n);
		};*/
	$(".chercher").on("click",function(){
		console.log("pass");
		$(".part2").show();
		var tab=[];
		$( "input:checked" ).each(function(){
			tab.push($(this).val());
			//console.log($(this).val());
		})
		/*$.get('http://localhost/Web/projet/ressourcePHP/listeCandidat.php',{competences:tab},
				function(rep){
					console.log("Réponse du serveur: ",rep);
					console.log("pass");
					$("#test").html(rep);
				}
		);*/
		$.ajax({
		    
		    url: 'ressourcePHP/listeCandidat.php',
		    type: 'POST',
		    data: 'competences='+ JSON.stringify(tab)+"&exp="+ $("#minExp").val(),
		    success: function(data) {
		       
				//var obj= jQuery.parseJSON(data);
				console.log(data);
				$('#listeCandidat tbody').append(data);

		    },
		    error: function(x,y, error){
		    	console.log(error);
		    }

		});

		/*$.get("http://#",{coche:tab},function(rep){
			$("table").html(rep);
		});*/
	});
});