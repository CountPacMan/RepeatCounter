<?php

    class RockPaperScissors {

        function play($player1, $player2) {
            if ($player1 == "rock" && $player2 == "scissors" || $player2 == "rock" && $player1 == "paper" || $player1 == "scissors" && $player2 == "paper") {
                return "Player 1";
            } else if ($player2 == "rock" && $player1 == "scissors" || $player1 == "rock" && $player2 == "paper" || $player1 == "paper" && $player2 == "scissors") {
                return "Player 2";
            } else {
                return "Nobody";
            }
        }

        function playComputer($player1) {
          //computer is player2
          $player2_play = rand(1, 3);
          $player2 = "";
          if ($player2_play == 1) {
            $player2 = "rock";
          } elseif ($player2_play == 2) {
            $player2 = "scissors";
          } else {
            $player2 = "paper";
          }

          return $player2;
        }
    }
 ?>
