$(document).ready(function(){

	$("#laboratorio").click(function(event){
	  	event.preventDefault();
	  	$("#dialog").load("forms/form.laboratorio.php");
		$("#dialog").dialog("option", "title", "Laboratorios");
		$("#dialog").dialog( "open" );
	});

	$("#paciente_peso").click(function(event){
		event.preventDefault();
	  	$("#dialog").load("forms/form.paciente_peso.php");
		$("#dialog").dialog("option", "title", "Laboratorios");
		$("#dialog").dialog( "open" );
	});

	$("#TET").click(function(event){
		event.preventDefault();
	  	$("#dialog").load("forms/form.tet.php");
		$("#dialog").dialog("option", "title", "Laboratorios");
		$("#dialog").dialog( "open" );
	});

	$('#dialog').css('z-index','1000000');
	
	$( "#dialog" ).dialog({
		autoOpen: false,
		width: 400,
		buttons: [
			{
				text: "Ok",
				click: function() {
					$( this ).dialog( "close" );
				}
			},
			{
				text: "Cancelar",
				click: function() {
					$( this ).dialog( "close" );
				}
			}
		]
	});

});