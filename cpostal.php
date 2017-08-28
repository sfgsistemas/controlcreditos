<?php
function leer($url,$cpostal){
    try {
            $xml = @simplexml_load_file($url);
           
    
    $miArray =array();

    foreach($xml->table as $item){
        if($item->d_codigo==$cpostal){

            $miArray[] = array("CodigoPostal"=>$item->d_codigo, "Municipio"=>$item->D_mnpio, "Estado"=>$item->d_estado, "Ciudad"=>$item->d_ciudad, "Fracc"=>$item->d_asenta);
          

           
         
        }
      
        
    }

     echo json_encode($miArray);
           
    
    }catch (Exception $e) {
      echo 'Caught exception:---->>>> ',  $e->getMessage(), "\n";
        exit();
    }
    
    
    
  }


  leer('xml/CPdescarga.xml',$_REQUEST['idCP']);
  ?>