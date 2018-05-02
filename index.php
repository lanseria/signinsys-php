<?php

if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

define('APP_DEBUG',True);

define('APP_PATH','./Application/');

require './ThinkPHP/ThinkPHP.php';

?>