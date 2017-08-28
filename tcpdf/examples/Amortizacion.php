<?php
//============================================================+
// File name   : example_048.php
// Begin       : 2009-03-20
// Last Update : 2013-05-14
//
// Description : Example 048 for TCPDF class
//               HTML tables and table headers
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: HTML tables and table headers
 * @author Nicola Asuni
 * @since 2009-03-20
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 048');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

// ----------------------------------------------------------------------------

// -----------------------------------------------------------------------------

// Table with rowspans and THEAD
$tbl = <<<EOD


    
    var combo = document.getElementById('seleccion');
        if(combo.options[combo.selectedIndex].value=="---"){
            alert("¡¡Selecciona un tipo de crédito!!");
        }else if(combo.options[combo.selectedIndex].text=="Crédito Simple de Nomina"){

           document.getElementById("tasanomina").value=document.getElementById("seleccion").value+"%";
            
        }else if(combo.options[combo.selectedIndex].text=="Crédito Simple"){
           document.getElementById("tasanomina").value=document.getElementById("seleccion").value+"%";
           
           
        }else if(combo.options[combo.selectedIndex].text=="Crédito c/Garantía Hipotecaria"){
           document.getElementById("tasanomina").value=document.getElementById("seleccion").value+"%";
        }else if(combo.options[combo.selectedIndex].text=="Crédito Hipotecario"){
           document.getElementById("tasanomina").value=document.getElementById("seleccion").value+"%";
        }else if(combo.options[combo.selectedIndex].text=="Crédito Refaccionario"){
           document.getElementById("tasanomina").value=document.getElementById("seleccion").value+"%";
        }else if(combo.options[combo.selectedIndex].text=="Arrendamiento Financiero"){
           document.getElementById("tasanomina").value=document.getElementById("seleccion").value+"%";
          
        }else if(combo.options[combo.selectedIndex].text=="Factoraje"){
           document.getElementById("tasanomina").value=document.getElementById("seleccion").value+"%";
        }else if(combo.options[combo.selectedIndex].text=="Préstamo Quirografario"){
           document.getElementById("tasanomina").value=document.getElementById("seleccion").value+"%";
         

            
        }else {
            document.getElementById("tasanomina").value=document.getElementById("seleccion").value+"%";
            
        }  
    


    var formatNumber = {
 separador: ",", // separador para los miles
 sepDecimal: '.', // separador para los decimales
 formatear:function (num){
 num +='';
 var splitStr = num.split(',');
 var splitLeft = splitStr[0];
 var splitRight = splitStr.length >1 ? this.sepDecimal + splitStr[1] : '';
 var regx = /(\d+)(\d{3})/;
 while (regx.test(splitLeft)) {
 splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
 }
 return this.simbol + splitLeft +splitRight;
 },
 new:function(num, simbol){
 this.simbol = simbol ||'';
 return this.formatear(num);
 }
}

