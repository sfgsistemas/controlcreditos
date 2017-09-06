  <style>
.loader {
  color: #000;
  font-size: 15px;
  text-indent: -9999em;
  overflow: hidden;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  margin: 2px;
  position: relative;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation: load6 1.7s infinite ease, round 1.7s infinite ease;
  animation: load6 1.7s infinite ease, round 1.7s infinite ease;
  }
@-webkit-keyframes load6 {
  0% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  5%,
  95% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  10%,
  59% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
  }
  20% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
  }
  38% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
  }
  100% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  }
@keyframes load6 {
  0% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  5%,
  95% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  10%,
  59% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
  }
  20% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
  }
  38% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
  }
  100% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  }
@-webkit-keyframes round {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
  }
@keyframes round {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
  }
  input[type=checkbox].css-checkbox {
              position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0;
            }

            input[type=checkbox].css-checkbox + label.css-label {
              padding-left:29px;
              height:24px; 
              display:inline-block;
              line-height:24px;
              background-repeat:no-repeat;
              background-position: 0 0;
              font-size:24px;
              vertical-align:middle;
              cursor:pointer;

            }

            input[type=checkbox].css-checkbox:checked + label.css-label {
              background-position: 0 -24px;
            }
            label.css-label {
        background-image:url(images/csscheckbox_4f6bc9a7cc47504b9c36e04aa489f19e.png);
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }


#scrolledtablet{
overflow: auto;
width: auto;
height: 200px; /*establece la altura máxima, lo que no entre quedará por debajo y saldra la barra de scroll*/
}



  </style>
<!doctype html>
<html  lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
      <script src="js/vendor/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="js/js/css/foundation.css">
    <link rel="stylesheet" href="js/js/css/foundation.min.css">
    <link rel="stylesheet" href="js/js/css/app.css">
    <link rel="stylesheet" href="js/js/css/foundation-icons/foundation-icons.css">
     <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
  </head>
  <body>
    

<div class="menu-centered">
  <ul class='tabs' data-tabs id='example-tabs'>
  <li class='tabs-title'><a href='#panel1' id="tab1" aria-selected='true'>Tipo de Créditos</a></li>
  <li class='tabs-title'><a href='#panel2' id="tab2">Usuarios</a></li>
  <li class='tabs-title'><a href='#panel3' id="tab3">Otros</a></li>

</ul>
</div>




   <div class='tabs-content' data-tabs-content='example-tabs'>


<div class="tabs-panel" id="panel1">
    <div id="panel1A"></div>
    <input name="updatecreditos" class="button" type="button" id="updatecreditos"  value="Modificar">
 </div>

<div class="tabs-panel" id="panel2">
    <div id="panel2A"></div>
    <input class="button" type="button" name="agreguser" id="agreguser" data-open="subiruser" value="Agregar Usuario">
    <input class="button" type="button" name="modifuser" id="modifuser" data-open="modalmodifuser" value="Modificar Usuario">
    <input class="button" type="button" name="elimuser" id="elimuser" value="Eliminar Usuario" data-open="modaleliminauser">


<div class="reveal" id="subiruser" data-reveal>
  <h4>Agregar Usuario</h4>
<form id="fomruploaduser" action="" method="POST" data-abide novalidate >
<div class="row" id="inputssubir">
<p align="left">
  
  <div class="medium-4 columns">
    <label>
      Usuario:
      <input type="text" id="usernick" name="usernick" maxlength="10">
    </label>
  </div>
<div class="medium-4 columns">
  <label>
      Password:
      <input type="password" id="userpass" name="userpass" maxlength="10">
    </label>
</div>
<div class="medium-4 columns">
  <label>
      Repetir password:
      <input type="password" id="userpass2" name="userpass2" maxlength="10">
    </label>
</div>
<div class="medium-6 columns">
  <label>
      Nombre:
      <input type="text" id="usernombre" name="usernombre">
    </label>
</div>



</p>
</div>
<div class="medium-2 columns">
  <label>
      <input class="button" type="button" id="botonuploatuser" name="botonuploatuser" value="Agregar">
    </label>
