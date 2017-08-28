$(document).ready(function() {
    $("#form1").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
});

///Mayusculas la primera
function MaysPrimera(string){
  return string.charAt(0).toUpperCase() + string.slice(1);
}
/// Mayusculas primera letra de cada palabra
function ucWords(string) {
    var arrayWords;
    var returnString = "";
    var len;
    arrayWords = string.split(" ");
    len = arrayWords.length;
    for (i = 0; i < len ; i++) {
        if (i != (len - 1)) {
            returnString = returnString + ucFirst(arrayWords[i]) + " ";
        }
        else {
            returnString = returnString + ucFirst(arrayWords[i]);
        }
    }
    return returnString;
}
function ucFirst(string) {
    return string.substr(0, 1).toUpperCase() + string.substr(1, string.length).toLowerCase();
}

function cambio() {
   window.scrollTo(0, 0);

if(document.getElementById("segnomsol").value==""){
var nombreCompleto=MaysPrimera(document.getElementById("nomsol").value)+" "+MaysPrimera(document.getElementById("apepasol").value)+" "+MaysPrimera(document.getElementById("apemasol").value);

document.getElementById("textfield").value=nombreCompleto;
}else{
var nombreCompleto=MaysPrimera(document.getElementById("nomsol").value)+" "+MaysPrimera(document.getElementById("segnomsol").value)+" "+MaysPrimera(document.getElementById("apepasol").value)+" "+MaysPrimera(document.getElementById("apemasol").value);
document.getElementById("textfield").value=nombreCompleto;
}

document.getElementById("textfield2").value=document.getElementById("cliente").value;
document.getElementById("textfield3").value=document.getElementById("dirsol").value;
document.getElementById("textfield4").value=document.getElementById("colsol").value;
//document.getElementById("textfield5").value="";
document.getElementById("textfield6").value=document.getElementById("edosol").value;
document.getElementById("textfield7").value=document.getElementById("fechnacsol").value;
document.getElementById("textfield8").value=document.getElementById("cpsol").value;
document.getElementById("textfield9").value=document.getElementById("cdsol").value;
document.getElementById("textfield10").value=document.getElementById("lugnacsol").value;
document.getElementById("textfield11").value=MaysPrimera(document.getElementById("rfc1").value)+MaysPrimera(document.getElementById("rfc2").value)+MaysPrimera(document.getElementById("rfc3").value)+MaysPrimera(document.getElementById("rfc4").value)+MaysPrimera(document.getElementById("rfc5").value)+MaysPrimera(document.getElementById("rfc6").value)+MaysPrimera(document.getElementById("rfc7").value)+MaysPrimera(document.getElementById("rfc8").value)+MaysPrimera(document.getElementById("rfc9").value)+MaysPrimera(document.getElementById("rfc10").value)+MaysPrimera(document.getElementById("rfc11").value)+MaysPrimera(document.getElementById("rfc12").value)+MaysPrimera(document.getElementById("rfc13").value);



}///cierre del cambio



function cambio2() {
    window.scrollTo(0,0);


document.getElementById("textfield12").value=MaysPrimera(document.getElementById("apepasol").value);
document.getElementById("textfield13").value=MaysPrimera(document.getElementById("apemasol").value);
document.getElementById("textfield14").value=MaysPrimera(document.getElementById("nomsol").value)+" "+MaysPrimera(document.getElementById("segnomsol").value);


var porNombre=document.getElementsByName("sexsol");
if(porNombre[0].checked){
document.getElementById("textfield15").value="Masculino";
}
if(porNombre[1].checked){
document.getElementById("textfield15").value="Femenino";
}
document.getElementById("textfield16").value=document.getElementById("lugnacsol").value;
document.getElementById("textfield17").value=document.getElementById("fechnacsol").value;
document.getElementById("textfield18").value=document.getElementById("dirsol").value;
document.getElementById("textfield19").value=document.getElementById("dirnumsol").value;
document.getElementById("textfield20").value=document.getElementById("cpsol").value;
document.getElementById("textfield21").value=document.getElementById("colsol").value;
document.getElementById("textfield22").value=document.getElementById("textfield5").value;
document.getElementById("textfield23").value=document.getElementById("edosol").value;
document.getElementById("textfield24").value=document.getElementById("cdsol").value;
document.getElementById("textfield25").value=document.getElementById("telsol1").value+document.getElementById("telsol2").value+document.getElementById("telsol3").value+document.getElementById("telsol4").value+document.getElementById("telsol5").value+document.getElementById("telsol6").value+document.getElementById("telsol7").value+document.getElementById("telsol8").value+document.getElementById("telsol9").value+document.getElementById("telsol10").value;

var estadocivil=document.getElementsByName("civilsol");
if(estadocivil[0].checked){
document.getElementById("textfield26").value="Casado Bienes Mancomunados";
}
if(estadocivil[1].checked){
document.getElementById("textfield26").value="Casado Bienes Separados";
}
if(estadocivil[2].checked){
document.getElementById("textfield26").value="Viudo";
}
if(estadocivil[3].checked){
document.getElementById("textfield26").value="Divorciado";
}
if(estadocivil[4].checked){
document.getElementById("textfield26").value="Soltero";
}
document.getElementById("textfield27").value=document.getElementById("mailsol").value;
document.getElementById("textfield28").value=document.getElementById("curpsol").value.toUpperCase();
document.getElementById("textfield29").value=MaysPrimera(document.getElementById("rfc1").value)+MaysPrimera(document.getElementById("rfc2").value)+MaysPrimera(document.getElementById("rfc3").value)+MaysPrimera(document.getElementById("rfc4").value)+MaysPrimera(document.getElementById("rfc5").value)+MaysPrimera(document.getElementById("rfc6").value)+MaysPrimera(document.getElementById("rfc7").value)+MaysPrimera(document.getElementById("rfc8").value)+MaysPrimera(document.getElementById("rfc9").value)+MaysPrimera(document.getElementById("rfc10").value)+MaysPrimera(document.getElementById("rfc11").value)+MaysPrimera(document.getElementById("rfc12").value)+MaysPrimera(document.getElementById("rfc13").value);
document.getElementById("textfield31").value=document.getElementById("nacsol").value;

document.getElementById("textfield33").value = document.getElementById("compasol").value + ' - ' + document.getElementById("giroactreal").value;

document.getElementById("textfield36").value=document.getElementById("depasol").value;

document.getElementById("textfield32").value=document.getElementById("giroprof").value;

document.getElementById("textfield34").value=document.getElementById("domneg").value;

document.getElementById("textfield45").value = MaysPrimera(document.getElementById("benesol1").value);
document.getElementById("textfield46").value = MaysPrimera(document.getElementById("benesol2").value);
document.getElementById("textfield47").value = ucWords(document.getElementById("benesol3").value);


}///cierre del cambio








