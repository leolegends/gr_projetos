$(document).ready(function(){
	
	$("#prazo").hide().show(1000);

	$("#iniciado").hide().show(500);
	$("#analise").hide().show(1000);
	$("#desenvolvendo").hide().show(2000);
	$("#corrigindo").hide().show(2500);
	$("#aprovado").hide().show(3000);
	$("#entregue").hide().show(3500);
	$("#title_cadastro").hide().fadeIn(3000);
	$(".corpo2").hide();
	$("#add_comentario").hide();
	$("#comentarios").hide();
	
	$("#mostrar_comentarios").click(function(){
		$("#comentarios").toggle(1000);
		$("#add_comentario").hide(500);
	});

	$("#incluir_comentarios").click(function(){
		$("#add_comentario").toggle(1000);
		$("#comentarios").hide(500);
	});


	$("#localizar").click(function(){
		$(".corpo2").toggle(500);
	});

	$("#pj_prazo").keyup(function(){

	if(!parseInt($(this).val())) {
		$(this).val("");
	}

	if ($(this).val() > 31){
		
		$("#projeto_label").html("<p id='pjlb' style= font-size: 34px; color:white;>Maior que 31 dias!</p>");	
		$("#pjlb").hide().fadeIn(1000);
	}else{
		$("#projeto_label").html("");
	}

	});
	


});