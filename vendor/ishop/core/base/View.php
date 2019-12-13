<?php

namespace ishop\base;

use Exception;

class View
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $data = [];
    public $meta = [];
    public $layout;

    public function __construct($route, $layout = '', $view = '', $meta)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $view;
        $this->prefix = $route['prefix'];
        $this->meta = $meta;
        if ($layout === false) {
            $this->layout = $layout;
        } else {
            $this->layout = $layout ?: LAYOUT;
        }
    }

    public function render($data)
    {
        if(is_array($data)) extract($data);
        $viewFile = APP."/views/{$this->prefix}{$this->controller}/{$this->view}.php";
        if(is_file($viewFile)){
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
        } else {
            throw new Exception("Вид (view) {$viewFile} не найден", 500);
        }
        if(false !== $this -> layout){
            $layoutFile = APP."/views/layouts/{$this->layout}.php";
            if(is_file($layoutFile)){
                require_once $layoutFile;
            } else {
                throw new Exception("Шаблон (layout) {$this->layout} не найден", 500);
            }
        }
    }

    public function getMeta()
    {
        $textMeta = '';
        if(!empty($this->meta['title'])){
        $textMeta =  "<title>{$this->meta['title']}</title>\n\t";
        }
        if(!empty($this->meta['desc'])){
            $textMeta .="<meta name=\"description\" content=\"{$this->meta['desc']}\">\n\t";
        }
        if(!empty($this->meta['keywords'])){
            $textMeta .="<meta name=\"keywords\" content=\"{$this->meta['keywords']}\">\n\t";
        }
        return $textMeta;
    }

}
