<?php
    $cliente=$_GET['cliente'];
    
    include("Conexion2.php");
    $result = mysqli_query($cnx,"select * from solicitudes where cliente='$cliente' and TipoSolicitud='PFNA' order by Id desc");
    if(!mysqli_num_rows($result)>0){
        echo "Error El Cliente No Corresponde a PFNA";
        exit;
    }
    while($row=mysqli_fetch_array($result)){




    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.responsivemenu.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/forms.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.responsivemenu.js"></script>
<script src="js/FF-cash.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#form1").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
});


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


function cambio(){
  if (!validaEspaciosSolos()) {
        return false;
    }
document.getElementById("solicitud").style.display = 'none';


if(document.getElementById("segnomsol").value==""){
var nombreCompleto=MaysPrimera(document.getElementById("nomsol").value)+" "+MaysPrimera(document.getElementById("apepasol").value)+" "+MaysPrimera(document.getElementById("apemasol").value);

document.getElementById("textfield").value=nombreCompleto;
}else{
var nombreCompleto=MaysPrimera(document.getElementById("nomsol").value)+" "+MaysPrimera(document.getElementById("segnomsol").value)+" "+MaysPrimera(document.getElementById("apepasol").value)+" "+MaysPrimera(document.getElementById("apemasol").value);
document.getElementById("textfield").value=nombreCompleto;
}
document.getElementById("riesgo").style.display = 'block';
document.getElementById("textfield2").value=document.getElementById("cliente").value;
document.getElementById("textfield3").value=document.getElementById("dirsol").value;
document.getElementById("textfield4").value=document.getElementById("colsol").value;
//document.getElementById("textfield5").value="";
document.getElementById("textfield6").value=document.getElementById("edosol").value;
document.getElementById("textfield7").value=document.getElementById("fechnacsol3").value+"-"+document.getElementById("fechnacsol2").value+"-"+document.getElementById("fechnacsol1").value;
document.getElementById("textfield8").value=document.getElementById("cpsol").value;
document.getElementById("textfield9").value=document.getElementById("cdsol").value;
document.getElementById("textfield10").value=document.getElementById("lugnacsol").value;
document.getElementById("textfield11").value=MaysPrimera(document.getElementById("rfc1").value)+MaysPrimera(document.getElementById("rfc2").value)+MaysPrimera(document.getElementById("rfc3").value)+MaysPrimera(document.getElementById("rfc4").value)+MaysPrimera(document.getElementById("rfc5").value)+MaysPrimera(document.getElementById("rfc6").value)+MaysPrimera(document.getElementById("rfc7").value)+MaysPrimera(document.getElementById("rfc8").value)+MaysPrimera(document.getElementById("rfc9").value)+MaysPrimera(document.getElementById("rfc10").value)+MaysPrimera(document.getElementById("rfc11").value)+MaysPrimera(document.getElementById("rfc12").value)+MaysPrimera(document.getElementById("rfc13").value);

window.scrollTo(0, 0);

}///cierre del cambio

function cambio2(){
if (! validaEspaciosSolos2()) {
        return false;
    }
document.getElementById("riesgo").style.display = 'none';

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
document.getElementById("textfield17").value=document.getElementById("fechnacsol3").value+"-"+document.getElementById("fechnacsol2").value+"-"+document.getElementById("fechnacsol1").value;
document.getElementById("textfield18").value=document.getElementById("dirsol").value;
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


document.getElementById("identificacion").style.display = 'block';

window.scrollTo(0, 0);


}///cierre del cambio





function regreso(){
document.getElementById("riesgo").style.display = 'none';

document.getElementById("solicitud").style.display = 'block';
window.scrollTo(0, 0);
}

function regreso2(){
document.getElementById("identificacion").style.display = 'none';

document.getElementById("riesgo").style.display = 'block';
window.scrollTo(0, 0);
}



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