</div>
</form>


  


  <button class="close-button" data-close aria-label="Close reveal" type="button" id="cerrarmodalreguser">
    <span aria-hidden="true">&times;</span>
  </button>
  

</div>

<div class="reveal" id="modaleliminauser" data-reveal>
  <h4>Elimina Usuario</h4>

<div class="row">
<p align="left">
<table id="tablaeliminauser">
  <thead>
    <tr>
      <td>ID</td>
      <td>User</td>
      <td>Nombre</td>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>



</p>
</div>


  <button class="close-button" data-close aria-label="Close reveal" type="button" id="cerrarmodaldeluser">
    <span aria-hidden="true">&times;</span>
  </button>
  

</div>

<div class="reveal" id="modalmodifuser" data-reveal>
  <h4>Modificar Usuario</h4>

<div class="row">
<p align="left">
<div id="scrolledtablet">
<table id="tablamodificauser" >
  <thead>
    <tr>
      <td>ID</td>
      <td>User</td>
      <td>Nombre</td>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>

</div>

</p>
</div>
<div class="row" id="contenidomodificauser">
  <label>
    ID:
    <input type="text" id="idusermod" name="idusermod" readonly="">
  </label>
  <label>
    Modificar nombre del responsable:
    <input type="text" id="modnombrerespon" name="modnombrerespon">
  </label>
  <label>
    Modifica Constraseña:
    <input type="password" id="passmoduser" name="passmoduser">
  </label>
  <label>
    Repite Constraseña:
    <input type="password" id="passmoduser2" name="passmoduser2">
  </label>
</div>
<div class="row">
  <input class="button" type="button" id="botonparamodificar" name="botonparamodificar" value="Modificar">
</div>


  <button class="close-button" data-close aria-label="Close reveal" type="button" id="cerrarmodalmodifuser">
    <span aria-hidden="true">&times;</span>
  </button>
  

</div>





   <div class="reveal" id="exampleModal2" data-reveal>
  <h1>Permisos!</h1>
<div class="row">
<p align="left">
  <div class="small-6 columns">
    
  <input class="css-checkbox" type="checkbox" name="per" id="per"> <label for="per" class="css-label">Crear Solicitud</label>
  </div>
<div class="small-5 columns">
  
  <input class="css-checkbox" type="checkbox" name="per" id="per2"> <label for="per2" class="css-label">Cotizacion</label>
</div>
<div class="small-7 columns">
  
  <input class="css-checkbox" type="checkbox" name="per" id="per1" checked> <label for="per1" class="css-label">Buscar Solicitudes</label>
</div>
  <div class="small-6 columns">
    
  <input class="css-checkbox" type="checkbox" name="per" id="per3"><label for="per3" class="css-label"> QeQ</label>
  </div>
<div class="small-6 columns">
  <input class="css-checkbox" type="checkbox" name="per" id="per4"> <label for="per4" class="css-label">Configuracion</label>
</div>
</p>
</div>


  


  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>

<div class="tabs-panel" id="panel3" >
   
</div>
<script>
function obtendatos(elementoid){

  var data = new FormData();


   data.append('panel', 'obtendata');
   data.append('dataid', elementoid);


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
       

        permisos = JSON.parse(xmlhttp.responseText);
         document.getElementById("per").checked = parseInt(permisos.GSolicitudes);
         document.getElementById("per1").checked = parseInt(permisos.BSolicitudes);
         document.getElementById("per2").checked = parseInt(permisos.GCotizacion);
         document.getElementById("per3").checked = parseInt(permisos.BQeQ);
         document.getElementById("per4").checked = parseInt(permisos.SetConf);
        
        
        
      }
  }
xmlhttp.open("POST","confdata.php",true);
xmlhttp.send(data);
}


$("#tab1").click(function(event) {
 

   var data = new FormData();


   data.append('panel', 'panel1');

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
        document.getElementById("panel1A").innerHTML = xmlhttp.responseText;
        
        

        
      }
  }
xmlhttp.open("POST","confdata.php",true);
xmlhttp.send(data);
                
                                });

