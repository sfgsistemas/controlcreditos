
  <?php
	
		 
		 	$solicitudNo=strtoupper($_GET['textfield']);
		 	
  include('Conexion2.php');
  $result=mysqli_query($cnx,"select * from solicitudpfa where Folio_Sol='$solicitudNo'");
  $ob=mysqli_fetch_array($result,MYSQL_NUM);

  $tab=mysqli_query($cnx,"select * from pfa where Folio_cliente='$ob[1]'");
 	
  $tab1=mysqli_query($cnx,"select * from pfna where Folio_cliente='$ob[1]'");

  $tab2=mysqli_query($cnx,"select * from pm where Folio_cliente='$ob[1]'");
 	echo "  <ul class='tabs' data-tabs id='example-tabs'>
  <li class='tabs-title is-active'><a href='#panel1' aria-selected='true'>Datos generales</a></li>
  <li class='tabs-title'><a href='#panel2'>Referencias Personales</a></li>
  <li class='tabs-title'><a href='#panel3'>Referencias Bancarias</a></li>
  <li class='tabs-title'><a href='#panel4'>Obligado Solidario</a></li>
</ul>";
 	
if (stristr($solicitudNo, 'SA')== TRUE) {
	# code...
  if(mysqli_num_rows($result) == 0){
  echo "<h4>No Se Encontro El Registro</h4>";
  }else{
  	$con= array( 	"	Id	"	,
	"	Folio	"	,
	"	Tipo de Credito	"	,
	"	Nombre 	"	,
	"	Segundo nombre	"	,
	"	Apellido parteno	"	,
	"	Apellido materno	"	,
	"	RFC 	"	,
	"	Telefono	"	,
	"	Telefono movil	"	,
	"	Direccion	"	,
	"   NO. de domicilio",
	"	Colonia/Fraccionamiento	"	,
	"	Ciudad	"	,
	"	Lugar de nacimiento	"	,
	"	Estado	"	,
	"   Municipio ",
	"	Codigo Postal	"	,
	"	CURP	"	,
	"	Email	"	,
	"	Sexo	"	,
	"	Fecha nacimiento	"	,
	"	Edad	"	,
	"	Nacionalidad	"	,
	"	No. de dependientes	"	,
	"	Acredita domicilio	"	,
	"	Vive en	"	,
	"	Otro	"	,
	"	Propiedad inmueble	"	,
	"	Arraigo del domicilio	"	,
	"	Años de residir	"	,
	"	Nombre Beneficiario	"	,
	"	Apellido Paterno 	"	,
	"	Apellido materno	"	,
	"	Estado civil	"	,
	"	Auto propio	"	,
	"	Marca/Tipo	"	,
	"	Puesto	"	,
	"	Departamento	"	,
	"	Desde el año	"	,
	"	Compañía	"	,
	"	Telefono	"	,
	"	Extencion	",
	"  Domicilio laboral"	);

	$sol =array (	"	Folio solicitante	"	,
	"	Folio Cliente	"	,
	"	Nombre Referencia	"	,
	"	Parentesco	"	,
	"	Telefono	"	,
	"	Nombre Referencia 2	"	,
	"	Parentesco	"	,
	"	Telefono	"	,
	"	Banco	"	,
	"	No Tarjeta	"	,
	"	Bannco cargo directo	"	,
	"	No Tarjeta	"	,
	"	Nombre conyuge	"	,
	"	apellido paterno	"	,
	"	apellido materno	"	,
	"	Compañía	"	,
	"	Puesto	"	,
	"	Nombre obligado	"	,
	"	apellido paterno	"	,
	"	apellido materno	"	,
	"	RFC	"	,
	"	Telefono	"	,
	"	Telefono movil	"	,
	"	Direccion	"	,
	"	Colonia/Fraccionamiento	"	,
	"	Ciudad	"	,
	"	Lugar de nacimiento	"	,
	"	Propiedad a su nombre	"	,
	"	Estado	"	,
	"	Codigo Postal	"	,
	"	Email	"	,
	"	Sexo	"	,
	"	Fecha nacimiento	"	,
	"	Edad	"	,
	"	CURP	"	,
	"	Nombre obligado 2	"	,
	"	apellido paterno	"	,
	"	apellido materno	"	,
	"	RFC	"	,
	"	Telefono	"	,
	"	Telefono movil	"	,
	"	Direccion	"	,
	"	Colonia/Fraccionamiento	"	,
	"	Ciudad	"	,
	"	lugar de nacimiento	"	,
	"	Propiedad a su nombre	"	,
	"	Estado	"	,
	"	Codigo Postal	"	,
	"	Email	"	,
	"	sexo	"	,
	"	Fecha nacimiento	"	,
	"	edad	"	,
	"	CURP	"	,
	"	Fecha	"	,
	"	Clave consecionario	"	,
	"	Nombre consecionario	"	,
	"	Nombre vendedor 	"	,
	"	Nombre gerente grl.	"	);

   echo'Encontrado';		
   echo "<div class='tabs-content' data-tabs-content='example-tabs'>";
		
		echo	"<table width='20%' border='0' class='table table-sm table-inverse'>";

echo "<div class='tabs-panel is-active' id='panel1'>";
   while($row=mysqli_fetch_array($tab,MYSQL_NUM)){

for ($i=0; $i < count($row); $i++) { 
	for ($j=$i; $j < $i+1; $j++) { 
		
if ($row[$j]=="") {
	# code...
	break;
}
		else{

 echo "<tr class='bg-primary' >
    <td >". $con[$i]."</td>
  ";
   echo "
    <td >". $row[$j]."</td>
  </tr>";
			}
		}
	}
}
 echo "</div>"; 
 echo "<div class='tabs-panel' id='panel2'>";
   while($row=mysqli_fetch_array($result,MYSQL_NUM)){

for ($i=0; $i < count($row); $i++) { 
	for ($j=$i; $j < $i+1; $j++) { 
		
if ($row[$j]=="") {
	# code...
	break;
}
		else{

 echo "<tr class='bg-primary' >
    <td >". $con[$i]."</td>
  ";
   echo "
    <td >". $row[$j]."</td>
  </tr>";
			}
		}
	}
}
echo "</div>";

echo "</table> </div>";


 		  }
}
else{

echo "fallo";

}
echo "";
  
		 ?>