function validaEspaciosSolos() {
    ///TIPO DE CREDITO
    if (!document.getElementsByName("tipocredito")[0].checked && !document.getElementsByName("tipocredito")[1].checked && !document.getElementsByName("tipocredito")[2].checked) {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("tipocredito").focus();
        document.getElementById("tipocredito").select();
        return false;
    }

    /////PRIMERA SECCION ---- SECCION DEL SOLICITANTE
    if (document.getElementById("nomsol").value != "" || document.getElementById("apepasol").value != "" || document.getElementById("apemasol").value != "") {///VALIDACION DE NOMBRE Y APRELLIDOS
        ///ELEMENTOS DE LA SECCION DEL SOLICITANTE
        if (document.getElementById("rfc1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("rfc1").focus();
            document.getElementById("rfc1").select();
            return false;
        }
        if (document.getElementById("rfc2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("rfc2").focus();
            document.getElementById("rfc2").select();
            return false;
        }
        if (document.getElementById("rfc3").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("rfc3").focus();
            document.getElementById("rfc3").select();
            return false;
        }
        if (document.getElementById("rfc4").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("rfc4").focus();
            document.getElementById("rfc4").select();
            return false;
        }
        if (document.getElementById("rfc5").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("rfc5").focus();
            document.getElementById("rfc5").select();
            return false;
        }
        if (document.getElementById("rfc6").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("rfc6").focus();
            document.getElementById("rfc6").select();
            return false;
        }
        if (document.getElementById("rfc7").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("rfc7").focus();
            document.getElementById("rfc7").select();
            return false;
        }
        if (document.getElementById("rfc8").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("rfc8").focus();
            document.getElementById("rfc8").select();
            return false;
        }
        if (document.getElementById("rfc9").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("rfc9").focus();
            document.getElementById("rfc9").select();
            return false;
        }
        if (document.getElementById("rfc10").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("rfc10").focus();
            document.getElementById("rfc10").select();
            return false;
        }
        if (document.getElementById("rfc11").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("rfc11").focus();
            document.getElementById("rfc11").select();
            return false;
        }
        if (document.getElementById("rfc12").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("rfc12").focus();
            document.getElementById("rfc12").select();
            return false;
        }
        if (document.getElementById("rfc13").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("rfc13").focus();
            document.getElementById("rfc13").select();
            return false;
        }
        /////TERMINA DATOS DEL RFC
        ////INICIA DATOS DEL TEL PERTICULAR
        if (document.getElementById("telsol1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telsol1").focus();
            document.getElementById("telsol1").select();
            return false;
        }
        if (document.getElementById("telsol2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telsol2").focus();
            document.getElementById("telsol2").select();
            return false;
        }
        if (document.getElementById("telsol3").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telsol3").focus();
            document.getElementById("telsol3").select();
            return false;
        }
        if (document.getElementById("telsol4").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telsol4").focus();
            document.getElementById("telsol4").select();
            return false;
        }
        if (document.getElementById("telsol5").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telsol5").focus();
            document.getElementById("telsol5").select();
            return false;
        }
        if (document.getElementById("telsol6").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telsol6").focus();
            document.getElementById("telsol6").select();
            return false;
        }
        if (document.getElementById("telsol7").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telsol7").focus();
            document.getElementById("telsol7").select();
            return false;
        }
        if (document.getElementById("telsol8").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telsol8").focus();
            document.getElementById("telsol8").select();
            return false;
        }
        if (document.getElementById("telsol9").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telsol9").focus();
            document.getElementById("telsol9").select();
            return false;
        }
        if (document.getElementById("telsol10").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telsol10").focus();
            document.getElementById("telsol10").select();
            return false;
        }
        ////TERMINA DATOS TEL PARTICULAR
        ////INICIA DATOS TEL MOVIL
        if (document.getElementById("movsol1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("movsol1").focus();
            document.getElementById("movsol1").select();
            return false;
        }
        if (document.getElementById("movsol2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("movsol2").focus();
            document.getElementById("movsol2").select();
            return false;
        }
        if (document.getElementById("movsol3").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("movsol3").focus();
            document.getElementById("movsol3").select();
            return false;
        }
        if (document.getElementById("movsol4").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("movsol4").focus();
            document.getElementById("movsol4").select();
            return false;
        }
        if (document.getElementById("movsol5").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("movsol5").focus();
            document.getElementById("movsol5").select();
            return false;
        }
        if (document.getElementById("movsol6").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("movsol6").focus();
            document.getElementById("movsol6").select();
            return false;
        }
        if (document.getElementById("movsol7").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("movsol7").focus();
            document.getElementById("movsol7").select();
            return false;
        }
        if (document.getElementById("movsol8").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("movsol8").focus();
            document.getElementById("movsol8").select();
            return false;
        }
        if (document.getElementById("movsol9").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("movsol9").focus();
            document.getElementById("movsol9").select();
            return false;
        }
        if (document.getElementById("movsol10").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("movsol10").focus();
            document.getElementById("movsol10").select();
            return false;
        }
        ////TERMINA TEL MOVIL 
        /////INICIA FAX


        /////TERMINA FAX


        //DIRECCION
        if (document.getElementById("dirsol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("dirsol").focus();
            document.getElementById("dirsol").select();
            return false;
        }
        //NUMERO
        if (document.getElementById("dirnumsol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("dirnumsol").focus();
            document.getElementById("dirnumsol").select();
            return false;
        }
        //EMAIL
        
        if (document.getElementById("mailsol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("mailsol").focus();
            document.getElementById("mailsol").select();
            return false;
        } else {
            if (validaEmail(document.getElementById("mailsol").value)) {
                document.getElementById("mailsol").focus();
                document.getElementById("mailsol").select();
                return false;
            }
            
        }
        //COLONIA
        if (document.getElementById("colsol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("colsol").focus();
            document.getElementById("colsol").select();
            return false;
        }
        //CIUDAD
        if (document.getElementById("cdsol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("cdsol").focus();
            document.getElementById("cdsol").select();
            return false;
        }
        //LUGARDE NACIMIENTO
        if (document.getElementById("lugnacsol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("lugnacsol").focus();
            document.getElementById("lugnacsol").select();
            return false;
        }
        //ESTADO
        if (document.getElementById("edosol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("edosol").focus();
            document.getElementById("edosol").select();
            return false;
        }
        //C.P.
        if (document.getElementById("cpsol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("cpsol").focus();
            document.getElementById("cpsol").select();
            return false;
        }
        //CURP
        if (document.getElementById("curpsol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("curpsol").focus();
            document.getElementById("curpsol").select();
            return false;
        }
        //SEXO - GENERO
        if (!document.getElementsByName("sexsol")[0].checked && !document.getElementsByName("sexsol")[1].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("sexsol").focus();
            document.getElementById("sexsol").select();
            return false;
        }
        ///FEHCA DE NACIMIENTO
        if (document.getElementById("fechnacsol1").value == "" || document.getElementById("fechnacsol1").value.length < 2 || document.getElementById("fechnacsol1").value > 31.9 || document.getElementById("fechnacsol1").value<0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("fechnacsol1").focus();
            document.getElementById("fechnacsol1").select();
            return false;
        }
        if (document.getElementById("fechnacsol2").value == "" || document.getElementById("fechnacsol2").value.length < 2 || document.getElementById("fechnacsol2").value > 12.9 || document.getElementById("fechnacsol2").value < 0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("fechnacsol2").focus();
            document.getElementById("fechnacsol2").select();
            return false;
        }
        if (document.getElementById("fechnacsol3").value == "" || document.getElementById("fechnacsol3").value.length < 4 || document.getElementById("fechnacsol3").value < 1900) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("fechnacsol3").focus();
            document.getElementById("fechnacsol3").select();
            return false;
        }
        ///EDAD
        if (document.getElementById("edsol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("edsol").focus();
            document.getElementById("edsol").select();
            return false;
        }
        ////NACIMIENTO
        if (document.getElementById("nacsol").value == "" || !/[a-zA-Z]/.test(document.getElementById("nacsol").value)) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("nacsol").focus();
            document.getElementById("nacsol").select();
            return false;
        }
        ///DEPENDIENTES
        if (document.getElementById("depensol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("depensol").focus();
            document.getElementById("depensol").select();
            return false;
        }
        ///ACREDITA DOMICILIO 1
        if (document.getElementById("acdomsol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("acdomsol").focus();
            document.getElementById("acdomsol").select();
            return false;
        }
        ///VIVEN EN 
        if (!document.getElementsByName("vivsol")[0].checked && !document.getElementsByName("vivsol")[1].checked && !document.getElementsByName("vivsol")[2].checked && !document.getElementsByName("vivsol")[3].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("vivsol").focus();
            document.getElementById("vivsol").select();
            return false;
        }
        ///ESPECIFICACIÓN DE importe mensual de pago
        /*if (document.getElementById("vivsolesp").value == "" && document.getElementsByName("vivsol")[4].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("vivsolesp").focus();
            document.getElementById("vivsolesp").select();
            return false;
        }*/
        if (!document.getElementsByName("inmusol")[0].checked && !document.getElementsByName("inmusol")[1].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("inmusol").focus();
            document.getElementById("inmusol").select();
            return false;
        }
       /* ///RESIDIR EN LA CD 
        if (document.getElementById("anosol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("anosol").focus();
            document.getElementById("anosol").select();
            return false;
        }*/
        ///ARRAIGO DOMICILIO
        if (document.getElementById("arraisol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("arraisol").focus();
            document.getElementById("arraisol").select();
            return false;
        }
        
        ///AÑOS DE RECIDIR EN LA CD 2 
        if (document.getElementById("anosol2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("anosol2").focus();
            document.getElementById("anosol2").select();
            return false;
        }
        ////BENEFICIARIO
        if (document.getElementById("benesol1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("benesol1").focus();
            document.getElementById("benesol1").select();
            return false;
        }
        if (document.getElementById("benesol2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("benesol2").focus();
            document.getElementById("benesol2").select();
            return false;
        }
        if (document.getElementById("benesol3").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("benesol3").focus();
            document.getElementById("benesol3").select();
            return false;
        }
        ////ESTADO CIVIL
        if (!document.getElementsByName("civilsol")[0].checked && !document.getElementsByName("civilsol")[1].checked && !document.getElementsByName("civilsol")[2].checked && !document.getElementsByName("civilsol")[3].checked && !document.getElementsByName("civilsol")[4].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("civilsol").focus();
            document.getElementById("civilsol").select();
            return false;
        }
        ///AUTO PROPIO
        if (!document.getElementsByName("autosol")[0].checked && !document.getElementsByName("autosol")[1].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("autosol").focus();
            document.getElementById("autosol").select();
            return false;
        }
        if (document.getElementById("marcasol").value == "" && document.getElementsByName("autosol")[0].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("marcasol").focus();
            document.getElementById("marcasol").select();
            return false;
        }
        ////DATOS DESU EMPLEO O PROFESION
        ///OCUPACION O GIRO SEGUN ULTIMO CAMBIO ANTE SHCP
        if (document.getElementById("giroprof").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("giroprof").focus();
            document.getElementById("giroprof").select();
            return false;
        }
        ////pUESTO 
        if (document.getElementById("depasol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("depasol").focus();
            document.getElementById("depasol").select();
            return false;
        }
        ////DESDE EL AÑO
         if (document.getElementById("desdesol1").value == "" || document.getElementById("desdesol1").value.length < 2 || document.getElementById("desdesol1").value > 31.9 || document.getElementById("desdesol1").value<0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("desdesol1").focus();
            document.getElementById("desdesol1").select();
            return false;
        }
        if (document.getElementById("desdesol2").value == "" || document.getElementById("desdesol2").value.length < 2 || document.getElementById("desdesol2").value > 12.9 || document.getElementById("desdesol2").value < 0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("desdesol2").focus();
            document.getElementById("desdesol2").select();
            return false;
        }
        if (document.getElementById("desdesol3").value == "" || document.getElementById("desdesol3").value.length < 4 || document.getElementById("desdesol3").value < 1900) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("desdesol3").focus();
            document.getElementById("desdesol3").select();
            return false;
        }

        ////COMPAÑIA 
        if (document.getElementById("compasol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("compasol").focus();
            document.getElementById("compasol").select();
            return false;
        }
        ////NUMERO DE EMPLEADOS
        
        if (document.getElementById("noempleados").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("noempleados").focus();
            document.getElementById("noempleados").select();
            return false;
        }
        ////TELEFONO COMPAÑIA
        if (document.getElementById("compatelsol1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("compatelsol1").focus();
            document.getElementById("compatelsol1").select();
            return false;
        }
        if (document.getElementById("compatelsol2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("compatelsol2").focus();
            document.getElementById("compatelsol2").select();
            return false;
        }
        if (document.getElementById("compatelsol3").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("compatelsol3").focus();
            document.getElementById("compatelsol3").select();
            return false;
        }
        if (document.getElementById("compatelsol4").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("compatelsol4").focus();
            document.getElementById("compatelsol4").select();
            return false;
        }
        if (document.getElementById("compatelsol5").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("compatelsol5").focus();
            document.getElementById("compatelsol5").select();
            return false;
        }
        if (document.getElementById("compatelsol6").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("compatelsol6").focus();
            document.getElementById("compatelsol6").select();
            return false;
        }
        if (document.getElementById("compatelsol7").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("compatelsol7").focus();
            document.getElementById("compatelsol7").select();
            return false;
        }
        if (document.getElementById("compatelsol8").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("compatelsol8").focus();
            document.getElementById("compatelsol8").select();
            return false;
        }
        if (document.getElementById("compatelsol9").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("compatelsol9").focus();
            document.getElementById("compatelsol9").select();
            return false;
        }
        if (document.getElementById("compatelsol10").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("compatelsol10").focus();
            document.getElementById("compatelsol10").select();
            return false;
        }
        ////GIRO ACTIVIDAD QUE REALIZA
        
        if (document.getElementById("giroactreal").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("giroactreal").focus();
            document.getElementById("giroactreal").select();
            return false;
        }
        ////DOMICILIO DEL NEGOCIO
        
        if (document.getElementById("domneg").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("domneg").focus();
            document.getElementById("domneg").select();
            return false;
        }
        /////TERMINA DATOS DEL SOLICITANTE
    }

    /////REFERENCIAS PERSONALES 
    ///referencias personales1
    if (document.getElementById("nomref1").value != "") {
        ///PARENTESCO
        if (document.getElementById("parenref1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("parenref1").focus();
            document.getElementById("parenref1").select();
            return false;
        }
        ///TELEFONO
        if (document.getElementById("telref11").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref11").focus();
            document.getElementById("telref11").select();
            return false;
        }
        if (document.getElementById("telref12").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref12").focus();
            document.getElementById("telref12").select();
            return false;
        }
        if (document.getElementById("telref13").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref13").focus();
            document.getElementById("telref13").select();
            return false;
        }
        if (document.getElementById("telref14").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref14").focus();
            document.getElementById("telref14").select();
            return false;
        }
        if (document.getElementById("telref15").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref15").focus();
            document.getElementById("telref15").select();
            return false;
        }
        if (document.getElementById("telref16").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref16").focus();
            document.getElementById("telref16").select();
            return false;
        }
        if (document.getElementById("telref17").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref17").focus();
            document.getElementById("telref17").select();
            return false;
        }
        if (document.getElementById("telref18").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref18").focus();
            document.getElementById("telref18").select();
            return false;
        }
        if (document.getElementById("telref19").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref19").focus();
            document.getElementById("telref19").select();
            return false;
        }
        if (document.getElementById("telref110").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref110").focus();
            document.getElementById("telref110").select();
            return false;
        }
        ///TERMINA REFERENCIA PERSONAL1
    }
    ///referencias personales2
    if (document.getElementById("nomref2").value != "") {
        ///PARENTESCO
        if (document.getElementById("parenref2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("parenref2").focus();
            document.getElementById("parenref2").select();
            return false;
        }
        ///TELEFONO
        if (document.getElementById("telref21").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref21").focus();
            document.getElementById("telref21").select();
            return false;
        }
        if (document.getElementById("telref22").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref22").focus();
            document.getElementById("telref22").select();
            return false;
        }
        if (document.getElementById("telref23").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref23").focus();
            document.getElementById("telref23").select();
            return false;
        }
        if (document.getElementById("telref24").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref24").focus();
            document.getElementById("telref24").select();
            return false;
        }
        if (document.getElementById("telref25").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref25").focus();
            document.getElementById("telref25").select();
            return false;
        }
        if (document.getElementById("telref26").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref26").focus();
            document.getElementById("telref26").select();
            return false;
        }
        if (document.getElementById("telref27").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref27").focus();
            document.getElementById("telref27").select();
            return false;
        }
        if (document.getElementById("telref28").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref28").focus();
            document.getElementById("telref28").select();
            return false;
        }
        if (document.getElementById("telref29").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref29").focus();
            document.getElementById("telref29").select();
            return false;
        }
        if (document.getElementById("telref210").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telref210").focus();
            document.getElementById("telref210").select();
            return false;
        }
        ///TERMINA REFERENCIA PERSONAL2
    }
    ///REFERENCIAS BANCARIAS 1 
    if (document.getElementById("refbanc").value != "") {
        ////NUM CUENTA
        if (document.getElementById("numcuebanc").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("numcuebanc").focus();
            document.getElementById("numcuebanc").select();
            return false;
        }
        ////SUCURSAL
        if (document.getElementById("sucbanc1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("sucbanc1").focus();
            document.getElementById("sucbanc1").select();
            return false;
        }
        ////FECHA APERTURA
        if (document.getElementById("aperbanc1d").value == "" || document.getElementById("aperbanc1d").value.length < 2 || document.getElementById("aperbanc1d").value > 31.9 || document.getElementById("aperbanc1d").value<0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("aperbanc1d").focus();
            document.getElementById("aperbanc1d").select();
            return false;
        }
        if (document.getElementById("aperbanc1m").value == "" || document.getElementById("aperbanc1m").value.length < 2 || document.getElementById("aperbanc1m").value > 12.9 || document.getElementById("aperbanc1m").value < 0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("aperbanc1m").focus();
            document.getElementById("aperbanc1m").select();
            return false;
        }
        if (document.getElementById("aperbanc1a").value == "" || document.getElementById("aperbanc1a").value.length < 4 || document.getElementById("aperbanc1a").value < 1800) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("aperbanc1a").focus();
            document.getElementById("aperbanc1a").select();
            return false;
        }
        ///TERMINA REF BANCARIAS 1
    }
    ///REFERENCIAS BANCARIAS 2
    if (document.getElementById("refbanc2").value != "") {
        ////tarjeta de credito
        if (document.getElementById("tarjrefbanc").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("tarjrefbanc").focus();
            document.getElementById("tarjrefbanc").select();
            return false;
        }
        ////SUCURSAL
        if (document.getElementById("sucbanc2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("sucbanc2").focus();
            document.getElementById("sucbanc2").select();
            return false;
        }
        ////FECHA DE APERTURA
        if (document.getElementById("aperbanc1d2").value == "" || document.getElementById("aperbanc1d2").value.length < 2 || document.getElementById("aperbanc1d2").value > 31.9 || document.getElementById("aperbanc1d2").value<0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("aperbanc1d2").focus();
            document.getElementById("aperbanc1d2").select();
            return false;
        }
        if (document.getElementById("aperbanc1m2").value == "" || document.getElementById("aperbanc1m2").value.length < 2 || document.getElementById("aperbanc1m2").value > 12.9 || document.getElementById("aperbanc1m2").value < 0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("aperbanc1m").focus();
            document.getElementById("aperbanc1m").select();
            return false;
        }
        if (document.getElementById("aperbanc1a2").value == "" || document.getElementById("aperbanc1a2").value.length < 4 || document.getElementById("aperbanc1a2").value < 1800) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("aperbanc1a2").focus();
            document.getElementById("aperbanc1a2").select();
            return false;
        }
        ///TERMINA REF BANCARIAS 2
    }
    ///REFERENCIAS COMERCIALES 
    if (document.getElementById("refcomemp1").value != "") {
        ////TELEFONO REFERENCIA COMERCIAL 1
        if (document.getElementById("telrefcom11").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom11").focus();
            document.getElementById("telrefcom11").select();
            return false;
        }
        if (document.getElementById("telrefcom12").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom12").focus();
            document.getElementById("telrefcom12").select();
            return false;
        }
        if (document.getElementById("telrefcom13").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom13").focus();
            document.getElementById("telrefcom13").select();
            return false;
        }
        if (document.getElementById("telrefcom14").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom14").focus();
            document.getElementById("telrefcom14").select();
            return false;
        }
        if (document.getElementById("telrefcom15").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom15").focus();
            document.getElementById("telrefcom15").select();
            return false;
        }
        if (document.getElementById("telrefcom16").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom16").focus();
            document.getElementById("telrefcom16").select();
            return false;
        }
        if (document.getElementById("telrefcom17").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom17").focus();
            document.getElementById("telrefcom17").select();
            return false;
        }
        if (document.getElementById("telrefcom18").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom18").focus();
            document.getElementById("telrefcom18").select();
            return false;
        }
        if (document.getElementById("telrefcom19").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom19").focus();
            document.getElementById("telrefcom19").select();
            return false;
        }
        if (document.getElementById("telrefcom110").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom110").focus();
            document.getElementById("telrefcom110").select();
            return false;
        }///TERMINA TELEFONO
        ////ANTIGUEDAD DESDE EL AÑO
        if (document.getElementById("antirefcom1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("antirefcom1").focus();
            document.getElementById("antirefcom1").select();
            return false;
        }
    }
    ///REFERENCIAS COMERCIALES 2
    if (document.getElementById("refcomemp2").value != "") {
        ////TELEFONO REFERENCIA COMERCIAL 1
        if (document.getElementById("telrefcom21").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom21").focus();
            document.getElementById("telrefcom21").select();
            return false;
        }
        if (document.getElementById("telrefcom22").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom22").focus();
            document.getElementById("telrefcom22").select();
            return false;
        }
        if (document.getElementById("telrefcom23").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom23").focus();
            document.getElementById("telrefcom23").select();
            return false;
        }
        if (document.getElementById("telrefcom24").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom24").focus();
            document.getElementById("telrefcom24").select();
            return false;
        }
        if (document.getElementById("telrefcom25").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom25").focus();
            document.getElementById("telrefcom25").select();
            return false;
        }
        if (document.getElementById("telrefcom26").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom26").focus();
            document.getElementById("telrefcom26").select();
            return false;
        }
        if (document.getElementById("telrefcom27").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom27").focus();
            document.getElementById("telrefcom27").select();
            return false;
        }
        if (document.getElementById("telrefcom28").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom28").focus();
            document.getElementById("telrefcom28").select();
            return false;
        }
        if (document.getElementById("telrefcom29").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom29").focus();
            document.getElementById("telrefcom29").select();
            return false;
        }
        if (document.getElementById("telrefcom210").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telrefcom210").focus();
            document.getElementById("telrefcom210").select();
            return false;
        }///TERMINA TELEFONO
        ////ANTIGUEDAD DESDE EL AÑO
        if (document.getElementById("antirefcom2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("antirefcom2").focus();
            document.getElementById("antirefcom2").select();
            return false;
        }
    }

    ////CARGO DIRECTO
    if (document.getElementById("cargdir").value != "") {
        ////tarjeta de credito
        if (document.getElementById("nocuentcd").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("nocuentcd").focus();
            document.getElementById("nocuentcd").select();
            return false;
        }
        ///TERMINA CARGO DIRECTO
    }
    ////CONYUGE EN CASO DE UNIR INGRESOS 
    if (document.getElementById("conyunom").value != "" || document.getElementById("conyuape1").value != "" || document.getElementById("conyuape2").value != "") {
        ////COMPAÑIA
        if (document.getElementById("compaconyu").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("compaconyu").focus();
            document.getElementById("compaconyu").select();
            return false;
        }
        ///PUESTO CONYUGE
        if (document.getElementById("puestconyu").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("puestconyu").focus();
            document.getElementById("puestconyu").select();
            return false;
        }
        ///TERMINA CONYUGE
    }
    ///OBLIGADO PERSONA MORAL
    if (document.getElementById("nomrazsoc").value != "") {
        ////TELEFONO OBLIGADO PERSONA MORAL
        if (document.getElementById("telpermor1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telpermor1").focus();
            document.getElementById("telpermor1").select();
            return false;
        }
        if (document.getElementById("telpermor2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telpermor2").focus();
            document.getElementById("telpermor2").select();
            return false;
        }
        if (document.getElementById("telpermor3").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telpermor3").focus();
            document.getElementById("telpermor3").select();
            return false;
        }
        if (document.getElementById("telpermor4").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telpermor4").focus();
            document.getElementById("telpermor4").select();
            return false;
        }
        if (document.getElementById("telpermor5").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telpermor5").focus();
            document.getElementById("telpermor5").select();
            return false;
        }
        if (document.getElementById("telpermor6").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telpermor6").focus();
            document.getElementById("telpermor6").select();
            return false;
        }
        if (document.getElementById("telpermor7").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telpermor7").focus();
            document.getElementById("telpermor7").select();
            return false;
        }
        if (document.getElementById("telpermor8").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telpermor8").focus();
            document.getElementById("telpermor8").select();
            return false;
        }
        if (document.getElementById("telpermor9").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telpermor9").focus();
            document.getElementById("telpermor9").select();
            return false;
        }
        if (document.getElementById("telpermor10").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("telpermor10").focus();
            document.getElementById("telpermor10").select();
            return false;
        }
        ////RFC OB PERSONA MORAL 
        if (document.getElementById("permorrfc1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("permorrfc1").focus();
            document.getElementById("permorrfc1").select();
            return false;
        }
        if (document.getElementById("permorrfc2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("permorrfc2").focus();
            document.getElementById("permorrfc2").select();
            return false;
        }
        if (document.getElementById("permorrfc3").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("permorrfc3").focus();
            document.getElementById("permorrfc3").select();
            return false;
        }
        if (document.getElementById("permorrfc4").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("permorrfc4").focus();
            document.getElementById("permorrfc4").select();
            return false;
        }
        if (document.getElementById("permorrfc5").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("permorrfc5").focus();
            document.getElementById("permorrfc5").select();
            return false;
        }
        if (document.getElementById("permorrfc6").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("permorrfc6").focus();
            document.getElementById("permorrfc6").select();
            return false;
        }
        if (document.getElementById("permorrfc7").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("permorrfc7").focus();
            document.getElementById("permorrfc7").select();
            return false;
        }
        if (document.getElementById("permorrfc8").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("permorrfc8").focus();
            document.getElementById("permorrfc8").select();
            return false;
        }
        if (document.getElementById("permorrfc9").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("permorrfc9").focus();
            document.getElementById("permorrfc9").select();
            return false;
        }
        if (document.getElementById("permorrfc10").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("permorrfc10").focus();
            document.getElementById("permorrfc10").select();
            return false;
        }
        if (document.getElementById("permorrfc11").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("permorrfc11").focus();
            document.getElementById("permorrfc11").select();
            return false;
        }
        if (document.getElementById("permorrfc12").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("permorrfc12").focus();
            document.getElementById("permorrfc12").select();
            return false;
        }
        if (document.getElementById("permorrfc13").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("permorrfc13").focus();
            document.getElementById("permorrfc13").select();
            return false;
        }
        ////DIRECCION OBLIDAGO PERSONA MORAL
        if (document.getElementById("dirpermor").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("dirpermor").focus();
            document.getElementById("dirpermor").select();
            return false;
        }
        ///FAX OPM

        ///COLONIA OPM
        if (document.getElementById("colpermor").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("colpermor").focus();
            document.getElementById("colpermor").select();
            return false;
        }
        ////CIUDAD OPM
        if (document.getElementById("cdpermor").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("cdpermor").focus();
            document.getElementById("cdpermor").select();
            return false;
        }
        ////LUGAR NACIMIENTO OPM
        if (document.getElementById("lugnacpermor").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("lugnacpermor").focus();
            document.getElementById("lugnacpermor").select();
            return false;
        }
        ///ESTADO
        if (document.getElementById("edopermor").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("edopermor").focus();
            document.getElementById("edopermor").select();
            return false;
        }
        ///CP
        if (document.getElementById("cppremor").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("cppremor").focus();
            document.getElementById("cppremor").select();
            return false;
        }
        ////CONSTITUCION DE LA EMPRESA
        ///ANTIGUEDAD
        if (document.getElementById("antemp").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("antemp").focus();
            document.getElementById("antemp").select();
            return false;
        }
        ////APODERADO
        if (document.getElementById("apodsusc").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("apodsusc").focus();
            document.getElementById("apodsusc").select();
            return false;
        }
        ////DATOS GENERALES CONS EMP 
        if (document.getElementById("actprinc").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("actprinc").focus();
            document.getElementById("actprinc").select();
            return false;
        }
        // CONTIDAD DE PERSONAL 
        if (document.getElementById("cantperson").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("cantperson").focus();
            document.getElementById("cantperson").select();
            return false;
        }
        ///FECHA DE INICIO DE OPERACIONES 
        if (document.getElementById("inicoper1").value == "" || document.getElementById("inicoper1").value.length < 2 || document.getElementById("inicoper1").value > 31.9 || document.getElementById("inicoper1").value<0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("inicoper1").focus();
            document.getElementById("inicoper1").select();
            return false;
        }
        if (document.getElementById("inicoper2").value == "" || document.getElementById("inicoper2").value.length < 2 || document.getElementById("inicoper2").value > 12.9 || document.getElementById("inicoper2").value < 0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("inicoper2").focus();
            document.getElementById("inicoper2").select();
            return false;
        }
        if (document.getElementById("inicoper3").value == "" || document.getElementById("inicoper3").value.length < 4 || document.getElementById("inicoper3").value < 1900) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("inicoper3").focus();
            document.getElementById("inicoper3").select();
            return false;
        }
        ///TERMINA OBLIGADO PERSONA MORAL
    }



    ////OBLIGADO SOLIDARIO PERSONA FISICA
    if (document.getElementById("datobnom1").value != "" || document.getElementById("datobappat1").value != "" || document.getElementById("datobapmat1").value != "") {
        ///DIRECCION 
        if (document.getElementById("datobdir1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobdir1").focus();
            document.getElementById("datobdir1").select();
            return false;
        }
        ////COLONIA
        if (document.getElementById("datobcol1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobcol1").focus();
            document.getElementById("datobcol1").select();
            return false;
        }
        ///CIUDAD 
        if (document.getElementById("datobcd1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobcd1").focus();
            document.getElementById("datobcd1").select();
            return false;
        }
        ///LUGAR DE NACIMIENTO 
        if (document.getElementById("datoblugnac1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datoblugnac1").focus();
            document.getElementById("datoblugnac1").select();
            return false;
        }
        ///// PROPIEDAD A SU NOMBRE
        if (!document.getElementsByName("datobprop1")[0].checked && !document.getElementsByName("datobprop1")[1].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobprop1").focus();
            document.getElementById("datobprop1").select();
            return false;
        }
        ////ESTADO
        if (document.getElementById("datobedo1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobedo1").focus();
            document.getElementById("datobedo1").select();
            return false;
        }
        ////C.P.
        if (document.getElementById("datobcp1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobcp1").focus();
            document.getElementById("datobcp1").select();
            return false;
        }
        ///EMAIL
        if (document.getElementById("datobmail1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobmail1").focus();
            document.getElementById("datobmail1").select();
            return false;
        } else {
            if (validaEmail(document.getElementById("datobmail1").value)) {
                document.getElementById("datobmail1").focus();
                document.getElementById("datobmail1").select();
                return false;
            }

        }
        ////SEXO GENERO 
        if (!document.getElementsByName("datobsex1")[0].checked && !document.getElementsByName("datobsex1")[1].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobsex1").focus();
            document.getElementById("datobsex1").select();
            return false;
        }
        ///FECHA DE NACIMIENTO 
        if (document.getElementById("datobfechnac1d").value == "" || document.getElementById("datobfechnac1d").value.length < 2 || document.getElementById("datobfechnac1d").value > 31.9 || document.getElementById("datobfechnac1d").value < 0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("datobfechnac1d").focus();
            document.getElementById("datobfechnac1d").select();
            return false;
        }
        if (document.getElementById("datobfechnac1m").value == "" || document.getElementById("datobfechnac1m").value.length < 2 || document.getElementById("datobfechnac1m").value > 12.9 || document.getElementById("datobfechnac1m").value < 0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("datobfechnac1m").focus();
            document.getElementById("datobfechnac1m").select();
            return false;
        }
        if (document.getElementById("datobfechnac1a").value == "" || document.getElementById("datobfechnac1a").value.length < 4 || document.getElementById("datobfechnac1a").value < 1900) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("datobfechnac1a").focus();
            document.getElementById("datobfechnac1a").select();
            return false;
        }
        ///EDAD 
        if (document.getElementById("datobed1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobed1").focus();
            document.getElementById("datobed1").select();
            return false;
        }
        ////CURP 
        if (document.getElementById("datobcurp1").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobcurp1").focus();
            document.getElementById("datobcurp1").select();
            return false;
        }
        ////RFC SOLIDARIO 1
        if (document.getElementById("datobrfc11").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc11").focus();
            document.getElementById("datobrfc11").select();
            return false;
        }
        if (document.getElementById("datobrfc12").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc12").focus();
            document.getElementById("datobrfc12").select();
            return false;
        }
        if (document.getElementById("datobrfc13").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc13").focus();
            document.getElementById("datobrfc13").select();
            return false;
        }
        if (document.getElementById("datobrfc14").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc14").focus();
            document.getElementById("datobrfc14").select();
            return false;
        }
        if (document.getElementById("datobrfc15").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc15").focus();
            document.getElementById("datobrfc15").select();
            return false;
        }
        if (document.getElementById("datobrfc16").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc16").focus();
            document.getElementById("datobrfc16").select();
            return false;
        }
        if (document.getElementById("datobrfc17").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc17").focus();
            document.getElementById("datobrfc17").select();
            return false;
        }
        if (document.getElementById("datobrfc18").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc18").focus();
            document.getElementById("datobrfc18").select();
            return false;
        }
        if (document.getElementById("datobrfc19").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc19").focus();
            document.getElementById("datobrfc19").select();
            return false;
        }
        if (document.getElementById("datobrfc110").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc110").focus();
            document.getElementById("datobrfc110").select();
            return false;
        }
        if (document.getElementById("datobrfc111").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc111").focus();
            document.getElementById("datobrfc111").select();
            return false;
        }
        if (document.getElementById("datobrfc112").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc112").focus();
            document.getElementById("datobrfc112").select();
            return false;
        }
        if (document.getElementById("datobrfc113").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc113").focus();
            document.getElementById("datobrfc113").select();
            return false;
        }
        ////TELEFONO PARTICULAR
        if (document.getElementById("datobtel11").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel11").focus();
            document.getElementById("datobtel11").select();
            return false;
        }
        if (document.getElementById("datobtel12").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel12").focus();
            document.getElementById("datobtel12").select();
            return false;
        }
        if (document.getElementById("datobtel12").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel12").focus();
            document.getElementById("datobtel12").select();
            return false;
        }
        if (document.getElementById("datobtel13").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel13").focus();
            document.getElementById("datobtel13").select();
            return false;
        }
        if (document.getElementById("datobtel14").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel14").focus();
            document.getElementById("datobtel14").select();
            return false;
        }
        if (document.getElementById("datobtel15").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel15").focus();
            document.getElementById("datobtel15").select();
            return false;
        }
        if (document.getElementById("datobtel16").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel16").focus();
            document.getElementById("datobtel16").select();
            return false;
        }
        if (document.getElementById("datobtel17").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel17").focus();
            document.getElementById("datobtel17").select();
            return false;
        }
        if (document.getElementById("datobtel18").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel18").focus();
            document.getElementById("datobtel18").select();
            return false;
        }
        if (document.getElementById("datobtel19").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel19").focus();
            document.getElementById("datobtel19").select();
            return false;
        }
        if (document.getElementById("datobtel110").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel110").focus();
            document.getElementById("datobtel110").select();
            return false;
        }
        ////TELEFONO MOVIL
        if (document.getElementById("datobtel112").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel112").focus();
            document.getElementById("datobtel112").select();
            return false;
        }
        if (document.getElementById("datobtel122").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel122").focus();
            document.getElementById("datobtel122").select();
            return false;
        }
        if (document.getElementById("datobtel132").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel132").focus();
            document.getElementById("datobtel132").select();
            return false;
        }
        if (document.getElementById("datobtel142").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel142").focus();
            document.getElementById("datobtel142").select();
            return false;
        }
        if (document.getElementById("datobtel152").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel152").focus();
            document.getElementById("datobtel152").select();
            return false;
        }
        if (document.getElementById("datobtel162").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel162").focus();
            document.getElementById("datobtel162").select();
            return false;
        }
        if (document.getElementById("datobtel172").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel172").focus();
            document.getElementById("datobtel172").select();
            return false;
        }
        if (document.getElementById("datobtel182").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel182").focus();
            document.getElementById("datobtel182").select();
            return false;
        }
        if (document.getElementById("datobtel192").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel192").focus();
            document.getElementById("datobtel192").select();
            return false;
        }
        if (document.getElementById("datobtel1102").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel1102").focus();
            document.getElementById("datobtel1102").select();
            return false;
        }
        ////TERMINA OBLIGADO SOLIDARIO PF 1
    }
    ////OBLIGADO SOLIDARIO PERSONA FISICA 2
    if (document.getElementById("datobnom2").value != "" || document.getElementById("datobappat2").value != "" || document.getElementById("datobapmat2").value != "") {
        ///DIRECCION 
        if (document.getElementById("datobdir2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobdir2").focus();
            document.getElementById("datobdir2").select();
            return false;
        }
        ////COLONIA
        if (document.getElementById("datobcol2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobcol2").focus();
            document.getElementById("datobcol2").select();
            return false;
        }
        ///CIUDAD 
        if (document.getElementById("datobcd2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobcd2").focus();
            document.getElementById("datobcd2").select();
            return false;
        }
        ///LUGAR DE NACIMIENTO 
        if (document.getElementById("datoblugnac2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datoblugnac2").focus();
            document.getElementById("datoblugnac2").select();
            return false;
        }
        ///// PROPIEDAD A SU NOMBRE
        if (!document.getElementsByName("datobprop2")[0].checked && !document.getElementsByName("datobprop2")[1].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobprop2").focus();
            document.getElementById("datobprop2").select();
            return false;
        }
        ////ESTADO
        if (document.getElementById("datobedo2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobedo2").focus();
            document.getElementById("datobedo2").select();
            return false;
        }
        ////C.P.
        if (document.getElementById("datobcp2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobcp2").focus();
            document.getElementById("datobcp2").select();
            return false;
        }
        ///EMAIL
        if (document.getElementById("datobmail2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobmail2").focus();
            document.getElementById("datobmail2").select();
            return false;
        } else {
            if (validaEmail(document.getElementById("datobmail2").value)) {
                document.getElementById("datobmail2").focus();
                document.getElementById("datobmail2").select();
                return false;
            }

        }
        ////SEXO GENERO 
        if (!document.getElementsByName("datobsex2")[0].checked && !document.getElementsByName("datobsex2")[1].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobsex2").focus();
            document.getElementById("datobsex2").select();
            return false;
        }
        ///FECHA DE NACIMIENTO 
        if (document.getElementById("datobfechnac2d").value == "" || document.getElementById("datobfechnac2d").value.length < 2 || document.getElementById("datobfechnac2d").value > 31.9 || document.getElementById("datobfechnac2d").value < 0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("datobfechnac2d").focus();
            document.getElementById("datobfechnac2d").select();
            return false;
        }
        if (document.getElementById("datobfechnac2m").value == "" || document.getElementById("datobfechnac2m").value.length < 2 || document.getElementById("datobfechnac2m").value > 12.9 || document.getElementById("datobfechnac2m").value < 0.1) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("datobfechnac2m").focus();
            document.getElementById("datobfechnac2m").select();
            return false;
        }
        if (document.getElementById("datobfechnac2a").value == "" || document.getElementById("datobfechnac2a").value.length < 4 || document.getElementById("datobfechnac2a").value < 1900) {
            alert("¡¡Error falta ingresar o esta mal insertado!!");
            document.getElementById("datobfechnac2a").focus();
            document.getElementById("datobfechnac2a").select();
            return false;
        }
        ///EDAD 
        if (document.getElementById("datobed2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobed2").focus();
            document.getElementById("datobed2").select();
            return false;
        }
        ////CURP 
        if (document.getElementById("datobcurp2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobcurp2").focus();
            document.getElementById("datobcurp2").select();
            return false;
        }
        ////RFC SOLIDARIO 1
        if (document.getElementById("datobrfc21").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc21").focus();
            document.getElementById("datobrfc21").select();
            return false;
        }
        if (document.getElementById("datobrfc22").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc22").focus();
            document.getElementById("datobrfc22").select();
            return false;
        }
        if (document.getElementById("datobrfc23").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc23").focus();
            document.getElementById("datobrfc23").select();
            return false;
        }
        if (document.getElementById("datobrfc24").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc24").focus();
            document.getElementById("datobrfc24").select();
            return false;
        }
        if (document.getElementById("datobrfc25").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc25").focus();
            document.getElementById("datobrfc25").select();
            return false;
        }
        if (document.getElementById("datobrfc26").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc26").focus();
            document.getElementById("datobrfc26").select();
            return false;
        }
        if (document.getElementById("datobrfc27").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc27").focus();
            document.getElementById("datobrfc27").select();
            return false;
        }
        if (document.getElementById("datobrfc28").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc28").focus();
            document.getElementById("datobrfc28").select();
            return false;
        }
        if (document.getElementById("datobrfc29").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc29").focus();
            document.getElementById("datobrfc29").select();
            return false;
        }
        if (document.getElementById("datobrfc210").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc210").focus();
            document.getElementById("datobrfc210").select();
            return false;
        }
        if (document.getElementById("datobrfc211").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc211").focus();
            document.getElementById("datobrfc211").select();
            return false;
        }
        if (document.getElementById("datobrfc212").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc212").focus();
            document.getElementById("datobrfc212").select();
            return false;
        }
        if (document.getElementById("datobrfc213").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobrfc213").focus();
            document.getElementById("datobrfc213").select();
            return false;
        }
        ////TELEFONO PARTICULAR
        if (document.getElementById("datobtel21").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel21").focus();
            document.getElementById("datobtel21").select();
            return false;
        }
        if (document.getElementById("datobtel22").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel22").focus();
            document.getElementById("datobtel22").select();
            return false;
        }
        if (document.getElementById("datobtel22").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel22").focus();
            document.getElementById("datobtel22").select();
            return false;
        }
        if (document.getElementById("datobtel23").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel23").focus();
            document.getElementById("datobtel23").select();
            return false;
        }
        if (document.getElementById("datobtel24").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel24").focus();
            document.getElementById("datobtel24").select();
            return false;
        }
        if (document.getElementById("datobtel25").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel25").focus();
            document.getElementById("datobtel25").select();
            return false;
        }
        if (document.getElementById("datobtel26").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel26").focus();
            document.getElementById("datobtel26").select();
            return false;
        }
        if (document.getElementById("datobtel27").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel27").focus();
            document.getElementById("datobtel27").select();
            return false;
        }
        if (document.getElementById("datobtel28").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel28").focus();
            document.getElementById("datobtel28").select();
            return false;
        }
        if (document.getElementById("datobtel29").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel29").focus();
            document.getElementById("datobtel29").select();
            return false;
        }
        if (document.getElementById("datobtel210").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel210").focus();
            document.getElementById("datobtel210").select();
            return false;
        }
        ////TELEFONO MOVIL
        if (document.getElementById("datobtel212").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel212").focus();
            document.getElementById("datobtel212").select();
            return false;
        }
        if (document.getElementById("datobtel222").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel222").focus();
            document.getElementById("datobtel222").select();
            return false;
        }
        if (document.getElementById("datobtel232").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel232").focus();
            document.getElementById("datobtel232").select();
            return false;
        }
        if (document.getElementById("datobtel242").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel242").focus();
            document.getElementById("datobtel242").select();
            return false;
        }
        if (document.getElementById("datobtel252").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel252").focus();
            document.getElementById("datobtel252").select();
            return false;
        }
        if (document.getElementById("datobtel262").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel262").focus();
            document.getElementById("datobtel262").select();
            return false;
        }
        if (document.getElementById("datobtel272").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel272").focus();
            document.getElementById("datobtel272").select();
            return false;
        }
        if (document.getElementById("datobtel282").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel282").focus();
            document.getElementById("datobtel282").select();
            return false;
        }
        if (document.getElementById("datobtel292").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel292").focus();
            document.getElementById("datobtel292").select();
            return false;
        }
        if (document.getElementById("datobtel2102").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("datobtel2102").focus();
            document.getElementById("datobtel2102").select();
            return false;
        }
        ////TERMINA OBLIGADO SOLIDARIO PF 2
    }
    ////CLAVE CONSESIONARIO 
    if (document.getElementById("clavcon").value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("clavcon").focus();
        document.getElementById("clavcon").select();
        return false;
    }
    ////NOMBRE CONSESIONARIO
    if (document.getElementById("nomcons").value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("nomcons").focus();
        document.getElementById("nomcons").select();
        return false;
    }
    ////nOMBRE VENDEDOR
    if (document.getElementById("nomvend").value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("nomvend").focus();
        document.getElementById("nomvend").select();
        return false;
    }
    ////NOMBRE DEL GERENTE GRAL
    if (document.getElementById("gerentegral").value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("gerentegral").focus();
        document.getElementById("gerentegral").select();
        return false;
    }

    return true;
}

function validaEspaciosSolos2() {
    
    ////TIPO DE CLIENTE 
    if (!document.getElementsByName("escliente")[0].checked && !document.getElementsByName("escliente")[1].checked) {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("escliente").focus();
        document.getElementById("escliente").select();
        return false;
    }
    ////DELAGACION O MUNICIPIO
    if (document.getElementById("textfield5").value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("textfield5").focus();
        document.getElementById("textfield5").select();
        return false;
    }
    ////ACTIVIDAD OBJETO SOCIAL
    if (document.getElementsByName("select")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select").focus();
        document.getElementById("select").select();
    }
    ////ANTIGUEDAD DEL CLIENTE
    if (document.getElementsByName("select2")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select2").focus();
        document.getElementById("select2").select();
    }
    ////NATURALEZA DE LAS OPERACIONES
    if (document.getElementsByName("select3")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select3").focus();
        document.getElementById("select3").select();
    }
    ////NUM DE BENEFICIARIOS
    if (document.getElementsByName("select4")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select4").focus();
        document.getElementById("select4").select();
    }
    ///TERCEROS RELACIONADOS
    if (document.getElementsByName("select5")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select5").focus();
        document.getElementById("select5").select();
    }
    ///PEP'S RELACIONADOS
    if (document.getElementsByName("select6")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select6").focus();
        document.getElementById("select6").select();
    }
    ///ALERTA REPUTACIONAL
    if (document.getElementsByName("select7")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select7").focus();
        document.getElementById("select7").select();
    }
    ///VOLUMEN ESPERADO
    if (document.getElementsByName("select8")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select8").focus();
        document.getElementById("select8").select();
    }
    ///FRECUENCIA ESPERADA
    if (document.getElementsByName("select9")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select9").focus();
        document.getElementById("select9").select();
    }
    ///INSTRUMENTO MONETARIO UTILIZADO
    if (document.getElementsByName("select10")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select10").focus();
        document.getElementById("select10").select();
    }
    ///CANALES O MEDIOS UTILIZADOS
    if (document.getElementsByName("select11")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select11").focus();
        document.getElementById("select11").select();
    }
    ///PAIS ESTADO OFICIAL
    if (document.getElementsByName("select12")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select12").focus();
        document.getElementById("select12").select();
    }
    ///PAIS ESTADO RESIDENCIA
    if (document.getElementsByName("select13")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select13").focus();
        document.getElementById("select13").select();
    }
    ///PAIS ESTADO OPERCION
    if (document.getElementsByName("select14")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select14").focus();
        document.getElementById("select14").select();
    }
    ///ORIGEN DE LOS RECURSOS
    if (document.getElementsByName("select15")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select15").focus();
        document.getElementById("select15").select();
    }
    ///DESTINO DE LOS RECURSOS
    if (document.getElementsByName("select16")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select16").focus();
        document.getElementById("select16").select();
    }
    ///PAIS ESTADO RESIDENCIA DE LOS TERCEROS RELACIONADOS
    if (document.getElementsByName("select17")[0].value == "---") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select17").focus();
        document.getElementById("select17").select();
    }
    ///TERMINA PAGINA 2
    return true;
}

function validaEspaciosSolos3() {
    ////FIEL 
    if (document.getElementById("textfield30").value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("textfield30").focus();
        document.getElementById("textfield30").select();
        return false;
    }
    ////domicilio donde labora
    if (document.getElementById("textfield34").value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("textfield34").focus();
        document.getElementById("textfield34").select();
        return false;
    }
    ///sueldo mensual
    if (document.getElementById("textfield35").value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("textfield35").focus();
        document.getElementById("textfield35").select();
        return false;
    }
    ///actividad conomica adicional
    if (document.getElementById("textfield37").value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("textfield37").focus();
        document.getElementById("textfield37").select();
        return false;
    }
    ///ingresos adicionales aproximados
    if (document.getElementById("textfield38").value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("textfield38").focus();
        document.getElementById("textfield38").select();
        return false;
    }
    ////DOCUMENTOS DE IDENTIFICACIÓN
    ///DOCUMENTOS
    if (document.getElementById("textfield39").value == "" && document.getElementById("textfield40").value == "" && document.getElementById("textfield41").value == "" && document.getElementById("textfield42").value == "" && document.getElementById("textfield43").value == "") {
        alert("¡¡Ingresa al menos un documento!!");
        document.getElementById("textfield39").focus();
        document.getElementById("textfield39").select();
        return false;
    }
    if (document.getElementById("textfield43").value != "") {
        if (document.getElementById("textfield44").value == "") {
            alert("¡¡especifica documentación!!");
            document.getElementById("textfield44").focus();
            document.getElementById("textfield44").select();
            return false;
        }
    }

    ///se adjuntan copias 
    if (!document.getElementsByName("copias")[0].checked && !document.getElementsByName("copias")[1].checked) {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("copias").focus();
        document.getElementById("copias").select();
        return false;
    }
    ///cotejo vs original
    if (!document.getElementsByName("cotejo")[0].checked && !document.getElementsByName("cotejo")[1].checked) {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("cotejo").focus();
        document.getElementById("cotejo").select();
        return false;
    }
    ////se adjunta curp rfc  fea
    if (!document.getElementsByName("adjuntos1")[0].checked && !document.getElementsByName("adjuntos1")[1].checked) {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("adjuntos1").focus();
        document.getElementById("adjuntos1").select();
        return false;
    }
    ///se adjunta comprobante de comicilio
    if (!document.getElementsByName("adjuntos2")[0].checked && !document.getElementsByName("adjuntos2")[1].checked) {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("adjuntos2").focus();
        document.getElementById("adjuntos2").select();
        return false;
    }
    ///domicilio conincide con ine
    if (!document.getElementsByName("adjuntos3")[0].checked && !document.getElementsByName("adjuntos3")[1].checked) {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("adjuntos3").focus();
        document.getElementById("adjuntos3").select();
        return false;
    }
    
    


    ////DATOS DEL BENEFICIARIO
    if (document.getElementById("textfield45").value != "" || document.getElementById("textfield46").value != "" || document.getElementById("textfield47").value != "") {
        ////DOMICILIO
        if (document.getElementById("textfield48").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield48").focus();
            document.getElementById("textfield48").select();
            return false;
        }
        ///COLONIA
        if (document.getElementById("textfield49").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield49").focus();
            document.getElementById("textfield49").select();
            return false;
        }
        ///C.P.
        if (document.getElementById("textfield50").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield50").focus();
            document.getElementById("textfield50").select();
            return false;
        }
        ///PAIS
        if (document.getElementById("textfield51").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield51").focus();
            document.getElementById("textfield51").select();
            return false;
        }
        ///TELEFONO
        if (document.getElementById("textfield52").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield52").focus();
            document.getElementById("textfield52").select();
            return false;
        }
        ///CURP
        if (document.getElementById("textfield53").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield53").focus();
            document.getElementById("textfield53").select();
            return false;
        }
        ///RFC
        if (document.getElementById("textfield54").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield54").focus();
            document.getElementById("textfield54").select();
            return false;
        }
        ///PARENTESCO
        if (document.getElementById("textfield55").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield55").focus();
            document.getElementById("textfield55").select();
            return false;
        }
        ///PORCIENTO
        if (document.getElementById("textfield56").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield56").focus();
            document.getElementById("textfield56").select();
            return false;
        }
        ///FECHA DE NACIMIENTO
        if (document.getElementById("textfield57").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield57").focus();
            document.getElementById("textfield57").select();
            return false;
        }
        ////MUNICIPIO
        if (document.getElementById("textfield58").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield58").focus();
            document.getElementById("textfield58").select();
            return false;
        }
        ////ESTADO
        if (document.getElementById("textfield59").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield59").focus();
            document.getElementById("textfield59").select();
            return false;
        }
        ////ESTADO CIVIL
        if (document.getElementById("textfield60").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield60").focus();
            document.getElementById("textfield60").select();
            return false;
        }
        ///SOCIEDAD CONYUGAL
        if (document.getElementById("textfield61").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield61").focus();
            document.getElementById("textfield61").select();
            return false;
        }
        ///OCUPACION O PREFESION 
        if (document.getElementById("textfield62").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield62").focus();
            document.getElementById("textfield62").select();
            return false;
        }
        ////PEP'S
        if (document.getElementById("textfield63").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield63").focus();
            document.getElementById("textfield63").select();
            return false;
        }
        ////ORIGEN DE RECURSOS
        if (document.getElementById("textfield64").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield64").focus();
            document.getElementById("textfield64").select();
            return false;
        }



        ///termina beneficiario
    }



    ///PERFIL TRANSACCIONAL
    if (document.getElementById("textfield65").value != "" && document.getElementById("textfield65").value == "0.00") {
        if (document.getElementById("textfield66").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield66").focus();
            document.getElementById("textfield66").select();
            return false;
        }
    }
    if (document.getElementById("textfield67").value != "" && document.getElementById("textfield67").value == "0.00") {
        if (document.getElementById("textfield68").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield68").focus();
            document.getElementById("textfield68").select();
            return false;
        }
    }
    if (document.getElementById("textfield69").value != "") {
        if (document.getElementById("textfield70").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield70").focus();
            document.getElementById("textfield70").select();
            return false;
        }
    }
    if (document.getElementById("textfield71").value != "") {
        if (document.getElementById("textfield72").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield72").focus();
            document.getElementById("textfield72").select();
            return false;
        }
    }
    if (document.getElementById("textfield73").value != "") {
        if (document.getElementById("textfield74").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield74").focus();
            document.getElementById("textfield74").select();
            return false;
        }
    }
    if (document.getElementById("textfield75").value != "") {
        if (document.getElementById("textfield76").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield76").focus();
            document.getElementById("textfield76").select();
            return false;
        }
    }
    if (document.getElementById("textfield77").value != "") {
        if (document.getElementById("textfield78").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield78").focus();
            document.getElementById("textfield78").select();
            return false;
        }
    }
    if (document.getElementById("textfield79").value != "") {
        if (document.getElementById("textfield80").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield80").focus();
            document.getElementById("textfield80").select();
            return false;
        }
    }
    if (document.getElementById("textfield81").value != "") {
        if (document.getElementById("textfield82").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield82").focus();
            document.getElementById("textfield82").select();
            return false;
        }
    }
    if (document.getElementById("textfield83").value != "") {
        if (document.getElementById("textfield84").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield84").focus();
            document.getElementById("textfield84").select();
            return false;
        }
    }
    /////VALOR AUTOMOVIL
   if (document.getElementById("textfield86").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield86").focus();
            document.getElementById("textfield86").select();
            return false;
   }
    ////ENGANCHE AUTOMOVIL
   if (document.getElementById("textfield87").value == "") {
       alert("¡¡Ingresa el dato faltante!!");
       document.getElementById("textfield87").focus();
       document.getElementById("textfield87").select();
       return false;
   }
    ////PLAZO
   if (document.getElementById("textfield91").value == "") {
       alert("¡¡Ingresa el dato faltante!!");
       document.getElementById("textfield91").focus();
       document.getElementById("textfield91").select();
       return false;
   }
    ////PAGO MENSUAL ESPERADO
   if (document.getElementById("textfield92").value == "") {
       alert("¡¡Ingresa el dato faltante!!");
       document.getElementById("textfield92").focus();
       document.getElementById("textfield92").select();
       return false;
   }
    ///PEP 
   if (!document.getElementsByName("PEPS")[0].checked && !document.getElementsByName("PEPS")[1].checked) {
       alert("¡¡Ingresa el dato faltante!!");
       document.getElementById("PEPS").focus();
       document.getElementById("PEPS").select();
       return false;
   }
    ////QUIEN PEPS
   if (document.getElementsByName("PEPS")[0].checked) {
       if (document.getElementById("textfield93").value == "") {
           alert("¡¡Ingresa el dato faltante!!");
           document.getElementById("textfield93").focus();
           document.getElementById("textfield93").select();
           return false;
       }
       if (document.getElementById("textfield94").value == "") {
           alert("¡¡Ingresa el dato faltante!!");
           document.getElementById("textfield94").focus();
           document.getElementById("textfield94").select();
           return false;
       }
       if (document.getElementById("textfield95").value == "") {
           alert("¡¡Ingresa el dato faltante!!");
           document.getElementById("textfield95").focus();
           document.getElementById("textfield95").select();
           return false;
       }
   }


    ////termina pagina 3
   document.getElementById("form1").submit();
   
   //setTimeout("solicitudRealizada()", 3000);
  
   return true;
   

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


function BuscaInfo(){
     if(document.getElementById("nomsol").value != "" && document.getElementById("segnomsol").value !="" && document.getElementById("apepasol").value !="" && document.getElementById("apemasol").value !="")  {
        var nombreabuscar = document.getElementById("nomsol").value+' '+document.getElementById("segnomsol").value+' '+document.getElementById("apepasol").value+' '+document.getElementById("apemasol").value;
        
        
        window.location.href='ObtenInfo2.php?dato='+nombreabuscar;
    } else if(document.getElementById("nomsol").value != "" && document.getElementById("apepasol").value !="" && document.getElementById("apemasol").value !=""){
        var nombreabuscar = document.getElementById("nomsol").value+' '+document.getElementById("apepasol").value+' '+document.getElementById("apemasol").value;
        
        
        window.location.href='ObtenInfo2.php?dato='+nombreabuscar;
    }


}

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
<body>
<!-- header -->
<header>
	<div class="container_24">
	  <div class="grid_24">
			<h1 class="fleft"><img src="logosfg.png" width="190" height="50"></h1>
			<ul class="sf-menu">
				<li><a href="index.php">Salir</a></li>
				<li><a href="indexmenu.php">Regresar</a></li>
			</ul>
		    
           
		</div>
		
	</div>
</header>

<!-- content -->
<section>
	<div class="bg" align="center">
	  <div class="container_24" align="center">
	  <form name="form1" id="form1" action="templatePFNA.php" method="post" onsubmit="return validaEspaciosSolos3()">
	  
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
	  
	  <div id="solicitud">
	    <h1>Solicitud PFNA</h1>
	    <p align="left"><strong>DATOS DEL SOLICITANTE:</strong> 	
    <input  name="cliente" type="text" id="cliente" size="30px" onChange="window.location.href='ObtenInfo2.php?dato='+this.value+'&tipocliente=PFNA'" placeholder="Si es Cliente, número de cliente/contrato"> 
          &nbsp;&nbsp;&nbsp;&nbsp; 
          Leasing:
          <input id="tipocredito" name="tipocredito" type="radio" value="1">
          Credit: 
           <input id="tipocredito" name="tipocredito" type="radio" value="2">
&nbsp;&nbsp;&nbsp;&nbsp;Premium Credit:          
<input id="tipocredito"  name="tipocredito" type="radio" value="3">
	    </p>
	    <p align="left">
	      <input name="nomsol" type="text" id="nomsol" placeholder="Primer Nombre" onChange="BuscaInfo()" onkeypress="return validaTexto(event)">&nbsp;&nbsp;&nbsp;&nbsp;<input name="segnomsol" type="text" id="segnomsol" placeholder="Segundo Nombre" onChange="BuscaInfo()" onkeypress="return validaTexto(event)">&nbsp;&nbsp;&nbsp;&nbsp;<input name="apepasol" type="text" id="apepasol" placeholder="Apellido Parteno" onChange="BuscaInfo()" onkeypress="return validaTexto(event)">&nbsp;&nbsp;&nbsp;&nbsp;<input name="apemasol" type="text" id="apemasol" placeholder="Apellido Materno" onChange="BuscaInfo()" onkeypress="return validaTexto(event)">
</p>
	    <p align="left">RFC con homoclave:
	      <input name="rfc1" type="text" id="rfc1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc2)" onkeypress="return validaRFC(event)"><input name="rfc2" type="text" id="rfc2" size="1px" maxlength="1"onkeyup="myFunction(this,this.value,rfc3)" onkeypress="return validaRFC(event)"><input name="rfc3" type="text" id="rfc3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc4)" onkeypress="return validaRFC(event)"><input name="rfc4" type="text" id="rfc4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc5)" onkeypress="return validaRFC(event)"><input name="rfc5" type="text" id="rfc5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc6)" onkeypress="return validaRFC(event)"><input name="rfc6" type="text" id="rfc6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc7)" onkeypress="return validaRFC(event)"><input name="rfc7" type="text" id="rfc7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc8)" onkeypress="return validaRFC(event)"><input name="rfc8" type="text" id="rfc8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc9)" onkeypress="return validaRFC(event)"><input name="rfc9" type="text" id="rfc9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc10)" onkeypress="return validaRFC(event)"><input name="rfc10" type="text" id="rfc10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc11)" onkeypress="return validaRFC(event)"><input name="rfc11" type="text" id="rfc11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc12)" onkeypress="return validaRFC(event)"><input name="rfc12" type="text" id="rfc12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc13)" onkeypress="return validaRFC(event)"><input name="rfc13" type="text" id="rfc13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol1)"onkeypress="return validaRFC(event)">
</p>
	    <p align="left">Telefono partiular (Con lada - 10 dígitos) : 
	      <input name="telsol1" type="text" id="telsol1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol2)" onkeypress="return validaNumero(event)"><input name="telsol2" type="text" id="telsol2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol3)" onkeypress="return validaNumero(event)"><input name="telsol3" type="text" id="telsol3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol4)" onkeypress="return validaNumero(event)"><input name="telsol4" type="text" id="telsol4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol5)" onkeypress="return validaNumero(event)"><input name="telsol5" type="text" id="telsol5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol6)" onkeypress="return validaNumero(event)"><input name="telsol6" type="text" id="telsol6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol7)" onkeypress="return validaNumero(event)"><input name="telsol7" type="text" id="telsol7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol8)" onkeypress="return validaNumero(event)"><input name="telsol8" type="text" id="telsol8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol9)" onkeypress="return validaNumero(event)"><input name="telsol9" type="text" id="telsol9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol10)" onkeypress="return validaNumero(event)"><input name="telsol10" type="text" id="telsol10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol1)" onkeypress="return validaNumero(event)">
	    </p>
	    <p align="left">Telefono movil (Con lada - 10 dígitos):<input name="movsol1" type="text" id="movsol1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol2)"onkeypress="return validaNumero(event)"><input name="movsol2" type="text" id="movsol2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol3)"onkeypress="return validaNumero(event)"><input name="movsol3" type="text" id="movsol3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol4)"onkeypress="return validaNumero(event)"><input name="movsol4" type="text" id="movsol4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol5)"onkeypress="return validaNumero(event)"><input name="movsol5" type="text" id="movsol5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol6)"onkeypress="return validaNumero(event)"><input name="movsol6" type="text" id="movsol6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol7)"onkeypress="return validaNumero(event)"><input name="movsol7" type="text" id="movsol7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol8)"onkeypress="return validaNumero(event)"><input name="movsol8" type="text" id="movsol8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol9)"onkeypress="return validaNumero(event)"><input name="movsol9" type="text" id="movsol9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol10)"onkeypress="return validaNumero(event)"><input name="movsol10" type="text" id="movsol10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol12)"onkeypress="return validaNumero(event)"> 
	    </p>
	    <p align="left">Fax (Con Lada) : 
	      <input name="movsol12" type="text" id="movsol12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol22)"onkeypress="return validaNumero(event)"><input name="movsol22" type="text" id="movsol22" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol32)"onkeypress="return validaNumero(event)"><input name="movsol32" type="text" id="movsol32" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol42)"onkeypress="return validaNumero(event)"><input name="movsol42" type="text" id="movsol42" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol52)"onkeypress="return validaNumero(event)"><input name="movsol52" type="text" id="movsol52" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol62)"onkeypress="return validaNumero(event)"><input name="movsol62" type="text" id="movsol62" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol72)"onkeypress="return validaNumero(event)"><input name="movsol72" type="text" id="movsol72" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol82)"onkeypress="return validaNumero(event)"><input name="movsol82" type="text" id="movsol82" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol92)"onkeypress="return validaNumero(event)"><input name="movsol92" type="text" id="movsol92" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol102)"onkeypress="return validaNumero(event)"><input name="movsol102" type="text" id="movsol102" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,dirsol)"onkeypress="return validaNumero(event)">
</p>
	    <p align="left">
	      <input name="dirsol" type="text" id="dirsol" size="74px" placeholder="Dirección / Calle" onkeypress="return validaTexto(event)">
          <input name="dirnumsol" type="text" id="dirnumsol" size="20px" placeholder="Número"onkeypress="return validaNumero(event)">
		  <input name="mailsol" type="text" id="mailsol" size="20px" placeholder="Email" >
	    </p>
	    <p align="left"><input name="colsol" type="text" id="colsol" size="49px" placeholder="Colonia">
		<input name="cdsol" type="text" id="cdsol" size="20px" placeholder="Ciudad">
		<input name="lugnacsol" type="text" id="lugnacsol" size="20px" placeholder="Lugar de nacimiento (País y Estado)">
		</p>
	    <p align="left"><input name="edosol" type="text" id="edosol" size="20px" placeholder="Estado">
		<input name="cpsol" type="text" id="cpsol" size="20px" placeholder="C.P." onkeypress="return validaNumero(event)">
		<input name="curpsol" type="text" id="curpsol" size="49px" placeholder="CURP" onkeypress="return validaRFC(event)"></p>
		<hr>
	    <p align="left"><strong>DATOS GENERALES</strong> </p>
	    <p align="left">Sexo:
	      M
	      <input id="sexsol" name="sexsol" type="radio" value="M"> 
	      F 
	      <input id="sexsol" name="sexsol" type="radio" value="F">
	    Fecha de nacimiento: 
	    <input name="fechnacsol1" type="text" id="fechnacsol1" size="1px" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,fechnacsol2)"onkeypress="return validaNumero(event)"><input name="fechnacsol2" type="text" id="fechnacsol2" size="1px" maxlength="2" placeholder="mm" onKeyUp="myFunction(this,this.value,fechnacsol3)"onkeypress="return validaNumero(event)"><input name="fechnacsol3" type="text" id="fechnacsol3" size="1px" maxlength="4" placeholder="aaaa" onKeyUp="myFunction(this,this.value,edsol)"onkeypress="return validaNumero(event)">
	    <input name="edsol" type="text" id="edsol" size="2px" placeholder="Edad" onkeypress="return validaNumero(event)">
	    <input name="nacsol" type="text" id="nacsol" size="10px" placeholder="Nacionalidad">
	    <input name="depensol" type="text" id="depensol" size="10px" placeholder="Num. Dependientes"onkeypress="return validaNumero(event)">
	    <input name="acdomsol" type="text" id="acdomsol" size="10px" placeholder="Acredita Domicilio con">
	    </p>
	    <p align="left">vive en: <br>
	    Casa Propia<input id="vivsol" name="vivsol" type="radio" value="1">
	      Rentada<input id="vivsol" name="vivsol" type="radio" value="2">
	      Hipotecada<input id="vivsol" name="vivsol" type="radio" value="3">
	      Con familiares
	      <input id="vivsol" name="vivsol" type="radio" value="4">
	      <input name="impmenpag" type="text" id="impmenpag" placeholder="Importe mensual del pago"onkeypress="return validaNumero(event)">
	    </p>
	    <p align="left">Tiene una Propiedad a su nombre?: Si
	      <input id="inmusol" name="inmusol" type="radio" value="1">
	    No
	    <input id="inmusol" name="inmusol" type="radio" value="2">
	    <input name="arraisol" type="text" id="arraisol" placeholder="Arraigo en el domicilio desde el año"onkeypress="return validaNumero(event)">
	    </p>
	    <p align="left">
	      <input name="anosol2" type="text" id="anosol2" size="20px" placeholder="Años de residir en la ciudad"onkeypress="return validaNumero(event)">
        </p>
	      <p align="left">
                Beneficiario en caso de fallecimiento:
            <input name="benesol1" type="text" id="benesol1" size="20px" placeholder="Apellido Paterno"onkeypress="return validaTexto(event)">
            <input name="benesol2" type="text" id="benesol2" size="20px" placeholder="Apellido Materno"onkeypress="return validaTexto(event)">
            <input name="benesol3" type="text" id="benesol3" size="30px" placeholder="Nombre(s)"onkeypress="return validaTexto(event)">
          </p>
	    <p align="left">Estado civil:<br> 
		Casado Bienes Mancomunados<input id="civilsol" name="civilsol" type="radio" value="1">
		Casado Bienes Separados<input id="civilsol" name="civilsol" type="radio" value="2">
		Viudo<input id="civilsol" name="civilsol" type="radio" value="3">
		Divorciado<input id="civilsol" name="civilsol" type="radio" value="4">
		Soltero<input id="civilsol" name="civilsol" type="radio" value="5">
	    </p>
	    <p align="left">Tiene Auto Propio: Si
	      <input id="autosol" name="autosol" type="radio" value="1"> 
        No 
        <input id="autosol" name="autosol" type="radio" value="2">
        <input name="marcasol" type="text" id="marcasol" size="70px" placeholder="Especifique Marca y Tipo">
	    </p>
		<hr>
	    <p align="left"><strong>DATOS DE SU EMPLEO O PROFESIÓN</strong></p>
	    <p align="left">
	      <input name="giroprof" type="text" id="giroprof" size="40px" placeholder="Ocupación/Giro según alta o último cambio ante SHCP">
          <input name="depasol" type="text" id="depasol" size="30px" placeholder="Puesto">
          Antigüedad desde: 
          <input name="desdesol1" type="text" id="desdesol1" size="1px" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,desdesol2)"onkeypress="return validaNumero(event)"><input name="desdesol2" maxlength="2" type="text" id="desdesol2" size="1px" placeholder="mm" onKeyUp="myFunction(this,this.value,desdesol3)"onkeypress="return validaNumero(event)"><input name="desdesol3" maxlength="4" type="text" id="desdesol3" size="1px" placeholder="aaaa" onKeyUp="myFunction(this,this.value,compasol)"onkeypress="return validaNumero(event)">
</p>
	    <p align="left">
	      <input name="compasol" type="text" id="compasol" size="70px" placeholder="Compañía">
	      <input name="noempleados" type="text" id="noempleados"placeholder="Núm. de empleados"onkeypress="return validaNumero(event)">
	    </p>
	    <p align="left">Telefono(Con lada - 10 dígitos):
	      <input name="compatelsol1" type="text" id="compatelsol1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol2)"onkeypress="return validaNumero(event)"><input name="compatelsol2" type="text" id="compatelsol2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol3)"onkeypress="return validaNumero(event)"><input name="compatelsol3" type="text" id="compatelsol3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol4)"onkeypress="return validaNumero(event)"><input name="compatelsol4" type="text" id="compatelsol4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol5)"onkeypress="return validaNumero(event)"><input name="compatelsol5" type="text" id="compatelsol5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol6)"onkeypress="return validaNumero(event)"><input name="compatelsol6" type="text" id="compatelsol6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol7)"onkeypress="return validaNumero(event)"><input name="compatelsol7" type="text" id="compatelsol7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol8)"onkeypress="return validaNumero(event)"><input name="compatelsol8" type="text" id="compatelsol8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol9)"onkeypress="return validaNumero(event)"><input name="compatelsol9" type="text" id="compatelsol9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol10)"onkeypress="return validaNumero(event)"><input name="compatelsol10" type="text" id="compatelsol10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsolext)"onkeypress="return validaNumero(event)">
	      <input name="compatelsolext" type="text" id="compatelsolext" size="20px" placeholder="Extensión"onkeypress="return validaNumero(event)">
	    </p>
	    <p align="left">
	      <input name="giroactreal" type="text" id="giroactreal" size="44px" placeholder="Giro del negocio: actividad que realiza">
          <input name="domneg" type="text" id="domneg" size="44px" placeholder="Domicilio del negocio:">
</p>
	    <hr>
	    <p align="left"><strong>REFERENCIAS PERSONALES</strong></p>
	    <p align="left">
	      <input name="nomref1" type="text" id="nomref1" size="54px" placeholder="Nombre"onkeypress="return validaTexto(event)">
          <input name="parenref1" type="text" id="parenref1" size="40px" placeholder="Parentesco o relación"onkeypress="return validaTexto(event)">
</p>
	    <p align="left">Telefono(Con lada - 10 dígitos):
          <input name="telref11" type="text" id="telref11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref12)"onkeypress="return validaNumero(event)"><input name="telref12" type="text" id="telref12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref13)"onkeypress="return validaNumero(event)"><input name="telref13" type="text" id="telref13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref14)"onkeypress="return validaNumero(event)"><input name="telref14" type="text" id="telref14" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref15)"onkeypress="return validaNumero(event)"><input name="telref15" type="text" id="telref15" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref16)"onkeypress="return validaNumero(event)"><input name="telref16" type="text" id="telref16" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref17)"onkeypress="return validaNumero(event)"><input name="telref17" type="text" id="telref17" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref18)"onkeypress="return validaNumero(event)"><input name="telref18" type="text" id="telref18" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref19)"onkeypress="return validaNumero(event)"><input name="telref19" type="text" id="telref19" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref110)"onkeypress="return validaNumero(event)"><input name="telref110" type="text" id="telref110" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,nomref2)"onkeypress="return validaNumero(event)">
	    </p>
		<p align="left">
	      <input name="nomref2" type="text" id="nomref2" size="54px" placeholder="Nombre"onkeypress="return validaTexto(event)">
          <input name="parenref2" type="text" id="parenref2" size="40px" placeholder="Parentesco o relación"onkeypress="return validaTexto(event)">
</p>
	    <p align="left">Telefono(Con lada - 10 dígitos):
          <input name="telref21" type="text" id="telref21" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref22)"onkeypress="return validaNumero(event)"><input name="telref22" type="text" id="telref22" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref23)"onkeypress="return validaNumero(event)"><input name="telref23" type="text" id="telref23" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref24)"onkeypress="return validaNumero(event)"><input name="telref24" type="text" id="telref24" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref25)"onkeypress="return validaNumero(event)"><input name="telref25" type="text" id="telref25" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref26)"onkeypress="return validaNumero(event)"><input name="telref26" type="text" id="telref26" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref27)"onkeypress="return validaNumero(event)"><input name="telref27" type="text" id="telref27" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref28)"onkeypress="return validaNumero(event)"><input name="telref28" type="text" id="telref28" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref29)"onkeypress="return validaNumero(event)"><input name="telref29" type="text" id="telref29" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref210)"onkeypress="return validaNumero(event)"><input name="telref210" type="text" id="telref210" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,refbanc)"onkeypress="return validaNumero(event)">
	    </p>
		<hr>
	    <p align="left"><strong>REFERENCIAS BANCARIAS (TARJETA DE CRÉDITO)</strong></p>
	    <p align="left">
	      <input name="refbanc" type="text" id="refbanc" size="54px" placeholder="Banco">
          <input name="numcuebanc" type="text" id="numcuebanc" size="40px" placeholder="Número de cuenta">
</p>
	    <p align="left">
	      <input name="sucbanc1" type="text" id="sucbanc1" size="54px" placeholder="Sucursal">
	      Fecha de apertura: 
	      <input name="aperbanc1d" type="text" id="aperbanc1d" size="1" placeholder="dd" maxlength="2" onKeyUp="myFunction(this,this.value,aperbanc1m)"onkeypress="return validaNumero(event)"><input name="aperbanc1m" type="text" id="aperbanc1m" size="1" placeholder="mm" maxlength="2" onKeyUp="myFunction(this,this.value,aperbanc1a)"onkeypress="return validaNumero(event)"><input name="aperbanc1a" type="text" id="aperbanc1a" size="1" placeholder="aaaa" maxlength="4" onKeyUp="myFunction(this,this.value,refbanc2)"onkeypress="return validaNumero(event)">
	    </p>
	    <p align="left">
	      <input name="refbanc2" type="text" id="refbanc2" size="54px" placeholder="Banco">
          <input name="tarjrefbanc" type="text" id="tarjrefbanc" size="40px" placeholder="Número de Tarjeta de Crédito">
</p>
	    <p align="left">
          <input name="sucbanc2" type="text" id="sucbanc2" size="54px" placeholder="Sucursal">
	      Fecha de apertura:
  <input name="aperbanc1d2" type="text" id="aperbanc1d2" size="1" placeholder="dd" maxlength="2" onKeyUp="myFunction(this,this.value,aperbanc1m2)"onkeypress="return validaNumero(event)"><input name="aperbanc1m2" type="text" id="aperbanc1m2" size="1" placeholder="mm" maxlength="2" onKeyUp="myFunction(this,this.value,aperbanc1a2)"onkeypress="return validaNumero(event)"><input name="aperbanc1a2" type="text" id="aperbanc1a2" size="1" placeholder="aaaa" maxlength="4" onKeyUp="myFunction(this,this.value,refcomemp1)"onkeypress="return validaNumero(event)">
        </p>
		<hr>
	    <p align="left"><strong>REFERENCIAS COMERCIALES</strong></p>
	    <p align="left">
	      <input name="refcomemp1" type="text" id="refcomemp1" size="50px" placeholder="Empresa">
	      Telefono(Con lada - 10 dígitos):
          <input name="telrefcom11" type="text" id="telrefcom11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom12)"onkeypress="return validaNumero(event)"><input name="telrefcom12" type="text" id="telrefcom12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom13)"onkeypress="return validaNumero(event)"><input name="telrefcom13" type="text" id="telrefcom13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom14)"onkeypress="return validaNumero(event)"><input name="telrefcom14" type="text" id="telrefcom14" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom15)"onkeypress="return validaNumero(event)"><input name="telrefcom15" type="text" id="telrefcom15" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom16)"onkeypress="return validaNumero(event)"><input name="telrefcom16" type="text" id="telrefcom16" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom17)"onkeypress="return validaNumero(event)"><input name="telrefcom17" type="text" id="telrefcom17" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom18)"onkeypress="return validaNumero(event)"><input name="telrefcom18" type="text" id="telrefcom18" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom19)"onkeypress="return validaNumero(event)"><input name="telrefcom19" type="text" id="telrefcom19" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom110)"onkeypress="return validaNumero(event)"><input name="telrefcom110" type="text" id="telrefcom110" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,antirefcom1)"onkeypress="return validaNumero(event)">
	    </p>
	    <p align="left">
	      <input name="antirefcom1" type="text" id="antirefcom1" placeholder="Antigüedad Desde el Año"onkeypress="return validaNumero(event)">
	    </p>
	    <p align="left">
	      <input name="refcomemp2" type="text" id="refcomemp2" size="50px" placeholder="Empresa">
Telefono(Con lada - 10 dígitos):
<input name="telrefcom21" type="text" id="telrefcom21" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom22)"onkeypress="return validaNumero(event)"><input name="telrefcom22" type="text" id="telrefcom22" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom23)"onkeypress="return validaNumero(event)"><input name="telrefcom23" type="text" id="telrefcom23" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom24)"onkeypress="return validaNumero(event)"><input name="telrefcom24" type="text" id="telrefcom24" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom25)"onkeypress="return validaNumero(event)"><input name="telrefcom25" type="text" id="telrefcom25" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom26)"onkeypress="return validaNumero(event)"><input name="telrefcom26" type="text" id="telrefcom26" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom27)"onkeypress="return validaNumero(event)"><input name="telrefcom27" type="text" id="telrefcom27" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom28)"onkeypress="return validaNumero(event)"><input name="telrefcom28" type="text" id="telrefcom28" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom29)"onkeypress="return validaNumero(event)"><input name="telrefcom29" type="text" id="telrefcom29" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom210)"onkeypress="return validaNumero(event)"><input name="telrefcom210" type="text" id="telrefcom210" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,antirefcom2)"onkeypress="return validaNumero(event)">	    </p>
	    <p align="left">
          <input name="antirefcom2" type="text" id="antirefcom2" placeholder="Antigüedad Desde el Año"onkeypress="return validaNumero(event)">
        </p>
		<hr>
	    <p align="left"><strong>CARGO DIRECTO (para contratos en M.N.) </strong></p>
	    <p align="left">
          <input name="cargdir" type="text" id="cargdir" size="54px" placeholder="Banco">
          <input name="nocuentcd" type="text" id="nocuentcd" size="40px" placeholder="Número de Cuenta (CLAVE)">
	    </p>
	    <hr>
	    <p align="left"><strong>DATOS DEL CONYUGE (EN CASO DE UNIR INGRESOS) </strong></p>
	    <p align="left">
          <input name="conyunom" type="text" id="conyunom" size="20px" placeholder="Nombre(s)"onkeypress="return validaTexto(event)">
          <input name="conyuape1" type="text" id="conyuape1" size="20px" placeholder="Apellido Paterno"onkeypress="return validaTexto(event)">
          <input name="conyuape2" type="text" id="conyuape2" size="20px" placeholder="Apellido Materno"onkeypress="return validaTexto(event)">
          <input name="compaconyu" type="text" id="compaconyu" size="30px" placeholder="Compañia">
          <input name="puestconyu" type="text" id="puestconyu" size="20px" placeholder="Puesto">
	    </p>
	    <hr>
	    <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO PERSONA MORAL</strong></p>
	    <p align="left">
          <input name="nomrazsoc" type="text" id="nomrazsoc" size="50px" placeholder="Nombre, Razón Social">
	      Telefono(Con lada - 10 dígitos):
  <input name="telpermor1" type="text" id="telpermor1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor2)"onkeypress="return validaNumero(event)"><input name="telpermor2" type="text" id="telpermor2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor3)"onkeypress="return validaNumero(event)"><input name="telpermor3" type="text" id="telpermor3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor4)"onkeypress="return validaNumero(event)"><input name="telpermor4" type="text" id="telpermor4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor5)"onkeypress="return validaNumero(event)"><input name="telpermor5" type="text" id="telpermor5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor6)"onkeypress="return validaNumero(event)"><input name="telpermor6" type="text" id="telpermor6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor7)"onkeypress="return validaNumero(event)"><input name="telpermor7" type="text" id="telpermor7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor8)"onkeypress="return validaNumero(event)"><input name="telpermor8" type="text" id="telpermor8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor9)"onkeypress="return validaNumero(event)"><input name="telpermor9" type="text" id="telpermor9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor10)"onkeypress="return validaNumero(event)"><input name="telpermor10" type="text" id="telpermor10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc1)"onkeypress="return validaNumero(event)">
         </p>
	    <p align="left">RFC con homoclave:
	      <input name="permorrfc1" type="text" id="permorrfc1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc2)"onkeypress="return validaRFC(event)">
            <input name="permorrfc2" type="text" id="permorrfc2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc3)"onkeypress="return validaRFC(event)">
            <input name="permorrfc3" type="text" id="permorrfc3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc4)"onkeypress="return validaRFC(event)">
            <input name="permorrfc4" type="text" id="permorrfc4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc5)"onkeypress="return validaRFC(event)">
            <input name="permorrfc5" type="text" id="permorrfc5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc6)"onkeypress="return validaRFC(event)">
            <input name="permorrfc6" type="text" id="permorrfc6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc7)"onkeypress="return validaRFC(event)">
            <input name="permorrfc7" type="text" id="permorrfc7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc8)"onkeypress="return validaRFC(event)">
            <input name="permorrfc8" type="text" id="permorrfc8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc9)"onkeypress="return validaRFC(event)">
            <input name="permorrfc9" type="text" id="permorrfc9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc10)"onkeypress="return validaRFC(event)">
            <input name="permorrfc10" type="text" id="permorrfc10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc11)"onkeypress="return validaRFC(event)">
            <input name="permorrfc11" type="text" id="permorrfc11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc12)"onkeypress="return validaRFC(event)">
            <input name="permorrfc12" type="text" id="permorrfc12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc13)"onkeypress="return validaRFC(event)">
            <input name="permorrfc13" type="text" id="permorrfc13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,dirpermor)"onkeypress="return validaRFC(event)">
        </p>
	    <p align="left">
          <input name="dirpermor" type="text" id="dirpermor" size="50px" placeholder="Dirección / Calle y número">
	      Fax(Con lada - 10 dígitos):
  <input name="faxpermor1" type="text" id="faxpermor1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor2)"onkeypress="return validaNumero(event)">
  <input name="faxpermor2" type="text" id="faxpermor2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor3)"onkeypress="return validaNumero(event)">
  <input name="faxpermor3" type="text" id="faxpermor3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor4)"onkeypress="return validaNumero(event)">
  <input name="faxpermor4" type="text" id="faxpermor4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor5)"onkeypress="return validaNumero(event)">
  <input name="faxpermor5" type="text" id="faxpermor5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor6)"onkeypress="return validaNumero(event)">
  <input name="faxpermor6" type="text" id="faxpermor6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor7)"onkeypress="return validaNumero(event)">
  <input name="faxpermor7" type="text" id="faxpermor7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor8)"onkeypress="return validaNumero(event)">
  <input name="faxpermor8" type="text" id="faxpermor8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor9)"onkeypress="return validaNumero(event)">
  <input name="faxpermor9" type="text" id="faxpermor9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor10)"onkeypress="return validaNumero(event)">
  <input name="faxpermor10" type="text" id="faxpermor10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,colpermor)"onkeypress="return validaNumero(event)">
        </p>
	    <p align="left">
	      <input name="colpermor" type="text" id="colpermor" size="49px" placeholder="Colonia">
	      <input name="cdpermor" type="text" id="cdpermor" size="20px" placeholder="Ciudad">
          <input name="lugnacpermor" type="text" id="lugnacpermor" size="20px" placeholder="Lugar de nacimiento (País y Estado)">
        </p>
	    <p align="left">
          <input name="edopermor" type="text" id="edopermor" size="20px" placeholder="Estado">
          <input name="cppremor" type="text" id="cppremor" size="20px" placeholder="C.P."onkeypress="return validaNumero(event)">
	    </p>
	    <hr>
	    <p align="left"><strong>CONSTITUCIÓN DE LA EMPRESA</strong></p>
	    <p align="left">
          <input name="antemp" type="text" id="antemp" size="54px" placeholder="Antigüedad">
          <input name="apodsusc" type="text" id="apodsusc" size="40px" placeholder="Apoderado para suscribir Títulos de Crédito y realizar actos de administración">
        </p>
	    <hr>
	    <p align="left"><strong>DATOS GENERALES</strong></p>
	    <p align="left">
          <input name="actprinc" type="text" id="actprinc" size="50px" placeholder="Actividad Principal/según alta o último cambio ante SHCP">
          <input name="cantperson" type="text" id="cantperson" size="20px" placeholder="Cantidad de personal"onkeypress="return validaNumero(event)">
        </p>
	    <p align="left">Fecha inicio de operaciones:
	      <input name="inicoper1" type="text" id="inicoper1" size="1px" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,inicoper2)"onkeypress="return validaNumero(event)">
	      <input name="inicoper2" type="text" id="inicoper2" size="1px" maxlength="2" placeholder="mm" onKeyUp="myFunction(this,this.value,inicoper3)"onkeypress="return validaNumero(event)">
	      <input name="inicoper3" type="text" id="inicoper3" size="1px" maxlength="4" placeholder="aaaa" onKeyUp="myFunction(this,this.value,datobnom1)"onkeypress="return validaNumero(event)">
        </p>
	    <hr>
	    <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO PERSONA FÍSICA, PROPIETARIO DE BIEN INMUEBLE </strong></p>
	    <p align="left">
	      <input name="datobnom1" type="text" id="datobnom1" size="30px" placeholder="Nombre(s)"onkeypress="return validaTexto(event)">
          <input name="datobappat1" type="text" id="datobappat1" size="30px" placeholder="Apellido Paterno"onkeypress="return validaTexto(event)">
          <input name="datobapmat1" type="text" id="datobapmat1" size="30px" placeholder="Apellido Materno"onkeypress="return validaTexto(event)">
	    </p>
	    <p align="left">
	      <input name="datobdir1" type="text" id="datobdir1" size="48px" placeholder="Dirección / Calle y número">
	      <input name="datobcol1" type="text" id="datobcol1" size="48px" placeholder="Colonia">
	    </p>
	    <p align="left">
	      <input name="datobcd1" type="text" id="datobcd1" size="20px" placeholder="Ciudad">
	      <input name="datoblugnac1" type="text" id="datoblugnac1" size="30px" placeholder="Lugar nacimiento (País y Edo.)">
	    Tiene propiedad a su nombre? Si
	    <input id="datobprop1" name="datobprop1" type="radio" value="1"> 
	    No
	    <input id="datobprop1" name="datobprop1" type="radio" value="2">
