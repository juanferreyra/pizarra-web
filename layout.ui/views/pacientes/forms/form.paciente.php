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
        display:inline-block;
        
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
<br />
<label for='fechanac'>Fecha Nacimiento</label>
<input type='text' name='fechanac' />
<br />
<label for='direccion'>Direccion</label>
<input type='text' name='direccion' />
<br />
<label for='localidad'>Localidad</label>
<input type='text' name='localidad' />
<br />
<label for='provincia'>Provincia</label>
<input type='text' name='provincia' />
<br />
<label for='sexo'>Sexo</label>
<select name="sexo">
<option value="M">M</option>
<option value="F">F</option>
</select>
<br />
<label for='telefono'>Telefono</label>
<input type='text' name='telefono' />
<br />
<label for='tipodoc'>Tipo Documento</label>
<input type='text' name='tipodoc' />
<br />
<label for='nrodoc'>Numero Documento</label>
<input type='text' name='nrodoc' /> 
</div>
<br />
<br />
<input type="submit" value="Ingresar" class="button_submit">
</form>