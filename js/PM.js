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

document.getElementById("textfield").value=MaysPrimera(document.getElementById("nomrazsoc2").value);


document.getElementById("textfield2").value=document.getElementById("cliente").value;
document.getElementById("textfield3").value=document.getElementById("dirsol").value;
document.getElementById("textfield4").value=document.getElementById("colsol").value;
//document.getElementById("textfield5").value="";
document.getElementById("textfield6").value=document.getElementById("edosol").value;
document.getElementById("textfield7").value=document.getElementById("inicoper13").value;
document.getElementById("textfield8").value=document.getElementById("cpsol").value;
document.getElementById("textfield9").value=document.getElementById("cdsol").value;
//document.getElementById("textfield10").value=document.getElementById("lugnacsol").value;
document.getElementById("textfield11").value=MaysPrimera(document.getElementById("rfcsol1").value)+MaysPrimera(document.getElementById("rfcsol2").value)+MaysPrimera(document.getElementById("rfcsol3").value)+MaysPrimera(document.getElementById("rfcsol4").value)+MaysPrimera(document.getElementById("rfcsol5").value)+MaysPrimera(document.getElementById("rfcsol6").value)+MaysPrimera(document.getElementById("rfcsol7").value)+MaysPrimera(document.getElementById("rfcsol8").value)+MaysPrimera(document.getElementById("rfcsol9").value)+MaysPrimera(document.getElementById("rfcsol10").value)+MaysPrimera(document.getElementById("rfcsol11").value)+MaysPrimera(document.getElementById("rfcsol12").value)+MaysPrimera(document.getElementById("rfcsol13").value);



}///cierre del cambio



function cambio2() {
    window.scrollTo(0,0);


document.getElementById("textfield12").value=MaysPrimera(document.getElementById("apepaconemp").value);
document.getElementById("textfield13").value=MaysPrimera(document.getElementById("apemaconemp").value);
document.getElementById("textfield14").value=MaysPrimera(document.getElementById("nomconemp").value)+" "+MaysPrimera(document.getElementById("segnomconemp").value);



//document.getElementById("textfield16").value=document.getElementById("lugnacsol").value;
//document.getElementById("textfield17").value=document.getElementById("fechnacsol").value;
document.getElementById("textfield18").value=document.getElementById("datobdir22").value;
//document.getElementById("textfield19").value=document.getElementById("dirnumsol").value;
document.getElementById("textfield20").value=document.getElementById("lugnacsol22").value;
document.getElementById("textfield21").value=document.getElementById("datobcol23").value;
document.getElementById("textfield22").value=document.getElementById("textfield5").value;
document.getElementById("textfield23").value=document.getElementById("cdsol22").value;
document.getElementById("textfield24").value=document.getElementById("colsol22").value;
document.getElementById("textfield25").value=document.getElementById("telsol1").value+document.getElementById("telsol2").value+document.getElementById("telsol3").value+document.getElementById("telsol4").value+document.getElementById("telsol5").value+document.getElementById("telsol6").value+document.getElementById("telsol7").value+document.getElementById("telsol8").value+document.getElementById("telsol9").value+document.getElementById("telsol10").value;


document.getElementById("textfield27").value=document.getElementById("mailconemp").value;
//document.getElementById("textfield28").value=document.getElementById("curpsol").value.toUpperCase();
document.getElementById("textfield29").value=MaysPrimera(document.getElementById("rfcconemp1").value)+MaysPrimera(document.getElementById("rfcconemp2").value)+MaysPrimera(document.getElementById("rfcconemp3").value)+MaysPrimera(document.getElementById("rfcconemp4").value)+MaysPrimera(document.getElementById("rfcconemp5").value)+MaysPrimera(document.getElementById("rfcconemp6").value)+MaysPrimera(document.getElementById("rfcconemp7").value)+MaysPrimera(document.getElementById("rfcconemp8").value)+MaysPrimera(document.getElementById("rfcconemp9").value)+MaysPrimera(document.getElementById("rfcconemp10").value)+MaysPrimera(document.getElementById("rfcconemp11").value)+MaysPrimera(document.getElementById("rfcconemp12").value)+MaysPrimera(document.getElementById("rfcconemp13").value);
//document.getElementById("textfield31").value=document.getElementById("nacsol").value;

document.getElementById("textfield33").value = document.getElementById("nomrazsoc2").value;
document.getElementById("textfield34").value = document.getElementById("dirsol").value;

document.getElementById("textfield36").value=document.getElementById("puesconemp").value;


//document.getElementById("textfield45").value = MaysPrimera(document.getElementById("benesol1").value);
//document.getElementById("textfield46").value = MaysPrimera(document.getElementById("benesol2").value);
//document.getElementById("textfield47").value = ucWords(document.getElementById("benesol3").value);


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


