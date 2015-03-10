<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/FoShizzerator.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('home.twig');
  });

  $app->post("/generate", function() use ($app) {
    $input = $_POST['input'];
    $newFoShizzer = new FoShizzer();
    $generated = $newFoShizzer->translate($input);

    return $app['twig']->render('generate.twig',  array('input' => $input, 'generated' => $generated));
  });
    //BAD!!!  array('translation' => $input, 'generated' => $generated));
 // });

  return $app;
?>
