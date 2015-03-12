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
    // Test 3: D = 2
    // Test 4: A + D = 4
    // Test 5: A + D + B + F + K + J + Q = 33

    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
    {

        function test_ScrabbleScore()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $letters = ['a'];

            //Act
            $result = $test_ScrabbleScore->getScore($letters);

            //Assert
            $this->assertEquals("1", $result);
        }

    }

?>
