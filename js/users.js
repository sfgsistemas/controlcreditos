$("#botonuploatuser").click(function(event) {
  alert("funcion");
        /*
    if(document.getElementById('textfield39').value!="" || document.getElementById('visor1').innerHTML!='' || document.getElementById('file1').value!=""){
        document.getElementById("textfield39").required=true;
        if(document.getElementById('visor1').innerHTML==''){document.getElementById("file1").required=true;}
        //document.getElementById("datobedo1").required=true;
        //document.getElementById("textfield5").required=true;
        }else{
            document.getElementById("textfield39").required=false;
            document.getElementById("file1").required=false;
            //document.getElementById("datobedo1").required=false;
            //document.getElementById("textfield5").required=false;
        }
        if(document.getElementById('textfield40').value!="" || document.getElementById('visor2').innerHTML!='' || document.getElementById('file2').value!=""){
        document.getElementById("textfield40").required=true;
        if(document.getElementById('visor2').innerHTML==''){document.getElementById("file2").required=true;}
        //document.getElementById("datobedo1").required=true;
        //document.getElementById("textfield5").required=true;
        }else{
            document.getElementById("textfield40").required=false;
            document.getElementById("file2").required=false;
            //document.getElementById("datobedo1").required=false;
            //document.getElementById("textfield5").required=false;
        }
        if(document.getElementById('textfield41').value!="" || document.getElementById('visor3').innerHTML!='' || document.getElementById('file3').value!=""){
        document.getElementById("textfield41").required=true;
        if(document.getElementById('visor3').innerHTML==''){document.getElementById("file3").required=true;}
        //document.getElementById("datobedo1").required=true;
        //document.getElementById("textfield5").required=true;
        }else{
            document.getElementById("textfield41").required=false;
            document.getElementById("file3").required=false;
            //document.getElementById("datobedo1").required=false;
            //document.getElementById("textfield5").required=false;
        }
        if(document.getElementById('textfield42').value!="" || document.getElementById('visor4').innerHTML!='' || document.getElementById('file4').value!=""){
        document.getElementById("textfield42").required=true;
        if(document.getElementById('visor4').innerHTML==''){document.getElementById("file4").required=true;}
        //document.getElementById("datobedo1").required=true;
        //document.getElementById("textfield5").required=true;
        }else{
            document.getElementById("textfield42").required=false;
            document.getElementById("file4").required=false;
            //document.getElementById("datobedo1").required=false;
            //document.getElementById("textfield5").required=false;
        }
        if(document.getElementById('textfield44').value!="" || document.getElementById('textfield43').value!="" || document.getElementById('visor5').innerHTML!='' || document.getElementById('file5').value!=""){
        document.getElementById("textfield43").required=true;
        document.getElementById("textfield44").required=true;
        if(document.getElementById('visor5').innerHTML==''){document.getElementById("file5").required=true;}
        //document.getElementById("datobedo1").required=true;
        //document.getElementById("textfield5").required=true;
        }else{
            document.getElementById("textfield43").required=false;
            document.getElementById("textfield44").required=false;
            document.getElementById("file5").required=false;
            //document.getElementById("datobedo1").required=false;
            //document.getElementById("textfield5").required=false;
        }
        if(document.getElementById('textfield39').value!="" || document.getElementById('textfield40').value!="" || document.getElementById('textfield41').value!="" || document.getElementById('textfield42').value!="" || document.getElementById('textfield44').value!=""){
            document.getElementById("cot").required=true;
        }else{
            document.getElementById("cot").required=false;
        }
        */
        

    

    $('#subirdato').foundation('validateForm');



var validacion=false;
/*
$( "#panel1f-label" ).removeClass( "is-invalid-input" );
$( "#panel2d-label" ).removeClass( "is-invalid-input" );
$( "#panel3d-label" ).removeClass( "is-invalid-input" );
$( "#panel4c-label" ).removeClass( "is-invalid-input" );
$( "#panel5c-label" ).removeClass( "is-invalid-input" );
$( "#panel6c-label" ).removeClass( "is-invalid-input" );
$( "#panel7c-label" ).removeClass( "is-invalid-input" );
$( "#panel8c-label" ).removeClass( "is-invalid-input" );
$( "#panel9c-label" ).removeClass( "is-invalid-input" );
*/
   

    
/*
$('#panel1f').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel1f-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel1f').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel1f-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel2d').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel2d-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel2d').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel2d-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel3d').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel3d-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel4c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel4c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel5c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel5c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel6c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel6c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel7c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel7c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel8c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel8c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel9c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel9c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });


*/


    if(validacion){
         console.log("Hay errores");
         alert("¡¡Verifica Que Todos Los Datos Sean Correctos!!");
         return validacion;
    }

   var data = new FormData(document.forms['fomruploaduser']);
   data.append('function', "subir");
 
   
  
   
    if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        
       
        if(xmlhttp.responseText.indexOf('Error') !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
        alert(xmlhttp.responseText);
    }
       
      }
  }
xmlhttp.open("POST","users.php",true);
xmlhttp.send(data);
});