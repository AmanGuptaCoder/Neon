<?php

namespace App\Validation\Exceptions;

use Respect\Validation\Exceptions\ValidationException;

/**
 * 
 */
class ConfirmPasswordException extends ValidationException
{
	
	public static $defaultTemplates = [
       self::MODE_DEFAULT => [
           self::STANDARD => 'Password does not match with the New Password.',
       ],
	];
}

?>