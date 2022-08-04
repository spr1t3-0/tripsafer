<?php 
use \Bramus\Router\Router;

class Core {

    protected $Router;

    public function __construct() {
        $this->Router = new Router();

        $this->Router->get('/', function() {
            $this->call('Pages', 'index');
        });

      
        $this->Router->run();
    }

    private function call(string $controller, string $method, array $params = []) {
        $controller = ucfirst($controller);
        require_once(APP_ROOT . '/src/controllers/' . $controller . ".php");
        $instance = new $controller();
        return call_user_func_array([$instance, $method], $params);

        
    }

    public function validMethod(string $controller, string $method) {
        if(file_exists($f = APP_ROOT . '/src/controllers/' . ucfirst($controller) . ".php")) {
            require_once($f);
            $controller = ucfirst($controller);
            return method_exists((new $controller()), $method);
        } else {
            return false;
        }
    }



}