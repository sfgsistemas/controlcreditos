<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">

</head>
<body>
 <div class="container" id="htmlext" >
  
  <div class="medium-2 columns">
    <ul class="vertical tabs" data-tabs id="example-tabs">
      <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true">Clientes</a></li>
      <li class="tabs-title"><a href="#panel2v" id="panel2vitem">Solicitudes</a></li>
      <li class="tabs-title"><a href="#panel3v">Conocimiento del cliente</a></li>
      <li class="tabs-title"><a href="#panel4v">Documentacion</a></li>
      <li class="tabs-title"><a href="#panel5v">Tab 5</a></li>
      <li class="tabs-title"><a href="#panel6v">Tab 6</a></li>
    </ul>
  </div>

  <div class="medium-9 columns">
    <div class="tabs-content" data-tabs-content="example-tabs">
      <div class="tabs-panel is-active" id="panel1v">
        <form name="form1" id="form1" action=""  method="post" data-abide novalidate>
          <div data-abide-error class="alert callout " style="display: none;">
            <p><i class="fi-alert"></i> Despues de corregir los campos marcados, no olvides Guardar.</p>
          </div> 
        <div id="botonescliente">  
          <input class="button" type="button" name="nuevocliente" id="nuevocliente" value="Generar Cliente Nuevo">
          <input class="button" data-open="modalmodificarcliente" type="button" name="modificarcliente" id="modificarcliente" value="Modificar Cliente">
          

          <!-- This is the first modal -->
          <div class="reveal" id="modalmodificarcliente" data-reveal>
            <h4>Buscar por:</h4>
            <select name="selectmodificacliente" id="selectmodificacliente"><option value="">Seleccione una opción</option><option value="Persona Fisica">Persona Fisica</option><option value="Persona Moral">Persona Moral</option></select>
            <div id="divmodificacliente1" style="display: none;">
              <label>ID:<input type="text" name="idmodificacliente" id="idmodificacliente"></label>
              <h5>Ó</h5>
              <label>CURP:<input type="text" name="curpmodificacliente" id="curpmodificacliente"></label>
            </div>
            <div id="divmodificacliente2" style="display: none;">
              <label>ID:<input type="text" name="idmodificaclientepm" id="idmodificaclientepm"></label>
              <h5>Ó</h5>
              <label>RFC:<input type="text" name="curpmodificaclientepm" id="curpmodificaclientepm"></label>
            </div>






            <button id="requestmodificarcliente" name="requestmodificarcliente" class="button" >Buscar</button>
            <button id="cerrarmodalmodificacliente" class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <!-- This is the nested modal -->
          <div class="reveal" id="modalcontregcliente" data-reveal>
            <h4>Registros Incompletos...</h4>
            <table  id="tablajson">
              <thead>
                <th>Id</th> 
                <th>Nombre/Razon Social</th>
                <th>CURP/RFC</th>
              </thead>
              <tbody></tbody>
            </table>
            <button id="cerrarmodalcontregcliente" class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>





          <input class="button" type="button" data-open="modalcontregcliente" name="continuarcliente" id="continuarcliente" value="Continuar Con Registro">
        </div>
        <input type="text" name="idcliente" id="idcliente" style="display: none;">

        <div id="contenidorequestcliente" style="display: none;">

          <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
            <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">Datos Generales</a></li>
            <li class="tabs-title" id="tabpanel2c" style="display: none;"><a href="#panel2c">Datos Laborales</a></li>
            <li class="tabs-title" id="tabpanel3c"><a href="#panel3c" >Referencias Personales</a></li>
            <li class="tabs-title"><a href="#panel4c">Informacion Bancaria</a></li>
            <li class="tabs-title"><a href="#panel5c"  style="display: none;">Referencias Comerciales</a></li>
            <li class="tabs-title" id="tabpanel6c" style="display: none;"><a href="#panel6c">Datos del Conyuge</a></li>
            <li class="tabs-title" id="tabpanel7c" style="display: none;"><a href="#panel7c">Accionistas</a></li>
            <li class="tabs-title"><a href="#panel8c">Beneficiario</a></li>
            <li class="tabs-title"><a href="#panel9c">Situacion Financiera</a></li>
          </ul>
          <div class="tabs-content" data-tabs-content="collapsing-tabs">
            <div class="tabs-panel is-active" id="panel1c" >
              <div class="row">
                <div class="medium-3 columns">
                  <select name="TipoCliente" id="TipoCliente" required=""  > <option value="">-Seleccione una opción-</option> <option value="Persona Fisica">Persona Fisica</option><option value="Persona Moral">Persona Moral</option> 
                  </select> 
                </div>
              </div>
              
              <div id="pm" style="display:none;">
                <div class="row">
                  <div class="medium-6 columns"><label>Razon social <input name="nomrazsoc2" type="text" id="nomrazsoc2"  value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomSolicitante']; } ?>"  placeholder="Nombre, Razón Social"></label>
                  </div>
                  <div class="medium-3 columns">
                    <label>Telefono
                    <input name="telsol2" type="text" id="telsol2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][0]; } ?>"   pattern="telefono" onfocus="mascaratel(this)"   ></label>
                  </div>
                  <div class="medium-3 columns"><label> RFC
                    <input name="rfcsol1" type="text" id="rfcsol1" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][0];}?>"  pattern="rfc" onkeypress="mayusculas(this)"  ></label>
                  </div>
                  
                    <div class="medium-3 columns"><label>
                      Direccion
                      <input name="dirsolpm" type="text" id="dirsolpm" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['DirSolicitante']; } ?>" placeholder="Dirección / Calle" >
                      </label>
                    </div>
                    <div class="medium-3 columns"><label>Numero
                      <input name="dirnumsolpm" type="text" id="dirnumsolpm" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NumDirSol']; } ?>"   placeholder="Número" pattern="alpha_numeric2" maxlength="7"></label>
                    </div>
                    <div class="medium-3 columns"><label>Email
                      <input name="mailsol2" type="text" id="mailsol2"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EmailSolicitante']; } ?>" placeholder="Email" pattern="email"></label>
                    </div>
                    <div class="medium-3 columns"><label>Codigo Postal
                      <input name="cpsolpm" type="text" id="cpsolpm" onchange="cpostal(this.value,'edosolpm','','colsolpm','cdsolpm','loading8')"  placeholder="C.P." pattern="cpostal" maxlength="5"></label>
                    </div>

                    <div class="medium-3 columns"><label>Colonia<div id="loading8"></div>
                    <select name="colsolpm"  id="colsolpm"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>
                    <div class="medium-3 columns"><label>Ciudad
                    <select name="cdsolpm"  id="cdsolpm"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>
                    <div class="medium-3 columns"><label>Estad
                    <select name="edosolpm"  id="edosolpm"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>
                  

                
                    <div class="medium-3 columns">  <label> Actividad Principal/ségun SHCP
                      <input name="actprinc" type="text" id="actprinc" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ActPrinDatGenPM']; } ?>" placeholder="Actividad Principal/según alta o último cambio ante SHCP"></label>
                    </div>
                    <div class="medium-3 columns">  <label>Cantidad de personal
                      <input name="cantperson" type="text" id="cantperson" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['CantPerDatGenPM']; } ?>" placeholder="Cantidad de personal" pattern="integer"></label>
                    </div>
                  

                  <div class="medium-3 columns"> <label>Inicio de operaciones:
                    <input name="inicoper1" type="date" id="inicoper1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['IniOpDatGenPM']; } ?>"  onfocus="datepick(this)" onchange="calcularAntiguedad(this,'antemp')" ></label>
                  </div>
                  <div class="medium-3 columns"><label>Constitución de la empresa:
                    <input name="inicoper13" type="date" id="inicoper13" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['FechaConsEmp']; } ?>" onfocus="datepick(this)"></label>
                  </div>
                  
                  <div class="medium-3 columns"><label>Antiguedad (años)
                    <input name="antemp" type="text" id="antemp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['AntConsEmp']; } ?>" placeholder="Antigüedad" readonly ></label>
                  </div>
                  
                 <p align="left">
                    <div class="medium-7 columns"><label>Apoderado para suscribir Títulos de Crédito y realizar actos de administración
                      <input name="apodsusc" type="text" id="apodsusc" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApoConsEmp']; } ?>" placeholder="Apoderado para suscribir Títulos de Crédito y realizar actos de administración" pattern="alpha"></label>
                    </div>
                     </p>
                </div>

                <div class="row">
                  <p align="left"><strong>DATOS DEL CONTACTO DE LA EMPRESA</strong></p>
                  
                    <div class="medium-3 columns"><label>Primer Nombre
                      <input name="nomconemp" type="text" id="nomconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NomDatContEmp']; } ?>" placeholder="Primer Nombre" pattern="alpha"></label>
                    </div>
                    <div class="medium-3 columns"><label>Segundo Nombre
                      <input name="segnomconemp" type="text" id="segnomconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['SegNomDatContEmp']; } ?>" placeholder="Segundo Nombre" pattern="alpha"></label>
                    </div>
                    <div class="medium-3 columns"><label>Apellido Paterno
                      <input name="apepaconemp" type="text" id="apepaconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ApPatDatContEmp']; } ?>" placeholder="Apellido Parteno" pattern="alpha"></label>
                    </div>
                    <div class="medium-3 columns"><label>Apellido Materno
                      <input name="apemaconemp" type="text" id="apemaconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ApMatDatContEmp']; } ?>" placeholder="Apellido Materno" pattern="alpha"></label>
                    </div>
                  
                  
                    <div class="medium-3 columns"><label>Calle y Numero
                      <input name="datobdir22" type="text" id="datobdir22" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['DirConEmp']; } ?>" placeholder="Calle y No.:" pattern="alpha_numeric2"></label>
                    </div>
                    <div class="medium-3 columns"><label>Codigo Postal
                      <input name="lugnacsol22" type="text" id="lugnacsol22" onchange="cpostal(this.value,'cdsol22','','datobcol23','colsol22','loading9')" pattern="cpostal" maxlength="5" ></label>
                    </div>
                    <div class="medium-3 columns"><label>Colonia<div id="loading9"></div>
                      <select name="datobcol23"  id="datobcol23"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>
                  
                 
                    <div class="medium-3 columns"><label>Ciudad
                    <select name="colsol22"  id="colsol22"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>
                    <div class="medium-3 columns"><label>Estado
                    <select name="cdsol22"  id="cdsol22"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>
                  
                 

                    <div class="medium-3 columns"><label>RFC
                      <input name="rfcconemp1" type="text" id="rfcconemp1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][0]; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                    </div>
     
                    <div class="medium-3 columns"> <label> Telefono
                      <input name="telconemp1" type="text" id="telconemp1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelDatConEmp'][0]; } ?>"  pattern="telefono" onfocus="mascaratel(this)" ></label>
                    </div>
                  </p>
                 
                    <div class="medium-3 columns">  <label> Email
                      <input name="mailconemp" type="text" id="mailconemp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['EmailDatConEmp']; } ?>" placeholder="Email" pattern="email"></label>
                    </div>
                    <p align="left">
                    <div class="medium-3 columns">  <label>Puesto que desempeña en la empresa
                      <input name="puesconemp" type="text" id="puesconemp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PuestDatConEmp']; } ?>" placeholder="Puesto que desempeña en la empresa" pattern="alpha_numeric2"></label>
                    </div>
                  </p>
                </div>
                
              </div>
              

              <div id="pfa" style="display:none;" >
                <div class="row" >
                  <div class="medium-3 columns">
                    <label>Primer nombre<input name="nomsol" type="text" id="nomsol" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomSolicitante']; } ?>"  placeholder="Primer Nombre"   pattern="alpha"> </label>
                  </div>
                  <div class="medium-3 columns">
                    <label> Segundo Nombre <input name="segnomsol" type="text" id="segnomsol"   value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['SegNomSolicitante']; } ?>" placeholder="Segundo Nombre"  pattern="alpha"></label>
                  </div>
                  <div class="medium-3 columns">
                      <label> Apellido Paterno<input name="apepasol" type="text" id="apepasol"  value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApPatSolicitante']; } ?>"  placeholder="Apellido Parteno"   pattern="alpha">  </label>
                  </div> 
                  <div class="medium-3 columns">
                    <label>Apellido Materno<input name="apemasol" type="text" id="apemasol" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApMatSolicitante']; } ?>" placeholder="Apellido Materno"   pattern="alpha"></label>
                  </div>

      
               
                  <div class="medium-3 columns">
                    <label> RFC
                    <input name="rfc1" type="text" id="rfc1" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][0];}?>"   pattern="rfc" onkeypress="mayusculas(this)" > </label>
                  </div>
      
        
                  <div class="medium-3 columns">
          
                    <label> Telefono Particular
                    <input name="telsol1" type="text" id="telsol1"  value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][0]; } ?>"    pattern="telefono" onfocus="mascaratel(this)" ></label>
                  </div>

                  <div class="medium-3 columns">
                    <label> Telefono Movil
                    <input name="movsol1" type="text" id="movsol1" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][0]; } ?>"   pattern="telefono" onfocus="mascaratel(this)"  >
                    </label>
                  </div>   
                  <div class="medium-3 columns">
                    <label> Email
                    <input name="mailsol" type="text" id="mailsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EmailSolicitante']; } ?>" placeholder="Email" pattern="email"></label>
                  </div>
                
    
              
                  <div class="medium-5 columns"><label> Direccion / Calle
                    <input name="dirsol" type="text" id="dirsol" size="74px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['DirSolicitante']; } ?>" placeholder="Dirección / Calle"  ></label>
                  </div>
              
                  <div class="medium-2 columns"><label> Direccion / Numero

                       <!--
                           <div class="input-group">
                         <span class="input-group-label">#</span> -->
                                         <input class="input-group-field" name="dirnumsol" type="text" id="dirnumsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NumDirSol']; } ?>" placeholder="Número"  pattern="alpha_numeric2" maxlength="7">                                              
                       <!-- </div> -->
                   </label>
                  </div>
             
             
                  <div class="medium-2 columns"><label>Codigo Postal<input name="cpsol" type="text" id="cpsol" size="20px" placeholder="C.P." onchange="cpostal(this.value,'edosol','textfield5','colsol','cdsol','loading1')" pattern="cpostal" maxlength="5"></label>
                  </div>
                  <div class="medium-3 columns"><label>Colonia<div id="loading1"></div><select name="colsol" id="colsol"><option value="">-Seleccione una opción-</option></select></label>
                  </div>

                  <div class="medium-3 columns"><label>Lugar de nacimiento
                  <input name="lugnacsol" type="text" id="lugnacsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['LugNacSolicitante']; } ?>" placeholder="Lugar de nacimiento (País y Estado)" pattern="alpha"></label>
                  </div>
              
                  <div class="medium-3 columns"><label>Estado <select name="edosol" id="edosol"><option value="">-Seleccione una opción</option></select></label>
                  </div>
             
                  <div class="medium-3 columns"><label>Ciudad<select name="cdsol"  id="cdsol"><option value="">-Seleccione una opcion-</option></select></label>
                  </div>
                  <div class="medium-3 columns"><label>Delegacion o municipio <select name="textfield5"  id="textfield5" ><option value="">-Seleccione una opción-</option></select></label>
                  </div>

                  <div class="medium-3 columns"><label>CURP <input name="curpsol" type="text" id="curpsol" size="49px" placeholder="CURP" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CURPSolicitante']; } ?>"  pattern="curp" onkeypress="mayusculas(this)" ></label>
                  </div>
       
    
           
                    <div class="medium-3 columns">
                      <label>Sexo
                      <select name="sexsol" id="sexsol" ><option value="">-Seleccione una opción-</option><option value="Femenino">Mujer</option><option value="Masculino">Hombre</option></select>
                      </label>
                    </div>
           
                    <div class="medium-3 columns">
                      <label>Fecha de nacimiento
                      <input name="fechnacsol" type="date" id="fechnacsol" onchange="calcularEdad(this,'edsol')" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['FeNacDatGen']; } ?>" onfocus="datepick(this)" ></label>
                    </div>

                    <div class="medium-3 columns"> <label> Edad



                           <div class="input-group">
                                                      <input class="input-group-field" name="edsol" type="number" id="edsol" size="2px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['EdDatGen']; } ?>" placeholder="Edad" readonly   pattern="integer">
                                                    
                            <span class="input-group-label">Años</span>
                                                    
                            </div>



                      </label>
                    </div>
              
                    <div class="medium-3 columns"> <label>Nacionalidad
                      <input name="nacsol" type="text" id="nacsol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NaDatGen']; } ?>" placeholder="Nacionalidad"  pattern="alpha"></label>
                    </div>

                    <div class="medium-3 columns"><label>Num. Dependientes
                      <input name="depensol" type="text" id="depensol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NoDepDatGen']; } ?>" placeholder="Num. Dependientes"  pattern="integer" maxlength="2" ></label>
                    </div>

                    <div class="medium-3 columns"><label>Acredita Domicilio con:
                      <input name="acdomsol" type="text" id="acdomsol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AcDomDatGen']; } ?>" placeholder="Acredita Domicilio con"></label>
                    </div>
                

           
                
                  <div class="medium-3 columns"><label> Años de residir en la ciudad
                    <input name="anosol" type="text" id="anosol" size="13" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AnResDatGen']; } ?>" placeholder="Años de residir en la ciudad"  pattern="integer" maxlength="2"></label>
                  </div>
              
                  <div class="medium-3 columns"><label> Arraigo en el domicilio (Fecha)
                    <input name="arraisol" type="date" id="arraisol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ArDomDatGen']; } ?>" placeholder="Arraigo en el domicilio desde el año" onfocus="datepick(this)" onchange="calcularAnios(this,'arraisolanios')">




                    </label>
                  </div>

                  <div class="medium-3 columns"><label> Arraigo en el domicilio



                           <div class="input-group">
                    <input class="input-group-field" name="arraisolanios" type="text" id="arraisolanios"   readonly pattern="integer">
                                                    
                      <span class="input-group-label">Años </span>
                                                    
                            </div>

                    </label>
                  </div>
                 
                <div class="medium-3 columns">
                  <label>Vive en:
                <select name="vivsol" id="vivsol"><option value="">-Seleccione una opcion-</option><option value="Casa Propia">Casa Propia</option><option value="Rentada">Rentada</option><option value="Hipotecada">Hipotecada</option><option value="Casa propiedad de sus familiares">Casa propiedad de sus familiares</option><option value="Otros especificar">Otros especificar</option></select></label>
                </div>
              <div class="medium-3 columns" id="divvivsolesp" style="display: none;">  <label>Especifique:
               <input type="text" name="vivsolesp" id="vivsolesp" ></label></div>
                </div>
           
                <div class="row">
                  <p align="left">
                    <div class="medium-3 columns">
                      <label>Estado civil:
                      <select name="civilsol" id="civilsol"><option value="">-Seleccione una opción-</option><option value="Casado Bienes Mancomunados">Casado Bienes Mancomunados</option><option value="Casado Bienes Separados">Casado Bienes Separados</option><option value="Viudo">Viudo</option><option value="Divorciado">Divorciado</option><option value="Soltero">Soltero</option></select></label>
            
                    </div>
        
                    <div class="medium-3 columns">

                      <label>Tiene Auto Propio:
                    <select name="autosol" id="autosol"><option value="">-Seleccione una opción</option><option value="Si">Si</option><option value="No">No</option></select>

                       </label>

                    </div>
                    <div class="medium-3 columns" id="especifiquemarca" style="display: none;">
                        <label>Especifique Marca:
                        <input type="text" name="marcasol" id="marcasol" >
                        </label>
                    </div>
                    <div class="medium-3 columns">
                    <label>
                      Es propietario de algún inmueble:
                  <select name="inmusol" id="inmusol"><option value="">-Seleccione una opción-</option><option value="Si">Si</option><option value="No">No</option></select>
                      </label>
                    </div>
                  </p>
                </div>
                
                <!-- -->
              </div>

            </div>


    
            <div class="tabs-panel" id="panel2c">
              <div class="row">
                <div class="medium-3">
                <label>
                Actividad empresarial
                <select name="actempresarial" id="actempresarial"><option value="">-Seleccione una opcion-</option><option value="Si">Si</option><option value="No">No</option></select>
                </label>
                </div>
                <p align="left">
                  <div class="medium-3 columns"><label> Puesto
                    <input name="puestosol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['PuestDatEmp']; } ?>" type="text" id="puestosol" size="40px" placeholder="Puesto" pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Departamento o area
                    <input name="depasol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['DepDatEmp']; } ?>" type="text" id="depasol" size="30px" placeholder="Departamento o área" pattern="alpha"></label>
                  </div>

             
             
                  <div class="medium-3 columns"><label>Compañia
                    <input name="compasol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['CompDatEmp']; } ?>" type="text" id="compasol" size="70px" placeholder="Compañía"></label>
                  </div>
                  <div class="medium-3 columns" ><label>Telefono
                    <input name="compatelsol1" type="text" id="compatelsol1"  value="<?php if(isset($row2['Folio_Cliente'])&& $row2['TelDatEmp']!= '') {  echo $row2['TelDatEmp'][0]; } ?>" size="1px"  pattern="telefono" onfocus="mascaratel(this)"   ></label>
                  </div>
                  <div class="medium-2 columns" ><label>Extension
                    <input name="compatelsolext" type="text" id="compatelsolext" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ExtDatEmp']; } ?>" size="20px" placeholder="Extensión" pattern="integer" maxlength="7"></label>
                  </div>
                </p>

                <p align="left">
       
                  <div class="medium-3 columns" id="divgiroprof" style="display: none;"><label>Ocupacion / Giro
                    <input name="giroprof" type="text" id="giroprof" size="40px"  value="<?php if (isset($row2['Folio_Cliente'])) {  echo $row2['Ocupacion_Profesion']; } ?>" placeholder="Ocupación/Giro según alta o último cambio ante SHCP" ></label>
                  </div>
           
        
                  <div class="medium-3 columns"> <label> Antigüedad desde:<input name="desdesol" type="date" id="desdesol" size="1px" value="<?php if (isset($row2['Folio_Cliente'])) {  echo $row2['DesAnDatEmp']; } ?>"   onfocus="datepick(this)" onchange="calcularAntiguedad(this,'desdesolanios')" ></label>
                  </div>

                  <div class="medium-3 columns"> <label> Antigüedad años:<input name="desdesolanios" type="text" id="desdesolanios" size="1px"   readonly=""  ></label>
                  </div>
            
                </p>
                <p align="left">
        
         
                  <div class="medium-3 columns" id="divnoempleados" style="display: none;"><label>Numero de empleados
                    <input name="noempleados" type="text" id="noempleados"  value="<?php if (isset($row2['Folio_Cliente'])) {  echo $row2['NoEmDatEmp']; } ?>" placeholder="Núm. de empleados"pattern="integer"></label>
                  </div>
         
                  
                     <div class="medium-3 columns" id="divdomneg">
                  <label>Direccion (Calle)</label>  <input type="text" name="domneg" id="domneg" >
                  </div>    
                  <div class="medium-3 columns" id="divnumdomneg">
                  <label>Direccion (Numero)</label><input type="text" name="numdomneg" id="numdomneg" pattern="alpha_numeric2" maxlength="7">
                  </div>         
                  <div class="medium-3 columns" id="divcpneg">
                  <label>CP</label><input type="text" name="cpneg" id="cpneg" onchange="cpostal(this.value,'estneg','munneg','colneg','cdneg','loading2')" pattern="integer" maxlength="5">
                  </div>
                  <div class="medium-3 columns" id="divcolneg">
                  <label>Colonia<div id="loading2"></div><select name="colneg" id="colneg"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns" id="divestneg">
                  <label>Estado<select name="estneg" id="estneg"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns" id="divmunneg">
                  <label>Municipio<select name="munneg" id="munneg"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns" id="divcdneg">
                  <label>Ciudad<select name="cdneg" id="cdneg"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                </p>


              </div>
            </div>

            <div class="tabs-panel" id="panel3c">
              <div class="row">
                <p align="left">

                  <div class="medium-3 columns"><label>Nombre
                    <input name="nomref1" type="text" id="nomref1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomRefPer']; } ?>" size="54px" placeholder="Nombre" pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Parentesco o relacion
                    <input name="parenref1" type="text" id="parenref1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ParenRefPer']; } ?>" size="40px" placeholder="Parentesco o relación" pattern ="alpha"></label>
                  </div>
            
                  <div class="medium-3 columns"><label>Telefono
                    <input name="telref11" type="text" id="telref11" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][0]; } ?>"      pattern="telefono" onfocus="mascaratel(this)" ></label>
                  </div>

                  <div class="medium-3 columns">
                  <label>Direccion (Calle)</label>  <input type="text" name="refperdir" id="refperdir">
                  </div>    
                  <div class="medium-3 columns">
                  <label>Direccion (Numero)</label><input type="text" name="refpernumdir" id="refpernumdir" pattern="alpha_numeric2" maxlength="7">
                  </div>         
                  <div class="medium-3 columns">
                  <label>CP </label><input type="text" name="refpercp" id="refpercp" onchange="cpostal(this.value,'refperest','refpermun','refpercol','refpercd','loading3')" pattern="integer" maxlength="5">
                  </div>
                  <div class="medium-3 columns">
                  <label>Colonia<div id="loading3"></div><select name="refpercol" id="refpercol"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Estado<select name="refperest" id="refperest"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Municipio<select name="refpermun" id="refpermun"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Ciudad<select name="refpercd" id="refpercd"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                </p>
              </div>
              <div class="row">
                <p align="left">

                  <div class="medium-3 columns"><label>Nombre
                    <input name="nomref2" type="text" id="nomref2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomRefPer']; } ?>" size="54px" placeholder="Nombre" pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Parentesco o relacion
                    <input name="parenref2" type="text" id="parenref2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ParenRefPer']; } ?>" size="40px" placeholder="Parentesco o relación" pattern ="alpha"></label>
                  </div>
            
                  <div class="medium-3 columns"><label>Telefono
                    <input name="telref12" type="text" id="telref12" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][0]; } ?>"    pattern="telefono" onfocus="mascaratel(this)" ></label>
                  </div>


                  <div class="medium-3 columns">
                  <label>Direccion (Calle)</label>  <input type="text" name="refperdir2" id="refperdir2">
                  </div>    
                  <div class="medium-3 columns">
                  <label>Direccion (Numero)</label><input type="text" name="refpernumdir2" id="refpernumdir2" pattern="alpha_numeric2" maxlength="7">
                  </div>         
                  <div class="medium-3 columns">
                  <label>CP</label><input type="text" name="refpercp2" id="refpercp2" onchange="cpostal(this.value,'refperest2','refpermun2','refpercol2','refpercd2','loading4')" pattern="integer" maxlength="5">
                  </div>
                  <div class="medium-3 columns">
                  <label>Colonia<div id="loading4"></div><select name="refpercol2" id="refpercol2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Estado<select name="refperest2" id="refperest2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Municipio<select name="refpermun2" id="refpermun2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Ciudad<select name="refpercd2" id="refpercd2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>

                </p>

              </div>
            </div>
    
            <div class="tabs-panel" id="panel4c">

              <div id="secRefBancarias1" class="row">
       
       
                <p align="left">
                  <div class="medium-3 columns"><label>Banco
                    <input name="refbanc" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancRefBan']; } ?>" type="text" id="refbanc" size="54px" placeholder="Banco"></label>
                  </div>
          
                  <div class="medium-3 columns"><label>Numero de cuenta
                    <input name="numcuebanc" onkeyup="mascarasimple(this,'-',patron,false)"  type="text" id="numcuebanc" size="40px" placeholder="Número de cuenta" pattern="cuenta" maxlength="29     ">

                    </label>
                  </div>

                  <div class="medium-3 columns"><label>Sucursal
                    <input name="sucbanc1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['SucRefBan']; } ?>" type="text" id="sucbanc1" size="54px" placeholder="Sucursal" pattern="integer" maxlength="8"></label>
                  </div>
                </p>
      
                <p align="left">
         
                  <div class="medium-3 columns"><label>  Fecha de apertura: <input name="aperbanc1d" type="date" id="aperbanc1d" size="1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FecApRefBan']; } ?>" onfocus="datepick(this)"></label>
                  </div>
                </p>
              </div>
              <div id="secRefBancarias1" class="row">
       
       
                <p align="left">
                  <div class="medium-3 columns"><label>Banco
                    <input name="refbanc2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancRefBan']; } ?>" type="text" id="refbanc2" size="54px" placeholder="Banco"></label>
                  </div>
          
                  <div class="medium-3 columns"><label>Numero de cuenta
                    <input name="numcuebanc2" onkeyup="mascarasimple(this,'-',patron,false)" type="text" id="numcuebanc2" size="40px" placeholder="Número de cuenta" maxlength="29" pattern="cuenta"></label>
                  </div>

                  <div class="medium-3 columns"><label>Sucursal
                    <input name="sucbanc2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['SucRefBan']; } ?>" type="text" id="sucbanc2" size="54px" placeholder="Sucursal" pattern="integer" maxlength="8"></label>
                  </div>
                </p>
      
                <p align="left">
         
                  <div class="medium-3 columns"><label>  Fecha de apertura: <input name="aperbanc2d" type="date" id="aperbanc2d" size="1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FecApRefBan']; } ?>" onfocus="datepick(this)"></label>
                  </div>
                </p>
              </div>

              <div id="secCarDirecto" class="row">
                <p align="left"><strong>CARGO DIRECTO (para contratos en M.N.) </strong>
                </p>
                <p align="left">
                  <div class="medium-3 columns"><label>Banco
                    <input name="cargdir" type="text" id="cargdir" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancCarDir']; } ?>" size="54px" placeholder="Banco"></label>
                  </div>

                  <div class="medium-3 columns"><label>CLABE
                    <input name="nocuentcd" type="text" id="nocuentcd" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NoTarCarDir']; } ?>" size="40px" placeholder="Número de Cuenta (CLABE)" maxlength="18" pattern="clabe"></label>
                  </div>
                </p>
              </div>
            </div>


            <div class="tabs-panel" id="panel5c">
              <div id="secRefComerciales1" class="row">
       
                <p align="left">
                  <div class="medium-3 columns"><label>Empresa
                    <input name="refcomemp1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmpRefCom']; } ?>" type="text" id="refcomemp1"  placeholder="Empresa"></label>
                  </div>
       
                </p>
                <div class="medium-3 columns"><label>Telefono
                  <input name="telrefcom11" type="text" id="telrefcom11" size="1px"  value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom'] != '' ) {  echo $row['TelRefCom'][0]; } ?>"  pattern="telefono" onfocus="mascaratel(this)" ></label>
                </div>

                <p align="left">
                  <div class="medium-3 columns"><label>Antiguedad desde el año
                    <input name="antirefcom1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['AntRefCom']; } ?>" type="text" id="antirefcom1" placeholder="Antigüedad Desde el Año" pattern="anio" maxlength="4"></label>
                  </div>
   <div class="medium-3 columns">
                  <label>Direccion (Calle)</label>  <input type="text" name="refcomdir" id="refcomdir" >
                  </div>    
                  <div class="medium-3 columns">
                  <label>Direccion (Numero)</label><input type="text" name="refcomnumdir" id="refcomnumdir" pattern="alpha_numeric2" maxlength="7">
                  </div>         
                  <div class="medium-3 columns">
                  <label>CP</label><input type="text" name="refcomcp" id="refcomcp" onchange="cpostal(this.value,'refcomest','refcommun','refcomcol','refcomcd','loading5')" pattern="integer" maxlength="5">
                  </div>
                  <div class="medium-3 columns">
                  <label>Colonia<div id="loading5"></div><select name="refcomcol" id="refcomcol"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Estado<select name="refcomest" id="refcomest"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Municipio<select name="refcommun" id="refcommun"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Ciudad<select name="refcomcd" id="refcomcd"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                </p>
     

              </div>

              <div id="secRefComerciales2" class="row">
                <p align="left">
                  <div class="medium-3 columns"><label>Empresa
                    <input name="refcomemp2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmpRefCom']; } ?>" type="text" id="refcomemp2"  placeholder="Empresa"></label>
                  </div>
       
                  <div class="medium-3 columns"><label>Telefono
                    <input name="telrefcom22" type="text" id="telrefcom22" size="1px"  value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom2']) {  echo $row['TelRefCom2'][0]; } ?>"  pattern="telefono" onfocus="mascaratel(this)" ></label>
                  </div>
                </p>
                <p align="left">
                  <div class="medium-3 columns"><label>Antiguedad desde el año
                    <input name="antirefcom2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['AntRefCom2']; } ?>" type="text" id="antirefcom2" placeholder="Antigüedad Desde el Año" pattern="anio" maxlength="4"></label>
                  </div>


                     <div class="medium-3 columns">
                  <label>Direccion</label>  <input type="text" name="refcomdir2" id="refcomdir2"  >
                  </div>    
                  <div class="medium-3 columns">
                  <label>Numero</label><input type="text" name="refcomnumdir2" id="refcomnumdir2" pattern="alpha_numeric2" maxlength="7">
                  </div>         
                  <div class="medium-3 columns">
                  <label>CP</label><input type="text" name="refcomcp2" id="refcomcp2" onchange="cpostal(this.value,'refcomest2','refcommun2','refcomcol2','refcomcd2','loading6')" pattern="integer" maxlength="5">
                  </div>
                  <div class="medium-3 columns">
                  <label>Colonia<div id="loading6"></div><select name="refcomcol2" id="refcomcol2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Estado<select name="refcomest2" id="refcomest2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Municipio<select name="refcommun2" id="refcommun2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Ciudad<select name="refcomcd2" id="refcomcd2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                </p>
              </div>

            </div>

            <div class="tabs-panel" id="panel6c">
              <div class="row">
                <p align="left">
                  <div class="medium-3 columns"><label>Nombre(s) del conyuge
                    <input name="conyunom" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomDatCon']; } ?>" type="text" id="conyunom" size="40px" placeholder="Nombre(s) del conyuge" pattern="alpha"></label>
                  </div>
                  <div class="medium-3 columns">   <label> Apellido Paterno
                    <input name="conyuape1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApPatDatCon']; } ?>" type="text" pattern="alpha" id="conyuape1" size="20px" placeholder="Apellido Paterno" pattern="alpha"></label>
                  </div>
                    
                  <div class="medium-3 columns">   <label> Apellido Materno         
                    <input name="conyuape2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApMatDatCon']; } ?>" type="text" id="conyuape2" size="20px" placeholder="Apellido Materno" pattern="alpha"></label>
                  </div>
              
                  <div class="medium-3 columns"><label>Compañia
                    <input name="compaconyu" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CompDatCon']; } ?>" type="text" id="compaconyu" size="30px" placeholder="Compañia"></label>
                  </div>
             
                  <div class="medium-3 columns"><label>Puesto
                    <input name="puestconyu" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['PuestDatCon']; } ?>" type="text" id="puestconyu" size="20px" placeholder="Puesto" pattern="alpha"></label>
                  </div>
                </p>
              </div>
            </div>
   
            <div class="tabs-panel" id="panel7c">

              <p align="left">De acuerdo al articulo 20 de la Ley para Regular Sociedades de Información Crediticia, en caso de que la información proporcionada por el Cliente sea relativa a una persona moral, deberá incluir a los accionistas o titulares de las partes sociales, según corresponda, que sean propietarios del 10% o más del capital social. * 
              </p>
       
              <div class="row">
                <p align="left">
                  <div class="medium-4 columns"><label>Nombre
                    <input name="accionista1" type="text" id="accionista1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAcc1']; } ?>" placeholder="Nombre"></label>
                  </div>
                  <div class="medium-4 columns"><label>RFC
                    <input name="rfcaccion1" type="text" id="rfcaccion1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                  </div>

                  <div class="medium-2 columns">
                    <label>Porcentaje de las acciones
                    <div class="input-group">
                                              <input class="input-group-field" pattern="porcentaje" maxlength="3" name="porcent1" type="text" id="porcent1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>">
    <span class="input-group-label">%</span>
  </div>
                    </label>

                  </div>
                </p>
                <p align="left">
                  <div class="medium-4 columns">
                  <label>Nombre
                    <input name="accionista2" type="text" id="accionista2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAcc2']; } ?>" placeholder="Nombre"></label>
                  </div>
                  <div class="medium-4 columns"><label>RFC
                    <input name="rfcaccion2" type="text" id="rfcaccion2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                  </div>
                  <div class="medium-2 columns"><label>Porcentaje de las acciones


                                     <div class="input-group">
                   <input class="input-group-field" pattern="porcentaje" maxlength="3" name="porcent2" type="text" id="porcent2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" >
   <span class="input-group-label">%</span>
                   </label>
 </div>  
                  


                  </div>
                </p>
                <p align="left">
                  <div class="medium-4 columns"><label>Nombre
                    <input name="accionista3" type="text" id="accionista3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAcc3']; } ?>" placeholder="Nombre"></label>
                  </div>
                  <div class="medium-4 columns"><label>RFC
                    <input name="rfcaccion3" type="text" id="rfcaccion3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                  </div>
                  <div class="medium-2 columns"><label>Porcentaje de las acciones



                                     <div class="input-group">
                   <input class="input-group-field" pattern="porcentaje" maxlength="3"name="porcent3" type="text" id="porcent3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" >
   <span class="input-group-label">%</span>
                   </label>
 </div>


                  </div>
                </p>
                <p align="left">
                  <div class="medium-4 columns"><label>Nombre
                    <input name="accionista4" type="text" id="accionista4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAcc4']; } ?>" placeholder="Nombre"></label>
                  </div>
                  <div class="medium-4 columns"><label>RFC
                    <input name="rfcaccion4" type="text" id="rfcaccion4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                  </div>
                  <div class="medium-2 columns"><label>Porcentaje de las acciones

                           <div class="input-group">
                                                                    <input class="input-group-field" pattern="porcentaje" maxlength="3" name="porcent4" type="text" id="porcent4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" >
   <span class="input-group-label">%</span>
                                                                 </label>
 </div>



                  </div>
                </p>
              </div>
        
              <div class="row">
                <p align="left">* En el caso de que alguno(s) de los accionistas del cliente (persona moral) sea(n) otra(s) persona(s) moral(es), se deberan identificar a los accionistas de ésta(s) última(s) que sean propietarios del 25% o más del capital social:
                </p>
     
                <div class="medium-4 columns"><label>Nombre
                  <input name="accpermor1" type="text" id="accpermor1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAccPM1']; } ?>" placeholder="Nombre"></label>
                </div>
                <div class="medium-4 columns"><label>RFC
                  <input name="rfcaccpermor1" type="text" id="rfcaccpermor1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAccPM1']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                </div>

                <div class="medium-2 columns"><label>Porcentaje de las acciones
               
                                  <div class="input-group">
                   <input class="input-group-field" pattern="porcentaje" maxlength="3"  name="permoracc1" type="text" id="permoracc1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAccPM1']; } ?>" >
   <span class="input-group-label">%</span>
                   </label>
 </div>


                </div>

