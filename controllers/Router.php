<?php
class Router{
    public $route;
    public function __construct($route){

        $this->route = isset($_GET['r']) ? $_GET['r'] : 'home';

        $controller = new ViewController();
        
        switch($this->route){
            case 'home':
                $controller->load_view('home');
                break;
            case 'products':
                $controller->load_view('products');
                break;
            default:
                $controller->load_view('error404');
                break;
        }

    }
}