function formatodenumero(id,valor){
  //alert(valor);
  var numFinal = formatNumber.new(valor,"$");
  document.getElementById(id).value=numFinal;
  //return numFinal;
}




  //document.getElementById('comisionnomina').value=(document.getElementById("montonomina").value*0.02).toFixed(2);
  var tasa=document.getElementById("tasanomina").value.replace("%","");
  var tiempo=document.getElementById('plazonomina').value;
  


  

  var montofin=document.getElementById("montonomina").value.replace("$","").replace(/,/gi,"");
  
  var segurpdes=document.getElementById("segurodesempleonomina").value.replace("$","").replace(/,/gi,"");
  var segurpvid=document.getElementById("segurovidanomina").value.replace("$","").replace(/,/gi,"");
  var selector=document.getElementById("selectnomina").value;
  var selector2=document.getElementById("selectsegdes").value;
  var selector3=document.getElementById("selectsegvid").value;
  totalafinanciar=0;
  if(selector=="1"){
     var comisionapertura=document.getElementById("montonomina").value.replace("$","").replace(/,/gi,"")*(document.getElementById("comisionnomina").value.replace("%","")/100);
    var totalafinanciar=montofin;
    
  
   
  }else if(selector=="2"){
    var comisionapertura=document.getElementById("montonomina").value.replace("$","").replace(/,/gi,"")*(document.getElementById("comisionnomina").value.replace("%","")/100);
    var totalafinanciar=parseFloat(montofin)+comisionapertura*1.16;
    
  
    
  }else{

  
    var totalafinanciar=montofin;
    var comisionapertura=document.getElementById("montonomina").value.replace("$","").replace(/,/gi,"")*0;
    document.getElementById("comisionnomina").value="0%";
  }




  if(selector2=="2"){
    pagosegdes=parseFloat(segurpdes/tiempo);
    

  }else{
    pagosegdes=0;
  }

  if(selector3=="2"){
    pagosegdes2=parseFloat(segurpvid/tiempo);
    

  }else{
    pagosegdes2=0;
  }

  
  
  //tasa mensual es intRate

  //pago=Math.floor((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;

  intRate=(tasa/100)/12;
  intRate2=((tasa*1.16)/100)/12

  months=tiempo;
  cuota=((totalafinanciar*intRate*1.16)/(1-Math.pow(1+intRate*1.16,(-1*months)))*100)/100;
  //pago=totalafinanciar*((intRate2*Math.pow(1+intRate2,months))/(Math.pow(1+intRate2,months)-1));
  alert(cuota);
  


  codigo="";
  codigo="<h2>Tabla de amortizacion<\/h2>";
  codigo+="<table class='table table-hover' width='100%' border='1' id='f'>"; 
  codigo+="<tr class='table-info'>"; 
  codigo+="<th>Balance inicial<\/th>"; 
  //codigo+="<th>Pago programado<\/th>"; 
  codigo+="<th>Capital<\/th>"; 
  codigo+="<th>Interés<\/th>"; 
  codigo+="<th>Balance final<\/th>"; 
  codigo+="<th>Iva de los intereses<\/th>"; 
   if(selector2=="2"){
    codigo+="<th>Seguro de Desempleo<\/th>";
  }
  if(selector3=="2"){
    codigo+="<th>Seguro de Vida<\/th>";
  }
  //codigo+="<th>Seguro de Vida<\/th>"; 
  codigo+="<th>Pago Total Programado<\/th>"; 
  codigo+="<\/tr>";


  falta=parseFloat(totalafinanciar);
  var sumbalance=0;
  var sumpaprog=0;
  var sumcap=0;
  var sumint=0;
  var sumbalncefin=0;
  var sumivaint=0;
  var sumpatoprog=0;


  for(a=1;a<=months;a++){ 

  codigo+="<tr  class='table-warning'>"; 
  codigo+="<td>"+formatNumber.new(falta.toFixed(2),"$");+"<\/td>"; 
  sumbalance+=falta;
  //codigo+="<td>"+pago+"<\/td>";
  //sumpaprog+=pago;
  intereses=(falta*intRate);
  ivaintereses=(falta*intRate*0.16);
  capital=cuota-(intereses)-(intereses*0.16);
  codigo+="<td>"+formatNumber.new(capital.toFixed(2),"$");+"<\/td>";
  sumcap+=capital;
  interes=falta*intRate;
  codigo+="<td>"; 
  codigo+=formatNumber.new(interes.toFixed(2),"$"); 
  codigo+="<\/td>"; 
  sumint+=interes;
  falta=falta-capital;
  codigo+="<td>"; 
  codigo+=formatNumber.new(falta.toFixed(2),"$"); 
  codigo+="<\/td>"; 
  sumbalncefin+=falta; 

  codigo+="<td>"; 
  codigo+=formatNumber.new(ivaintereses.toFixed(2),"$"); 
  codigo+="<\/td>"; 
  sumivaint+=ivaintereses;


if(selector2=="2"){
    codigo+="<td>"; 
  codigo+=formatNumber.new(pagosegdes.toFixed(2),"$"); 
  codigo+="<\/td>"; 
  }

  if(selector3=="2"){
    codigo+="<td>"; 
  codigo+=formatNumber.new(pagosegdes2.toFixed(2),"$"); 
  codigo+="<\/td>"; 
  }

  /*codigo+="<td>";
  if(a==1){codigo+=segurovida;}else{codigo+='0';}
  codigo+="<\/td>";
 */
  codigo+="<td>"; 
  //if(a==1){codigo+=(parseFloat(pago)+parseFloat(segurovida)).toFixed(2);}else{codigo+=pago.toFixed(2); }
  

    codigo+=formatNumber.new(parseFloat(cuota).toFixed(2),"$");
 
  
  codigo+="<\/td>"; 
  
    sumpatoprog+=parseFloat(cuota); 
  
  

  codigo+="<\/tr>"; 
  }
  codigo+="<th> Total </th>";
  if(selector2=="2"){
    columna="<td>"+formatNumber.new(segurpdes,"$")+"</td>";
  }else{
    columna="";
  }
  if(selector3=="2"){
    columna2="<td>"+formatNumber.new(segurpvid,"$")+"</td>";
  }else{
    columna2="";
  }
  codigo+="<tr><td></td><td>"+formatNumber.new(sumcap.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumint.toFixed(2),"$")+"</td><td></td><td>"+formatNumber.new(sumivaint.toFixed(2),"$")+"</td>"+columna+columna2+"<td>"+formatNumber.new(parseFloat(sumpatoprog).toFixed(2),"$")+"</td></tr>"; 
  codigo+="<\/table>"; 



  //var cat = CAT.get(totalafinanciar, 0, pagtotal, document.getElementById("plazonomina").value, 12);
  CAT=parseFloat((Math.pow(1+intRate,12)-1)*100);

  if(selector=="1" || selector=="2"){
    CAT+=parseFloat(document.getElementById("comisionnomina").value.replace("%",""));
   
    
  }

  if(selector2=="1" || selector2=="2"){
    CAT+=((segurpdes/montofin)*100);
    
  }

  if(selector3=="1" || selector3=="2"){
    CAT+=((segurpvid/montofin)*100);
    
  }

  if(selector=="1"){
     sumpatoprog+=parseFloat(comisionapertura*1.16);
  }
  if(selector2=="1"){
     sumpatoprog+=parseFloat(segurpdes);
  }
  if(selector3=="1"){
     sumpatoprog+=parseFloat(segurpvid);
  }
 

  document.getElementById('resultadoNomina').innerHTML = '<br><br><br>Plazo:'+ document.getElementById("plazonomina").value +' Meses<br>Monto solicitado: ' + document.getElementById("montonomina").value + '<br>Comision por Apertura: ' + formatNumber.new((comisionapertura*1.16).toFixed(2),"$") + '<br>Total a Financiar: ' + formatNumber.new(totalafinanciar,"$") + '<br>CAT: ' +CAT.toFixed(2)+'%<br>Total a Pagar: '+formatNumber.new(parseFloat(sumpatoprog).toFixed(2),"$")+'<br>' + codigo; 




    

    


EOD;

//$pdf->writeHTML($tbl, true, false, false, false, '');
$pdf -> IncludeJS($tbl);


// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================