<?php  ?>
<!--Navbar-->
        <nav class="navbar fixed-top navbar-expand-lg  scrolling-navbar">
            <div class="container">
                <div class="col-4">
                    <a href="../[array]"><img class="img img-responsive img-logo" src="img/logo-nombre.png" alt="logo-name"><span class="text-white title-logo">Expertos en Tic</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div <?php if (isset($_SESSION['user_log'])) {
                    ?> class="col-sm-12 col-md-12 col-lg-7 collapse navbar-collapse" <?php 
                }else if(isset($_GET[':']) || isset($_GET["servicios"])){
                    ?> class="col-sm-12 col-md-12 col-lg-8 collapse navbar-collapse" <?php 
                }else if (!isset($_GET[':']) && !isset($_GET['user_log'])) {
                     ?> class="col-sm-12 col-md-12 col-lg-5 collapse navbar-collapse" <?php 
                } ?> id="navbarContent">
                    <!--Links-->
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item" >
                            <a <?php if (!isset($_GET[':']) && !isset($_GET["servicios"])) {
                                ?> class="nav-link linea-bottom" <?php 
                            }else {  ?> class="nav-link " <?php } ?> href="../[array]" data-offset="100">inicio</a>
                        </li>
                        <li class="nav-item">
                            <a <?php if (@$_GET[':']=="servicios-array" || isset($_GET["servicios"])) {
                                ?> class="nav-link linea-bottom" <?php 
                            }else {  ?> class="nav-link " <?php } ?> href="../[array]/?:=servicios-array" data-offset="100">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a <?php if (@$_GET[':']=="productos-array") {
                                ?> class="nav-link linea-bottom" <?php 
                            }else {  ?> class="nav-link " <?php } ?> href="../[array]/?:=productos-array" data-offset="90">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a <?php if (@$_GET[':']=="Portafolio-array") {
                                ?> class="nav-link linea-bottom" <?php 
                            }else {  ?> class="nav-link " <?php } ?> href="../[array]/?:=Portafolio-array&categoria=DesarrolloWeb" data-offset="80">Portafolio</a>
                        </li>




                        <?php 
                 if (!isset($_SESSION['user_log'])) 
                 {

                        if (isset($_GET[":"]) || isset($_GET["servicios"])) {
                           ?>
                           <li class="nav-item">
                            <a <?php if (@$_GET[':']=="iniciar-sesion") {
                                ?> class="nav-link linea-bottom" <?php 
                            }else {  ?> class="nav-link " <?php } ?> href="../[array]/?:=iniciar-sesion" data-offset="80">Iniciar sesión</a>
                        </li>
                           <?php 
                        } ?>
                        <?php if (isset($_GET[":"]) || isset($_GET["servicios"])) {
                           ?>
                           <li class="nav-item">
                            <a <?php if (@$_GET[':']=="crear-cuenta") {
                                ?> class="nav-link linea-bottom" <?php 
                            }else {  ?> class="nav-link " <?php } ?> href="../[array]/?:=crear-cuenta" data-offset="80">Crear cuenta</a>
                        </li>
                           <?php 
                        } 

                }else{
                    ?>
                   <li class="nav-item">
                            <a <?php if (@$_GET[':']=="MiCuenta") {
                                ?> class="nav-link linea-bottom" <?php 
                            }else {  ?> class="nav-link " <?php } ?> href="../[array]/?:=MiCuenta" data-offset="80"><?php 
                            if (@$_GET[':']!=="MiCuenta") {
                                  echo $name_user; }else{ echo "Mi cuenta"; } ?></a>
                        </li>
                    <?php 
                }
                        ?>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!--/Navbar-->