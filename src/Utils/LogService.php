<?php

namespace Javelin\Utils;

use Javelin\Domain\Service;
use Javelin\Utils\LogServiceInterface;
use Carbon\Carbon;

abstract class LogService extends Service implements LogServiceInterface
{
	// log levels

	private const LOG_LEVEL_EMERGENCY = 6;
	private const LOG_LEVEL_ALERT = 5;
	private const LOG_LEVEL_CRITICAL = 4;
	private const LOG_LEVEL_ERROR = 3;
	private const LOG_LEVEL_WARNING = 2;
	private const LOG_LEVEL_NOTICE = 1;
	private const LOG_LEVEL_INFO = 0;


	// constructor

	public function __construct()
	{
		//
	}

	/**
	* emergency() logs an emergency, indicating that the system
	* may be unusable. 
	* 
	* @param string $message
	* @param array $context
	*/

	public function emergency(string $message, array $context)
	{
		$message = "[" . Carbon::now() . "]: " . $message;
		$message .= "\nData: \n" . $this->serializeContext($context);
		$this->writeLog(self::LOG_LEVEL_EMERGENCY, $message);
	}

	/**
	* alert() logs an alert, indicating that action must be 
	* taken immediately. 
	* 
	* @param string $message
	* @param array $context
	*/

	public function alert(string $message, array $context)
	{
		$message = "[" . Carbon::now() . "]: " . $message;
		$message .= "\nData: \n" . $this->serializeContext($context);
		$this->writeLog(self::LOG_LEVEL_ALERT, $message);
	}

	/**
	* critical() logs a critical condition.
	* 
	* @param string $message
	* @param array $context
	*/

	public function critical(string $message, array $context)
	{
		$message = "[" . Carbon::now() . "]: " . $message;
		$message .= "\nData: \n" . $this->serializeContext($context);
		$this->writeLog(self::LOG_LEVEL_CRITICAL, $message);
	}


	/**
	* error() logs a runtime error, that needs no immediate action.
	* 
	* @param string $message
	* @param array $context
	*/

	public function error(string $message, array $context)
	{
		$message = "[" . Carbon::now() . "]: " . $message;
		$message .= "\nData: \n" . $this->serializeContext($context);
		$this->writeLog(self::LOG_LEVEL_ERROR, $message);
	}

	/**
	* warning() logs a warning, indicating that exceptional 
	* occurences that not exceptions
	* 
	* @param string $message
	* @param array $context
	*/

	public function warning(string $message, array $context)
	{
		$message = "[" . Carbon::now() . "]: " . $message;
		$message .= "\nData: \n" . $this->serializeContext($context);
		$this->writeLog(self::LOG_LEVEL_WARNING, $message);
	}

	/**
	* notice() logs a normal but significant event.
	* 
	* @param string $message
	* @param array $context
	*/

	public function notice(string $message, array $context)
	{
		$message = "[" . Carbon::now() . "]: " . $message;
		$message .= "\nData: \n" . $this->serializeContext($context);
		$this->writeLog(self::LOG_LEVEL_NORICE, $message);
	}

	/**
	* info() logs interesting events.
	* 
	* @param string $message
	* @param array $context
	*/

	public function info(string $message, array $context)
	{
		$message = "[" . Carbon::now() . "]: " . $message;
		$message .= "\nData: \n" . $this->serializeContext($context);
		$this->writeLog(self::LOG_LEVEL_INFO, $message);
	}

	/**
	* writeLog() writes the log entry. This method is to be
	* overriden to define infrastructure-specific logging 
	* mechanisms.
	*
	* @param int $level
	* @param string $message
	*/

	public abstract function writeLog(int $level, string $message);

	// helpers

	/**
	* converts an array $context into a string
	*/

	private function serializeContext(array $context): string
	{
		$serializedContext = "";

		if ($context)
		{
			foreach ($context as $entry)
			{
				$serializedContext .= (string)$entry . "\n";
			}
		}
		else
		{
			$serializedContext = "[Context Unavailable]";
		}

		return $serializeContext;
	}
}

?>