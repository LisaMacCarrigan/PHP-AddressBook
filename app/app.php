<?php

    require_once __DIR__ ."/../vendor/autoload.php";
    require_once __DIR__ ."/../src/Contact.php";

    session_start();

    if (empty($_SESSION["list_of_contacts"])) {
        $_SESSION["list_of_contacts"] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig', array('list_of_contacts' => Contact::getAll()));

    });

    $app->post("/create_contact", function() use ($app) {
        $contact = new Contact($_POST['first_name'], $_POST['last_name'], $_POST['phone_number'], $_POST['address']);
        $contact->save();
        return $app['twig']->render('new_contact.html.twig', array('new_contact' => $contact));
    });

    return $app;

?>
