<?php
class Router{
    protected $routes = [
        "GET"=>[],
        //''=>'PagesControllers@home'
        //''=>"controllers/IndexController.php"
        "POST"=>[]
    ];
    public static function load($filename){
        $router = new Router;
        require $filename;
        return $router;
    }
    public function register($routes){
        return $this->routes = $routes;
    }
    public function get($uri, $controller){

        return $this->routes["GET"][$uri] = $controller;
        // dd($this->routes["GET"][$uri]);
    }

    public function post($uri, $controller){
        return $this->routes["POST"][$uri] = $controller;
        // dd($this->routes["POST"][$uri]);
    }
    public function direct($uri, $method){
       
        if(!array_key_exists($uri,$this->routes[$method])){
             die("404 page");
        }
        $exploding = explode('@',$this->routes[$method][$uri]);

        $this->callMethod($exploding[0],$exploding[1]);
    }
    public function callMethod($class, $method){
        
        $class = new $class;
        return $class->$method();
    }
}



