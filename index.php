<?php
    include_once('twig/lib/Twig/Autoloader.php');
    require_once 'Faker/src/autoload.php';
    Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader, array(
      'cache' => false
    ));

    $faker = Faker\Factory::create('fr_FR');

    if (is_array($_GET['page'])) {
        $page = implode('/', $_GET['page']);
    } else {
        $page = $_GET['page'];
    }

    echo $twig->render($page . '.html.twig', array(
        'moteur_name' => 'Twig',
        'faker' => $faker
    ));
?>
