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
            return $input_number;
        }
    }
?>
