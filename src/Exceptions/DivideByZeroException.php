<?php

namespace Spheracle\Exceptions;

use Spheracle\Exceptions\BaseException;

class DivideByZeroException extends BaseException
{
    // Redefine the exception so message isn't optional
    public function __construct($message, $code = 0, Exception $previous = null) {
        
        if (!$message)
        {
        	$message = "Divison by Zero invalid";
        }
    
        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }
}


?>