</p>
	    <p align="left">
	      <input name="datobedo1" type="text" id="datobedo1" size="30px" placeholder="Estado">
          <input name="datobcp1" type="text" id="datobcp1" size="30px" placeholder="C.P."onkeypress="return validaNumero(event)">
          <input  name="datobmail1" type="text" id="datobmail1" size="30px" placeholder="Email">
	    </p>
	    <p align="left">sexo: M
	      <input id="datobsex1" name="datobsex1" type="radio" value="M"> 
	      F
	      <input id="datobsex1" name="datobsex1" type="radio" value="F">
Fecha de nacimiento:
<input name="datobfechnac1d" type="text" id="datobfechnac1d" size="1px" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,datobfechnac1m)"onkeypress="return validaNumero(event)"><input name="datobfechnac1m" type="text" id="datobfechnac1m" size="1px" maxlength="2" placeholder="mm" onKeyUp="myFunction(this,this.value,datobfechnac1a)"onkeypress="return validaNumero(event)"><input name="datobfechnac1a" type="text" id="datobfechnac1a" size="1px" maxlength="4" placeholder="aaaa" onKeyUp="myFunction(this,this.value,datobed1)"onkeypress="return validaNumero(event)">
	    <input name="datobed1" type="text" id="datobed1" size="2px" placeholder="Edad"onkeypress="return validaNumero(event)">
		<input name="datobcurp1" type="text" id="datobcurp1" size="22px" placeholder="CURP"onkeypress="return validaRFC(event)">
	    </p>
	    <p align="left">RFC con homoclave:
          <input name="datobrfc11" type="text" id="datobrfc11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc12)"onkeypress="return validaRFC(event)"><input name="datobrfc12" type="text" id="datobrfc12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc13)"onkeypress="return validaRFC(event)"><input name="datobrfc13" type="text" id="datobrfc13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc14)"onkeypress="return validaRFC(event)"><input name="datobrfc14" type="text" id="datobrfc14" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc15)"onkeypress="return validaRFC(event)"><input name="datobrfc15" type="text" id="datobrfc15" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc16)"onkeypress="return validaRFC(event)"><input name="datobrfc16" type="text" id="datobrfc16" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc17)"onkeypress="return validaRFC(event)"><input name="datobrfc17" type="text" id="datobrfc17" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc18)"onkeypress="return validaRFC(event)"><input name="datobrfc18" type="text" id="datobrfc18" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc19)"onkeypress="return validaRFC(event)"><input name="datobrfc19" type="text" id="datobrfc19" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc110)"onkeypress="return validaRFC(event)"><input name="datobrfc110" type="text" id="datobrfc110" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc111)"onkeypress="return validaRFC(event)"><input name="datobrfc111" type="text" id="datobrfc111" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc112)"onkeypress="return validaRFC(event)"><input name="datobrfc112" type="text" id="datobrfc112" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc113)"onkeypress="return validaRFC(event)"><input name="datobrfc113" type="text" id="datobrfc113" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel11)"onkeypress="return validaRFC(event)">
        </p>
	    <p align="left">Telefono(Con lada - 10 dígitos):
          <input name="datobtel11" type="text" id="datobtel11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel12)"onkeypress="return validaNumero(event)"><input name="datobtel12" type="text" id="datobtel12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel13)"onkeypress="return validaNumero(event)"><input name="datobtel13" type="text" id="datobtel13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel14)"onkeypress="return validaNumero(event)"><input name="datobtel14" type="text" id="datobtel14" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel15)"onkeypress="return validaNumero(event)"><input name="datobtel15" type="text" id="datobtel15" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel16)"onkeypress="return validaNumero(event)"><input name="datobtel16" type="text" id="datobtel16" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel17)"onkeypress="return validaNumero(event)"><input name="datobtel17" type="text" id="datobtel17" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel18)"onkeypress="return validaNumero(event)"><input name="datobtel18" type="text" id="datobtel18" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel19)"onkeypress="return validaNumero(event)"><input name="datobtel19" type="text" id="datobtel19" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel110)"onkeypress="return validaNumero(event)"><input name="datobtel110" type="text" id="datobtel110" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel112)"onkeypress="return validaNumero(event)">
