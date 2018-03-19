<form method="POST" action="">
<div class="row justify-content-center text-center mb-5">
                <div class="col-12 col-md-9">
                    <h2 class="mt-5 mb-0 ">
                        <span class="banner-title">Mantenimiento y soporte técnico</span>
                    </h2>
                   
                </div>
                <?php if (isset($_SESSION["user_log"])){  
                	if (!isset($_GET["solicitud-enviada"])) { 
                	?>
                <div  class="col-12 col-md-3 mt-5 mb-0">
                <?php } } ?>

                
                	<?php if (!isset($_GET["datos"]) ) 
                	{ // form de datos del user
                		if (!isset($_GET["reg_empresa"]) ) {
                		?> 
                	
                	<a href="./?servicios=MantSoporteTécnico&datos">
                        <button type="button" name="solicitar_servicio" class="btn boton-c btn-lg mb-5">
                        Solicitar
                            <i class="fa fa-caret-right"></i>
                    </button>
                    </a>

                    <?php }else{ // si el usuario llegó a el form de empresa

                    		   if (!isset($_GET["solicitud-enviada"])) 
                    		   {
                    			if ($user_["empresa"] !== "") 
                    			{ // si existe una empresa
                    				?>
                    				<button type="submit" name="continuarsi" class="btn boton-c btn-lg mb-5">
                       		 		Si
                            		<i class="fa fa-caret-right"></i>
                    				</button>
                    				<button type="submit" name="continuarno" class="btn boton-c btn-lg mb-5">
                       		 		No
                            		<i class="fa fa-caret-right"></i>
                    				</button>
                    				<?php 
                    			}else{ 
                    			?>
                    			
                        		<button type="submit" name="reg_empresa" class="btn boton-c btn-lg mb-5">
                       		 	Continuar
                            	<i class="fa fa-caret-right"></i>
                    			</button>
                    			
                    			<?php 
                    		    }
                    		  }
                    		}

                     }else{
                    	if (isset($_SESSION["user_log"])){ 
                    	?>
                    	
                        <button type="submit" name="actualizadatos" class="btn boton-c btn-lg mb-5">
                        Continuar
                            <i class="fa fa-caret-right"></i>
                    </button>
                    
                    	<?php 
                      }
                    }  ?>

                </div>
</div>


<?php if (isset($_GET["datos"])) 
{ 
	if (isset($_SESSION["user_log"])) {
	
	$email = $user_['email'];
        $datos_user = $sair->verificarSiLosDatosEstanCompletos($email);// verifica si los datos del user se encuentran completos

		if ($datos_user == 0) {
			?><p class="banner-txt text-center">Debes completar los datos que hacen falta para continuar con la solicitud. </p> <?php 
		}else
		{
			?><p class="banner-txt text-center">Anteriormente actualizaste tus datos, sino deseas actualizar tu información, solo da un clic en continuar. </p> <?php
		}


	}
}
if (isset($_GET["reg_empresa"]) && !isset($_GET["solicitud-enviada"])) 
{
	if ($user_["empresa"] == "") 
		{
			?><p class="banner-txt text-center">¿El servicio que estás a punto de solicitar es para tu empresa? ¡Es el momento de registrarla! </p> <?php
		}else{
			?><p class="banner-txt text-center">¿El servicio que estás a punto de solicitar es para tu empresa?</p> <?php
		}
}

 ?>
<hr class="">
                    
               