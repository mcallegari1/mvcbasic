<?php

namespace MF\Init;

abstract class Bootstrap 
{
    private $routes;

    abstract public function initRoutes();

    public function getRoutes()
    {
        return $this->routes;
    }

    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function run($url)
    {
        foreach ($this->getRoutes() as $key => $route){
            if($url == $route['route']){
                $class = "App\\Controllers\\" . ucfirst($route['controller']);

                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        }
    }

}