</p>
	    <p align="left">Telefono Movil(Con lada - 10 dígitos):
          <input name="datobtel112" type="text" id="datobtel112" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel122)"onkeypress="return validaNumero(event)">
          <input name="datobtel122" type="text" id="datobtel122" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel132)"onkeypress="return validaNumero(event)">
          <input name="datobtel132" type="text" id="datobtel132" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel142)"onkeypress="return validaNumero(event)">
          <input name="datobtel142" type="text" id="datobtel142" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel152)"onkeypress="return validaNumero(event)">
          <input name="datobtel152" type="text" id="datobtel152" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel162)"onkeypress="return validaNumero(event)">
          <input name="datobtel162" type="text" id="datobtel162" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel172)"onkeypress="return validaNumero(event)">
          <input name="datobtel172" type="text" id="datobtel172" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel182)"onkeypress="return validaNumero(event)">
          <input name="datobtel182" type="text" id="datobtel182" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel192)"onkeypress="return validaNumero(event)">
          <input name="datobtel192" type="text" id="datobtel192" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1102)"onkeypress="return validaNumero(event)">
          <input name="datobtel1102" type="text" id="datobtel1102" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobnom2)"onkeypress="return validaNumero(event)">
</p>
	    <hr>
	    <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO (2) PERSONA FÍSICA, PROPIETARIO DE BIEN INMUEBLE </strong></p>
	    <p align="left">
	      <input name="datobnom2" type="text" id="datobnom2" size="30px" placeholder="Nombre(s)"onkeypress="return validaTexto(event)">
          <input name="datobappat2" type="text" id="datobappat2" size="30px" placeholder="Apellido Paterno"onkeypress="return validaTexto(event)">
          <input name="datobapmat2" type="text" id="datobapmat2" size="30px" placeholder="Apellido Materno"onkeypress="return validaTexto(event)">
