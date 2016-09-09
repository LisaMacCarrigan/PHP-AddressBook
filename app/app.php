<?php

    require_once __DIR__ ."/../vendor/autoload.php";
    require_once __DIR__ ."/../src/Contact.php";

    //Session will start here

    $app = new Silex\Application();

    $app->get("/", function() {
        return "Home - test";
    });

    return $app;

?>
