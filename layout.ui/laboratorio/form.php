<h3>Sangre</h3>
<hr>
<form id="frmLaboratorio" action="../../services/laboratorio.service.php" method="POST">
<table>
<tr>
<td><label for='hto'>Hto</label></td>
<td><label for='hb'>Hb</label></td>    
<td><label for='gblancos'>G. Blancos</label></td>
<td><label for='plaq'>Plaq</label></td>
<td><label for='glucemia'>Glucemia</label></td>
<td><label for='urea'>Urea</label></td>
<td><label for='creat'>Creat</label></td>
<td><label for='na'>Na</label></td>
<td><label for='k'>K</label></td>
<td><label for='lactico'>Lactico</label></td>
</tr>
<tr>
<td><input type='text' name='hto' /></td>
<td><input type='text' name='hb' /></td>
<td><input type='text' name='gblancos' /></td>
<td><input type='text' name='plaq' /></td>
<td><input type='text' name='glucemia' /></td>
<td><input type='text' name='urea' /></td>
<td><input type='text' name='creat' /></td>
<td><input type='text' name='na' /></td>
<td><input type='text' name='k' /></td>
<td><input type='text' name='lactico' /></td>
</tr>
<tr>
<td><label for='got'>Got</label></td>
<td><label for='gpt'>Gpt</label></td>
<td><label for='amilasa'>Amilasa</label></td>
<td><label for='bt'>Bt</label></td>
<td><label for='bd'>Bd</label></td>
<td><label for='fal'>Fal</label></td>
<td><label for='tprot'>T Prot %</label></td>
<td><label for='apttseg'>Aptt seg</label></td>
</tr>
<tr>
<td><input type='text' name='got' /></td>
<td><input type='text' name='gpt' /></td>
<td><input type='text' name='amilasa' /></td>
<td><input type='text' name='bt' /></td>
<td><input type='text' name='bd' /></td>
<td><input type='text' name='fal' /></td>
<td><input type='text' name='tprot' /></td>
<td><input type='text' name='apttseg' /></td>
</tr>
<tr>
<td><label for='ph'>Ph</label></td>
<td><label for='co2'>Co2</label></td>
<td><label for='excbase'>Exc Base</label></td>
<td><label for='hco3'>HcO3</label></td>
<td><label for='po2'>Po2</label></td>
<td><label for='saro2'>SarO2</label></td>
<td><label for='cpk'>Cpk</label></td>
</tr>
<tr>
<td><input type='text' name='ph' /></td>
<td><input type='text' name='co2' /></td>
<td><input type='text' name='excbase' /></td>
<td><input type='text' name='hco3' /></td>
<td><input type='text' name='po2' /></td>
<td><input type='text' name='saro2' /></td>
<td><input type='text' name='cpk' /></td>
</tr>
<tr>
<td><label for='esd'>ESD</label></td>
<td><label for='pcr'>PCR</label></td>
<td><label for='procalcitonina'>Procalcitonina</label></td>
</tr>
<tr>
<td><input type='text' name='esd' /></td>
<td><input type='text' name='pcr' /></td>
<td><input type='text' name='procalcitonina' /></td>
</tr>
</table>
<h3>Orina</h3>
<hr>
<table>
<tr>
<td><label for='lcrorina'>LCR</label></td>
<td><label for='gborina'>GB.</label></td>

<td><label for='protorina'>Prot.</label></td>
<td><label for='glucorina'>Gluc.</label></td>
<td><label for='aspectoorina'>Aspecto</label></td>
</tr>
<tr>
<td><input type='text' name='lcrorina' /></td>
<td><input type='text' name='gborina' /></td>
<td><input type='text' name='protorina' /></td>
<td><input type='text' name='glucorina' /></td>
<td><input type='text' name='aspectoorina' /></td>
</tr>
</table>
<input type="submit" value="Submit">
</form>