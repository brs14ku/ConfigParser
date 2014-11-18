<?php

/**
 * Created by PhpStorm.
 * User: bschultz
 * Date: 11/18/2014
 * Time: 3:30 PM
 */
class ConfigParser
{
	public function __construct($file)
	{
		$this->read_file($file);
	}

	private function read_file($file)
	{
		$array = array();
		$openFile = fopen($file, "r") or die("Couldn't open $file");;
		if ($openFile) {
			while (($line = fgets($openFile)) !== false) {
				if (!strstr($line, '=')) {
				} else {
					$data = explode("=", $line);
					$key = trim($data[0]);
					$value = trim($data[1]);
					$array[$key] = $value;
				}
			}
			$this->set_types_and_properties($array);
			fclose($openFile);
		}
		return $array;
	}

	private function set_types_and_properties($array)
	{
		$booleanTrue = array('true', 'on', 'yes');
		$booleanFalse = array('false', 'off', 'no');
		foreach ($array as $variable => $value) {
			//Casting variables as their appropriate type
			if (is_numeric($value)) {
				$this->{$variable} = $value + 0;
			} elseif (in_array($value, $booleanTrue)) {
				$this->{$variable} = boolval(true);
			} elseif (in_array($value, $booleanFalse)) {
				$this->{$variable} = boolval(false);
			} else {
				$this->{$variable} = $value;
			}
		}
	}
}