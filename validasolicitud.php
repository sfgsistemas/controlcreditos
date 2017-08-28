<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<script type="text/javascript">
$(document).ready(function() {
    $("#form1").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
});


	
	

</script>

<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body onLoad="inicio()"
<!-- header -->
<header>

		    
</header>

<!-- content -->
<section>
      <form name="form1" id="form1" action="" method="post">
   
      
	   
	   
	   <?php
	   $id=$_GET['id'];
	  include('Conexion2.php');
  $result=mysqli_fetch_array(mysqli_query($cnx,"select * from solicitudes where Id='$id'"));
  
 
  if(!$result){
  ?><h4>No Se Encontro La Solicitud</h4><?php
  }else{
   	?>
			
		
			<h3><span class="label label-default">Datos del solicitante</span></h3>
			<br>
    <div class="row">
      <input style="display:none" id="res" value="<?php echo $id;?>">
             <?php

            $div=['DATOS DEL CONTACTO DE LA EMPRESA','DATOS GENERALES','CONSTITUCION DE LA EMPRESA','REFERENCIAS PERSONALES','REFERENCIAS BANCARIAS','REFERENCIAS COMERCIALES','CARGO DIRECTO','DATOS DEL CÓNYUGE','DATOS DEL OBLIGADO PM','CONSTITUCIÓN DE LA EMPRESA','DATOS GENERALES','ACCIONISTAS O TITULARES DE LAS PARTES SOCIALES','ACCIONISTAS PERSONAS MORALES','DATOS DEL OBLIGADO','DATOS DEL OBLIGADO(2)','AUTORIZACION RELATIVA A LA INVESTIGACION','OTROS DATOS','FORMATO DE IDENTIFOCACION','DOCUMENTACION DE IDENTIFICACION','BENEFICIARIO','PERFIL TRANSACCIONAL','PEPS','GRADO DE RIESGO'];
              for($i=2 ;$i<264;$i++){
                 $datos=mysqli_fetch_array(mysqli_query($cnx,"select * from ins where id='$i'"));
                if($i == 17 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[0]."</label></div>";}
                if($i == 24 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[1]."</label></div>";}
                if($i == 41 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[2]."</label></div>";}
                if($i == 55 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[3]."</label></div>";}
                if($i == 61 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[4]."</label></div>";}
                if($i == 68 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[5]."</label></div>";}
                if($i == 73 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[6]."</label></div>";}
                if($i == 77 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[7]."</label></div>";}
                if($i == 79 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[8]."</label></div>";}
                if($i == 88 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[9]."</label></div>";}
                if($i == 90 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[10]."</label></div>";}
                if($i == 93 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[11]."</label></div>";}
                if($i == 105 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[12]."</label></div>";}
                if($i == 113 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[13]."</label></div>";}
                if($i == 135 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[14]."</label></div>";}
                if($i == 155 && $result[$datos['variable']]!=null)
                 { echo "<div><label class='secondary label'>".$div[15]."</label></div>";}
                if($i == 173 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[16]."</label></div>";}
                if($i == 181 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[17]."</label></div>";}
                 if($i == 186 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[18]."</label></div>";}
                 if($i == 198 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[19]."</label></div>";}
                 if($i == 214 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[20]."</label></div>";}
                  if($i == 243&& $result[$datos['variable']]!=null)
                 { echo "<div><label class='secondary label'>".$div[21]."</label></div>"; }
                if($i == 247 && $result[$datos['variable']]!=null)
                  {echo "<div><label class='secondary label'>".$div[22]."</label></div>";}
                
                
                 if($result[$datos['variable']]==null || $result[$datos['variable']]== "  " || $result[$datos['variable']]== "0000-00-00" || $datos['label']=="B"||$datos['label']=="Tipo de solicitud") {

                  echo " ";
                 }
              else{
                
             
                ?>
                <div class="input-group">
    <span class="input-group-label"><?php echo $datos['label'];?></span>
    <input class="input-group-field <?php if($result[$datos['variable']]=='Bajo'){echo 
'label success';}else if ($result[$datos['variable']]=='Medio') {echo 
'label primary';}else if ($result[$datos['variable']]=='Alto') {echo 
'label alert';} else{echo 'label warning';}?>" type="url" value="<?php echo $result[$datos['variable']];?>" readonly>
  </div>
              
          

<?php 
            
}  }?>
</div>

<h3>Comentarios</h3>
<input id="comentario" name="comentario"class="form-control"  >
<div class="container">
			<p>&nbsp;</p>
			<p>
			  <input name="cancelar" class="button" type="submit" id="cancelar" href="solicitudesPendientes.php" value="Atras">
			  <input name="rechazada"  class="alert button" type="button" id="rechazada" value="Rechazar">
			  <input name="aceptada" class="success button" type="button" id="aceptada" data-toggle="modal" data-target="#exampleModal" value="Aceptar">
			</p>

 
			<?php
 		  }
		 
		// if(isset($_POST['cancelar'])){?>
			
		<?php ?>
<script type="text/javascript">
 

</script>
	
      </form>
    </div>
  </div>
</section>
<!-- footer -->
<footer>
	<div class="container_24">
		<div class="wrapper">
			<div class="grid_24"><a href="index.html" class="link"></a> &copy; 2012</div>
		</div>
	</div>
</footer>  
</body>

<script type="text/javascript" src="js/validasolicitud.js"></script>
</html>
