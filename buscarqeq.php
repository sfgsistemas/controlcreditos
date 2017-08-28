<?php 






 ?>

 <!DOCTYPE html>
 <html>

 <script type="text/javascript">

 	 function capturar()
    {
	
		if (document.getElementById('nombre')!= "") {
				document.getElementById('razonsoc').value="";
			document.getElementById('rfc1').value="";
			document.getElementById('rfc1').readOnly=true;
			document.getElementById('razonsoc').readOnly=true;
			document.getElementById('perM').disabled=true;
		}



}

function cap(){

	if (document.getElementById('razonsoc')!= "") {

			document.getElementById('nombre').value="";
			document.getElementById('nombre').readOnly=true;
			document.getElementById('perF').disabled=true;
		}

}
 </script>
 <head>
 	<title>Financiera</title>
 </head>
 <body >
  <form action="qeq.php" method="post" target="_blank">

 <p align="left">

		
<div class="column small-6">
 <div id="pf" >
	<div class="callout">
<h4>Persona Fisca</h4>
 	<label>Nombre
 <input type="text" name="nombre" id="nombre" onChange="capturar()">
 	</label>
 <label>
 	Paterno
  <input type="text" name="paterno" id="paterno">
 </label>
 <label>
 	Materno
   <input type="text" name="materno" id="materno">
 </label>
 <label>
 	CURP
    <input type="text" name="curp" id="curp">
 </label>
 <label>
 	RFC
     <input type="text" name="rfc" id="rfc">
 </label>
      <input type="submit" class="primary button" name="perF" id="perF" value="Buscar">


</div>
 </div>
</div>
</p>



<p align="left">
	
<div class="column small-6">
  <div id="pm" >
  <div class="callout">
 <h4>Persona moral</h4>
  <label>
  	Razon social
 <input type="text" name="razonsoc" id="razonsoc" onChange="cap()">
  </label>
  <label>
  	RFC
     <input type="text" name="rfc1" id="rfc1">
  </label>
      <input type="submit" class="primary button" name="perM" id="perM" value="Buscar">
  </form>
  </div>

 </div>
</div>
</p>




 </body>
 </html>