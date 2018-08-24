<?php

namespace Exceptions;


use Javelin\Exceptions\BaseException;

class IllegalArgumentException extends BaseException
{
    // Redefine the exception so message isn't optional
    public function __construct($message, $code = 0, Exception $previous = null) {
        
        if (!$message)
        {
        	$message = "Argument passed is illegal";
        }
    
        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }
}


?>