<p align="left">
                <div class="medium-4 columns"> <label>Nombre
                  <input name="accpermor2" type="text" id="accpermor2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAccPM2']; } ?>" placeholder="Nombre"></label>
                </div>

                <div class="medium-4 columns"><label>RFC
                  <input name="rfcaccpermor2" type="text" id="rfcaccpermor2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAccPM2']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                </div>

                <div class="medium-2 columns">
                      <label>Porcentaje de las acciones

                        <div class="input-group">
                          <input class="input-group-field" pattern="porcentaje" maxlength="3" name="permoracc2" type="text" id="permoracc2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAccPM2']; } ?>" >
                           <span class="input-group-label">%</span>
      
                        </div>
                               </label>
              </div>
</p>
              </div>
            </div>

            <div class="tabs-panel" id="panel8c">
              <div class="row">
                <p align="left">
                  Beneficiario en caso de fallecimiento:
                  <div class="medium-3 columns"><label>Apellido Paterno
                    <input name="benesol1" type="text" id="benesol1" size="20px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ApPatBenDatGen']; } ?>" placeholder="Apellido Paterno"  pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Apellido Materno
                    <input name="benesol2" type="text" id="benesol2" size="20px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ApMatBenDatGen']; } ?>" placeholder="Apellido Materno"  pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Nombre(s)
                    <input name="benesol3" type="text" id="benesol3" size="30px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NomBenDatGen']; } ?>" placeholder="Nombre(s)"  pattern="alpha"></label>
                  </div>
           

       
                
         
                  <div class="medium-3 columns"><label>
                    Domicilio (calle y número) 
                    <input name="textfield48" type="text" id="textfield48" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['DomBeneficiario']; } ?>" ></label>
                  </div>
            
            
             
                  <div class="medium-3 columns"><label>Código Postal 
                    <input name="textfield50" type="text" id="textfield50" size="50%"  onchange="cpostal(this.value,'textfield59','textfield58','textfield49','','loading7')" pattern="cpostal" maxlength="5"></label>
                  </div>
            
                  <div class="medium-3 columns"><label>Colonia<div id="loading7"></div>
                    <select name="textfield49" id="textfield49"><option value="">-Seleccione una opción-</option></select></label>
                  </div>

                  <div class="medium-3 columns"><label>País
                    <input name="textfield51" type="text" id="textfield51" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['PaisBeneficiario']; } ?>" pattern="alpha"></label>
                  </div>
          
                  <div class="medium-3 columns"><label>   Teléfono
                    <input name="textfield52" type="text" id="textfield52" size="50%"  value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['TelBeneficiario']; } ?>" pattern="telefono" onfocus="mascaratel(this)" ></label>
                  </div>
              
             
                  <div class="medium-3 columns"><label> CURP
                    <input name="textfield53" type="text" id="textfield53" size="50%"  value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['CURPBeneficiario']; } ?>" pattern="curp" onkeypress="mayusculas(this)"></label>
                  </div>
            

                  <div class="medium-3 columns"><label> RFC
                    <input name="textfield54" type="text" id="textfield54" size="50%"  value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['RFCBeneficiario']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                  </div>
              

                  <div class="medium-3 columns"><label> Parentesco
                    <input name="textfield55" type="text" id="textfield55" size="50%"  value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['ParentescoBeneficiario']; } ?>" pattern="alpha"></label>
                  </div>

              
                  <div class="medium-3 columns"><label> Porcentaje
                    <input name="textfield56" type="text" id="textfield56" size="50%"   value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['PorcientoBeneficiario']; } ?>" pattern="porcentaje" maxlength="3"></label>
                  </div>
              



                  <div class="medium-3 columns"> <label>Fecha de Nacimiento 
                    <input name="textfield57" type="date" id="textfield57" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['FeNacBeneficiario']; } ?>" onfocus="datepick(this)"></label>
                  </div>
              
                  <div class="medium-3 columns"><label> Estado
                    <select name="textfield59" id="textfield59"><option value="">-Seleccione una opción-</option></select></label>
                  </div>

                  <div class="medium-3 columns"><label> Municipio
                    <select name="textfield58" id="textfield58"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
              

              


                  <div class="medium-3 columns"><label>  Estado Civil 
                    <select name="textfield60" id="textfield60"><option value="">-Seleccione una opción-</option><option value="Casado">Casado</option><option value="Viudo">Viudo</option><option value="Divorciado">Divorciado</option><option value="Soltero">Soltero</option></select></label>
                  </div>
          
              
                  <div class="medium-3 columns" id="divtextfield61" style="display: none;"><label>Sociedad Conyugal 
                    <select name="textfield61" id="textfield61" ><option value="">-Seleccione una opción-</option><option value="Bienes Mancomunados">Bienes Mancomunados</option><option value="Bienes Separados">Bienes Separados</option></select></label>
                  </div>
             
                  <div class="medium-3 columns"><label> Ocupación o Profesión 
                    <input name="textfield62" type="text" id="textfield62" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['OcuProfBeneficiario']; } ?>" pattern="alpha"></label>
                  </div>
                </p>
              </div> 
            </div>

            <div class="tabs-panel" id="panel8c">
            </div>
            <div class="row">
              
            <input class="button" type="button" name="guardarcliente" id="guardarcliente" value="Guardar" style="display: none;">
            <input class="button" type="button" name="botonmodcliente" id="botonmodcliente" value="Guardar" style="display: none;">
            <input class="button" type="button" name="cancelarcliente" id="cancelarcliente" value="Cancelar Registro">
            <input style="display: none;"  name="fecharegistro" type="text" id="fecharegistro" value="<?php echo date("Y-m-d");?>" size="10px" readonly>
            </div>
          </div>
        </div>
        </form>
      </div>





      <div class="tabs-panel" id="panel2v">
        <form name="form2" id="form2" action=""  method="post" data-abide novalidate>
          <div id="botonessolicitud">
            <input class="button" data-open="modalnuevasolicitud" type="button" name="nuevasolicitud" id="nuevasolicitud" value="Generar Solicitud Nueva">
            <input class="button" data-open="modalmodificarsolicitud" type="button" name="modificarsolicitud" id="modificarsolicitud" value="Modificar Solicitud">
          
            <div class="reveal" id="modalnuevasolicitud" data-reveal>
              <h4>Ingresa el Número de Cliente:</h4>
              
              <select name="ANYBODY" id="ANYBODY"><option value="0">-seleccione uno-</option><option value="1">ID</option><option value="2">Nombre (Persona Fisca)</option><option  value="3">Razon social(Persona Moral)</option></select>
              <div id="ident" name="ident" style="display: none;">
                
                <label>ID:<input type="text" name="idnuevasolicitud" onkeyup="busqueda()" id="idnuevasolicitud"></label>
              </div>

                <div id="nombres" name="nombres" style="display: none;">
                  
                  <label>Nombre<input type="text" onkeyup="busqueda()" id="nombrepf" name="nombrepf"></label>
                  <label>Apellido Paterno<input type="text" onkeyup="busqueda()" id="ApellidoPa" name="ApellidoPa"></label>
                  <label>Apellido Materno<input type="text" onkeyup="busqueda()" id="ApellidoMa" name="ApellidoMa"></label>
                </div>
              
                <div id="resultadonuevasolicitud"></div>
              <!--<button id="requestnuevasolicitud" name="requestnuevasolicitud" class="button" >Buscar</button>-->
              <button id="cerrarmodalnuevasolicitud" class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>




            <!-- This is the first modal -->
            <div class="reveal" id="modalmodificarsolicitud" data-reveal>
              <h4>Ingresa el Número de Solicitud:</h4>
              
              
              <label>ID:<input type="text" name="idmodificasolicitud" id="idmodificasolicitud"></label>
              
              

              <button id="requestmodificarsolicitud" name="requestmodificarsolicitud" class="button" >Buscar</button>
              <button id="cerrarmodalmodificasolicitud" class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!-- This is the nested modal -->
            <div class="reveal" id="modalcontregsolicitud" data-reveal>
              <h4>Registros Incompletos...</h4>
              <table  id="tablajson2">
                <thead>
                  <th>Id</th> 
                  <th>Tipo de Crédito</th>
                  <th>Cliente</th>
                </thead>
                <tbody></tbody>
              </table>
              <button id="cerrarmodalcontregsolicitud" class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <input class="button" type="button" data-open="modalcontregsolicitud" name="continuarsolicitud" id="continuarsolicitud" value="Continuar Con Registro">
          </div>
          
          <div id="contenidorequestsolicitud" style="display: none;">

            <ul class="tabs" data-tabs id="deeplinked-tabs">


            <ul class="tabs"  data-tabs id="deeplinked-tabs">


              <li class="tabs-title is-active"><a href="#panel1d" aria-selected="true">Credito</a></li>
              <li class="tabs-title"><a href="#panel2d">Obligado Solidario</a></li>
              <li class="tabs-title"><a href="#panel3d">Concesionario</a></li>    
            </ul>
            <div class="tabs-content" data-tabs-content="deeplinked-tabs">
              <div class="tabs-panel is-active" id="panel1d">

        

                <div class="row">
                  <p align="left">
                    <div class="medium-3 columns">
                      <label> Tipo Credito
                        <select name="tipocredito" size="1" id="tipocredito"  required="" >
                          <option value="" ></option>
                                                              <?php
                                                              include("Conexion2.php");
                                                              $rescreditos=mysqli_query($cnx,"select * from tiposcreditos");
                                                              while($rowcreditos=mysqli_fetch_array($rescreditos)){?> 
                          <option value="<?php echo $rowcreditos['descripcion'];?>" ><?php echo $rowcreditos['descripcion'];?></option>

                                                              <?php }
                                                              ?>
                          </select>
                      </label>
                    </div>
                                                        
                    <div class="medium-3 columns" id="displaymonto" style="display: none;"> 
                      <label><span id="labelmontosoli"></span> 
                        <div class="input-group">
                        <span class="input-group-label">$</span>
                        <input class="input-group-field"  name="textfield86" type="text" id="textfield86"  onkeyup="mascara(this,cpf)"   >
                        </div>
                      </label> 
                    </div>

                    <div class="medium-3 columns" id="engautochange" style="display: none;">
                      <label>Enganche 
                        <div class="input-group">
                        <span class="input-group-label">$</span>
                        <input class="input-group-field"  name="textfield87" type="text" id="textfield87" size="50%" onchange="datosAuto()" onkeyup="mascara(this,cpf)"  ><!--onchange="datosAuto()"-->
                        </div>
                      </label>
                    </div>

                    <div class="medium-3 columns" id="porengautochange" style="display: none;">
                      <label> Porcentaje de Enganche
                      <div class="input-group">
                        <input class="input-group-field" name="textfield88" type="text" id="textfield88" size="50%"  readonly>
                        <span class="input-group-label">%</span>
                        </div>
                      </label>
                    </div>
                    <div class="medium-3 columns" id="porfinautochange" style="display: none;">
                      <label>Porcentaje de Financieamiento
                      <div class="input-group">
                        <input class="input-group-field" name="textfield89" type="text" id="textfield89" size="50%"  readonly>
                        <span class="input-group-label">%</span>
                        </div>
                      </label>
                    </div>
                    <div class="medium-3 columns" id="monfinautochange" style="display: none;">
                      <label>Monto Financiado 
                      <div class="input-group">
                        <span class="input-group-label">$</span>
                        <input class="input-group-field" name="textfield90" type="text" id="textfield90" size="50%"  readonly>
                        </div>
                      </label>
                    </div>
                    <div class="medium-3 columns" style="display: none;" id="interesanual">
                      <label>Interes Anual
                      <div class="input-group">
                        <input class="input-group-field" name="textfield100" type="text" id="textfield100" size="50%"  readonly  >
                        <span class="input-group-label">%</span>
                        </div>
                      </label>
                    </div>
                    <div class="medium-3 columns" id="comisionapchange" style="display: none;">
                      <label>Comisión por Apertura
                      <div class="input-group">
                        <input class="input-group-field" name="textfield96" type="text" id="textfield96" size="50%"  readonly  >
                        <span class="input-group-label">%</span>
                        </div>
                      </label>
                    </div>
                    <div class="medium-3 columns" id="seguroauto" style="display: none;">
                      <label>Seguro de Auto
                      <div class="input-group">
                        <span class="input-group-label">$</span>
                        <input class="input-group-field" name="textfield97" type="text" id="textfield97" size="50%"  onkeyup="mascara(this,cpf)" >
                        </div>
                      </label>
                    </div>
                    <div class="medium-3 columns" id="segurovida" style="display: none;">
                      <label>Seguro de Vida
                      <div class="input-group">
                        <span class="input-group-label">$</span>
                        <input class="input-group-field" name="textfield98" type="text" id="textfield98" size="50%" onkeyup="mascara(this,cpf)"  >
                        </div>
                      </label>
                    </div>

                    <div class="medium-3 columns" id="segdeschange" style="display: none;">
                      <label>Seguro de Desempleo
                        <div class="input-group">
                        <span class="input-group-label">$</span>
                        <input class="input-group-field" name="textfield99" type="text" id="textfield99" size="50%" onkeyup="mascara(this,cpf)"  >
                        </div>
                      </label>
                    </div>
                    <div class="medium-3 columns" id="plazocredito" style="display: none;">
                      <label>Plazo
                      <div class="input-group">
                        <span class="input-group-label">Meses</span>
                        <input class="input-group-field" name="textfield91" type="text" id="textfield91" size="50%"   >
                        </div>
                      </label>
                    </div>
                    <div class="medium-3 columns" id="pagomensualesp" style="display: none;">
                      <label>Pago Mensual Esperado
                      <div class="input-group">
                        <span class="input-group-label">$</span>
                        <input class="input-group-field" name="textfield92" type="text" id="textfield92" size="50%" onkeyup="mascara(this,cpf)"  >
                        </div>
                      </label>
                    </div>
                    <div class="medium-5 columns" id="divbotoncambval" style="display: none;">
                      <input type="button" class="button" data-open="Aut" value="Cambiar Valores">
                    </div>
                                                                
                  </p>
                </div>
  

                      <!-- This is the first modal -->


                                  <div class="reveal" id="Aut" data-reveal>
                                    <h3>Clave de Autorizacion</h3>
                                    <div class="row">
                                      <div class="medium-5 columns">
                                        <input type="text" id="clave" name="clave">
                                        <button class="button" data-close aria-label="Close reveal" id="keycheck" data-open="exampleModal3">Aceptar!</button>
                                      </div>
                                    </div>
                                    <button class="close-button" data-close aria-label="Close reveal" type="button">
                                      <span aria-hidden="true">X</span>
                                    </button>
                                  </div>
              </div>
              <div class="tabs-panel" id="panel2d">
                  <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO PERSONA FÍSICA, PROPIETARIO DE BIEN INMUEBLE </strong></p>
                <div class="row">
                  <p align="left">
                    <div class="medium-3 columns"><label>Nombre
                      <input name="datobnom1" type="text" id="datobnom1" size="30px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomObSol']; } ?>" placeholder="Nombre(s)" pattern="alpha"></label>
                    </div>

                    <div class="medium-3 columns"><label>Apellido Paterno
                      <input name="datobappat1" type="text" id="datobappat1" size="30px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApPatObSol']; } ?>" placeholder="Apellido Paterno" pattern="alpha"></label>
                    </div>

                    <div class="medium-3 columns"><label>Apellido Materno
                      <input name="datobapmat1" type="text" id="datobapmat1" size="30px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApMatObSol']; } ?>" placeholder="Apellido Materno" pattern="alpha"></label>
                    </div>
                    <div class="medium-3 columns"><label>Codigo Postal
                      <input name="datobcp1" type="text" id="datobcp1" size="30px" placeholder="C.P." onchange="cpostal(this.value,'datobedo1','','datobcol1','datobcd1','loading10')" maxlength="5" pattern="integer"></label>
                    </div>

                    <div class="medium-3 columns"><label>Direccion/ Calle y numero
                      <input name="datobdir1" type="text" id="datobdir1" size="48px" pattern="alpha_numeric2"></label>
                    </div>

                    <div class="medium-3 columns"><label>Colonia <div id="loading10"></div>
                      <select name="datobcol1" id="datobcol1"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>

                    <div class="medium-3 columns"><label>Ciudad
                      <select name="datobcd1" id="datobcd1"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>

                  </p>
                </div>
                <div class="row"> 
                  <p align="left">
                    <div class="medium-3 columns"><label>Estado
                      <select name="datobedo1" id="datobedo1"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>

                    <div class="medium-3 columns"><label>Lugar de nacimiento
                      <input name="datoblugnac1" type="text" id="datoblugnac1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['LugNacObSol']; } ?>" size="30px" placeholder="Lugar nacimiento (País y Edo.)"></label>
                    </div>
                    <div class="medium-3 columns"><label>Email
                      <input  name="datobmail1" type="text" id="datobmail1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmailObSol']; } ?>" size="30px" placeholder="Email" pattern="email"></label>
                    </div>
            
                    <div class="medium-3 columns"> <label>Sexo
                      <select name="datobsex1" id="datobsex1"><option value="">-Seleccione una opción-</option><option value="Femenino">Femenino</option><option value="Masculino">Masculino</option></select></label>
                    </div>
                  </p>
                </div>
             
         
              
                <div class="row">
                  <p align="left">
                
                    <div class="medium-3 columns"><label>Fecha de nacimiento:
                      <input name="datobfechnac1d" type="date" id="datobfechnac1d" size="1px"  onfocus="datepick(this)" onchange="calcularAntiguedad(this,'datobed1')"></label>
                    </div>

                    <div class="medium-3 columns"><label>Edad
                     
 
                      <input  name="datobed1" type="text" id="datobed1" size="2px" placeholder="Edad" pattern="integer" readonly="">
 
 
 
                      </label>

                    </div>

                    <div class="medium-3 columns"><label>CURP
                      <input name="datobcurp1" type="text" id="datobcurp1" size="22px" placeholder="CURP" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CURPObSol']; } ?>"  pattern="curp" onkeypress="mayusculas(this)"></label>
                    </div>
                    <div class="medium-3 columns"><label>RFC
                      <input name="datobrfc11" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][0]; } ?>" type="text" id="datobrfc11" size="1px"   pattern="rfc" onkeypress="mayusculas(this)"></label> 
                    </div>

                    <div class="medium-3 columns"><label>Telefono Particular
                      <input name="datobtel11" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol']!='') {  echo $row['TelObSol'][0]; } ?>" type="text" id="datobtel11" size="1px"   pattern="telefono" onfocus="mascaratel(this)" ></label>
                    </div>

                    <div class="medium-3 columns"><label>Telefono Movil
                      <input name="datobtel112" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol']!='') {  echo $row['MovObSol'][0]; } ?>" type="text" id="datobtel112" size="1px"  pattern="telefono" onfocus="mascaratel(this)" ></label>
                    </div>
                    <div class="medium-3 columns">
                      <label>Tiene propiedad a su nombre?
                        <select name="datobprop1" id="datobprop1"><option value="">-Seleccione una opción-</option><option value="Si">Si</option><option value="No">No</option></select></label>
                  
                    </div>
                  </p>
                </div>
                <br>


                <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO (2) PERSONA FÍSICA, PROPIETARIO DE BIEN INMUEBLE </strong></p>

                <div class="row">
                  <p align="left">
                    <div class="medium-3 columns"><label>Nombre(s)
                      <input name="datobnom2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomObSol2']; } ?>" type="text" id="datobnom2" size="30px" placeholder="Nombre(s)" pattern="alpha"></label>
                    </div>

                    <div class="medium-3 columns"><label>Apellido paterno
                      <input name="datobappat2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApPatObSol2']; } ?>" type="text" id="datobappat2" size="30px" placeholder="Apellido Paterno" pattern="alpha"></label>
                    </div>

                    <div class="medium-3 columns"><label>Apellido Materno
                      <input name="datobapmat2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApMatObSol2']; } ?>" type="text" id="datobapmat2" size="30px" placeholder="Apellido Materno" pattern="alpha"></label>
                    </div>

                    <div class="medium-3 columns"><label>Codigo Postal
                      <input name="datobcp2" type="text" id="datobcp2" size="30px" placeholder="C.P." maxlength="5" pattern="cpostal" onchange="cpostal(this.value,'datobedo2','','datobcol2','datobcd2','loading11')"></label>
                    </div>
                    <div class="medium-3 columns"><label>Direccion / Calle y numero 
                      <input name="datobdir2"  type="text" id="datobdir2" size="48px" placeholder="Dirección / Calle y número" pattern="alpha_numeric2"></label>
                    </div>

                    <div class="medium-3 columns"><label>Colonia<div id="loading11"></div>
                    <select name="datobcol2" id="datobcol2"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>

                    <div class="medium-3 columns"><label>Ciudad
                    <select name="datobcd2" id="datobcd2"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>

                  </p>
                </div>
                <div class="row">
                  <p align="left">
                    <div class="medium-3 columns"><label>Estado
                    <select name="datobedo2" id="datobedo2"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>

                    <div class="medium-3 columns"><label>Lugar de nacimiento
                      <input name="datoblugnac2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['LugNacObSol2']; } ?>" type="text" id="datoblugnac2" size="30px" placeholder="Lugar nacimiento (País y Edo.)"></label>
                    </div>

                    <div class="medium-3 columns"><label>Email
                      <input  name="datobmail2" type="text" id="datobmail2" size="30px" placeholder="Email" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmailObSol2']; } ?>" pattern="email"></label>
                    </div>
                  </p>
                  <div class="medium-3 columns"><label>Sexo
                    <select name="datobsex2" id="datobsex2"><option value="">-Seleccione una opcion-</option><option value="Femenino">Femenino</option><option value="Masculino">Masculino</option></select></label>
                  </div>
                </div>
                <div class="row"> 
                  <p align="left">
               
                    <div class="medium-3 columns"><label> Fecha de nacimiento:
                      <input name="datobfechnac2d" type="date" id="datobfechnac2d"  size="1px"  onfocus="datepick(this)"  onchange="calcularAntiguedad(this,'datobed2')"></label>
                    </div>
                    <div class="medium-3 columns"><label>Edad
                      <input name="datobed2" type="text" id="datobed2" size="2px"  placeholder="Edad" readonly=""></label>
                    </div>

                    <div class="medium-3 columns"><label>CURP
                      <input name="datobcurp2" type="text" id="datobcurp2" size="22px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CURPObSol2']; } ?>" pattern="curp" onkeypress="mayusculas(this)"></label>
                    </div>

                    <div class="medium-3 columns"><label>RFC
                      <input name="datobrfc21" type="text" id="datobrfc21" size="1px"   pattern="rfc" onkeypress="mayusculas(this)" ></label>
                    </div>

                    <div class="medium-3 columns"><label>Telefono
                      <input name="datobtel21" type="text" id="datobtel21" size="1px"  value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol2']!='') {  echo $row['TelObSol2'][0]; } ?>"  pattern="telefono" onfocus="mascaratel(this)"  ></label>
                    </div>

                    <div class="medium-3 columns"><label>Telefono Movil
                      <input name="datobtel212" type="text" id="datobtel212" size="1px"   pattern="telefono" onfocus="mascaratel(this)"  ></label>
                    </div>
                    <div class="medium-3 columns">
                      <label>Tiene propiedad a su nombre?
                        <select name="datobprop2" id="datobprop2"><option value="">-Seleccione una opción-</option><option value="Si">Si</option><option value="No">No</option></select></label>
                    </div>
                  </p>

                </div>
                <div id="divcontenidoobsolpm" style="display: none;">
                  
                       
                       <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO PERSONA MORAL </strong></p>
                <div class="row">
                  <p align="left">
                    
                  
                        <div class="medium-3 columns"><label>Nombre Razon social<input type="text" name="NomObSolPM" id="NomObSolPM"></label></div>
                        <div class="medium-3 columns"><label>RFC <input type="text" name="RFCObSolPM" id="RFCObSolPM" pattern="rfc" onkeypress="mayusculas(this)"></label></div>
                        <div class="medium-3 columns"><label>Telefono <input type="text" name="TelObSolPM" id="TelObSolPM" pattern="telefono" onfocus="mascaratel(this)"></label></div>
                        <div class="medium-3 columns"><label>Telefono Alternativo <input type="text" name="Tel2ObSolPM" id="Tel2ObSolPM" pattern="telefono" onfocus="mascaratel(this)"></label></div>
                        <div class="medium-3 columns"><label>Codigo Posta <input type="text" name="CPObSolPM" id="CPObSolPM" maxlength="5" pattern="cpostal" onchange="cpostal(this.value,'EstObSolPM','MunObSolPM','ColObSolPM','CdObSolPM','loading12')"></label></div>
                        <div class="medium-3 columns"><label>Direccion (calle y número)<input type="text" name="DirObSolPM" id="DirObSolPM" pattern="alpha_numeric2"></label></div>
                        <div class="medium-3 columns"><label>Colonia<div id="loading12"></div> <select name="ColObSolPM" id="ColObSolPM"><option value="">-Seleccione una opción-</option></select></label></div>
                        <div class="medium-3 columns"><label>Ciudad <select name="CdObSolPM" id="CdObSolPM"><option value="">-Seleccione una opción-</option></select></label></div>
                        <div class="medium-3 columns"><label>Estado <select name="EstObSolPM" id="EstObSolPM"><option value="">-Seleccione una opción-</option></select></label></div>
                        <div class="medium-3 columns"><label>Municipio <select name="MunObSolPM" id="MunObSolPM"><option value="">-Seleccione una opción-</option></select></label></div>
                        <div class="medium-3 columns"><label>E-Mail <input type="text" name="EmailObSolPM" id="EmailObSolPM" pattern="email"></label></div>
                  </p>
                 
                    
                </div>
                <div class="row" >
                  
                       <p align="Left"><label><strong>Constitucion de la Empresa</strong></label>
                        <div class="medium-3 columns"><label>Antiguedad <input type="text" name="AntObSolPM" id="AntObSolPM" pattern="integer" maxlength="3"></label></div>
                        <div class="medium-6 columns"><label>Apoderado para suscribir titulos de credito y realizar actos de administracion <input type="text" name="ApoObSolPM" id="ApoObSolPM" pattern="alpha"></label></div>
                       </p>
                </div>
                <div class="row">
                       <p align="left"><label><strong>Datos Generales</strong></label>
                        <div class="medium-3 columns"><label>Actividad Principal <input type="text" name="ActPrinObSolPM" id="ActPrinObSolPM" pattern="alpha"></label></div>
                        <div class="medium-3 columns"><label>Fecha de inicio de operaciones <input type="date" name="FeIniOpObSolPM" id="FeIniOpObSolPM" ></label></div>
                        <div class="medium-3 columns"><label>Cantidad de personal <input type="text" name="CantPerObSolPM" id="CantPerObSolPM" pattern="integer"></label></div>
                       </p>
                </div>
                      
                </div>
              </div>

              <div class="tabs-panel" id="panel3d">
                <div class="row">
                  <p align="justify">
                    <div class="medium-3 columns"><label>Concesionario
                    <div class="input-group">
                        <span class="input-group-label">#</span>
                      <input class="input-group-field" name="clavcon" type="text" id="clavcon" size="30px" placeholder="Clave Consesionario o Distribuidor" pattern="integer"></label>
                      </div>
                    </div>

                    <div class="medium-3 columns"><label>Nombre Concesionario
                      <input name="nomcons" type="text" id="nomcons" size="30px" placeholder="Nombre Concesionario o Distribuidor" pattern="alpha"></label>
                    </div>

                    <div class="medium-3 columns"><label>Nombre del Vendedor
                      <input name="nomvend" type="text" id="nomvend" size="48px" placeholder="Nombre del Vendedor" pattern="alpha"></label>
                    </div>

                    <div class="medium-3 columns"><label>Gerente General Nombre y firma
                      <input name="gerentegral" type="text" id="gerentegral"  size="48px" placeholder="Nombre y firma del Gerente General" pattern="alpha"></label>
                    </div>

                    <div class="medium-3 columns"><label>Fecha
                    <div class="input-group">
                        <span class="input-group-label">_/_/_</span>
                      <input class="input-group-field" name="fechasolicitudregistro" type="text" id="fechasolicitudregistro" value="<?php echo date("Y-m-d");?>" size="10px" readonly></label>
                      </div>
                    </div>
                  </p>
                </div>
              </div>
              

              <div class="tabs-panel" id="panel4d">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>


              <input class="button" type="button" name="guardarsolicitud" id="guardarsolicitud" value="Guardar" style="display: none;">
              <input class="button" type="button" name="botonmodsolicitud" id="botonmodsolicitud" value="Guardar" style="display: none;">
              <input class="button" type="button" name="cancelarsolicitud" id="cancelarsolicitud" value="Cancelar Registro">
              <!--<input name="fechasolicitudregistro" type="text" id="fechasolicitudregistro" value="<?php echo date("Y-m-d");?>" size="10px" readonly>-->
            </div>
          </div>
        </form> 
      </div>
        
 


      <div class="tabs-panel" id="panel3v">
        <form id="form3" action="" method="post" data-abide novalidate>
            <div id="botonesconocimiento">
            <input class="button" data-open="modalnuevaconocimiento" type="button" name="nuevaconocimiento" id="nuevaconocimiento" value="Generar Grado de Riesgo">
            <input class="button" data-open="modalmodificarconocimiento" type="button" name="modificarconocimiento" id="modificarconocimiento" value="Modificar Grado de Riesgo">
          
            <div class="reveal" id="modalnuevaconocimiento" data-reveal>
              <h4>Selecciona la solicitud</h4>
              
              <table  id="tablajson3">
                <thead>
                  <th>Id</th> 
                  <th>Tipo de Crédito</th>
                  <th>Cliente</th>
                </thead>
                <tbody></tbody>
              </table>
              

                
              
            <div id="resultadonuevaconocimiento"></div>
              <!--<button id="requestnuevaconocimiento name="requestnuevaconocimiento class="button" >Buscar</button>-->
              <button id="cerrarmodalnuevaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>




            <!-- This is the first modal -->
            <div class="reveal" id="modalmodificarconocimiento" data-reveal>
              <h4>Ingresa el Número de Solicitud:</h4>
              
              
              <label>ID:<input type="text" name="idmodificaconocimiento" id="idmodificaconocimiento"></label>
              
              

              <button id="requestmodificarconocimiento" name="requestmodificarconocimiento" class="button" >Buscar</button>
              <button id="cerrarmodalmodificaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!-- This is the nested modal -->
            <div class="reveal" id="modalcontregconocimiento" data-reveal>
              <h4>Registros Incompletos...</h4>
              <table  id="tablajson4">
                <thead>
                  <th>Id</th> 
                  <th>Tipo de Crédito</th>
                  <th>Cliente</th>
                </thead>
                <tbody></tbody>
              </table>
              <button id="cerrarmodalcontregconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <input class="button" type="button" data-open="modalcontregconocimiento" name="continuarconocimiento" id="continuarconocimiento" value="Continuar Con Registro">
          </div>
          <div id="contenidorequestconocimiento" style="display: none;">
              
                <ul class="tabs" data-tabs id="example-tabs">
                  <li class="tabs-title is-active"><a href="#panel2g">Perfil Transaccional</a></li>
                  <li class="tabs-title"><a href="#panel3g">Parentesco con PEP</a></li>
                  <li class="tabs-title"><a href="#panel1g" aria-selected="true">Grado de Riesgo</a></li>
                </ul>
              
                
                <div class="tabs-content" data-tabs-content="example-tabs">
                  <div class="tabs-panel is-active" id="panel1g">
                  
                      <p align="left"><strong>CLASIFICACIÓN POR GRADO DE RIESGO</strong></p>
                      <table width="100%" border="0">
                        <tr>
                          <td width="32%">Actividad | Objeto Social </td>
                          <td width="68%"><select id="select" name="select" size="1" style="width:60%;" >
                            <option value="" selected>¿Cual es la actividad economica del cliente o tercero relacionado?</option>
                            <option value="Vulnerable" >Vulnerable</option>
                            <option value="Informal">Informal</option>
                            <option value="Otra">Otra</option>
                          </select>
                          </td>
                        </tr>
                        <tr>
                          <td>Antigüedad del cliente </td>
                          <td><select id="select2" name="select2" size="1" style="width:60%;" >
                            <option value="" selected>¿Cuanto tiempo tiene la relacion con el cliente?</option>
                            <option value="1-3 años">1-3 años</option>
                            <option value="4-6 años">4-6 años</option>
                            <option value="7-10 años">7-10 años</option>
                            <option value="N/A">N/A</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>Naturaleza de las operaciones </td>
                          <td><select id="select3" name="select3" size="1" style="width:60%;" >
                            <option value="" selected>¿Que tipo de operaciones realizara con SFG?</option>
                            <option value="Prestamo">Prestamo</option>
                            <option value="Arrendamiento">Arrendamiento</option>
                            <option value="Otros">Otros</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>Numero de Beneficiarios </td>
                          <td><select id="select4" name="select4" size="1" style="width:60%;" >
                            <option value="" selected> ¿Cuantos beneficiarios tiene el cliente?</option>
                            <option value="1 a 2">1 a 2</option>
                            <option value="3 a 4">3 a 4</option>
                            <option value="5 o mas">5 o mas</option>
                            <option value="N/A">N/A</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>Numero de Terceros Relacionados (Apoderados y Cotitulares) </td>
                          <td><select id="select5" name="select5" size="1" style="width:60%;" >
                            <option value="" selected>¿Cuantas personas relacionadas(Apoderados y Cotitulares) participan en la operacion ?</option>
                            <option value="1 a 2">1 a 2</option>
                            <option value="3 a 4">3 a 4</option>
                            <option value="5 o mas">5 o mas</option>
                            <option value="N/A">N/A</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>PEPs Relacionados </td>
                          <td><select id="select6" name="select6" size="1" style="width:60%;" >
                            <option value="" selected>¿Cual es el porcentaje de coincidencia de un cliente con respecto a las personas Politicamente expuestas?</option>
                            <option value="1% - 49%">1% - 49%</option>
                            <option value="50% - 74%">50% - 74%</option>
                            <option value="75% - 100%">75% - 100%</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>Alerta Reputacional </td>
                          <td><select id="select7" name="select7" size="1" style="width:60%;" >
                            <option value="" selected>¿Cual es el porcentaje de coincidencia de un cliente con respecto a las listas negras?*</option>
                            <option value="1% - 49%">1% - 49%</option>
                            <option value="50% - 74%">50% - 74%</option>
                            <option value="75% - 100%">75% - 100%</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>Volumen esperado (Monto) </td>
                          <td><select id="select8" name="select8" size="1" style="width:60%;" >
                            <option value="" selected>¿Cual es el monto esperado de la operacion?</option>
                            <option value="$18000 - $20000">$18000 - $20000</option>
                            <option value="$21000 - $25000">$21000 - $25000</option>
                            <option value="mas de $25000">mas de $25000</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>Frecuencia esperada (No. Veces) </td>
                          <td><select id="select9" name="select9" size="1" style="width:60%;" >
                            <option value="" selected>¿Cual es el numero de pagos esperados en la operación?</option>
                            <option value="1 a 3">1 a 3</option>
                            <option value="4 a 6">4 a 6</option>
                            <option value="7 a 10">7 a 10</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>Instrumento Monetario Utilizado </td>
                          <td><select id="select10" name="select10" size="1" style="width:60%;" >
                            <option value="" selected> ¿De que forma realiza los pagos el cliente? </option>
                            <option value="Transferencia">Transferencia</option>
                            <option value="Cheque">Cheque</option>
                            <option value="Efectivo">Efectivo</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>Canales o Medios Utilizados </td>
                          <td><select id="select11" name="select11" size="1" style="width:60%;" >
                            <option value="" selected>¿En donde realiza el pago el cliente?</option>
                            <option value="Agencia">Agencia</option>
                            <option value="Internet">Internet</option>
                            <option value="Otro">Otro</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>País | Estado Oficial </td>
                          <td><select id="select12" name="select12" size="1" style="width:60%;" >
                            <option value="" selected>¿Cual es el pais de residencia del cliente?*</option>
                            <option value="México">México</option>
                            <option value="Otros">Otros</option>
                            <option value="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>País | Estado Residencia </td>
                          <td><select id="select13" name="select13" size="1" style="width:60%;" >
                            <option value="" selected>¿Cual es el estado de residencia del cliente?</option>
                            <option value="Guerrero-Michoacan-Tamaulipas-Morelos">Guerrero-Michoacan-Tamaulipas-Morelos</option>
                            <option value="Durango-Chihuhua-Jalisco-México-CD México-Sonora">Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                            <option value="Puebla-Coahuila-Zcatecas-Hidalgo-Durango">Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>País | Estado Operación </td>
                          <td><select id="select14" name="select14" size="1" style="width:60%;" >
                            <option value="" selected>¿Cual es el estado donde el cliente realiza operaciones frecuentes?</option>
                            <option value="Guerrero-Michoacan-Tamaulipas-Morelos">Guerrero-Michoacan-Tamaulipas-Morelos</option>
                            <option value="Durango-Chihuhua-Jalisco-México-CD México-Sonora">Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                            <option value="Puebla-Coahuila-Zcatecas-Hidalgo-Durango">Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>Origen de los recursos </td>
                          <td><select id="select15" name="select15" size="1" style="width:60%;" >
                            <option value="" selected>¿Cual es el lugar de origen de los recursos del cliente?*</option>
                            <option value="México">México</option>
                            <option value="Otros">Otros</option>
                            <option value="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>Destino de los recursos </td>
                          <td><select id="select16" name="select16" size="1" style="width:60%;" >
                            <option value="" selected>¿Cual es el lugar de destino de los recursos del cliente?*</option>
                            <option value="México">México</option>
                            <option value="Otros">Otros</option>
                            <option value="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>País | Estado Residencia de Terceros Relacionados </td>
                          <td><select id="select17" name="select17" size="1" style="width:60%;" >
                            <option value="" selected>¿Cual es el estado de residencia de las personas relacionadas del cliente?*</option>
                            <option value="México">México</option>
                            <option value="Otros">Otros</option>
                            <option value="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                          </select></td>
                        </tr>
                         <tr >
                          <td><span id="spangradoreisgoedan">Edad del cliente / Años de constitucion  </span></td>
                          <td><select id="select18" name="select18" size="1" style="width:60%;" >
                            <option value="" selected>¿Qué edad tiene el cliente?</option>
                            <option value="18 - 26">18 - 26 </option>
                            <option value="27 - 36">27 - 36 </option>
                            <option value="37 - 56">37 - 56 </option>
                            <option value="56 en adelante">56 en adelante</option>
                          </select>
                          <select id="select19" name="select19" size="1" style="width:60%;" >
                            <option value="" selected>¿Cuantos años de Constitución?</option>
                            <option value="0 - 3">0 - 3 </option>
                            <option value="4 - 7">4 - 7 </option>
                            <option value="8 en adelante">8 en adelante</option>
                          </select>
                          </td>
                        </tr >
                           
                        <tr>
                          <td>Regimen de tributacion </td>
                          <td>

                            <select id="select20" name="select20" size="1" style="width:60%;" style="display:none;">
                              <option value="" selected>¿Cual es su regimen de tributación?</option>
                              <option value="Regimen agape" >Regimen agape</option>
                              <option value="Regimen general de ley">Regimen general de ley</option>
                              <option value="Regimen Donatarios">Regimen Donatarios</option>
                              <option value="Regimen Coordinados">Regimen Coordinados</option>
                            </select>
                            <div >
                            <select id="select21" name="select21" size="1" style="width:60%;" style="display:none;">
                            <option value="" selected>¿Cual es su regimen de tributación?</option>

                            <option value="Incorporacion Fiscal">Incorporacion Fiscal </option>
                            <option value="Servicios Profesionales">Servicios Profesionales</option>
                            <option value="Intereses">Intereses</option>
                            <option value="Asalariado">Asalariado</option>
                            <option value="Arrendamiento">Arrendamiento</option>
                            <option value="Actividad empresarial">Actividad empresarial</option>
                            <option value="Regimen Agape">Regimen Agape</option>

                          </select>
                            </div>
                          </td>
                        </tr>
                        <td>*Si la valoracion de riesgo de esta variable es igual a 3, contactar al oficial de cumplimiento inmediantamente para aprobacion o cancelacion del credito/ arrendamiento</td>
                      </table>
                  </div>
                  <div class="tabs-panel is-active" id="panel2g">
                    <p><strong>PERFIL TRANSACCIONAL INICIAL</strong></p>
                    <div class="row">
                      <div class="medium-8">
                        
                      <label><p>Ingresos Comprobables</p>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label"><pre>1  |  $</pre></span>
                            <input class="input-group-field" name="ingrcomp1" type="text" id="ingrcomp1" maxlength="13" onkeyup="mascara(this,cpf)" >
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label">Fuente</span>
                            <input class="input-group-field" type="text" id="fuenteingrcomp1" name="fuenteingrcomp1" pattern="alpha">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label"><pre>2  |  $</pre></span>
                            <input class="input-group-field" name="ingrcomp2" type="text" id="ingrcomp2" maxlength="13" onkeyup="mascara(this,cpf)">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label">Fuente</span>
                            <input class="input-group-field" type="text" id="fuenteingrcomp2" name="fuenteingrcomp2" pattern="alpha">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label"><pre>3  |  $</pre></span>
                            <input class="input-group-field" name="ingrcomp3" type="text" id="ingrcomp3" maxlength="13" onkeyup="mascara(this,cpf)">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label">Fuente</span>
                            <input class="input-group-field" type="text" id="fuenteingrcomp3" name="fuenteingrcomp3" pattern="alpha">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label"><pre>4  |  $</pre></span>
                            <input class="input-group-field" name="ingrcomp4" type="text" id="ingrcomp4" maxlength="13" onkeyup="mascara(this,cpf)">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label">Fuente</span>
                            <input class="input-group-field" type="text" id="fuenteingrcomp4" name="fuenteingrcomp4" pattern="alpha">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label"><pre>5  |  $</pre></span>
                            <input class="input-group-field" name="ingrcomp5" type="text" id="ingrcomp5" maxlength="13" onkeyup="mascara(this,cpf)">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label">Fuente</span>
                            <input class="input-group-field" type="text" id="fuenteingrcomp5" name="fuenteingrcomp5" pattern="alpha">
                            </div>
                        </div>
                       </label>
                      </div>

                          
                    </div>
                    <div class="row">
                      <div class="medium-8">
                        
                      <label><p>Ingresos No Comprobables</p>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label"><pre>1  |  $</pre></span>
                            <input class="input-group-field" name="ingrnocomp1" type="text" id="ingrnocomp1" maxlength="13" onkeyup="mascara(this,cpf)">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label">Fuente</span>
                            <input class="input-group-field" type="text" id="fuenteingrnocomp1" name="fuenteingrnocomp1" pattern="alpha">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label"><pre>2  |  $</pre></span>
                            <input class="input-group-field" name="ingrnocomp2" type="text" id="ingrnocomp2" maxlength="13" onkeyup="mascara(this,cpf)">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label">Fuente</span>
                            <input class="input-group-field" type="text" id="fuenteingrnocomp2" name="fuenteingrnocomp2" pattern="alpha">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label"><pre>3  |  $</pre></span>
                            <input class="input-group-field" name="ingrnocomp3" type="text" id="ingrnocomp3" maxlength="13" onkeyup="mascara(this,cpf)">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label">Fuente</span>
                            <input class="input-group-field" type="text" id="fuenteingrnocomp3" name="fuenteingrnocomp3" pattern="alpha">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label"><pre>4  |  $</pre></span>
                            <input class="input-group-field" name="ingrnocomp4" type="text" id="ingrnocomp4" maxlength="13" onkeyup="mascara(this,cpf)">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label">Fuente</span>
                            <input class="input-group-field" type="text" id="fuenteingrnocomp4" name="fuenteingrnocomp4" pattern="alpha">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label"><pre>5  |  $</pre></span>
                            <input class="input-group-field" name="ingrnocomp5" type="text" id="ingrnocomp5" maxlength="13" onkeyup="mascara(this,cpf)">
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="input-group">
                            <span class="input-group-label">Fuente</span>
                            <input class="input-group-field" type="text" id="fuenteingrnocomp5" name="fuenteingrnocomp5" pattern="alpha">
                            </div>
                        </div>
                       </label>
                      </div>
                      
                          
                    </div>
                  </div>
                  <div class="tabs-panel is-active" id="panel3g">
                    <div class="row">
                      
                      <div class="medium-12">
                        <p align="justify">¿ Usted o algún familiar suyo de hasta segundo grado de consanguinidad o afinidad (cónyuge, padre, madre, hijos, hermanos, abuelos, tios, primos, cuñados, suegros, yernos, etc), desempeña o a desempeñado funciones públicas destacadas en el territorio nacional o en el Extranjero (incluyendo puestos de Gobierno Federales, Estatales, Municipales, funciones gubernamentales o judiciales, en partidos politicos, militares de alta jerarquía, altos ejecutivos de empresas paraestatales, etc.?
                        </p>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="medium-2 columns">
                      
                        <select name="tienepeprel" id="tienepeprel"><option value="">-Seleccione una opción-</option><option value="Si">Si</option><option value="No">No</option></select>
                      
                      </div>
                    </div>
                    <div id="Contentpepssi" style="display: none;">
                      <div class="row">
                        
                        <p>
                          <div class="medium-4 columns">
                            <label>
                              ¿Quién?
                              <input type="text" id="quienpep" name="quienpep">
                            </label>
                          </div>

                          <div class="medium-4 columns">
                            <label>
                              Parentesco
                              <input type="text" id="parentescopep" name="parentescopep">
                            </label>
                          </div>
                          <div class="medium-4 columns">
                            <label>
                              Puesto
                              <input type="text" id="puestorelpep" name="puestorelpep">
                            </label>
                          </div>
                        </p>
                      </div>
                  </div>
                </div>

                <div class="row">
                  <input class="button" type="button" name="guardargradriesgo" id="guardargradriesgo" value="Guardar">
                  <input  name="fecharegistrogradriesgo" type="text" id="fecharegistrogradriesgo" value="<?php echo date("Y-m-d");?>" size="10px" readonly>
                  </div>
                </div>
          </div>
        </form>
      </div>
      <div class="tabs-panel" id="panel4v"  >
<div id="botonesdocumentacion" > 
   <input class="button" type="button" data-open="modalnuevadocumentacion" name="nuevadocumentacion" id="nuevadocumentacion" value="Generar nueva documentacion" >
          <input class="button" data-open="modalmodificardocumentacion" type="button" name="modificardocumentacion" id="modificardocumentacion" value="Modificar Documentacion">
          
<div class="reveal" id="modalnuevadocumentacion" data-reveal>
         
               <table id="table1">
 <thead>
   <tr>
     <th>Id</th>
     <th>Cliente</th>
     <th>Tipo de Credito</th>
   </tr>
 </thead>
 <tbody></tbody>  

</table>
              <button id="cerrarmodalnuevadocu" class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <!-- This is the first modal -->
          <div class="reveal" id="modalmodificardocumentacion" data-reveal>
          <h4>Ingresa el numero de la solicitud</h4>
          <label>ID</label>
       <input type="text" name="didi" id="didi">
      <input class="button" type="button" name="dexter" id="dexter" value="Buscar">

            <button id="cerrarmodalmodificadocumentacion" class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <!-- This is the nested modal -->
          <div class="reveal" id="modalcontregdocumentacion" data-reveal>
            <h4>Registros Incompletos...</h4>
            <table  id="table2">
              <thead>
                <th>Id</th> 
                <th>Cliente</th>
                <th>Tipo de credito</th>
              </thead>
              <tbody></tbody>
            </table>
            <button id="cerrarmodalcontdoc" class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>





          <input class="button" type="button" data-open="modalcontregdocumentacion" name="continuardoc" id="continuardoc" value="Continuar Con Registro">
</div>

         <div style="display: none;" id="docs">
        <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
  <li class="tabs-title is-active"><a href="#panel1f" aria-selected="true">Identificación</a></li>
  <li class="tabs-title"><a href="#panel2f">Otros documentos</a></li>
  <li class="tabs-title"><a href="#panel3f">Tab 3</a></li>
  <li class="tabs-title"><a href="#panel4f">Tab 4</a></li>
</ul>

                        <form enctype="multipart/form-data" action="" method="POST" id="subirdato">
<div class="tabs-content" data-tabs-content="collapsing-tabs" >
      <div class="tabs-panel is-active" id="panel1f">
    
                   <h6 align="left">DOCUMENTACION DE IDENTIFICACION </h6>
                      <table width="100%" border="0">
                        <tr id="secINE">
                          <td width="15%">Credencial para votar </td>
                          <td width="15%"><input name="textfield39" type="text" id="textfield39" size="50%" ></td>
                          <td width="15%">
                          <input type="file" name="file1" id="file1"  data-multiple-caption="{count} archivos seleccionados" multiple />
                                <label for="file1">
                                   
                                </label> 
                                 </td>
                          <td width="10%" >
                          <a href="#" target="_blank" id="visor1"></a>
                          </td>
                        </tr>
                        <tr id="secCedProfesional">
                          <td>Pasaporte cedula profesional </td>
                          <td><input name="textfield40" type="text" id="textfield40" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['Pasaporte_o_CedulaProfSolicitante']; } ?>" ></td>
                          <td>            <input type="file" name="file2" id="file2"  data-multiple-caption="{count} archivos seleccionados" multiple />
                                    <label for="file2">
                                           
                                    </label> 
                           </td>
                          <td >
                     <a href="#" target="_blank" id="visor2"></a>
                          </td>
                        </tr>
                        <tr id="secCarMilitar">
                          <td>Cartilla de servicio militar </td>
                          <td><input name="textfield41" type="text" id="textfield41" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['CartillaMilitarSolicitante']; } ?>" ></td>
                          <td> <input type="file" name="file3" id="file3"  data-multiple-caption="{count} archivos seleccionados" multiple />
                          <label for="file3">
                       
                          </label>  </td>
                          <td >
                          <a href="#" target="_blank" id="visor3"></a>
                          </td>
                        </tr>
                        <tr id="secLicConducir">
                          <td>Licencia para conducir </td>
                          <td><input name="textfield42" type="text" id="textfield42" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['LicenciaConducirSolicitante']; } ?>" ></td>
                          <td> <input type="file" name="file4" id="file4"  data-multiple-caption="{count} archivos seleccionados" multiple />
                              <label for="file4">
                               
                              </label>   </td>
                          <td >
                           <a href="#" target="_blank" id="visor4"></a>
                          </td>
                        </tr>
                        <tr id="secOtrIdentificacion">
                          <td>  <label>Otra (Especificar)<input name="textfield44" type="text" id="textfield44" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['EspIdentSolicitante']; } ?>" ></label></td>
                          <td><input name="textfield43" type="text" id="textfield43" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['OtraIdentSolicitante']; } ?>" ></td>
                          <td> <input type="file" name="file5" id="file5"  data-multiple-caption="{count} archivos seleccionados" multiple />
                                <label for="file5">
                                   
                                </label>  </td>
                          <td >
                          <a href="#" target="_blank" id="visor5"></a>
                                                        </td>
                        </tr>                        <tr>
                          
                          <td>Se cotejo vs original: </td>
                          <td >
                          <div class="medium-5 columns">
                          <select  id="cot" name="cot" ><option value=" ">-Seleccione una opcion-</option><option>Si</option><option>No</option></select>
                               </div>
                               </td>
                        </tr>
                      </table>
                      
  </div>
         <div class="tabs-panel" id="panel2f">
            <p align="left">OTROS DOCUMENTOS QUE SE ADJUNTAN:</p>
              
                     <div class="row">

