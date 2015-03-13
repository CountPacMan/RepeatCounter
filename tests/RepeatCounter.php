<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_RepeatCounter_test1()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;

            //Act
            $result = $test_RepeatCounter->getCount($haystack, $needle);

            //Assert
            $this->assertEquals("", $result);
        }


    }

?>
