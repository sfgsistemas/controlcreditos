<?php


switch ($_REQUEST['function']) {
    case 'tienexmlqeq':
        include('Conexion2.php');
         $rawdata = array();
            $i=0;
        $result=mysqli_query($cnx,"select * from registroxml inner join gradoriesgo on registroxml.Folio_Sol=gradoriesgo.id where gradoriesgo.id='".$_REQUEST['registro']."'");
        if($result===false){
            echo "Error -- Queru no realizado!!!";
            break;
        }
        while($row=mysqli_fetch_array($result)){
            $rawdata[$i] = $row;
                $i++;
        }

        echo json_encode($rawdata);
        break;
    case 'verobtenqeq':
        include('Requests-1.7.0/library/Requests.php');
        
        echo leer($_REQUEST['url']);

        break;
    case 'obtenqeq':
        include('Requests-1.7.0/library/Requests.php');
        include('Conexion2.php');

        //echo $_REQUEST['id'];
        $result=mysqli_query($cnx,"select * from clientes inner join solicitudes on clientes.id=solicitudes.FolioCliente where solicitudes.GradoRiesgo='".$_REQUEST['id']."'");

        
        if($result===false){
            echo "Error -- Consulta no realizada";
            break;
        }
        if(!mysqli_num_rows($result)>0){
            echo "Error -- ¡¡No hay registros favor de intentar de nuevo!!";
            break;
        }

        $row=mysqli_fetch_array($result);

        if ($row['TipoCliente']=='Persona Fisica') {
            # code...
             renewSA:
                 $cooc=conexion();

                  $arra= array();
               
                $per1=$row['NombrePF'].' '.$row['SegNombrePF'].' '.$row['ApPatPF'].' '.$row['ApMatPF'];
                //$con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF']."&curp=".$row['CURPPF']."&rfc=".$row['RFCPF'];
                $con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF'];
                try {
                $dir=consulta($con1,$per1,$cooc);
                array_push($arra, array($per1.' -PPE- '.$row['CURPPF'],$dir,'cliente',$per1));
                } catch (Exception $e) {
                  echo 'Caught exception: ',  $e->getMessage(), "\n";
                     goto renewSA;
                }


                if($row['EstCivilPF']=="Casado Bienes Mancomunados" || $row['EstCivilPF']=="Casado Bienes Separados"){

                    renewSA2:

                    $per2=$row['ConyugeNom'].' '.$row['ConyugeApPat'].' '.$row['ConyugeApMat'];
                    //$con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF']."&curp=".$row['CURPPF']."&rfc=".$row['RFCPF'];
                    $con2="https://qeq.mx/datos/qws/pepsp?nombre=".$row['ConyugeNom']."&paterno=".$row['ConyugeApPat']." &materno=".$row['ConyugeApMat'];
                    try {
                    $dir=consulta($con2,$per2,$cooc);
                    array_push($arra, array($per2.' -conyuge ',$dir,'conyuge',$per2));
                    } catch (Exception $e) {
                      echo 'Caught exception: ',  $e->getMessage(), "\n";
                         goto renewSA2;
                    }


                }

                if($row['RefPerNom1PF']!="" || $row['RefPerApPat1PF']!=""){
                    renewSA3:

                    $per3=$row['RefPerNom1PF'].' '.$row['RefPerApPat1PF'].' '.$row['RefPerApMat1PF'];
                    //$con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF']."&curp=".$row['CURPPF']."&rfc=".$row['RFCPF'];
                    $con3="https://qeq.mx/datos/qws/pepsp?nombre=".$row['RefPerNom1PF']."&paterno=".$row['RefPerApPat1PF']." &materno=".$row['RefPerApMat1PF'];
                    try {
                    $dir=consulta($con3,$per3,$cooc);
                    array_push($arra, array($per3.' -RefPer1 ',$dir,'RefPer1',$per3));
                    } catch (Exception $e) {
                      echo 'Caught exception: ',  $e->getMessage(), "\n";
                         goto renewSA3;
                    }
                }

                if($row['RefPerNom2PF']!="" || $row['RefPerApPat2PF']!=""){
                    renewSA4:

                    $per4=$row['RefPerNom2PF'].' '.$row['RefPerApPat2PF'].' '.$row['RefPerApMat2PF'];
                    //$con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF']."&curp=".$row['CURPPF']."&rfc=".$row['RFCPF'];
                    $con4="https://qeq.mx/datos/qws/pepsp?nombre=".$row['RefPerNom2PF']."&paterno=".$row['RefPerApPat2PF']." &materno=".$row['RefPerApMat2PF'];
                    try {
                    $dir=consulta($con4,$per4,$cooc);
                    array_push($arra, array($per4.' -RefPer2 ',$dir,'RefPer2',$per4));
                    } catch (Exception $e) {
                      echo 'Caught exception: ',  $e->getMessage(), "\n";
                         goto renewSA4;
                    }
                }

                if($row['BeneficiarioNom']!="" || $row['BeneficiarioApPat']!=""){
                    renewSA5:

                    $per5=$row['BeneficiarioNom'].' '.$row['BeneficiarioApPat'].' '.$row['BeneficiarioApMat'];
                    //$con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF']."&curp=".$row['CURPPF']."&rfc=".$row['RFCPF'];
                    $con5="https://qeq.mx/datos/qws/pepsp?nombre=".$row['BeneficiarioNom']."&paterno=".$row['BeneficiarioApPat']." &materno=".$row['BeneficiarioApMat'];
                    try {
                    $dir=consulta($con5,$per5,$cooc);
                    array_push($arra, array($per5.' -Beneficiario ',$dir,'Beneficiario',$per5));
                    } catch (Exception $e) {
                      echo 'Caught exception: ',  $e->getMessage(), "\n";
                         goto renewSA5;
                    }
                }




                foreach ($arra as $valor){
                        mysqli_query($cnx,"insert into registroxml (Folio_Sol,PersonaRazonsoc,DirXML,Nombre,Clasificacion) values('".$_REQUEST['id']."','".$valor[0]."','".$valor[1]."','".$valor[3]."','".$valor[2]."') ON DUPLICATE KEY UPDATE Folio_Sol = '".$_REQUEST['id']."', PersonaRazonsoc = '".$valor[0]."', DirXML='".$valor[1]."', Nombre='".$valor[3]."',clasificacion='".$valor[2]."' ");
                        
                        
                    }
                    mysqli_query($cnx,"insert into xml (Folio_Sol,FechaConsulta) values('".$_REQUEST['id']."','".date('Y-m-d')."')");






        //echo leer($dir);

        }else if($row['TipoCliente']=='Persona Moral'){
            renewSA6:
                 $cooc=conexion();

                  $arra= array();
               
                $per1=$row['ContEmpNombre'].' '.$row['ContEmpSegNombre'].' '.$row['ContEmpApPat'].' '.$row['ContEmpApMat'];
                //$con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF']."&curp=".$row['CURPPF']."&rfc=".$row['RFCPF'];
                $con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['ContEmpNombre'].' '.$row['ContEmpSegNombre']."&paterno=".$row['ContEmpApPat']." &materno=".$row['ContEmpApMat'];
                try {
                $dir=consulta($con1,$per1,$cooc);
                array_push($arra, array($per1.' - '.$row['ContEmpRFC'],$dir,'contempresa',$per1));
                } catch (Exception $e) {
                  echo 'Caught exception: ',  $e->getMessage(), "\n";
                     goto renewSA6;
                }

                if($row['Acc1Nombre']!="" || $row['Acc1ApPat']!=""){
                    renewSA8:

                    $per2=$row['Acc1Nombre'].' '.$row['Acc1ApPat'].' '.$row['Acc1ApMat'];
                    //$con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF']."&curp=".$row['CURPPF']."&rfc=".$row['RFCPF'];
                    $con2="https://qeq.mx/datos/qws/pepsp?nombre=".$row['Acc1Nombre']."&paterno=".$row['Acc1ApPat']." &materno=".$row['Acc1ApMat'];
                    try {
                    $dir=consulta($con2,$per2,$cooc);
                    array_push($arra, array($per2.' -Accionista1 ',$dir,'Accionista1',$per2));
                    } catch (Exception $e) {
                      echo 'Caught exception: ',  $e->getMessage(), "\n";
                         goto renewSA8;
                    }
                }

                if($row['Acc2Nombre']!="" || $row['Acc2ApPat']!=""){
                    renewSA9:

                    $per3=$row['Acc2Nombre'].' '.$row['Acc2ApPat'].' '.$row['Acc2ApMat'];
                    //$con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF']."&curp=".$row['CURPPF']."&rfc=".$row['RFCPF'];
                    $con3="https://qeq.mx/datos/qws/pepsp?nombre=".$row['Acc2Nombre']."&paterno=".$row['Acc2ApPat']." &materno=".$row['Acc2ApMat'];
                    try {
                    $dir=consulta($con3,$per3,$cooc);
                    array_push($arra, array($per3.' -Accionista2 ',$dir,'Accionista2',$per3));
                    } catch (Exception $e) {
                      echo 'Caught exception: ',  $e->getMessage(), "\n";
                         goto renewSA9;
                    }
                }

                if($row['Acc3Nombre']!="" || $row['Acc3ApPat']!=""){
                    renewSA10:

                    $per4=$row['Acc3Nombre'].' '.$row['Acc3ApPat'].' '.$row['Acc3ApMat'];
                    //$con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF']."&curp=".$row['CURPPF']."&rfc=".$row['RFCPF'];
                    $con4="https://qeq.mx/datos/qws/pepsp?nombre=".$row['Acc3Nombre']."&paterno=".$row['Acc3ApPat']." &materno=".$row['Acc3ApMat'];
                    try {
                    $dir=consulta($con4,$per4,$cooc);
                    array_push($arra, array($per4.' -Accionista3 ',$dir,'Accionista3',$per4));
                    } catch (Exception $e) {
                      echo 'Caught exception: ',  $e->getMessage(), "\n";
                         goto renewSA10;
                    }
                }

                if($row['Acc4Nombre']!="" || $row['Acc4ApPat']!=""){
                    renewSA11:

                    $per5=$row['Acc4Nombre'].' '.$row['Acc4ApPat'].' '.$row['Acc4ApMat'];
                    //$con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF']."&curp=".$row['CURPPF']."&rfc=".$row['RFCPF'];
                    $con5="https://qeq.mx/datos/qws/pepsp?nombre=".$row['Acc4Nombre']."&paterno=".$row['Acc4ApPat']." &materno=".$row['Acc4ApMat'];
                    try {
                    $dir=consulta($con5,$per5,$cooc);
                    array_push($arra, array($per5.' -Accionista4 ',$dir,'Accionista4',$per5));
                    } catch (Exception $e) {
                      echo 'Caught exception: ',  $e->getMessage(), "\n";
                         goto renewSA11;
                    }
                }

                if($row['Acc5Nombre']!="" || $row['Acc5ApPat']!=""){
                    renewSA12:

                    $per6=$row['Acc5Nombre'].' '.$row['Acc5ApPat'].' '.$row['Acc5ApMat'];
                    //$con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF']."&curp=".$row['CURPPF']."&rfc=".$row['RFCPF'];
                    $con6="https://qeq.mx/datos/qws/pepsp?nombre=".$row['Acc5Nombre']."&paterno=".$row['Acc5ApPat']." &materno=".$row['Acc5ApMat'];
                    try {
                    $dir=consulta($con6,$per6,$cooc);
                    array_push($arra, array($per6.' -Accionista5 ',$dir,'Accionista5',$per6));
                    } catch (Exception $e) {
                      echo 'Caught exception: ',  $e->getMessage(), "\n";
                         goto renewSA12;
                    }
                }

                if($row['Acc6Nombre']!="" || $row['Acc6ApPat']!=""){
                    renewSA13:

                    $per7=$row['Acc6Nombre'].' '.$row['Acc6ApPat'].' '.$row['Acc6ApMat'];
                    //$con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF']."&curp=".$row['CURPPF']."&rfc=".$row['RFCPF'];
                    $con7="https://qeq.mx/datos/qws/pepsp?nombre=".$row['Acc6Nombre']."&paterno=".$row['Acc6ApPat']." &materno=".$row['Acc6ApMat'];
                    try {
                    $dir=consulta($con7,$per7,$cooc);
                    array_push($arra, array($per7.' -Accionista6 ',$dir,'Accionista6',$per7));
                    } catch (Exception $e) {
                      echo 'Caught exception: ',  $e->getMessage(), "\n";
                         goto renewSA13;
                    }
                }













                if($row['BeneficiarioNom']!="" || $row['BeneficiarioApPat']!=""){
                    renewSA7:

                    $per5=$row['BeneficiarioNom'].' '.$row['BeneficiarioApPat'].' '.$row['BeneficiarioApMat'];
                    //$con1="https://qeq.mx/datos/qws/pepsp?nombre=".$row['NombrePF'].' '.$row['SegNombrePF']."&paterno=".$row['ApPatPF']." &materno=".$row['ApMatPF']."&curp=".$row['CURPPF']."&rfc=".$row['RFCPF'];
                    $con5="https://qeq.mx/datos/qws/pepsp?nombre=".$row['BeneficiarioNom']."&paterno=".$row['BeneficiarioApPat']." &materno=".$row['BeneficiarioApMat'];
                    try {
                    $dir=consulta($con5,$per5,$cooc);
                    array_push($arra, array($per5.' -Beneficiario ',$dir,'Beneficiario',$per5));
                    } catch (Exception $e) {
                      echo 'Caught exception: ',  $e->getMessage(), "\n";
                         goto renewSA7;
                    }
                }






                 foreach ($arra as $valor){
                        mysqli_query($cnx,"insert into registroxml (Folio_Sol,PersonaRazonsoc,DirXML,Nombre,Clasificacion) values('".$_REQUEST['id']."','".$valor[0]."','".$valor[1]."','".$valor[3]."','".$valor[2]."') ON DUPLICATE KEY UPDATE Folio_Sol = '".$_REQUEST['id']."', PersonaRazonsoc = '".$valor[0]."', DirXML='".$valor[1]."', Nombre='".$valor[3]."',clasificacion='".$valor[2]."' ");
                        
                        
                    }
                    mysqli_query($cnx,"insert into xml (Folio_Sol,FechaConsulta) values('".$_REQUEST['id']."','".date('Y-m-d')."')");


        }else{
            echo "Error -- ¡¡Registro No Contiene Tipo De Cliente!!";
        }

        echo "¡¡Guardado y registrado!!";

        //echo json_encode($arra);

        //echo json_encode(mysqli_fetch_array($result));

        break;
    case 'continuarconocimiento':
        include('Conexion2.php');
        try {
            $rawdata = array();
            $i=0;
            $result=mysqli_query($cnx,"select solicitudes.Id,TipoCredito,clientes.NombrePF,clientes.SegNombrePF,clientes.ApPatPF,clientes.ApMatPF,clientes.RazonSocial from solicitudes INNER JOIN clientes on solicitudes.FolioCliente=clientes.id inner join gradoriesgo on gradoriesgo.Id=solicitudes.GradoRiesgo where gradoriesgo.Status='Incompleto'");
            if($result===false){
                echo "Error -- No se pudo realizar el Query";
            }
            while($row=mysqli_fetch_array($result)){
                $rawdata[$i] = $row;
                $i++;
                
            }

            echo base64_encode(json_encode($rawdata));
            


        } catch (Exception $e) {
            echo "Error Al Obtener listado";
        }
        
        
        break;
    case 'requestmodificarconocimiento':
        include('Conexion2.php');
        $result=mysqli_query($cnx,"select * from gradoriesgo where Id=(select GradoRiesgo from solicitudes where Id='".$_REQUEST['registro']."')");
        if($result===false){
            echo "Error -- Falla al realizar Query";
            break;
        }
        echo base64_encode(json_encode(mysqli_fetch_array($result)));

        break;
    case 'guardargradriesgo':
        include('Conexion2.php');
        $status='Incompleto';

        if (

            (
            $_REQUEST['select']!='' 
            && $_REQUEST['select2']!='' 
            && $_REQUEST['select3']!='' 
            && $_REQUEST['select4']!='' 
            && $_REQUEST['select5']!='' 
            && $_REQUEST['select6']!='' 
            && $_REQUEST['select7']!='' 
            && $_REQUEST['select8']!='' 
            && $_REQUEST['select9']!='' 
            && $_REQUEST['select10']!='' 
            && $_REQUEST['select11']!='' 
            && $_REQUEST['select12']!='' 
            && $_REQUEST['select13']!='' 
            && $_REQUEST['select14']!='' 
            && $_REQUEST['select15']!='' 
            && $_REQUEST['select16']!='' 
            && $_REQUEST['select17']!='' 
            && (($_REQUEST['select18']!='' && $_REQUEST['select21']!='') || ($_REQUEST['select19']!='' && $_REQUEST['select20']!='')))


            &&

            (($_REQUEST['ingrcomp1']!='' && $_REQUEST['fuenteingrcomp1']!='')  || ($_REQUEST['ingrnocomp1']!='' && $_REQUEST['fuenteingrnocomp1']!=''))
            &&


            (($_REQUEST['tienepeprel']!='' && $_REQUEST['tienepeprel']!="Si") || ($_REQUEST['tienepeprel']!='' && $_REQUEST['tienepeprel']=="Si" && $_REQUEST['quienpep']!="" && $_REQUEST['parentescopep']!="" && $_REQUEST['puestorelpep']!=""))

/*
*/
            

            ) {
            # code...
            $status='Finalizado';
        }

        

        session_start();
        $matrizgradreisgo=array(
            1=> array('Vulnerable' => 3, 'Informal' =>2, 'Otra'=>1,''=>''),
            2=> array('1-3 años' =>3 ,'4-6 años'=>2, '7-10 años'=>1, 'N/A'=>0,''=>'' ),
            3=> array('Prestamo'=>1,'Arrendamiento'=>2,'Otros'=>3,''=>''),
            4=> array('1 a 2'=>1,'3 a 4'=>2,'5 o mas'=>3,'N/A'=>0,''=>''),
            5=> array('1 a 2'=>1,'3 a 4'=>2,'5 o mas'=>3,'N/A'=>0,''=>''),
            6=> array('1% - 49%'=>1,'50% - 74%'=>2,'75% - 100%'=>3,''=>''),
            7=> array('1% - 49%'=>1,'50% - 74%'=>2,'75% - 100%'=>3,''=>''),
            8=> array('$18000 - $20000'=>1,'$21000 - $25000'=>2,'mas de $25000'=>3,''=>''),
            9=> array('1 a 3'=>1,'4 a 6'=>2,'7 a 10'=>3,''=>''),
            10=>array('Transferencia'=>1,'Cheque'=>2,'Efectivo'=>3,''=>''),
            11=>array('Agencia'=>1,'Internet'=>2,'Otro'=>3,''=>''),
            12=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            13=>array('Guerrero-Michoacan-Tamaulipas-Morelos'=>3,'Durango-Chihuhua-Jalisco-México-CD México-Sonora'=>2,'Puebla-Coahuila-Zcatecas-Hidalgo-Durango'=>1,''=>''),
            14=>array('Guerrero-Michoacan-Tamaulipas-Morelos'=>3,'Durango-Chihuhua-Jalisco-México-CD México-Sonora'=>2,'Puebla-Coahuila-Zcatecas-Hidalgo-Durango'=>1,''=>''),
            15=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            16=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            17=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            18=>array('18 - 26'=>3,'27 - 36'=>2,'37 - 56'=>1,'56 en adelante'=>3,''=>''),
            19=>array('0 - 3'=>3,'4 - 7'=>2,'8 en adelante'=>1,''=>''),
            20=>array('Regimen agape'=>3,'Regimen general de ley'=>1,'Regimen Donatarios'=>2,'Regimen Coordinados'=>3,''=>''),
            21=>array('Incorporacion Fiscal'=>3,'Servicios Profesionales'=>3,'Intereses'=>3,'Asalariado'=>1,'Arrendamiento'=>2,'Actividad empresarial'=>2,'Regimen Agape'=>3,''=>'')
            );

        $sumagradoriesgo=
        $matrizgradreisgo[1][$_REQUEST['select']]
        +$matrizgradreisgo[2][$_REQUEST['select2']]
        +$matrizgradreisgo[3][$_REQUEST['select3']]
        +$matrizgradreisgo[4][$_REQUEST['select4']]
        +$matrizgradreisgo[5][$_REQUEST['select5']]
        +$matrizgradreisgo[6][$_REQUEST['select6']]
        +$matrizgradreisgo[7][$_REQUEST['select7']]
        +$matrizgradreisgo[8][$_REQUEST['select8']]
        +$matrizgradreisgo[9][$_REQUEST['select9']]
        +$matrizgradreisgo[10][$_REQUEST['select10']]
        +$matrizgradreisgo[11][$_REQUEST['select11']]
        +$matrizgradreisgo[12][$_REQUEST['select12']]
        +$matrizgradreisgo[13][$_REQUEST['select13']]
        +$matrizgradreisgo[14][$_REQUEST['select14']]
        +$matrizgradreisgo[15][$_REQUEST['select15']]
        +$matrizgradreisgo[16][$_REQUEST['select16']]
        +$matrizgradreisgo[17][$_REQUEST['select17']]
        +$matrizgradreisgo[18][$_REQUEST['select18']]
        +$matrizgradreisgo[19][$_REQUEST['select19']]
        +$matrizgradreisgo[20][$_REQUEST['select20']]
        +$matrizgradreisgo[21][$_REQUEST['select21']];

        

        if($sumagradoriesgo<29){
            $gradoriesgorango="Bajo";
        }else if($sumagradoriesgo>=30 || $sumagradoriesgo<=45){
            $gradoriesgorango="Medio";
        }else{
            $gradoriesgorango="Alto";
        }

        $result=mysqli_query($cnx, "update gradoriesgo SET 
        Antiguedad_ObjetoSocial         ='".$_REQUEST['select']."',
        Antiguedad_Cliente              ='".$_REQUEST['select2']."',
        Naturaleza_Operaciones          ='".$_REQUEST['select3']."',
        Numero_Beneficiarios            ='".$_REQUEST['select4']."',
        Numero_TercerosRelacionados     ='".$_REQUEST['select5']."',
        PEPs_Relacionados               ='".$_REQUEST['select6']."',
        Alerta_Reputacional             ='".$_REQUEST['select7']."',
        Volumen_Esperado                ='".$_REQUEST['select8']."',
        Frecuencia_Esperada             ='".$_REQUEST['select9']."',
        Instrumento_Monetario           ='".$_REQUEST['select10']."',
        Canales_MediosUtilizados        ='".$_REQUEST['select11']."',
        Pais_EstadoOficial              ='".$_REQUEST['select12']."',
        Pais_EstadoResidencia           ='".$_REQUEST['select13']."',
        Pais_EstadoOperacion            ='".$_REQUEST['select14']."',
        Origen_Recursos                 ='".$_REQUEST['select15']."',
        Destino_Recursos                ='".$_REQUEST['select16']."',
        Pais_EstadoResidenciaTerceros   ='".$_REQUEST['select17']."',
        Edad_Cliente                    ='".$_REQUEST['select18']."',
        An_Construccion                 ='".$_REQUEST['select19']."',
        Reg_TributacionPF               ='".$_REQUEST['select21']."',
        Reg_TributacionPM               ='".$_REQUEST['select20']."',
        GradoRiesgo                     ='".$gradoriesgorango."',
        ingrcomp1                       ='".str_replace(",","",$_REQUEST['ingrcomp1'])."'                      ,
        fuenteingrcomp1                 ='".$_REQUEST['fuenteingrcomp1']."'                ,
        ingrcomp2                       ='".str_replace(",","",$_REQUEST['ingrcomp2'])."'                      ,
        fuenteingrcomp2                 ='".$_REQUEST['fuenteingrcomp2']."'                ,
        ingrcomp3                       ='".str_replace(",","",$_REQUEST['ingrcomp3'])."'                      ,
        fuenteingrcomp3                 ='".$_REQUEST['fuenteingrcomp3']."'                ,
        ingrcomp4                       ='".str_replace(",","",$_REQUEST['ingrcomp4'])."'                      ,
        fuenteingrcomp4                 ='".$_REQUEST['fuenteingrcomp4']."'                ,
        ingrcomp5                       ='".str_replace(",","",$_REQUEST['ingrcomp5'])."'                      ,
        fuenteingrcomp5                 ='".$_REQUEST['fuenteingrcomp5']."'                ,
        ingrnocomp1                     ='".str_replace(",","",$_REQUEST['ingrnocomp1'])."'                    ,
        fuenteingrnocomp1               ='".$_REQUEST['fuenteingrnocomp1']."'              ,
        ingrnocomp2                     ='".str_replace(",","",$_REQUEST['ingrnocomp2'])."'                    ,
        fuenteingrnocomp2               ='".$_REQUEST['fuenteingrnocomp2']."'              ,
        ingrnocomp3                     ='".str_replace(",","",$_REQUEST['ingrnocomp3'])."'                    ,
        fuenteingrnocomp3               ='".$_REQUEST['fuenteingrnocomp3']."'              ,
        ingrnocomp4                     ='".str_replace(",","",$_REQUEST['ingrnocomp4'])."'                    ,
        fuenteingrnocomp4               ='".$_REQUEST['fuenteingrnocomp4']."'              ,
        ingrnocomp5                     ='".str_replace(",","",$_REQUEST['ingrnocomp5'])."'                    ,
        fuenteingrnocomp5               ='".$_REQUEST['fuenteingrnocomp5']."',
        tienepeprel                     ='".$_REQUEST['tienepeprel']."',
        quienpep                        ='".$_REQUEST['quienpep']."',
        parentescopep                   ='".$_REQUEST['parentescopep']."',
        puestorelpep                    ='".$_REQUEST['puestorelpep']."',
        Status                          ='$status',
        FechaModificacion               =CURDATE(),
        ModPor                          ='".$_SESSION['usser']."'

        WHERE Id='".$_REQUEST['registro']."'");

        if($result===false){
            echo "Error query no realizado";
            break;
        }


        echo "¡¡Guardado!!";
        break;



    case 'tipodeclientepeps':
        include('Conexion2.php');
        $result=mysqli_query($cnx,"select clientes.TipoCliente from clientes where id=(select solicitudes.FolioCliente from solicitudes where id='".$_REQUEST['solicitud']."')");
        if($result===false){
            echo "Error";
            break;
        }
        $row=mysqli_fetch_array($result);
        echo json_encode($row);
        break;
    case 'nuevaconocimiento':
        include('Conexion2.php');
        try {
            $rawdata = array();
            $i=0;
            $result=mysqli_query($cnx,"select solicitudes.Id,TipoCredito,clientes.NombrePF,clientes.SegNombrePF,clientes.ApPatPF,clientes.ApMatPF,clientes.RazonSocial from solicitudes INNER JOIN clientes on solicitudes.FolioCliente=clientes.id 
                 where solicitudes.GradoRiesgo is null and Timestampdiff(day, solicitudes.Fecha, Now())<31 and solicitudes.Status='Finalizado'");
            while($row=mysqli_fetch_array($result)){
                $rawdata[$i] = $row;
                $i++;
                
            }

            echo json_encode($rawdata);
            


        } catch (Exception $e) {
            echo "Error Al Obtener listado";
        }
        
        
        break;



    case 'nuevaregistroconocimiento':
        include('Conexion2.php');



        mysqli_query($cnx,"insert into gradoriesgo (Status) values('Incompleto')");
        $id=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));                            
        $id_cliente=$id['LAST_INSERT_ID()'];

        mysqli_query($cnx,"update solicitudes SET GradoRiesgo='$id_cliente' where id='".$_REQUEST['solicitud']."'");
        echo json_encode($id);

        break;




	default;
        echo 'Error';
    	break;



}


