$(document).ready(function(){

	$("#laboratorio").click(function(){
	  	$("#contenido_laboratorio").load("forms/laboratorio/form.laboratorio.php");
	});

	$("#paciente").click(function(){
		$("#contenido_paciente").load("forms/paciente/form.paciente.php");
	});

	$("#paciente_peso").click(function(){
		$("#contenido_paciente_peso").load("forms/paciente/form.peso.php");
	});

	$("#TET").click(function(){
		$("#contenido_tet").load("forms/paciente/form.tac.php");
	});

});