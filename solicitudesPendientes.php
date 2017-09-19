<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">

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
          
        <div class="row">
        	<p align="left">
        		<div class="medium-12 columns">
        		  <div class="callout primary">
	        		<div class="input-group">
					    <span class="input-group-label">Buscar por:</span>
					    <select class="input-group-field" name="selectconsultaclientes" id="selectconsultaclientes"><option value="">-Seleccione una opción-</option><option value="1">ID</option><option value="2">Nombre(Persona Fisica)</option><option value="3">CURP(Persona Fisica)</option><option value="4">Razon Social(Persona Moral)</option><option value="5">RFC(Persona Moral)</option></select>
					   
					    	
					    <span id="spanidclientebusca" class="input-group-label" style="display: none;">Ingresa el ID:</span>
					    <input id="inputidclientebusca" style="display: none;" class="input-group-field" type="text" name="inputidclientebusca" pattern="integer">
					   

					    <span id="spannomclientebusca" style="display: none;" class="input-group-label">Primer Nombre:</span>
					    <input id="inputnomclientebusca" style="display: none;" class="input-group-field" type="text" name="" pattern="alpha">


					    <span id="spanap1clientebusca" style="display: none;" class="input-group-label">Apellido Paterno:</span>
					    <input id="inputap1clientebusca" style="display: none;" class="input-group-field" type="text" name="" pattern="alpha">


					    <span id="spanap2clientebusca" style="display: none;" class="input-group-label">Apellido Materno:</span>
					    <input id="inputap2clientebusca" style="display: none;" class="input-group-field" type="text" name="" pattern="alpha">
					    <div class="input-group-button" id="botonap2clientebusca" style="display: none;" data-open="modalbuscacliente"><input type="button" class="button" value="Buscar"></div>


					    <span id="spancurpclientebusca" style="display: none;" class="input-group-label">Ingresa el CURP:</span>
					    <input id="inputcurpclientebusca" style="display: none;" class="input-group-field" type="text" name="">

					    <span id="spanrazsocclientebusca" style="display: none;" class="input-group-label">Ingresa la Razon Social:</span>
					    <input id="inputrazsocclientebusca" style="display: none;" class="input-group-field" type="text" name="">

					    <span id="spanrfcclientebusca" style="display: none;" class="input-group-label">Ingresa el RFC:</span>
					    <input id="inputrfcclientebusca" style="display: none;" class="input-group-field" type="text" name="">
					  </div>
					</div>
        		</div>
        	</p>
        	<p align="center">
        		<div class="medium-2 columns" id="loadingbuscar1"></div>
        	</p>
        </div>

        <div id="contenidorequestcliente" >
        	<div class="reveal" id="modalbuscacliente" data-reveal>
        		<h4>Clientes</h4>
			  <table id="tablabuscacliente">
			  	<thead>
			  		<tr>
			  			<td>ID</td>
			  			<td>Nombre</td>
			  			<td>CURP</td>
			  		</tr>
			  	</thead>
			  	<tbody>
			  		
			  	</tbody>
			  </table>
			  <button class="close-button" data-close aria-label="Close reveal" type="button">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>



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
                  <select name="TipoCliente" id="TipoCliente" disabled > <option value="">-Seleccione una opción-</option> <option value="Persona Fisica">Persona Fisica</option><option value="Persona Moral">Persona Moral</option> 
                  </select> 
                </div>
              </div>
              
              <div id="pm" style="display:none;">
                <div class="row">
                  <div class="medium-6 columns"><label>Razon social <input readonly name="nomrazsoc2" type="text" id="nomrazsoc2"  value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomSolicitante']; } ?>"  placeholder="Nombre, Razón Social"></label>
                  </div>
                  <div class="medium-3 columns">
                    <label>Telefono
                    <input readonly name="telsol2" type="text" id="telsol2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][0]; } ?>"   pattern="telefono" onfocus="mascaratel(this)"   ></label>
                  </div>
                  <div class="medium-3 columns"><label> RFC
                    <input readonly name="rfcsol1" type="text" id="rfcsol1" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][0];}?>"  pattern="rfc" onkeypress="mayusculas(this)"  ></label>
                  </div>
                  
                    <div class="medium-3 columns"><label>
                      Direccion
                      <input readonly name="dirsolpm" type="text" id="dirsolpm" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['DirSolicitante']; } ?>" placeholder="Dirección / Calle" >
                      </label>
                    </div>
                    <div class="medium-3 columns"><label>Numero
                      <input readonly name="dirnumsolpm" type="text" id="dirnumsolpm" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NumDirSol']; } ?>"   placeholder="Número" pattern="alpha_numeric2" maxlength="7"></label>
                    </div>
                    <div class="medium-3 columns"><label>Email
                      <input readonly name="mailsol2" type="text" id="mailsol2"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EmailSolicitante']; } ?>" placeholder="Email" pattern="email"></label>
                    </div>
                    <div class="medium-3 columns"><label>Codigo Postal
                      <input readonly name="cpsolpm" type="text" id="cpsolpm" onchange="cpostal(this.value,'edosolpm','','colsolpm','cdsolpm','loading8')"  placeholder="C.P." pattern="cpostal" maxlength="5"></label>
                    </div>

                    <div class="medium-3 columns"><label>Colonia<div id="loading8"></div>
                    <select disabled name="colsolpm"  id="colsolpm"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>
                    <div class="medium-3 columns"><label>Ciudad
                    <select disabled name="cdsolpm"  id="cdsolpm"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>
                    <div class="medium-3 columns"><label>Estad
                    <select disabled name="edosolpm"  id="edosolpm"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>
                  

                
                    <div class="medium-3 columns">  <label> Actividad Principal/ségun SHCP
                      <input readonly name="actprinc" type="text" id="actprinc" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ActPrinDatGenPM']; } ?>" placeholder="Actividad Principal/según alta o último cambio ante SHCP"></label>
                    </div>
                    <div class="medium-3 columns">  <label>Cantidad de personal
                      <input readonly name="cantperson" type="text" id="cantperson" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['CantPerDatGenPM']; } ?>" placeholder="Cantidad de personal" pattern="integer"></label>
                    </div>
                  

                  <div class="medium-3 columns"> <label>Inicio de operaciones:
                    <input readonly name="inicoper1" type="date" id="inicoper1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['IniOpDatGenPM']; } ?>"  onfocus="datepick(this)" onchange="calcularAntiguedad(this,'antemp')" ></label>
                  </div>
                  <div class="medium-3 columns"><label>Constitución de la empresa:
                    <input readonly name="inicoper13" type="date" id="inicoper13" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['FechaConsEmp']; } ?>" onfocus="datepick(this)"></label>
                  </div>
                  
                  <div class="medium-3 columns"><label>Antiguedad (años)
                    <input readonly name="antemp" type="text" id="antemp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['AntConsEmp']; } ?>" placeholder="Antigüedad" readonly ></label>
                  </div>
                  
                 <p align="left">
                    <div class="medium-7 columns"><label>Apoderado para suscribir Títulos de Crédito y realizar actos de administración
                      <input readonly name="apodsusc" type="text" id="apodsusc" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApoConsEmp']; } ?>" placeholder="Apoderado para suscribir Títulos de Crédito y realizar actos de administración" pattern="alpha"></label>
                    </div>
                     </p>
                </div>

                <div class="row">
                  <p align="left"><strong>DATOS DEL CONTACTO DE LA EMPRESA</strong></p>
                  
                    <div class="medium-3 columns"><label>Primer Nombre
                      <input readonly name="nomconemp" type="text" id="nomconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NomDatContEmp']; } ?>" placeholder="Primer Nombre" pattern="alpha"></label>
                    </div>
                    <div class="medium-3 columns"><label>Segundo Nombre
                      <input readonly name="segnomconemp" type="text" id="segnomconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['SegNomDatContEmp']; } ?>" placeholder="Segundo Nombre" pattern="alpha"></label>
                    </div>
                    <div class="medium-3 columns"><label>Apellido Paterno
                      <input readonly name="apepaconemp" type="text" id="apepaconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ApPatDatContEmp']; } ?>" placeholder="Apellido Parteno" pattern="alpha"></label>
                    </div>
                    <div class="medium-3 columns"><label>Apellido Materno
                      <input readonly name="apemaconemp" type="text" id="apemaconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ApMatDatContEmp']; } ?>" placeholder="Apellido Materno" pattern="alpha"></label>
                    </div>
                  
                  
                    <div class="medium-3 columns"><label>Calle y Numero
                      <input readonly name="datobdir22" type="text" id="datobdir22" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['DirConEmp']; } ?>" placeholder="Calle y No.:" pattern="alpha_numeric2"></label>
                    </div>
                    <div class="medium-3 columns"><label>Codigo Postal
                      <input readonly name="lugnacsol22" type="text" id="lugnacsol22" onchange="cpostal(this.value,'cdsol22','','datobcol23','colsol22','loading9')" pattern="cpostal" maxlength="5" ></label>
                    </div>
                    <div class="medium-3 columns"><label>Colonia<div id="loading9"></div>
                      <select disabled name="datobcol23"  id="datobcol23"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>
                  
                 
                    <div class="medium-3 columns"><label>Ciudad
                    <select disabled name="colsol22"  id="colsol22"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>
                    <div class="medium-3 columns"><label>Estado
                    <select disabled name="cdsol22"  id="cdsol22"><option value="">-Seleccione una opción-</option></select>
                      </label>
                    </div>
                  
                 

                    <div class="medium-3 columns"><label>RFC
                      <input readonly name="rfcconemp1" type="text" id="rfcconemp1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][0]; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                    </div>
     
                    <div class="medium-3 columns"> <label> Telefono
                      <input readonly name="telconemp1" type="text" id="telconemp1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelDatConEmp'][0]; } ?>"  pattern="telefono" onfocus="mascaratel(this)" ></label>
                    </div>
                  </p>
                 
                    <div class="medium-3 columns">  <label> Email
                      <input readonly name="mailconemp" type="text" id="mailconemp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['EmailDatConEmp']; } ?>" placeholder="Email" pattern="email"></label>
                    </div>
                    <p align="left">
                    <div class="medium-3 columns">  <label>Puesto que desempeña en la empresa
                      <input readonly name="puesconemp" type="text" id="puesconemp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PuestDatConEmp']; } ?>" placeholder="Puesto que desempeña en la empresa" pattern="alpha_numeric2"></label>
                    </div>
                  </p>
                </div>
                
              </div>
              

              <div id="pfa" style="display:none;" >
                <div class="row" >
                  <div class="medium-3 columns">
                    <label>Primer nombre<input name="nomsol" type="text" id="nomsol" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomSolicitante']; } ?>"  placeholder="Primer Nombre"  readonly pattern="alpha"> </label>
                  </div>
                  <div class="medium-3 columns">
                    <label> Segundo Nombre <input readonly name="segnomsol" type="text" id="segnomsol"   value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['SegNomSolicitante']; } ?>" placeholder="Segundo Nombre"  pattern="alpha"></label>
                  </div>
                  <div class="medium-3 columns">
                      <label> Apellido Paterno<input readonly name="apepasol" type="text" id="apepasol"  value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApPatSolicitante']; } ?>"  placeholder="Apellido Parteno"   pattern="alpha">  </label>
                  </div> 
                  <div class="medium-3 columns">
                    <label>Apellido Materno<input readonly name="apemasol" type="text" id="apemasol" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApMatSolicitante']; } ?>" placeholder="Apellido Materno"   pattern="alpha"></label>
                  </div>

      
               
                  <div class="medium-3 columns">
                    <label> RFC
                    <input readonly name="rfc1" type="text" id="rfc1" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][0];}?>"   pattern="rfc" onkeypress="mayusculas(this)" > </label>
                  </div>
      
        
                  <div class="medium-3 columns">
          
                    <label> Telefono Particular
                    <input readonly name="telsol1" type="text" id="telsol1"  value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][0]; } ?>"    pattern="telefono" onfocus="mascaratel(this)" ></label>
                  </div>

                  <div class="medium-3 columns">
                    <label> Telefono Movil
                    <input readonly name="movsol1" type="text" id="movsol1" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][0]; } ?>"   pattern="telefono" onfocus="mascaratel(this)"  >
                    </label>
                  </div>   
                  <div class="medium-3 columns">
                    <label> Email
                    <input readonly name="mailsol" type="text" id="mailsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EmailSolicitante']; } ?>" placeholder="Email" pattern="email"></label>
                  </div>
                
    
              
                  <div class="medium-5 columns"><label> Direccion / Calle
                    <input readonly name="dirsol" type="text" id="dirsol" size="74px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['DirSolicitante']; } ?>" placeholder="Dirección / Calle"  ></label>
                  </div>
              
                  <div class="medium-2 columns"><label> Direccion / Numero

                       <!--
                           <div class="input-group">
                         <span class="input-group-label">#</span> -->
                                         <input readonly class="input-group-field" name="dirnumsol" type="text" id="dirnumsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NumDirSol']; } ?>" placeholder="Número"  pattern="alpha_numeric2" maxlength="7">                                              
                       <!-- </div> -->
                   </label>
                  </div>
             
             
                  <div class="medium-2 columns"><label>Codigo Postal<input readonly name="cpsol" type="text" id="cpsol" size="20px" placeholder="C.P."  pattern="cpostal" maxlength="5"></label>
                  </div>
                  <div class="medium-3 columns"><label>Colonia<div id="loading1"></div><select disabled name="colsol" id="colsol"><option value="">-Seleccione una opción-</option></select></label>
                  </div>

                  <div class="medium-3 columns"><label>Lugar de nacimiento
                  <input readonly name="lugnacsol" type="text" id="lugnacsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['LugNacSolicitante']; } ?>" placeholder="Lugar de nacimiento (País y Estado)" pattern="alpha"></label>
                  </div>
              
                  <div class="medium-3 columns"><label>Estado <select disabled name="edosol" id="edosol"><option value="">-Seleccione una opción</option></select></label>
                  </div>
             
                  <div class="medium-3 columns"><label>Ciudad<select disabled name="cdsol"  id="cdsol"><option value="">-Seleccione una opcion-</option></select></label>
                  </div>
                  <div class="medium-3 columns"><label>Delegacion o municipio <select disabled name="textfield5"  id="textfield5" ><option value="">-Seleccione una opción-</option></select></label>
                  </div>

                  <div class="medium-3 columns"><label>CURP <input readonly name="curpsol" type="text" id="curpsol" size="49px" placeholder="CURP" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CURPSolicitante']; } ?>"  pattern="curp" onkeypress="mayusculas(this)" ></label>
                  </div>
       
    
           
                    <div class="medium-3 columns">
                      <label>Sexo
                      <select disabled name="sexsol" id="sexsol" ><option value="">-Seleccione una opción-</option><option value="Femenino">Mujer</option><option value="Masculino">Hombre</option></select>
                      </label>
                    </div>
           
                    <div class="medium-3 columns">
                      <label>Fecha de nacimiento
                      <input readonly name="fechnacsol" type="date" id="fechnacsol" onchange="calcularEdad(this,'edsol')" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['FeNacDatGen']; } ?>" onfocus="datepick(this)" ></label>
                    </div>

                    <div class="medium-3 columns"> <label> Edad



                           <div class="input-group">
                                                      <input readonly class="input-group-field" name="edsol" type="number" id="edsol" size="2px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['EdDatGen']; } ?>" placeholder="Edad" readonly   pattern="integer">
                                                    
                            <span class="input-group-label">Años</span>
                                                    
                            </div>



                      </label>
                    </div>
              
                    <div class="medium-3 columns"> <label>Nacionalidad
                      <input readonly name="nacsol" type="text" id="nacsol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NaDatGen']; } ?>" placeholder="Nacionalidad"  pattern="alpha"></label>
                    </div>

                    <div class="medium-3 columns"><label>Num. Dependientes
                      <input readonly name="depensol" type="text" id="depensol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NoDepDatGen']; } ?>" placeholder="Num. Dependientes"  pattern="integer" maxlength="2" ></label>
                    </div>

                    <div class="medium-3 columns"><label>Acredita Domicilio con:
                      <input readonly name="acdomsol" type="text" id="acdomsol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AcDomDatGen']; } ?>" placeholder="Acredita Domicilio con"></label>
                    </div>
                

           
                
                  <div class="medium-3 columns"><label> Años de residir en la ciudad
                    <input readonly name="anosol" type="text" id="anosol" size="13" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AnResDatGen']; } ?>" placeholder="Años de residir en la ciudad"  pattern="integer" maxlength="2"></label>
                  </div>
              
                  <div class="medium-3 columns"><label> Arraigo en el domicilio (Fecha)
                    <input readonly name="arraisol" type="date" id="arraisol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ArDomDatGen']; } ?>" placeholder="Arraigo en el domicilio desde el año" onfocus="datepick(this)" onchange="calcularAnios(this,'arraisolanios')">




                    </label>
                  </div>

                  <div class="medium-3 columns"><label> Arraigo en el domicilio



                           <div class="input-group">
                    <input readonly class="input-group-field" name="arraisolanios" type="text" id="arraisolanios"   readonly pattern="integer">
                                                    
                      <span class="input-group-label">Años </span>
                                                    
                            </div>

                    </label>
                  </div>
                 
                <div class="medium-3 columns">
                  <label>Vive en:
                <select disabled name="vivsol" id="vivsol"><option value="">-Seleccione una opcion-</option><option value="Casa Propia">Casa Propia</option><option value="Rentada">Rentada</option><option value="Hipotecada">Hipotecada</option><option value="Casa propiedad de sus familiares">Casa propiedad de sus familiares</option><option value="Otros especificar">Otros especificar</option></select></label>
                </div>
              <div class="medium-3 columns" id="divvivsolesp" style="display: none;">  <label>Especifique:
               <input readonly type="text" name="vivsolesp" id="vivsolesp" ></label></div>
                </div>
           
                <div class="row">
                  <p align="left">
                    <div class="medium-3 columns">
                      <label>Estado civil:
                      <select disabled name="civilsol" id="civilsol"><option value="">-Seleccione una opción-</option><option value="Casado Bienes Mancomunados">Casado Bienes Mancomunados</option><option value="Casado Bienes Separados">Casado Bienes Separados</option><option value="Viudo">Viudo</option><option value="Divorciado">Divorciado</option><option value="Soltero">Soltero</option></select></label>
            
                    </div>
        
                    <div class="medium-3 columns">

                      <label>Tiene Auto Propio:
                    <select disabled name="autosol" id="autosol"><option value="">-Seleccione una opción</option><option value="Si">Si</option><option value="No">No</option></select>

                       </label>

                    </div>
                    <div class="medium-3 columns" id="especifiquemarca" style="display: none;">
                        <label>Especifique Marca:
                        <input readonly type="text" name="marcasol" id="marcasol" >
                        </label>
                    </div>
                    <div class="medium-3 columns">
                    <label>
                      Es propietario de algún inmueble:
                  <select disabled name="inmusol" id="inmusol"><option value="">-Seleccione una opción-</option><option value="Si">Si</option><option value="No">No</option></select>
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
                <select disabled name="actempresarial" id="actempresarial"><option value="">-Seleccione una opcion-</option><option value="Si">Si</option><option value="No">No</option></select>
                </label>
                </div>
                <p align="left">
                  <div class="medium-3 columns"><label> Puesto
                    <input readonly name="puestosol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['PuestDatEmp']; } ?>" type="text" id="puestosol" size="40px" placeholder="Puesto" pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Departamento o area
                    <input readonly name="depasol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['DepDatEmp']; } ?>" type="text" id="depasol" size="30px" placeholder="Departamento o área" pattern="alpha"></label>
                  </div>

             
             
                  <div class="medium-3 columns"><label>Compañia
                    <input readonly name="compasol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['CompDatEmp']; } ?>" type="text" id="compasol" size="70px" placeholder="Compañía"></label>
                  </div>
                  <div class="medium-3 columns" ><label>Telefono
                    <input readonly name="compatelsol1" type="text" id="compatelsol1"  value="<?php if(isset($row2['Folio_Cliente'])&& $row2['TelDatEmp']!= '') {  echo $row2['TelDatEmp'][0]; } ?>" size="1px"  pattern="telefono" onfocus="mascaratel(this)"   ></label>
                  </div>
                  <div class="medium-2 columns" ><label>Extension
                    <input readonly name="compatelsolext" type="text" id="compatelsolext" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ExtDatEmp']; } ?>" size="20px" placeholder="Extensión" pattern="integer" maxlength="7"></label>
                  </div>
                </p>

                <p align="left">
       
                  <div class="medium-3 columns" id="divgiroprof" style="display: none;"><label>Ocupacion / Giro
                    <input readonly name="giroprof" type="text" id="giroprof" size="40px"  value="<?php if (isset($row2['Folio_Cliente'])) {  echo $row2['Ocupacion_Profesion']; } ?>" placeholder="Ocupación/Giro según alta o último cambio ante SHCP" ></label>
                  </div>
           
        
                  <div class="medium-3 columns"> <label> Antigüedad desde:<input readonly name="desdesol" type="date" id="desdesol" size="1px" value="<?php if (isset($row2['Folio_Cliente'])) {  echo $row2['DesAnDatEmp']; } ?>"   onfocus="datepick(this)" onchange="calcularAntiguedad(this,'desdesolanios')" ></label>
                  </div>

                  <div class="medium-3 columns"> <label> Antigüedad años:<input readonly name="desdesolanios" type="text" id="desdesolanios" size="1px"   readonly=""  ></label>
                  </div>
            
                </p>
                <p align="left">
        
         
                  <div class="medium-3 columns" id="divnoempleados" style="display: none;"><label>Numero de empleados
                    <input readonly name="noempleados" type="text" id="noempleados"  value="<?php if (isset($row2['Folio_Cliente'])) {  echo $row2['NoEmDatEmp']; } ?>" placeholder="Núm. de empleados"pattern="integer"></label>
                  </div>
         
                  
                     <div class="medium-3 columns" id="divdomneg">
                  <label>Direccion (Calle)</label>  <input readonly type="text" name="domneg" id="domneg" >
                  </div>    
                  <div class="medium-3 columns" id="divnumdomneg">
                  <label>Direccion (Numero)</label><input readonly type="text" name="numdomneg" id="numdomneg" pattern="alpha_numeric2" maxlength="7">
                  </div>         
                  <div class="medium-3 columns" id="divcpneg">
                  <label>CP</label><input readonly type="text" name="cpneg" id="cpneg" onchange="cpostal(this.value,'estneg','munneg','colneg','cdneg','loading2')" pattern="integer" maxlength="5">
                  </div>
                  <div class="medium-3 columns" id="divcolneg">
                  <label>Colonia<div id="loading2"></div><select disabled name="colneg" id="colneg"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns" id="divestneg">
                  <label>Estado<select disabled name="estneg" id="estneg"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns" id="divmunneg">
                  <label>Municipio<select disabled name="munneg" id="munneg"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns" id="divcdneg">
                  <label>Ciudad<select disabled name="cdneg" id="cdneg"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                </p>


              </div>
            </div>

            <div class="tabs-panel" id="panel3c">
              <div class="row">
                <p align="left">

                  <div class="medium-3 columns"><label>Nombre(s)
                    <input readonly name="nomref1" type="text" id="nomref1"  size="54px" placeholder="Nombre" pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Apellido Paterno
                    <input readonly name="nomref1b" type="text" id="nomref1b"  size="54px" placeholder="Nombre" pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Apellido Materno
                    <input readonly name="nomref1c" type="text" id="nomref1c"  size="54px" placeholder="Nombre" pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Parentesco o relacion
                    <input readonly name="parenref1" type="text" id="parenref1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ParenRefPer']; } ?>" size="40px" placeholder="Parentesco o relación" pattern ="alpha"></label>
                  </div>
            
                  <div class="medium-3 columns"><label>Telefono
                    <input readonly name="telref11" type="text" id="telref11" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][0]; } ?>"      pattern="telefono" onfocus="mascaratel(this)" ></label>
                  </div>

                  <div class="medium-3 columns">
                  <label>Direccion (Calle)</label>  <input readonly type="text" name="refperdir" id="refperdir">
                  </div>    
                  <div class="medium-3 columns">
                  <label>Direccion (Numero)</label><input readonly type="text" name="refpernumdir" id="refpernumdir" pattern="alpha_numeric2" maxlength="7">
                  </div>         
                  <div class="medium-3 columns">
                  <label>CP </label><input readonly type="text" name="refpercp" id="refpercp" onchange="cpostal(this.value,'refperest','refpermun','refpercol','refpercd','loading3')" pattern="integer" maxlength="5">
                  </div>
                  <div class="medium-3 columns">
                  <label>Colonia<div id="loading3"></div><select disabled name="refpercol" id="refpercol"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Estado<select disabled name="refperest" id="refperest"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Municipio<select disabled name="refpermun" id="refpermun"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Ciudad<select disabled name="refpercd" id="refpercd"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                </p>
              </div>
              <hr>
              <div class="row">
                <p align="left">

                  <div class="medium-3 columns"><label>Nombre(s)
                    <input readonly name="nomref2" type="text" id="nomref2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomRefPer']; } ?>" size="54px" placeholder="Nombre" pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Apellido Paterno
                    <input readonly name="nomref2b" type="text" id="nomref2b" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomRefPer']; } ?>" size="54px" placeholder="Nombre" pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Apellido Materno
                    <input readonly name="nomref2c" type="text" id="nomref2c" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomRefPer']; } ?>" size="54px" placeholder="Nombre" pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Parentesco o relacion
                    <input readonly name="parenref2" type="text" id="parenref2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ParenRefPer']; } ?>" size="40px" placeholder="Parentesco o relación" pattern ="alpha"></label>
                  </div>
            
                  <div class="medium-3 columns"><label>Telefono
                    <input readonly name="telref12" type="text" id="telref12" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][0]; } ?>"    pattern="telefono" onfocus="mascaratel(this)" ></label>
                  </div>


                  <div class="medium-3 columns">
                  <label>Direccion (Calle)</label>  <input readonly type="text" name="refperdir2" id="refperdir2">
                  </div>    
                  <div class="medium-3 columns">
                  <label>Direccion (Numero)</label><input readonly type="text" name="refpernumdir2" id="refpernumdir2" pattern="alpha_numeric2" maxlength="7">
                  </div>         
                  <div class="medium-3 columns">
                  <label>CP</label><input readonly type="text" name="refpercp2" id="refpercp2" onchange="cpostal(this.value,'refperest2','refpermun2','refpercol2','refpercd2','loading4')" pattern="integer" maxlength="5">
                  </div>
                  <div class="medium-3 columns">
                  <label>Colonia<div id="loading4"></div><select disabled name="refpercol2" id="refpercol2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Estado<select disabled name="refperest2" id="refperest2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Municipio<select disabled name="refpermun2" id="refpermun2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Ciudad<select disabled name="refpercd2" id="refpercd2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>

                </p>

              </div>
            </div>
    
            <div class="tabs-panel" id="panel4c">

              <div id="secRefBancarias1" class="row">
       
       
                <p align="left">
                  <div class="medium-3 columns"><label>Banco
                    <input readonly name="refbanc" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancRefBan']; } ?>" type="text" id="refbanc" size="54px" placeholder="Banco"></label>
                  </div>
          
                  <div class="medium-3 columns"><label>Numero de cuenta
                    <input readonly name="numcuebanc" onkeyup="mascarasimple(this,'-',patron,false)"  type="text" id="numcuebanc" size="40px" placeholder="Número de cuenta" pattern="cuenta" maxlength="29     ">

                    </label>
                  </div>

                  <div class="medium-3 columns"><label>Sucursal
                    <input readonly name="sucbanc1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['SucRefBan']; } ?>" type="text" id="sucbanc1" size="54px" placeholder="Sucursal" pattern="integer" maxlength="8"></label>
                  </div>
                </p>
      
                <p align="left">
         
                  <div class="medium-3 columns"><label>  Fecha de apertura: <input readonly name="aperbanc1d" type="date" id="aperbanc1d" size="1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FecApRefBan']; } ?>" onfocus="datepick(this)"></label>
                  </div>
                </p>
              </div>
              <div id="secRefBancarias1" class="row">
       
       
                <p align="left">
                  <div class="medium-3 columns"><label>Banco
                    <input readonly name="refbanc2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancRefBan']; } ?>" type="text" id="refbanc2" size="54px" placeholder="Banco"></label>
                  </div>
          
                  <div class="medium-3 columns"><label>Numero de cuenta
                    <input readonly name="numcuebanc2" onkeyup="mascarasimple(this,'-',patron,false)" type="text" id="numcuebanc2" size="40px" placeholder="Número de cuenta" maxlength="29" pattern="cuenta"></label>
                  </div>

                  <div class="medium-3 columns"><label>Sucursal
                    <input readonly name="sucbanc2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['SucRefBan']; } ?>" type="text" id="sucbanc2" size="54px" placeholder="Sucursal" pattern="integer" maxlength="8"></label>
                  </div>
                </p>
      
                <p align="left">
         
                  <div class="medium-3 columns"><label>  Fecha de apertura: <input readonly name="aperbanc2d" type="date" id="aperbanc2d" size="1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FecApRefBan']; } ?>" onfocus="datepick(this)"></label>
                  </div>
                </p>
              </div>

              <div id="secCarDirecto" class="row">
                <p align="left"><strong>CARGO DIRECTO (para contratos en M.N.) </strong>
                </p>
                <p align="left">
                  <div class="medium-3 columns"><label>Banco
                    <input readonly name="cargdir" type="text" id="cargdir" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancCarDir']; } ?>" size="54px" placeholder="Banco"></label>
                  </div>

                  <div class="medium-3 columns"><label>CLABE
                    <input readonly name="nocuentcd" type="text" id="nocuentcd" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NoTarCarDir']; } ?>" size="40px" placeholder="Número de Cuenta (CLABE)" maxlength="18" pattern="clabe"></label>
                  </div>
                </p>
              </div>
            </div>


            <div class="tabs-panel" id="panel5c">
              <div id="secRefComerciales1" class="row">
       
                <p align="left">
                  <div class="medium-3 columns"><label>Empresa
                    <input readonly name="refcomemp1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmpRefCom']; } ?>" type="text" id="refcomemp1"  placeholder="Empresa"></label>
                  </div>
       
                </p>
                <div class="medium-3 columns"><label>Telefono
                  <input readonly name="telrefcom11" type="text" id="telrefcom11" size="1px"  value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom'] != '' ) {  echo $row['TelRefCom'][0]; } ?>"  pattern="telefono" onfocus="mascaratel(this)" ></label>
                </div>

                <p align="left">
                  <div class="medium-3 columns"><label>Antiguedad desde el año
                    <input readonly name="antirefcom1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['AntRefCom']; } ?>" type="text" id="antirefcom1" placeholder="Antigüedad Desde el Año" pattern="anio" maxlength="4"></label>
                  </div>
   <div class="medium-3 columns">
                  <label>Direccion (Calle)</label>  <input readonly type="text" name="refcomdir" id="refcomdir" >
                  </div>    
                  <div class="medium-3 columns">
                  <label>Direccion (Numero)</label><input readonly type="text" name="refcomnumdir" id="refcomnumdir" pattern="alpha_numeric2" maxlength="7">
                  </div>         
                  <div class="medium-3 columns">
                  <label>CP</label><input readonly type="text" name="refcomcp" id="refcomcp" onchange="cpostal(this.value,'refcomest','refcommun','refcomcol','refcomcd','loading5')" pattern="integer" maxlength="5">
                  </div>
                  <div class="medium-3 columns">
                  <label>Colonia<div id="loading5"></div><select disabled name="refcomcol" id="refcomcol"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Estado<select disabled name="refcomest" id="refcomest"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Municipio<select disabled name="refcommun" id="refcommun"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Ciudad<select disabled name="refcomcd" id="refcomcd"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                </p>
     

              </div>

              <div id="secRefComerciales2" class="row">
                <p align="left">
                  <div class="medium-3 columns"><label>Empresa
                    <input readonly name="refcomemp2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmpRefCom']; } ?>" type="text" id="refcomemp2"  placeholder="Empresa"></label>
                  </div>
       
                  <div class="medium-3 columns"><label>Telefono
                    <input readonly name="telrefcom22" type="text" id="telrefcom22" size="1px"  value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom2']) {  echo $row['TelRefCom2'][0]; } ?>"  pattern="telefono" onfocus="mascaratel(this)" ></label>
                  </div>
                </p>
                <p align="left">
                  <div class="medium-3 columns"><label>Antiguedad desde el año
                    <input readonly name="antirefcom2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['AntRefCom2']; } ?>" type="text" id="antirefcom2" placeholder="Antigüedad Desde el Año" pattern="anio" maxlength="4"></label>
                  </div>


                     <div class="medium-3 columns">
                  <label>Direccion</label>  <input readonly type="text" name="refcomdir2" id="refcomdir2"  >
                  </div>    
                  <div class="medium-3 columns">
                  <label>Numero</label><input readonly type="text" name="refcomnumdir2" id="refcomnumdir2" pattern="alpha_numeric2" maxlength="7">
                  </div>         
                  <div class="medium-3 columns">
                  <label>CP</label><input readonly type="text" name="refcomcp2" id="refcomcp2" onchange="cpostal(this.value,'refcomest2','refcommun2','refcomcol2','refcomcd2','loading6')" pattern="integer" maxlength="5">
                  </div>
                  <div class="medium-3 columns">
                  <label>Colonia<div id="loading6"></div><select disabled name="refcomcol2" id="refcomcol2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Estado<select disabled name="refcomest2" id="refcomest2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Municipio<select disabled name="refcommun2" id="refcommun2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                  <div class="medium-3 columns">
                  <label>Ciudad<select disabled name="refcomcd2" id="refcomcd2"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
                </p>
              </div>

            </div>

            <div class="tabs-panel" id="panel6c">
              <div class="row">
                <p align="left">
                  <div class="medium-3 columns"><label>Nombre(s) del conyuge
                    <input readonly name="conyunom" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomDatCon']; } ?>" type="text" id="conyunom" size="40px" placeholder="Nombre(s) del conyuge" pattern="alpha"></label>
                  </div>
                  <div class="medium-3 columns">   <label> Apellido Paterno
                    <input readonly name="conyuape1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApPatDatCon']; } ?>" type="text" pattern="alpha" id="conyuape1" size="20px" placeholder="Apellido Paterno" pattern="alpha"></label>
                  </div>
                    
                  <div class="medium-3 columns">   <label> Apellido Materno         
                    <input readonly name="conyuape2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApMatDatCon']; } ?>" type="text" id="conyuape2" size="20px" placeholder="Apellido Materno" pattern="alpha"></label>
                  </div>
              
                  <div class="medium-3 columns"><label>Compañia
                    <input readonly name="compaconyu" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CompDatCon']; } ?>" type="text" id="compaconyu" size="30px" placeholder="Compañia"></label>
                  </div>
             
                  <div class="medium-3 columns"><label>Puesto
                    <input readonly name="puestconyu" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['PuestDatCon']; } ?>" type="text" id="puestconyu" size="20px" placeholder="Puesto" pattern="alpha"></label>
                  </div>
                </p>
              </div>
            </div>
   
            <div class="tabs-panel" id="panel7c">

              <p align="left">De acuerdo al articulo 20 de la Ley para Regular Sociedades de Información Crediticia, en caso de que la información proporcionada por el Cliente sea relativa a una persona moral, deberá incluir a los accionistas o titulares de las partes sociales, según corresponda, que sean propietarios del 10% o más del capital social. * 
              </p>
       
              <div class="row">
                <p align="left">
                  <div class="medium-2 columns"><label>Nombre(s)
                    <input readonly name="accionista1" type="text" id="accionista1"  ></label>
                  </div>
                  <div class="medium-2 columns"><label>Apellido Paterno
                    <input readonly name="accionista1b" type="text" id="accionista1b"  ></label>
                  </div>
                  <div class="medium-2 columns"><label>Nombre Materno
                    <input readonly name="accionista1c" type="text" id="accionista1c"  ></label>
                  </div>
                  <div class="medium-3 columns"><label>RFC
                    <input readonly name="rfcaccion1" type="text" id="rfcaccion1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                  </div>

                  <div class="medium-2 columns">
                    <label>Porcentaje de las acciones
                    <div class="input-group">
                                              <input readonly class="input-group-field" pattern="porcentaje" maxlength="3" name="porcent1" type="text" id="porcent1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>">
    <span class="input-group-label">%</span>
  </div>
                    </label>

                  </div>
                </p>
                <p align="left">
                  <div class="medium-2 columns">
                  <label>Nombre(s)
                    <input readonly name="accionista2" type="text" id="accionista2"  ></label>
                  </div>
                  <div class="medium-2 columns">
                  <label>Apellido Paterno
                    <input readonly name="accionista2b" type="text" id="accionista2b"  ></label>
                  </div>
                  <div class="medium-2 columns">
                  <label>Apellido Materno
                    <input readonly name="accionista2c" type="text" id="accionista2c"  ></label>
                  </div>
                  <div class="medium-3 columns"><label>RFC
                    <input readonly name="rfcaccion2" type="text" id="rfcaccion2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                  </div>
                  <div class="medium-2 columns"><label>Porcentaje de las acciones


                                     <div class="input-group">
                   <input readonly class="input-group-field" pattern="porcentaje" maxlength="3" name="porcent2" type="text" id="porcent2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" >
   <span class="input-group-label">%</span>
                   </label>
 </div>  
                  


                  </div>
                </p>
                <p align="left">
                  <div class="medium-2 columns"><label>Nombre(s)
                    <input readonly name="accionista3" type="text" id="accionista3"></label>
                  </div>
                  <div class="medium-2 columns"><label>Apellido Paterno
                    <input readonly name="accionista3b" type="text" id="accionista3b"></label>
                  </div>
                  <div class="medium-2 columns"><label>Apellido Materno
                    <input readonly name="accionista3c" type="text" id="accionista3c"></label>
                  </div>
                  <div class="medium-3 columns"><label>RFC
                    <input readonly name="rfcaccion3" type="text" id="rfcaccion3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                  </div>
                  <div class="medium-2 columns"><label>Porcentaje de las acciones



                                     <div class="input-group">
                   <input readonly class="input-group-field" pattern="porcentaje" maxlength="3"name="porcent3" type="text" id="porcent3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" >
   <span class="input-group-label">%</span>
                   </label>
 </div>


                  </div>
                </p>
                <p align="left">
                  <div class="medium-2 columns"><label>Nombre(s)
                    <input readonly name="accionista4" type="text" id="accionista4" ></label>
                  </div>
                  <div class="medium-2 columns"><label>Apellido Paterno
                    <input readonly name="accionista4b" type="text" id="accionista4b" ></label>
                  </div>
                  <div class="medium-2 columns"><label>Apellido Materno
                    <input readonly name="accionista4c" type="text" id="accionista4c" ></label>
                  </div>
                  <div class="medium-3 columns"><label>RFC
                    <input readonly name="rfcaccion4" type="text" id="rfcaccion4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                  </div>
                  <div class="medium-2 columns"><label>Porcentaje de las acciones

                           <div class="input-group">
                                                                    <input readonly class="input-group-field" pattern="porcentaje" maxlength="3" name="porcent4" type="text" id="porcent4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" >
   <span class="input-group-label">%</span>
                                                                 </label>
 </div>



                  </div>
                </p>
              </div>
        
              <div class="row">
                <p align="left">* En el caso de que alguno(s) de los accionistas del cliente (persona moral) sea(n) otra(s) persona(s) moral(es), se deberan identificar a los accionistas de ésta(s) última(s) que sean propietarios del 25% o más del capital social:
                </p>
     
                <div class="medium-2 columns"><label>Nombre(s)
                  <input readonly name="accpermor1" type="text" id="accpermor1" ></label>
                </div>
                <div class="medium-2 columns"><label>Apellido Parterno
                  <input readonly name="accpermor1b" type="text" id="accpermor1b" ></label>
                </div>
                <div class="medium-2 columns"><label>Apellido Materno
                  <input readonly name="accpermor1c" type="text" id="accpermor1c" ></label>
                </div>
                <div class="medium-3 columns"><label>RFC
                  <input readonly name="rfcaccpermor1" type="text" id="rfcaccpermor1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAccPM1']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                </div>

                <div class="medium-2 columns"><label>Porcentaje de las acciones
               
                                  <div class="input-group">
                   <input readonly class="input-group-field" pattern="porcentaje" maxlength="3"  name="permoracc1" type="text" id="permoracc1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAccPM1']; } ?>" >
   <span class="input-group-label">%</span>
                   </label>
 </div>


                </div>

