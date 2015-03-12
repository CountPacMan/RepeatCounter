<?php

    class ScrabbleScore {

      function getScore($letters) {
        $final_score = 0;
        $scores1 = ["A", "E", "I", "O", "U", "L", "N", "R", "S", "T"];
        foreach ($letters as $letter) {
            foreach ($scores1 as $score) {
                if (strtolower($letter) == strtolower($score)) {
                    $final_score++;
                }
            }
        }
        return $final_score;
      }
    }
 ?>
