

seleccion="";

function inicio(){
            document.getElementById("contenido").style.display='none';
      }
      
     function capturar()
    {
    var combo = document.getElementById('seleccion');
        if(combo.options[combo.selectedIndex].value=="---"){
            alert("¡¡Selecciona un tipo de crédito!!");
            document.getElementById("contenido").style.display='none';
             document.getElementById("contenidoNomina").style.display='none';
            document.getElementById("contenidocreditosimple").style.display = 'none';
            document.getElementById("contenidocreditoghipotecaria").style.display = 'none';
            document.getElementById("contenidocreditorefaccionario").style.display = 'none';
            document.getElementById("contenidocreditoarrendamiento").style.display = 'none';
            document.getElementById("contenidocreditofactoraje").style.display = 'none';
            document.getElementById("contenidocreditoquirografario").style.display = 'none';




        }else if(combo.options[combo.selectedIndex].text=="Crédito Simple de Nomina"){

           document.getElementById("tasanomina").value=document.getElementById("seleccion").value+"%";
            document.getElementById("contenidoNomina").style.display = 'block';
            document.getElementById("contenidocreditoquirografario").style.display = 'none';
            document.getElementById("contenidocreditofactoraje").style.display = 'none';
            document.getElementById("contenidocreditoarrendamiento").style.display = 'none';
            document.getElementById("contenidocreditosimple").style.display = 'none';
            document.getElementById("contenidocreditoghipotecaria").style.display = 'none';
            document.getElementById("contenido").style.display='none';
            document.getElementById("contenidocreditohipotecario").style.display = 'none';
            document.getElementById("contenidocreditorefaccionario").style.display = 'none';


            
        }else if(combo.options[combo.selectedIndex].text=="Crédito Simple"){

           document.getElementById("tasacreditosimple").value=document.getElementById("seleccion").value+"%";
            document.getElementById("contenidocreditosimple").style.display = 'block';
            document.getElementById("contenidocreditoquirografario").style.display = 'none';
            document.getElementById("contenidocreditofactoraje").style.display = 'none';
            document.getElementById("contenidocreditoarrendamiento").style.display = 'none';
            document.getElementById("contenidoNomina").style.display = 'none';
            document.getElementById("contenidocreditoghipotecaria").style.display = 'none';
            document.getElementById("contenidocreditohipotecario").style.display = 'none';
            document.getElementById("contenidocreditorefaccionario").style.display = 'none';
            document.getElementById("contenido").style.display='none';
        }else if(combo.options[combo.selectedIndex].text=="Crédito c/Garantía Hipotecaria"){

           document.getElementById("tasacreditoghipotecaria").value=document.getElementById("seleccion").value+"%";
           document.getElementById("contenidocreditoghipotecaria").style.display = 'block';
           document.getElementById("contenidocreditoquirografario").style.display = 'none';
           document.getElementById("contenidocreditofactoraje").style.display = 'none';
           document.getElementById("contenidocreditoarrendamiento").style.display = 'none';
           document.getElementById("contenidocreditorefaccionario").style.display = 'none';
           document.getElementById("contenidocreditohipotecario").style.display = 'none';
            document.getElementById("contenidocreditosimple").style.display = 'none';
            document.getElementById("contenidoNomina").style.display = 'none';
            document.getElementById("contenido").style.display='none';
        }else if(combo.options[combo.selectedIndex].text=="Crédito Hipotecario"){

           document.getElementById("tasacreditohipotecario").value=document.getElementById("seleccion").value+"%";
           document.getElementById("contenidocreditoghipotecaria").style.display = 'none';
           document.getElementById("contenidocreditoquirografario").style.display = 'none';
           document.getElementById("contenidocreditofactoraje").style.display = 'none';
           document.getElementById("contenidocreditorefaccionario").style.display = 'none';
           document.getElementById("contenidocreditoarrendamiento").style.display = 'none';
           document.getElementById("contenidocreditohipotecario").style.display = 'block';
            document.getElementById("contenidocreditosimple").style.display = 'none';
            document.getElementById("contenidoNomina").style.display = 'none';
            document.getElementById("contenido").style.display='none';
        }else if(combo.options[combo.selectedIndex].text=="Crédito Refaccionario"){

           document.getElementById("tasacreditorefaccionario").value=document.getElementById("seleccion").value+"%";
           document.getElementById("contenidocreditoghipotecaria").style.display = 'none';
           document.getElementById("contenidocreditoquirografario").style.display = 'none';
           document.getElementById("contenidocreditorefaccionario").style.display = 'block';
           document.getElementById("contenidocreditofactoraje").style.display = 'none';
           document.getElementById("contenidocreditoarrendamiento").style.display = 'none';
           document.getElementById("contenidocreditohipotecario").style.display = 'none';
            document.getElementById("contenidocreditosimple").style.display = 'none';
            document.getElementById("contenidoNomina").style.display = 'none';
            document.getElementById("contenido").style.display='none';
        }else if(combo.options[combo.selectedIndex].text=="Arrendamiento Financiero"){

           document.getElementById("tasacreditoarrendamiento").value=document.getElementById("seleccion").value+"%";
           document.getElementById("contenidocreditoghipotecaria").style.display = 'none';
           document.getElementById("contenidocreditorefaccionario").style.display = 'none';
           document.getElementById("contenidocreditofactoraje").style.display = 'none';
           document.getElementById("contenidocreditoarrendamiento").style.display = 'block';
           document.getElementById("contenidocreditohipotecario").style.display = 'none';
            document.getElementById("contenidocreditosimple").style.display = 'none';
            document.getElementById("contenidoNomina").style.display = 'none';
            document.getElementById("contenido").style.display='none';
            document.getElementById("contenidocreditoquirografario").style.display = 'none';


            
        }else if(combo.options[combo.selectedIndex].text=="Factoraje"){

           document.getElementById("tasacreditofactoraje").value=document.getElementById("seleccion").value+"%";
           document.getElementById("contenidocreditoghipotecaria").style.display = 'none';
           document.getElementById("contenidocreditoquirografario").style.display = 'none';
           document.getElementById("contenidocreditorefaccionario").style.display = 'none';
           document.getElementById("contenidocreditofactoraje").style.display = 'block';
           document.getElementById("contenidocreditoarrendamiento").style.display = 'none';
           document.getElementById("contenidocreditohipotecario").style.display = 'none';
            document.getElementById("contenidocreditosimple").style.display = 'none';
            document.getElementById("contenidoNomina").style.display = 'none';
            document.getElementById("contenido").style.display='none';


            
        }else if(combo.options[combo.selectedIndex].text=="Préstamo Quirografario"){

           document.getElementById("tasacreditoquirografario").value=document.getElementById("seleccion").value+"%";
           document.getElementById("contenidocreditoghipotecaria").style.display = 'none';
           document.getElementById("contenidocreditoquirografario").style.display = 'block';
           document.getElementById("contenidocreditorefaccionario").style.display = 'none';
           document.getElementById("contenidocreditofactoraje").style.display = 'none';
           document.getElementById("contenidocreditoarrendamiento").style.display = 'none';
           document.getElementById("contenidocreditohipotecario").style.display = 'none';
            document.getElementById("contenidocreditosimple").style.display = 'none';
            document.getElementById("contenidoNomina").style.display = 'none';
            document.getElementById("contenido").style.display='none';


            
        }else {
            document.getElementById("contenido").style.display = 'block';
            document.getElementById("contenidoNomina").style.display='none';
            document.getElementById("contenidocreditosimple").style.display = 'none';
            document.getElementById("contenidocreditoghipotecaria").style.display = 'none';
            document.getElementById("contenidocreditorefaccionario").style.display = 'none';
            document.getElementById("contenidocreditoarrendamiento").style.display = 'none';
            document.getElementById("contenidocreditofactoraje").style.display = 'none';
            document.getElementById("contenidocreditoquirografario").style.display = 'none';
            
            document.getElementById("12meses").innerHTML = "$0";
            document.getElementById("18meses").innerHTML = "$0";
            document.getElementById("24meses").innerHTML = "$0";
            document.getElementById("36meses").innerHTML = "$0";
            document.getElementById("48meses").innerHTML = "$0";
            document.getElementById("6meses").innerHTML = "$0";
            document.getElementById("monto").innerHTML = "$0";
            document.getElementById("pagos").innerHTML = "$0";
            document.getElementById("pepe").innerHTML = "";
            
        }  
    } 
    




  function clicked_valor(){
        var sutring="";
        var cont=0;
        var valor=document.getElementById("valor").value;

        //if(document.getElementById('seleccion')[0].checked){
         //  document.getElementById("valor2").min = valor*0.10; 
        //}

        var combo = document.getElementById('seleccion');
            if(combo.selectedIndex<0){
                alert('No hay opción seleccionada');
            }                 
            else if(combo.options[combo.selectedIndex].text=="Auto nuevo") {
                document.getElementById("valor2").min = valor*0.10;
            }if(combo.options[combo.selectedIndex].text=="Semi nuevo") {
                document.getElementById("valor2").min = valor*0.30;
            }else{
                //document.getElementById("valor2").min = valor*0.01;
            }
                 




        document.getElementById("valor2").max = valor*0.90;
        for(var i=valor.length-1;i>=0;i--){
                
                if (valor.charAt(i)==".") {cont=-1;}
                if(cont==3){
                sutring+=",";
                cont=0;
                }
                sutring+=valor.charAt(i);
                
                cont++;
        }
        valor="";
        for(var i=sutring.length;i>=0;i--){
                valor+=sutring.charAt(i);
        }
        
        document.getElementById("price").value="$"+valor;
        clicked_valor2();
        
        
}

