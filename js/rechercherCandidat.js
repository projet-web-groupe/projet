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
			console.log("coché: "+$(this).val());
			tab.push($(this).val());
			//console.log($(this).val());
		})
		
		$.ajax({
		    
		    url: 'ressourcePHP/listeCandidat.php',
		    type: 'POST',
		    data: 'competences='+ JSON.stringify(tab)+"&exp="+ $("#minExp").val(),
		    success: function(data) {
		       
				console.log(data+" test");
				$('#listeCandidat').html(data);

		    },
		    error: function(x,y, error){
		    	console.log(error);
		    }

		});
	});
});