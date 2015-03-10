<?php

    require_once "src/FoShizzerator.php";

    class FoShizzerTest extends PHPUnit_Framework_TestCase
    {
        function test_FoShizzer_1Word()
        {
            //Arrange
            $test_FoShizzer = new FoShizzer;
            $input = "Susan";

            //Act
            $result = $test_FoShizzer->translate($input);

            //Assert
            $this->assertEquals("Suzan", $result);
//PingPong: $this->assertEquals("ping", $result[3]);


        }
/*
        function test_FoShizzer_2Words()
        {
            //Arrange
            $test_FoShizzer = new FoShizzer;
            $input = "Susan is a gangsta!";

            //Act
            $result = $test_FoShizzer->translate($input);

            //Assert
            $this->assertEquals("Suzan iz a gangzta!", $result);
        }

        function test_makeTitleCase_mixedWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "qUeeN vIcToria";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Queen Victoria", $result);
        }

        // exceptions to capitalization include the words not at the beginning or end: a, an, the, and, but, or, nor, at, by, for, from, in, into, of, off, on, onto, out, over, up, with, to, as
        function test_makeTitleCase_exceptions()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "a neW biscuit In the gravy Of An The And But Or Nor At By fOr From In Into Of Off On Onto Out Over Up With To As awesome!";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("A New Biscuit in the Gravy of an the and but or nor at by for from in into of off on onto out over up with to as Awesome!", $result);
        }
*/

    }
 ?>
