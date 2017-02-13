<?php
    class PingPong
    {
        private $exceptions;

        function __construct($new_exceptions)
        {
            $this->setExceptions($new_exceptions);
        }

        function setExceptions($new_exceptions)
        {
            $this->exceptions = $new_exceptions;
        }

        function calculateException($input_number)
        {
            $output = $input_number;
            foreach ($this->exceptions as $exception) {
                if($input_number % $exception[0] == 0){
                    $output = $exception[1];
                }
            }
            return $output;
        }
    }
?>