<p align="left">
                     <div class="medium-5 columns">
          <div id="pfadd"  class="callout primary" style="display: none;" >

<h5> Se adjunta CURP y/o cédula RFC, FEA* </h5>
     <input  class="input-group-field" type="file" name="file6" id="file6"  data-multiple-caption="{count} archivos seleccionados" multiple />

                         <a href="#" target="_blank" id="visor6"></a>
                    
                        </div>
                      </div>  
  
                   <div class="medium-5 columns">
                      <div class="callout primary">
                      <h5>  Se adjunta comprobante de domicilio   </h5> 
                        
                         <input type="file" name="file7" id="file7"  data-multiple-caption="{count} archivos seleccionados" multiple />
                        <label for="file7">
                         
                        </label> 
                        
                           <a href="#" target="_blank" id="visor7"></a>
                    
                   <div class="medium-12">
                        Fecha del comprobante de domicilio 
                        <input name="fechaComprobante" type="date" id="fechaComprobante" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['FechaComprobanteDom']; } ?>" onfocus="datepick(this)">
                      
                     
                        Domicilio manifestado coincide con la ID
                        

                                <select id="seldom" name="seldom"><option value=" ">-Seleccione una opcion-</option><option>Si</option><option>No</option></select>
                 </div>
                   </div>
