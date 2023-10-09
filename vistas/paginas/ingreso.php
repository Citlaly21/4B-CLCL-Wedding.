
<section class="breadcumd__banner">

    <div class="container">
        <div class="breadcumd__wrapper center">
        <div class="container-fluid">
    <div class="container py-5">
    <div class="d-flex justify-content-center text-center mt-5">
    <form class="p-5 bg-light" method="post" style="color:white;">
                <div class="form-group">
                    <label for="email" class="text-dark">Email address:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Escriba su email" id="email" name="ingresoEmail">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pwd" class="text-dark">Contraseña:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Escriba su password" id="pwd" name="ingresoPassword">
                    </div>
                </div>
                <?php
                require_once './controladores/formularios.controlador.php'
                ?>
                <?php 
                
                    $ingreso = new ControladorFormularios();
                    $ingreso -> ctrIngreso();
                ?>
                
                <button  type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
        
    </div>
        </div>
    </div>
</section>

<style>
    .breadcumd__banner {
    height: 100vh;
    margin: 0;
    padding: 0;
    }
</style>
<div class="footer__section">
   <div class="container">
      <div class="border__area">
         <div class="container">
            <div class="footer__logo center">
               <a href="index.php?pagina=index">
                  <img src="assets/img/logo/logo.png" alt="footer__logo">
               </a>
            </div>
            <div class="footer__bottom center">
               <p>© 2023 All Rights Reserved. Designed by <a href="#0" class="text-base-2">NextGenerationDev</a></p>
               <ul class="footer__icon">
                  <li>
                     <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li>
                     <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li class="active">
                     <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                  </li>
                  <li>
                     <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                  </li>
                  <li class="mr-none">
                     <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                  </li>
               </ul>
               <ul class="footer__menu">
                  <li><a href="index.php?pagina=index">Home</a></li>
                  <li><a href="index.php?pagina=about">About</a></li>
                  <li><a href="index.php?pagina=service">Service</a></li>
                  <li><a href="index.php?pagina=story">Story</a></li>
                  <li><a href="index.php?pagina=gallery">Gallery</a></li>
                  <li><a href="index.php?pagina=blog.">Blog</a></li>
                  <li><a href="index.php?pagina=contact">Contact</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
