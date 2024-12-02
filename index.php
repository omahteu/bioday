<!DOCTYPE html>
<html lang="pt-br">
   <?php
   include("html/partials/header.php") 
   ?>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <?php
               include("html/partials/menu.php")
               ?>
            </nav>
         </div>
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <section class="slide-wrapper">
               <div class="container-fluid">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                     </ol>
                     <div class="carousel-inner">
                        <?php
                        include("html/partials/banner.php")
                        ?>
                     </div>
                  </div>
               </div>
            </section>
            <div class="container">
               <div class="video_bt">
                  <div class="play_icon"><img src="images/play-icon.png"></div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- portfolio section start -->
      <div class="portfolio_section layout_padding" id="catalogo">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="portfolio_taital">Nosso <span class="portfolio_taital_1">Catálogo</span></h1>
               </div>
            </div>
            <?php
            include("html/partials/catalogo.php")
            ?>
            <div class="seemore_bt"><a href="html/catalogo.php">Ver mais produtos</a></div>
         </div>
      </div>
      <!-- portfolio section end -->
      <!-- blog section start -->
      <!-- <div class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="blog_taital">My <span class="blog_taital_1">Blog</span></h1>
                  <p class="blog_text">upidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
               </div>
            </div>
         </div>
         <div class="blog_section_2">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="blog_box">
                        <div class="blog_img">
                           <h4 class="date_text">Jun 05</h4>
                           <h4 class="prep_text">Veniam, quis nostrud </h4>
                        </div>
                        <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="blog_box">
                        <div class="blog_img_2">
                           <h4 class="date_text">Jun 05</h4>
                           <h4 class="prep_text">Veniam, quis nostrud </h4>
                        </div>
                        <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="blog_box">
                        <div class="blog_box_3">
                           <div class="blog_img">
                              <h4 class="date_text">Jun 05</h4>
                              <h4 class="prep_text">Veniam, quis nostrud </h4>
                           </div>
                           <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="readmore_bt_1"><a href="#">Read More</a></div>
            </div>
         </div>
      </div> -->
      <!-- blog section end -->
      <!-- services section start -->
      <div class="services_section layout_padding" id="sobrenos">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital">Sobre <span class="portfolio_taital_1">Nós</span></h1>
               </div>
            </div>
         </div>
         <?php
         include("html/partials/sobrenos.php")
         ?>
      </div>
      <!-- services section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding" id="contato">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Nosso <span class="contact_taital_1">Contato</span></h1>
               </div>
            </div>
            <?php
            include("html/partials/contato.php")
            ?>
         </div>
      </div>
      <!-- contact section end -->
      <!-- project box section start -->
      <!-- <div class="project_box">
         <div class="container">
            <div class="project_main">
               <h1 class="hire_text">Hire me for your projects</h1>
               <div class="callnow_bt"><a href="#">Call Now</a></div>
            </div>
         </div>
      </div> -->
      <!-- project box section end -->
      <!-- footer section start -->
      <div class="footer_section">
         <div class="container">
         <?php
         include("html/partials/informacoes.php")
         ?>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2024 All Rights Reserved. Desenvolvido por <a href="https://themewagon.com">ThemeWagon</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $('#myCarousel').carousel({
            interval: false
         });
         
         $("#myCarousel").on("touchstart", function(event){
         
            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){
         
                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
         });
      </script>
   </body>
</html>