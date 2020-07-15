<?php

abstract class Debug	{

	public static function log($data)	{
		echo '<script>';
		echo 'console.log('. json_encode( $data ) .')';
		echo '</script>';
	}

	public static function assert($expression, $value)	{

		if ($value)	{
			Debug::log("Assertion faild " . json_encode( $expression ) . " is not equal to " . $value);
		}

	}

}

?>