<p align="left">
                <div class="medium-2 columns"> <label>Nombre(s)
                  <input readonly name="accpermor2" type="text" id="accpermor2" ></label>
                </div>
                <div class="medium-2 columns"> <label>Apellido Paterno
                  <input readonly name="accpermor2b" type="text" id="accpermor2b" ></label>
                </div>
                <div class="medium-2 columns"> <label>Apellido Materno
                  <input readonly name="accpermor2c" type="text" id="accpermor2c" ></label>
                </div>

                <div class="medium-3 columns"><label>RFC
                  <input readonly name="rfcaccpermor2" type="text" id="rfcaccpermor2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAccPM2']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                </div>

                <div class="medium-2 columns">
                      <label>Porcentaje de las acciones

                        <div class="input-group">
                          <input readonly class="input-group-field" pattern="porcentaje" maxlength="3" name="permoracc2" type="text" id="permoracc2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAccPM2']; } ?>" >
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
                    <input readonly name="benesol1" type="text" id="benesol1" size="20px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ApPatBenDatGen']; } ?>" placeholder="Apellido Paterno"  pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Apellido Materno
                    <input readonly name="benesol2" type="text" id="benesol2" size="20px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ApMatBenDatGen']; } ?>" placeholder="Apellido Materno"  pattern="alpha"></label>
                  </div>

                  <div class="medium-3 columns"><label>Nombre(s)
                    <input readonly name="benesol3" type="text" id="benesol3" size="30px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NomBenDatGen']; } ?>" placeholder="Nombre(s)"  pattern="alpha"></label>
                  </div>
           

       
                
         
                  <div class="medium-3 columns"><label>
                    Domicilio (calle y número) 
                    <input readonly name="textfield48" type="text" id="textfield48" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['DomBeneficiario']; } ?>" ></label>
                  </div>
            
            
             
                  <div class="medium-3 columns"><label>Código Postal 
                    <input readonly name="textfield50" type="text" id="textfield50" size="50%"  onchange="cpostal(this.value,'textfield59','textfield58','textfield49','','loading7')" pattern="cpostal" maxlength="5"></label>
                  </div>
            
                  <div class="medium-3 columns"><label>Colonia<div id="loading7"></div>
                    <select disabled name="textfield49" id="textfield49"><option value="">-Seleccione una opción-</option></select></label>
                  </div>

                  <div class="medium-3 columns"><label>País
                    <input readonly name="textfield51" type="text" id="textfield51" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['PaisBeneficiario']; } ?>" pattern="alpha"></label>
                  </div>
          
                  <div class="medium-3 columns"><label>   Teléfono
                    <input readonly name="textfield52" type="text" id="textfield52" size="50%"  value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['TelBeneficiario']; } ?>" pattern="telefono" onfocus="mascaratel(this)" ></label>
                  </div>
              
             
                  <div class="medium-3 columns"><label> CURP
                    <input readonly name="textfield53" type="text" id="textfield53" size="50%"  value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['CURPBeneficiario']; } ?>" pattern="curp" onkeypress="mayusculas(this)"></label>
                  </div>
            

                  <div class="medium-3 columns"><label> RFC
                    <input readonly name="textfield54" type="text" id="textfield54" size="50%"  value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['RFCBeneficiario']; } ?>"  pattern="rfc" onkeypress="mayusculas(this)"></label>
                  </div>
              

                  <div class="medium-3 columns"><label> Parentesco
                    <input readonly name="textfield55" type="text" id="textfield55" size="50%"  value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['ParentescoBeneficiario']; } ?>" pattern="alpha"></label>
                  </div>

              
                  <div class="medium-3 columns"><label> Porcentaje
                    <input readonly name="textfield56" type="text" id="textfield56" size="50%"   value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['PorcientoBeneficiario']; } ?>" pattern="porcentaje" maxlength="3"></label>
                  </div>
              



                  <div class="medium-3 columns"> <label>Fecha de Nacimiento 
                    <input readonly name="textfield57" type="date" id="textfield57" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['FeNacBeneficiario']; } ?>" onfocus="datepick(this)"></label>
                  </div>
              
                  <div class="medium-3 columns"><label> Estado
                    <select disabled name="textfield59" id="textfield59"><option value="">-Seleccione una opción-</option></select></label>
                  </div>

                  <div class="medium-3 columns"><label> Municipio
                    <select disabled name="textfield58" id="textfield58"><option value="">-Seleccione una opción-</option></select></label>
                  </div>
              

              


                  <div class="medium-3 columns"><label>  Estado Civil 
                    <select disabled name="textfield60" id="textfield60"><option value="">-Seleccione una opción-</option><option value="Casado">Casado</option><option value="Viudo">Viudo</option><option value="Divorciado">Divorciado</option><option value="Soltero">Soltero</option></select></label>
                  </div>
          
              
                  <div class="medium-3 columns" id="divtextfield61" style="display: none;"><label>Sociedad Conyugal 
                    <select disabled name="textfield61" id="textfield61" ><option value="">-Seleccione una opción-</option><option value="Bienes Mancomunados">Bienes Mancomunados</option><option value="Bienes Separados">Bienes Separados</option></select></label>
                  </div>
             
                  <div class="medium-3 columns"><label> Ocupación o Profesión 
                    <input readonly name="textfield62" type="text" id="textfield62" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['OcuProfBeneficiario']; } ?>" pattern="alpha"></label>
                  </div>
                </p>
              </div> 
            </div>

            <div class="tabs-panel" id="panel8c">
            </div>
            <div class="row">
              
            
              <div class="medium-12 columns">
                <div id="statuscliente" class="callout" >Status:</div>
                
              </div>
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
              <div class="row">
                
                <div class="medium-12 columns">
                  <div id="statussolicitud" class="callout" >Status:</div>
                  
                </div>

              </div>
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
                  <li class="tabs-title"><a href="#panel4g" aria-selected="true">Busqueda QeQ</a></li>
                </ul>
              
                
                <div class="tabs-content" data-tabs-content="example-tabs">
                  <div class="tabs-panel" id="panel4g">
                    <div class="row" id="rowdebusquedaqeq" style="display: none;">
                      <p align="left">
                        <div class="medium-3 columns">
                          <label>Buscar PPE y listas negras
                          <input class="button" type="button" name="generappe" id="generappe" value="Buscar">
                          </label>
                        </div>
                        
                      </p>
                    </div>
                    <div class="row">
                      <p align="left">
                        
                        <div id="loadingqeq"></div>
                        
                      </p>
                    </div>
                    <div class="row">
                      <p align="left">
                        <div class="medium-12 columns" id="divclienteqeq" style="display: none;" >
                          <label  >
                            <h4 >Cliente: </h4>
                            <h6 id="clienteqeq"></h6>
                          </label>
                            <input class="button" type="button" id="botonverxmlcliente" name="botonverxmlcliente" value="Ver Datos" data-open="modalxmlcliente">
                            <div class="reveal" id="modalxmlcliente" data-reveal>
                              <div id="contenidomodalxmlcliente"></div>                              
                              <button id="cerrarmodalmodificaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                        </div>
                        <div class="medium-12 columns" id="divConyugeqeq" style="display: none;" >
                          <label  >
                            <h4 >Conyuge: </h4>
                            <h6 id="Conyugeqeq"></h6>
                          </label>
                            <input class="button" type="button" id="botonverxmlConyuge" name="botonverxmlConyuge" value="Ver Datos" data-open="modalxmlConyuge">
                            <div class="reveal" id="modalxmlConyuge" data-reveal>
                              <div id="contenidomodalxmlConyuge"></div>                              
                              <button id="cerrarmodalmodificaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                        </div>
                        <div class="medium-12 columns" id="divReferenciaPersonalqeq" style="display: none;" >
                          <label  >
                            <h4 >Referencia Personal(1): </h4>
                            <h6 id="ReferenciaPersonalqeq"></h6>
                          </label>
                            <input class="button" type="button" id="botonverxmlReferenciaPersonal" name="botonverxmlReferenciaPersonal" value="Ver Datos" data-open="modalxmlReferenciaPersonal">
                            <div class="reveal" id="modalxmlReferenciaPersonal" data-reveal>
                              <div id="contenidomodalxmlReferenciaPersonal"></div>                              
                              <button id="cerrarmodalmodificaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                        </div>
                        <div class="medium-12 columns" id="divReferenciaPersonal2qeq" style="display: none;" >
                          <label  >
                            <h4 >Referencia Personal(2): </h4>
                            <h6 id="ReferenciaPersonal2qeq"></h6>
                          </label>
                            <input class="button" type="button" id="botonverxmlReferenciaPersonal2" name="botonverxmlReferenciaPersonal2" value="Ver Datos" data-open="modalxmlReferenciaPersonal2">
                            <div class="reveal" id="modalxmlReferenciaPersonal2" data-reveal>
                              <div id="contenidomodalxmlReferenciaPersonal2"></div>                              
                              <button id="cerrarmodalmodificaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                        </div>

                        <div class="medium-12 columns" id="divcontempresaqeq" style="display: none;" >
                          <label  >
                            <h4 >Contacto de la empresa: </h4>
                            <h6 id="contempresaqeq"></h6>
                          </label>
                            <input class="button" type="button" id="botonverxmlcontempresa" name="botonverxmlcontempresa" value="Ver Datos" data-open="modalxmlcontempresa">
                            <div class="reveal" id="modalxmlcontempresa" data-reveal>
                              <div id="contenidomodalxmlcontempresa"></div>                              
                              <button id="cerrarmodalmodificaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                        </div>

                        <div class="medium-12 columns" id="divacc1qeq" style="display: none;" >
                          <label  >
                            <h4 >Accionista (1): </h4>
                            <h6 id="acc1qeq"></h6>
                          </label>
                            <input class="button" type="button" id="botonverxmlacc1" name="botonverxmlacc1" value="Ver Datos" data-open="modalxmlacc1">
                            <div class="reveal" id="modalxmlacc1" data-reveal>
                              <div id="contenidomodalxmlacc1"></div>                              
                              <button id="cerrarmodalmodificaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                        </div>

                        <div class="medium-12 columns" id="divacc2qeq" style="display: none;" >
                          <label  >
                            <h4 >Accionista (2): </h4>
                            <h6 id="acc2qeq"></h6>
                          </label>
                            <input class="button" type="button" id="botonverxmlacc2" name="botonverxmlacc2" value="Ver Datos" data-open="modalxmlacc2">
                            <div class="reveal" id="modalxmlacc2" data-reveal>
                              <div id="contenidomodalxmlacc2"></div>                              
                              <button id="cerrarmodalmodificaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                        </div>

                        <div class="medium-12 columns" id="divacc3qeq" style="display: none;" >
                          <label  >
                            <h4 >Accionista (3): </h4>
                            <h6 id="acc3qeq"></h6>
                          </label>
                            <input class="button" type="button" id="botonverxmlacc3" name="botonverxmlacc3" value="Ver Datos" data-open="modalxmlacc3">
                            <div class="reveal" id="modalxmlacc3" data-reveal>
                              <div id="contenidomodalxmlacc3"></div>                              
                              <button id="cerrarmodalmodificaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                        </div>

                         <div class="medium-12 columns" id="divacc4qeq" style="display: none;" >
                          <label  >
                            <h4 >Accionista (4): </h4>
                            <h6 id="acc4qeq"></h6>
                          </label>
                            <input class="button" type="button" id="botonverxmlacc4" name="botonverxmlacc4" value="Ver Datos" data-open="modalxmlacc4">
                            <div class="reveal" id="modalxmlacc4" data-reveal>
                              <div id="contenidomodalxmlacc4"></div>                              
                              <button id="cerrarmodalmodificaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                        </div>

                        <div class="medium-12 columns" id="divBeneficiarioqeq" style="display: none;" >
                          <label  >
                            <h4 >Beneficiario: </h4>
                            <h6 id="Beneficiarioqeq"></h6>
                          </label>
                            <input class="button" type="button" id="botonverxmlBeneficiario" name="botonverxmlBeneficiario" value="Ver Datos" data-open="modalxmlBeneficiario">
                            <div class="reveal" id="modalxmlBeneficiario" data-reveal>
                              <div id="contenidomodalxmlBeneficiario"></div>                              
                              <button id="cerrarmodalmodificaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                        </div>
                        <p>* En el caso de que alguno(s) de los accionistas del cliente (persona moral) sea(n) otra(s) persona(s) moral(es), se deberan identificar a los accionistas de ésta(s) última(s) que sean propietarios del 25% o más del capital social:</p>
                        <div class="medium-12 columns" id="divacc5qeq" style="display: none;" >
                          <label  >
                            <h4 >Accionista (1): </h4>
                            <h6 id="acc5qeq"></h6>
                          </label>
                            <input class="button" type="button" id="botonverxmlacc5" name="botonverxmlacc5" value="Ver Datos" data-open="modalxmlacc5">
                            <div class="reveal" id="modalxmlacc5" data-reveal>
                              <div id="contenidomodalxmlacc5"></div>                              
                              <button id="cerrarmodalmodificaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                        </div>

                        <div class="medium-12 columns" id="divacc6qeq" style="display: none;" >
                          <label  >
                            <h4 >Accionista (2): </h4>
                            <h6 id="acc6qeq"></h6>
                          </label>
                            <input class="button" type="button" id="botonverxmlacc6" name="botonverxmlacc6" value="Ver Datos" data-open="modalxmlacc6">
                            <div class="reveal" id="modalxmlacc6" data-reveal>
                              <div id="contenidomodalxmlacc6"></div>                              
                              <button id="cerrarmodalmodificaconocimiento" class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                        </div>




                      </p>
                      
                    </div>
                  </div>
                  <div class="tabs-panel" id="panel1g">
                  
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
                  <div class="medium-12 columns">
                    <div id="statusgradoriesgo" class="callout" >Status:</div>
                    
                  </div>
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
  <li class="tabs-title"><a href="#panel3f">Generar Documento(s)</a></li>
  <li class="tabs-title"><a href="#panel4f">Tab 4</a></li>
</ul>

                        <form enctype="multipart/form-data" action="" method="POST" id="subirdato" data-abide novalidate>
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
                          <select  id="cot" name="cot" ><option value="">-Seleccione una opcion-</option><option value="Si">Si</option><option value="No">No</option></select>
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
                        

                                <select id="seldom" name="seldom"><option value="">-Seleccione una opcion-</option><option value="Si">Si</option><option value="No">No</option></select>
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
                              <div class="row">
                                <p>
                                  
                                  <div class="medium-4 columns">
                                    <div class="input-group">
                                      <span class="input-group-label">Generar documento</span>
                                      <div class="input-group-button">
                                        <input class="button" type="button" id="botongeneradoc" name="botongeneradoc" value="Generar">
                                      </div>
                                    </div>
                                  </div>
                                  
                                </p>
                              </div>
                              </div>
                              <div class="tabs-panel" id="panel4f">
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                             </div>
                          </form>

                          </div>
                           <input type="button" class="button" id="subir" name="subir" value="Guardar"  >
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
    <script src="js/consultaclientes.js"></script>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>

     <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/vendor/app.js"></script>
    <script src="js/jquery.maskedinput.js" type="text/javascript"></script>


    
    
  



</body>
 
</html>
