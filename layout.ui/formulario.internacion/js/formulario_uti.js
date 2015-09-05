$(document).ready(function(){

	$("#laboratorio").click(function(){
	  	$("#dialog_subcontent").load("forms/laboratorio/form.laboratorio.php");
	});

	$("#paciente").click(function(){
		$("#dialog_subcontent2").load("forms/paciente/form.paciente.php");
	});

	$("#paciente_peso").click(function(){
		$("#dialog_subcontent3").load("forms/paciente/form.peso.php");
	});

	$("#TET").click(function(){
		$("#dialog_subcontent4").load("forms/paciente/form.tac.php");
	});

});