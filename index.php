<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width initial-scale=1.0">
    <script src="js/vendor/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="css/log.css">
  
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<!-- header -->
<header>
	<img src="images/logosfg 2.png" >
</header>

<!-- content -->
<section>
	
	  <form method="post">
                  
				  <?php 
				  if(isset($_POST['aceptar'])){
				  $user=$_REQUEST['user'];
				  $pass=md5($_REQUEST['pass']);
				  if($user=="" && $pass==""){?>
				  	<script>alert("¡¡Favor de Ingresar Usuario y Contraseña!!");</script>
				  <?php
				  }else{
				  	include("Conexion2.php");
					//include("carpetaraiz.php");
					$row=mysqli_fetch_array(mysqli_query($cnx,"select * from acceso where user='$user' and pass='$pass'"));
					
					if($row==false){
						?>
				  	<script>alert("¡¡Error de Identificación!!");</script>
				  <?php
					}else{
						session_start();
						$_SESSION['tiempo'] = time();
						$_SESSION['usser'] = $user;
						$_SESSION['nombre'] = $row['nombre'];
						$_SESSION['GSolicitudes'] = $row['GSolicitudes'];
						$_SESSION['BSolicitudes'] = $row['BSolicitudes'];
						$_SESSION['GCotizacion'] = $row['GCotizacion'];
						$_SESSION['BQeQ'] = $row['BQeQ'];
						$_SESSION['SetConf'] = $row['SetConf'];

						?> <script> window.location='indexmenu.php';</script> <?php
						//header('Location:/site/indexmenu.php');
					}
					
					
				  }
				  }			  
				  
				  ?>  
                  
                <div class="content">
	<div class="container">
		<img class="bg-img" src="images/iu.jpg" alt="">
			<div class="menu">
				<a href="#connexion" class="btn-connexion"><h2>Iniciar Secion</h2></a>
			</div>
			<div class="connexion">

				<div class="contact-form">
					<label id="usuario">Usuario</label>
                                        <input required name="user" placeholder="usuario..." value="" type="text"  style="color:#white;background-color:#EFF8FB"  >
					
					<label id="pass">Contraseña</label>
                                        <input required name="pass" placeholder="pass..." value="" type="password" style="color:#black;background-color:#EFF8FB" >
					
					<!--<div class="check">
						<label>				
							<input id="check" type="checkbox" class="checkbox">
								<svg xmlns="http://www.w3.org/2000/svg" width="26px" height="23px">
									<path class="path-back"  d="M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
									<path class="path-moving" d="M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
								</svg>
						</label>
						<!--<h3>Manternerme Dentro</h3>-->
					</div>
                            <div>
					<input class="submit" value="Ingresar" id="aceptar" name="aceptar" type="submit">
                                        </div>
                                         </form>
				</div>
				
				<hr>
			</div>
			
			
			
	</div>
                  
				
                </form>
	
</section>
<!-- footer -->
<footer>
	
</footer>  
<script type="text/javascript">
function log(){

alert("si jala");

}

</script>
</body>
</html>
