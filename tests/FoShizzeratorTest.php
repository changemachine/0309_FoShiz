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
        }

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


    }

?>
