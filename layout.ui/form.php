<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Blueprint: Responsive Multi-Column Form</title>
		<meta name="description" content="Formulario Paciente" />
		<meta name="keywords" content="responsive form, inputs, html5, responsive, multi-column, fluid, media query, template" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../layout.ui/css/form/default.css" />
		<link rel="stylesheet" type="text/css" href="../layout.ui/css/form/component.css" />
		<script src="../layout.ui/js/form/modernizr.custom.js"></script>

	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<h1>Formulario Paciente</h1>
			</header>	
			<div class="main">
				<form class="cbp-mc-form">
					<div class="cbp-mc-column">
						<label for="nombre">Nombre</label>
	  					<input type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido">
	  					<label for="dia_internacion">Last Name</label>
	  					<input type="text" id="dia_internacion" name="dia_internacion" placeholder="Fecha Internacion">
	  					<label for="fecha_nacimiento">Email Address</label>
	  					<input type="text" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha Nacimiento">
	  					<!--<label for="country">Country</label>
	  					<select id="country" name="country">
	  						<option>Choose a country</option>
	  						<option>France</option>
	  						<option>Italy</option>
	  						<option>Portugal</option>
	  					</select>
                        -->
	  					<label for="peso">Peso</label>
	  					<input type="text" id="peso" name="peso" placeholder="Peso">
                        <label for="tet">TET</label>
	  					<input type="text" id="tet" name="tet" placeholder="TET">
                        <label for="cvc">CVC</label>
	  					<input type="text" id="cvc" name="cvc" placeholder="CVC">
                        <label for="ca">CA</label>
	  					<input type="text" id="ca" name="ca" placeholder="CA">
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label for="diagnosticos">Diagnosticos</label>
	  					<textarea id="diagnosticos" name="diagnosticos"></textarea>
						<label for="laboratorio">Laboratorios</label>
	  					<textarea id="laboratorio" name="laboratorio"></textarea>
                        <label for="examen_complementario">Examenes Complementarios</label>
	  					<textarea id="examen_complementario" name="examen_complementario"></textarea>
                        <label for="cultivos">Cultivos</label>
	  					<textarea id="cultivos" name="cultivos"></textarea>
                         <label for="inotropico">Inotropico</label>
	  					<textarea id="inotropico" name="inotropico"></textarea>
                        <label for="sedacion">Sedacion</label>
	  					<textarea id="sedacion" name="sedacion"></textarea>
                        <label for="otros">Otros</label>
	  					<textarea id="otros" name="otros"></textarea>
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label for="procedencia">Procedencia</label>
	  					<input type="text" id="procedencia" name="procedencia" placeholder="Procedencia">
						<label for="fecha_internacion">Fecha Internacion</label>
	  					<input type="text" id="fecha_internacion" name="fecha_internacion" placeholder="Fecha Internacion">
	  					<label for="setting_arm">Setting ARM</label>
	  					<textarea id="setting_arm" name="setting_arm"></textarea>
                        <label for="eab">EAB</label>
	  					<textarea id="eab" name="eab"></textarea>
                        <label for="iono">IONO</label>
	  					<textarea id="iono" name="iono"></textarea>
                        <label for="hora">Hora</label>
	  					<textarea id="hora" name="hora"></textarea>
                        <label for="atb">ATB</label>
	  					<textarea id="atb" name="atb"></textarea>
                        <label for="aportes">Aportes</label>
	  					<textarea id="aportes" name="aportes"></textarea>
                        <label for="comentarios">Comentarios</label>
	  					<textarea id="comentarios" name="comentarios"></textarea>
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" value="Guardar Datos" /></div>
				</form>
			</div>
		</div>
	</body>
</html>
