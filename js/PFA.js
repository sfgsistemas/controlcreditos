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
document.getElementById("textfield33").value=document.getElementById("compasol").value;
document.getElementById("textfield36").value=document.getElementById("puestosol").value;
document.getElementById("textfield45").value = MaysPrimera(document.getElementById("benesol1").value);
document.getElementById("textfield46").value = MaysPrimera(document.getElementById("benesol2").value);
document.getElementById("textfield47").value = ucWords(document.getElementById("benesol3").value);









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
    if (!document.getElementsByName("tipocredito")[0].checked && !document.getElementsByName("tipocredito")[1].checked) {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("tipocredito").focus();
        document.getElementById("tipocredito").select();
        return false;
    }

    /////PRIMERA SECCION  SECCION DEL SOLICITANTE
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
            document.getElementById("dirsol").focus();
            document.getElementById("dirsol").select();
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
        if (!document.getElementsByName("vivsol")[0].checked && !document.getElementsByName("vivsol")[1].checked && !document.getElementsByName("vivsol")[2].checked && !document.getElementsByName("vivsol")[3].checked && !document.getElementsByName("vivsol")[4].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("vivsol").focus();
            document.getElementById("vivsol").select();
            return false;
        }
        ///ESPECIFICACIÓN DE OTROS
        if (document.getElementById("vivsolesp").value == "" && document.getElementsByName("vivsol")[4].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("vivsolesp").focus();
            document.getElementById("vivsolesp").select();
            return false;
        }
        if (!document.getElementsByName("inmusol")[0].checked && !document.getElementsByName("inmusol")[1].checked) {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("inmusol").focus();
            document.getElementById("inmusol").select();
            return false;
        }
        ///RESIDIR EN LA CD 
        if (document.getElementById("anosol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("anosol").focus();
            document.getElementById("anosol").select();
            return false;
        }
        ///ARRAIGO DOMICILIO
        if (document.getElementById("arraisol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("arraisol").focus();
            document.getElementById("arraisol").select();
            return false;
        }
        ///ACREDITA DOMICILIO 2 
        if (document.getElementById("acdomsol2").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("acdomsol2").focus();
            document.getElementById("acdomsol2").select();
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
        ///PUESTO
        if (document.getElementById("puestosol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("puestosol").focus();
            document.getElementById("puestosol").select();
            return false;
        }
        ////DEPARTAMENTO O AREA 
        if (document.getElementById("depasol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("depasol").focus();
            document.getElementById("depasol").select();
            return false;
        }
        ////DESDE EL AÑO
        if (document.getElementById("desdesol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("desdesol").focus();
            document.getElementById("desdesol").select();
            return false;
        }
        ////COMPAÑIA 
        if (document.getElementById("compasol").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("compasol").focus();
            document.getElementById("compasol").select();
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
    ///REFERENCIAS BANCARIAS
    if (document.getElementById("refbanc").value != "") {
        ////tarjeta de credito
        if (document.getElementById("tarjrefbanc").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("tarjrefbanc").focus();
            document.getElementById("tarjrefbanc").select();
            return false;
        }
        ///TERMINA REF BANCARIAS
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
    if (document.getElementById("conyunom").value != "") {
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
    if (document.getElementsByName("select")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select").focus();
        document.getElementById("select").select();
    }
    ////ANTIGUEDAD DEL CLIENTE
    if (document.getElementsByName("select2")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select2").focus();
        document.getElementById("select2").select();
    }
    ////NATURALEZA DE LAS OPERACIONES
    if (document.getElementsByName("select3")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select3").focus();
        document.getElementById("select3").select();
    }
    ////NUM DE BENEFICIARIOS
    if (document.getElementsByName("select4")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select4").focus();
        document.getElementById("select4").select();
    }
    ///TERCEROS RELACIONADOS
    if (document.getElementsByName("select5")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select5").focus();
        document.getElementById("select5").select();
    }
    ///PEP'S RELACIONADOS
    if (document.getElementsByName("select6")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select6").focus();
        document.getElementById("select6").select();
    }
    ///ALERTA REPUTACIONAL
    if (document.getElementsByName("select7")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select7").focus();
        document.getElementById("select7").select();
    }
    ///VOLUMEN ESPERADO
    if (document.getElementsByName("select8")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select8").focus();
        document.getElementById("select8").select();
    }
    ///FRECUENCIA ESPERADA
    if (document.getElementsByName("select9")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select9").focus();
        document.getElementById("select9").select();
    }
    ///INSTRUMENTO MONETARIO UTILIZADO
    if (document.getElementsByName("select10")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select10").focus();
        document.getElementById("select10").select();
    }
    ///CANALES O MEDIOS UTILIZADOS
    if (document.getElementsByName("select11")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select11").focus();
        document.getElementById("select11").select();
    }
    ///PAIS ESTADO OFICIAL
    if (document.getElementsByName("select12")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select12").focus();
        document.getElementById("select12").select();
    }
    ///PAIS ESTADO RESIDENCIA
    if (document.getElementsByName("select13")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select13").focus();
        document.getElementById("select13").select();
    }
    ///PAIS ESTADO OPERCION
    if (document.getElementsByName("select14")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select14").focus();
        document.getElementById("select14").select();
    }
    ///ORIGEN DE LOS RECURSOS
    if (document.getElementsByName("select15")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select15").focus();
        document.getElementById("select15").select();
    }
    ///DESTINO DE LOS RECURSOS
    if (document.getElementsByName("select16")[0].value == "") {
        alert("¡¡Ingresa el dato faltante!!");
        document.getElementById("select16").focus();
        document.getElementById("select16").select();
    }
    ///PAIS ESTADO RESIDENCIA DE LOS TERCEROS RELACIONADOS
    if (document.getElementsByName("select17")[0].value == "") {
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
    if (document.getElementById("textfield65").value != "") {
        if (document.getElementById("textfield66").value == "") {
            alert("¡¡Ingresa el dato faltante!!");
            document.getElementById("textfield66").focus();
            document.getElementById("textfield66").select();
            return false;
        }
    }
    if (document.getElementById("textfield67").value != "") {
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
   
   
   setTimeout("solicitudRealizada()", 3000);
   //window.location='indexmenu.php';
   //alert("Enviado");
   
  
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
        
        
        window.location.href='ObtenInfo.php?dato='+nombreabuscar;
    } else if(document.getElementById("nomsol").value != "" && document.getElementById("apepasol").value !="" && document.getElementById("apemasol").value !=""){
        var nombreabuscar = document.getElementById("nomsol").value+' '+document.getElementById("apepasol").value+' '+document.getElementById("apemasol").value;
        
        
        window.location.href='ObtenInfo.php?dato='+nombreabuscar;
    }


}