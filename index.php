

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ShifTune Wheel</title>
        <link rel="icon" type="image/png" href="assets/img/logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo2.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Galerie</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Custom</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Matériaux</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                
                    <?php
                    if (isset($_GET['ok'])){
                      if($_GET['ok']){
                        echo '<style> header.masthead{background-image: url("assets/img/banniere.gif");} </style>';
                        }    
                    }
                    ?>
                  
                    <!--<form method='get'>
                        <td><input name='ok' type='submit' value='Valider'></td>
                    </form>-->
                   
                <div class="masthead-heading text-uppercase">SHIF<span id="text-red">TUNE</span></div>
                <div class="masthead-subheading">Spécialiste volant custom</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about">Personnalisation</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nos services</h2>
                    <hr style="width: 100px">  
                    <h3 class="section-subheading text-muted">ShifTune vous proprose ses services sur mesure avec un prix dès plus attractif !</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-check-square fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Anatomie du volant</h4>
                        <p class="text-muted">Rajout de repose pouce <br> Ajout d'un méplat </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-cogs fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Shift Light LED</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-signal fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Pièces carbones</h4>
                        <p class="text-muted">Revetement en véritable carbone de vos inserts ou en covering au choix</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Galerie</h2>
                    <hr style="width: 100px"> 
                    <h3 class="section-subheading text-muted">Retrouver en image nos réalisations.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/1.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">BMW M3</div>
                                <div class="portfolio-caption-subheading text-muted">Cuir - Carbone</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/2.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Audi RS3</div>
                                <div class="portfolio-caption-subheading text-muted">Cuir - Suédine</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/3.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">BMW M3</div>
                                <div class="portfolio-caption-subheading text-muted">Suédine - Carbone</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/4.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">GOLF 7R</div>
                                <div class="portfolio-caption-subheading text-muted">Cuir - Suédine</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/5.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">BMW M3</div>
                                <div class="portfolio-caption-subheading text-muted">Cuir - Carbone</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/6.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Audi RS3</div>
                                <div class="portfolio-caption-subheading text-muted">Cuir - Suédine</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container"><balise id="hautdepage"></balise>
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">CUSTOM</h2>
                    <hr style="width: 100px">  
                    <h3 class="section-subheading text-muted">Personnalisé votre volant sur mesure !</h3>
                </div>
                <div class="Menu">
                    <div class="photo" >
                    </div>
                    <div class="bouton">
                        <div class="formulaire">
                        	
                        	<div class="Niveau">

                                <label class="gras">Style volant</label>
                                <select autocomplete="off" class="css-input" name="style" id="select-style" >
                                    <option selected="" disabled="" >--- Please Select ---</option>
                                    <option value="origine">Volant Origine</option>
                                    <option value="pack">Volant Pack M</option>
                                  </select>
                                <br/>
                                <label class="gras">Repose Pouce</label>
                                <select class="css-input" name="pouce" id="repose-pouce" >
                                    <option>--- Please Select ---</option>
                                </select>

                        	   <br/>
                                <label class="gras">Deco volant</label>
					              <select class="css-input" id="select-css" onchange="getValue();">
                                    <option>--- Please Select ---</option>
					             
					              </select>
                        	</div>

				            <div class="couleur">

					            <label><b>Couleur</b></label>
					            <form method='get'>
								  <input type="radio" id="male" name="gender" value="male">
								  <label for="male">Rouge</label><br>
								  <input type="radio" id="female" name="gender" value="female">
								  <label for="female">Noir</label><br>
								  <input type="radio" id="other" name="gender" value="other">
								  <label for="other">Bleu</label>
								  
								</form>
							</div>
				        </div>
                        
				        <div class="prix">
				        	<label id="java-prix"></label>
                            <form method='post' action="javascript:void(1);">
                        <input name='validation-volant' id="bouton-valide" type='submit' value='Valider'>
                    </form>
				        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nos matériaux</h2>
                    <hr style="width: 100px"> 
                    <h3 class="section-subheading text-muted">Liste de nos différents tissus et matériaux.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member" id="cuir">
                            <img class="mx-auto rounded-circle" src="assets/img/materiaux/cuir.png" alt="" />
                            <h4>Simili Cuir | Cuir Perforé</h4>
                            <p class="text-muted">Tissu imitation cuir</p>
                            <a href="javascript:void(1);" id="test1">Details</a>
                        </div>

                        
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/materiaux/suede.png" alt="" />
                            <h4>Suédine</h4>
                            <p class="text-muted">Tissu au toucher doux</p>
                            <a href="javascript:void(1);" id="test2">Details</a>
                        </div>
                        
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/materiaux/carbone.png" alt="" />
                            <h4>Carbone</h4>
                            <p class="text-muted">Revêtement en fibre</p>
                            <a href="javascript:void(1);" onclick="toggle()">Details</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Plus de photos disponibles dans la section <a class="js-scroll-trigger" href="#portfolio" style="color: red">Galerie</a></p></div>
                </div>
            </div>
        </section>

        <div id="popup">
            <h2> Simili Cuir</h2>
            <p> Texte détails</p>
            <a href="javascript:void(1);" onclick="close1()">Fermer</a>
        </div>

        <div id="popup2">
            <h2> Suédine</h2>
            <p> Texte détails</p>
            <a href="javascript:void(1);" onclick="close2()">Fermer</a>
        </div>
        
        <script type="text/javascript">
            document.getElementById('test1').onclick = function() {
            var blur = document.getElementById('team');
            blur.classList.toggle('active');
            var popup = document.getElementById('popup');
            popup.classList.toggle('active');
            }

            document.getElementById('test2').onclick = function() {
            var blur = document.getElementById('team');
            blur.classList.toggle('active');
            var popup = document.getElementById('popup2');
            popup.classList.toggle('active');
            }

            function close1(){
            var blur = document.getElementById('team');
            blur.classList.toggle('active');
            var popup = document.getElementById('popup');
            popup.classList.toggle('active');
            }

            function close2(){
            var blur = document.getElementById('team');
            blur.classList.toggle('active');
            var popup = document.getElementById('popup2');
            popup.classList.toggle('active');
            }
        </script>

        <section class="page-section" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">CUSTOM</h2>
                    <hr style="width: 100px"> 
                    <h3 class="section-subheading text-muted">Section finale personnalisation.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="divphoto">
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="divformulaire">
                            <div class="taille">
                        		<label>TAILLE :</label>
					            <form method="post">
					              <select name="taille">
					                <option>27/32</option>
					                <option>28/34</option>
					                <option>29</option>
					                <option>29/30</option>
					                <option>30</option>
					                <option>31/30</option>
					                <option>32</option>
					              </select>
					            </form>
                        	</div>
				            <div class="couleur">
					            <label>COULEUR :</label>
					            <?php
			                    if (isset($_GET['cuir'])){
			                      if($_GET['cuir']){
			                        echo '<style> .divphoto{background-image: url("assets/img/logo.png");} </style>';
			                        }    
			                    }
			                    ?>
					            <form>
								  <input type="radio" id="carbon" name="gender" value="carbon">
								  <label for="male">Carbon</label><br>
								  <input type="radio" id="cuir" name="gender" value="cuir">
								  <label for="female">Cuir</label><br>
								  <input type="radio" id="daim" name="gender" value="daim">
								  <label for="other">Daim</label>
								</form>
							</div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>


        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nous contacter</h2>
                    <h3 class="section-subheading text-muted">Pour toutes demandes spécifiques ou questions</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Nom *" required="required" data-validation-required-message="Merci de rentrer votre nom." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Merci de rentrer votre adresse email." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Téléphone *" required="required" data-validation-required-message="Merci de rentrer votre téléphone" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Votre Message *" required="required" data-validation-required-message="Merci de rentrer votre message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © ShifTune 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">BMW M3</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1G.png" alt="" />
                                    
                                    <button class="btn btn-close" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Audi RS3</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2G.png" alt="" />
                                    
                                    <button class="btn btn-close" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">BMW M3</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3G.png" alt="" />
                                    
                                    <button class="btn btn-close" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">GOLF 7R</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4G.png" alt="" />
                                    
                                    <button class="btn btn-close" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">BMW M3</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5G.png" alt="" />
                                   
                                    <button class="btn btn-close" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Audi RS3</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6G.png" alt="" />
                                   
                                    <button class="btn btn-close" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/dynamic.js"></script>
    </body>
</html>

<script>
	function UrlVolant(test, url) {
		test.style.backgroundImage = "url('VolantOrigine/Niveau "+url+".png')";
	}
</script>