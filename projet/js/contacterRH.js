$(document).ready(function(){
	console.log("chargé");
	
	$(".rechercher").on("click",function(e){
		console.log($("#indice").val()+" a");

		$.ajax({
		    
		    url: 'ressourcePHP/listeDrh.php',
		    type: 'POST',
		    data: 'mot='+ $("#indice").val(),
		    success: function(data) {
		       
				console.log(data +" aa");
				$('#resPhp').html(data);

		    },
		    error: function(x,y, error){
		    	console.log(error);
		    }

		});
		
		$("#res").show();
	});

});	
