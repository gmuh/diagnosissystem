$(document).ready(function(e) {    
	$('#info_two').hide();//attr("visibility", "hidden");
	$('#info_three').hide();//attr("visibility", "hidden");
	$('#next_one').click(function(){
		$('#info_one').hide();
		$('#info_two').show(1500);
	});
	$('#next_two').click(function(){
		$('#info_two').hide();
		$('#info_three').show(1500);
	});
	$('#prev_one').click(function(){
		$('#info_two').hide();
		$('#info_one').show(1500);
	});
	$('#prev_two').click(function(){
		$('#info_three').hide();
		$('#info_two').show(1500);
	});
	//alert('hg');
});