$("#tab2").click(function(event) {
 obtieneusuarios();

   
                                });

function obtieneusuarios(){
var data = new FormData();


   data.append('panel', 'panel2');

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
        document.getElementById("panel2A").innerHTML = xmlhttp.responseText;
        
        

        
      }
  }
xmlhttp.open("POST","confdata.php",true);
xmlhttp.send(data);
                
}


$("#updatecreditos").click(function(event) {
 

   var data = new FormData();


   data.append('panel', 'updatepanel1');

   data.append('tasa_1', document.getElementById("tasa_1").value);
   data.append('tasa_2', document.getElementById("tasa_2").value);
   data.append('tasa_3', document.getElementById("tasa_3").value);
   data.append('tasa_4', document.getElementById("tasa_4").value);
   data.append('tasa_5', document.getElementById("tasa_5").value);
   data.append('tasa_6', document.getElementById("tasa_6").value);
   data.append('tasa_7', document.getElementById("tasa_7").value);
   data.append('tasa_8', document.getElementById("tasa_8").value);
   data.append('tasa_9', document.getElementById("tasa_9").value);
   data.append('tasa_10', document.getElementById("tasa_10").value);
   data.append('tasa_11', document.getElementById("tasa_11").value);
   data.append('tasa_12', document.getElementById("tasa_12").value);
  
   data.append('comision_1', document.getElementById("comision_1").value);
   data.append('comision_2', document.getElementById("comision_2").value);
   data.append('comision_3', document.getElementById("comision_3").value);
   data.append('comision_4', document.getElementById("comision_4").value);
   data.append('comision_5', document.getElementById("comision_5").value);
   data.append('comision_6', document.getElementById("comision_6").value);
   data.append('comision_7', document.getElementById("comision_7").value);
   data.append('comision_8', document.getElementById("comision_8").value);
   data.append('comision_9', document.getElementById("comision_9").value);
   data.append('comision_10', document.getElementById("comision_10").value);
   data.append('comision_11', document.getElementById("comision_11").value);
   data.append('comision_12', document.getElementById("comision_12").value);






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
xmlhttp.open("POST","confdata.php",true);
xmlhttp.send(data);
                
                                });


$("#botonuploatuser").click(function(event) {
    if(document.getElementById('usernick').value!='' || document.getElementById('userpass').value!=''|| document.getElementById('userpass2').value!='' || document.getElementById('usernombre').value!='' ){
      document.getElementById('usernick').required=true;
      document.getElementById('userpass').required=true;
      document.getElementById('userpass2').required=true;
      document.getElementById('usernombre').required=true;
    }else{
      document.getElementById('usernick').required=false;
      document.getElementById('userpass').required=false;
      document.getElementById('userpass2').required=false;
      document.getElementById('usernombre').required=false;
    }


     $('#fomruploaduser').foundation('validateForm');



    if(document.getElementById('userpass').value != document.getElementById('userpass2').value){
      
      $( "#userpass" ).addClass( "is-invalid-input" );
      $( "#userpass2" ).addClass( "is-invalid-input" );
    }else{
      $( "#userpass" ).removeClass( "is-invalid-input" );
      $( "#userpass2" ).removeClass( "is-invalid-input" );
    }

   



var validacion=false;
/*
$( "#panel1f-label" ).removeClass( "is-invalid-input" );
$( "#panel2d-label" ).removeClass( "is-invalid-input" );
$( "#panel3d-label" ).removeClass( "is-invalid-input" );
$( "#panel4c-label" ).removeClass( "is-invalid-input" );
$( "#panel5c-label" ).removeClass( "is-invalid-input" );
$( "#panel6c-label" ).removeClass( "is-invalid-input" );
$( "#panel7c-label" ).removeClass( "is-invalid-input" );
$( "#panel8c-label" ).removeClass( "is-invalid-input" );
$( "#panel9c-label" ).removeClass( "is-invalid-input" );
*/
   

    
$('#fomruploaduser').find('input').each(function(){ 
  console.log(this.id);

    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        //$( "#panel1f-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });



    if(validacion){
         console.log("Hay errores");
         alert("¡¡Verifica Que Todos Los Datos Sean Correctos!!");
         return validacion;
    }


   var data = new FormData(document.forms['fomruploaduser']);
   data.append('function', "subir");


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
         if(xmlhttp.responseText.indexOf('Error') !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
        //alert(xmlhttp.responseText);
        $( "#cerrarmodalreguser" ).click();
        
         obtieneusuarios();
        

        
      }
  }
xmlhttp.open("POST","users.php",true);
xmlhttp.send(data);
                
                                });

$("#elimuser").click(function(event) {
  
   var data = new FormData();
   data.append('function', "obtienelosusers");
   
   //data.append('id', obj.id);

   //data.append('TipoCliente', "df");
   
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

        
        $("#tablaeliminauser tbody tr").remove();
        //alert(xmlhttp.responseText);
        obJ = JSON.parse(xmlhttp.responseText);
        
        $.each(obJ, function(i,solicitud){
            var newRow =
            "<tr>"
            +"<td> <input onclick='eliminaruser(this.id)' class='button' type='button' name='"+solicitud.id+"' id='"+solicitud.id+"' value='"+solicitud.id+"'></td>";

            newRow+="<td>"+solicitud.user+"</td>";
            newRow+="<td>"+solicitud.nombre+"</td>";





            newRow+="</tr>";

            
           
            $(newRow).appendTo("#tablaeliminauser tbody");
        });
        
        
        
      }
  }
xmlhttp.open("POST","users.php",true);
xmlhttp.send(data);

   
                
                                });