function clicked_valor2(){
        var sustring="";
        var cont=0;
        var valor2=document.getElementById("valor2").value;
        for(var i=valor2.length-1;i>=0;i--){
                
                if (valor2.charAt(i)==".") {cont=-1;}
                if(cont==3){
                sustring+=",";
                cont=0;
                }
                sustring+=valor2.charAt(i);
                
                cont++;
        }
        valor2="";
        for(var i=sustring.length;i>=0;i--){
                valor2+=sustring.charAt(i);
        }
        document.getElementById("price2").value="$"+valor2;
        
}

function clicked_text1(){
        var sutring="";
        var cont=0;
        var valor=document.getElementById("price").value;
        
        valor=valor.replace("$", "");
        valor=valor.replace(",", "");
         if (isNaN(valor)) {
            alert(valor);
            document.getElementById("price").value="$";
            return false;
         }
        if(valor>1000000){
                document.getElementById("valor").value=1000000;
                document.getElementById("valor2").max = 1000000;
                document.getElementById("price").value="$1,000,000";
        }else{
                document.getElementById("valor").value=valor;

            var combo = document.getElementById('seleccion');
            if(combo.selectedIndex<0){
                alert('No hay opción seleccionada');
            }                 
            else if(combo.options[combo.selectedIndex].text=="Auto nuevo") {
                document.getElementById("valor2").min = 0;
            }if(combo.options[combo.selectedIndex].text=="Semi nuevo") {
                document.getElementById("valor2").min = 0;
            }else{
                //document.getElementById("valor2").min = valor*0.01;
            }
                 


                document.getElementById("valor2").max = valor*0.90;
        for(var i=valor.length-1;i>=0;i--){
                
             if (valor.charAt(i)==".") {cont=-1;}   
                if(cont==3){
                sutring+=",";
                cont=0;
                }
                sutring+=valor.charAt(i);
                
                cont++;
        }
        valor="";
        for(var i=sutring.length;i>=0;i--){
                valor+=sutring.charAt(i);
        }
        
        document.getElementById("price").value="$"+valor;
        clicked_valor2();
        
        }
        
        
}


function clicked_text2(){

        var sutring="";
        var cont=0;
        var valor2=document.getElementById("price2").value;
       
        valor2=valor2.replace("$", "");
        valor2=valor2.replace(",", "");
         if (isNaN(valor2)) {
            alert("no es numero");
            document.getElementById("price2").value="$";
            return false;
         }
        if(valor2>parseInt(document.getElementById("valor").value)){
                document.getElementById("valor2").value=valor2;
                document.getElementById("price2").value=document.getElementById("price").value;
        }else{
                        document.getElementById("valor2").value=valor2;
        
        for(var i=valor2.length-1;i>=0;i--){
                
                if (valor2.charAt(i)==".") {cont=-1;}
                if(cont==3){

                sutring+=",";
                cont=0;
                }
                sutring+=valor2.charAt(i);
                
                cont++;
        }
        valor2="";
        for(var i=sutring.length;i>=0;i--){
                valor2+=sutring.charAt(i);
        }
        
        document.getElementById("price2").value="$"+valor2;
        
        
        
        }
        
}


