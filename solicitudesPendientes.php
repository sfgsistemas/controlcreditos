<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">

</head>
<body onLoad="inicio()">
<!-- header -->
<heade>
	

</heade>

<!-- content -->
<section>
  <div class="bg" align="center">
    <div class="container" align="center">
      <form name="form1" id="form1" action="" method="post">
        <style>
	 
	  input::-webkit-input-placeholder {
    color:    #c00;
	font-size:8px;
	font-weight: bold;
}
input::-moz-placeholder {
    color:    #c00;
	font-size:8px;
	font-weight: bold;
}
	  </style>
       
	   <div class="callout"  style="opacity: .50;">
	   <h4>Buscador de solicitudes</h4>
	   
	   <p>Buscar por: 
	</div>
	     <select name="select" id="select" size="1" onChange="capturar()">
	       <option value="---" selected >---</option>
	       <option value="1" >Número de solicitud</option>
	       <option value="2">Solicitudes Pendientes</option>
	       <option value="3" >Solicitudes Aceptadas</option>
	       <option value="4" >Solicitudes Rechazadas</option>
          </select>
	   </p>
	   
	   <div id="contenido1" style="display:none">
	     <table width="100%" >
           <tr>
             <td>Ingresa el elemento a buscar: </td>
             <td><span data-tooltip aria-haspopup="true" class="has-tip left" data-disable-hover="false" tabindex="4" title="Para Realizar la Prueba Ingresa el Folio: SA-011 y Aceptar"><input name="textfield" id="textfield" ></span></td>
           </tr>
          
         </table>
	     <p>
	       <input name="aceptar" class="success button"  type="button" id="aceptar" value="Aceptar">
	       <input name="cancelar"  class="alert button" type="submit" id="cancelar" value="Cancelar">
	      
	     </p>
	     <p>  
		 
	      </p>
	   </div>
	   
	   <div id="contenido2" style="display:none">
	   
         <p>
           <input name="pendientes"  type="button" id="pendientes" value="Buscar">
         </p>
        </div>
		
		 <div id="contenido3" style="display:none" >
	   
         <p>
           <input name="aceptados" type="button" id="aceptados" value="Buscar">
            	<input type="text" style="display:none" name="id1" id="id1" >
	   <input type="text" style="display:none" name="id2" id="id2" >
         </p>
        </div>
	    <div id="contenido4" style="display:none" >
	   
         <p>
           <input name="rechazados" type="button" id="rechazados" value="Buscar">
            	<input type="text" style="display:none" name="id1" id="id1" >
	   <input type="text" style="display:none" name="id2" id="id2" >
         </p>
        </div>
	   
	   
	  <div id="porid">
    													</div>

		 <div id="porpendientes">
		


		 </div>
		 
		<div id="poraceptados" >
	
      </form>
    </div>
  </div>
</section>
<!-- footer -->
<footer>
	
</footer> 

</body>
 <script type="text/javascript" src="js/solicitudesP.js"></script>
</html>
