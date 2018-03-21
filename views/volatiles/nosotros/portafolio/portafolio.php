<?php  ?>

    <section class="portafolio">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 wow zoomIn mt-5 text-center" data-wow-delay="0.4s">
                    <h1 class="h1-responsive  m-0 text-uppercase title-portafolio  mt-3">Nuestros proyectos exitosos</h1>
                    <hr class="">
                    <p class="mb-5">En array nos da gusto poder presentarte nuestro portafolio de proyectos exitosos, mediante el cual ponemos a tu disposición nuestra experiencia.</p>
                </div>
              <div class="row content-between wow fadeInUp mt-3" data-wow-delay="0.4s">





                <div class="col-12 col-md-3">
                            <center>
                                <a href="./?:=Portafolio-array&categoria=DesarrolloWeb" class="btn btn-primary <?php if ($_GET["categoria"]=="DesarrolloWeb") {
                                ?> active <?php 
                            } ?>">Desarrollo de recursos</a>
                            
                            </center>
                </div>
                <div class="col-12 col-md-3">
                            <center>
                                <a href="./?:=Portafolio-array&categoria=Edu" class="btn btn-primary <?php if ($_GET["categoria"]=="Edu") {
                                ?> active <?php 
                            } ?>">Proyectos educativos</a>
                            
                            </center>
                </div>
                 <div class="col-12 col-md-3">
                            <center>
                                <a href="./?:=Portafolio-array&categoria=MedAudVisuales" class="btn btn-primary <?php if ($_GET["categoria"]=="MedAudVisuales") {
                                ?> active <?php 
                            } ?>">Medios audiovisuales</a>
                            
                            </center>
                </div>
                 <div class="col-12 col-md-3">
                            <center>
                                <a href="./?:=Portafolio-array&categoria=MantSoporteTecRyC" class="btn btn-primary <?php if ($_GET["categoria"]=="MantSoporteTecRyC") {
                                ?> active <?php 
                            } ?>">Soporte técnico</a>
                            
                            </center>
                          
                </div>
                

                <?php 
                    if ($_GET["categoria"]=="DesarrolloWeb") {
                        include("DesarrolloWeb.php");
                    }else if ($_GET["categoria"]=="MedAudVisuales") {
                        include("MedAudVisuales.php");
                    }else if ($_GET["categoria"]=="MantSoporteTecRyC") {
                        include("MantSoporteTecRyC.php");
                    }else if ($_GET["categoria"]=="Edu") {
                        include("Educ.php");
                    }
                 ?>
            </div>
        </div>
        </div>
        </div>
    </section>