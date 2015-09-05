<!--
-Agregar los formularios a la vista
-Agregar para obtener el numero de historia clinica
-Agregar guardados a la base
-Cargar los datos guardados en la base en el menu de internacion
-Agregar la cama y de que lado esta internado
-Mostrar en la grilla las internaciones cargadas
-->
<style>

    .espaciados{
    text-align:end;
        float:center;
        
    }
    

    
</style>
<h2>
	<strong>Datos personales paciente</strong>
</h2>
<hr>
<form id="frmPaciente" action="../../../services/paciente.service.php" method="POST">
<div class="espaciados">
<label for='nombre'>Nombre</label>
<input type='text' name='nombre' />
<label for='fechanac'>Fecha Nacimiento</label>
<input type='text' name='fechanac' />
<br />
<br />
</div>
<label for='tipodoc'>Tipo Documento</label>
<input type='text' name='tipodoc' />
&nbsp; &nbsp; <label for='nrodoc'>Numero Documento</label>
<input type='text' name='nrodoc' /> 
<br />
<br />
<input type="submit" value="Ingresar" class="button_submit">
</form>