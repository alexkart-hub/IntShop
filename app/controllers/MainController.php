<?php 

namespace app\controllers;

// use ishop\App;

class MainController extends AppController 
{

    // public $layout = 'test';

    public function indexAction()
    {
        // $this -> layout = 'test';
        // echo __METHOD__;
        // $this->setMeta(App::$app->getProperty('shop_name') ,'Описание страницы Main - indexAction','Ключевые слова для Main - indexAction');
        $this->setMeta('Главная страница' ,'Описание страницы Main - indexAction','Ключевые слова для Main - indexAction');
        $this->set(['name' => "Александр", 'age' => 45, ]);
    }
}