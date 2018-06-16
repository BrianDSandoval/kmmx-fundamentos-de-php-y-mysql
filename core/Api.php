<?php
namespace core\Api;

class Api {
    private $routes = [];

    /**
     * Set a api route
     * @param string $uri
     * @param string $controller
     */
    public function setRoute(string $uri, string $controller)
    {
        $this->routes[$uri] = $controller;
    }

    public function exec(string $uri)
    {
        var_dump($uri); die();
    }
}
