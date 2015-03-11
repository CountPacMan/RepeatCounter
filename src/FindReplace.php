<?php

    class FindReplace {

      function replace($big_string, $to_replace, $replacement) {
        // return str_replace($to_replace, $replacement, $big_string);
        $exploded = explode(" ", $big_string);
        $final = [];
        foreach ($exploded as $word) {
          if (strstr(strtolower($word), strtolower($to_replace))) {
            $temp = str_replace(strtolower($to_replace), $replacement, strtolower($word));
            array_push($final, $temp);
          } else {
            array_push($final, $word);
          }
        }
        return implode(" ", $final);
      }
    }
 ?>
