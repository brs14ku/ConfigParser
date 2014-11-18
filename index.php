<?php
/**
 * Created by PhpStorm.
 * User: bschultz
 * Date: 11/18/2014
 * Time: 3:30 PM
 */
require_once('ConfigParser.php');
$fileName = "testConfig.txt";
$config = new ConfigParser($fileName);
var_dump($config);

