<?php
$cnx=mysqli_connect("localhost","root","","plan piso")or die(mysql_ERROR().'Error de conexion');
mysqli_query($cnx,"SET NAMES 'utf8'");
#mysqli_select_db("u382973845_psico",$cnx);
#mysqli_select_db($cnx,"u382973845_psico");

//mysql_close($cnx);
if (isset($_REQUEST['auto'])) {
$auto=strtoupper($_REQUEST['auto']);
$chasis=strtoupper($_REQUEST['chasis']);
$tasa=$_REQUEST['tasa'];
$importe=$_REQUEST['importe'];
$fecha=$_REQUEST['from'];
$gracia=$_REQUEST['gracia'];
$int=$_REQUEST['int'];
if($auto == '' && $chasis == '' && $tasa =='' && $importe =='' && $fecha =='' && $gracia == '' && $int == ''){
echo "<script>alert('ingresa todos los datos')</script>";

}
else{mysqli_query($cnx,"insert into ficha(Automovil,No_chasis,Tasa,Importe,Fecha_prestamo,Dias_gracia,Interes)values('$auto','$chasis','$tasa','$importe','$fecha','$gracia','$int');");}
}



?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Financiera| Bienvenido</title>
  <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
 <script src="js/jquery-ui/jquery-ui.js"></script>
<script src="js/vendor/jquery.js"></script>
<script src="planfunciones.js"></script>
 
  </head>
  <body>
<style type="text/css">
.mifecha2 {
   border: 1px solid #ddd;
   padding: 3px;
   text-align: center;
   font-family:verdana, arial;
   font-size: 10pt;
   overflow: hidden;
   width: 100%
}
.mifecha2 .mesano{
   float: left;
   padding: 3px;
   font-weight: bold;
}
.mifecha2 .dia, .mifecha2 .diaactual{
   width: 20px;
   padding: 3px;
   margin-left: 3px;
   background-color: #ddd;
   float: left;
}
.mifecha2 .diaactual{
   background-color: #999;
   font-weight: bold;
}


    label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px; }
    h1 { font-size: 1.2em; margin: .6em 0; }
    div#users-contain { width: 450px; margin: 20px 0; }
    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .3em 20px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }
  </style>
<script>

</script>

<script type="text/javascript">
   
  </script>

<form name="form" id="form" action=""  method="post" >
  
<br>
Automovil
<input name="auto" id="auto" >
<br>
No. de chasis
<input name="chasis" id="chasis" >
<br>
Tasa anual
<input name="tasa" type="text" id="tasa" >
<br>
Importe
<input name="importe" onChange="formatodenumero(this.id,this.value)" type="text" id="importe" >
<br>
<label for="from">Fecha de prestamo</label>
<input type="text" id="from" name="from" >
<br>
Dias de gracia
<input name="gracia" onchange="tasaR()">
<br>
<!-- <label for="from">From</label>
<input type="text" id="from" name="from" >
<label for="to">to</label>
<input type="text" id="to" name="to" > -->
Interes diario 
  <input name="int" id="int" readonly>
<br>


      <input type="submit"  id="dia" name="dia" value="Guardar"> 
      <br>
    
</form>

<div id="users-contain" class="ui-widget">
<table class="ui-widget ui-widget-content">
<tr class="ui-widget-header ">
  <th>Automovil</th>
   <th>No de chasis</th>
    <th>Tasa</th>
     <th>Importe</th>
      <th>Fecha de prestamo</th>
       <th>Dias de gracia </th>
         <th>Interes diario</th>
          <th>Interes al dia de hoy </th>
</tr>
<br>
<?php  

function hbz_day_counter($fecha) {

$today = strtotime(date("Y-m-d")); //Today
$start_ts = strtotime($fecha); //Since...

$years = date('Y')-substr($fecha, 0,4); //Years since...
/*if (($years%4) == 0) {
$extra_days = (((date('Y')-$year)/4)-1);
} else {
$extra_days = (((date('Y')-$year)/4));
}
$extra_days = round($extra_days);
*/
return round(($today - $start_ts)/(60*60*24)) ;

}

  $result=mysqli_query($cnx,"select * from ficha");

$sum=0;

while($row=mysqli_fetch_array($result)){
  $inter=$row['Interes']*(hbz_day_counter($row['Fecha_prestamo'])-$row['Dias_gracia']);
  $sum +=$inter;
if( $inter <= 0){ $inter=0; }
 echo 
 "
   <tbody> 
 <tr>

    <td>" .$row['Automovil']."</td>
    <td>".$row['No_chasis']."</td>
    <td>".$row['Tasa']."</td>
    <td>$".number_format($row['Importe'],2,'.',',')."</td>
    <td>".$row['Fecha_prestamo']."</td>
    <td>".$row['Dias_gracia']."</td>
    <td>$".number_format($row['Interes'],2,'.',',')."</td>
    <td>$".number_format($inter,2,'.',',')."</td>
  </tr>
  </tbody>
  ";

      }
    
      echo "</table> </div>"; ?>

 <script>
  $( function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  } );
  </script>
  <style>
  .ui-tabs-vertical { width: 75em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 5px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: .1em; float: right; width: 60em;}
  </style>
