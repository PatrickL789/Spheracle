<?php

namespace Javelin\Exceptions;

use Javelin\Exceptions\BaseException;

class IllegalStateChangeException extends BaseException
{
    // Redefine the exception so message isn't optional
    public function __construct($message, $code = 0, Exception $previous = null) {
        
        if (!$message)
        {
        	$message = "Illegal State Change";
        }
    
        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }
}


?>