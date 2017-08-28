<?php
?>

<h1> Prueba Quien es Quien </h1>
<input type="button" id="aceptada" name="aceptada" value="prueba quien es quien" onClick="pru()">

<script>




function pru() {
 alert("Entra funcion");
var session="https://qeq.mx/datos/qws/access?var1=silvia@vwdgo.com&var2=qeq939";
var busqueda="https://qeq.mx/datos/qws/pepsp?nombre=miguel&paterno=osorio&materno=chong";
    if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {

      alert(xmlhttp.responseText);
      }
  }

xmlhttp.open("GET",session);
xmlhttp.send(null);

xmlhttp.open("GET",busqueda);
//window.location="https://qeq.mx/datos/qws/pepsp?nombre=miguel&paterno=osorio&materno=chong";
xmlhttp.withCredentials=true;
xmlhttp.send(null);
 alert(xmlhttp.responseText);
                                }
</script>


