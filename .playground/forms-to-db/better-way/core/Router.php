<?php
class Router {
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file) {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller) {
        // Add new key to routes['GET'] that is set to uri,
        // set value of that key to $controller
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        // Add new key to routes['POST'] that is set to uri,
        // set value of that key to $controller
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType) {
        if(array_key_exists($uri, $this->routes[$requestType]))
            return $this->routes[$requestType][$uri];
        throw new Exception('No Route Defined');
    }
}