</p>
	    <p align="left">
          <input name="datobdir2" type="text" id="datobdir2" size="48px" placeholder="Dirección / Calle y número">
          <input name="datobcol2" type="text" id="datobcol2" size="48px" placeholder="Colonia">
        </p>
	    <p align="left">
          <input name="datobcd2" type="text" id="datobcd2" size="20px" placeholder="Ciudad">
          <input name="datoblugnac2" type="text" id="datoblugnac2" size="30px" placeholder="Lugar nacimiento (País y Edo.)">
	      Tiene propiedad a su nombre? Si
  <input id="datobprop2" name="datobprop2" type="radio" value="Si">
	      No
  <input id="datobprop2" name="datobprop2" type="radio" value="No">
        </p>
	    <p align="left">
          <input name="datobedo2" type="text" id="datobedo2" size="30px" placeholder="Estado">
          <input name="datobcp2" type="text" id="datobcp2" size="30px" placeholder="C.P."onkeypress="return validaNumero(event)">
          <input  name="datobmail2" type="text" id="datobmail2" size="30px" placeholder="Email">
        </p>
	    <p align="left">sexo: M
	      <input id="datobsex2" name="datobsex2" type="radio" value="M">
	      F
  <input id="datobsex2"name="datobsex2" type="radio" value="F">
	      Fecha de nacimiento:
  <input name="datobfechnac2d" type="text" id="datobfechnac2d" size="1px" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,datobfechnac2m)"onkeypress="return validaNumero(event)"><input name="datobfechnac2m" type="text" id="datobfechnac2m" size="1px" maxlength="2" placeholder="mm" onKeyUp="myFunction(this,this.value,datobfechnac2a)"onkeypress="return validaNumero(event)"><input name="datobfechnac2a" type="text" id="datobfechnac2a" size="1px" maxlength="4" placeholder="aaaa" onKeyUp="myFunction(this,this.value,datobed2)"onkeypress="return validaNumero(event)">
  <input name="datobed2" type="text" id="datobed2" size="2px" placeholder="Edad"onkeypress="return validaNumero(event)">
    <input name="datobcurp2" type="text" id="datobcurp2" size="22px" placeholder="CURP"onkeypress="return validaRFC(event)">
        </p>
	    <p align="left">RFC con homoclave:
	      <input name="datobrfc21" type="text" id="datobrfc21" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc22)"onkeypress="return validaRFC(event)"><input name="datobrfc22" type="text" id="datobrfc22" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc23)"onkeypress="return validaRFC(event)"><input name="datobrfc23" type="text" id="datobrfc23" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc24)"onkeypress="return validaRFC(event)"><input name="datobrfc24" type="text" id="datobrfc24" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc25)"onkeypress="return validaRFC(event)"><input name="datobrfc25" type="text" id="datobrfc25" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc26)"onkeypress="return validaRFC(event)"><input name="datobrfc26" type="text" id="datobrfc26" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc27)"onkeypress="return validaRFC(event)"><input name="datobrfc27" type="text" id="datobrfc27" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc28)"onkeypress="return validaRFC(event)"><input name="datobrfc28" type="text" id="datobrfc28" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc29)"onkeypress="return validaRFC(event)"><input name="datobrfc29" type="text" id="datobrfc29" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc210)"onkeypress="return validaRFC(event)"><input name="datobrfc210" type="text" id="datobrfc210" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc211)"onkeypress="return validaRFC(event)"><input name="datobrfc211" type="text" id="datobrfc211" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc212)"onkeypress="return validaRFC(event)"><input name="datobrfc212" type="text" id="datobrfc212" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc213)"onkeypress="return validaRFC(event)"><input name="datobrfc213" type="text" id="datobrfc213" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel21)"onkeypress="return validaRFC(event)">
        </p>
	    <p align="left">Telefono(Con lada - 10 dígitos):
	      <input name="datobtel21" type="text" id="datobtel21" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel22)"onkeypress="return validaNumero(event)"><input name="datobtel22" type="text" id="datobtel22" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel23)"onkeypress="return validaNumero(event)"><input name="datobtel23" type="text" id="datobtel23" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel24)"onkeypress="return validaNumero(event)"><input name="datobtel24" type="text" id="datobtel24" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel25)"onkeypress="return validaNumero(event)"><input name="datobtel25" type="text" id="datobtel25" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel26)"onkeypress="return validaNumero(event)"><input name="datobtel26" type="text" id="datobtel26" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel27)"onkeypress="return validaNumero(event)"><input name="datobtel27" type="text" id="datobtel27" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel28)"onkeypress="return validaNumero(event)"><input name="datobtel28" type="text" id="datobtel28" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel29)"onkeypress="return validaNumero(event)"><input name="datobtel29" type="text" id="datobtel29" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel210)"onkeypress="return validaNumero(event)"><input name="datobtel210" type="text" id="datobtel210" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel212)"onkeypress="return validaNumero(event)">
        </p>
	    <p align="left">Telefono Movil(Con lada - 10 dígitos):
          <input name="datobtel212" type="text" id="datobtel212" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel222)"onkeypress="return validaNumero(event)">
          <input name="datobtel222" type="text" id="datobtel222" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel232)"onkeypress="return validaNumero(event)">
          <input name="datobtel232" type="text" id="datobtel232" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel242)"onkeypress="return validaNumero(event)">
          <input name="datobtel242" type="text" id="datobtel242" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel252)"onkeypress="return validaNumero(event)">
          <input name="datobtel252" type="text" id="datobtel252" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel262)"onkeypress="return validaNumero(event)">
          <input name="datobtel262" type="text" id="datobtel262" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel272)"onkeypress="return validaNumero(event)">
          <input name="datobtel272" type="text" id="datobtel272" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel282)"onkeypress="return validaNumero(event)">
          <input name="datobtel282" type="text" id="datobtel282" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel292)"onkeypress="return validaNumero(event)">
          <input name="datobtel292" type="text" id="datobtel292" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel2102)"onkeypress="return validaNumero(event)">
          <input name="datobtel2102" type="text" id="datobtel2102" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,clavcon)"onkeypress="return validaNumero(event)">
	    </p>
	    <hr>
	    <p align="justify">
	      <input name="clavcon" type="text" id="clavcon" size="30px" placeholder="Clave Consesionario o Distribuidor">
          <input name="nomcons" type="text" id="nomcons" size="30px" placeholder="Nombre Concesionario o Distribuidor">
          <input name="fecha" type="text" id="fecha" value="<?php echo date("Y-m-d");?>" size="10px" readonly>
