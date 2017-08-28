<?php




?>


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
  </style>
<!doctype html>
<html class="no-js" lang="en">
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
       

        obj = JSON.parse(xmlhttp.responseText);
         document.getElementById("per").checked = parseInt(obj.GSolicitudes);
         document.getElementById("per1").checked = parseInt(obj.BSolicitudes);
         document.getElementById("per2").checked = parseInt(obj.GCotizacion);
         document.getElementById("per3").checked = parseInt(obj.BQeQ);
         document.getElementById("per4").checked = parseInt(obj.SetConf);
        
        
        
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
                
                                });




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






</script>

    <script  scr="js/validasolicitud.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
     <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/vendor/app.js"></script>
    
  </body>
</html>


    