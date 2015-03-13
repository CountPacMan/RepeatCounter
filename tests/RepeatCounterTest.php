<?php

    require_once "src/RepeatCounter.php";

    // RepeatCounter specs
    //
    // Returns how frequently a word appears in a given string. The user inputs both the word and the string of words to check. Repeat Counter checks for full word matches only.
    //
    // Single char words
    // Spec 1: Test find "a" in "a". Returns 1.
    // Spec 2: Test find "a" in "b". Returns 0.
    // Spec 3: Test find "a" in "ab". Returns 0.
    // Spec 4: Test find "a" in "aa". Returns 0.
    // Spec 5: Test find "a" in "a a". Returns 2.
    // Spec 6: Test find "a" in "a b a". Returns 2.
    //
    // Multi char words
    // Spec 7: Test find "abba" in "abba". Returns 1.
    // Spec 8: Test find "abba" in "a abb word ababba abba". Returns 1.
    // Spec 9: Test find "abba" in "a abba word ababba abba words abba test". Returns 3.
    //
    // Capitalization differences in matches
    // Spec 10: Test find "A" in "a". Returns 1.
    // Spec 11: Test find "a" in "A". Returns 1.
    // Spec 12: Test find "a" in "aB". Returns 0.
    // Spec 13: Test find "abba" in "Abba". Returns 1.
    // Spec 14: Test find "abba" in "abbA". Returns 1.
    // Spec 15: Test find "abba" in "a abb Word abAbba Abba". Returns 1.
    // Spec 16: Test find "Abba" in "a abBa word ababba Abba words abba test". Returns 3.

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_RepeatCounter_test1()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $haystack = "a";
            $needle = "a";

            //Act
            $result = $test_RepeatCounter->getCount($haystack, $needle);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_RepeatCounter_test2()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $haystack = "a";
            $needle = "b";

            //Act
            $result = $test_RepeatCounter->getCount($haystack, $needle);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_RepeatCounter_test3()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $haystack = "ab";
            $needle = "a";

            //Act
            $result = $test_RepeatCounter->getCount($haystack, $needle);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_RepeatCounter_test4()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $haystack = "aa";
            $needle = "a";

            //Act
            $result = $test_RepeatCounter->getCount($haystack, $needle);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_RepeatCounter_test5()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $haystack = "a a";
            $needle = "a";

            //Act
            $result = $test_RepeatCounter->getCount($haystack, $needle);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_RepeatCounter_test6()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $haystack = "a b a";
            $needle = "a";

            //Act
            $result = $test_RepeatCounter->getCount($haystack, $needle);

            //Assert
            $this->assertEquals(2, $result);
        }


    }

?>
