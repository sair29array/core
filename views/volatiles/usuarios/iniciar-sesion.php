<?php 
if (isset($_SESSION['user_log'])) { ?> <script> window.location="./" ;</script> <?php  }
if ( isset($_GET['user'])) {
    $u = $_GET["user"];
    $_SESSION['user_log']=$u;
    
    ?><script>window.location="./" ; </script>
    <?php 
   
}
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
require_once("config/social_login/vendor/autoload.php");

//Step 1: Enter you google account credentials

$g_client = new Google_Client();

$g_client->setClientId("886385635344-j4aic13ehet2s0e7ab3jdlea05ifblag.apps.googleusercontent.com");
$g_client->setClientSecret("wCVWwmlhXpu48VjRf3FhOOJf");
$g_client->setRedirectUri("https://www.array.com.co/?:=iniciar-sesion");
$g_client->setScopes("email");

//Step 2 : Create the url
$auth_url = $g_client->createAuthUrl();
//echo "<a href='$auth_url'>Login Through Google </a>";

//Step 3 : Get the authorization  code
$code = isset($_GET['code']) ? $_GET['code'] : NULL;

//Step 4: Get access token
if($code !== "") {

    try {

        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);

    }catch (Exception $e){
        //echo $e->getMessage();
    }




    try {
        $oAuth = new Google_Service_Oauth2($g_client);
        $pay_load = $oAuth->userinfo_v2_me->get();


    }catch (Exception $e) {
       // echo $e->getMessage();
    }

} else{
    $pay_load = null;
}

if($pay_load!== null)
{
	///////¿Es un usuario nuevo o un usuario ya existente?//////////////
    $confirmEmail = $sair->ConfirmEmail($pay_load["email"]);
    if ($confirmEmail == 0) /// si en la DB no hay correos iguales a este
    {
    	$nombres = $pay_load["givenName"];
    	$apellidos = $pay_load["familyName"];
    	$email = $pay_load["email"];
    	$pass = $pay_load["email"]."array981129sa";
    	$sair->CrearCuentaParaNuevoUsuario($nombres,$apellidos,$email,$pass);
    	// creamos la sesión para este user
    	$_SESSION["user_log"] =  $email;
    	//redirect to home:
    	?><script>window.location="./?<?php echo "Hello! ".$pay_load["name"]; ?>" ; </script><?php 
    }else{
    	// creamos la sesión para este user
    	$_SESSION["user_log"] =  $pay_load["email"];
    	//redirect to home:
    	?><script>window.location="./?<?php echo "Hello! ".$pay_load["name"]; ?>" ; </script><?php 
    }

  
    



}