function eliminaruser(id){
    var data = new FormData();
   data.append('function', "eliminar");
   data.append('id', id);


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
         if(xmlhttp.responseText.indexOf('Error') !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
        alert(xmlhttp.responseText);
        $( "#cerrarmodaldeluser" ).click();
        
         obtieneusuarios();
        

        
      }
  }
xmlhttp.open("POST","users.php",true);
xmlhttp.send(data);
}




$("#modifuser").click(function(event) {
  
   var data = new FormData();
   data.append('function', "obtienelosusers");
   
   //data.append('id', obj.id);

   //data.append('TipoCliente', "df");
   
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

        
        $("#tablamodificauser tbody tr").remove();
        //alert(xmlhttp.responseText);
        obJ = JSON.parse(xmlhttp.responseText);
        
        $.each(obJ, function(i,solicitud){
            var newRow =
            "<tr>"
            +"<td> <input onclick='idamodificar(this.id)' class='button' type='button' name='"+solicitud.id+"' id='"+solicitud.id+"' value='"+solicitud.id+"'></td>";

            newRow+="<td>"+solicitud.user+"</td>";
            newRow+="<td>"+solicitud.nombre+"</td>";





            newRow+="</tr>";

            
           
            $(newRow).appendTo("#tablamodificauser tbody");
        });
        
        
        
      }
  }
xmlhttp.open("POST","users.php",true);
xmlhttp.send(data);

   
                
                                });
function idamodificar(id){
  document.getElementById('idusermod').value=id;
}


