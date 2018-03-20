<?php 
if (isset($_SESSION['user_log'])) { ?> <script> window.location="./" ;</script> <?php  }
if ( isset($_GET['user'])) {
    $u = $_GET["user"];
    $_SESSION['user_log']=$u;
    
    ?><script>window.location="./" ; </script>
    <?php 
   
}
 ?>
    <section class="iniciar-sesion">
    	<div class="container">
    	<div class="row">
    		<div class="col-12 text-center mt-5 wow zoomIn" data-wow-delay="0.4s">
	    		<h6 class="h1-responsive mb-0"><strong>¿Ya tienes una cuenta?</strong></h6>
	    		<p class="mt-0 mb-5">Inicia sesión para obtener grandes privilegios, mejores servicios y una mejor atención. </p>
    		</div>
    		<div class="col-12 col-sm-12 col-md-5 mt-3 mb-5 wow fadeInLeft text-center" data-wow-delay="0.4s">
	    		<h1 class="h1-responsive text-center ">Ingresa con:</h1>
	    		<div class="mt-4">
					<a href="#" role="button" class="btn btn-lg btn-primary waves-effect disabled"><i class="fab fa-facebook-f"></i> | Ingresa con Facebook</a>
					<a href="#" role="button" class="btn btn-lg btn-danger waves-effect disabled"><i class="fab fa-google"></i> | Ingresar con Google</a>
					<a href="#" role="button" class="btn btn-lg btn-info waves-effect disabled"><i class="fab fa-twitter"></i> | Ingresar con Twitter</a>
	    		</div>
	    		<div class="w-100"></div>
	    		<p class="mt-3">En array siempre pensamos en tu seguridad  y la de tus datos personales <i class="grey-text fas fa-lock"></i></p>
    		</div>
    		<div class="col-md-1 mr-5 d-none d-sm-none d-md-block d-lg-block wow zoomIn" data-wow-delay="0.4s">
    			<hr class="v m-0">
    		</div>
    		<div  class="col-12 col-md-5 mt-3 mb-5 wow fadeInRight" data-wow-delay="0.4s">
			<!-- tarjeta-->
			<div class="card" id="vlogin">
				<div class="card-header h4 black-text text-center">Iniciar sesión <br>
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
			                <div class="text-right">
			                	<a  class="blue-text" data-toggle="modal" data-target="#modal"><?php if (isset($_POST["recordar"])) {
			                		?> Hemos enviado tu contraseña a tu correo!<?php 
			                	}else{ ?>¿Olvidate tu contraseña? <?php } ?></a>
			                </div>
			                
			            </div>
			            <!--pre>{{$data}}</pre-->
			            <div class="text-center">
			                <button v-on:click="enviar" class="boton-c btn btn-md waves-effect" type="submit">Iniciar sesión <i class="fas fa-sign-out-alt"></i></button>
			            </div>
			         </div>
			            <div class="card-footer black-text text-center">
			            	<h5 class="bloque ">¿No tienes cuenta?</h5>
			            	<a class="btn btn-sm btn-outline-info" href="./?:=crear-cuenta">Registrate</a>
			            </div>
			        
			</div>    
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


