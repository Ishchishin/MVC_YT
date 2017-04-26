<?php


class Router
{
    private $routes;

    public function _construct()
    {
        $routesPath=ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }
    public function run()
    {
        print_r($this->routes);
        echo 'Class Router, mmethod run';

    }
}