function cpostal(cpos,estado,municipio,colonia,ciudad,loading){
    var data = new FormData();
   data.append('idCP', cpos);
   
   //data.append('id', obj.id);

 
   
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
    if(xmlhttp.readyState==1){
        $("#"+loading).html("<img src='images/cargando.gif' width='20' height='20'/>");
    }


    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        
        
        $("#"+loading).empty();

        
        codigospostales = JSON.parse(xmlhttp.responseText);


        
        if(codigospostales==""){
            alert("¡¡Codigo Postal no Registrado, Favor de ingresar uno valido!!");
            return false;
        }
        

        if(document.getElementById(ciudad)!=null){
            var cdd = document.getElementById(ciudad);
            $("#"+ciudad+" option").remove();
            var optionprin4 = document.createElement("option");
                optionprin4.text = "-Seleccione una opcion-";
                optionprin4.value = "";
                cdd.add(optionprin4);
        var option4 = document.createElement("option");
                if(codigospostales[0].Ciudad[0]!=null){
                    
                    option4.text = codigospostales[0].Ciudad[0];
                    option4.value = codigospostales[0].Ciudad[0];
                }else{
                    option4.text = "N/A";
                    option4.value = "N/A";
                }
                
                cdd.add(option4);
        }


        if(document.getElementById(estado)!=null){
            var est = document.getElementById(estado);
            $("#"+estado+" option").remove();
            var optionprin = document.createElement("option");
                optionprin.text = "-Seleccione una opcion-";
                optionprin.value = "";
                est.add(optionprin);
            var option = document.createElement("option");
                option.text = codigospostales[0].Estado[0];
                option.value = codigospostales[0].Estado[0];
                est.add(option);
        }

        if(document.getElementById(municipio)!=null){
            var mun = document.getElementById(municipio);
            $("#"+municipio+" option").remove();
            var optionprin2 = document.createElement("option");
                optionprin2.text = "-Seleccione una opcion-";
                optionprin2.value = "";
                mun.add(optionprin2);
            var option2 = document.createElement("option");
                option2.text = codigospostales[0].Municipio[0];
                option2.value = codigospostales[0].Municipio[0];
                mun.add(option2);
        }
        
        if(document.getElementById(colonia)!=null){
            var col = document.getElementById(colonia);
            $("#"+colonia+" option").remove();
             var optionprin3 = document.createElement("option");
                optionprin3.text = "-Seleccione una opcion-";
                optionprin3.value = "";
                col.add(optionprin3);
             $.each(codigospostales, function(i,cliente){
            var option3 = document.createElement("option");
                option3.text = this.Fracc[0];
                option3.value = this.Fracc[0];
                col.add(option3);
        });
        return true;
        }
       
      }
  }
xmlhttp.open("POST","cpostal.php",true);
xmlhttp.send(data);
}


function datepick(inputdate){
    
    $fecha=$(inputdate);
    
    if ($fecha[0].type!="date"){
        $("#"+inputdate.id).mask("9999-99-99",{placeholder:"yyyy/mm/dd"});
      $fecha.datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true} );
      
      }
        

}

function calcularAntiguedad(input,destino)
{
    var fecha=document.getElementById(input.id).value;
    if(validate_fecha(fecha)==true)
    {
        // Si la fecha es correcta, calculamos la edad
        var values=fecha.split("-");
        var dia = values[2];
        var mes = values[1];
        var ano = values[0];
 
        // cogemos los valores actuales
        var fecha_hoy = new Date();
        var ahora_ano = fecha_hoy.getYear();
        var ahora_mes = fecha_hoy.getMonth()+1;
        var ahora_dia = fecha_hoy.getDate();
 
        // realizamos el calculo
        var edad = (ahora_ano + 1900) - ano;
        if ( ahora_mes < mes )
        {
            edad--;
        }
        if ((mes == ahora_mes) && (ahora_dia < dia))
        {
            edad--;
        }
        if (edad > 1900)
        {
            edad -= 1900;
        }
 
        // calculamos los meses
        var meses=0;
        if(ahora_mes>mes)
            meses=ahora_mes-mes;
        if(ahora_mes<mes)
            meses=12-(mes-ahora_mes);
        if(ahora_mes==mes && dia>ahora_dia)
            meses=11;
 
        // calculamos los dias
        var dias=0;
        if(ahora_dia>dia)
            dias=ahora_dia-dia;
        if(ahora_dia<dia)
        {
            ultimoDiaMes=new Date(ahora_ano, ahora_mes, 0);
            dias=ultimoDiaMes.getDate()-(dia-ahora_dia);
        }
       
           
        
            document.getElementById(destino).value=edad;
            
       
        
    }else{
        document.getElementById(destino).value=0;
    }
}


function mayusculas(input) {
    var curp = input.value.toUpperCase();
        resultado = document.getElementById(input.id);
       
        
    resultado.value = curp;
}


/**
*
*  Base64 encode / decode
*  http://www.webtoolkit.info/
*
**/

var Base64 = {

    // private property
    _keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",

    // public method for encoding
    encode : function (input) {
        var output = "";
        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
        var i = 0;

        input = Base64._utf8_encode(input);

        while (i < input.length) {

            chr1 = input.charCodeAt(i++);
            chr2 = input.charCodeAt(i++);
            chr3 = input.charCodeAt(i++);

            enc1 = chr1 >> 2;
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            enc4 = chr3 & 63;

            if (isNaN(chr2)) {
                enc3 = enc4 = 64;
            } else if (isNaN(chr3)) {
                enc4 = 64;
            }

            output = output +
            this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
            this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);

        }

        return output;
    },

    // public method for decoding
    decode : function (input) {
        var output = "";
        var chr1, chr2, chr3;
        var enc1, enc2, enc3, enc4;
        var i = 0;

        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

        while (i < input.length) {

            enc1 = this._keyStr.indexOf(input.charAt(i++));
            enc2 = this._keyStr.indexOf(input.charAt(i++));
            enc3 = this._keyStr.indexOf(input.charAt(i++));
            enc4 = this._keyStr.indexOf(input.charAt(i++));

            chr1 = (enc1 << 2) | (enc2 >> 4);
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            chr3 = ((enc3 & 3) << 6) | enc4;

            output = output + String.fromCharCode(chr1);

            if (enc3 != 64) {
                output = output + String.fromCharCode(chr2);
            }
            if (enc4 != 64) {
                output = output + String.fromCharCode(chr3);
            }

        }

        output = Base64._utf8_decode(output);

        return output;

    },

    // private method for UTF-8 encoding
    _utf8_encode : function (string) {
        string = string.replace(/\r\n/g,"\n");
        var utftext = "";

        for (var n = 0; n < string.length; n++) {

            var c = string.charCodeAt(n);

            if (c < 128) {
                utftext += String.fromCharCode(c);
            }
            else if((c > 127) && (c < 2048)) {
                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);
            }
            else {
                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);
            }

        }

        return utftext;
    },

    // private method for UTF-8 decoding
    _utf8_decode : function (utftext) {
        var string = "";
        var i = 0;
        var c = c1 = c2 = 0;

        while ( i < utftext.length ) {

            c = utftext.charCodeAt(i);

            if (c < 128) {
                string += String.fromCharCode(c);
                i++;
            }
            else if((c > 191) && (c < 224)) {
                c2 = utftext.charCodeAt(i+1);
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            }
            else {
                c2 = utftext.charCodeAt(i+1);
                c3 = utftext.charCodeAt(i+2);
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }

        }

        return string;
    }

}