function pagototal(tiempo){
var montofin=document.getElementById("valor").value-document.getElementById("valor2").value;
var tasa=document.getElementById("seleccion").value;
var totalafinanciar=montofin*.97;
/*
intRate=(tasa/100)/12;
months=tiempo;
cuota=Math.floor((montofin*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
falta=montofin; 
interestotal=0;
tasa=tasa/100;
for(a=1;a<=months;a++){
capital=cuota-(falta*(tasa/12));
interes=falta*(tasa/12);
falta=falta-capital;
interestotal+=interes;

}
ivaintereses=(interestotal*16)/100;
ivaint=ivaintereses/months;
var pagtotal=0;
pagtotal=cuota+ivaint;
*/

  intRate=(tasa/100)/12;
  intRate2=((tasa*1.16)/100)/12

  months=tiempo;
  //cuota=((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
  pago=totalafinanciar*((intRate2*Math.pow(1+intRate2,months))/(Math.pow(1+intRate2,months)-1));
  



return pago.toFixed(2);
}

function CalcularPago6(pag){
var segurovida=document.getElementById("segurovida").value;
document.getElementById("monto").innerHTML = formatNumber.new((document.getElementById("valor").value*0.97-document.getElementById("valor2").value-segurovida).toFixed(2), "$");
document.getElementById("pagos").innerHTML = formatNumber.new(pagototal(pag),"$");
 document.getElementById("comisionaperturaautos").innerHTML = formatNumber.new(document.getElementById("valor").value*0.03,"$");

 
document.getElementById("6meses").innerHTML = formatNumber.new(pagototal(6),"$");


document.getElementById("12meses").innerHTML = formatNumber.new(pagototal(12),"$");

document.getElementById("18meses").innerHTML = formatNumber.new(pagototal(18),"$");

document.getElementById("24meses").innerHTML = formatNumber.new(pagototal(24),"$");

document.getElementById("36meses").innerHTML = formatNumber.new(pagototal(36),"$");

document.getElementById("48meses").innerHTML = formatNumber.new(pagototal(48),"$");
document.getElementById("pepe").style.display = 'none';

calculaTabla(pag);
}




function calculaTabla(meses){ 
document.getElementById("pepe").style.display = 'block';
var segurovida=document.getElementById("segurovida").value;
var montofin=document.getElementById("valor").value-document.getElementById("valor2").value-document.getElementById("valor").value*.03-segurovida;
var tasa=document.getElementById("seleccion").value;
var eng=document.getElementById("valor2").value;
var monT=document.getElementById("valor").value;





 intRate=(tasa/100)/12;
  intRate2=((tasa*1.16)/100)/12

  months=meses;
  //cuota=((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
  pago=montofin*((intRate2*Math.pow(1+intRate2,months))/(Math.pow(1+intRate2,months)-1));
  

  codigo="";
  codigo="<h2>Tabla de amortizacion<\/h2>"
  codigo+="<table class='table table-hover' width='100%' border='0' id='f'>"; 
  codigo+="<tr class='table-info'>"; 
  codigo+="<th>Balance inicial<\/th>"; 
  //codigo+="<th>Pago programado<\/th>"; 
  codigo+="<th>Capital<\/th>"; 
  codigo+="<th>Interés<\/th>"; 
  codigo+="<th>Balance final<\/th>"; 
  codigo+="<th>Iva de los intereses<\/th>"; 
  codigo+="<th>Pago Total Programado<\/th>"; 
  codigo+="<\/tr>";


  falta=montofin;
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
  capital=pago-(intereses+ivaintereses);
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

  codigo+="<td>"; 
  codigo+=formatNumber.new(pago.toFixed(2),"$"); 
  codigo+="<\/td>"; 
  sumpatoprog+=pago; 

  codigo+="<\/tr>"; 
  }
  codigo+="<th> Total </th>";
  codigo+="<tr><td></td><td>"+formatNumber.new(sumcap.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumint.toFixed(2),"$")+"</td><td></td><td>"+formatNumber.new(sumivaint.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumpatoprog.toFixed(2),"$")+"</td></tr>"; 
  codigo+="<\/table>"; 

/*
intRate=(tasa/100)/12;
months=meses;
pago=Math.floor((montofin*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
codigo="<h2>Tabla de amortizacion<\/h2>"
codigo+="<table class='table table-hover' width='100%' border='0' id='f'>"; 
codigo+="<tr class='table-info'>"; 
codigo+="<th>Balance inicial<\/th>"; 
codigo+="<th>Pago programado<\/th>"; 
codigo+="<th>Capital<\/th>"; 
codigo+="<th>Interés<\/th>"; 
codigo+="<th>Balance final<\/th>"; 
codigo+="<th>Iva de los intereses<\/th>"; 
codigo+="<th>Pago Total Programado<\/th>"; 
codigo+="<\/tr>";

falta=montofin; 
interestotal=0;
tasa=tasa/100;
for(a=1;a<=months;a++){
capital=pago-(falta*(tasa/12));
interes=falta*(tasa/12);
falta=falta-capital;
interestotal+=interes;

}
ivaintereses=(interestotal*16)/100;
ivaint=ivaintereses/months;
var pagtotal=0;
pagtotal=pago+ivaint;
falta=montofin;

for(a=1;a<=months;a++){ 

codigo+="<tr  class='table-warning'>"; 
codigo+="<td>"+falta.toFixed(2);+"<\/td>"; 
codigo+="<td>"+pago+"<\/td>";
capital=pago-(falta*(tasa/12));
codigo+="<td>"+capital.toFixed(2);+"<\/td>";
interes=falta*(tasa/12);
codigo+="<td>"; 
codigo+=interes.toFixed(2);; 
codigo+="<\/td>"; 
falta=falta-capital;
codigo+="<td>"; 
codigo+=falta.toFixed(2); 
codigo+="<\/td>"; 

codigo+="<td>"; 
codigo+=ivaint.toFixed(2); 
codigo+="<\/td>"; 

codigo+="<td>"; 
codigo+=pagtotal.toFixed(2); 
codigo+="<\/td>"; 

codigo+="<\/tr>"; 
} 
codigo+="<\/table>"; 
*/
 document.getElementById("pepe").innerHTML =codigo;
