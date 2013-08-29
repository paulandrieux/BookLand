<?php 
    ob_start(); 
    include('./php/pdo.php');
    include('./php/bookClass.php');
    include('./php/contactClass.php');
    include('./php/functions.php');
    include('./php/imgClass.php');
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
        <form name="createBook" enctype="multipart/form-data" method="post" action="">
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
            <input type="hidden" name="max_file_size" value="1048576" />
            <input type="file" name="dlImg">
            <input type="text" name="ImgDescription">
            <input type="hidden" name="max_file_size" value="1048576" />
            <input type="file" name="dlImg2">
            <input type="text" name="ImgDescription2">
            <input type="hidden" name="max_file_size" value="1048576" />
            <input type="file" name="dlImg3">
            <input type="text" name="ImgDescription3">
            <input type="hidden" name="max_file_size" value="1048576" />
            <input type="file" name="dlImg4">
            <input type="text" name="ImgDescription4">
            <br>
            <button type="submit" name="submit">Send data</button>

        </form>


        <?php
            if (isset($_POST['submit'])) {

                if ($_POST['mail'] == $_POST['mailConfirm']) {
                    $nom = $_POST['lastName'];
                    $prenom = $_POST['firstName'];
                    $mail = $_POST['mail'];
                    $telephone = $_POST['phone'];
                    $website = $_POST['website'];
                    $description = $_POST['description'];
                    $commentaire1 = $_POST['ImgDescription'];
                    $commentaire2 = $_POST['ImgDescription2'];
                    $commentaire3 = $_POST['ImgDescription3'];
                    $commentaire4 = $_POST['ImgDescription4'];

                    addBookInDb($pdo,$nom,$prenom,$mail,$telephone,$website,$description,$commentaire1,$commentaire2,$commentaire3,$commentaire4);


                //     if ((isset($_FILES['dlImg']['tmp_name'])&&($_FILES['dlImg']['error'] == UPLOAD_ERR_OK))) {
                //         $pathDestination = 'img/bookImg/';
                //         $imgName = $id.'_'.$_FILES['dlImg']['name'];
                //         move_uploaded_file($_FILES['dlImg']['tmp_name'], $pathDestination.$imgName);
                //         $img1 = new img('',$book -> getIdBook(),$imgName,$_POST['ImgDescription']);
                //         $img1 -> addImginDb($pdo);
                //     } else {
                //         echo "the upload of the image failed";
                //     }

                // } else {
                //     echo "the mails are differents";
                // }
            }

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