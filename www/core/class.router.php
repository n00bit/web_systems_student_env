<?php

/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 12.11.2014
 * Time: 11:16
 */

/**
 *  Example routing
 *                                  nameController    action
 * $mux->post('/product/:id', ['ProductController','updateAction'] , [
 * 'require' => [ 'id' => '\d+', ],
 * 'default' => [ 'id' => '1', ]
 * **/
class Router
{

    private $routes = null;
    private static $_instance = null;

    private $input_classes = null;

    private function __construct()
    {
        $this->routes = array();
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Router();
        }
        return self::$_instance;
    }


    public function get($pattern, $callback, $pattern_params)
    {
        $ready_pattern = $pattern;
        var_dump($pattern_params);
        foreach($pattern_params as $value)
        {
            $ready_pattern = $ready_pattern.'\/'.$value;
            print "LOL!";
        }

//$ready_pattern = $pattern . '\/' . $pattern_params;
        $this->set('GET', $ready_pattern, $callback);
    }

//    public function get($pattern, $callback)
//    {
//        $ready_pattern = $pattern;
//        print $ready_pattern;
//        $this->set('GET', $ready_pattern, $callback);
//      }

    public function post($pattern, $callback, $pattern_params)
    {

        $ready_pattern = $pattern . '\/' . $pattern_params;
        $this->set('POST', $pattern, $callback);
    }

    private function set($type, $pattern, $callback)
    {
        if (is_array($callback)) {
            if (!method_exists($callback[0], $callback[1])) {
                //if(!function_exists($callback)){
                new Exception("Method $callback[1] not exists");
            }
        } else {
            new Exception("It's not array!");
        }
        $this->routes[$type][$pattern] = $callback;
    }

//    private function set($type, $pattern, $callback)
//    {

//        if (!function_exists($callback)) {
//           new Exception("Method $callback not exists");
//        }
//        $this->routes[$type][$pattern] = $callback;
//    }


    public function process($method, $uri)
    {
        if (in_array($method, array('GET', 'POST'))) {
            new Exception("Request method should be GET or POST");
        }

// Выполнение роутинга
// Используем роуты $routes['GET'] или $routes['POST']  в зависимости от метода HTTP.
        $active_routes = $this->routes[$method];
        //var_dump($this->routes);
// Для всех роутов
        foreach ($active_routes as $pattern => $callback) {
// Если REQUEST_URI соответствует шаблону - вызываем функцию
            if (preg_match_all("/$pattern/", $uri, $matches) !== 0) {
// вызываем callback

                $e = new $callback[0]();
                $e->$callback[1]();

// выходим из цикла
                break;
            }
            $matches = array();
        }
    }
}