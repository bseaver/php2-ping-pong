<?php

    require_once "src/PingPong.php";

    class PingPongTest extends PHPUnit_Framework_TestCase
    {

        function test_calculateExceptions_n1()
        {
            //Arrange
            $test_exceptions = array(array(3, 'Ping'), array(5, 'Pong'), array(15, 'Ping-Pong'));
            $test_PingPong = new PingPong($test_exceptions);
            $input = 1;

            //Act
            $result = $test_PingPong->calculateException($input);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_calculateExceptions_exception_list()
        {
            //Arrange
            $test_exceptions = array(array(3, 'Ping'), array(5, 'Pong'), array(15, 'Ping-Pong'));
            $test_PingPong = new PingPong($test_exceptions);

            foreach ($test_exceptions as $exception) {
                //Arrange
                $expecting = $exception[1];

                //Act
                $result = $test_PingPong->calculateException($exception[0]);

                //Assert
                $this->assertEquals($expecting, $result);
            }
        }
    }

?>