function conexion(){
    // First, include Requests


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

    return $c;
}

function consulta($url,$persona,$coc){
     
    $count2=0;
    
    $count=0;

    renewQuest:
    try {
   // Now let's make a request!
    $request2 = Requests::get($url, // Url
    [],  // No need to set the headers the Jar does this for us
    ['cookies' => $coc] // Pass in the Jar as an option
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
        //goto renew;
        goto renewQuest;
    }else{
        echo "Error Tiempo Excedido";
        exit();
    }
            
            }


    $DirXML='xml/'.$persona.' '.date('Y-m-d').'.xml';
   $xml->save($DirXML);
   return $DirXML;
  // include('Conexion2.php');
  // mysqli_query($cnx,"insert into registroxml (Folio_Sol,PersonaRazonsoc,DirXML) values('$foli','$persona','$DirXML') ON DUPLICATE KEY UPDATE Folio_Sol = '$foli', PersonaRazonsoc = '$persona', DirXML='$DirXML';");



            
    //echo htmlentities($el_xml);


}
 


//leer($dir);

//Para leerlo
function leer($urli){
    
    $xml = simplexml_load_file($urli);
    $salida ="";
    //echo "<h1>Hola<h1>";
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

/*
function leer($url){
    try {
            $xml = simplexml_load_file($url);
           
    $salida ="";
    
    foreach($xml->persona as $item){
      $salida .=
        "<b>Lista: </b> " . $item->lista ."<br>".
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
    ?> <script> window.print(); </script> <?php
    }catch (Exception $e) {
      echo 'Caught exception:---->>>> ',  $e->getMessage(), "\n";
        exit();
    }
    
    
    
  }

*/
?>