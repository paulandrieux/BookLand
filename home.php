<?php
    include('./php/pdo.php');
    include('./php/bookClass.php');
    include('./php/contactClass.php');
    include('./php/functions.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP - Affichage par date</title>

        <link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
        <link href="./less/style.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    </head>

    <body>
        <div id="st-container" class="st-container">
            <div class="st-pusher">
                <nav class="st-menu st-effect-1" id="menu-1">
                    <h2 class="icon icon-lab"><img src="img/logoNav.png">Menu</h2>
                    <ul>
                        <li><a class="icon active" href="#">Page d'accueil</a></li>
                        <li><a class="icon" href="#">Page d'inscription</a></li>
                        <li><a class="icon" href="#">Tout les <span class="book">Book</span></a></li>
                        <li><a class="icon" href="#">Voir un <span class="book">Book</span></a></li>
                        <p>Projet réalisé dans le cadre de la formation "développeur web" proposé par le CESI de Nantes. Crée par Julien Latouche, Anthony Martin & Loïc Goyet</p>
                    </ul>
                </nav>
                <div class="st-content"><!-- this is the wrapper for the content -->
                    <div class="st-content-inner">
                        <header>
                            <div class="container">
                                <a href="home.php" class="title">
                                    <img src="img/logoBookLand.png">
                                    BookLand
                                </a>
                                <div id="st-trigger-effects" class="column">
                                    <button data-effect="st-effect-1" class="btn important pull-right"><i class="icon-align-justify"></i> Menu</button>
                                </div>
                            </div>
                        </header>
                        <div class="headline">
                            <div class="container">
                                <h1>- Elevez votre <span class="book">Book</span> au sommet -</h1>
                                
                                    
                                    <a href="#" class="pull-right btn red subscribe"><img src="img/icn/addUser.png">Inscrivez vous maintenant !</a>
                                
                            </div>
                        </div>

                <!-- END COMMUN PART -->
                        
                        <div class="content">
                            <div class="container">
                                <div class="imgGrid">
                                    <a href="#" class="imgGrid1 imgGridItem small"></a>
                                    <a href="#" class="imgGrid2 imgGridItem long"></a>
                                    <a href="#" class="imgGrid3 imgGridItem large"></a>
                                    <a href="#" class="imgGrid4 imgGridItem long"></a>
                                    <a href="#" class="imgGrid5 imgGridItem small"></a>
                                </div>
                                <div class="homeContent">
                                    <div class="lastBook">
                                        <?php showlastbook($pdo); ?>
                                    </div>
                                    <div class="side">
                                        <a href="" class="btn important"><i class="icon-zoom-in"></i> Voir tout les books</a>
                                        <h3>A propos :</h3>
                                        <p><span class="book">BookLand</span> est une interface servant à mettre en relation les différents protagonistes du monde du graphisme.  Que vous soyez professionnel , amateur ou débutant vous pouvez mettre en ligne votre <span class="book">Book</span> et proposer vos services. En vous inscrivant vous accéderez aux photos et informations qui vous intéresse. Les informations personnels ne seront pas dévoilé au grand public, elles sont géré par l’administrateur.
                                        N’hésitez plus et inscrivez vous au plus vite !
                                        </p>
                                        <ul class="social">
                                            <li class="social-item facebook"><a href=""><i class="icon-facebook-sign"></i> BookLand</a></li>
                                            <li class="social-item twitter"><a href=""><i class="icon-twitter-sign"></i> @BookLand</a></li>
                                            <li class="social-item google-plus"><a href=""><i class="icon-google-plus-sign"></i> BookLand</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                <!-- START COMMUN PART -->

                        <footer></footer>
                    </div>
                </div>
            </div>
        </div>


        <!-- Script Library -->
            <!-- Bootstrap -->
                <script type="text/javascript" src="js/bootstrap/tooltip.js"></script>
                <script type="text/javascript" src="js/bootstrap/affix.js"></script>
                <script type="text/javascript" src="js/bootstrap/alert.js"></script>
                <script type="text/javascript" src="js/bootstrap/button.js"></script>
                <script type="text/javascript" src="js/bootstrap/carousel.js"></script>
                <script type="text/javascript" src="js/bootstrap/collapse.js"></script>
                <script type="text/javascript" src="js/bootstrap/dropdown.js"></script>
                <script type="text/javascript" src="js/bootstrap/modal.js"></script>
                <script type="text/javascript" src="js/bootstrap/popover.js"></script>
                <script type="text/javascript" src="js/bootstrap/scrollspy.js"></script>
                <script type="text/javascript" src="js/bootstrap/tab.js"></script>
                <script type="text/javascript" src="js/bootstrap/transition.js"></script>
            <!-- Modernizr -->
                <script type="text/javascript" src="js/modernizr.custom.js"></script>
                <script src="js/classie.js"></script>
                <script src="js/sidebarEffects.js"></script>
            <!-- Custom -->
                <script type="text/javascript" src="js/bookland.custom.js"></script>
    </body>
</html>