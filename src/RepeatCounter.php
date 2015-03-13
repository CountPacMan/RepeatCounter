<?php

    class RepeatCounter {

      function getCount($haystack, $needle) {
        $count = 0;
        $exploded_haystack = explode(" ", $haystack);
        foreach ($exploded_haystack as $word) {
          strtolower($word) == strtolower($needle) ? $count++ : "";
        }
        return $count;
      }
    }
 ?>
