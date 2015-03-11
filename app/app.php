<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/RockPaperScissors.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('home.twig');
  });

  $app->post("/generate", function() use ($app) {
    $player1 = $_POST['player1'];
    $player2 = $_POST['player2'];
    $newGame = new FindReplace();
    $result = $newGame->play($player1, $player2);
    return $app['twig']->render('generate.twig', array('player1' => $player1, 'player2' => $player2, 'result' => $result, 'computer' => false));
  });

  $app->get("/computer", function() use ($app) {
    return $app['twig']->render('computer.twig');
  });

  $app->post("/computerGenerate", function() use ($app) {
    $player1 = $_POST['player1'];
    $newGame = new FindReplace();
    $player2 = $newGame->playComputer($player1);
    $result = $newGame->play($player1, $player2);
    return $app['twig']->render('generate.twig', array('player1' => $player1, 'player2' => $player2, 'result' => $result, 'computer' => true));
  });

  return $app;
?>
