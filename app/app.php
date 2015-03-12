<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/ScrabbleScore.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('home.twig');
  });

  $app->post("/generate", function() use ($app) {
    $new_scrabble = new ScrabbleScore;
    $score = $new_scrabble->getScore($_POST['letters']);
    return $app['twig']->render('generate.twig', array('letters' => $_POST['letters'], 'score' => $score));
  });

  return $app;
?>
