<?php

namespace Inspekturapink\PhpMvc\App;

class Router
{
    private static array $routes = [];

    public static function add(string $http_method, string $path, string $controller, string $function) : void
    {
        self::$routes[] = [
            'http_method' => $http_method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    public static function run() : void
    {
        $path = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : '/';
        $method = $_SERVER['REQUEST_METHOD'];

        foreach(self::$routes as $route){
            if($route['path'] == $path && $route['http_method'] == $method){
                // $route['controller'] = Name der Klasse
                // Instanz der Klasse erstellen
                $controller = new $route['controller'];
                $function = $route['function'];
                $controller->$function();
                // echo "CONTROLLER: " . $route['controller'] . ", FUNCTION : " . $route['function'];
                return;
            }
        }

        http_response_code(404);
        echo "CONTROLLER NOT FOUND";
    }

}