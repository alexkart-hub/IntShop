<?php

use ishop\App;
use ishop\Registry;

require_once dirname(__DIR__).'/config/init.php';
require_once LIBS.'/functions.php';

$app = new App;
$app::$app -> setProperty('Sancho','Panso');
// debug($app::$app->getProperties());

// throw new Exception('Страница не найдена',500);