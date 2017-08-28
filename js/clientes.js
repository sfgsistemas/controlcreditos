$( "#textfield60" ).change(function() {
    estcivbene();
});

function estcivbene(){
  if(document.getElementById("textfield60").value=="Casado"){
    document.getElementById("divtextfield61").style.display='block';
    
  }else{
    document.getElementById("divtextfield61").style.display='none';

  }
}





function contiregcliente(idlcliente){
    
    
   var data = new FormData();
   

   data.append('function', "contregcliente");
   data.append('idlcliente', idlcliente );
   
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
        
        if(xmlhttp.responseText=='null'){
            alert("¡No Existe el Registro!, Favor de Ingresar Información correcta");
            return;
        }
        if(xmlhttp.responseText=='¡Por favor de Ingresar un Dato!'){
            alert("¡Por favor de Ingresar un Dato!");
            return;
        }


        obj = JSON.parse(xmlhttp.responseText);

        $( "#cerrarmodalcontregcliente" ).click();
        document.getElementById("botonescliente").style.display="none";
        document.getElementById("contenidorequestcliente").style.display="block";
        document.getElementById("idcliente").value=obj.id;
        document.getElementById("cancelarcliente").disabled=true;
        document.getElementById("TipoCliente").value=obj.TipoCliente;
        document.getElementById("TipoCliente").disabled=true;
        cambiacartas();
        document.getElementById("nomsol").value=obj.NombrePF;
        document.getElementById("segnomsol").value=obj.SegNombrePF;
        document.getElementById("apepasol").value=obj.ApPatPF;
        document.getElementById("apemasol").value=obj.ApMatPF;
        document.getElementById("rfc1").value=obj.RFCPF;
        document.getElementById("telsol1").value=obj.TelefonoPF;
        document.getElementById("movsol1").value=obj.MovilPF;
        document.getElementById("mailsol").value=obj.EmailPF;
        document.getElementById("dirsol").value=obj.DireccionPF;
        document.getElementById("dirnumsol").value=obj.NumDireccionPF;
        document.getElementById("cpsol").value=obj.CPPF;
        
        var cdd=document.getElementById("edosol");
        var recpostales = document.createElement("option");
                recpostales.text = obj.EstadoPF;
                recpostales.value = obj.EstadoPF;
                cdd.add(recpostales);

            cdd=document.getElementById("colsol");
            recpostales = document.createElement("option");
            recpostales.text = obj.ColoniaPF;
            recpostales.value = obj.ColoniaPF;
            cdd.add(recpostales);

            cdd=document.getElementById("cdsol");
            recpostales = document.createElement("option");
            recpostales.text = obj.CiudadPF;
            recpostales.value = obj.CiudadPF;
            cdd.add(recpostales);

            cdd=document.getElementById("textfield5");
            recpostales = document.createElement("option");
            recpostales.text = obj.MunicipioPF;
            recpostales.value = obj.MunicipioPF;
            cdd.add(recpostales);
              
        document.getElementById("colsol").value=obj.ColoniaPF;
        document.getElementById("lugnacsol").value=obj.LugNacimientoPF;
        document.getElementById("edosol").value=obj.EstadoPF;
        document.getElementById("cdsol").value=obj.CiudadPF;
        document.getElementById("textfield5").value=obj.MunicipioPF;
        document.getElementById("curpsol").value=obj.CURPPF;
        document.getElementById("curpsol").readonly=true;
        document.getElementById("sexsol").value=obj.SexoPF;
        
        if(obj.FechNacimientoPF=="0000-00-00"){
            document.getElementById("fechnacsol").value="";
        }else{
            document.getElementById("fechnacsol").value=obj.FechNacimientoPF;
        }
        document.getElementById("edsol").value=obj.Edad;
        document.getElementById("nacsol").value=obj.NacionalidadPF;
        document.getElementById("depensol").value=obj.NumDependientesPF;
        document.getElementById("acdomsol").value=obj.AcreditaDomPF;
        document.getElementById("anosol").value=obj.RecidirCiudadPF;
        document.getElementById("arraisol").value=obj.ArraigoDomPF;
        document.getElementById("arraisolanios").value=obj.ArraigoAniosDomPF;
        document.getElementById("vivsol").value=obj.ViviendaPF;
        vivsol();

        document.getElementById("vivsolesp").value=obj.EspViviendaPF;
        document.getElementById("civilsol").value=obj.EstCivilPF;
        civilsol();
        document.getElementById("autosol").value=obj.AutoPropioPF;
        autosol();
        document.getElementById("marcasol").value=obj.EspAuto;
        document.getElementById("inmusol").value=obj.InmueblePF;
        document.getElementById("actempresarial").value=obj.ActividadEmpresarial;
        actempresarial();
        document.getElementById("puestosol").value=obj.PuestoPF;

        document.getElementById("depasol").value=obj.DepartamentoPF;
        
        if(obj.DesdeEmpPF=="0000-00-00"){
            document.getElementById("desdesol").value="";
        }else{
            document.getElementById("desdesol").value=obj.DesdeEmpPF;
        }
        document.getElementById("desdesolanios").value=obj.DesdeAniosEmpPF;
        document.getElementById("compasol").value=obj.CompaniaPF;
        document.getElementById("compatelsol1").value=obj.TelefonoEmpPF;
        document.getElementById("compatelsolext").value=obj.ExtensionEmpPF;
        document.getElementById("giroprof").value=obj.GiroPF;
        document.getElementById("noempleados").value=obj.NumEmpleadosPF;

        document.getElementById("domneg").value=obj.DomicilioNegPF;
        document.getElementById("numdomneg").value=obj.NumDomicilioNegPF;
        document.getElementById("cpneg").value=obj.CPNegPF;

            cdd=document.getElementById("colneg");
            recpostales = document.createElement("option");
            recpostales.text = obj.ColoniaNegPF;
            recpostales.value = obj.ColoniaNegPF;
            cdd.add(recpostales);

        document.getElementById("colneg").value=obj.ColoniaNegPF;
            cdd=document.getElementById("estneg");
            recpostales = document.createElement("option");
            recpostales.text = obj.EstadoNegPF;
            recpostales.value = obj.EstadoNegPF;
            cdd.add(recpostales);

        document.getElementById("estneg").value=obj.EstadoNegPF;
            cdd=document.getElementById("munneg");
            recpostales = document.createElement("option");
            recpostales.text = obj.MunicipioNegPF;
            recpostales.value = obj.MunicipioNegPF;
            cdd.add(recpostales);

        document.getElementById("munneg").value=obj.MunicipioNegPF;
            cdd=document.getElementById("cdneg");
            recpostales = document.createElement("option");
            recpostales.text = obj.CiudadNegPF;
            recpostales.value = obj.CiudadNegPF;
            cdd.add(recpostales);

        document.getElementById("cdneg").value=obj.CiudadNegPF;


        document.getElementById("nomref1").value=obj.RefPerNom1PF;
        document.getElementById("parenref1").value=obj.RefPerParentesco1PF;
        document.getElementById("telref11").value=obj.RefPerTelefono1PF;
        document.getElementById("refperdir").value=obj.RefPerDirPF;
        document.getElementById("refpernumdir").value=obj.RefPerNumDirPF;
        document.getElementById("refpercp").value=obj.RefPerCPPF;
            cdd=document.getElementById("refpercol");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerColPF;
            recpostales.value = obj.RefPerColPF;
            cdd.add(recpostales);
        document.getElementById("refpercol").value=obj.RefPerColPF;
            cdd=document.getElementById("refperest");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerEstPF;
            recpostales.value = obj.RefPerEstPF;
            cdd.add(recpostales);
        document.getElementById("refperest").value=obj.RefPerEstPF;
            cdd=document.getElementById("refpermun");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerMunPF;
            recpostales.value = obj.RefPerMunPF;
            cdd.add(recpostales);
        document.getElementById("refpermun").value=obj.RefPerMunPF;
            cdd=document.getElementById("refpercd");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerCdPF;
            recpostales.value = obj.RefPerCdPF;
            cdd.add(recpostales);
        document.getElementById("refpercd").value=obj.RefPerCdPF;



        document.getElementById("nomref2").value=obj.RefPerNom2PF;
        document.getElementById("parenref2").value=obj.RefPerParentesco2PF;
        document.getElementById("telref12").value=obj.RefPerTelefono2PF;
        document.getElementById("refperdir2").value=obj.RefPerDirPF;
        document.getElementById("refpernumdir2").value=obj.RefPerNumDirPF;
        document.getElementById("refpercp2").value=obj.RefPerCPPF2;
            cdd=document.getElementById("refpercol2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerColPF2;
            recpostales.value = obj.RefPerColPF2;
            cdd.add(recpostales);
        document.getElementById("refpercol2").value=obj.RefPerColPF2;
            cdd=document.getElementById("refperest2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerEstPF2;
            recpostales.value = obj.RefPerEstPF2;
            cdd.add(recpostales);
        document.getElementById("refperest2").value=obj.RefPerEstPF2;
            cdd=document.getElementById("refpermun2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerMunPF2;
            recpostales.value = obj.RefPerMunPF2;
            cdd.add(recpostales);
        document.getElementById("refpermun2").value=obj.RefPerMunPF2;
            cdd=document.getElementById("refpercd2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerCdPF2;
            recpostales.value = obj.RefPerCdPF2;
            cdd.add(recpostales);
        document.getElementById("refpercd2").value=obj.RefPerCdPF2;

        document.getElementById("refbanc").value=obj.Banco1;
        document.getElementById("numcuebanc").value=obj.CuentaBanc1;
        document.getElementById("sucbanc1").value=obj.SucursalBanc1;
        
        if(obj.FechaApertura1=="0000-00-00"){
            document.getElementById("aperbanc1d").value="";
        }else{
            document.getElementById("aperbanc1d").value=obj.FechaApertura1;
        }
        document.getElementById("refbanc2").value=obj.Banco2;
        document.getElementById("numcuebanc2").value=obj.CuentaBanc2;
        document.getElementById("sucbanc2").value=obj.SucursalBanc2;

        
        if(obj.FechaApertura2=="0000-00-00"){
            document.getElementById("aperbanc2d").value="";
        }else{
           document.getElementById("aperbanc2d").value=obj.FechaApertura2; 
        }
        document.getElementById("cargdir").value=obj.CarDirBanco;
        document.getElementById("nocuentcd").value=obj.CLABE;
        document.getElementById("refcomemp1").value=obj.RefComEmp1;
        document.getElementById("telrefcom11").value=obj.RefComTel1;
        document.getElementById("antirefcom1").value=obj.RefComAnt1;
        document.getElementById("refcomdir").value=obj.RefComDir;
        document.getElementById("refcomnumdir").value=obj.RefComNumDir;
        document.getElementById("refcomcp").value=obj.RefComCP;
            cdd=document.getElementById("refcomcol");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComCol;
            recpostales.value = obj.RefComCol;
            cdd.add(recpostales);
        document.getElementById("refcomcol").value=obj.RefComCol;
            cdd=document.getElementById("refcomest");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComEst;
            recpostales.value = obj.RefComEst;
            cdd.add(recpostales);
        document.getElementById("refcomest").value=obj.RefComEst;
            cdd=document.getElementById("refcommun");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComMun;
            recpostales.value = obj.RefComMun;
            cdd.add(recpostales);
        document.getElementById("refcommun").value=obj.RefComMun;
            cdd=document.getElementById("refcomcd");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComCd;
            recpostales.value = obj.RefComCd;
            cdd.add(recpostales);
        document.getElementById("refcomcd").value=obj.RefComCd;





        document.getElementById("refcomemp2").value=obj.RefComEmp2;
        document.getElementById("telrefcom22").value=obj.RefComTel1;
        document.getElementById("antirefcom2").value=obj.RefComAnt1;
        document.getElementById("refcomdir2").value=obj.RefComDir;
        document.getElementById("refcomnumdir2").value=obj.RefComNumDir;
        document.getElementById("refcomcp2").value=obj.RefComCP2;
            cdd=document.getElementById("refcomcol2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComCol2;
            recpostales.value = obj.RefComCol2;
            cdd.add(recpostales);
        document.getElementById("refcomcol2").value=obj.RefComCol2;
            cdd=document.getElementById("refcomest2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComEst2;
            recpostales.value = obj.RefComEst2;
            cdd.add(recpostales);
        document.getElementById("refcomest2").value=obj.RefComEst2;
            cdd=document.getElementById("refcommun2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComMun2;
            recpostales.value = obj.RefComMun2;
            cdd.add(recpostales);
        document.getElementById("refcommun2").value=obj.RefComMun2;
            cdd=document.getElementById("refcomcd2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComCd2;
            recpostales.value = obj.RefComCd2;
            cdd.add(recpostales);
        document.getElementById("refcomcd2").value=obj.RefComCd2;


        document.getElementById("conyunom").value=obj.ConyugeNom;
        document.getElementById("conyuape1").value=obj.ConyugeApPat;
        document.getElementById("conyuape2").value=obj.ConyugeApMat;
        document.getElementById("compaconyu").value=obj.ConyugeCompania;
        document.getElementById("puestconyu").value=obj.ConyugePuesto;

        document.getElementById("benesol3").value=obj.BeneficiarioNom;
        document.getElementById("benesol1").value=obj.BeneficiarioApPat;
        document.getElementById("benesol2").value=obj.BeneficiarioApMat;
        document.getElementById("textfield48").value=obj.BeneficiarioDom;
             cdd=document.getElementById("textfield49");
            recpostales = document.createElement("option");
            recpostales.text = obj.BeneficiarioCol;
            recpostales.value = obj.BeneficiarioCol;
            cdd.add(recpostales);
        document.getElementById("textfield49").value=obj.BeneficiarioCol;
        document.getElementById("textfield50").value=obj.BeneficiarioCP;
        document.getElementById("textfield51").value=obj.BeneficiarioPais;

        document.getElementById("textfield52").value=obj.BeneficiarioTel;
        document.getElementById("textfield53").value=obj.BeneficiarioCURP;
        document.getElementById("textfield54").value=obj.BeneficiarioRFC;
        document.getElementById("textfield55").value=obj.BeneficiarioParent;
        document.getElementById("textfield56").value=obj.BeneficiarioPorciento;
        
        if(obj.BeneficiarioFechNac=="0000-00-00"){
            document.getElementById("textfield57").value="";
        }else{
          document.getElementById("textfield57").value=obj.BeneficiarioFechNac;  
        }
            cdd=document.getElementById("textfield58");
            recpostales = document.createElement("option");
            recpostales.text = obj.BeneficiarioMun;
            recpostales.value = obj.BeneficiarioMun;
            cdd.add(recpostales);
        document.getElementById("textfield58").value=obj.BeneficiarioMun;
            cdd=document.getElementById("textfield59");
            recpostales = document.createElement("option");
            recpostales.text = obj.BeneficiarioEstado;
            recpostales.value = obj.BeneficiarioEstado;
            cdd.add(recpostales);
        document.getElementById("textfield59").value=obj.BeneficiarioEstado;
        document.getElementById("textfield60").value=obj.BeneficiarioEstCivil;
        estcivbene();
        document.getElementById("textfield61").value=obj.BeneficiarioSocConyugal;
        document.getElementById("textfield62").value=obj.BeneficiarioOcupacion;
        document.getElementById("nomrazsoc2").value=obj.RazonSocial;
        document.getElementById("telsol2").value=obj.TelPM;
        document.getElementById("rfcsol1").value=obj.RFCPM;
        document.getElementById("rfcsol1").readonly=true;

        document.getElementById("dirsolpm").value=obj.DireccionPM;
        document.getElementById("dirnumsolpm").value=obj.NumDireccionPM;
        document.getElementById("mailsol2").value=obj.EmailPM;
            cdd=document.getElementById("colsolpm");
            recpostales = document.createElement("option");
            recpostales.text = obj.ColoniaPM;
            recpostales.value = obj.ColoniaPM;
            cdd.add(recpostales);
        document.getElementById("colsolpm").value=obj.ColoniaPM;
            cdd=document.getElementById("cdsolpm");
            recpostales = document.createElement("option");
            recpostales.text = obj.CiudadPM;
            recpostales.value = obj.CiudadPM;
            cdd.add(recpostales);
        document.getElementById("cdsolpm").value=obj.CiudadPM;
            cdd=document.getElementById("edosolpm");
            recpostales = document.createElement("option");
            recpostales.text = obj.EstadoPM;
            recpostales.value = obj.EstadoPM;
            cdd.add(recpostales);
        document.getElementById("edosolpm").value=obj.EstadoPM;
        document.getElementById("cpsolpm").value=obj.CPPM;

        document.getElementById("actprinc").value=obj.ActPrinPM;
        document.getElementById("cantperson").value=obj.CantPersonalPM;
        if(obj.InOperacionesPM=="0000-00-00"){
            document.getElementById("inicoper1").value="";
        }else{
            document.getElementById("inicoper1").value=obj.InOperacionesPM;
        }
        if(obj.ConstEmpresaPM=="0000-00-00"){
            document.getElementById("inicoper13").value="";
        }else{
            document.getElementById("inicoper13").value=obj.ConstEmpresaPM;
        }
        
        document.getElementById("antemp").value=obj.AntiguedadPM;
        document.getElementById("apodsusc").value=obj.ApoderadoPM;
        document.getElementById("nomconemp").value=obj.ContEmpNombre;

        document.getElementById("segnomconemp").value=obj.ContEmpSegNombre;
        document.getElementById("apepaconemp").value=obj.ContEmpApPat;
        document.getElementById("apemaconemp").value=obj.ContEmpApMat;
        document.getElementById("datobdir22").value=obj.ContEmpDireccion;
            cdd=document.getElementById("datobcol23");
            recpostales = document.createElement("option");
            recpostales.text = obj.ContEmpColonia;
            recpostales.value = obj.ContEmpColonia;
            cdd.add(recpostales);
        document.getElementById("datobcol23").value=obj.ContEmpColonia;
            cdd=document.getElementById("colsol22");
            recpostales = document.createElement("option");
            recpostales.text = obj.ContEmpCiudad;
            recpostales.value = obj.ContEmpCiudad;
            cdd.add(recpostales);
        document.getElementById("colsol22").value=obj.ContEmpCiudad;
            cdd=document.getElementById("cdsol22");
            recpostales = document.createElement("option");
            recpostales.text = obj.ContEmpEstado;
            recpostales.value = obj.ContEmpEstado;
            cdd.add(recpostales);
        document.getElementById("cdsol22").value=obj.ContEmpEstado;

        document.getElementById("lugnacsol22").value=obj.ContEmpCP;
        document.getElementById("rfcconemp1").value=obj.ContEmpRFC;
        document.getElementById("telconemp1").value=obj.ContEmpTel;
        document.getElementById("mailconemp").value=obj.ContEmpEmail;
        document.getElementById("puesconemp").value=obj.ContEmpPuesto;
        document.getElementById("accionista1").value=obj.Acc1Nombre;
        document.getElementById("rfcaccion1").value=obj.Acc1RFC;

        document.getElementById("porcent1").value=obj.Acc1Porcentaje;
        document.getElementById("accionista2").value=obj.Acc2Nombre;
        document.getElementById("rfcaccion2").value=obj.Acc2RFC;
        document.getElementById("porcent2").value=obj.Acc2Porcentaje;
        document.getElementById("accionista3").value=obj.Acc3Nombre;
        document.getElementById("rfcaccion3").value=obj.Acc3RFC;
        document.getElementById("porcent3").value=obj.Acc3Porcentaje;

        document.getElementById("accionista4").value=obj.Acc4Nombre;
        document.getElementById("rfcaccion4").value=obj.Acc4RFC;
        document.getElementById("porcent4").value=obj.Acc4Porcentaje;
        document.getElementById("accpermor1").value=obj.Acc5Nombre;
        document.getElementById("rfcaccpermor1").value=obj.Acc5RFC;
        document.getElementById("permoracc1").value=obj.Acc5Porcentaje;
        document.getElementById("accpermor2").value=obj.Acc6Nombre;
        document.getElementById("rfcaccpermor2").value=obj.Acc6RFC;
        document.getElementById("permoracc2").value=obj.Acc6Porcentaje;




         document.getElementById("botonmodcliente").style.display="block";


      
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);
}



$("#continuarcliente").click(function(event) {
    
   var data = new FormData();
   data.append('function', "continuaregistro");
   
   //data.append('id', obj.id);

   data.append('TipoCliente', "df");
   
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
        $("#tablajson tbody tr").remove();
        //alert(xmlhttp.responseText);
        obj = JSON.parse(xmlhttp.responseText);
        //alert(obj[0].id);
        $.each(obj, function(i,cliente){
            var newRow =
            "<tr>"
            +"<td> <input onclick='contiregcliente(this.id)' class='button' type='button' name='"+cliente.id+"' id='"+cliente.id+"' value='"+cliente.id+"'></td>";

            if(cliente.TipoCliente=="Persona Fisica"){
                 newRow +="<td> "+cliente.NombrePF+" "+cliente.SegNombrePF+" "+cliente.ApPatPF+" "+cliente.ApMatPF+"</td>"
                +"<td> "+cliente.CURPPF+"</td>"
                +"</tr>";
            }
            if(cliente.TipoCliente=="Persona Moral"){
                 newRow +="<td> "+cliente.RazonSocial+"</td>"
                +"<td> "+cliente.RFCPM+"</td>"
                +"</tr>";
            }

           
            $(newRow).appendTo("#tablajson tbody");
        });
        
        
        
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);
});




$("#botonmodcliente").click(function(event) {
    if(document.getElementById('cpsol').value!="" && (document.getElementById('colsol').value=="" || document.getElementById('edosol').value=="" || document.getElementById('cdsol').value=="" || document.getElementById('textfield5').value=="")){
        document.getElementById("colsol").required=true;
        document.getElementById("edosol").required=true;
        document.getElementById("cdsol").required=true;
        document.getElementById("textfield5").required=true;
        }else{
            document.getElementById("colsol").required=false;
            document.getElementById("edosol").required=false;
            document.getElementById("cdsol").required=false;
            document.getElementById("textfield5").required=false;
        }

    if(document.getElementById('cpneg').value!="" && (document.getElementById('colneg').value=="" || document.getElementById('estneg').value=="" || document.getElementById('munneg').value=="" || document.getElementById('cdneg').value=="")){
        document.getElementById("colneg").required=true;
        document.getElementById("estneg").required=true;
        document.getElementById("munneg").required=true;
        document.getElementById("cdneg").required=true;
        }else{
            document.getElementById("colneg").required=false;
            document.getElementById("estneg").required=false;
            document.getElementById("munneg").required=false;
            document.getElementById("cdneg").required=false;
        }

    if(document.getElementById('refpercp').value!="" && (document.getElementById('refpercol').value=="" || document.getElementById('refperest').value=="" || document.getElementById('refpermun').value=="" || document.getElementById('refpercd').value=="")){
        document.getElementById("refpercol").required=true;
        document.getElementById("refperest").required=true;
        document.getElementById("refpermun").required=true;
        document.getElementById("refpercd").required=true;
        }else{
            document.getElementById("refpercol").required=false;
            document.getElementById("refperest").required=false;
            document.getElementById("refpermun").required=false;
            document.getElementById("refpercd").required=false;
        }

    if(document.getElementById('refpercp2').value!="" && (document.getElementById('refpercol2').value=="" || document.getElementById('refperest2').value=="" || document.getElementById('refpermun2').value=="" || document.getElementById('refpercd2').value=="")){
        document.getElementById("refpercol2").required=true;
        document.getElementById("refperest2").required=true;
        document.getElementById("refpermun2").required=true;
        document.getElementById("refpercd2").required=true;
        }else{
            document.getElementById("refpercol2").required=false;
            document.getElementById("refperest2").required=false;
            document.getElementById("refpermun2").required=false;
            document.getElementById("refpercd2").required=false;
        }


    if(document.getElementById('refcomcp').value!="" && (document.getElementById('refcomcol').value=="" || document.getElementById('refcomest').value=="" || document.getElementById('refcommun').value=="" || document.getElementById('refcomcd').value=="")){
        document.getElementById("refcomcol").required=true;
        document.getElementById("refcomest").required=true;
        document.getElementById("refcommun").required=true;
        document.getElementById("refcomcd").required=true;
        }else{
            document.getElementById("refcomcol").required=false;
            document.getElementById("refcomest").required=false;
            document.getElementById("refcommun").required=false;
            document.getElementById("refcomcd").required=false;
        }

    if(document.getElementById('refcomcp2').value!="" && (document.getElementById('refcomcol2').value=="" || document.getElementById('refcomest2').value=="" || document.getElementById('refcommun2').value=="" || document.getElementById('refcomcd2').value=="")){
        document.getElementById("refcomcol2").required=true;
        document.getElementById("refcomest2").required=true;
        document.getElementById("refcommun2").required=true;
        document.getElementById("refcomcd2").required=true;
        }else{
            document.getElementById("refcomcol2").required=false;
            document.getElementById("refcomest2").required=false;
            document.getElementById("refcommun2").required=false;
            document.getElementById("refcomcd2").required=false;
        }


    if(document.getElementById('textfield50').value!="" && (document.getElementById('textfield49').value=="" || document.getElementById('textfield59').value=="" || document.getElementById('textfield58').value=="" /*|| document.getElementById('refcomcd2').value==""*/)){
        document.getElementById("textfield49").required=true;
        document.getElementById("textfield59").required=true;
        document.getElementById("textfield58").required=true;
        //document.getElementById("refcomcd2").required=true;
        }else{
            document.getElementById("textfield49").required=false;
            document.getElementById("textfield59").required=false;
            document.getElementById("textfield58").required=false;
          //  document.getElementById("refcomcd2").required=false;
        }

    if(document.getElementById('cpsolpm').value!="" && (document.getElementById('colsolpm').value=="" || document.getElementById('cdsolpm').value=="" || document.getElementById('edosolpm').value=="" /*|| document.getElementById('refcomcd2').value==""*/)){
        document.getElementById("colsolpm").required=true;
        document.getElementById("cdsolpm").required=true;
        document.getElementById("edosolpm").required=true;
        //document.getElementById("refcomcd2").required=true;
        }else{
            document.getElementById("colsolpm").required=false;
            document.getElementById("cdsolpm").required=false;
            document.getElementById("edosolpm").required=false;
          //  document.getElementById("refcomcd2").required=false;
        }

    if(document.getElementById('lugnacsol22').value!="" && (document.getElementById('datobcol23').value=="" || document.getElementById('colsol22').value=="" || document.getElementById('cdsol22').value=="" /*|| document.getElementById('refcomcd2').value==""*/)){
        document.getElementById("datobcol23").required=true;
        document.getElementById("colsol22").required=true;
        document.getElementById("cdsol22").required=true;
        //document.getElementById("refcomcd2").required=true;
        }else{
            document.getElementById("datobcol23").required=false;
            document.getElementById("colsol22").required=false;
            document.getElementById("cdsol22").required=false;
          //  document.getElementById("refcomcd2").required=false;
        }




    $('#form1').foundation('validateForm');



var validacion=false;
//$( "#panel1c-label" ).addClass( "is-invalid-input" );
$( "#panel1c-label" ).removeClass( "is-invalid-input" );
$( "#panel2c-label" ).removeClass( "is-invalid-input" );
$( "#panel3c-label" ).removeClass( "is-invalid-input" );
$( "#panel4c-label" ).removeClass( "is-invalid-input" );
$( "#panel5c-label" ).removeClass( "is-invalid-input" );
$( "#panel6c-label" ).removeClass( "is-invalid-input" );
$( "#panel7c-label" ).removeClass( "is-invalid-input" );
$( "#panel8c-label" ).removeClass( "is-invalid-input" );
$( "#panel9c-label" ).removeClass( "is-invalid-input" );




$('#panel1c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel1c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel1c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel1c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });



$('#panel2c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel2c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel2c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel2c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel3c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel3c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel3c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel3c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel4c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel4c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel4c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel4c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel5c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel5c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel5c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel5c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel6c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel6c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel7c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel7c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel7c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel7c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel8c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel8c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel8c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel8c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel9c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel9c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel9c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel9c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });




    if(validacion){
         console.log("Hay errores");
         alert("¡¡Verifica Que Todos Los Datos Sean Correctos!!");
         return validacion;
    }





   
    
   var data = new FormData(document.forms['form1']);
   data.append('function', "modificacioncliente");
   
   data.append('id', obj.id);

   data.append('TipoCliente', obj.TipoCliente);
   
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
        
        document.getElementById("cancelarcliente").disabled = true;
        
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);



});







$("#requestmodificarcliente").click(function(event) {


    
   var data = new FormData();
   data.append('tipodecliente', document.getElementById("selectmodificacliente").value);
   data.append('idpf', document.getElementById("idmodificacliente").value);
   data.append('curppf', document.getElementById("curpmodificacliente").value);
   data.append('idpm', document.getElementById("idmodificaclientepm").value);
   data.append('rfcpm', document.getElementById("curpmodificaclientepm").value);

   document.getElementById("idmodificacliente").value="";
   document.getElementById("curpmodificacliente").value="";
   document.getElementById("idmodificaclientepm").value="";
   document.getElementById("curpmodificaclientepm").value="";
   document.getElementById("idmodificaclientepm").disabled=false;
   document.getElementById("curpmodificaclientepm").disabled=false;
   document.getElementById("idmodificacliente").disabled=false;
   document.getElementById("curpmodificacliente").disabled=false;

   data.append('function', "modificarcliente");
   
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
        
        if(xmlhttp.responseText=='null'){
            alert("¡No Existe el Registro!, Favor de Ingresar Información correcta");
            return;
        }
        if(xmlhttp.responseText=='¡Por favor de Ingresar un Dato!'){
            alert("¡Por favor de Ingresar un Dato!");
            return;
        }


        obj = JSON.parse(xmlhttp.responseText);

        $( "#cerrarmodalmodificacliente" ).click();
        document.getElementById("botonescliente").style.display="none";
        document.getElementById("contenidorequestcliente").style.display="block";
        document.getElementById("idcliente").value=obj.id;
        document.getElementById("cancelarcliente").disabled=true;
        document.getElementById("TipoCliente").value=obj.TipoCliente;
        document.getElementById("TipoCliente").style.display='none';
        cambiacartas();
        document.getElementById("nomsol").value=obj.NombrePF;
        document.getElementById("segnomsol").value=obj.SegNombrePF;
        document.getElementById("apepasol").value=obj.ApPatPF;
        document.getElementById("apemasol").value=obj.ApMatPF;
        document.getElementById("rfc1").value=obj.RFCPF;
        document.getElementById("telsol1").value=obj.TelefonoPF;
        document.getElementById("movsol1").value=obj.MovilPF;
        document.getElementById("mailsol").value=obj.EmailPF;
        document.getElementById("dirsol").value=obj.DireccionPF;
        document.getElementById("dirnumsol").value=obj.NumDireccionPF;
        document.getElementById("cpsol").value=obj.CPPF;
        
        var cdd=document.getElementById("edosol");
        var recpostales = document.createElement("option");
                recpostales.text = obj.EstadoPF;
                recpostales.value = obj.EstadoPF;
                cdd.add(recpostales);

            cdd=document.getElementById("colsol");
            recpostales = document.createElement("option");
            recpostales.text = obj.ColoniaPF;
            recpostales.value = obj.ColoniaPF;
            cdd.add(recpostales);

            cdd=document.getElementById("cdsol");
            recpostales = document.createElement("option");
            recpostales.text = obj.CiudadPF;
            recpostales.value = obj.CiudadPF;
            cdd.add(recpostales);

            cdd=document.getElementById("textfield5");
            recpostales = document.createElement("option");
            recpostales.text = obj.MunicipioPF;
            recpostales.value = obj.MunicipioPF;
            cdd.add(recpostales);
        document.getElementById("colsol").value=obj.ColoniaPF;
        document.getElementById("lugnacsol").value=obj.LugNacimientoPF;
        document.getElementById("edosol").value=obj.EstadoPF;
        document.getElementById("cdsol").value=obj.CiudadPF;
        document.getElementById("textfield5").value=obj.MunicipioPF;
        document.getElementById("curpsol").value=obj.CURPPF;
        document.getElementById("curpsol").readonly=true;
        document.getElementById("sexsol").value=obj.SexoPF;
        if(obj.FechNacimientoPF=="0000-00-00"){
            document.getElementById("fechnacsol").value="";
        }else{
            document.getElementById("fechnacsol").value=obj.FechNacimientoPF;
        }
        
        document.getElementById("edsol").value=obj.Edad;
        document.getElementById("nacsol").value=obj.NacionalidadPF;
        document.getElementById("depensol").value=obj.NumDependientesPF;
        document.getElementById("acdomsol").value=obj.AcreditaDomPF;
        document.getElementById("anosol").value=obj.RecidirCiudadPF;
        document.getElementById("arraisol").value=obj.ArraigoDomPF;
        document.getElementById("arraisolanios").value=obj.ArraigoAniosDomPF;
        document.getElementById("vivsol").value=obj.ViviendaPF;
        vivsol();

        document.getElementById("vivsolesp").value=obj.EspViviendaPF;
        document.getElementById("civilsol").value=obj.EstCivilPF;
        civilsol();
        document.getElementById("autosol").value=obj.AutoPropioPF;
        autosol();
        document.getElementById("marcasol").value=obj.EspAuto;
        document.getElementById("inmusol").value=obj.InmueblePF;
        document.getElementById("actempresarial").value=obj.ActividadEmpresarial;
        actempresarial();
        document.getElementById("puestosol").value=obj.PuestoPF;

        document.getElementById("depasol").value=obj.DepartamentoPF;
        if(obj.DesdeEmpPF=="0000-00-00"){
            document.getElementById("desdesol").value="";
        }else{
            document.getElementById("desdesol").value=obj.DesdeEmpPF;
        }
        document.getElementById("desdesolanios").value=obj.DesdeAniosEmpPF;
        document.getElementById("compasol").value=obj.CompaniaPF;
        document.getElementById("compatelsol1").value=obj.TelefonoEmpPF;
        document.getElementById("compatelsolext").value=obj.ExtensionEmpPF;
        document.getElementById("giroprof").value=obj.GiroPF;
        document.getElementById("noempleados").value=obj.NumEmpleadosPF;

        document.getElementById("domneg").value=obj.DomicilioNegPF;
        document.getElementById("numdomneg").value=obj.NumDomicilioNegPF;
        document.getElementById("cpneg").value=obj.CPNegPF;
            cdd=document.getElementById("colneg");
            recpostales = document.createElement("option");
            recpostales.text = obj.ColoniaNegPF;
            recpostales.value = obj.ColoniaNegPF;
            cdd.add(recpostales);

        document.getElementById("colneg").value=obj.ColoniaNegPF;
            cdd=document.getElementById("estneg");
            recpostales = document.createElement("option");
            recpostales.text = obj.EstadoNegPF;
            recpostales.value = obj.EstadoNegPF;
            cdd.add(recpostales);

        document.getElementById("estneg").value=obj.EstadoNegPF;
            cdd=document.getElementById("munneg");
            recpostales = document.createElement("option");
            recpostales.text = obj.MunicipioNegPF;
            recpostales.value = obj.MunicipioNegPF;
            cdd.add(recpostales);

        document.getElementById("munneg").value=obj.MunicipioNegPF;
            cdd=document.getElementById("cdneg");
            recpostales = document.createElement("option");
            recpostales.text = obj.CiudadNegPF;
            recpostales.value = obj.CiudadNegPF;
            cdd.add(recpostales);
        document.getElementById("cdneg").value=obj.CiudadNegPF;

        document.getElementById("nomref1").value=obj.RefPerNom1PF;
        document.getElementById("parenref1").value=obj.RefPerParentesco1PF;
        document.getElementById("telref11").value=obj.RefPerTelefono1PF;
        document.getElementById("refperdir").value=obj.RefPerDirPF;
        document.getElementById("refpernumdir").value=obj.RefPerNumDirPF;
        document.getElementById("refpercp").value=obj.RefPerCPPF;
            cdd=document.getElementById("refpercol");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerColPF;
            recpostales.value = obj.RefPerColPF;
            cdd.add(recpostales);
        document.getElementById("refpercol").value=obj.RefPerColPF;
            cdd=document.getElementById("refperest");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerEstPF;
            recpostales.value = obj.RefPerEstPF;
            cdd.add(recpostales);
        document.getElementById("refperest").value=obj.RefPerEstPF;
            cdd=document.getElementById("refpermun");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerMunPF;
            recpostales.value = obj.RefPerMunPF;
            cdd.add(recpostales);
        document.getElementById("refpermun").value=obj.RefPerMunPF;
            cdd=document.getElementById("refpercd");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerCdPF;
            recpostales.value = obj.RefPerCdPF;
            cdd.add(recpostales);
        document.getElementById("refpercd").value=obj.RefPerCdPF;



        document.getElementById("nomref2").value=obj.RefPerNom2PF;
        document.getElementById("parenref2").value=obj.RefPerParentesco2PF;
        document.getElementById("telref12").value=obj.RefPerTelefono2PF;
        document.getElementById("refperdir2").value=obj.RefPerDirPF;
        document.getElementById("refpernumdir2").value=obj.RefPerNumDirPF;
        document.getElementById("refpercp2").value=obj.RefPerCPPF2;
        cdd=document.getElementById("refpercol2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerColPF2;
            recpostales.value = obj.RefPerColPF2;
            cdd.add(recpostales);
        document.getElementById("refpercol2").value=obj.RefPerColPF2;
            cdd=document.getElementById("refperest2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerEstPF2;
            recpostales.value = obj.RefPerEstPF2;
            cdd.add(recpostales);
        document.getElementById("refperest2").value=obj.RefPerEstPF2;
            cdd=document.getElementById("refpermun2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerMunPF2;
            recpostales.value = obj.RefPerMunPF2;
            cdd.add(recpostales);
        document.getElementById("refpermun2").value=obj.RefPerMunPF2;
            cdd=document.getElementById("refpercd2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefPerCdPF2;
            recpostales.value = obj.RefPerCdPF2;
            cdd.add(recpostales);
        document.getElementById("refpercd2").value=obj.RefPerCdPF2;

        document.getElementById("refbanc").value=obj.Banco1;
        document.getElementById("numcuebanc").value=obj.CuentaBanc1;
        document.getElementById("sucbanc1").value=obj.SucursalBanc1;
        if(obj.FechaApertura1=="0000-00-00"){
            document.getElementById("aperbanc1d").value="";
        }else{
            document.getElementById("aperbanc1d").value=obj.FechaApertura1;
        }
        
        document.getElementById("refbanc2").value=obj.Banco2;
        document.getElementById("numcuebanc2").value=obj.CuentaBanc2;
        document.getElementById("sucbanc2").value=obj.SucursalBanc2;
        if(obj.FechaApertura2=="0000-00-00"){
            document.getElementById("aperbanc2d").value="";
        }else{
           document.getElementById("aperbanc2d").value=obj.FechaApertura2; 
        }
        
        document.getElementById("cargdir").value=obj.CarDirBanco;
        document.getElementById("nocuentcd").value=obj.CLABE;
        document.getElementById("refcomemp1").value=obj.RefComEmp1;
        document.getElementById("telrefcom11").value=obj.RefComTel1;
        document.getElementById("antirefcom1").value=obj.RefComAnt1;
        document.getElementById("refcomdir").value=obj.RefComDir;
        document.getElementById("refcomnumdir").value=obj.RefComNumDir;
        document.getElementById("refcomcp").value=obj.RefComCP;
            cdd=document.getElementById("refcomcol");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComCol;
            recpostales.value = obj.RefComCol;
            cdd.add(recpostales);
        document.getElementById("refcomcol").value=obj.RefComCol;
            cdd=document.getElementById("refcomest");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComEst;
            recpostales.value = obj.RefComEst;
            cdd.add(recpostales);
        document.getElementById("refcomest").value=obj.RefComEst;
            cdd=document.getElementById("refcommun");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComMun;
            recpostales.value = obj.RefComMun;
            cdd.add(recpostales);
        document.getElementById("refcommun").value=obj.RefComMun;
            cdd=document.getElementById("refcomcd");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComCd;
            recpostales.value = obj.RefComCd;
            cdd.add(recpostales);
        document.getElementById("refcomcd").value=obj.RefComCd;



        document.getElementById("refcomemp2").value=obj.RefComEmp2;

        document.getElementById("telrefcom22").value=obj.RefComTel1;
        document.getElementById("antirefcom2").value=obj.RefComAnt1;
        document.getElementById("refcomdir2").value=obj.RefComDir;
        document.getElementById("refcomnumdir2").value=obj.RefComNumDir;
        document.getElementById("refcomcp2").value=obj.RefComCP2;
            cdd=document.getElementById("refcomcol2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComCol2;
            recpostales.value = obj.RefComCol2;
            cdd.add(recpostales);
        document.getElementById("refcomcol2").value=obj.RefComCol2;
            cdd=document.getElementById("refcomest2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComEst2;
            recpostales.value = obj.RefComEst2;
            cdd.add(recpostales);
        document.getElementById("refcomest2").value=obj.RefComEst2;
            cdd=document.getElementById("refcommun2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComMun2;
            recpostales.value = obj.RefComMun2;
            cdd.add(recpostales);
        document.getElementById("refcommun2").value=obj.RefComMun2;
            cdd=document.getElementById("refcomcd2");
            recpostales = document.createElement("option");
            recpostales.text = obj.RefComCd2;
            recpostales.value = obj.RefComCd2;
            cdd.add(recpostales);
        document.getElementById("refcomcd2").value=obj.RefComCd2;


        document.getElementById("conyunom").value=obj.ConyugeNom;
        document.getElementById("conyuape1").value=obj.ConyugeApPat;
        document.getElementById("conyuape2").value=obj.ConyugeApMat;
        document.getElementById("compaconyu").value=obj.ConyugeCompania;
        document.getElementById("puestconyu").value=obj.ConyugePuesto;

        document.getElementById("benesol3").value=obj.BeneficiarioNom;
        document.getElementById("benesol1").value=obj.BeneficiarioApPat;
        document.getElementById("benesol2").value=obj.BeneficiarioApMat;
        document.getElementById("textfield48").value=obj.BeneficiarioDom;
            cdd=document.getElementById("textfield49");
            recpostales = document.createElement("option");
            recpostales.text = obj.BeneficiarioCol;
            recpostales.value = obj.BeneficiarioCol;
            cdd.add(recpostales);
        document.getElementById("textfield49").value=obj.BeneficiarioCol;
        document.getElementById("textfield50").value=obj.BeneficiarioCP;
        document.getElementById("textfield51").value=obj.BeneficiarioPais;

        document.getElementById("textfield52").value=obj.BeneficiarioTel;
        document.getElementById("textfield53").value=obj.BeneficiarioCURP;
        document.getElementById("textfield54").value=obj.BeneficiarioRFC;
        document.getElementById("textfield55").value=obj.BeneficiarioParent;
        document.getElementById("textfield56").value=obj.BeneficiarioPorciento;
        if(obj.BeneficiarioFechNac=="0000-00-00"){
            document.getElementById("textfield57").value="";
        }else{
          document.getElementById("textfield57").value=obj.BeneficiarioFechNac;  
        }
            cdd=document.getElementById("textfield58");
            recpostales = document.createElement("option");
            recpostales.text = obj.BeneficiarioMun;
            recpostales.value = obj.BeneficiarioMun;
            cdd.add(recpostales);
        document.getElementById("textfield58").value=obj.BeneficiarioMun;
            cdd=document.getElementById("textfield59");
            recpostales = document.createElement("option");
            recpostales.text = obj.BeneficiarioEstado;
            recpostales.value = obj.BeneficiarioEstado;
            cdd.add(recpostales);
        document.getElementById("textfield59").value=obj.BeneficiarioEstado;
        document.getElementById("textfield60").value=obj.BeneficiarioEstCivil;
        estcivbene();
        document.getElementById("textfield61").value=obj.BeneficiarioSocConyugal;
        document.getElementById("textfield62").value=obj.BeneficiarioOcupacion;
        document.getElementById("nomrazsoc2").value=obj.RazonSocial;
        document.getElementById("telsol2").value=obj.TelPM;
        document.getElementById("rfcsol1").value=obj.RFCPM;
        document.getElementById("rfcsol1").readOnly=true;

        document.getElementById("dirsolpm").value=obj.DireccionPM;
        document.getElementById("dirnumsolpm").value=obj.NumDireccionPM;
        document.getElementById("mailsol2").value=obj.EmailPM;
         cdd=document.getElementById("colsolpm");
            recpostales = document.createElement("option");
            recpostales.text = obj.ColoniaPM;
            recpostales.value = obj.ColoniaPM;
            cdd.add(recpostales);
        document.getElementById("colsolpm").value=obj.ColoniaPM;
            cdd=document.getElementById("cdsolpm");
            recpostales = document.createElement("option");
            recpostales.text = obj.CiudadPM;
            recpostales.value = obj.CiudadPM;
            cdd.add(recpostales);
        document.getElementById("cdsolpm").value=obj.CiudadPM;
            cdd=document.getElementById("edosolpm");
            recpostales = document.createElement("option");
            recpostales.text = obj.EstadoPM;
            recpostales.value = obj.EstadoPM;
            cdd.add(recpostales);
        document.getElementById("edosolpm").value=obj.EstadoPM;
        document.getElementById("cpsolpm").value=obj.CPPM;

        document.getElementById("actprinc").value=obj.ActPrinPM;
        document.getElementById("cantperson").value=obj.CantPersonalPM;
        if(obj.InOperacionesPM=="0000-00-00"){
            document.getElementById("inicoper1").value="";
        }else{
            document.getElementById("inicoper1").value=obj.InOperacionesPM;
        }
        if(obj.ConstEmpresaPM=="0000-00-00"){
            document.getElementById("inicoper13").value="";
        }else{
            document.getElementById("inicoper13").value=obj.ConstEmpresaPM;
        }
        
        document.getElementById("antemp").value=obj.AntiguedadPM;
        document.getElementById("apodsusc").value=obj.ApoderadoPM;
        document.getElementById("nomconemp").value=obj.ContEmpNombre;

        document.getElementById("segnomconemp").value=obj.ContEmpSegNombre;
        document.getElementById("apepaconemp").value=obj.ContEmpApPat;
        document.getElementById("apemaconemp").value=obj.ContEmpApMat;
        document.getElementById("datobdir22").value=obj.ContEmpDireccion;
        cdd=document.getElementById("datobcol23");
            recpostales = document.createElement("option");
            recpostales.text = obj.ContEmpColonia;
            recpostales.value = obj.ContEmpColonia;
            cdd.add(recpostales);
        document.getElementById("datobcol23").value=obj.ContEmpColonia;
            cdd=document.getElementById("colsol22");
            recpostales = document.createElement("option");
            recpostales.text = obj.ContEmpCiudad;
            recpostales.value = obj.ContEmpCiudad;
            cdd.add(recpostales);
        document.getElementById("colsol22").value=obj.ContEmpCiudad;
            cdd=document.getElementById("cdsol22");
            recpostales = document.createElement("option");
            recpostales.text = obj.ContEmpEstado;
            recpostales.value = obj.ContEmpEstado;
            cdd.add(recpostales);
        document.getElementById("cdsol22").value=obj.ContEmpEstado;
        document.getElementById("lugnacsol22").value=obj.ContEmpCP;
        document.getElementById("rfcconemp1").value=obj.ContEmpRFC;
        document.getElementById("telconemp1").value=obj.ContEmpTel;
        document.getElementById("mailconemp").value=obj.ContEmpEmail;
        document.getElementById("puesconemp").value=obj.ContEmpPuesto;
        document.getElementById("accionista1").value=obj.Acc1Nombre;
        document.getElementById("rfcaccion1").value=obj.Acc1RFC;

        document.getElementById("porcent1").value=obj.Acc1Porcentaje;
        document.getElementById("accionista2").value=obj.Acc2Nombre;
        document.getElementById("rfcaccion2").value=obj.Acc2RFC;
        document.getElementById("porcent2").value=obj.Acc2Porcentaje;
        document.getElementById("accionista3").value=obj.Acc3Nombre;
        document.getElementById("rfcaccion3").value=obj.Acc3RFC;
        document.getElementById("porcent3").value=obj.Acc3Porcentaje;

        document.getElementById("accionista4").value=obj.Acc4Nombre;
        document.getElementById("rfcaccion4").value=obj.Acc4RFC;
        document.getElementById("porcent4").value=obj.Acc4Porcentaje;
        document.getElementById("accpermor1").value=obj.Acc5Nombre;
        document.getElementById("rfcaccpermor1").value=obj.Acc5RFC;
        document.getElementById("permoracc1").value=obj.Acc5Porcentaje;
        document.getElementById("accpermor2").value=obj.Acc6Nombre;
        document.getElementById("rfcaccpermor2").value=obj.Acc6RFC;
        document.getElementById("permoracc2").value=obj.Acc6Porcentaje;
        document.getElementById("fecharegistro").value=obj.FechaRegistro;

        


         document.getElementById("botonmodcliente").style.display="block";


      
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);
});

$( "#curpmodificaclientepm" ).change(function() {
    document.getElementById("idmodificaclientepm").disabled=false;
    document.getElementById("curpmodificaclientepm").disabled=false;
  if(document.getElementById("curpmodificaclientepm").value!=""){
    document.getElementById("idmodificaclientepm").disabled=true;
    document.getElementById("curpmodificaclientepm").disabled=false;
  }
  
});


$( "#idmodificaclientepm" ).change(function() {
    document.getElementById("idmodificaclientepm").disabled=false;
    document.getElementById("curpmodificaclientepm").disabled=false;
  if(document.getElementById("idmodificaclientepm").value!=""){
    document.getElementById("idmodificaclientepm").disabled=false;
    document.getElementById("curpmodificaclientepm").disabled=true;
  }
  
});




$( "#curpmodificacliente" ).change(function() {
    document.getElementById("idmodificacliente").disabled=false;
    document.getElementById("curpmodificacliente").disabled=false;
  if(document.getElementById("curpmodificacliente").value!=""){
    document.getElementById("idmodificacliente").disabled=true;
    document.getElementById("curpmodificacliente").disabled=false;
  }
  
});


$( "#idmodificacliente" ).change(function() {
    document.getElementById("idmodificacliente").disabled=false;
    document.getElementById("curpmodificacliente").disabled=false;
  if(document.getElementById("idmodificacliente").value!=""){
    document.getElementById("idmodificacliente").disabled=false;
    document.getElementById("curpmodificacliente").disabled=true;
  }
  
});



$( "#selectmodificacliente" ).change(function() {
    document.getElementById("divmodificacliente1").style.display='none';
    document.getElementById("divmodificacliente2").style.display='none';
  if(document.getElementById("selectmodificacliente").value=="Persona Fisica"){
    document.getElementById("divmodificacliente1").style.display='block';
    document.getElementById("divmodificacliente2").style.display='none';
  }
  if(document.getElementById("selectmodificacliente").value=="Persona Moral"){
    document.getElementById("divmodificacliente1").style.display='none';
    document.getElementById("divmodificacliente2").style.display='block';
  }
});



        
        
 

$("#nuevocliente").click(function(event) {
    
   var data = new FormData();
   data.append('function', "nuevocliente");
   
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
        //alert(xmlhttp.responseText);
        obj = JSON.parse(xmlhttp.responseText);
        document.getElementById("botonescliente").style.display="none";
        document.getElementById("contenidorequestcliente").style.display="block";
        document.getElementById("guardarcliente").style.display="block";
        document.getElementById("idcliente").value=obj[0];
        
      
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);
});

$("#guardarcliente").click(function(event) {

    if(document.getElementById('TipoCliente').value=="Persona Fisica"){
        document.getElementById("nomsol").required=true;
        document.getElementById("apepasol").required=true;
        document.getElementById("curpsol").required=true;
        //document.getElementById("textfield5").required=true;
    }else if(document.getElementById('TipoCliente').value=="Persona Moral"){
            document.getElementById("nomrazsoc2").required=true;
            document.getElementById("rfcsol1").required=true;
    }else{
        document.getElementById("nomsol").required=false;
        document.getElementById("apepasol").required=false;
        document.getElementById("curpsol").required=false;
        document.getElementById("nomrazsoc2").required=false;
        document.getElementById("rfcsol1").required=false;
    }


    if(document.getElementById('cpsol').value!="" && (document.getElementById('colsol').value=="" || document.getElementById('edosol').value=="" || document.getElementById('cdsol').value=="" || document.getElementById('textfield5').value=="")){
        document.getElementById("colsol").required=true;
        document.getElementById("edosol").required=true;
        document.getElementById("cdsol").required=true;
        document.getElementById("textfield5").required=true;
        }else{
            document.getElementById("colsol").required=false;
            document.getElementById("edosol").required=false;
            document.getElementById("cdsol").required=false;
            document.getElementById("textfield5").required=false;
        }

    if(document.getElementById('cpneg').value!="" && (document.getElementById('colneg').value=="" || document.getElementById('estneg').value=="" || document.getElementById('munneg').value=="" || document.getElementById('cdneg').value=="")){
        document.getElementById("colneg").required=true;
        document.getElementById("estneg").required=true;
        document.getElementById("munneg").required=true;
        document.getElementById("cdneg").required=true;
        }else{
            document.getElementById("colneg").required=false;
            document.getElementById("estneg").required=false;
            document.getElementById("munneg").required=false;
            document.getElementById("cdneg").required=false;
        }

    if(document.getElementById('refpercp').value!="" && (document.getElementById('refpercol').value=="" || document.getElementById('refperest').value=="" || document.getElementById('refpermun').value=="" || document.getElementById('refpercd').value=="")){
        document.getElementById("refpercol").required=true;
        document.getElementById("refperest").required=true;
        document.getElementById("refpermun").required=true;
        document.getElementById("refpercd").required=true;
        }else{
            document.getElementById("refpercol").required=false;
            document.getElementById("refperest").required=false;
            document.getElementById("refpermun").required=false;
            document.getElementById("refpercd").required=false;
        }

    if(document.getElementById('refpercp2').value!="" && (document.getElementById('refpercol2').value=="" || document.getElementById('refperest2').value=="" || document.getElementById('refpermun2').value=="" || document.getElementById('refpercd2').value=="")){
        document.getElementById("refpercol2").required=true;
        document.getElementById("refperest2").required=true;
        document.getElementById("refpermun2").required=true;
        document.getElementById("refpercd2").required=true;
        }else{
            document.getElementById("refpercol2").required=false;
            document.getElementById("refperest2").required=false;
            document.getElementById("refpermun2").required=false;
            document.getElementById("refpercd2").required=false;
        }


    if(document.getElementById('refcomcp').value!="" && (document.getElementById('refcomcol').value=="" || document.getElementById('refcomest').value=="" || document.getElementById('refcommun').value=="" || document.getElementById('refcomcd').value=="")){
        document.getElementById("refcomcol").required=true;
        document.getElementById("refcomest").required=true;
        document.getElementById("refcommun").required=true;
        document.getElementById("refcomcd").required=true;
        }else{
            document.getElementById("refcomcol").required=false;
            document.getElementById("refcomest").required=false;
            document.getElementById("refcommun").required=false;
            document.getElementById("refcomcd").required=false;
        }

    if(document.getElementById('refcomcp2').value!="" && (document.getElementById('refcomcol2').value=="" || document.getElementById('refcomest2').value=="" || document.getElementById('refcommun2').value=="" || document.getElementById('refcomcd2').value=="")){
        document.getElementById("refcomcol2").required=true;
        document.getElementById("refcomest2").required=true;
        document.getElementById("refcommun2").required=true;
        document.getElementById("refcomcd2").required=true;
        }else{
            document.getElementById("refcomcol2").required=false;
            document.getElementById("refcomest2").required=false;
            document.getElementById("refcommun2").required=false;
            document.getElementById("refcomcd2").required=false;
        }


    if(document.getElementById('textfield50').value!="" && (document.getElementById('textfield49').value=="" || document.getElementById('textfield59').value=="" || document.getElementById('textfield58').value=="" /*|| document.getElementById('refcomcd2').value==""*/)){
        document.getElementById("textfield49").required=true;
        document.getElementById("textfield59").required=true;
        document.getElementById("textfield58").required=true;
        //document.getElementById("refcomcd2").required=true;
        }else{
            document.getElementById("textfield49").required=false;
            document.getElementById("textfield59").required=false;
            document.getElementById("textfield58").required=false;
          //  document.getElementById("refcomcd2").required=false;
        }

    if(document.getElementById('cpsolpm').value!="" && (document.getElementById('colsolpm').value=="" || document.getElementById('cdsolpm').value=="" || document.getElementById('edosolpm').value=="" /*|| document.getElementById('refcomcd2').value==""*/)){
        document.getElementById("colsolpm").required=true;
        document.getElementById("cdsolpm").required=true;
        document.getElementById("edosolpm").required=true;
        //document.getElementById("refcomcd2").required=true;
        }else{
            document.getElementById("colsolpm").required=false;
            document.getElementById("cdsolpm").required=false;
            document.getElementById("edosolpm").required=false;
          //  document.getElementById("refcomcd2").required=false;
        }

    if(document.getElementById('lugnacsol22').value!="" && (document.getElementById('datobcol23').value=="" || document.getElementById('colsol22').value=="" || document.getElementById('cdsol22').value=="" /*|| document.getElementById('refcomcd2').value==""*/)){
        document.getElementById("datobcol23").required=true;
        document.getElementById("colsol22").required=true;
        document.getElementById("cdsol22").required=true;
        //document.getElementById("refcomcd2").required=true;
        }else{
            document.getElementById("datobcol23").required=false;
            document.getElementById("colsol22").required=false;
            document.getElementById("cdsol22").required=false;
          //  document.getElementById("refcomcd2").required=false;
        }



    $('#form1').foundation('validateForm');



var validacion=false;
$( "#panel1c-label" ).removeClass( "is-invalid-input" );
$( "#panel2c-label" ).removeClass( "is-invalid-input" );
$( "#panel3c-label" ).removeClass( "is-invalid-input" );
$( "#panel4c-label" ).removeClass( "is-invalid-input" );
$( "#panel5c-label" ).removeClass( "is-invalid-input" );
$( "#panel6c-label" ).removeClass( "is-invalid-input" );
$( "#panel7c-label" ).removeClass( "is-invalid-input" );
$( "#panel8c-label" ).removeClass( "is-invalid-input" );
$( "#panel9c-label" ).removeClass( "is-invalid-input" );


    if($( "#TipoCliente").hasClass( "is-invalid-input" )){

        $( "#panel1c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

    
$('#panel1c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel1c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel1c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel1c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });



$('#panel2c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel2c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel2c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel2c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel3c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel3c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel3c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel3c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel4c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel4c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel4c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel4c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel5c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel5c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel5c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel5c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel6c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel6c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel7c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel7c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel7c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel7c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel8c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel8c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel8c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel8c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel9c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel9c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel9c').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel9c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });




    if(validacion){
         console.log("Hay errores");
         alert("¡¡Verifica Que Todos Los Datos Sean Correctos!!");
         return validacion;
    }






    
   var data = new FormData(document.forms['form1']);
   data.append('function', "guardacliente");
   
   data.append('id', obj[0]);
   




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
        
        document.getElementById("cancelarcliente").disabled = true;
        document.getElementById('TipoCliente').style.display='none';

        
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);

});


$("#cancelarcliente").click(function(event) {
    
   var data = new FormData();
   data.append('function', "cancelarcliente");
   
   
   
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
        document.getElementById("botonescliente").style.display="block";
        document.getElementById("contenidorequestcliente").style.display="none";
        document.getElementById("guardarcliente").style.display="none";
        
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);
});






function cambiacartas(){
	if(document.getElementById('TipoCliente').value==""){
		document.getElementById('pfa').style.display='none';
		document.getElementById('pm').style.display='none';
		document.getElementById('tabpanel7c').style.display='none';
		document.getElementById('tabpanel2c').style.display='none';
        document.getElementById('tabpanel3c').style.display='none';
	}else if(document.getElementById('TipoCliente').value=="Persona Fisica"){
		document.getElementById("pfa").style.display = "block";
		document.getElementById('tabpanel2c').style.display='block';
		document.getElementById('pm').style.display='none';
		document.getElementById('tabpanel7c').style.display='none';
        document.getElementById('tabpanel3c').style.display='block';
	}else if(document.getElementById('TipoCliente').value=="Persona Moral"){
		document.getElementById('tabpanel2c').style.display='none';
		document.getElementById('pfa').style.display='none';
		document.getElementById('pm').style.display='block';
		document.getElementById('tabpanel7c').style.display='block';
        document.getElementById('tabpanel3c').style.display='none';
        document.getElementById('tabpanel6c').style.display='none';
        document.getElementById('panel5c-label').style.display='block';
	}
	


}

$( "#TipoCliente" ).change(function() {
    cambiacartas();
    
  
});



$( "#civilsol" ).change(function() {
    if(document.getElementById('civilsol').value==""){
        document.getElementById('tabpanel6c').style.display='none';
    }else if(document.getElementById('civilsol').value=="Casado Bienes Mancomunados" || document.getElementById('civilsol').value=="Casado Bienes Separados"){
        document.getElementById('tabpanel6c').style.display='block';
    }else {
        document.getElementById('tabpanel6c').style.display='none';
    }
    
  
});

function civilsol(){
    if(document.getElementById('civilsol').value==""){
        document.getElementById('tabpanel6c').style.display='none';
    }else if(document.getElementById('civilsol').value=="Casado Bienes Mancomunados" || document.getElementById('civilsol').value=="Casado Bienes Separados"){
        document.getElementById('tabpanel6c').style.display='block';
    }else {
        document.getElementById('tabpanel6c').style.display='none';
    }
}


$( "#actempresarial" ).change(function() {
    actempresarial();
});

function actempresarial(){
    if(document.getElementById('actempresarial').value==""){
        document.getElementById('divgiroprof').style.display='none';
        document.getElementById('divnoempleados').style.display='none';
        //document.getElementById('divdomneg').style.display='none';
        document.getElementById('panel5c-label').style.display='none';
        
    }else if(document.getElementById('actempresarial').value=="Si"){
        document.getElementById('divgiroprof').style.display='block';
        document.getElementById('divnoempleados').style.display='block';
        //document.getElementById('divdomneg').style.display='block';
        document.getElementById('panel5c-label').style.display='block';
        
    }else {
        document.getElementById('divgiroprof').style.display='none';
        document.getElementById('divnoempleados').style.display='none';
        //document.getElementById('divdomneg').style.display='none';
        document.getElementById('panel5c-label').style.display='none';
        
    }
    
}



$( "#autosol" ).change(function() {
    autosol();
});

function autosol(){
    if(document.getElementById('autosol').value==""){
        document.getElementById('especifiquemarca').style.display='none';
    }else if(document.getElementById('autosol').value=="Si"){
        document.getElementById('especifiquemarca').style.display='block';
    }else {
        document.getElementById('especifiquemarca').style.display='none';
    }
    
}

$( "#vivsol" ).change(function() {
      vivsol();
});

function vivsol(){
    if(document.getElementById('vivsol').value==""){
        document.getElementById('divvivsolesp').style.display='none';
    }else if(document.getElementById('vivsol').value=="Otros especificar"){
        document.getElementById('divvivsolesp').style.display='block';
    }else {
        document.getElementById('divvivsolesp').style.display='none';
    }
}



/**
 * Funcion que devuelve true o false dependiendo de si la fecha es correcta.
 * Tiene que recibir el dia, mes y año
 */
function isValidDate(day,month,year)
{
    var dteDate;
 
    // En javascript, el mes empieza en la posicion 0 y termina en la 11 
    //   siendo 0 el mes de enero
    // Por esta razon, tenemos que restar 1 al mes
    month=month-1;
    // Establecemos un objeto Data con los valore recibidos
    // Los parametros son: año, mes, dia, hora, minuto y segundos
    // getDate(); devuelve el dia como un entero entre 1 y 31
    // getDay(); devuelve un num del 0 al 6 indicando siel dia es lunes,
    //   martes, miercoles ...
    // getHours(); Devuelve la hora
    // getMinutes(); Devuelve los minutos
    // getMonth(); devuelve el mes como un numero de 0 a 11
    // getTime(); Devuelve el tiempo transcurrido en milisegundos desde el 1
    //   de enero de 1970 hasta el momento definido en el objeto date
    // setTime(); Establece una fecha pasandole en milisegundos el valor de esta.
    // getYear(); devuelve el año
    // getFullYear(); devuelve el año
    dteDate=new Date(year,month,day);
 
    //Devuelva true o false...
    return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));
}
 
/**
 * Funcion para validar una fecha
 * Tiene que recibir:
 *  La fecha en formato ingles yyyy-mm-dd
 * Devuelve:
 *  true-Fecha correcta
 *  false-Fecha Incorrecta
 */
function validate_fecha(fecha)
{
    var patron=new RegExp("^(19|20)+([0-9]{2})([-])([0-9]{1,2})([-])([0-9]{1,2})$");
 
    if(fecha.search(patron)==0)
    {
        var values=fecha.split("-");
        if(isValidDate(values[2],values[1],values[0]))
        {
            return true;
        }
    }
    return false;
}
 
/**
 * Esta función calcula la edad de una persona y los meses
 * La fecha la tiene que tener el formato yyyy-mm-dd que es
 * metodo que por defecto lo devuelve el <input type="date">
 */
function calcularEdad(input,destino)
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
        if(edad>75){
            
            document.getElementById(destino).value=edad;
            $( "#"+destino ).addClass( "is-invalid-input" );
            //$('#form1').foundation('validateForm');
        }else if(edad<18){
            document.getElementById(destino).value=edad;
            $( "#"+destino).addClass( "is-invalid-input" );
        }else{
            document.getElementById(destino).value=edad;
            $( "#"+destino ).removeClass( "is-invalid-input" );
        }
        
    }else{
        document.getElementById("edsol").value=0;
    }
}

function calcularAnios(input,destino)
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




function mascaratel(input){
    
    if(input.value==""){
        $("#"+input.id).mask("999-9999999");
    }
}



var patron = new Array(4,4,4,4,4,4);

function mascarasimple(d,sep,pat,nums){
if(d.valant != d.value){
    val = d.value
    largo = val.length
    val = val.split(sep)
    val2 = ''
    for(r=0;r<val.length;r++){
        val2 += val[r]  
    }
    if(nums){
        for(z=0;z<val2.length;z++){
            if(isNaN(val2.charAt(z))){
                letra = new RegExp(val2.charAt(z),"g")
                val2 = val2.replace(letra,"")
            }
        }
    }
    val = ''
    val3 = new Array()
    for(s=0; s<pat.length; s++){
        val3[s] = val2.substring(0,pat[s])
        val2 = val2.substr(pat[s])
    }
    for(q=0;q<val3.length; q++){
        if(q ==0){
            val = val3[q]
        }
        else{
            if(val3[q] != ""){
                val += sep + val3[q]
                }
        }
    }
    d.value = val.toUpperCase().trim().replace(" ","");
    d.valant = val
    }
}