</head>

 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Primer Cuatrimestre</a></li>
    <li><a href="#tabs-2">Segundor Cuatrimestre</a></li>
    <li><a href="#tabs-3">Tercero Cuatrimestre</a></li>
  </ul>
  <div id="tabs-1">
 <?php
echo "
<div id='users-contain' class='ui-widget'>
<h1>Intereses ".date('Y')."</h1>
<table class='ui-widget ui-widget-content'>
<tr class='ui-widget-header'>

        <th>Automovil</th>
        <th>Chasis</th>
        <th>Enero</th>
        <th>Febrero</th>
        <th>Marzo</th>
        <th>Abril</th>
        <th>Total</th>
    
        </tr>
        <tr>"
        ;
  $result2=mysqli_query($cnx,"select * from ficha");
$mes=01;
while($row2=mysqli_fetch_array($result2)){
echo "<tr>
 <td>". $row2['Automovil'] ." </td>
        <td>". $row2['No_chasis'] ." </td>

";
$suma=0;
for ($i=1; $i<=4 ; $i++) { 

if (date('m')>= $i) {
 echo "  
        <td>".fechaspro($i,date('Y'),$row2['Interes'],$row2['Fecha_prestamo'],$row2['fecha_pago'],$row2['Dias_gracia'])."</td>

    ";
    $suma+=fechaspro($i,date('Y'),$row2['Interes'],$row2['Fecha_prestamo'],$row2['fecha_pago'],$row2['Dias_gracia']);
          } 
        }
        echo "<td>". $suma  ." </td>"; 

    }
echo "
</tr>
      </table>
      </div>
<br><br><br><br><br><br><br><br>";
 ?>
  </div>
  <div id="tabs-2">
   <?php
echo "
<div id='users-contain' class='ui-widget'>
<h1>Intereses ".date('Y')."</h1>
<table class='ui-widget ui-widget-content'>
<tr class='ui-widget-header'>
            <th>Automovil</th>
        <th>Chasis</th>
        <th>Mayo</th>
        <th>Junio</th>
        <th>Julio</th>
        <th>Agosto</th>
           <th>Total</th>
        </tr>
        <tr>"
        ;
  $result2=mysqli_query($cnx,"select * from ficha");

while($row2=mysqli_fetch_array($result2)){
echo "<tr>";
$suma=0;
echo "<td>". $row2['Automovil'] ." </td>
        <td>". $row2['No_chasis'] ." </td>";
for ($i=5; $i<=8 ; $i++) { 
  # code...
if (date('m')>= $i) {
 echo "  
        <td>".fechaspro($i,date('Y'),$row2['Interes'],$row2['Fecha_prestamo'],$row2['fecha_pago'],$row2['Dias_gracia'])."</td>

    ";
          $suma+=fechaspro($i,date('Y'),$row2['Interes'],$row2['Fecha_prestamo'],$row2['fecha_pago'],$row2['Dias_gracia']);
          } 
        }
        echo "<td>". $suma  ." </td>"; 

    }
echo "
</tr>
      </table>
      </div>
<br><br><br><br><br><br><br><br>";
 ?>

  </div>
  <div id="tabs-3">
  <?php
echo "
<div id='users-contain' class='ui-widget'>
<h1>Intereses ".date('Y')."</h1>
<table class='ui-widget ui-widget-content'>
<tr class='ui-widget-header'>
    <th>Automovil</th>
        <th>Chasis</th>
        <th>Septiembre</th>
        <th>Octubre</th>
        <th>Noviembre</th>
        <th>Diciembre</th>
           <th>Total</th>
        </tr>
        <tr>"
        ;
  $result2=mysqli_query($cnx,"select * from ficha");

while($row2=mysqli_fetch_array($result2)){
echo "<tr>";
$suma=0;
echo " <td>". $row2['Automovil'] ." </td>
        <td>". $row2['No_chasis'] ." </td>";
for ($i=9; $i<=12 ; $i++) { 
  # code...
if (date('m')>= $i) {
 echo "   
        <td>".fechaspro($i,date('Y'),$row2['Interes'],$row2['Fecha_prestamo'],$row2['fecha_pago'],$row2['Dias_gracia'])."</td>

    ";
       $suma+=fechaspro($i,date('Y'),$row2['Interes'],$row2['Fecha_prestamo'],$row2['fecha_pago'],$row2['Dias_gracia']);
          } 
        }
        echo "<td>". $suma  ." </td>"; 

    }
echo "
</tr>
      </table>
      </div>
<br><br><br><br><br><br><br><br>";
 ?>

  </div>
