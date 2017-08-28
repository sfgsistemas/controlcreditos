<?php
 
      $buscar = $_REQUEST['b'];
      $buscar1 = $_REQUEST['c'];
      $buscar2 = $_REQUEST['d'];
      $buscar3 = $_REQUEST['e'];
       
  
       switch ($_REQUEST['ANYBODY']) {
              
             case 1:
                  include("Conexion2.php");  
          
            if($buscar==""){
                  break;
            }
            $sql = mysqli_query($cnx,"select * FROM clientes WHERE id LIKE '".$buscar."%' and Status='Finalizado'");
             
            $contar = mysqli_num_rows($sql);
             
            if($contar == 0){
                  echo "El cliente buscado no tiene su información completa o no existe: '<b>".$buscar."</b>'.";

            }else{
               echo  "<table><th><tr><td>ID</td><td>Nombre / Razon social</td><td>CURP/RFC</td></tr></th>";
                  while($row=mysqli_fetch_array($sql)){
                       
                         
                        echo "<tr> <td onclick='sol(". $row['id'].")' class='button'>". $row['id']."</td>  <td>".$row['NombrePF']." ".$row['SegNombrePF']." ".$row['ApPatPF']." ".$row['ApMatPF']."".$row['RazonSocial']." </td> <td> ".$row['CURPPF']."".$row['RFCPM']." </td></tr>";    
                  }
                  echo "</table>";
            }
      
                  break; 
             case 2 :
                   include("Conexion2.php");  
          
       if($buscar1=="" && $buscar2=="" && $buscar3==""){
                  break;
            }
            $sql = mysqli_query($cnx,"select * FROM clientes WHERE (NombrePF LIKE '%".$buscar1."%') and (ApPatPF LIKE '%".$buscar2."%') and (ApMatPF LIKE '%".$buscar3."%' and Status='Finalizado')");
             
            $contar = mysqli_num_rows($sql);
             
            if($contar == 0){
                  echo "El cliente buscado no tiene su información completa o no existe: '<b>".$buscar1."</b>  <b>".$buscar2."</b>  <b>".$buscar3."</b>'.";
                 


            }else{
                  echo "<table><th><tr><td>ID</td><td>Nombre</td><td>CURP</td><td>RFC</td></tr></th>";
                  while($row=mysqli_fetch_array($sql)){
                       
                         
                        echo "<tr> <td onclick='sol(". $row['id'].")' class='button'>". $row['id']."</td>  <td>".$row['NombrePF']." ".$row['SegNombrePF']." ".$row['ApPatPF']." ".$row['ApMatPF']." </td> <td> ".$row['CURPPF']." </td> <td> ".$row['RFCPF']." </td></tr>";    
                  }
                  echo "</table>";
            }
             break;

             case 3: 
           include("Conexion2.php");  
          
       if($buscar==""){
                  break;
            }
            $sql = mysqli_query($cnx,"select * FROM clientes WHERE RazonSocial LIKE '".$buscar."%' and Status='Finalizado'");
             
            $contar = mysqli_num_rows($sql);
             
            if($contar == 0){
                  echo "El cliente buscado no tiene su información completa o no existe: '<b>".$buscar."</b>'.";
            }else{
                echo  "<table><th><tr><td>ID</td><td>Nombre</td><td>RFC</td></tr></th>";
                  while($row=mysqli_fetch_array($sql)){
                       
                         
                        echo "<tr> <td onclick='sol(". $row['id'].")' class='button'>". $row['id']." </td> <td> ".$row['RazonSocial']." </td> <td> ".$row['RFCPM']." </td></tr>";    
                  }
                  echo "</table>";
            }
             break;
             

             default:
                   echo("db_error");
                   break;
       }
  
       
?>