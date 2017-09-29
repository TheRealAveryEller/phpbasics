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

    
    // explode(<%splitOn>, <thing to explode>)
    // will break up string at every instance of %splitOn and place the seperated sections
    // into an array
    // ... is splat operator. if you have array and pass it to function with this operator,
    // each item in the array will be converted into arguments
    // explode splits a string into an array, and ... turns those elements into arguments
    public function direct($uri, $requestType) {
        if(array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
            
        throw new Exception('No Route Defined');
    }

    protected function callAction($controller, $action) {
        $controller = new $controller;
        if(!method_exists($controller, $action)) {
            throw new Exception("{$controller} does not respond to the {$action} action");
        }
        return $controller->$action();
    }
}