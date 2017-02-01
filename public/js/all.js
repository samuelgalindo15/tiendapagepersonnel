$(document).ready(function(){
	$(".megamenu").megamenu();
	$("#sucursal").change(function(){
		var sucursal= $('#sucursal').val();
		window.location.href = '/'+sucursal;
	});
});
