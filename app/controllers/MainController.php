<?php 

namespace app\controllers;

// use ishop\App;

use ishop\Cache;
use \RedBeanPHP\R as R;

class MainController extends AppController 
{

    // public $layout = 'test';

    public function indexAction()
    {
        $posts = R::findAll("test");
        // $this -> layout = 'test';
        // echo __METHOD__;
        // $this->setMeta(App::$app->getProperty('shop_name') ,'Описание страницы Main - indexAction','Ключевые слова для Main - indexAction');
        $this->setMeta('Главная страница' ,'Описание страницы Main - indexAction','Ключевые слова для Main - indexAction');

        $name = 'Александр';
        $age = 45;
        $names = ['John','Peter','Mike'];

        $cache = Cache::instance();
        // $cache->delete('test');

        $data = $cache->get('test');
        if(!$data){
            $cache->set('test',$names);
        }
        debug($data);

        $this->set(compact('posts'));
    }
}