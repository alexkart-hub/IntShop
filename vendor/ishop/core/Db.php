<?php 

namespace ishop;

use Exception;
use ishop\base\Model;
use \RedBeanPHP\R as R;

class Db extends Model
{
    use TSingleton;

    protected function __construct()
    {
        $db = require_once CONF . '/config_db.php';
        class_alias('RedBeanPHP\R','R');
        R::setup($db['dsn'], $db['user'], $db['pass']);
        if(!R::testConnection()){
            new Exception("Нет соединения с БД",500);
        }
        R::freeze(true);
        if(DEBUG){
            R::debug(true,1);
        }
    }
}