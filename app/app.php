<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/FindReplace.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('home.twig');
  });

  $app->post("/generate", function() use ($app) {
    $big_string = $_POST['big_string'];
    $to_replace = $_POST['to_replace'];
    $replacement = $_POST['replacement'];
    $new_findReplace = new FindReplace();
    $new_sentence = $new_findReplace->replace($big_string, $to_replace, $replacement);
    return $app['twig']->render('generate.twig', array('big_string' => $big_string, 'to_replace' => $to_replace, 'replacement' => $replacement, 'new_sentence' => $new_sentence));
  });

  return $app;
?>