</p>
	    <p align="justify">
	      <input  name="nomvend" type="text" id="nomvend" size="48px" placeholder="Nombre del Vendedor"onkeypress="return validaTexto(event)">
          <input name="gerentegral" type="text" id="gerentegral" size="48px" placeholder="Nombre y firma del Gerente General">
</p>
	   
	    <hr>
		
		<input name="continua" type="button" id="continua" value="Continuar" onClick="cambio()">
          <input name="cancelar" type="button" id="cancelar" value="Cancelar" onClick="window.location.href='indexmenu.php'">
		</div>
		
		<div id="riesgo" style="display:none;">
		<h4 align="center">FORMATO DE IDENTIFICACIÓN DEL CLIENTE POR CLASIFICACIÓN DE RIESGO&nbsp;</h4>
		<h4 align="left">Datos generales del cliente</h4> 
		<p align="left">Tipo de Cliente: Nuevo <input id="escliente" name="escliente" type="radio" value="1">
		 Actualización <input id="escliente" name="escliente" type="radio" value="2">
		</p>
		<table width="100%" border="0">
            <tr>
              <td width="22%">Nombre o razón social </td>
              <td width="78%"><input name="textfield" type="text" id="textfield" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Número de cliente </td>
              <td><input name="textfield2" type="text" id="textfield2" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Domicilio particular(Calle, número) </td>
              <td><input name="textfield3" type="text" id="textfield3" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Colonia</td>
              <td><input name="textfield4" type="text" id="textfield4" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Delegación o municipio </td>
              <td><input name="textfield5" type="text" id="textfield5" size="100%" ></td>
            </tr>
            <tr>
              <td>Estado o provincia </td>
              <td><input name="textfield6" type="text" id="textfield6" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Fecha de nacimiento o constitución </td>
              <td><input name="textfield7" type="text" id="textfield7" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Código postal </td>
              <td><input name="textfield8" type="text" id="textfield8" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Ciudad o población </td>
              <td><input name="textfield9" type="text" id="textfield9" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>País</td>
              <td><input name="textfield10" type="text" id="textfield10" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield11" type="text" id="textfield11" size="100%" readonly="" ></td>
            </tr>
          </table>
		  <p>&nbsp;</p>
		  <h4 align="left">Calificación del grado de riesgo</h4>
		  <table width="100%" border="0">
            <tr>
              <td width="32%">Actividad | Objeto Social </td>
              <td width="68%"><select id="select" name="select" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="3">Vulnerable</option>
                <option value="2">Informal</option>
                <option value="1">Otra</option>
              </select>
              </td>
            </tr>
            <tr>
              <td>Antigüedad del cliente </td>
              <td><select id="select2" name="select2" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="3">1-3 años</option>
                <option value="2">4-6 años</option>
                <option value="1">7-10 años</option>
                <option value="0">N/A</option>
                                          </select></td>
            </tr>
            <tr>
              <td>Naturaleza de las operaciones </td>
              <td><select id="select3" name="select3" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">Prestamo</option>
                <option value="2">Arrendamiento</option>
                <option value="3">Otros</option>
                            </select></td>
            </tr>
            <tr>
              <td>Q de Beneficiarios </td>
              <td><select id="select4" name="select4" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">1 a 2</option>
                <option value="2">3 a 4</option>
                <option value="3">5 o mas</option>
                <option value="0">N/A</option>
                            </select></td>
            </tr>
            <tr>
              <td>Q de Terceros Relacionados (Apoderados y Cotitulares) </td>
              <td><select id="select5" name="select5" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">1 a 2</option>
                <option value="2">3 a 4</option>
                <option value="3">5 o mas</option>
                <option value="0">N/A</option>
                            </select></td>
            </tr>
            <tr>
              <td>PEPs Relacionados </td>
              <td><select id="select6" name="select6" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">1% - 49%</option>
                <option value="2">50% - 74%</option>
                <option value="3">75% - 100%</option>
                            </select></td>
            </tr>
            <tr>
              <td>Alerta Reputacional </td>
              <td><select id="select7" name="select7" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">1% - 49%</option>
                <option value="2">50% - 74%</option>
                <option value="3">75% - 100%</option>
                            </select></td>
            </tr>
            <tr>
              <td>Volumen esperado (Monto) </td>
              <td><select id="select8" name="select8" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">$18000 - $20000</option>
                <option value="2">$21000 - $25000</option>
                <option value="3">mas de $25000</option>
                            </select></td>
            </tr>
            <tr>
              <td>Frecuencia esperada (No. Veces) </td>
              <td><select id="select9" name="select9" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">1 a 3</option>
                <option value="2">4 a 6</option>
                <option value="3">7 a 10</option>
                            </select></td>
            </tr>
            <tr>
              <td>Instrumento Monetario Utilizado </td>
              <td><select id="select10" name="select10" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">Transferencia</option>
                <option value="2">Cheque</option>
                <option value="3">Efectivo</option>
                            </select></td>
            </tr>
            <tr>
              <td>Canales o Medios Utilizados </td>
              <td><select id="select11" name="select11" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">Agencia</option>
                <option value="2">Internet</option>
                <option value="3">Otro</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Oficial </td>
              <td><select id="select12" name="select12" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">México</option>
                <option value="2">Otros</option>
                <option value="3">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Residencia </td>
              <td><select id="select13" name="select13" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="3">Guerrero-Michoacan-Tamaulipas-Morelos</option>
                <option value="2">Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                <option value="1">Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Operación </td>
              <td><select id="select14" name="select14" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="3">Guerrero-Michoacan-Tamaulipas-Morelos</option>
                <option value="2">Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                <option value="1">Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
                            </select></td>
            </tr>
            <tr>
              <td>Origen de los recursos </td>
              <td><select id="select15" name="select15" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">México</option>
                <option value="2">Otros</option>
                <option value="3">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
            <tr>
              <td>Destino de los recursos </td>
              <td><select id="select16" name="select16" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">México</option>
                <option value="2">Otros</option>
                <option value="3">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Residencia de Terceros Relacionados </td>
              <td><select id="select17" name="select17" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">México</option>
                <option value="2">Otros</option>
                <option value="3">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
          </table>
		  <p align="left">&nbsp;</p>
		  <p align="justify">
		    <input name="regresar" type="button" id="regresar" value="Regresar" onClick="regreso()">
          <input name="continua" type="button" id="continua" value="Continuar" onClick="cambio2()">
          <input name="cancelar" type="button" id="cancelar" value="Cancelar" onClick="window.location.href='indexmenu.php'">
		  </p>
		
		</div>
		
		<div id="identificacion" style="display:none;">
          <h4>FORMATO DE IDENTIFICACION, CONOCIMIENTO DEL CLIENTE Y CONSTANCIA DE ENTREVISTA</h4>
          <h6 align="left">PERSONA FÍSICA Y RELACIONADOS </h6>
          <table width="100%" border="0">
            <tr>
              <td width="28%">Apellido Paterno </td>
              <td width="72%"><input name="textfield12" type="text" id="textfield12" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Apellido Materno </td>
              <td><input name="textfield13" type="text" id="textfield13" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td><input name="textfield14" type="text" id="textfield14" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Género</td>
              <td><input name="textfield15" type="text" id="textfield15" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Lugar de Nacimiento (Estado y País) </td>
              <td><input name="textfield16" type="text" id="textfield16" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Fecha de Nacimiento </td>
              <td><input name="textfield17" type="text" id="textfield17" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Domicilio (calle y número) </td>
              <td><input name="textfield18" type="text" id="textfield18" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="textfield19" type="text" id="textfield19" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Código Postal </td>
              <td><input name="textfield20" type="text" id="textfield20" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Colonia</td>
              <td><input name="textfield21" type="text" id="textfield21" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Municipio</td>
              <td><input name="textfield22" type="text" id="textfield22" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Estado</td>
              <td><input name="textfield23" type="text" id="textfield23" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Ciudad</td>
              <td><input name="textfield24" type="text" id="textfield24" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Teléfono</td>
              <td><input name="textfield25" type="text" id="textfield25" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Estado Civil </td>
              <td><input name="textfield26" type="text" id="textfield26" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Correo Electrónico </td>
              <td><input name="textfield27" type="text" id="textfield27" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>CURP</td>
              <td><input name="textfield28" type="text" id="textfield28" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield29" type="text" id="textfield29" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Numero de serie de la FIEL*</td>
              <td><input name="textfield30" type="text" id="textfield30" size="100%"  ></td>
            </tr>
            <tr>
              <td>Nacionalidad</td>
              <td><input name="textfield31" type="text" id="textfield31" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Ocupación o Profesión </td>
              <td><input name="textfield32" type="text" id="textfield32" size="100%"  readonly></td>
            </tr>
            <tr>
              <td>Nombre de la Empresa y Giro (donde labora) </td>
              <td><input name="textfield33" type="text" id="textfield33" size="100%"  readonly></td>
            </tr>
            <tr>
              <td>Domicilio donde labora </td>
              <td><input name="textfield34" type="text" id="textfield34" size="100%"  readonly></td>
            </tr>
            <tr>
              <td>Sueldo o ingreso mensual </td>
              <td><input name="textfield35" type="text" id="textfield35" size="100%" ></td>
            </tr>
            <tr>
              <td>Puesto</td>
              <td><input name="textfield36" type="text" id="textfield36" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Actividad Económica Adicional </td>
              <td><input name="textfield37" type="text" id="textfield37" size="100%" ></td>
            </tr>
            <tr>
              <td>Ingresos Adicionales Mensuales Apox </td>
              <td><input name="textfield38" type="text" id="textfield38" size="100%"  ></td>
            </tr>
          </table>
		  <br>
          <hr>
		  <br>
          <h6 align="left">DOCUMENTACION DE IDENTIFICACION </h6>
          <table width="100%" border="0">
            <tr>
              <td width="21%">Credencial para votar </td>
              <td width="35%"><input name="textfield39" type="text" id="textfield39" size="50%" ></td>
              <td width="15%">Se adjunta copia: </td>
              <td>Si:
              <input name="copias" type="radio" value="1">
              No:
              <input name="copias" type="radio" value="2"></td>
            </tr>
            <tr>
              <td>Pasaporte cedula profesional </td>
              <td><input name="textfield40" type="text" id="textfield40" size="50%"  ></td>
              <td>Se adjunta copia: </td>
              <td>Si:
              <input name="copias" type="radio" value="1">
              No:
              <input name="copias" type="radio" value="2"></td>
            </tr>
            <tr>
              <td>Cartilla de servicio militar </td>
              <td><input name="textfield41" type="text" id="textfield41" size="50%" ></td>
              <td>Se adjunta copia: </td>
              <td>Si:
              <input name="copias" type="radio" value="1">
              No:
              <input name="copias" type="radio" value="2"></td>
            </tr>
            <tr>
              <td>Licencia para conducir </td>
              <td><input name="textfield42" type="text" id="textfield42" size="50%"  ></td>
              <td>Se adjunta copia: </td>
              <td>Si:
              <input name="copias" type="radio" value="1">
              No:
              <input name="copias" type="radio" value="2"></td>
            </tr>
            <tr>
              <td>Otra</td>
              <td><input name="textfield43" type="text" id="textfield43" size="50%"  ></td>
              <td>Se adjunta copia: </td>
              <td>Si:
              <input name="copias" type="radio" value="1">
              No:
              <input name="copias" type="radio" value="2"></td>
            </tr>
            <tr>
              <td>Especificar</td>
              <td><input name="textfield44" type="text" id="textfield44" size="50%"  ></td>
              <td>Se cotejo vs original: </td>
              <td>Si:
                <input name="cotejo" type="radio" value="1">
