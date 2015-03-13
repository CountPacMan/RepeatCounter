<?php

    class RepeatCounter {

      function getCount($haystack, $needle) {
        $count = 0;
        foreach (str_split($haystack) as $word) {
          $word == $needle ? $count++ : "";
        }
        return $count;
      }
    }
 ?>
