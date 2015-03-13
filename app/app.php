<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/RepeatCounter.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('home.twig');
  });

  $app->post("/generate", function() use ($app) {
    $haystack = $_POST['haystack'];
    $needle = $_POST['needle'];
    $new_count = new RepeatCounter;
    $count = $new_count->getCount($haystack, $needle);
    return $app['twig']->render('generate.twig', array('haystack' => $haystack, 'needle' => $needle, 'count' => $count));
  });

  return $app;
?>
