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


function mascara(o,f){  
    v_obj=o;  
    v_fun=f;  
    v_obj.value=v_fun(v_obj.value);
  }  

  
  function cpf(v){     
    v=v.replace(/([^0-9\.]+)/g,''); 
    v=v.replace(/^[\.]/,''); 
    v=v.replace(/[\.][\.]/g,''); 
    v=v.replace(/\.(\d)(\d)(\d)/g,'.$1$2'); 
    v=v.replace(/\.(\d{1,2})\./g,'.$1'); 
    v = v.toString().split('').reverse().join('').replace(/(\d{3})/g,'$1,');    
    v = v.split('').reverse().join('').replace(/^[\,]/,''); 
    return v;  
  }   



  $( function() {
    var availableTags = [
      "002 BANAMEX Banco Nacional de México, S.A., Institución de Banca Múltiple, Grupo Financiero Banamex",
      "006 BANCOMEXT Banco Nacional de Comercio Exterior, Sociedad Nacional de Crédito,Institución de Banca de Desarrollo",
      "009 BANOBRAS Banco Nacional de Obras y Servicios Públicos, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo",
      "012 BBVA BANCOMER BBVA Bancomer, S.A., Institución de Banca Múltiple, Grupo Financiero BBVA Bancomer",
      "014 SANTANDER Banco Santander (México), S.A., Institución de Banca Múltiple, Grupo Financiero Santander",
      "019 BANJERCITO Banco Nacional del Ejército, Fuerza Aérea y Armada, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo",
      "021 HSBC HSBC México, S.A., institución De Banca Múltiple, Grupo Financiero HSBC",
      "030 BAJIO Banco del Bajío, S.A., Institución de Banca Múltiple",
      "032 IXE IXE Banco, S.A., Institución de Banca Múltiple, IXE Grupo Financiero",
      "036 INBURSA Banco Inbursa, S.A., Institución de Banca Múltiple, Grupo Financiero Inbursa",
      "037 INTERACCIONES Banco Interacciones, S.A., Institución de Banca Múltiple",
      "042 MIFEL Banca Mifel, S.A., Institución de Banca Múltiple, Grupo Financiero Mifel",
      "044 SCOTIABANK Scotiabank Inverlat, S.A.",
      "058 BANREGIO Banco Regional de Monterrey, S.A., Institución de Banca Múltiple, Banregio Grupo Financiero",
      "059 INVEX Banco Invex, S.A., Institución de Banca Múltiple, Invex Grupo Financiero",
      "060 BANSI Bansi, S.A., Institución de Banca Múltiple",
      "062 AFIRME Banca Afirme, S.A., Institución de Banca Múltiple",
      "072 BANORTE Banco Mercantil del Norte, S.A., Institución de Banca Múltiple, Grupo Financiero Banorte",
      "102 THE ROYAL BANK The Royal Bank of Scotland México, S.A., Institución de Banca Múltiple",
      "103 AMERICAN EXPRESS American Express Bank (México), S.A., Institución de Banca Múltiple",
      "106 BAMSA Bank of America México, S.A., Institución de Banca Múltiple, GrupoFinanciero Bank of America",
      "108 TOKYO Bank of Tokyo-Mitsubishi UFJ (México), S.A.",
      "110 JP MORGAN Banco J.P. Morgan, S.A., Institución de Banca Múltiple, J.P. Morgan Grupo Financiero",
      "112 BMONEX Banco Monex, S.A., Institución de Banca Múltiple",
      "113 VE POR MAS Banco Ve Por Mas, S.A. Institución de Banca Múltiple",
      "116 ING ING Bank (México), S.A., Institución de Banca Múltiple, ING Grupo Financiero",
      "124 DEUTSCHE Deutsche Bank México, S.A., Institución de Banca Múltiple",
      "126 CREDIT SUISSE Banco Credit Suisse (México), S.A. Institución de Banca Múltiple, Grupo Financiero Credit Suisse (México)",
      "127 AZTECA Banco Azteca, S.A. Institución de Banca Múltiple.",
      "128 AUTOFIN Banco Autofin México, S.A. Institución de Banca Múltiple",
      "129 BARCLAYS Barclays Bank México, S.A., Institución de Banca Múltiple, Grupo Financiero Barclays México",
      "130 COMPARTAMOS Banco Compartamos, S.A., Institución de Banca Múltiple",
      "131 BANCO FAMSA Banco Ahorro Famsa, S.A., Institución de Banca Múltiple",
      "132 BMULTIVA Banco Multiva, S.A., Institución de Banca Múltiple, Multivalores Grupo Financiero",
      "133 ACTINVER Banco Actinver, S.A. Institución de Banca Múltiple, Grupo Financiero Actinver",
      "134 WAL-MART Banco Wal-Mart de México Adelante, S.A., Institución de Banca Múltiple",
      "135 NAFIN Nacional Financiera, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo",
      "136 INTERBANCO Inter Banco, S.A. Institución de Banca Múltiple",
      "137 BANCOPPEL BanCoppel, S.A., Institución de Banca Múltiple",
      "138 ABC CAPITAL ABC Capital, S.A., Institución de Banca Múltiple",
      "139 UBS BANK UBS Bank México, S.A., Institución de Banca Múltiple, UBS Grupo Financiero",
      "140 CONSUBANCO Consubanco, S.A. Institución de Banca Múltiple",
      "141 VOLKSWAGEN Volkswagen Bank, S.A., Institución de Banca Múltiple",
      "143 CIBANCO CIBanco, S.A.",
      "145 BBASE Banco Base, S.A., Institución de Banca Múltiple",
      "166 BANSEFI Banco del Ahorro Nacional y Servicios Financieros, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo",
      "168 HIPOTECARIA FEDERAL Sociedad Hipotecaria Federal, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo",
      "600 MONEXCB Monex Casa de Bolsa, S.A. de C.V. Monex Grupo Financiero",
      "601 GBM GBM Grupo Bursátil Mexicano, S.A. de C.V. Casa de Bolsa",
      "602 MASARI Masari Casa de Bolsa, S.A.",
      "605 VALUE Value, S.A. de C.V. Casa de Bolsa",
      "606 ESTRUCTURADORES Estructuradores del Mercado de Valores Casa de Bolsa, S.A. de C.V.",
      "607 TIBER Casa de Cambio Tiber, S.A. de C.V.",
      "608 VECTOR Vector Casa de Bolsa, S.A. de C.V.",
      "610 B&B B y B, Casa de Cambio, S.A. de C.V.",
      "614 ACCIVAL Acciones y Valores Banamex, S.A. de C.V., Casa de Bolsa",
      "615 MERRILL LYNCH Merrill Lynch México, S.A. de C.V. Casa de Bolsa",
      "616 FINAMEX Casa de Bolsa Finamex, S.A. de C.V.",
      "617 VALMEX Valores Mexicanos Casa de Bolsa, S.A. de C.V.",
      "618 UNICA Unica Casa de Cambio, S.A. de C.V.",
      "619 MAPFRE MAPFRE Tepeyac, S.A.",
      "620 PROFUTURO Profuturo G.N.P., S.A. de C.V., Afore",
      "621 CB ACTINVER Actinver Casa de Bolsa, S.A. de C.V.",
      "622 OACTIN OPERADORA ACTINVER, S.A. DE C.V.",
      "623 SKANDIA Skandia Vida, S.A. de C.V.",
      "626 CBDEUTSCHE Deutsche Securities, S.A. de C.V. CASA DE BOLSA",
      "627 ZURICH Zurich Compañía de Seguros, S.A.",
      "628 ZURICHVI Zurich Vida, Compañía de Seguros, S.A.",
      "629 SU CASITA Hipotecaria Su Casita, S.A. de C.V. SOFOM ENR",
      "630 CB INTERCAM Intercam Casa de Bolsa, S.A. de C.V.",
      "631 CI BOLSA CI Casa de Bolsa, S.A. de C.V.",
      "632 BULLTICK CB Bulltick Casa de Bolsa, S.A., de C.V.",
      "633 STERLING Sterling Casa de Cambio, S.A. de C.V.",
      "634 FINCOMUN Fincomún, Servicios Financieros Comunitarios, S.A. de C.V.",
      "636 HDI SEGUROS HDI Seguros, S.A. de C.V.",
      "637 ORDER Order Express Casa de Cambio, S.A. de C.V",
      "638 AKALA Akala, S.A. de C.V., Sociedad Financiera Popular",
      "640 CB JPMORGAN J.P. Morgan Casa de Bolsa, S.A. de C.V. J.P. Morgan Grupo Financiero",
      "642 REFORMA Operadora de Recursos Reforma, S.A. de C.V., S.F.P.",
      "646 STP Sistema de Transferencias y Pagos STP, S.A. de C.V.SOFOM ENR",
      "647 TELECOMM Telecomunicaciones de México",
      "648 EVERCORE Evercore Casa de Bolsa, S.A. de C.V.",
      "649 SKANDIA Skandia Operadora de Fondos, S.A. de C.V.",
      "651 SEGMTY Seguros Monterrey New York Life, S.A de C.V",
      "652 ASEA Solución Asea, S.A. de C.V., Sociedad Financiera Popular",
      "653 KUSPIT Kuspit Casa de Bolsa, S.A. de C.V.",
      "655 SOFIEXPRESS J.P. SOFIEXPRESS, S.A. de C.V., S.F.P.",
      "656 UNAGRA UNAGRA, S.A. de C.V., S.F.P.",
      "659 OPCIONES EMPRESARIALES DEL NOROESTE OPCIONES EMPRESARIALES DEL NORESTE, S.A. DE C.V., S.F.P.",
      "901 CLS Cls Bank International",
      "902 INDEVAL SD. Indeval, S.A. de C.V.",
      "670 LIBERTAD Libertad Servicios Financieros, S.A. De C.V."
    ];
    $( "#refbanc" ).autocomplete({
      source: availableTags
    });
    $( "#refbanc2" ).autocomplete({
      source: availableTags
    });
    $( "#cargdir" ).autocomplete({
      source: availableTags
    });
    
  });
