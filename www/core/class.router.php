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



    public function get($pattern, $callback, $pattern_params = array())
    {
        $this->set('GET', $pattern, $callback, $pattern_params);
    }

    public function post($pattern, $callback, $pattern_params)
    {
        $this->set('POST', $pattern, $callback, $pattern_params);
    }

    private function set($type, $pattern, $callback, $pattern_params = array())
    {
        $pattern = $this->constructPuttern($pattern, $pattern_params);
        if (is_array($callback)) {
            if (!method_exists($callback[0], $callback[1])) {
                new Exception("Method $callback[1] not exists");
            }
        } else {
            new Exception("It's not array!");
        }
        $this->routes[$type][$pattern] = $callback;
    }

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
                $posable_parametr = array();
                foreach(array_slice($matches,1) as $value){
                    $posable_parametr[] = array_pop($value);
                }
                $e = new $callback[0]();
                call_user_func_array(array($e, $callback[1]), $posable_parametr);
// выходим из цикла
                break;
            }
            $matches = array();
        }
    }

    /**
     * @param $pattern
     * @param $pattern_params
     * @param $matches
     * @return mixed
     */
    private function constructPuttern($pattern, $pattern_params)
    {
        $pattern = str_replace('/', '\/', $pattern);
        //документация!!!!

        preg_match_all("/(?<=:)[a-zA-Z0-9]++/", $pattern, $matches);
        foreach ($matches[0] as $value) {
            if(array_key_exists($value, $pattern_params)) {
                $arg_rex_exp = $pattern_params[$value];
                $pattern = str_replace(":$value", "($arg_rex_exp)", $pattern);
            }
        }
        $pattern = "^$pattern$";
        return $pattern;
    }
}


///