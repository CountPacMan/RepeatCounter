<?php

    class ScrabbleScore {

      function getScore($letters) {
        $final_score = 0;
        $scores1 = ["A", "E", "I", "O", "U", "L", "N", "R", "S", "T"];
        $scores2 = ["D", "G"];
        $scores3 = ["B", "C", "M", "P"];
        $scores4 = ["F", "H", "V", "W", "Y"];
        $scores5 = ["K"];
        $scores8 = ["J", "X"];
        $scores10 = ["Q", "Z"];
        foreach ($letters as $letter) {
            foreach ($scores1 as $score) {
                if (strtolower($letter) == strtolower($score)) {
                    $final_score++;
                }
            }
            foreach ($scores2 as $score) {
                if (strtolower($letter) == strtolower($score)) {
                    $final_score += 2;
                }
            }
            foreach ($scores3 as $score) {
                if (strtolower($letter) == strtolower($score)) {
                    $final_score += 3;
                }
            }
            foreach ($scores4 as $score) {
                if (strtolower($letter) == strtolower($score)) {
                    $final_score += 4;
                }
            }
            foreach ($scores5 as $score) {
                if (strtolower($letter) == strtolower($score)) {
                    $final_score += 5;
                }
            }
            foreach ($scores8 as $score) {
                if (strtolower($letter) == strtolower($score)) {
                    $final_score += 8;
                }
            }
            foreach ($scores10 as $score) {
                if (strtolower($letter) == strtolower($score)) {
                    $final_score += 10;
                }
            }
        }
        return $final_score;
      }
    }
 ?>
