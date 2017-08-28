<?php
switch ($_REQUEST['function']) {
    case 'continuaregistro':
        include('Conexion2.php');
        try {
            $rawdata = array();
            $i=0;
            $result=mysqli_query($cnx,"select solicitudes.Id,TipoCredito,clientes.NombrePF,clientes.SegNombrePF,clientes.ApPatPF,clientes.ApMatPF,clientes.RazonSocial from solicitudes INNER JOIN clientes on solicitudes.FolioCliente=clientes.id where solicitudes.Status='Incompleto'");
            while($row=mysqli_fetch_array($result)){
                $rawdata[$i] = $row;
                $i++;
                
            }

            echo json_encode($rawdata);
            


        } catch (Exception $e) {
            echo "Error Al Obtener listado";
        }
        
        
        break;
    case 'modificarsolicitud':
        
        if($_REQUEST['solicitud']){
            include('Conexion2.php');
            $result=mysqli_fetch_array(mysqli_query($cnx,"select * from solicitudes where id='".$_REQUEST['solicitud']."'"));
            echo json_encode($result);
        }

        break;




	case "nuevasolicitud":
		include("Conexion2.php");
        if(mysqli_num_rows(mysqli_query($cnx,"select * from solicitudes where FolioCliente='".$_REQUEST['cliente']."' and StatusValidacion='Pendiente' "))>0) {
            echo "Error solicitud activa";
            break;
        }


        mysqli_query($cnx,"insert into solicitudes (FolioCliente) values('".$_REQUEST['cliente']."')");
        $id=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_cliente=$id['LAST_INSERT_ID()'];
		echo json_encode($id);
        break;
		


    case "cancelarsolicitud":
    	include("Conexion2.php");
    	mysqli_query($cnx,"delete FROM solicitudes WHERE Status = ''");
        echo "Cancelado";
        break;

    case "guardasolicitud":
    	include("Conexion2.php");
    	try {
    		$status="Incompleto";

            if((($_REQUEST['tipocredito']=="Auto Nuevo" && $_REQUEST['textfield86']!="" && $_REQUEST['textfield87']!="" && $_REQUEST['textfield88']!="" && $_REQUEST['textfield89']!="" && $_REQUEST['textfield90']!="" && $_REQUEST['textfield100']!="" && $_REQUEST['textfield96']!="" && $_REQUEST['textfield92']!="" && $_REQUEST['textfield97']!="" && $_REQUEST['textfield98']!="" && $_REQUEST['textfield91']!="")
                || 
                ($_REQUEST['tipocredito']=="Auto Seminuevo" && $_REQUEST['textfield86']!="" && $_REQUEST['textfield87']!="" && $_REQUEST['textfield88']!="" && $_REQUEST['textfield89']!="" && $_REQUEST['textfield90']!="" && $_REQUEST['textfield100']!="" && $_REQUEST['textfield96']!="" && $_REQUEST['textfield92']!="" && $_REQUEST['textfield97']!="" && $_REQUEST['textfield98']!="" && $_REQUEST['textfield91']!="")
                || 
                ($_REQUEST['tipocredito']=="Crédito Simple de Nomina" && $_REQUEST['textfield86']!="" && $_REQUEST['textfield100']!="" && $_REQUEST['textfield96']!=""  && $_REQUEST['textfield98']!="" && $_REQUEST['textfield99']!="" && $_REQUEST['textfield91']!="" && $_REQUEST['textfield92']!="")
                )
                &&

                ($_REQUEST['datobnom1']!="" && $_REQUEST['datobappat1']!="" && $_REQUEST['datobapmat1']!="" && $_REQUEST['datobcp1']!="" && $_REQUEST['datobdir1']!="" && $_REQUEST['datobcol1']!="" && $_REQUEST['datobcd1']!="" && $_REQUEST['datobedo1']!="" && $_REQUEST['datoblugnac1']!="" && $_REQUEST['datobmail1']!="" && $_REQUEST['datobsex1']!="" && $_REQUEST['datobfechnac1d']!="" && $_REQUEST['datobed1']!="" && $_REQUEST['datobcurp1']!="" && $_REQUEST['datobrfc11']!="" && $_REQUEST['datobtel11']!="" && $_REQUEST['datobtel112']!="" && $_REQUEST['datobprop1']!="") 

                &&

                (($_REQUEST['datobnom2']!="" && $_REQUEST['datobappat2']!="" && $_REQUEST['datobapmat2']!="" && $_REQUEST['datobcp2']!="" && $_REQUEST['datobdir2']!="" && $_REQUEST['datobcol2']!="" && $_REQUEST['datobcd2']!="" && $_REQUEST['datobedo2']!="" && $_REQUEST['datoblugnac2']!="" && $_REQUEST['datobmail2']!="" && $_REQUEST['datobsex2']!="" && $_REQUEST['datobfechnac2d']!="" && ($_REQUEST['datobed2']!="" || $_REQUEST['datobed2']!="0")&& $_REQUEST['datobcurp2']!="" && $_REQUEST['datobrfc21']!="" && $_REQUEST['datobtel21']!="" && $_REQUEST['datobtel212']!="" && $_REQUEST['datobprop2']!="") || ($_REQUEST['datobnom2']=="" && $_REQUEST['datobappat2']=="" && $_REQUEST['datobapmat2']=="" && $_REQUEST['datobcp2']=="" && $_REQUEST['datobdir2']=="" && $_REQUEST['datobcol2']=="" && $_REQUEST['datobcd2']=="" && $_REQUEST['datobedo2']=="" && $_REQUEST['datoblugnac2']=="" && $_REQUEST['datobmail2']=="" && $_REQUEST['datobsex2']=="" && $_REQUEST['datobfechnac2d']=="" && ($_REQUEST['datobed2']=="" || $_REQUEST['datobed2']=="0")&& $_REQUEST['datobcurp2']=="" && $_REQUEST['datobrfc21']=="" && $_REQUEST['datobtel21']=="" && $_REQUEST['datobtel212']=="" && $_REQUEST['datobprop2']=="")) 

                &&

                (($_REQUEST['NomObSolPM']!='' && $_REQUEST['RFCObSolPM']!='' && $_REQUEST['TelObSolPM']!='' && $_REQUEST['Tel2ObSolPM']!='' && $_REQUEST['CPObSolPM']!='' && $_REQUEST['DirObSolPM']!='' && $_REQUEST['ColObSolPM']!='' && $_REQUEST['CdObSolPM']!='' && $_REQUEST['EstObSolPM']!='' && $_REQUEST['MunObSolPM']!='' && $_REQUEST['EmailObSolPM']!='' && $_REQUEST['AntObSolPM']!='' && $_REQUEST['ApoObSolPM']!='' && $_REQUEST['ActPrinObSolPM']!='' && $_REQUEST['FeIniOpObSolPM']!='' && $_REQUEST['CantPerObSolPM']!='') || ($_REQUEST['NomObSolPM']=='' && $_REQUEST['RFCObSolPM']=='' && $_REQUEST['TelObSolPM']=='' && $_REQUEST['Tel2ObSolPM']=='' && $_REQUEST['CPObSolPM']=='' && $_REQUEST['DirObSolPM']=='' && $_REQUEST['ColObSolPM']=='' && $_REQUEST['CdObSolPM']=='' && $_REQUEST['EstObSolPM']=='' && $_REQUEST['MunObSolPM']=='' && $_REQUEST['EmailObSolPM']=='' && $_REQUEST['AntObSolPM']=='' && $_REQUEST['ApoObSolPM']=='' && $_REQUEST['ActPrinObSolPM']=='' && $_REQUEST['FeIniOpObSolPM']=='' && $_REQUEST['CantPerObSolPM']==''))

                &&

                ($_REQUEST['clavcon']!='' && $_REQUEST['nomcons']!='' && $_REQUEST['nomvend']!='' && $_REQUEST['gerentegral']!='')

                /*

                */

                ){
                $status="Finalizado";
            }



            session_start();
    		mysqli_query($cnx,"update solicitudes SET 
    		NomObSol   			='".$_REQUEST['datobnom1']."',
    		ApPatObSol    		='".$_REQUEST['datobappat1']."',
    		ApMatObSol    		='".$_REQUEST['datobapmat1']."',
    		RFCObSol    		='".$_REQUEST['datobrfc11']."',
    		TelObSol    		='".$_REQUEST['datobtel11']."',
    		MovObSol    		='".$_REQUEST['datobtel112']."',
    		DirObSol    		='".$_REQUEST['datobdir1']."',
    		CURPObSol    		='".$_REQUEST['datobcurp1']."',
    		ColObSol    		='".$_REQUEST['datobcol1']."',
    		CdObSol    			='".$_REQUEST['datobcd1']."',
    		LugNacObSol    		='".$_REQUEST['datoblugnac1']."',
    		PropObSol    		='".$_REQUEST['datobprop1']."',
    		EdoObSol    		='".$_REQUEST['datobedo1']."',
    		CPObSol    			='".$_REQUEST['datobcp1']."',
    		EmailObSol    		='".$_REQUEST['datobmail1']."',
    		SexoObSol    		='".$_REQUEST['datobsex1']."',
    		FechNacObSol    	='".$_REQUEST['datobfechnac1d']."',
    		EdadObSol    		='".$_REQUEST['datobed1']."',
    		NomObSol2    		='".$_REQUEST['datobnom2']."',
    		ApPatObSol2    		='".$_REQUEST['datobappat2']."',
    		ApMatObSol2    		='".$_REQUEST['datobapmat2']."',
    		RFCObSol2    		='".$_REQUEST['datobrfc21']."',
    		TelObSol2    		='".$_REQUEST['datobtel21']."',
    		MovObSol2    		='".$_REQUEST['datobtel212']."',
    		DirObSol2    		='".$_REQUEST['datobdir2']."',
    		CURPObSol2    		='".$_REQUEST['datobcurp2']."',
    		ColObSol2    		='".$_REQUEST['datobcol2']."',
    		CdObSol2    		='".$_REQUEST['datobcd2']."',
    		LugNacObSol2    	='".$_REQUEST['datoblugnac2']."',
    		PropObSol2    		='".$_REQUEST['datobprop2']."',
    		EdoObSol2    		='".$_REQUEST['datobedo2']."',
    		CPObSol2    		='".$_REQUEST['datobcp2']."',
    		EmailObSol2    		='".$_REQUEST['datobmail2']."',
    		SexoObSol2    		='".$_REQUEST['datobsex2']."',
    		FechNacObSol2    	='".$_REQUEST['datobfechnac2d']."',
    		EdadObSol2    		='".$_REQUEST['datobed2']."',
    		TipoCredito    		='".$_REQUEST['tipocredito']."',


    		MontoSolicitado    	='".str_replace(",","",$_REQUEST['textfield86'])."',
    		Enganche    		='".str_replace(",","",$_REQUEST['textfield87'])."',
    		PorEnganche    		='".str_replace(",","",$_REQUEST['textfield88'])."',
    		PorFinanciamiento   ='".str_replace(",","",$_REQUEST['textfield89'])."',
    		MontoFinanciado    	='".str_replace(",","",$_REQUEST['textfield90'])."',
    		InteresAnual    	='".str_replace(",","",$_REQUEST['textfield100'])."',
    		ComisionApertura    ='".str_replace(",","",$_REQUEST['textfield96'])."',
    		PorComApertura    	='".str_replace(",","",$_REQUEST['textfield96'])."',
    		SeguroAuto    		='".str_replace(",","",$_REQUEST['textfield97'])."',
    		SeguroVida    		='".str_replace(",","",$_REQUEST['textfield98'])."',
    		SeguroDesempleo    	='".str_replace(",","",$_REQUEST['textfield99'])."',
    		Plazo    			='".str_replace(",","",$_REQUEST['textfield91'])."',
    		PagoMenEsp    		='".str_replace(",","",$_REQUEST['textfield92'])."',
    	    
            NomObSolPM          ='".$_REQUEST['NomObSolPM']."',
            RFCObSolPM          ='".$_REQUEST['RFCObSolPM']."',
            TelObSolPM          ='".$_REQUEST['TelObSolPM']."',
            Tel2ObSolPM         ='".$_REQUEST['Tel2ObSolPM']."',
            CPObSolPM           ='".$_REQUEST['CPObSolPM']."',
            DirObSolPM          ='".$_REQUEST['DirObSolPM']."',
            ColObSolPM          ='".$_REQUEST['ColObSolPM']."',
            CdObSolPM           ='".$_REQUEST['CdObSolPM']."',
            EstObSolPM          ='".$_REQUEST['EstObSolPM']."',
            MunObSolPM          ='".$_REQUEST['MunObSolPM']."',
            EmailObSolPM        ='".$_REQUEST['EmailObSolPM']."',
            AntObSolPM          ='".$_REQUEST['AntObSolPM']."',
            ApoObSolPM          ='".$_REQUEST['ApoObSolPM']."',
            ActPrinObSolPM      ='".$_REQUEST['ActPrinObSolPM']."',
            FeIniOpObSolPM      ='".$_REQUEST['FeIniOpObSolPM']."',
            CantPerObSolPM      ='".$_REQUEST['CantPerObSolPM']."',
    		ClaveCon    		='".$_REQUEST['clavcon']."',
    		NomCon    			='".$_REQUEST['nomcons']."',
    		NomVend    			='".$_REQUEST['nomvend']."',
    		GerenteGral    		='".$_REQUEST['gerentegral']."',
    		Fecha    			='".$_REQUEST['fechasolicitudregistro']."',
    		Status    			='".$status."',
    		StatusValidacion    ='Pendiente',
            FechaModificacion   =CURDATE(),
            ModPor              ='".$_SESSION['usser'] ."'

    		WHERE id='".$_REQUEST['id']."'");

    		echo "¡¡Guardado!!";

    	} catch (Exception $e) {
    		echo "Error: ".$e;
    	}
    	
    	break;



    case "requesttipocredito":

    	
    	include('Conexion2.php');
    	$result=mysqli_query($cnx,"select * from tiposcreditos where descripcion='".$_REQUEST['requestcredito']."'");
    	if($result===false){
    		break;
    	}
    	$row=mysqli_fetch_array($result);
    	echo json_encode($row);
    	break;


    case 'obtendatoscliente':
        if(isset($_REQUEST['cliente'])){
            include('Conexion2.php');
            $result=mysqli_fetch_array(mysqli_query($cnx,"select TipoCliente, ActividadEmpresarial from clientes where id='".$_REQUEST['cliente']."'"));
            echo json_encode($result);
        }
        break;

	default;
        echo 'Error';
    	break;



}

?>
