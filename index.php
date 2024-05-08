<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>AUTO-GNY</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Best Sellers</a></li>
                           <li><a href="#">Gift Ideas</a></li>
                           <li><a href="#">New Releases</a></li>
                           <li><a href="#">Today's Deals</a></li>
                           <li><a href="#">Customer Service</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><img src="images/result.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.html">Accueil</a>
                     <a href="fashion.html">Batteries</a>
                     <a href="electronic.html">Huile moteur</a>
                     <a href="jewellery.html">Accessoires</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="images/flag-france.png" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">
                           <?php                                    
                                 if(isset($_SESSION['compte']) && $_SESSION['compte']=true){
                           ?>        
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              
                           </li>
                           
                           <?php } ?>
                           
                           <?php                                    
                                 if(isset($_SESSION['compte']) && $_SESSION['compte']=true){
                           ?>
                                    <li><a href="deconnexion.php">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span class="padding_10">déconnexion</span></a>
                                    <?php }else{ ?>

                                    <li><a href="compte.html">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span class="padding_10">Compte</span></a>
                              <?php } ?>
                           </li>
                           <li>
                              <a href="panier.php">
                                 <span class="padding_10"><img src="images/panier.png" width="20px"> Panier </span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner bg main end -->
      <!-- fashion section start -->
      <div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            
            <?php
               require 'db.php';
               $sql = "SELECT * FROM produit WHERE categorie ='Batteries'";
               $affi = $connexion->prepare($sql);
               $affi->execute();
               $batteries = $affi->fetchAll(PDO::FETCH_OBJ);
            ?>

            <?php
               $sql = "SELECT * FROM produit WHERE categorie ='huile moteur'";
               $affi = $connexion->prepare($sql);
               $affi->execute();
               $huile = $affi->fetchAll(PDO::FETCH_OBJ);
            ?>

            <?php
               $sql = "SELECT * FROM produit WHERE categorie ='Accessoires'";
               $affi = $connexion->prepare($sql);
               $affi->execute();
               $Accessoires = $affi->fetchAll(PDO::FETCH_OBJ);
            ?>
           
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Batteries</h1>
                     <div class="fashion_section_2">
                        <div class="row">
      
                           <?php
                           for($i = 0 ; $i < 3 ; $i++){
                           ?>

                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text"><?= $batteries[$i]->nom_produit ?></h4>
                                 <p class="price_text">Prix  <span style="color: #262626;"><?php echo $batteries[$i]->prix ?></span></p>
                                 <div class="tshirt_img"><img src="<?php echo $batteries[$i]->image ?>"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="insert_panier.php?id=<?= $batteries[$i]->id_produit ?>">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <?php  } ?>
                           
                        </div>
                     </div>
                  </div>
               </div>
               
                <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Batteries</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        <?php
                           for($i = 3 ; $i < 6 ; $i++){
                           ?>

                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text"><?php echo $batteries[$i]->nom_produit ?></h4>
                                 <p class="price_text">Prix  <span style="color: #262626;"><?php echo $batteries[$i]->prix ?></span></p>
                                 <div class="tshirt_img"><img src="<?php echo $batteries[$i]->images ?>"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <?php  } ?>
                           
                        </div>
                     </div>
                  </div>
               </div> 
                <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Batteries</h1>
                     <div class="fashion_section_2">
                        <div class="row">

                           <?php
                           for($i = 6 ; $i < 9 ; $i++){
                           ?>

                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text"><?php echo "$batteries[$i]->nom_produit" ?></h4>
                                 <p class="price_text">Prix  <span style="color: #262626;"><?php echo $batteries[$i]->prix ?></span></p>
                                 <div class="tshirt_img"><img src="<?php echo $batteries[$i]->image ?>"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <?php  } ?>
                          
                        </div>
                     </div>
                  </div>
               </div> 
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
            
         </div>
      </div>
      <!-- fashion section end -->
      <!-- electronic section start -->
      <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Huile moteur</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        <?php
                           for($i = 0 ; $i < 3 ; $i++){
                           ?>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text"><?php echo $huile[$i]->nom_produit ?> </h4>
                                 <p class="price_text">Prix  <span style="color: #262626;"><?php echo $huile[$i]->prix ?></span></p>
                                 <div class="electronic_img"><img src="<?php echo $huile[$i]->image ?>"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <?php  } ?>
                           <!-- <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Castrol VECTON - 10W 40</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">300 DH</span></p>
                                 <div class="electronic_img"><img src="images/6.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">GTX ULTRACLEAN - 10W 40</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">300 DH</span></p>
                                 <div class="electronic_img"><img src="images/5.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Huile moteur</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        <?php
                           for($i = 3 ; $i < 6 ; $i++){
                           ?>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text"><?php echo $huile[$i]->nom_produit ?> </h4>
                                 <p class="price_text">Prix  <span style="color: #262626;"><?php echo $huile[$i]->prix ?></span></p>
                                 <div class="electronic_img"><img src="<?php echo $huile[$i]->image ?>"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#"> plus</a></div>
                                 </div>
                              </div>
                           </div>

                           

                           <!-- <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Shil helix - sae-40</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">160 DH</span></p>
                                 <div class="electronic_img"><img src="images/sae-40.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Shil helix - 5W 40</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">600 DH</span></p>
                                 <div class="electronic_img"><img src="images/8.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Huile moteur</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        <?php  } ?>
                        <?php
                           for($i = 6 ; $i < 9 ; $i++){
                           ?>

                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text"><?php echo $huile[$i]->nom_produit ?></h4>
                                 <p class="price_text">Prix  <span style="color: #262626;"><?php echo $huile[$i]->prix ?></span></p>
                                 <div class="electronic_img"><img src="<?php echo $huile[$i]->image ?>"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="insert_panier.php">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div>

                           <?php  } ?>

                           <!-- <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Total - 10W 40</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">300 DH</span></p>
                                 <div class="electronic_img"><img src="images/4.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Total - 15W 40</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">200 DH</span></p>
                                 <div class="electronic_img"><img src="images/3.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- electronic section end -->
      <!-- jewellery  section start -->
      <div class="jewellery_section">
         <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Accessoires</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        <?php
                           for($i = 0 ; $i < 3 ; $i++){
                           ?>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text"><?php echo $Accessoires[$i]->nom_produit ?></h4>
                                 <p class="price_text">Prix  <span style="color: #262626;"><?php echo $Accessoires[$i]->prix ?></span></p>
                                 <div class="jewellery_img"><img src="<?php echo $Accessoires[$i]->image ?>"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="insert_panier.php">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <?php  } ?>
                          <!--  <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Caméra de voiture</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">700 DH</span></p>
                                 <div class="jewellery_img"><img src="images/accessoir/caméra.jpg"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Cover de voiture</h4>
                                 <p class="price_text">Prix  <span style="color: #262626;">200 DH</span></p>
                                 <div class="jewellery_img"><img src="images/accessoir/Cover-respirable.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Ajouter au panier</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Accessoires</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        <?php
                           for($i = 3 ; $i < 6 ; $i++){
                           ?>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text"><?php echo $Accessoires[$i]->nom_produit ?>  </h4>
                                 <p class="price_text">Prix  <span style="color: #262626;"><?php echo $Accessoires[$i]->prix ?></span></p>
                                 <div class="jewellery_img"><img src="<?php echo $Accessoires[$i]->image ?>"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="insert_panier.php?id=<?=$row['id']?>">Ajouter</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <?php  } ?>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Accessoires</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        <?php
                           for($i = 6 ; $i < 9 ; $i++){
                           ?>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text"><?php echo $Accessoires[$i]->nom_produit ?></h4>
                                 <p class="price_text">Prix  <span style="color: #262626;"><?php echo $Accessoires[$i]->prix ?></span></p>
                                 <div class="jewellery_img"><img src="<?php echo $Accessoires[$i]->image ?>"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="insert_panier.php?id=<?=$row['id']?>">Ajouter</a></div>
                                    <div class="seemore_bt"><a href="#">voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <?php  } ?>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
            <div class="loader_main">
               <div class="loader"></div>
            </div>
         </div>
      </div>
      <!-- jewellery  section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="images/result.png"></a></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Best Sellers</a></li>
                  <li><a href="#">Gift Ideas</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Today's Deals</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number : <a href="#">+1 1800 1200 1200</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
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
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>