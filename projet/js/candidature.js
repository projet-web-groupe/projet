$(document).ready(function(){
	console.log("enter");
	$(".btn-ref").on("click",function(){
		console.log("btn-ref");
		$.ajax({
		   
		    url: 'ressourcePHP/refuser-Candidature.php',
		    type: 'POST',
		    data: 'ref='+ ($(this).parent().children(".ref").text())+"&nom="+$("#sessionNom").text()+"&prenom="+$("#sessionPrenom").text()+"&id="+$("#sessionId").text()+"&rh=0",
		    success: function(data) {
		       
				console.log(data+" test2");
				$("#listeOffre").html(data);
				console.log("sortie");
		    },
		    error: function(x,y, error){
		    	console.log(error);
		    },
		    complete: function(resultat,statut){
		    	console.log(statut+" a1"+resultat);
		    }
		});
		console.log("sortie2");
	});
	
	$(".btn-acc").on("click", function(){
		console.log("btn-acc");
		$.ajax({
		    
		    url: 'ressourcePHP/accepter-Candidature.php',
		    type: 'POST',
		    data: 'ref='+ ($(".ref").text())+'&nom='+$("#sessionNom").text()+'&prenom='+$("#sessionPrenom").text()+'&id='+$("#sessionId").text()+'&rh=0',
		    success: function(data) {
		       
				console.log(data+" test");
				$("#listeOffre").html(data);
		    },
		    error: function(x,y, error){
		    	console.log(error);
		    }

		});
	});

	$(".btn-ref-rh").on("click",function(){
		console.log("btn-ref-rh");
		$.ajax({
		    
		    url: 'ressourcePHP/refuser-Candidature.php',
		    type: 'POST',
		    data: 'ref='+ ($(this).parent().children(".ref-rh").text())+"&nom="+$("#sessionNom").text()+"&prenom="+$("#sessionPrenom").text()+'&id='+$("#sessionId").text()+"&rh=1"+"&numCand="+($(this).parent().children(".numCandRh").text()),
		    success: function(data) {
		       
				$("#listeOffre").html(data);
		    },
		    error: function(x,y, error){
		    	console.log(error);
		    }

		});
	});

	$(".btn-acc-rh").on("click",function(){
		console.log("btn-acc-rh");
		$.ajax({
		    
		    url: 'ressourcePHP/accepter-Candidature.php',
		    type: 'POST',
		    data: 'ref='+ ($(this).parent().children(".ref-rh").text())+"&nom="+$("#sessionNom").text()+"&prenom="+$("#sessionPrenom").text()+'&id='+$("#sessionId").text()+"&rh=1"+"&numCand="+($(this).parent().children(".numCandRh").text()),
		    success: function(data) {
		       
				console.log(data+" test");
				$("#listeOffre").html(data);
		    },
		    error: function(x,y, error){
		    	console.log(error);
		    }

		});
	});
});