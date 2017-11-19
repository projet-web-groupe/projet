$(document).ready(function(){
	$("#modifier").on("click",function(){
		
		let elm = $('#valmod');
		let div1 = $('#overview');
		let div2 = $('#modification');
		div1.toggleClass('hide');
		div2.toggleClass('hide');
	});
});