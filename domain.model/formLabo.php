<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<form id="formLabo">
<p>Descripcion <input type="text" name="nombreLabo"></p>
<p>Valor <input type="number" name="valorLabo"></p>
<p>Indice <input type="number" name="indiceLabo" value="1"></p>
<button id="ingresar" name="ingresar">Ingresar</button>
<button id="confirmar" name="confirmar">Confirmar</button>
</form>




<script type="text/javascript">
    
$("#ingresar").click(function(event){
event.preventDefault();
var datastring = $('#formLabo').serialize(); 
        $.ajax({
            data: datastring,
            type:'post',
            dataType: "json",
            url: "agregarLabo.php",
            success: function(data)
            {
                if(data.result)
                {
                    alert(data.message);
                }
                else
                {
                    alert(data.message);
                }
            }
        });
    });


$("#confirmar").click(function(event){
event.preventDefault();
        $.ajax({
            type:'post',
            dataType: "json",
            url: "confirmarLabo.php",
            success: function(data)
            {
                if(data.result)
                {
                    alert(data.message);
                }
                else
                {
                    alert(data.message);
                }
            }
        });
    });


</script>