</div>
                      
</p>



                          
   <div id="pmadd" style="display: none;">
                     <p align="left">
                      <div class="medium-5 columns">
                        <div class="callout primary">
                                
                      <h5> Se adjunta Acta constitutiva </h5>
                     
                       <input type="file" name="file8" id="file8"  data-multiple-caption="{count} archivos seleccionados" multiple />
                    
                    
                    
                         <a href="#" target="_blank" id="visor8"></a>
                     </div>
                        </div>
                              <div class="medium-5 columns">
                              <div class="callout primary">
                     <h5>  Se adjunta Cédula de id Fiscal. </h5>
                     
                       <input type="file" name="file9" id="file9"  data-multiple-caption="{count} archivos seleccionados" multiple />
                  
                    
                    
                         <a href="#" target="_blank" id="visor9"></a>
                    </div>
                        </div>
                         <div class="medium-5 columns">
                         <div class="callout primary">     
                     <h5>  Se adjunta Poderes </h5>
                     
                       <input type="file" name="file10" id="file10"  data-multiple-caption="{count} archivos seleccionados" multiple />
                  
                    
                    
                         <a href="#" target="_blank" id="visor10"></a>
                    </div>
                        </div>
</p>
</div>
                  </div> 
                       </div>
                             <div class="tabs-panel" id="panel3f">
                                                      <!--<img class="thumbnail" src="assets/img/generic/rectangle-3.jpg">-->
                              </div>
                              <div class="tabs-panel" id="panel4f">
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                             </div>
                          </form>

                          </div>
                           <input type="button" class="button" id="subir" name="subir" value="Subir archivo"  >
        </div>
        </div>
                                      <div class="tabs-panel" id="panel5v">
                                        <p>Five</p>
                                        <p>Check me out! I'm a super cool Tab panel with text content!</p>
                                      </div>
                                      <div class="tabs-panel" id="panel6v">
                                        <p>Six</p>
                                        
                                      </div>
    </div>
  </div>




<!--
<img src="images/sfg.jpg" width="100%">
  -->
         


    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>

     <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/vendor/app.js"></script>
    <script src="js/jquery.maskedinput.js" type="text/javascript"></script>

<script src="js/documentacion.js" ></script>
    
    
  <script>$(document).foundation();
  $('.title-bar').on('sticky.zf.stuckto:top', function(){
  $(this).addClass('shrink');
}).on('sticky.zf.unstuckfrom:top', function(){
  $(this).removeClass('shrink');
})</script>

<script src="js/clientes.js"></script>
<script src="js/solicitudes.js"></script>
<script src="js/gradoriesgo.js"></script>
<script src="js/scriptgeneral.js"></script>

</body></html>