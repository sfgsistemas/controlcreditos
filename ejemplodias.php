<?php 
$cnx=mysqli_connect("localhost","root","","plan piso")or die(mysql_ERROR().'Error de conexion');
mysqli_query($cnx,"SET NAMES 'utf8'");

$result=mysqli_query($cnx,"select * from ficha");
echo "<table>
        <tr><th>Enero</th>
        <th>Febrero</th>
        <th>Marxo</th>
        <th>Abril</th>
        <th>Mayo</th>
        <th>Junio</th></tr>";
while($row=mysqli_fetch_array($result)){
echo "<tr><td>".fechaspro(01,2017,$row['Interes'],$row['Fecha_prestamo'],$row['fecha_pago'],$row['Dias_gracia'])."</td>
        <td>".fechaspro(02,2017,$row['Interes'],$row['Fecha_prestamo'],$row['fecha_pago'],$row['Dias_gracia'])."</td>
        <td>".fechaspro(03,2017,$row['Interes'],$row['Fecha_prestamo'],$row['fecha_pago'],$row['Dias_gracia'])."</td>
        <td>".fechaspro(04,2017,$row['Interes'],$row['Fecha_prestamo'],$row['fecha_pago'],$row['Dias_gracia'])."</td>
        <td>".fechaspro(05,2017,$row['Interes'],$row['Fecha_prestamo'],$row['fecha_pago'],$row['Dias_gracia'])."</td>
        <td>".fechaspro(06,2017,$row['Interes'],$row['Fecha_prestamo'],$row['fecha_pago'],$row['Dias_gracia'])."</td></tr> ";
}
 echo "</table>";

function fechaspro($month,$year,$int,$fini,$fend,$gracia){
    $compaño=date_create($fini);
    $term=date_create($fend);
     
     $fecha=date_create($fini);
    $fecha2=date_add($fecha, date_interval_create_from_date_string($gracia.' days'));

    if($year ==date_format($term, 'Y')){
        
        if($month == date_format($term, 'm')){
            
             $dia2=date_format($term, 'd');
    
            if(date('d') < $dia2){
                
                return date('d')*$int;
                   
        
          }else if(date('d') == $dia2){
              if(date_format($term, 'Y-m-d') < date_format($fecha2, 'Y-m-d')){
                return "Dias de Gracia";
              }else{
                  $comparacion=date("d",(mktime(0,0,0,$month+1,1,$year)-1))-date_format($fecha, 'd')  ;
                $entre=date("d",(mktime(0,0,0,$month+1,1,$year)-1))-date_format($term, 'd')  ;
                return ($comparacion-$entre)*$int;
              }
                //return $dia2*$int;
              }else{
              if(date_format($term, 'Y-m-d') < date_format($fecha2, 'Y-m-d')){
                return "Dias de Gracia";
              }else{
                  
                  $comparacion=date_format($term, 'd')-(date("d",(mktime(0,0,0,$month+1,1,$year)-1))-date_format($fecha, 'd'))  ;
                return $comparacion*$int;
              }
              
          }
            
        }else if($month < date_format($term, 'm')){
            
            if($year ==date_format($compaño, 'Y')){

        
             $month2=date_format($fecha2, 'm');
             
            if($month == $month2){
                
                   $comparacion=date("d",(mktime(0,0,0,$month+1,1,$year)-1))-date_format($fecha2, 'd')  ;
                    $entre=date("d",(mktime(0,0,0,$month+1,1,$year)-1))-date('d')  ;
            if($comparacion==0){
            return "Dias de gracia";
            }else{
                return ($comparacion-$entre)*$int;
          }
        
          }else if($month > $month2){
              compara:
           if($month == date('m')){
               
            return date('d')*$int;
          }else{
              if($month < date('m')){
                 return date("d",(mktime(0,0,0,$month+1,1,$year)-1))*$int;
               }
              return "Aun a Procesar";
           }
        
           } else{
           if(date_format(date_create($fini),'m') > $month){
            return "$0";
           }else{
            return "Dias de gracia";
           }
        
          }


            }else{
         if(date_format($fecha2, 'Y') == $year){
            $comparacion=date("d",(mktime(0,0,0,$month+1,1,$year)-1))-date_format($fecha, 'd')  ;
            return $comparacion*$int;
          }else if(date_format($fecha2, 'Y') < $year){
              return date("d",(mktime(0,0,0,$month+1,1,$year)-1))*$int;
           }else{
               return "fecha de inicio sobrepasa el año solicitado";
          }
        
         }
           
        }else{
            return "$0";
        }




        
    

        
    }else if($year < date_format($term, 'Y') || $fend == '0000-00-00'){
        
        if($year ==date_format($compaño, 'Y')){

        
     $month2=date_format($fecha, 'm');
    
        if($month == $month2){
            $comparacion=date("d",(mktime(0,0,0,$month+1,1,$year)-1))-date_format($fecha, 'd')  ;
            $entre=date("d",(mktime(0,0,0,$month+1,1,$year)-1))-date('d')  ;
        if($comparacion==0){
            return "Dias de gracia";
        }else{
            if(date_format($fecha, 'Y-m-d') > date('Y-m-d')){
                return "Aun a Procesar";
            }else{
                return ($comparacion-$entre)*$int;
            }
            
        }
        
        }else if($month > $month2){
        if($month == date('m')){
            
            return date('d')*$int;
        }else{
            if($month < date('m')){
                
                 return date("d",(mktime(0,0,0,$month+1,1,$year)-1))*$int;
            }
            return "Aun a Procesar";
        }
        
        } else{
        if(date_format(date_create($fini),'m') > $month){
            return "$0";
        }else{
            return "Dias de gracia";
        }
        
        }


        }else{
        if(date_format($fecha2, 'Y') == $year){
            $comparacion=date("d",(mktime(0,0,0,$month+1,1,$year)-1))-date_format($fecha, 'd')  ;
            return $comparacion*$int;
        }else if(date_format($fecha2, 'Y') < $year){
            goto compara;
           
        }else{
            return "fecha de inicio sobrepasa el año solicitado";
        }
        
        }
    
            
    
    }else{
            return "$0";
        }
        
    




    


date("d",(mktime(0,0,0,$month+1,1,$year)-1));

    return date_format($fecha2, 'd');
}

echo "<table>
        <tr><th>Enero</th>
        <th>Febrero</th>
        <th>Marxo</th>
        <th>Abril</th>
        <th>Mayo</th></tr>
        <tr><td>".fechaspro(01,2017,60.93,'2016-04-02','0000-00-00',30)."</td>
        <td>".fechaspro(02,2017,60.93,'2016-04-02','0000-00-00',30)."</td>
        <td>".fechaspro(03,2017,60.93,'2016-04-02','0000-00-00',30)."</td>
        <td>".fechaspro(04,2017,60.93,'2016-04-02','0000-00-00',30)."</td>
        <td>".fechaspro(05,2017,60.93,'2016-04-02','0000-00-00',30)."</td>
        <td>".fechaspro(06,2017,60.93,'2016-04-02','0000-00-00',30)."</td></tr>
      </table>";







echo "<br><br><br><br><br><br><br><br>";

$fecha = date_create('2017-03-18');
echo date_format($fecha,'Y-m-d');
echo "<br>";
date_add($fecha, date_interval_create_from_date_string('30 days'));
echo date_format($fecha, 'Y-m-d');



?>