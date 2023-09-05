<?php

namespace MF\Controller;

abstract class Action 
{

    protected $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    public function render($page, $layout = 'layout1')
    {
        $this->view->page = $page;
        require_once "../App/Views/$layout.phtml";
    }

    protected function _content()
    {
        $currentClass = str_replace("App\\Controllers\\", '', get_class($this));
        $currentClass = strtolower(str_replace('Controller', '', $currentClass));
        require_once "../App/Views/$currentClass/{$this->view->page}.phtml";
    }

}