//var cat = CAT.get(monT, eng+document.getElementById("valor").value*.03, pago, months, 12);
 CAT=(Math.pow(1+intRate,12)-1)*100+3+(segurovida/monT)*100;
 document.getElementById('CATp').innerHTML = CAT.toFixed(2)+"%";
//document.getElementById('CATp').innerHTML = cat['formatted'] + "%"; 
} 

function clickedtabla(){
        document.getElementById('tablalink').onclick=function(){
        calculaTabla(seleccion);
        };
}


window.CAT = (function(){
  function getCATValue(total, charge, pay, payments, periods, cat){
    var i = 0;
    var value = charge / Math.pow((1+(cat/100)), 0/periods);
    
    for(i = 1; i <= payments; i++){
      value += pay / Math.pow((1+(cat/100)), i/periods);
    }
    return total - value;
  }
  var CAT = {
    get: function(amount, charge, byPeriod, totalPayments, periodsByYear){
      var cat = 50, cat_min = 0, cat_max = 0, temp_cat;

      var counter = 0, tempVal;
      
      do{
        tempVal = getCATValue(amount, charge, byPeriod, totalPayments, periodsByYear, cat);
        if(tempVal > 0){
          temp_cat = cat;
          cat = (cat+cat_min)/2;
          cat_max = temp_cat;
        }else if(cat_max == 0){
          cat_min = cat;
          cat = cat + 50;
        }else{
          temp_cat = cat;
          cat = (cat+cat_max)/2;
          cat_min=temp_cat;
        }
        counter++;
      }while(counter <= 25);
      
      return {num: cat, formatted: cat.toFixed(2)}
    }
  };
  return CAT;
}());


