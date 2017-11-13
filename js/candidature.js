$(document).ready(function(){
	console.log("enter");
	$(".btn-ref").on("click",function(){
		//var nom= <?php echo $_SESSION['nom']; ?>;
		$.ajax({
		    
		    url: 'ressourcePHP/refuser-Candidature.php',
		    type: 'POST',
		    data: 'ref='+ ($(this).parent().children(".ref").text())+"&nom="+$("#sessionNom").text()+"&prenom="+$("#sessionPrenom").text()+"&rh=0",
		    success: function(data) {
		       
				console.log(data+" test");
				$("#listeOffre").html(data);
		    },
		    error: function(x,y, error){
		    	console.log(error);
		    }

		});
	});

	$(".btn-acc").on("click", function(){
		$.ajax({
		    
		    url: 'ressourcePHP/accepter-Candidature.php',
		    type: 'POST',
		    data: 'ref='+ ($(this).parent().children(".ref").text())+"&nom="+$("#sessionNom").text()+"&prenom="+$("#sessionPrenom").text()+"&rh=0",
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
		//console.log($(this).parent().children(".numCandRh").text()+" a");
		$.ajax({
		    
		    url: 'ressourcePHP/refuser-Candidature.php',
		    type: 'POST',
		    data: 'ref='+ ($(this).parent().children(".ref-rh").text())+"&nom="+$("#sessionNom").text()+"&prenom="+$("#sessionPrenom").text()+"&rh=1"+"&numCand="+($(this).parent().children(".numCandRh").text()),
		    success: function(data) {
		       
				//console.log(data+" test");
				$("#listeOffre").html(data);
		    },
		    error: function(x,y, error){
		    	console.log(error);
		    }

		});
	});

	$(".btn-acc-rh").on("click",function(){
		//console.log($(this).parent().children(".numCandRh").text()+" a");
		$.ajax({
		    
		    url: 'ressourcePHP/refuser-Candidature.php',
		    type: 'POST',
		    data: 'ref='+ ($(this).parent().children(".ref-rh").text())+"&nom="+$("#sessionNom").text()+"&prenom="+$("#sessionPrenom").text()+"&rh=1"+"&numCand="+($(this).parent().children(".numCandRh").text()),
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