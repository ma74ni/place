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
            case 'movieseries':
                $controller->load_view('movieseries');
                break;
            case 'usuarios':
                $controller->load_view('users');
                break;
            case 'status':
                if( !isset( $_POST['r'] ) )  $controller->load_view('status');
                else if( $_POST['r'] == 'status-edit' )  $controller->load_view('status-edit');
                else if( $_POST['r'] == 'status-delete' )  $controller->load_view('status-delete');
                else if( $_POST['r'] == 'status-add' )  $controller->load_view('status-add');
                break;
            
            case 'salir':
                $user_session = new SessionController();
                $user_session->logout();
                break;
            default:
                $controller->load_view('error404');
                break;
        }

    }
}