</div>
<?php
function fechaspro($month,$year,$int,$fini,$fend,$gracia){
    $compaño=date_create($fini);
     $fecha=date_create($fini);
    $fecha2=date_add($fecha, date_interval_create_from_date_string($gracia.' days'));
  
  
        if ($year == (date_format(date_create($fend),'Y'))) {
          if ($month > date_format(date_create($fend),'m')   ) { 
   
           return "fin de calculo de interes";
      
        }
  if($month==date_format(date_create($fend),'m')){
     if(date_format($fecha2,'Y-m-d') > date_format(date_create($fend),'Y-m-d') ){

            goto fun;
          }
           $comparacion=date("d",(mktime(0,0,0,$month+1,1,$year)-1))-date_format($fecha, 'd')  ;
               $entre= date("d",(mktime(0,0,0,$month+1,1,$year)-1))- date_format(date_create($fend),'d');
            echo   $day=($comparacion-$entre)*$int;
             return $day; }

      }

 elseif ($year > (date_format(date_create($fend),'Y'))) {
  if ($fend == "0000-00-00") {
  goto fun;
  }
     return "fin calculo interes ";
     }
     
fun:
    if($year ==date_format($compaño, 'Y')){
        
    $month2=date_format($fecha, 'm');
 


    if($month == $month2){
     

            $comparacion=date("d",(mktime(0,0,0,$month+1,1,$year)-1))-date_format($fecha, 'd')  ;
             $entre= date("d",(mktime(0,0,0,$month+1,1,$year)-1))- date('d');
        if($comparacion==0){
            return "Dias de gracia";
        }else{
          if(date_format($fecha2,'Y-m-d') > date('Y-m-d') ){

    goto fall;
          }else{
            if (date_format($fecha2,'Y-m-d') > date_format(date_create($fend),'Y-m-d') && $fend != "0000-00-00") {
              goto gr;
            }
            else{
            return ($comparacion-$entre)*$int;}
          }
        }
        
    }else if($month > $month2){
        d:
        if($month == date('m')){
            return date('d')*$int;
        }else{  


            if($month < date('m')){
                 return date("d",(mktime(0,0,0,$month+1,1,$year)-1))*$int;
            }
            fall:
            return "Aun a Procesar";

        }
        
    } else{
        if(date_format(date_create($fini),'m') > $month){
            return "$0";
        }else{
          gr:
            return "Dias de gracia";
        }
        
    }


    }else{
        if(date_format($fecha2, 'Y') == $year){
           
            $comparacion=date("d",(mktime(0,0,0,$month+1,1,$year)-1))-date_format($fecha, 'd')  ;

            return $comparacion*$int;
        }else if(date_format($fecha2, 'Y') < $year){
          goto d;
        }else{
            return "fecha de inicio sobrepasa el año solicitado";
        }
        
    }
  



    


date("d",(mktime(0,0,0,$month+1,1,$year)-1));

    return date_format($fecha2, 'd');
}


echo "   


 <br>
     <br>
<table>
  <tr>
    <td> Subtotal</td>
        <td>$". number_format($sum,2,'.',',') . "</td>
  </tr>
 <tr>
   <td>IVA </td>
       <td>$". number_format($sum * 0.16,2,'.',',') . " </td>
 </tr>
  <tr>
    <td> Total </td>
        <td> $". number_format($sum*1.16,2,'.',',' ) ." </td>
  </tr>
</table>";
      
      
     ?>
     <button id="automovil">Pagar automovil</button>
     <button id="interes">Pagar interes</button>






  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  
  </script>
</head>
<body>
 
<div id="dialog-form" >
  
 
  <form>
    <fieldset>
    <div id="users-contain" class="ui-widget">
    <table id="users" class="ui-widget ui-widget-content">
<tr class="ui-widget-header">
  <th>Automovil</th>
   <th>No de chasis</th>
    <th>Importe</th>
  
</tr>
<br>
 <?php
 $result1=mysqli_query($cnx,"select * from ficha where fecha_pago = '0000-00-00' ");


      while($row1=mysqli_fetch_array($result1)){
  

 echo 
 " 
    <tbody> 
 <tr >

    <td type='button' onclick='comprueba(".$row1['Importe'].",this.id)' id=".$row1['No_chasis']." >" .$row1['Automovil']."</td>
    <td type='button' onclick='comprueba(".$row1['Importe'].",this.id)' id=".$row1['No_chasis']." >".$row1['No_chasis']."</td>
     <td type='button' onclick='comprueba(".$row1['Importe'].",this.id)' id=".$row1['No_chasis']." >$".number_format($row1['Importe'],2,'.',',' ) ."</td>
  
  </tr>
   </tbody>
   </div>
  ";

      }
    
      echo "</table>";
     ?>

     <p>Monto a pagar</p><input type="text" name="monto" id="monto">
     chasis <input type="text" name="chas" id="chas">

      <!-- Allow form submission with keyboard without duplicating the dialog button -->
<input type="button"  tabindex="-1" id="pagar" name="pagar" style="position:absolute; top:-1000px">
    </fieldset>
  </form>
</div>
 
 

</body>

</html>
