var f=new Date();
var ano = f.getFullYear();
var mes = f.getMonth();
var dia = f.getDate();
var estiloDia;
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var diasMes = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
var diaMaximo = diasMes[mes];
if (mes == 1 && (((ano % 4 == 0) && (ano % 100 != 0)) || (ano % 400 == 0)))
   diaMaximo = 29;
document.write('<div class="mifecha2">');
document.write('<div class="mesano">' + meses[mes] + ' ' + ano + ':</div>');

for (i=1; i<=diaMaximo; i++){
   if(i == dia)
      estiloDia = "diaactual";
   else
      estiloDia = "dia";
   document.write('<div class="' + estiloDia + '">' + i + '</div>');
}   
document.write('</div>');

$( function() {
  
      $( "#from" ).datepicker({ dateFormat:'yy-mm-dd',changeMonth: true,changeYear: true});
   
  } );

 function restaFechas()
 {
   var f1 = document.getElementById("from").value;
var f2=document.getElementById("to").value;
 var aFecha1 = f1.split('/'); 
 var aFecha2 = f2.split('/'); 
 var fFecha1 = Date.UTC(aFecha1[2],aFecha1[0],aFecha1[1]-1); 
 var fFecha2 = Date.UTC(aFecha2[2],aFecha2[0],aFecha2[1]-1); 
 var dif = fFecha2 - fFecha1;
 var dias = Math.floor(dif / (1000 * 60 * 60 * 24)); 
 return dias;
 //alert (dias);

 }

function tasaR(){

  var tas=document.getElementById("tasa").value;
  var Importe=document.getElementById("importe").value.replace("$","").replace(/,/gi,"");
  var tasaM=(tas/12)/100;
  var tasaD=(tas/365)/100;
  var intdiario=0;
  intdiario=(Importe*tasaD);
  var a=document.getElementById("auto").value;
    var c=document.getElementById("chasis").value;

  document.getElementById("int").value= formatNumber.new(intdiario.toFixed(2),"$");
  //alert(intdiario.toFixed(2));
//alert(tasaM);
//alert(tasaD);

}
function comprueba(etiqueta,otro){

  //alert(etiqueta);
  document.getElementById("monto").value=formatNumber.new(etiqueta,'$');
 document.getElementById("chas").value=otro;
 //alert(otro);
}

var formatNumber = {
 separador: ",", // separador para los miles
 sepDecimal: '.', // separador para los decimales
 formatear:function (num){
 num +='';
 var splitStr = num.split(',');
 var splitLeft = splitStr[0];
 var splitRight = splitStr.length >1 ? this.sepDecimal + splitStr[1] : '';
 var regx = /(\d+)(\d{3})/;
 while (regx.test(splitLeft)) {
 splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
 }
 return this.simbol + splitLeft +splitRight;
 },
 new:function(num, simbol){
 this.simbol = simbol ||'';
 return this.formatear(num);
 }
}

function formatodenumero(id,valor){
  //alert(valor);
  var numFinal = formatNumber.new(valor,"$");
  document.getElementById(id).value=numFinal;
  //return numFinal;
}
$( function() {
    var dialog, form;
    function addUser() {
      var valid = true;
   
   if(document.getElementById('monto').value==""){
 alert("SE REQUIERE SELLECCION DE CHASIS");
 return false;
    }
 var sub= "funciones.php?monto="+document.getElementById("monto").value.replace("$","").replace(/,/gi,"")+"&chasis="+document.getElementById("chas").value ;
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
        window.location='planpiso.php';
      }
  }
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);

      return valid;
    }
 
    dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 650,
      width: 550,
      modal: true,
      buttons: {
        "Pagar": addUser,
        Cancel: function() {
          dialog.dialog( "close" );
           
        }
      }
    });
 
    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addUser();
    });
 
    $( "#automovil" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });

    $( "#interes" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });
  
  } );




                               
