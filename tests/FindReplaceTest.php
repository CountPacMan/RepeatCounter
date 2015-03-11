<?php

    require_once "src/FindReplace.php";

    class FindReplaceTest extends PHPUnit_Framework_TestCase
    {

        function test_findReplaceWholeWords()
        {
            //Arrange
            $test_FindReplace = new FindReplace;
            $big_string = "Hello world";
            $to_replace = "world";
            $replacement = "universe";

            //Act
            $result = $test_FindReplace->replace($big_string, $to_replace, $replacement);

            //Assert
            $this->assertEquals("Hello universe", $result);
        }


    }

?>
