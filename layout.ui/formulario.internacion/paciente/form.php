<!--
-Agregar los formularios a la vista
-Agregar para obtener el numero de historia clinica
-Agregar guardados a la base
-Cargar los datos guardados en la base en el menu de internacion
-Agregar la cama y de que lado esta internado
-Mostrar en la grilla las internaciones cargadas

-->

<h3>Datos personales paciente</h3>
<hr>
<form id="frmPaciente" action="../../services/paciente.service.php" method="POST">

<label for='nombre'>Nombre</label>
<input type='text' name='nombre' />
<br />
<label for='fechanac'>Fecha Nacimiento</label>
<input type='text' name='fechanac' />
<br />
<label for='tipodoc'>Tipo Documento</label>
<input type='text' name='tipodoc' />
<label for='nrodoc'>Numero Documento</label>
<input type='text' name='nrodoc' /> 
<br />
<input type="submit" value="Submit">
</form>