<?php

if(isset($_REQUEST['perF'])){
    $nombre=$_REQUEST['nombre'];
    $paterno=$_REQUEST['paterno'];
    $materno=$_REQUEST['materno'];
    if(isset($_REQUEST['curp'])){
        $curp=$_REQUEST['curp'];
    }else{
        $curp="";
    }
    if(isset($_REQUEST['rfc'])){
        $rfc=$_REQUEST['rfc'];
    }else{
        $rfc="";
    }
    
    $url="https://qeq.mx/datos/qws/pepsp?nombre=".$nombre."&paterno=".$paterno." &materno=".$materno."&curp=".$curp."&rfc=".$rfc;
}
if(isset($_REQUEST['perM'])){
    $razonsoc=$_REQUEST['razonsoc'];
    $rfc=$_REQUEST['rfc'];
    $url="https://qeq.mx/datos/qws/pepse?razonsoc=".$razonsoc."&rfc=".$rfc;
}





$count2=0;
// First, include Requests
include('Requests-1.7.0/library/Requests.php');

// Next, make sure Requests can load internal classes
Requests::register_autoloader();

// Say you need to fake a login cookie
$c = new Requests_Cookie_Jar(['login_uid' =>  'something']);

renew:
try {
   // Now let's make a request!
$request = Requests::get('https://qeq.mx/datos/qws/access?var1=silvia@vwdgo.com&var2=qeq939', // Url
	[],  // No need to set the headers the Jar does this for us
	['cookies' => $c] // Pass in the Jar as an option
);


} catch (Exception $e) {
    goto renew;
}

$count=0;

renewQuest:
try {
   // Now let's make a request!
$request2 = Requests::get($url, // Url
	[],  // No need to set the headers the Jar does this for us
	['cookies' => $c] // Pass in the Jar as an option
);


} catch (Exception $e) {
    if($count<2){
        $count++;
        goto renewQuest;
    }else{
        echo "Error Tiempo Excedido";
        exit();
    }
    
}





// Check what we received
//var_dump($request2->body);
$xml = new DOMDocument();
$xml-> loadXML($request2->body);
$xml->formatOutput = true;
$el_xml = $xml->saveXML();
$json = json_encode($xml);
//$array = json_decode($json,TRUE);
$pos = strpos($el_xml, 'No se pudo autenticar');

// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
// porque la posición de 'a' está en el 1° (primer) caracter.

 
//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($pos === false) {
    
    } else {
        if($count2<2){
        $count2++;
        sleep(10);
        goto renew;
    }else{
        echo "Error Tiempo Excedido";
        exit();
    }
            
            }

if(isset($_REQUEST['perF'])){
   $xml->save('xml/consulta.xml');
}
if(isset($_REQUEST['perM'])){
    $xml->save('xml/consulta.xml');
}

?> <script>window.print(); </script><?php

            
//echo htmlentities($el_xml);

echo "<br>";

leer();

//Para leerlo
  function leer(){
    
    $xml = simplexml_load_file('xml/consulta.xml');
    $salida ="";
    
    foreach($xml->persona as $item){
      $salida .=
        "<b>Lista: </b> " . $item->lista ."<br>".
        "<b>Nombre: </b>".$item->nombrecomp."<br>".
        "<b>RFC: </b>".$item->rfc."<br>".
        "<b>Estatus: </b>".$item->estatus."<br>".
        "<b>Dependencia: </b>".$item->dependencia. "<br>".
        "<b>Puesto: </b>".$item->puesto."<br>".
        "<b>Area: </b>".$item->area."<br>".
        "<b>Entidad: </b>".$item->entidad."<br/><hr/>";
        
    }
    if($salida==""){
        echo "No es un PEP";
    }else{
        echo $salida;
    }
     
    
  }

//echo ($json);

