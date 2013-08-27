<?php
    include('./php/pdo.php');
    include('./php/bookClass.php');
    include('./php/contactClass.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP - Create Book</title>

        <link href="./less/style.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    </head>

    <body>
        <header></header>

<!-- END COMMUN PART -->

        <form name="createBook" method="post" action="">
            <input type="text" class="firstName" name="firstName" placeholder="Prénom">
            <input type="text" class="lastName" name="lastName" placeholder="Nom">
            <br>
            <input type="text" class="phone" name="phone" placeholder="Téléphone">
            <input type="text" class="website" name="website" placeholder="Site Internet">
            <br>
            <input type="text" class="mail" name="mail" placeholder="Adresse mail">
            <input type="text" class="mailConfirm" name="mailConfirm" placeholder="Correction adresse mail">
            <br>
            <input type="text" class="presentation" name="presentation" placeholder="Présentation">
            <br>
            <button type="submit" name="submit">Send data</button>
        </form>


        <?php
            if (isset($_POST['submit'])) {
                $book = new book ('',$_POST['nom'],$_POST['occupe']);
            }
        ?>

<!-- START COMMUN PART -->

        <footer></footer>

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
            <!-- Custom -->
                <script type="text/javascript" src="js/bookland.custom.js"></script>
    </body>
</html>