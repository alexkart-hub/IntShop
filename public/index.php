<?php

use ishop\App;
use ishop\Registry;
use ishop\Router;

require_once dirname(__DIR__).'/config/init.php';
require_once LIBS.'/functions.php';
require_once CONF.'/routes.php';

$app = new App;
$app::$app -> setProperty('Sancho','Panso');
// debug($app::$app->getProperties());

