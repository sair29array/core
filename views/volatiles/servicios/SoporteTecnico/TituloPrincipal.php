<form method="POST" action="">
<div class="row justify-content-center text-center mb-5">
                <div class="col-12 col-md-9">
                    <h2 class="mt-5 mb-0 ">
                        <span class="banner-title">Mantenimiento y soporte técnico</span>
                    </h2>
                   
                </div>
                <div  class="col-12 col-md-3 mt-5 mb-0">
                	<?php if (!isset($_GET["datos"])) { // form de datos del user
                		?> 
                	
                	<a href="./?servicios=MantSoporteTécnico&datos">
                        <button type="button" name="solicitar_servicio" class="btn boton-c btn-lg mb-5">
                        Solicitar
                            <i class="fa fa-caret-right"></i>
                    </button>
                    </a>

                    <?php }else{
                    	?>
                    	<a href="./?servicios=MantSoporteTécnico&datos">
                        <button type="submit" name="solicitar_servicio" class="btn boton-c btn-lg mb-5">
                        Continuar
                            <i class="fa fa-caret-right"></i>
                    </button>
                    </a>
                    	<?php 
                    }  ?>

                </div>
</div>


<?php if (isset($_GET["datos"])) 
{
	$email = $user_['email'];
        $datos_user = $sair->verificarSiLosDatosEstanCompletos($email);// verifica si los datos del user se encuentran completos

		if ($datos_user == 0) {
			?><p class="banner-txt text-center">Debes completar los datos que hacen falta para continuar con la solicitud. </p> <?php 
		}else
		{
			?><p class="banner-txt text-center">Anteriormente actualizaste tus datos, sino deseas actualizar tu información, solo da un clic en continuar. </p> <?php
		}
} ?>
<hr class="">
                    
               