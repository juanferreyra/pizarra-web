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