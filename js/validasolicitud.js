 $("#aceptada").click(function(event) {
 
var sub= "sub3.php?comentario="+document.getElementById("comentario").value+"&id="+ document.getElementById("res").value+"&status=Aceptada" ;
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
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);
                $("#htmlext").load('solicitudesPendientes.php');
                                });

    $("#rechazada").click(function(event) {

   if(document.getElementById('comentario').value==""){
 alert("SE REQUIERE MOTIVO DE RECHAZO EN COMENTARIOS");
 return false;
    }
 var sub= "sub3.php?comentario="+document.getElementById("comentario").value+"&id="+ document.getElementById("res").value+"&status=Rechazada" ;
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
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);

               $("#htmlext").load('solicitudesPendientes.php');
                                });