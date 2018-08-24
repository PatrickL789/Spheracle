<?php

namespace Exceptions;

use Exceptions\BaseException;

class OutOfBoundsException extends BaseException
{
    // Redefine the exception so message isn't optional
    public function __construct($message, $code = 0, Exception $previous = null) {
        
        if (!$message)
        {
        	$message = "Value out of bounds";
        }
    
        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }
}


?>