<?php 

namespace app\controllers;

class PageController extends AppController 
{
    public function indexAction()
    {
        $this->setMeta('Страница Page' ,'Описание страницы Page - indexAction','Ключевые слова для Page - indexAction');
    } 
    public function viewAction()
    {
        echo __METHOD__;
    } 
   
}