No:
<input name="cotejo" type="radio" value="2"></td>
            </tr>
          </table>
		  <BR>
		  <p align="left">OTROS DOCUMENTOS QUE SE ADJUNTAN:</p>
		  <table width="100%" border="0">
            <tr>
              <td width="30%">Se adjunta CURP y/o cédula RFC, FEA* </td>
              <td width="70%">Si:
                <input name="adjuntos1" type="radio" value="1">
No:
<input name="adjuntos1" type="radio" value="2"></td>
            </tr>
            <tr>
              <td>Se adjunta comprobante de domicilio </td>
              <td>Si:
                <input name="adjuntos2" type="radio" value="1">
No:
<input name="adjuntos2" type="radio" value="2"></td>
            </tr>
            <tr>
              <td>Fecha del comprobante de domicilio </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Domicilio manifestado coincide con la ID</td>
              <td>Si:
                <input name="adjuntos3" type="radio" value="1">
No:
<input name="adjuntos3" type="radio" value="2"></td>
            </tr>
          </table>
		  <br>
		  <p align="left" style="font-size:8px;">*Cuando cuente con ellas. <br>No será necesario presentar la constancia de la Clave Única de Registro de Población si ésta aparece en otro documento o identificación oficial;</p>
		
		  <hr>
		  <br>
          <H6 align="left">BENEFICIARIO</H6>
          <table width="100%" border="0">
            <tr>
              <td width="18%">Apellido Paterno </td>
              <td width="82%"><input name="textfield45" type="text" id="textfield45" size="50%" readonly ></td>
            </tr>
            <tr>
              <td>Apellido Materno </td>
              <td><input name="textfield46" type="text" id="textfield46" size="50%" readonly  ></td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td><input name="textfield47" type="text" id="textfield47" size="50%" readonly ></td>
            </tr>
            <tr>
              <td>Domicilio (calle y número) </td>
              <td><input name="textfield48" type="text" id="textfield48" size="50%"  ></td>
            </tr>
            <tr>
              <td>Colonia</td>
              <td><input name="textfield49" type="text" id="textfield49" size="50%" ></td>
            </tr>
            <tr>
              <td>Código Postal </td>
              <td><input name="textfield50" type="text" id="textfield50" size="50%" onkeypress="return validaNumero(event)" ></td>
            </tr>
            <tr>
              <td>País</td>
              <td><input name="textfield51" type="text" id="textfield51" size="50%" ></td>
            </tr>
            <tr>
              <td>Teléfono</td>
              <td><input name="textfield52" type="text" id="textfield52" size="50%" onkeypress="return validaNumero(event)"></td>
            </tr>
            <tr>
              <td>CURP</td>
              <td><input name="textfield53" type="text" id="textfield53" size="50%" onkeypress="return validaRFC(event)"></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield54" type="text" id="textfield54" size="50%" onkeypress="return validaRFC(event)"></td>
            </tr>
            <tr>
              <td>Parentesco</td>
              <td><input name="textfield55" type="text" id="textfield55" size="50%"  ></td>
            </tr>
            <tr>
              <td>Porciento</td>
              <td><input name="textfield56" type="text" id="textfield56" size="50%" onkeypress="return validaNumero(event)" ></td>
            </tr>
            <tr>
              <td>Fecha de Nacimiento </td>
              <td><input name="textfield57" type="text" id="textfield57" size="50%" ></td>
            </tr>
            <tr>
              <td>Municipio</td>
              <td><input name="textfield58" type="text" id="textfield58" size="50%" ></td>
            </tr>
            <tr>
              <td>Estado</td>
              <td><input name="textfield59" type="text" id="textfield59" size="50%"></td>
            </tr>
            <tr>
              <td>Estado Civil </td>
              <td><input name="textfield60" type="text" id="textfield60" size="50%" ></td>
            </tr>
            <tr>
              <td>Sociedad Conyugal </td>
              <td><input name="textfield61" type="text" id="textfield61" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ocupación o Profesión </td>
              <td><input name="textfield62" type="text" id="textfield62" size="50%"  ></td>
            </tr>
            <tr>
              <td>PEP´s</td>
              <td><input name="textfield63" type="text" id="textfield63" size="50%" ></td>
            </tr>
            <tr>
              <td>Origen de los Recursos </td>
              <td><input name="textfield64" type="text" id="textfield64" size="50%"  ></td>
            </tr>
          </table>
		  <br>
		  <hr>
		  <br>
          <H6 align="left">PERFIL TRANSACCIONAL INICIAL</H6>
          <table width="100%" border="0">
            <tr>
              <td width="21%">Ingresos Comprobable(1) </td>
              <td width="39%"><input name="textfield65" type="text" id="textfield65" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td width="7%">Fuente</td>
              <td width="33%"><input name="textfield66" type="text" id="textfield66" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(2) </td>
              <td><input name="textfield67" type="text" id="textfield67" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield68" type="text" id="textfield68" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(3) </td>
              <td><input name="textfield69" type="text" id="textfield69" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield70" type="text" id="textfield70" size="50%" ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(4) </td>
              <td><input name="textfield71" type="text" id="textfield71" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield72" type="text" id="textfield72" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(5) </td>
              <td><input name="textfield73" type="text" id="textfield73" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield74" type="text" id="textfield74" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(1) </td>
              <td><input name="textfield75" type="text" id="textfield75" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield76" type="text" id="textfield76" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(2)</td>
              <td><input name="textfield77" type="text" id="textfield77" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield78" type="text" id="textfield78" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(3)</td>
              <td><input name="textfield79" type="text" id="textfield79" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield80" type="text" id="textfield80" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(4)</td>
              <td><input name="textfield81" type="text" id="textfield81" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield82" type="text" id="textfield82" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(5)</td>
              <td><input name="textfield83" type="text" id="textfield83" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield84" type="text" id="textfield84" size="50%"  ></td>
            </tr>
          </table>
		  <br>
          <table width="100%" border="0">
            <tr>
              <td width="19%">Total de Ingresos </td>
              <td width="81%"><input name="textfield85" type="text" id="textfield85" size="50%" onkeypress="return validaNumeroDecimal(event)"  ></td>
            </tr>
            <tr>
              <td>Valor del Automóvil </td>
              <td><input name="textfield86" type="text" id="textfield86" size="50%" onkeypress="return validaNumeroDecimal(event)" ></td>
            </tr>
            <tr>
              <td>Enganche del Automóvil </td>
              <td><input name="textfield87" type="text" id="textfield87" size="50%" onkeypress="return validaNumeroDecimal(event)" ></td>
            </tr>
            <tr>
              <td>Porcentaje de Enganche </td>
              <td><input name="textfield88" type="text" id="textfield88" size="50%" readonly></td>
            </tr>
            <tr>
              <td>Porcentaje de Financieamiento </td>
              <td><input name="textfield89" type="text" id="textfield89" size="50%" readonly></td>
            </tr>
            <tr>
              <td>Monto Financiado </td>
              <td><input name="textfield90" type="text" id="textfield90" size="50%" readonly ></td>
            </tr>
            <tr>
              <td>Plazo (meses)</td>
              <td><input name="textfield91" type="text" id="textfield91" size="50%" onkeypress="return validaNumero(event)"></td>
            </tr>
            <tr>
              <td>Pago Mensual Esperado </td>
              <td><input name="textfield92" type="text" id="textfield92" size="50%" onkeypress="return validaNumero(event)"></td>
            </tr>
          </table>
		  
		  <br>
	      <p align="left">¿ Usted o algún familiar suyo de hasta segundo grado de consanguinidad o afinidad (cónyuge,padre,madre,hijos,hermanos, abuelos, tios, primos, cuñados, suegros, yernos, etc), desempeña o a desempeñado funciones públicas destacadas en el territorio nacional o en el Extranjero (incluyendo puestos de Gobierno Federales, Estatales ,Municipales, funciones gubernamentales o judiciales, en partidos politicos, militares de alta jerarquía, altos ejecutivos de empresas paraestatales, etc.?<br>
	        Si:
                <input name="PEPS" type="radio" value="1">
No:
<input name="PEPS" type="radio" value="2">
	      </p>
	      <p align="left">En caso de si:</p>
	      <table width="100%" border="0">
            <tr>
              <td width="18%">¿Quién? (Nombre) </td>
              <td width="82%"><input name="textfield93" type="text" id="textfield93" size="50%" ></td>
            </tr>
            <tr>
              <td>Parentesco</td>
              <td><input name="textfield94" type="text" id="textfield94" size="50%" ></td>
            </tr>
            <tr>
              <td>Puesto</td>
              <td><input name="textfield95" type="text" id="textfield95" size="50%"  ></td>
            </tr>
          </table>
	      <p align="left">&nbsp; </p>
	      <hr>
		  <br>
          
          <p align="justify">
            <input name="cancelar" type="button" id="cancelar" value="Cancelar" onClick="window.location.href='indexmenu.php'">
            <input name="aceptar" type="button" id="aceptar" value="Aceptar" onclick="validaEspaciosSolos3()">
            <input name="regresar" type="button" id="regresar" value="Regresar" onClick="regreso2()">
          </p>
        </div>
		
		
		
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
</html>

<?php
break;
    }
?>