function CalculaNomina(){

  //document.getElementById('comisionnomina').value=(document.getElementById("montonomina").value*0.02).toFixed(2);
  var tasa=document.getElementById("seleccion").value;
  var tiempo=document.getElementById('plazonomina').value;
  
  var comisionapertura=document.getElementById("montonomina").value.replace("$","").replace(/,/gi,"")*0.03;

  var montofin=document.getElementById("montonomina").value.replace("$","").replace(/,/gi,"");
  var segurovida=document.getElementById("segurovidanomina").value.replace("$","").replace(/,/gi,"");

  var selector=document.getElementById("selectnomina").value;
  totalafinanciar=0;
  if(selector=="1"){
    var totalafinanciar=montofin;
  }else if(selector=="2"){
    var totalafinanciar=parseFloat(montofin)+comisionapertura*1.16;
  }else{
    var totalafinanciar=montofin;
  }

  var selector2=document.getElementById("selectsegdes").value;

  
  //tasa mensual es intRate

  //pago=Math.floor((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;

  intRate=(tasa/100)/12;
  intRate2=((tasa*1.16)/100)/12

  months=tiempo;
  cuota=((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
  //pago=totalafinanciar*((intRate2*Math.pow(1+intRate2,months))/(Math.pow(1+intRate2,months)-1));
  

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
  //codigo+="<th>Seguro de Vida<\/th>"; 
  codigo+="<th>Pago Total Programado<\/th>"; 
  codigo+="<\/tr>";


  falta=totalafinanciar;
  var sumbalance=0;
  var sumpaprog=0;
  var sumcap=0;
  var sumint=0;
  var sumbalncefin=0;
  var sumivaint=0;
  var sumpatoprog=0;


  for(a=1;a<=months;a++){ 

  codigo+="<tr  class='table-warning'>"; 
  codigo+="<td>"+formatNumber.new(falta,"$");+"<\/td>"; 
  sumbalance+=falta;
  //codigo+="<td>"+pago+"<\/td>";
  //sumpaprog+=pago;
  intereses=(falta*intRate);
  ivaintereses=(falta*intRate*0.16);
  capital=cuota-(intereses);
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

  /*codigo+="<td>";
  if(a==1){codigo+=segurovida;}else{codigo+='0';}
  codigo+="<\/td>";
 */
  codigo+="<td>"; 
  //if(a==1){codigo+=(parseFloat(pago)+parseFloat(segurovida)).toFixed(2);}else{codigo+=pago.toFixed(2); }
  codigo+=formatNumber.new((cuota+ivaintereses).toFixed(2),"$");
  codigo+="<\/td>"; 
  sumpatoprog+=cuota+ivaintereses; 

  codigo+="<\/tr>"; 
  }
  codigo+="<th> Total </th>";
  codigo+="<tr><td></td><td>"+formatNumber.new(sumcap.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumint.toFixed(2),"$")+"</td><td></td><td>"+formatNumber.new(sumivaint.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumpatoprog.toFixed(2),"$")+"</td></tr>"; 
  codigo+="<\/table>"; 



  //var cat = CAT.get(totalafinanciar, 0, pagtotal, document.getElementById("plazonomina").value, 12);
 if(selector=="1"){
    sumpatoprog=sumpatoprog+comisionapertura*1.16;
    CAT=(Math.pow(1+intRate,12)-1)*100+2.52+(segurovida/montofin)*100;
  }else if(selector=="2"){
    sumpatoprog=sumpatoprog;
    CAT=(Math.pow(1+intRate,12)-1)*100+2.52+(segurovida/montofin)*100;
  }else{
     sumpatoprog=sumpatoprog;
     CAT=(Math.pow(1+intRate,12)-1)*100+(segurovida/montofin)*100;
  }


  document.getElementById('resultadoNomina').innerHTML = '<br><br><br>Plazo:'+ document.getElementById("plazonomina").value +' Meses<br>Monto solicitado: ' + document.getElementById("montonomina").value + '<br>Comision por Apertura: ' + formatNumber.new((comisionapertura*1.16).toFixed(2),"$") + '<br>Total a Financiar: ' + formatNumber.new(totalafinanciar,"$") + '<br>CAT: ' +CAT.toFixed(2)+'%<br>Total a Pagar: '+formatNumber.new((sumpatoprog).toFixed(2),"$")+'<br>' + codigo; 





}

function Calculacreditosimple(){

  //document.getElementById('comisionnomina').value=(document.getElementById("montonomina").value*0.02).toFixed(2);
  var tasa=document.getElementById("seleccion").value;
  var tiempo=document.getElementById('plazocreditosimple').value;
  var comisionapertura=document.getElementById("montocreditosimple").value.replace("$","").replace(/,/gi,"")*0.03;

  var montofin=document.getElementById("montocreditosimple").value.replace("$","").replace(/,/gi,"");

  var totalafinanciar=montofin-comisionapertura;

  //tasa mensual es intRate
  intRate=(tasa/12)/100;
  months=tiempo;
  //pago=Math.floor((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;

  intRate=(tasa/100)/12;
  months=tiempo;
  cuota=Math.floor((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
  falta=montofin; 
  interestotal=0;
  tasa=tasa/100;
  for(a=1;a<=months;a++){
  capital=cuota-(falta*(tasa/12));
  interes=falta*(tasa/12);
  falta=falta-capital;
  interestotal+=interes;

  }
  ivaintereses=(interestotal*16)/100;
  ivaint=ivaintereses/months;
  var pagtotal=0;
  pagtotal=cuota+ivaint;

  pago=pagtotal;

  //pago=((intRate*Math.pow(1+intRate, months))*montofin)/((Math.pow(1+intRate, months))-1);
  /*
  falta=totalafinanciar; 
  interestotal=0;
  tasa=tasa/100;
  for(a=1;a<=months;a++){
  capital=pago-(falta*(tasa/12));
  interes=falta*(tasa/12);
  falta=falta-capital;
  interestotal+=interes;

  }
  ivaintereses=(interestotal*16)/100;
  ivaint=ivaintereses/months;
  var pagtotal=0;
  pagtotal=pago+ivaint;
  */


  codigo="";
  codigo="<h2>Tabla de amortizacion<\/h2>"
  codigo+="<table class='table table-hover' width='100%' border='0' id='f'>"; 
  codigo+="<tr class='table-info'>"; 
  codigo+="<th>Balance inicial<\/th>"; 
  //codigo+="<th>Pago programado<\/th>"; 
  codigo+="<th>Capital<\/th>"; 
  codigo+="<th>Interés<\/th>"; 
  codigo+="<th>Balance final<\/th>"; 
  codigo+="<th>Iva de los intereses<\/th>"; 
  codigo+="<th>Pago Total Programado<\/th>"; 
  codigo+="<\/tr>";


  falta=totalafinanciar;
  var sumbalance=0;
  var sumpaprog=0;
  var sumcap=0;
  var sumint=0;
  var sumbalncefin=0;
  var sumivaint=0;
  var sumpatoprog=0;


  for(a=1;a<=months;a++){ 

  codigo+="<tr  class='table-warning'>"; 
  codigo+="<td>"+falta.toFixed(2);+"<\/td>"; 
  sumbalance+=falta;
  //codigo+="<td>"+pago+"<\/td>";
  //sumpaprog+=pago;
  intereses=(falta*intRate);
  ivaintereses=(falta*intRate*0.16);
  capital=pago-(intereses+ivaintereses);
  codigo+="<td>"+capital.toFixed(2);+"<\/td>";
  sumcap+=capital;
  interes=falta*intRate;
  codigo+="<td>"; 
  codigo+=interes.toFixed(2);; 
  codigo+="<\/td>"; 
  sumint+=interes;
  falta=falta-capital;
  codigo+="<td>"; 
  codigo+=falta.toFixed(2); 
  codigo+="<\/td>"; 
  sumbalncefin+=falta; 

  codigo+="<td>"; 
  codigo+=ivaintereses.toFixed(2); 
  codigo+="<\/td>"; 
  sumivaint+=ivaintereses;

  codigo+="<td>"; 
  codigo+=pago.toFixed(2); 
  codigo+="<\/td>"; 
  sumpatoprog+=pago; 

  codigo+="<\/tr>"; 
  }
  codigo+="<th> Total </th>";
  codigo+="<tr><td></td><td>"+sumcap.toFixed(2)+"</td><td>"+sumint.toFixed(2)+"</td><td></td><td>"+sumivaint.toFixed(2)+"</td><td>"+sumpatoprog.toFixed(2)+"</td></tr>"; 
  codigo+="<\/table>"; 

  CAT=(Math.pow(1+intRate,12)-1)*100+3;

  //var cat = CAT.get(totalafinanciar, 0, pagtotal, document.getElementById("plazonomina").value, 12);


  document.getElementById('resultadoNomina').innerHTML = '<br><br><br>Plazo:'+ document.getElementById("plazonomina").value +' Meses<br>Monto solicitado: $' + document.getElementById("montonomina").value + '<br>Comision por Apertura: $' + comisionapertura + '<br>Total a Financiar: $' + totalafinanciar + '<br>CAT: ' +CAT.toFixed(2)+'%<br>' + codigo; 





}

function Calculacreditoghipotecaria(){

  //document.getElementById('comisionnomina').value=(document.getElementById("montonomina").value*0.02).toFixed(2);
  var tasa=document.getElementById("seleccion").value;
  var tiempo=document.getElementById('plazocreditoghipotecaria').value;
  var comisionapertura=document.getElementById("montocreditoghipotecaria").value.replace("$","").replace(/,/gi,"")*0.03;

  var montofin=document.getElementById("montocreditoghipotecaria").value.replace("$","").replace(/,/gi,"");

  var totalafinanciar=montofin-comisionapertura;

  //tasa mensual es intRate

  //pago=Math.floor((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;

  intRate=(tasa/100)/12;
  intRate2=((tasa*1.16)/100)/12

  months=tiempo;
  //cuota=((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
  pago=totalafinanciar*((intRate2*Math.pow(1+intRate2,months))/(Math.pow(1+intRate2,months)-1));
  

  codigo="";
  codigo="<h2>Tabla de amortizacion<\/h2>"
  codigo+="<table class='table table-hover' width='100%' border='0' id='f'>"; 
  codigo+="<tr class='table-info'>"; 
  codigo+="<th>Balance inicial<\/th>"; 
  //codigo+="<th>Pago programado<\/th>"; 
  codigo+="<th>Capital<\/th>"; 
  codigo+="<th>Interés<\/th>"; 
  codigo+="<th>Balance final<\/th>"; 
  codigo+="<th>Iva de los intereses<\/th>"; 
  codigo+="<th>Pago Total Programado<\/th>"; 
  codigo+="<\/tr>";


  falta=totalafinanciar;
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
  capital=pago-(intereses+ivaintereses);
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

  /*codigo+="<td>";
  if(a==1){codigo+=segurovida;}else{codigo+='0';}
  codigo+="<\/td>";
 */
  codigo+="<td>"; 
  //if(a==1){codigo+=(parseFloat(pago)+parseFloat(segurovida)).toFixed(2);}else{codigo+=pago.toFixed(2); }
  codigo+=formatNumber.new(pago.toFixed(2),"$");
  codigo+="<\/td>"; 
  sumpatoprog+=pago; 

  codigo+="<\/tr>"; 
  }
  codigo+="<th> Total </th>";
  codigo+="<tr><td></td><td>"+formatNumber.new(sumcap.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumint.toFixed(2),"$")+"</td><td></td><td>"+formatNumber.new(sumivaint.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumpatoprog.toFixed(2),"$")+"</td></tr>"; 
  codigo+="<\/table>"; 

  CAT=(Math.pow(1+intRate,12)-1)*100+3;

  //var cat = CAT.get(totalafinanciar, 0, pagtotal, document.getElementById("plazonomina").value, 12);


  document.getElementById('resultadocreditoghipotecaria').innerHTML = '<br><br><br>Plazo:'+ document.getElementById("plazocreditoghipotecaria").value +' Meses<br>Monto solicitado: ' + document.getElementById("montocreditoghipotecaria").value + '<br>Comision por Apertura: ' + formatNumber.new(comisionapertura.toFixed(2),"$") + '<br>Total a Financiar: ' + formatNumber.new(totalafinanciar.toFixed(2),"$") + '<br>CAT: ' +CAT.toFixed(2)+'%<br>' + codigo; 





}

function Calculacreditohipotecario(){

  //document.getElementById('comisionnomina').value=(document.getElementById("montonomina").value*0.02).toFixed(2);
  var tasa=document.getElementById("seleccion").value;
  var tiempo=document.getElementById('plazocreditohipotecario').value;
  var comisionapertura=document.getElementById("montocreditohipotecario").value.replace("$","").replace(/,/gi,"")*0.03;

  var montofin=document.getElementById("montocreditohipotecario").value.replace("$","").replace(/,/gi,"");

  var totalafinanciar=montofin-comisionapertura;

  //tasa mensual es intRate

  //pago=Math.floor((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;

  intRate=(tasa/100)/12;
  intRate2=((tasa*1.16)/100)/12

  months=tiempo;
  //cuota=((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
  pago=totalafinanciar*((intRate2*Math.pow(1+intRate2,months))/(Math.pow(1+intRate2,months)-1));
  

  codigo="";
  codigo="<h2>Tabla de amortizacion<\/h2>"
  codigo+="<table class='table table-hover' width='100%' border='0' id='f'>"; 
  codigo+="<tr class='table-info'>"; 
  codigo+="<th>Balance inicial<\/th>"; 
  //codigo+="<th>Pago programado<\/th>"; 
  codigo+="<th>Capital<\/th>"; 
  codigo+="<th>Interés<\/th>"; 
  codigo+="<th>Balance final<\/th>"; 
  codigo+="<th>Iva de los intereses<\/th>"; 
  codigo+="<th>Pago Total Programado<\/th>"; 
  codigo+="<\/tr>";


  falta=totalafinanciar;
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
  capital=pago-(intereses+ivaintereses);
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

  /*codigo+="<td>";
  if(a==1){codigo+=segurovida;}else{codigo+='0';}
  codigo+="<\/td>";
 */
  codigo+="<td>"; 
  //if(a==1){codigo+=(parseFloat(pago)+parseFloat(segurovida)).toFixed(2);}else{codigo+=pago.toFixed(2); }
  codigo+=formatNumber.new(pago.toFixed(2),"$");
  codigo+="<\/td>"; 
  sumpatoprog+=pago; 

  codigo+="<\/tr>"; 
  }
  codigo+="<th> Total </th>";
  codigo+="<tr><td></td><td>"+formatNumber.new(sumcap.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumint.toFixed(2),"$")+"</td><td></td><td>"+formatNumber.new(sumivaint.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumpatoprog.toFixed(2),"$")+"</td></tr>"; 
  codigo+="<\/table>"; 

  CAT=(Math.pow(1+intRate,12)-1)*100+3;

  //var cat = CAT.get(totalafinanciar, 0, pagtotal, document.getElementById("plazonomina").value, 12);


  document.getElementById('resultadocreditohipotecario').innerHTML = '<br><br><br>Plazo:'+ document.getElementById("plazocreditohipotecario").value +' Meses<br>Monto solicitado: ' + document.getElementById("montocreditohipotecario").value + '<br>Comision por Apertura: $' + formatNumber.new(comisionapertura.toFixed(2),"$") + '<br>Total a Financiar: $' + formatNumber.new(totalafinanciar.toFixed(2),"$") + '<br>CAT: ' +CAT.toFixed(2)+'%<br>' + codigo; 





}


function Calculacreditorefaccionario(){

  //document.getElementById('comisionnomina').value=(document.getElementById("montonomina").value*0.02).toFixed(2);
  var tasa=document.getElementById("seleccion").value;
  var tiempo=document.getElementById('plazocreditorefaccionario').value;
  var comisionapertura=document.getElementById("montocreditorefaccionario").value.replace("$","").replace(/,/gi,"")*0.03;

  var montofin=document.getElementById("montocreditorefaccionario").value.replace("$","").replace(/,/gi,"");

  var totalafinanciar=montofin-comisionapertura;

  //tasa mensual es intRate

  //pago=Math.floor((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;

  intRate=(tasa/100)/12;
  intRate2=((tasa*1.16)/100)/12

  months=tiempo;
  //cuota=((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
  pago=totalafinanciar*((intRate2*Math.pow(1+intRate2,months))/(Math.pow(1+intRate2,months)-1));
  

  codigo="";
  codigo="<h2>Tabla de amortizacion<\/h2>"
  codigo+="<table class='table table-hover' width='100%' border='0' id='f'>"; 
  codigo+="<tr class='table-info'>"; 
  codigo+="<th>Balance inicial<\/th>"; 
  //codigo+="<th>Pago programado<\/th>"; 
  codigo+="<th>Capital<\/th>"; 
  codigo+="<th>Interés<\/th>"; 
  codigo+="<th>Balance final<\/th>"; 
  codigo+="<th>Iva de los intereses<\/th>"; 
  codigo+="<th>Pago Total Programado<\/th>"; 
  codigo+="<\/tr>";


  falta=totalafinanciar;
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
  capital=pago-(intereses+ivaintereses);
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

  /*codigo+="<td>";
  if(a==1){codigo+=segurovida;}else{codigo+='0';}
  codigo+="<\/td>";
 */
  codigo+="<td>"; 
  //if(a==1){codigo+=(parseFloat(pago)+parseFloat(segurovida)).toFixed(2);}else{codigo+=pago.toFixed(2); }
  codigo+=formatNumber.new(pago.toFixed(2),"$");
  codigo+="<\/td>"; 
  sumpatoprog+=pago; 

  codigo+="<\/tr>"; 
  }
  codigo+="<th> Total </th>";
  codigo+="<tr><td></td><td>"+formatNumber.new(sumcap.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumint.toFixed(2),"$")+"</td><td></td><td>"+formatNumber.new(sumivaint.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumpatoprog.toFixed(2),"$")+"</td></tr>"; 
  codigo+="<\/table>"; 

  CAT=(Math.pow(1+intRate,12)-1)*100+3;

  //var cat = CAT.get(totalafinanciar, 0, pagtotal, document.getElementById("plazonomina").value, 12);


  document.getElementById('resultadocreditorefaccionario').innerHTML = '<br><br><br>Plazo:'+ document.getElementById("plazocreditorefaccionario").value +' Meses<br>Monto solicitado: ' + document.getElementById("montocreditorefaccionario").value + '<br>Comision por Apertura: ' + formatNumber.new(comisionapertura.toFixed(2),"$") + '<br>Total a Financiar: ' + formatNumber.new(totalafinanciar.toFixed(2),"$") + '<br>CAT: ' +CAT.toFixed(2)+'%<br>' + codigo; 





}

function Calculacreditoarrendamiento(){

  //document.getElementById('comisionnomina').value=(document.getElementById("montonomina").value*0.02).toFixed(2);
  var tasa=document.getElementById("seleccion").value;
  var tiempo=document.getElementById('plazocreditoarrendamiento').value;
  var comisionapertura=document.getElementById("montocreditoarrendamiento").value.replace("$","").replace(/,/gi,"")*0.03;

  var montofin=document.getElementById("montocreditoarrendamiento").value.replace("$","").replace(/,/gi,"");

  var totalafinanciar=montofin-comisionapertura;

  //tasa mensual es intRate

  //pago=Math.floor((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;

  intRate=(tasa/100)/12;
  intRate2=((tasa*1.16)/100)/12

  months=tiempo;
  //cuota=((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
  pago=totalafinanciar*((intRate2*Math.pow(1+intRate2,months))/(Math.pow(1+intRate2,months)-1));
  

  codigo="";
  codigo="<h2>Tabla de amortizacion<\/h2>"
  codigo+="<table class='table table-hover' width='100%' border='0' id='f'>"; 
  codigo+="<tr class='table-info'>"; 
  codigo+="<th>Balance inicial<\/th>"; 
  //codigo+="<th>Pago programado<\/th>"; 
  codigo+="<th>Capital<\/th>"; 
  codigo+="<th>Interés<\/th>"; 
  codigo+="<th>Balance final<\/th>"; 
  codigo+="<th>Iva de los intereses<\/th>"; 
  codigo+="<th>Pago Total Programado<\/th>"; 
  codigo+="<\/tr>";


  falta=totalafinanciar;
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
  capital=pago-(intereses+ivaintereses);
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

  /*codigo+="<td>";
  if(a==1){codigo+=segurovida;}else{codigo+='0';}
  codigo+="<\/td>";
 */
  codigo+="<td>"; 
  //if(a==1){codigo+=(parseFloat(pago)+parseFloat(segurovida)).toFixed(2);}else{codigo+=pago.toFixed(2); }
  codigo+=formatNumber.new(pago.toFixed(2),"$");
  codigo+="<\/td>"; 
  sumpatoprog+=pago; 

  codigo+="<\/tr>"; 
  }
  codigo+="<th> Total </th>";
  codigo+="<tr><td></td><td>"+formatNumber.new(sumcap.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumint.toFixed(2),"$")+"</td><td></td><td>"+formatNumber.new(sumivaint.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumpatoprog.toFixed(2),"$")+"</td></tr>"; 
  codigo+="<\/table>"; 

  CAT=(Math.pow(1+intRate,12)-1)*100+3;

  //var cat = CAT.get(totalafinanciar, 0, pagtotal, document.getElementById("plazonomina").value, 12);


  document.getElementById('resultadocreditoarrendamiento').innerHTML = '<br><br><br>Plazo:'+ document.getElementById("plazocreditoarrendamiento").value +' Meses<br>Monto solicitado: ' + document.getElementById("montocreditoarrendamiento").value + '<br>Comision por Apertura: ' + formatNumber.new(comisionapertura.toFixed(2),"$") + '<br>Total a Financiar: $' + formatNumber.new(totalafinanciar.toFixed(2),"$") + '<br>CAT: ' +CAT.toFixed(2)+'%<br>' + codigo; 





}