$("#botonparamodificar").click(function(event) {
 


     //$('#modalmodifuser').foundation('validateForm');



    if(document.getElementById('passmoduser').value != document.getElementById('passmoduser2').value){
      
      $( "#passmoduser" ).addClass( "is-invalid-input" );
      $( "#passmoduser2" ).addClass( "is-invalid-input" );
    }else{
      $( "#passmoduser" ).removeClass( "is-invalid-input" );
      $( "#passmoduser2" ).removeClass( "is-invalid-input" );
    }

   



var validacion=false;
/*
$( "#panel1f-label" ).removeClass( "is-invalid-input" );
$( "#panel2d-label" ).removeClass( "is-invalid-input" );
$( "#panel3d-label" ).removeClass( "is-invalid-input" );
$( "#panel4c-label" ).removeClass( "is-invalid-input" );
$( "#panel5c-label" ).removeClass( "is-invalid-input" );
$( "#panel6c-label" ).removeClass( "is-invalid-input" );
$( "#panel7c-label" ).removeClass( "is-invalid-input" );
$( "#panel8c-label" ).removeClass( "is-invalid-input" );
$( "#panel9c-label" ).removeClass( "is-invalid-input" );
*/
   

    
$('#modalmodifuser').find('input').each(function(){ 
  console.log(this.id);

    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        //$( "#panel1f-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });



    if(validacion){
         console.log("Hay errores");
         alert("¡¡Verifica Que Todos Los Datos Sean Correctos!!");
         return validacion;
    }


var data = new FormData();
   data.append('function', "modificaruser");
   data.append('id', document.getElementById('idusermod').value);
   data.append('pass', document.getElementById('passmoduser').value);
   data.append('responsable', document.getElementById('modnombrerespon').value);



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
         if(xmlhttp.responseText.indexOf('Error') !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
        alert(xmlhttp.responseText);
        $( "#cerrarmodalmodifuser" ).click();
        
         obtieneusuarios();
        

        
      }
  }
xmlhttp.open("POST","users.php",true);
xmlhttp.send(data);
                
                                });



$("#per").change(function (event) {
  if(document.getElementById('per').checked){
    var permiso=1;
  }else{
    var permiso=0;
  }



var data = new FormData();
   data.append('function', "cambiapermisos");
   data.append('id', permisos.id);
   data.append('permite', permiso);
   data.append('permiso', 'GSolicitudes');




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
         if(xmlhttp.responseText.indexOf('Error') !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
        //alert(xmlhttp.responseText);
        
        
         obtieneusuarios();
        

        
      }
  }
xmlhttp.open("POST","users.php",true);
xmlhttp.send(data);


});

$("#per1").change(function (event) {
  if(document.getElementById('per1').checked){
    var permiso=1;
  }else{
    var permiso=0;
  }



var data = new FormData();
   data.append('function', "cambiapermisos");
   data.append('id', permisos.id);
   data.append('permite', permiso);
   data.append('permiso', 'BSolicitudes');




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
         if(xmlhttp.responseText.indexOf('Error') !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
        //alert(xmlhttp.responseText);
        
        
         obtieneusuarios();
        

        
      }
  }
xmlhttp.open("POST","users.php",true);
xmlhttp.send(data);


});

$("#per2").change(function (event) {
  if(document.getElementById('per2').checked){
    var permiso=1;
  }else{
    var permiso=0;
  }



var data = new FormData();
   data.append('function', "cambiapermisos");
   data.append('id', permisos.id);
   data.append('permite', permiso);
   data.append('permiso', 'GCotizacion');




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
         if(xmlhttp.responseText.indexOf('Error') !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
        //alert(xmlhttp.responseText);
        
        
         obtieneusuarios();
        

        
      }
  }
xmlhttp.open("POST","users.php",true);
xmlhttp.send(data);


});

$("#per3").change(function (event) {
  if(document.getElementById('per3').checked){
    var permiso=1;
  }else{
    var permiso=0;
  }



var data = new FormData();
   data.append('function', "cambiapermisos");
   data.append('id', permisos.id);
   data.append('permite', permiso);
   data.append('permiso', 'BQeQ');




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
         if(xmlhttp.responseText.indexOf('Error') !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
        //alert(xmlhttp.responseText);
        
        
         obtieneusuarios();
        

        
      }
  }
xmlhttp.open("POST","users.php",true);
xmlhttp.send(data);


});

$("#per4").change(function (event) {
  if(document.getElementById('per4').checked){
    var permiso=1;
  }else{
    var permiso=0;
  }



var data = new FormData();
   data.append('function', "cambiapermisos");
   data.append('id', permisos.id);
   data.append('permite', permiso);
   data.append('permiso', 'SetConf');




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
         if(xmlhttp.responseText.indexOf('Error') !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
        //alert(xmlhttp.responseText);
        
        
         obtieneusuarios();
        

        
      }
  }
xmlhttp.open("POST","users.php",true);
xmlhttp.send(data);


});

</script>
    <script scr="js/users.js"></script>
    <script  scr="js/validasolicitud.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
     <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/vendor/app.js"></script>
    
  </body>
</html>


    