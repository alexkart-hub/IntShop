<?php

use ishop\App;
use RedBeanPHP\Logger\RDefault;

require_once dirname(__DIR__).'/config/init.php';
require_once LIBS.'/functions.php';
require_once CONF.'/routes.php';

new App;
// App::$app -> setProperty('Sancho','Panso');
// debug(App::$app->getProperties());


