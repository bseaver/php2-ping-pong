<?php

    require_once "src/PingPong.php";

    class PingPongTest extends PHPUnit_Framework_TestCase
    {

        function test_calculateExceptions_n1()
        {
            //Arrange
            $test_expections = array(array(3, 'Ping'), array(5, 'Pong'), array(15, 'Ping-Pong'));
            $test_PingPong = new PingPong($test_expections);
            $input = 1;

            //Act
            $result = $test_PingPong->calculateException($input);

            //Assert
            $this->assertEquals(1, $result);
        }
    }

?>