function Calculacreditofactoraje(){

  //document.getElementById('comisionnomina').value=(document.getElementById("montonomina").value*0.02).toFixed(2);
  var tasa=document.getElementById("seleccion").value;
  var tiempo=document.getElementById('plazocreditofactoraje').value;
  var comisionapertura=document.getElementById("montocreditofactoraje").value.replace("$","").replace(/,/gi,"")*0.03;

  var montofin=document.getElementById("montocreditofactoraje").value.replace("$","").replace(/,/gi,"");

  var totalafinanciar=montofin-comisionapertura;

  //tasa mensual es intRate

  //pago=Math.floor((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;

  intRate=(tasa/100)/12;
  intRate2=((tasa*1.16)/100)/12

  months=tiempo;
  //cuota=((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
  pago=totalafinanciar*((intRate2*Math.pow(1+intRate2,months))/(Math.pow(1+intRate2,months)-1));
  

  codigo="";
  codigo="<h2>Tabla de amortizacion<\/h2>"
  codigo+="<table class='table table-hover' width='100%' border='0' id='f'>"; 
  codigo+="<tr class='table-info'>"; 
  codigo+="<th>Balance inicial<\/th>"; 
  //codigo+="<th>Pago programado<\/th>"; 
  codigo+="<th>Capital<\/th>"; 
  codigo+="<th>Interés<\/th>"; 
  codigo+="<th>Balance final<\/th>"; 
  codigo+="<th>Iva de los intereses<\/th>"; 
  codigo+="<th>Pago Total Programado<\/th>"; 
  codigo+="<\/tr>";


  falta=totalafinanciar;
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
  capital=pago-(intereses+ivaintereses);
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

  /*codigo+="<td>";
  if(a==1){codigo+=segurovida;}else{codigo+='0';}
  codigo+="<\/td>";
 */
  codigo+="<td>"; 
  //if(a==1){codigo+=(parseFloat(pago)+parseFloat(segurovida)).toFixed(2);}else{codigo+=pago.toFixed(2); }
  codigo+=formatNumber.new(pago.toFixed(2),"$");
  codigo+="<\/td>"; 
  sumpatoprog+=pago; 

  codigo+="<\/tr>"; 
  }
  codigo+="<th> Total </th>";
  codigo+="<tr><td></td><td>"+formatNumber.new(sumcap.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumint.toFixed(2),"$")+"</td><td></td><td>"+formatNumber.new(sumivaint.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumpatoprog.toFixed(2),"$")+"</td></tr>"; 
  codigo+="<\/table>"; 

  CAT=(Math.pow(1+intRate,12)-1)*100+3;

  //var cat = CAT.get(totalafinanciar, 0, pagtotal, document.getElementById("plazonomina").value, 12);


  document.getElementById('resultadocreditofactoraje').innerHTML = '<br><br><br>Plazo:'+ document.getElementById("plazocreditofactoraje").value +' Meses<br>Monto solicitado: ' + document.getElementById("montocreditofactoraje").value + '<br>Comision por Apertura: ' + formatNumber.new(comisionapertura.toFixed(2),"$") + '<br>Total a Financiar: ' + formatNumber.new(totalafinanciar.toFixed(2),"$") + '<br>CAT: ' +CAT.toFixed(2)+'%<br>' + codigo; 





}

