<?php 
if (isset($_GET['Reg-empresa'])) {
    $email = $user_['email'];
        $datos_user = $sair->verificarSiLosDatosEstanCompletos($email);// verifica si los datos del user se encuentran completos
    if ($datos_user == 0 ) {
        ?><script type="text/javascript">window.location="./?servicios=Diseño_De_Paginas_web&solicitud=plan-medium";</script><?php 
      
    }
}
	if (!isset($_SESSION["user_log"])) {
		?>
			<div class="row justify-content-center text-center margen-superior">
                <div class="col-12 margen-superior wow zoomIn" data-wow-delay="0.4s">
                    <h3 class="mt-5 mb-0">
                        <span><strong style="color: #1195ac;" >Plan Medium</strong> Diseño & desarrollo de páginas web</span>
                    </h3>
                    <div>
                        <p class="banner-txt mt-2">¿Aún no eres usuario array?<br>
						para continuar con la solicitud debes iniciar sesión o crear una cuenta. </p>
						<!-- La idea es que cuando el user nuevo no haya inicado session de clic en iniciar o crear cuenta .. y despues de haber inicado o creado la cuenta lo devuelva a donde estaba  -->
                    <div class="m-5">
                        <a href="./?:=iniciar-sesion&SolicitudDeServicio=Diseño_De_Paginas_web&solicitud=plan-básico">
                            <button type="button" class="btn boton-c btn-lg ">Iniciar sesión </button>
                        </a>
                        <a href="./?:=crear-cuenta&SolicitudDeServicio=Diseño_De_Paginas_web&solicitud=plan-básico">
                            <button type="button" class="btn boton-c btn-lg ">Crear Cuenta </button>
                        </a>
                    </div>
                    </div> 
                </div>
            </div>
		<?php 
	}else{
        $email = $user_['email'];
        $datos_user = $sair->verificarSiLosDatosEstanCompletos($email);// verifica si los datos del user se encuentran completos
		?>
    <form action="" method="POST">
		<div class="row justify-content-center text-center">
            <div class="col-12 col-md-9 margen-superior wow zoomIn" data-wow-delay="0.4s" >
                
                     <h3 class="mt-5 mb-0">
                        <span><strong style="color: #1195ac;" >Plan Medium</strong> Diseño & desarrollo de páginas web</span>
                    </h3>
                    <?php 
                     if (!isset($_GET["Reg-empresa"])) { // si no ha pasado el pprimer formulario de registro de datos faltantes del user
                        $nombre_empresa = strtoupper($user_['empresa']);
                        $nit_empresa = $user_['nit_empresa'];
                        if ($datos_user == 1) {
                            ?>
                            <p class="banner-txt">Anteriormente ingresaste tus datos, si no hay algo que actualizar, simplemente debes dar clic en </p>
                            <?php 
                        }else{
                            ?> 
                            <p class="banner-txt">Solo falta que llenes este formulario, luego recibirás una llamada para empezar a trabajar.</p>
                            <?php 
                        }
                    }else
                        {
                        if (!isset($_GET['solicitud-enviada'])) {
                            if ($user_['nit_empresa'] !=="" AND $user_['empresa']!== "") { // si no hay una emprpesa asociada al usuario...
                                 ?> 
                                 <p class="banner-txt">¿Deseas que la factura se realice a nombre de tu empresa <strong><?php echo $nombre_empresa; ?></strong> ?</p>
                            <?php 
                            }else{
                                 ?> 
                            <p class="banner-txt">Si tienes una empresa y deseas que la factura de este contrato se realice a nombre de la misma, llena este formulario, de no ser así solo haz clic en continuar.</p>
                            <?php 
                            }
                        }
                        }

                     ?>
                    
                
            </div>

            <?php  // lo que quiero con esto es cambiar el boton o el nombre del boton para seguir con el contrato del servicio -- Diseño de paginas web - plan básico
                if (!isset($_GET["Reg-empresa"])) {
                    ?>
                    <div class="col-12 col-md-2 margen-superior wow zoomIn" data-wow-delay="0.4s">
                    <h3 class="mt-5 mb-0"></h3>
                     <button  type="submit" name="continuar_contrato" class="btn boton-c btn-md mb-5">Continuar <i class="fa fa-caret-right"></i></button>
                    </div>
                    <?php 
                }else{
                    if (!isset($_GET['solicitud-enviada'])) {
                    if ($user_['nit_empresa'] =="" AND $user_['empresa']== ""){ 
                    ?>
                     <div class="col-12 col-md-2 margen-superior " >
                    <h3 class="mt-5 mb-0"></h3>
                     <button  type="submit" name="continuar_contrato2" class="btn boton-c btn-md mb-5">Continuar <i class="fa fa-caret-right"></i></button>
                    </div>
                    <?php 
                    }else{
                        
                        ?>
                     <div class="col-12 col-md-3 margen-superior wow zoomIn" data-wow-delay="0.4s">
                    <h3 class="mt-5 mb-0"></h3>
                     <button  type="submit" name="continuar_contrato2si" class="btn boton-c btn-md mb-5">Si <i class="fa fa-caret-right"></i></button>
                      <button  type="submit" name="continuar_contrato2no" class="btn boton-c btn-md mb-5">No <i class="fa fa-caret-right"></i></button>
                    </div>

                    <?php 
                        }
                    }

                }
             ?>
            
        <hr class="blue col-12 mt-0 wow zoomIn" data-wow-delay="0.4s">
    </div>

		<?php 

		include("FormularioPlanMedium.php");
	}
 ?>
