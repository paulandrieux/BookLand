<?php 
    ob_start(); 
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


        <!-- Book registrering form -->
        <form name="createBook" enctype="multipart/form-data" method="post" action="#">
            <input type="text" class="firstName" name="firstName" placeholder="Prénom">
            <input type="text" class="lastName" name="lastName" placeholder="Nom">
            <br>
            <input type="text" class="phone" name="phone" placeholder="Téléphone">
            <input type="text" class="website" name="website" placeholder="Site Internet">
            <br>
            <input type="text" class="mail" name="mail" placeholder="Adresse mail">
            <input type="text" class="mailConfirm" name="mailConfirm" placeholder="Correction adresse mail">
            <br>
            <input type="text" class="description" name="description" placeholder="Description">
            <br>
            <input type="file" name="dlImg" size="50">
            <br>
            <button type="submit" name="submit">Send data</button>

        </form>


        <?php
            if (isset($_POST['submit']) && ($_POST['mail'] == $_POST['mailConfirm'])) {
                $book = new book ('','',$_POST['lastName'],$_POST['firstName'],$_POST['mail'],$_POST['phone'],$_POST['website'],$_POST['description']);
                echo $book -> addBookInDb($pdo);
                $book -> setIdBookFromDb($pdo);

                if ((isset($_FILES['dlImg']['tmp_name'])&&($_FILES['dlImg']['error'] == UPLOAD_ERR_OK))) {
                    $pathDestination = 'img/bookImg/';
                    $imgName = $book -> getIdBook().'_'.$_FILES['dlImg']['name'];
                    move_uploaded_file($_FILES['dlImg']['tmp_name'], $pathDestination.$imgName);
                    echo "works";
                } else {
                    echo "arg";
                }

            } else {
                echo "the mails are differents";
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