function Calculacreditoquirografario(){

  //document.getElementById('comisionnomina').value=(document.getElementById("montonomina").value*0.02).toFixed(2);
  var tasa=document.getElementById("seleccion").value;
  var tiempo=document.getElementById('plazocreditoquirografario').value;
  var comisionapertura=document.getElementById("montocreditoquirografario").value.replace("$","").replace(/,/gi,"")*0.03;

  var montofin=document.getElementById("montocreditoquirografario").value.replace("$","").replace(/,/gi,"");

  var totalafinanciar=montofin-comisionapertura;

  //tasa mensual es intRate

  //pago=Math.floor((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;

  intRate=(tasa/100)/12;
  intRate2=((tasa*1.16)/100)/12

  months=tiempo;
  //cuota=((totalafinanciar*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
  pago=totalafinanciar*((intRate2*Math.pow(1+intRate2,months))/(Math.pow(1+intRate2,months)-1));
  

  codigo="";
  codigo="<h2>Tabla de amortizacion<\/h2>"
  codigo+="<table class='table table-hover' width='100%' border='0' id='f'>"; 
  codigo+="<tr class='table-info'>"; 
  codigo+="<th>Balance inicial<\/th>"; 
  //codigo+="<th>Pago programado<\/th>"; 
  codigo+="<th>Capital<\/th>"; 
  codigo+="<th>Interés<\/th>"; 
  codigo+="<th>Balance final<\/th>"; 
  codigo+="<th>Iva de los intereses<\/th>"; 
  codigo+="<th>Pago Total Programado<\/th>"; 
  codigo+="<\/tr>";


  falta=totalafinanciar;
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
  capital=pago-(intereses+ivaintereses);
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

  /*codigo+="<td>";
  if(a==1){codigo+=segurovida;}else{codigo+='0';}
  codigo+="<\/td>";
 */
  codigo+="<td>"; 
  //if(a==1){codigo+=(parseFloat(pago)+parseFloat(segurovida)).toFixed(2);}else{codigo+=pago.toFixed(2); }
  codigo+=formatNumber.new(pago.toFixed(2),"$");
  codigo+="<\/td>"; 
  sumpatoprog+=pago; 

  codigo+="<\/tr>"; 
  }
  codigo+="<th> Total </th>";
  codigo+="<tr><td></td><td>"+formatNumber.new(sumcap.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumint.toFixed(2),"$")+"</td><td></td><td>"+formatNumber.new(sumivaint.toFixed(2),"$")+"</td><td>"+formatNumber.new(sumpatoprog.toFixed(2),"$")+"</td></tr>"; 
  codigo+="<\/table>"; 

  CAT=(Math.pow(1+intRate,12)-1)*100+3;

  //var cat = CAT.get(totalafinanciar, 0, pagtotal, document.getElementById("plazonomina").value, 12);


  document.getElementById('resultadocreditoquirografario').innerHTML = '<br><br><br>Plazo:'+ document.getElementById("plazocreditoquirografario").value +' Meses<br>Monto solicitado: ' + document.getElementById("montocreditoquirografario").value + '<br>Comision por Apertura: ' + formatNumber.new(comisionapertura.toFixed(2),"$") + '<br>Total a Financiar: ' + formatNumber.new(totalafinanciar.toFixed(2),"$") + '<br>CAT: ' +CAT.toFixed(2)+'%<br>' + codigo; 





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