function myFunction(x, y, sig) {
    if (y.length == x.maxLength) {
        sig.focus();
        sig.select();
    }
    if (y.length > x.maxLength) {
        
        x.value = "";
        x.focus();
        x.select();
    }
    
}


function mayorEdad(x, y) {
    if (y.length == x.maxLength) {
        if (x.value < 18) { alert("No Es Mayor de Edad"); x.value = ""; }

    }
    if (y.length > x.maxLength) {

        x.value = "";
        x.focus();
        x.select();
    }

}





function solicitudRealizada() {
    document.getElementById("identificacion").style.display = 'none';
    document.getElementById("layerFinal").style.display = 'block';
}


function ingresosPagina3() {
    var suma = parseFloat(0);
    if (document.getElementById("textfield65").value!="") { suma = parseFloat(document.getElementById("textfield65").value); }
    if (document.getElementById("textfield67").value != "") { suma += parseFloat(document.getElementById("textfield67").value); }
    if (document.getElementById("textfield69").value != "") { suma += parseFloat(document.getElementById("textfield69").value); }
    if (document.getElementById("textfield71").value != "") { suma += parseFloat(document.getElementById("textfield71").value); }
    if (document.getElementById("textfield73").value != "") { suma += parseFloat(document.getElementById("textfield73").value); }
    if (document.getElementById("textfield75").value != "") { suma += parseFloat(document.getElementById("textfield75").value); }
    if (document.getElementById("textfield77").value != "") { suma += parseFloat(document.getElementById("textfield77").value); }
    if (document.getElementById("textfield79").value != "") { suma += parseFloat(document.getElementById("textfield79").value); }
    if (document.getElementById("textfield81").value != "") { suma += parseFloat(document.getElementById("textfield81").value); }
    if (document.getElementById("textfield83").value != "") { suma += parseFloat(document.getElementById("textfield83").value); }
    document.getElementById("textfield85").value = parseFloat(suma.toFixed(2));
}

function datosAuto() {
    ///PORCENTAJE
    var porcentaje = (parseFloat(document.getElementById("textfield87").value) * 100) / parseFloat(document.getElementById("textfield86").value);
    document.getElementById("textfield88").value = porcentaje.toFixed(2)+" %";
    var porFinanciado = 100 - porcentaje.toFixed(2);
    document.getElementById("textfield89").value = porFinanciado.toFixed(2)+" %";
    var monFincanciado = parseFloat(document.getElementById("textfield86").value) - parseFloat(document.getElementById("textfield87").value);
    document.getElementById("textfield90").value = monFincanciado.toFixed(2);
   
}

function validaNumeroDecimal(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    //patron = /[0-9.]/;
    patron = /^\d*\.?\d*$/;
    
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validaNumero(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validaTexto(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8 || tecla == 32) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron = /[a-zA-ZñÑ]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validaRFC(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron = /[a-zA-Z0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validaEmail(email) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!expr.test(email)) {
        alert("Error: La dirección de correo " + email + " es incorrecta.");
        return true;
    } else {
        return false;
    }
        
}


function obten() {
     
var sub = "ObtenInfo.php?dato="+document.getElementById("cliente").value;
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
     if(xmlhttp.responseText!="cliente no encontrado"){
        
            $("#htmlext").load("solicitudPFNA.php?cliente="+xmlhttp.responseText);
            
            
        }else{
            alert(xmlhttp.responseText);
            document.getElementById("cliente").value="";
        }

      }
  }
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);
}

function obten2() {
var sub = "ObtenInfo.php?nombre="+document.getElementById("nomsol").value+"&segundo="+document.getElementById("segnomsol").value+"&paterno="+document.getElementById("apepasol").value+"&materno="+document.getElementById("apemasol").value;
//var sub = "ObtenInfo2.php?nombre=adrian&segundo=eduardo&paterno=mata&materno=martinez";


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
        
        if(xmlhttp.responseText!="cliente no encontrado"){
           
            document.getElementById("exampleModal2").innerHTML=xmlhttp.responseText;
            $( '#modal' ).click ();
            //$("#htmlext").load("solicitudPFNA.php?cliente="+xmlhttp.responseText);

            
        }else{
            alert(xmlhttp.responseText);

        }
     

      }
  }
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);
}

function viewButton(){

  if(document.getElementById("nomsol").value!="" && document.getElementById("apepasol").value!=""){
  
    document.getElementById("botonAceptar").style.display="block";
  }else{
    
    document.getElementById("botonAceptar").style.display="none";
  }
}
