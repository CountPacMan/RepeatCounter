<?php

    class FindReplace {

      function replace($big_string, $to_replace, $replacement) {
        // this version works as long as capitalization is the same
        // return str_replace($to_replace, $replacement, $big_string);

        // this version works as long as the partial word being partially replaced does not need to maintain origianl case
        // $exploded = explode(" ", $big_string);
        // $final = [];
        // foreach ($exploded as $word) {
        //   if (strstr(strtolower($word), strtolower($to_replace))) {
        //     $temp = str_replace(strtolower($to_replace), $replacement, strtolower($word));
        //     array_push($final, $temp);
        //   } else {
        //     array_push($final, $word);
        //   }
        // }

        // tests letter by letter to account for very biscuited cases and maintain original case in partials
        $final = "";

        for ($i = 0; $i < strlen($big_string); $i++) {
          if (strtolower($big_string[$i]) == strtolower($to_replace[0])) {
            $temp = $replacement[0];
            for ($j = 1; $j < strlen($to_replace); $j++) {
              if ($i + $j < strlen($big_string) && strtolower($to_replace[$j]) == strtolower($big_string[$i + $j])) {
                $temp .= $replacement[$j];
                if ($j == strlen($to_replace) - 1) {
                  for ($k = $j + 1; $k < strlen($replacement); $k++) {
                    $temp .= $replacement[$k];
                  }
                }
              }
            }
            if ($temp == $replacement) {
              $final .= $replacement;
              $i += strlen($to_replace) - 1;
            }
          } else {
            $final .= $big_string[$i];
          }
        }
        return $final;
      }
    }
 ?>
