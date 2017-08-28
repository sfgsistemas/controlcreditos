<?php
include("Conexion2.php");
?>
<!DOCTYPE html>
<title>Financiera|Cotización</title>
<body onLoad="inicio()" >

<p>Tipo de Crédito: 
 <select name="seleccion" size="1" id="seleccion" style="width:40%;" onchange="capturar()" required>
          <option value="" ></option>
          <?php
          $rescreditos=mysqli_query($cnx,"select * from tiposcreditos");
          while($rowcreditos=mysqli_fetch_array($rescreditos)){?> 
             <option value="<?php echo $rowcreditos['tasa'];?>" ><?php echo $rowcreditos['descripcion'];?></option>

         <?php }
          ?>
        </select>


<div id="contenidoNomina" class="container" >
    
  <table border="1">
        <tr>
                <td style="display:none">Ingresos mensuales  <input type="number" name="ingmen" id="ingmen"> </td>
                 <td>Tasa de interes (Anual)<input type="text" name="tasanomina" id="tasanomina" readonly></td>
                  <!--<td style="display:none">Seguro de vida  <input> <select name="seleccion"><option value="noaplica">no aplica</option> <option>unico pago al inicio</option>  </select></td>-->
        </tr>

         <tr>
                <td> Monto a solicitar <input type="text" name="montonomina" id="montonomina" onChange="formatodenumero(this.id,this.value)" onfocus="this.select()"></td>
                 <td>Frecuencia de pago <select name="frecpagonomina" id="frecpagonomina"><option value="12">Mensual</option></select> </td>
                  <td >Seguro de desempleo <input type="text" name="segurodesempleonomina" id="segurodesempleonomina" onChange="formatodenumero(this.id,this.value)" onfocus="this.select()"> <select id="selectsegdes"><option>No aplica</option> <option value="1">unico pago al inicio</option>  <option value="2">Se integra al monto</option>  </select> </td>
                  <td >Seguro de vida  <input type="text" name="segurovidanomina" id="segurovidanomina" onChange="formatodenumero(this.id,this.value)" onfocus="this.select()"> <select name="seleccion"><option>No aplica</option> <option>unico pago al inicio</option> <option>Se integra al monto</option> <option>Se reduce al monto</option> </select></td>
        </tr>


        <tr>
                <td>Plazo <select name="plazonomina" id="plazonomina"><option value="3">3</option> <option value="6">6</option> <option value="12">12</option><option value="24">24</option><option value="36">36</option><option value="48">48</option><option value="60">60</option></select>  </td>
                 <td> Comision por apertura <input name="comisionnomina" id="comisionnomina" value="3%"readonly> <select id="selectnomina"><option value="1">unico pago al inicio</option> <option value="2">Se integra al monto</option> <option>Gratuita</option><option>No aplica</option></select> </td>
                  <td>  <input type="button" value="Calcula" onClick="CalculaNomina()"></td>
        </tr>


  </table>
  <div id="resultadoNomina" ></div>
</div>





</body>
<script type="text/javascript"  src="js/cotiza1.js"></script>
</html>
