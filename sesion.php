  <?php 
				
				  $user=$_GET['user'];
				  $pass=$_GET['pass'];
				  if($user=="" && $pass==""){
				  	echo "¡¡Favor de Ingresar Usuario y Contraseña!!";
				
				  }else{
				  	include("Conexion2.php");
					include("carpetaraiz.php");
					$row=mysqli_fetch_array(mysqli_query($cnx,"select * from acceso where user='$user' and pass='$pass'"));
					
					if($row==false){
					
				  	echo "¡¡Error de Identificación!!";
				
					}else{
						header('Location: '.$raiz.'indexmenu.php');
					}
					
					
				  }
				  		  
				  
				  ?>