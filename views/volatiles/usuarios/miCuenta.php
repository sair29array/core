<?php 
if (!isset($_SESSION["user_log"])) { ?> <script>window.location="./"</script> <?php  }
 ?>
    <section class="cuenta barra-x-hidden">
        <div class="container-fluid">
            <div class="row user-name">
                <div class="container">
                    <div class="col-12">
                    <p class="h5-responsive text-uppercase grey-text wow zoomIn" data-wow-delay="0.4s"><?php 
                    if ($name_user!=="" && $apellidos_user !== "") {
                        echo $name_user." ".$apellidos_user; 
                    }else{
                        echo $user_["email"]. " // Debes actualizar tus datos personales";
                    }
                    
                    ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                    <div class="col-12 col-sm-6 mt-5  wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="mt-5 mb-5">
                            <i class="fa fa-2x fa-folder blue-text bloque mr-3 "></i>
                            <h3 class="grey-text bloque">Tu actividad </h3>
                            <hr>
                        </div>
                        <div class="mt-5 mb-5">
                            <i class="fa fa-2x fa-user blue-text bloque mr-3"></i>
                            <h3 class="grey-text bloque">Tu Información </h3>
                            <hr>
                        </div>
                        <div class="mt-5 mb-5">
                            <i class="fa fa-2x fa-file blue-text bloque mr-4"></i>
                            <h3 class="grey-text bloque">Facturación</h3>
                            <hr>
                        </div>
                        
                    </div>
                    
                    
                    <div class="col-12 col-sm-6 mt-5 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="mt-5 mb-5">
                            <i class="fa fa-2x fa-star blue-text bloque mr-3"></i>
                            <h3 class="grey-text bloque">Puntos y Descuentos</h3>
                            <hr>
                        </div>
                        <div class="mt-5 mb-5">
                            <a href="./?:=MiCuenta&session=destroy"><i class="fas fa-sign-out-alt fa-2x blue-text bloque mr-3"></i>
                            <h3 class="grey-text bloque">Cerrar Sesión</h3></a>
                            <hr>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
            
    </section>
 <?php 
        if (isset($_GET['session'])) {
            $sair->CerrarSesion();
        }
     ?>