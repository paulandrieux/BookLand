<?php
    include('./php/pdo.php');
    include('./php/bookClass.php');
    include('./php/contactClass.php');

    $idBook = $_GET['id'];

    $bookData = $pdo -> query('SELECT * FROM book WHERE id='.$idBook);
    if ($data = $bookData->fetch()) {
        $book = new book ($data['lastName'], $data['firstName'], $data['mail'], $data['phone'], $data['website'], $data['description']);
    }
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
        <!-- Affiche les initiales en majuscule dans le h1 et la description dans le h2 -->
        <h1><?php echo strtoupper(substr($book -> getFirstName(), 0, 1)).strtoupper(substr($book -> getLastName(), 0, 1)) ?></h1>
        <h2><?php echo $book -> getDescription() ?></h2>

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