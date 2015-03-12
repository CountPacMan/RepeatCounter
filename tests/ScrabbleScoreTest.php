<?php

    require_once "src/ScrabbleScore.php";

    // Specs:
    // Takes a word and returns the Scrabble score for it according to these values:
    // - A, E, I, O, U, L, N, R, S, T  =     1
    // - D, G                            =     2
    // - B, C, M, P                     =      3
    // - F, H, V, W, Y                  =      4
    // - K                               =     5
    // - J, X                            =     8
    // - Q, Z                            =     10

    // Test 1: A = 1
    // Test 2: A + E = 2
    // Test 3: A + A = 2
    // Test 4: D = 2
    // Test 5: A + D = 3
    // Test 6: B + K = 8
    // Test 7: A + D + B + F + K + J + Q = 33

    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
    {

        function test_ScrabbleScore_singleLetter()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $letters = ['a'];

            //Act
            $result = $test_ScrabbleScore->getScore($letters);

            //Assert
            $this->assertEquals("1", $result);
        }

        function test_ScrabbleScore_twoLetter()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $letters = ['a', 'e'];

            //Act
            $result = $test_ScrabbleScore->getScore($letters);

            //Assert
            $this->assertEquals("2", $result);
        }

        function test_ScrabbleScore_twoDuplicateLetter()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $letters = ['a', 'a'];

            //Act
            $result = $test_ScrabbleScore->getScore($letters);

            //Assert
            $this->assertEquals("2", $result);
        }

        function test_ScrabbleScore_twoPointLetter()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $letters = ['d'];

            //Act
            $result = $test_ScrabbleScore->getScore($letters);

            //Assert
            $this->assertEquals("2", $result);
        }

        function test_ScrabbleScore_twoPointOnePointLetter()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $letters = ['a', 'd'];

            //Act
            $result = $test_ScrabbleScore->getScore($letters);

            //Assert
            $this->assertEquals("3", $result);
        }

        function test_ScrabbleScore_threePointFivePointLetter()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $letters = ['b', 'k'];

            //Act
            $result = $test_ScrabbleScore->getScore($letters);

            //Assert
            $this->assertEquals("8", $result);
        }

        function test_ScrabbleScore_multiLetter()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $letters = ["A", "D", "B", "F", "K", "J", "Q"];

            //Act
            $result = $test_ScrabbleScore->getScore($letters);

            //Assert
            $this->assertEquals("33", $result);
        }
    }

?>
