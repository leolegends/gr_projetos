$(document).ready(function(){

	$("#prazo").hide().show(1000);

	$("#iniciado").hide().show(500);
	$("#analise").hide().show(1000);
	$("#desenvolvendo").hide().show(2000);
	$("#corrigindo").hide().show(2500);
	$("#aprovado").hide().show(3000);
	$("#entregue").hide().show(3500);

	
	$("#pj_prazo").keyup(function(){

	if(!parseInt($(this).val())) {
		$(this).val("");
	}

	if ($(this).val() > 31){
		var p = confirm("Tem certeza que seu projeto terá mais que 31 dias?");
		
		if (p == false){
			$(this).val("");
		}
	}

	console.log($(this).val());


	});

	

});