///////////////////////////////////SOSIAL LOGIN CONFIG////////////////////////////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////

 ?>
    <section class="iniciar-sesion">
    	<div class="container">
    	<div class="row">
    	    <div class="col-12 text-center mt-5 wow zoomIn" data-wow-delay="0.4s">
	    		<h6 class="h5-responsive mb-0"><strong>¿Ya tienes una cuenta? ingresa:</strong></h6>
	    		<p class="mt-0 mb-5"> </p>
    		</div>


    		<div class="col-12 col-sm-12 col-md-5 mt-3 mb-5 wow fadeInLeft text-center" data-wow-delay="0.4s">
	    		<h1 class="h5-responsive text-center ">Con tus redes sociales:</h1>
	    		<div class="mt-4">
					<a href="./?:=iniciar-sesion&login=Facebook" role="button" class="btn btn-lg btn-primary waves-effect disabled"><i class="fab fa-facebook-f"></i> | Ingresa con Facebook</a>
					
					<a href="<?php echo $auth_url; ?>" role="button" class="btn btn-lg btn-danger waves-effect "><i class="fab fa-google"></i> | Ingresar con Google</a>
					
	    		</div>
	    		<div class="w-100"></div>
	    		<p class="mt-3">En array siempre pensamos en tu seguridad  y la de tus datos personales <i class="grey-text fas fa-lock"></i></p>
    		</div>


    		<div class="col-md-2  mr-5 d-none d-sm-none d-md-block d-lg-block wow zoomIn" data-wow-delay="0.4s">
    			<hr class="v m-0">
    		</div>



    		<div  class="col-12 col-md-4 mt-3 mb-5 wow fadeInRight" data-wow-delay="0.4s">
			<!-- tarjeta-->
			<div class="card" id="vlogin">
				<div class="card-header h5 black-text text-center">Con tu Email <br>
					<h6   style="color: red;" >{{mostrar_mensajes_de_alerta_o_errores}}</span> <h6   style="color: green;" >{{cargando}}</span>
				</div>

			    <div class="card-body">
			        <!-- Material form register -->
			        
			            <!-- Material input email -->
			            <div class="md-form">
			                <i class="fa fa-envelope grey-text prefix"></i>
			                <input v-model="login" type="email" id="materialFormCardEmailEx" class="form-control">
			                <label for="materialFormCardEmailEx" class="font-weight-light">Correo</label>
			            </div>
			            <!-- Material input password -->
			            <div class="md-form">
			                <i class="fa fa-lock grey-text prefix"></i>
			                <input v-model="password" type="password" id="materialFormCardPasswordEx" class="form-control">
			                <label for="materialFormCardPasswordEx" class="font-weight-light">Contraseña</label>
			                
			                
			            </div>
			            <!--pre>{{$data}}</pre-->
			            <div class="text-center">
			                <button v-on:click="enviar" class="boton-c btn btn-md waves-effect" type="submit">Iniciar sesión <i class="fas fa-sign-out-alt"></i></button>
			            </div>
			            <div class="text-center">
			                	<a  class="blue-text" data-toggle="modal" data-target="#modal"><?php if (isset($_POST["recordar"])) {
			                		?> Hemos enviado tu contraseña a tu correo!<?php 
			                	}else{ ?>¿Olvidate tu contraseña? <?php } ?></a>
			                </div>
			         </div>
	
			        
			</div>    
    		</div>



    		<div class="col-12 text-center  wow zoomIn" data-wow-delay="0.4s">
	    		<h6 class="h5-responsive mb-0"><strong>¿Notienes una cuenta? </strong><a class="blue-text" href="./?:=crear-cuenta">Registrate</a></h6>
	    		<p class="mt-0 mb-5"> </p>
    		</div>





    	</div>
    	</div>
     </section>
     
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue"></script>

<script src="config/vue_login.js"></script>


  




























  
  <!-- Central Modal Medium Info -->
  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" id="recordador" role="document">
      <!--Content-->
      <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
              <p class="heading lead"> <?php if (isset($_POST["recordar"])){  ?>Volver a enviar contraseña por correo <?php }else{ ?> ¿Has olvidado tu contraseña? <?php } ?></p>
  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
              </button>
          </div>
  <form method="POST" action="">
          <!--Body-->
          <div class="modal-body">
              <div class="text-center">
                  <i class="fa fa-life-ring fa-4x mb-3 animated rotateIn"></i>
                  <p>Por favor ingresa tu dirección de correo electrónico para ayudarte.</p>
                   		<div class="md-form">
			                
			                <input required="true"  type="email" name="email_" id="materialFormCardEmailEx" class="form-control">
			                
			            </div>
              </div>
          </div>
  
          <!--Footer-->
          <div class="modal-footer justify-content-center">
          		<button class="btn btn-primary" name="recordar" type="submit">Enviar </button>
             
              
          </div>
    </form>
      </div>
      <!--/.Content-->
  </div>
  </div>
  <!-- Central Modal Medium Info-->
  
                                          
<?php 

	if (isset($_POST["recordar"])) 
	{
		$email =$_POST["email_"];
		$sair->RecordarPassUser_enviarPorCorreo($email);
	
	}
 ?>


